@extends('layouts.app')

@section('content')

        <div class="p-3 jumbotron  mb-2 bg-white text-dark">
                <h1>Sign Up</h1>
                <small class=""><a href="/login">Or Login</a> </small>
              </div>
                
        <div class="container-fluid">
            <form action="" method="POST" class="">
            <div class="form-group">
                <label for="uname">Name</label>
                <input type="text" id="uname" class="form-control" placeholder="Name">
            </div>
            <div class="form-group">
                <label for="uname">Email Address</label>
                <input type="text" id="uname" class="form-control" placeholder="Email Address">
            </div>
            <div class="form-group">
                <label for="uname">Phone Number</label>
                <input type="text" id="uname" class="form-control" placeholder="Phone Number">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control" placeholder="Password">
            </div>
            <div class="form-group">
                <label for="password">Confirm Password</label>
                <input type="password" name="password" class="form-control" placeholder="Password">
            </div>

                <input type="submit" name="Login" class="btn btn-outline-dark btn-large">
            </form>
        </div>
@endsection