@extends('layouts.app')

@section('content')
<div class="bs-example">
                    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
                        <a href="#" class="navbar-brand">Ongaku</a>
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                
                        <div class="collapse navbar-collapse" id="navbarCollapse">
                            <div class="navbar-nav">
                                <a href="land/index.html" class="nav-item nav-link active">Home</a>
                                <!-- <a href="#" class="nav-item nav-link">About</a> -->
                            </div>

                        </div>
                    </nav>
                </div>
        <div class="p-3 jumbotron  mb-2 bg-white text-dark">
                <h1>Sign Up</h1>
                <small class=""><a href="#">Or Login</a> </small>
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