@extends('layouts.app')
@section('content')
<?php
use App\Catalogue;
use App\Company;
use Illuminate\Support\Facades\URL;
$company = Company::all();
// $product = Catalogue;
?>
<h1 class="text-center">{{$product->productName}}</h1>
    <div class="jumbotron container">
        <div class="row">
            <div class="col-xl-5">
                <img src="{{\Illuminate\Support\Facades\URL::asset("storage/images/{$product->dp}")}}" style="width:300px; height:300px;">
            </div>
            <div class="col-xl-5">
                <h2>Description</h2>
                <p class="col-xs-6">{{$product->prodDescription}}</p>
                <p>Price: ${{$product->productPrice}}</p>
                @foreach($company as $ca)
                    @if(($product->companyId)==($ca->companyId))
                        <p><em>By: <a href="/company/{{$ca->companyId}}">{{$ca->companyName}}</a></em></p>
                    @endif
                @endforeach
                <a href="/add-to-cart/{{$product->productId}}" style="width: 100%" class="btn btn-lg btn-dark">Add to Cart</a>
            </div>
        </div>
    </div>


@endsection
