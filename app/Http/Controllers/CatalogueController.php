<?php

namespace App\Http\Controllers;

use App\Company;
use Illuminate\Http\Request;
use App\Catalogue;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Spatie\Searchable\Search;
use Symfony\Component\Console\Input\Input;

class CatalogueController extends Controller
{
    public function index()
    {
        $products = Catalogue::all();
        $company=Company::pluck('companyName','companyId');
        return view('products.product_page',compact('products','company'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'product'=>'required',
            'price'=>'required',
            'description'=>'required',
            'dp'=>'nullable|max:199999'
        ]);
//        return 123;
        if($request->hasFile('dp')){
            $filenameExt = $request->file('dp')->getClientOriginalName();
            $filename = pathinfo($filenameExt,PATHINFO_FILENAME);
            $ext = $request->file('dp')->getClientOriginalExtension();
            $fileToStore = $filename.'_'.time().'.'.$ext;

            $path = $request->file('dp')->storeAs('public/images',$fileToStore);
        }else{
            $fileToStore = 'noimage.jpg';
        }
        $catalogue = new Catalogue;
        $catalogue->productName = $request->input('product');
        $catalogue->productPrice = $request->input('price');
        $catalogue->dp = $fileToStore;
        $catalogue->companyId = $request->input('id');
        $catalogue->prodDescription = $request->input('description');

        $catalogue->save();
        return redirect('/companies')->with('success','Your product is now live for sale');
    }

    public function deleteFromCart(Request $request){
        if($request->id){
            $cart = session()->get('cart');
            if(isset($cart[$request->id])){
                unset($cart[$request->id]);
                session()->put('cart',$cart);
            }
            session()->flash('success','Product removed successfully');
            return view('checkout');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Catalogue::find($id);
        return view('products.product_page')->with('product',$product);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    public function addToCart($id)
    {
        if(Auth::guest()){
            return view('auth.login')->with('error','You must be logged in!');
        }else{
            $product = Catalogue::find($id);
            if (!$product) {
                abort(404);
            }
            $cart = session()->get('cart');
            if (!$cart) {
                $cart = [
                    $id => [
                        "name" => $product->productName,
                        "quantity" => 1,
                        "price" => $product->productPrice,
                    ]
                ];
                session()->put('cart', $cart);
                return redirect()->back()->with('success', 'Product added successfully');
            }
            if (isset($cart[$id])) {
                $cart[$id]['quantity']++;
                session()->put('cart', $cart);
                return redirect()->back()->with('success', 'Product added successfully');
            }
            $cart[$id] = [
                "name" => $product->productName,
                "quantity" => 1,
                "price" => $product->productPrice
            ];
            session()->put('cart', $cart);
            return redirect()->back()->with('success', 'Product added successfully');
        }
    }

    public function search(Request $request){
        $search = $request->input('q');
        $catalogue = DB::table('catalogues')->where('productName','like','%'.$search.'%')
                                                ->get();
        return view('products.searchview')->with('catalogue',$catalogue);

    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cat = Catalogue::where('productId',$id);
        if($cat != null){
            $cat->delete();
            return view('companies.home')->with('success','Deleted!');
        }else{
            return view('companies.home')->with('alert','Not deleted');
        }
    }
}
