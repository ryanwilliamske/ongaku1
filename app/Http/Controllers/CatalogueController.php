<?php

namespace App\Http\Controllers;

use App\Company;
use Illuminate\Http\Request;
use App\Catalogue;
use Symfony\Component\Console\Input\Input;

class CatalogueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
        //
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

    public function search(Request $request){
//        $this->validate($request,[
//            'q'=>'',
//        ]);
        $search = $request->input('q');
        $catalogue = Catalogue::where('productName','like','%'. $search .'%')->
        get();
        return view('products.searchview')->with('catalogue',$catalogue);

//       $catalogue = Catalogue::where('productName','LIKE'.'%'.$search.'%')->get();
//        return $search;
//        if(count($catalogue)>0){
//           return view('products.searchview')->with('product',$catalogue)->withQuery($search);
////                return $search.$catalogue;
//        }else{
//         return view('products.searchview')->with('alert','Not found, try again');
//            return "Na";
//        }
        //    $search = Input::get('search');
//    $catalogue = \App\Catalogue::where('productName','LIKE','%'.$search.'%')->get();
//    if(count($catalogue)>0){
//        return view('products.searchview')->withDetails($catalogue)->withQuery($search);
//    }else{
//        return view('products.searchview')->with('alert','Not found, try again');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
