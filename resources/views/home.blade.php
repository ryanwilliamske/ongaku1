@extends('layouts.app')

@section('content')
@include('inc.carousel')
@include('inc.showcase')
<div class="container marketing">

    <div class="container">
        <div class="row">

        </div>
        <div>

        </div>
        <div>

        </div>

    </div>
    <div class="container">
        <h1>Various items...</h1>
        <div class="row">
            {{--            <h1>Various products.....</h1>--}}
            @include('inc.product_card')
        </div>
    </div>

    <div class="container">
        <h1>Newest</h1>
        <div class="row">
            {{--            <h1>Various products.....</h1>--}}
            @include('inc.product_card')
        </div>
    </div>


</div>
@endsection
