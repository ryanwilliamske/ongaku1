@extends('layouts.app')

@section('content')
<?php
use App\Catalogue;
use App\Company;
$company = Company::all();
// $product = Catalogue;
?>
<h1 class="text-center">{{$product->productName}}</h1>

    <div class="jumbotron container">
        <div class="row">
            <div class="col-xl-5">
                <img src="storage/images/{{$product->dp}}" style="width:300px; height:300px;">
            </div>
            <div class="col-xl-5">
                <h2>Description</h2>
                <p onclick="function readMore() {

                    }
                    readMore()"></p>
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
        <?php
//            $newproduct = Catalogue::where('')->get();
        ?>
        <div class="container">
            <h1>You may also like:</h1>
            <div class="row">
                <div class="text-center">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <img width="140" height="140" class="rounded-circle"
                                 alt="Generic placeholder image"
                                 src="storage/images{{$product->dp}}">

                            <h5 class="card-title">{{$product->productName}}</h5>
                        <!-- <small>{{$product->prodDescription}}</small> -->
                            <a href="/product/{{$product->productId}}" class="btn btn-dark">View More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php

    ?>
<div class="container">
    <h1>{!! 'Similar products by ',$company[$product->companyId]['companyName'],null!!}</h1>
    <div class="row">
        <div class="text-center">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <img width="140" height="140" class="rounded-circle"
                         alt="Generic placeholder image"
                         src="storage/images{{$product->dp}}">

                    <h5 class="card-title">{{$product->productName}}</h5>
                <!-- <small>{{$product->prodDescription}}</small> -->
                    <a href="/product/{{$product->productId}}" class="btn btn-dark">View More</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
