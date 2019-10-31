<?php
?>
@extends('layouts.app')
@section('content')

    <div class="jumbotron ">

        @if(count($catalogue)>1)
            <h1> {{count($catalogue)}}Results for '{{ request()->input('q') }}' </h1>
            @foreach($catalogue as $cat)

                <div class="card">
{{--                    <img src="public/images/{{$cat->dp}}" alt="productImage">--}}
                    <div class="card-body">
                        <h5 class="card-title"><a href="/product/{{$cat->productId}}">{{$cat->productName}}</a></h5>
                    </div>
                </div>
            @endforeach
        @else
            <h1>We're sorry, there aren't any results for {{request()->input('q')}}</h1>
            <p>Please check your query and try again</p>
        @endif

        <p></p>

    </div>

@endsection
