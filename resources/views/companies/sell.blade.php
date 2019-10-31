<?php
//use App\
use Illuminate\Support\Facades\Auth;
use App\Company;
$user = Auth::user();
$comp = Company::all();
?>
@extends('layouts.companyapp')
@section('content')
    <div class="form-group" style="padding-left: 20%; padding-right: 20%">
        {!! Form::open(['action'=>'CatalogueController@store','method'=>'post', 'enctype'=>'multipart/form-data']) !!}
        {{ csrf_field() }}
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="product">Product</label>
                <input type="text" class="form-control" id="inputEmail4" name="product" placeholder="Product Name">
            </div>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea rows="4" cols="50" class="form-control" placeholder="Type your product description here..." name="description">

            </textarea>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputCity">Product Image</label>
                <input type="file" class="form-control" id="image">
            </div>
            @foreach($comp as $c)
                @if(($c->id) == $user->id)
                    <input type="hidden" name="id" value="{{$c->companyId}}">
                @endif
            @endforeach
            <div class="form-group col-md-2">
                <label for="price">Price</label>
                <input type="text" name="price"class="form-control" id="price">
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Upload</button>

        {!! Form::close() !!}
    </div>



@endsection


