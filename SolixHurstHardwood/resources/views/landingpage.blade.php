@extends('layouts.main')
@section('content')
    <style>
     .navbar {
      background-color: #fff;
      border: 1px solid #ddd;
    }
    .navbar .row {
      display: flex;
    }
    .navbar .row > div {
      flex: 1;
      text-align: center;
      cursor: pointer;
      font-weight: bold;
      font-size: 18px;
      padding: 0px 30px;
      transition: background-color 0.3s;
    }
    .navbar .row > div:hover, .navbar .row > div.active {
      background-color: #008BAE;
      color: white;
    }  
      

 
    </style>

 
<div class="content-wrapper">
    <section class="content">
    <div class="content-header">

        <nav class="navbar">
            <div class="row">
              <div class="col-md-2">Unfinished Hardwood</div>
              <div class="col-md-2">Prefinished Hardwood</div>
              <div class="col-md-2">Hardwood Brands</div>
              <div class="col-md-2">Luxury Vinyl & Laminate</div>
              <div class="col-md-2">Stair Treads & Riser</div>
              <div class="col-md-2">Contract Specials</div>
            </div>    
          </nav>  
          
          <script>
            const navItems = document.querySelectorAll('.navbar .row > div');
          
            navItems.forEach(item => {
              item.addEventListener('click', function() {
                navItems.forEach(item => item.classList.remove('active'));
                this.classList.add('active');
              });
            });
          </script>
{{-- image carousel --}}
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="7"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="8"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img  class="d-block w-100" src="{{ asset('images/canadian-hardwoods-hero-hurst-hardwoods.png') }}" alt="First slide">
      </div>
      <div class="carousel-item">
        <img  class="d-block w-100" src="{{ asset('images/homestead-hickory-collection-hero-banner.png') }}" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="{{ asset('images/hurst-hardwoods-wholesale-wood-flooring-hero.png') }}" alt="Third slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="{{ asset('images/logo.png') }}" alt="Fourth slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="{{ asset('images/logo.png') }}" alt="Fifth slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="{{ asset('images/logo.png') }}" alt="Sixth slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="{{ asset('images/logo.png') }}" alt="Seventh slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="{{ asset('images/logo.png') }}" alt="Eighth slide">
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
</section>
</div>
@endsection
