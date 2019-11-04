<?php
?>
@extends('layouts.app')
@section('content')

    <div class="jumbotron ">

        @if(count($catalogue)>1)
            <h1> {{count($catalogue)}} result(s) loaded when searching for '{{ request()->input('q') }}' </h1>
            <div class="container">
                <div class="row">
            @foreach($catalogue as $cat)
                        <div class="card col-sm">
                                <img class="card-img" src="storage/images/{{$cat->dp}}" alt="productImage">
                                <div class="">
                                    <h5 class="card-title"><a href="/product/{{$cat->productId}}">{{$cat->productName}}</a></h5>
                                </div>
                        </div>
            @endforeach
                </div>
            </div>
        @else
            <h1>We're sorry, there aren't any results for {{request()->input('q')}}</h1>
            <p>Please check your query and try again</p>
        @endif

        <p></p>

    </div>

@endsection
