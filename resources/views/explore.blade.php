<?php
use App\Company;
use App\Catalogue;
$company = Company::all();
$catalogue = Catalogue::all();
?>
@extends('layouts.app')
@section('content')
{{--    Each company--}}

<div class="container card">
    <div class="row">
    @foreach($catalogue as $cat)
            <div class="col-sm-6 card">
                <div class="card-header">
                    <h1>{{$cat->productName}}</h1>
                        <span class="badge badge-secondary badge-pill">${{$cat->productPrice}}</span>
                </div>
                <div class="card-body">
                    <img src="/storage/images/{{$cat->dp}}" style="width: 100%; height: 100%">
                </div>
                <a href="/product/{{$cat->productId}}" class="button btn-dark btn-sm text-center">View More</a>
                <br>
                <a href="/add-to-cart/{{$cat->productId}}" class="button btn-dark btn-sm text-center">Add to cart</a>
            </div>

    @endforeach
    </div>

</div>



@endsection
