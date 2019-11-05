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
    @foreach($company as $co)
        <div class="col-sm-6">

            @foreach($catalogue as $cat)
                @if(($cat->companyId) == ($co->companyId))
                    <div class="card">
                        <div class="card-header">
                            <h1>{{$cat->productName}}</h1>
                        </div>
                        <div class="card-body">
                            <img src="/storage/images/{{$cat->dp}}" style="width: 100%; height: 100%">
                        </div>
                    </div>
                @endif
            @endforeach
            <a href="/product/{{$cat->productId}}" class="button btn-dark btn-sm">View More</a>
        </div>
    @endforeach
    </div>

</div>



@endsection
