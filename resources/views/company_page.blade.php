<?php
use App\Catalogue;
use Illuminate\Support\Facades\URL;
use App\Company;
$catalogue = Catalogue::all();
//$company = Company::all();
?>
@extends('layouts.app')
@section('content')
    <div>
       <h1 class="header-top"></h1>
    </div>
    <div class="container">
                @foreach($catalogue as $cat)
                    @if(($cat->companyId) == ($company->companyId))
                        <div class="row">
                            <div class="card col-sm-3" style="width: 18rem;">
                                <div class="card-body">
                                    <img
                                        alt="Image of {{$cat->productName}}"
                                        width="100" height="100" class="rounded-circle"
                                        src="{{\Illuminate\Support\Facades\URL::asset("storage/images/{$cat->dp}")}}">
                                    <h5 class="card-title">{{$cat->productName}}</h5>
                                </div>
                            </div>
                        </div>
                    @else

                    @endif
                @endforeach

    </div>
@endsection
