@extends('layouts.app')

@section('content')

<div class="container marketing">
        <!-- @include('inc.spotlight') -->
        <!-- Three columns of text below the carousel -->
        <div class="row">
          <div class="col-lg-4">
            <img width="140" height="140" class="rounded-circle" alt="Generic placeholder image" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==">
            <h2>Company 1</h2>
            <p>Check out Company 1 and their products</p>
            <p><a class="btn btn-secondary" role="button" href="#">View details »</a></p>
          </div>
          <div class="col-lg-4">
            <img width="140" height="140" class="rounded-circle" alt="Generic placeholder image" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==">
            <h2>Company 2</h2>
            <p>Company 2 is selling product X. Check it out<p><a class="btn btn-secondary" role="button" href="#">View details »</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img width="140" height="140" class="rounded-circle" alt="Generic placeholder image" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==">
            <h2>Company 3</h2>
            <p>Newest on Ongaku! Check out their guitars<p><a class="btn btn-secondary" role="button" href="#">View details »</a></p>
          </div>
        </div>
@endsection
