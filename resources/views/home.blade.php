@extends('layouts.app')

@section('content')
<body class="">
        <div class="bs-example">
                <nav class="navbar navbar-expand-md navbar-dark bg-dark">
                    <a href="#" class="navbar-brand">Ongaku</a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
            
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <div class="navbar-nav">
                            <a href="#" class="nav-item nav-link active">Home</a>
                            <a href="#" class="nav-item nav-link">About</a>
                        </div>
                        <form class="form-inline ml-auto">
                            <input type="text" class="form-control mr-sm-2" placeholder="Search">
                            <button type="submit" class="btn btn-outline-light">Search</button>
                        </form>
                    </div>
                </nav>
            </div>

        <div class="card card-image" id="spotlight" style="background-image: url(guitar2.jpg); height:766px;">


            <div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4">
                <div>
                    <h3 class="card-title pt-6" style="font-size: 64px"><strong>Spotlight</strong></h3>
                </div>
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="..." alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="bs-example">
                    <img src="" class="rounded-circle" alt="Circular Image">
                </div>
        
        </div>
@endsection