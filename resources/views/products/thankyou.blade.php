<?php
use Illuminate\Support\Facades\Auth;
use App\User;
$user = Auth::user();
?>

@extends('layouts.app')
@section('content')
<div class="jumbotron container">
    <div class="row">

        <div class="col-xl-5">
            <h2>Thank you for shopping</h2>
            <small>An email has been sent to {{$user->email}} about how you'll receive your products</small>
            <a href="" style="width: 100%" class="btn btn-lg btn-dark">Explore more</a>
        </div>
    </div>

</div>

@endsection
