@extends('layouts.app')

@section('content')
<div class="bs-example">

        <div class="p-3 jumbotron  mb-2 bg-white text-dark">
                <h1>Login</h1>
                <small class=""><a href="/signup">Or Sign Up</a> </small>
              </div>
                
        <div class="container-fluid">
            <form action="" method="POST" class="">
            <div class="form-group">
                <label for="uname">Name</label>
                <input type="text" id="uname" class="form-control" placeholder="Username or Email">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control" placeholder="Password">
            </div>

                <input type="submit" name="Login" class="btn btn-outline-dark btn-large">
            </form>
        </div>
@endsection