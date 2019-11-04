<?php
use Illuminate\Support\Facades\Auth;
use App\Company;
use App\Catalogue;
use App\Order;
$user = Auth::user();
$order = Order::all();
$catalogue = Catalogue::all();
$company = Company::all();
?>

@extends('layouts.app')
@section('content')
    <div class="container card">
        <p class="lead display-1">{{$user->name}}</p>
            @if(($user->role_id) == 3)
                @foreach($company as $co)
                    @if($co->id == $user->id)
                        <p class="display-6"><em>Admin of {{$co->companyName}}</em></p>
                    @endif
                @endforeach
                <p><a href="/companies" target="_blank">View Company side</a></p>
            @endif
    </div>

    <table class="table">
        <thead>
        <th>Product name</th>
        </thead>
<h1 class="text-center">Purchase History</h1>
        @foreach($order as $ord)
            @if(($ord->id) == ($user->id))
                @foreach($catalogue as $cat)
                    @if(($ord->productId) ==($cat->productId))
                        <tr>
                            <td>{{$cat->productName}}</td>
                        </tr>
                    @endif
                @endforeach
            @endif
        @endforeach
    </table>
@endsection
