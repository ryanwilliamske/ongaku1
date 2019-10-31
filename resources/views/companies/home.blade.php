<?php
use Illuminate\Support\Facades\Auth;
use App\Company;
use App\Catalogue;
if (Auth::check()){
    $user = Auth::user();
    $company = Company::all();
    $catalogue = Catalogue::all();
}

?>
@extends('layouts.companyapp')
@section('content')

    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column" style="background-url('images/background1.jpg');">
        <main class="inner cover container" role="main">
            <h1 class="cover-heading"> Hello {{$user->name}} </h1>
            <p class="lead">Your items</p>
            <div class="container">
            @foreach($company as $ca)
                @if(($ca->id) == $user->id)
                    @foreach($catalogue as $cat)
                        @if(($cat->companyId) == ($ca->companyId))
                    <div class="row">
                        <div class="card col-sm" style="width: 18rem;">
                            <div class="card-body">
                            <img width="100" height="100" class="rounded-circle" 
                                alt="Generic placeholder image" 
                                src="storage/images/{{$cat->dp}}">
                                <h5 class="card-title">{{$cat->productName}}</h5>
                                <a href="/product/{{$cat->productId}}" class="btn btn-dark">View as Buyer</a>
                                <a href="/delete-item/{{$cat->productId}}" style="color:red;">Delete</a>
                            </div>
                        </div>
                    </div>
                    @else
                    <p class="lead">You have no items on your catalogue. Why don't you <a href="/companies/sell">start selling?</a></p>
                  
                    @endif
                    @endforeach
 
                    @endif
                @endforeach
                </div>


        </main>


    </div>


    </body>

@endsection
