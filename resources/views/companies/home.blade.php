@extends('layouts.companyapp')

@section('content')

    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column" style="background-url('images/background1.jpg');">
        <main class="inner cover" role="main">
            <h1 class="cover-heading"></h1>
            <p class="lead"></p>
            <div class="card text-center form-group" style="width:36rem;">
                <div class="card-header">
                    Link
                </div>
                <div class="card-body">
                    {!! Form::open(['url'=>'#','method'=>'post']) !!}

                    <input class="form-control" name="companyLink" placeholder="Place the link here">
                    <small>Make sure it's yours</small>
                    <br>
                    <button class="btn btn-lg btn-secondary" type="submit">Claim your Profile</button>
                    {!! Form::close() !!}
                </div>

            </div>


        </main>

        <footer class="mastfoot mt-auto">
            <div class="inner">
                <p>Cover template for <a href="https://getbootstrap.com/">Bootstrap</a>, by <a href="https://twitter.com/mdo">@mdo</a>.</p>
            </div>
        </footer>
    </div>


    </body>

@endsection
