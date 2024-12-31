@extends('layouts.index')

@section('seo')
<title>{{$seo->title}}</title> 
<meta name="description" content="{{$seo->description}}">
<meta name="keywords" content="{{$seo->keywords}}">

@endsection
@section('content')
<section class="carrusel">
        <div id="carouselExampleCaptions" class="carousel slide">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              @foreach($inicio as $item)
              <div class="carousel-item {{$item->class}}">
                <img src="{{asset('imagen/'.$item->image)}}" height="550px" width="550px" class="d-block w-100"  alt="{{$item->title}}">
                <div class="carousel-caption d-none d-md-block">
                  <h5>{{$item->title}}</h5>
                </div>
              </div>
              @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
    </section>
       <section class="contenido-mv">
        <section class="mision">
          <h2><i class="fa-solid fa-chart-simple fa-flip"></i> Mision </h2>
          <p>{{$Mision->name}}</p>
        </section>
      <section class="vision">
        <h2> <i class="fa-solid fa-arrow-trend-up fa-flip"></i>Vision</h2>
        <p>{{$Vision->name}}</p>
      </section>
       </section>
       <section class="Titulo">

        <h2>Nuestros Servicios</h2>

      </section>
      
      <section class="contenido1">
      <div>
          @foreach($servicios as $item)
          <div>
            <div>
              <img src="{{asset('imagen/'.$item->image)}}" alt="">
            </div>
            <h3>{{$item->title}}</h3>
          </div>
          @endforeach
        </div>

  </section>
  </section>
    
@endsection