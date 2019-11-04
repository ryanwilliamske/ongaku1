<?php
use Illuminate\Support\Facades\Auth;
?>

<header>
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      @if((Auth::check())==false)
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      @endif
    </ol>
    <div class="carousel-inner" role="listbox">
      <!-- Slide One - Set the background image for this slide in the line below -->
      <div class="carousel-item active" style="background-image: url('images/guitar1.jpg')">
        <div class="carousel-caption d-none d-md-block">
          <h2 class="display-4">Welcome</h2>
          <p class="lead">Scroll down to view products</p>
        </div>
      </div>
      <!-- Slide Two - Set the background image for this slide in the line below -->
      <div class="carousel-item" style="background-image: url('images/dj1.jpg')">
        <div class="carousel-caption d-none d-md-block">
          <h2 class="display-4">Great Products</h2>
          <p class="lead">From well-known companies such as Ableton!</p>
        </div>
      </div>
      <!-- Slide Three - Set the background image for this slide in the line below -->
      @if((Auth::check())==false)
      <div class="carousel-item" style="background-image: url('images/studio1.jpg')">
        <div class="carousel-caption d-none d-md-block">
          <h2 class="display-4"><a href="{{ route('register') }}">Join now</a>!</h2>
        </div>
      </div>
      @endif
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
</header>
