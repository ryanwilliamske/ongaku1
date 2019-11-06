<?php
use Illuminate\Support\Facades\Auth;

?>
@extends('layouts.app')

@section('content')
@include('inc.carousel')
@if(\Illuminate\Support\Facades\Auth::check())
    @include('inc.showcase')
@endif

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
        <h1>Newest</h1>
        <div class="row">
            @include('inc.product_card_new')
        </div>
    </div>


</div>
@endsection
