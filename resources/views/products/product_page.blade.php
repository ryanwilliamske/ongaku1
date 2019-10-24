@extends('layouts.app')

@section('content')
<?php
use App\Catalogue;
// $product = Catalogue;
?>
<h1 class="text-center">{{$product->productName}}</h1>
    <div class="jumbotron text-center">
    <img src="" alt="Image of {{$product->productName}}" style="width:300px; height:300px;">
        <p>{{$product->prodDescription}}</p>
        <a href="/add-to-cart/{{$product->productId}}" class="btn btn-dark">Add to Cart</a>
    </div>
@endsection