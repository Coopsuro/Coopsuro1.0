<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @yield('seo')
    <link rel="stylesheet" href="{{asset('sitioweb/css/style.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>



</head>

<body class="body">
<header>
    <div class="Logo">
        <img src="{{asset('imagen/'.$empresa->logo)}}" height="130px" width="150px" alt="Logo">
    </div>
    <nav class="nav">
        <button class="Cerrar"><i class="fa-solid fa-bars fa-beat-fade"></i></button>
        <ul>
            <li><a href="/index.html"><i class="fa-solid fa-house fa-flip"></i>Inicio</a></li>
            <li><a href="#items"><i class="fa-solid fa-screwdriver-wrench fa-flip"></i> Servicios</a></li>
            <li><a href="#Contactos"><i class="fa-solid fa-address-book fa-flip"></i> Contactos</a></li>
        </ul>
    </nav>
    <button class="abrir"><i class="fa-solid fa-bars fa-beat-fade"></i></button>
</header>
<script src="{{asset('js/script.js')}}"></script>
<main>
 
    @yield('content')

</main>
<footer>
  <section class="redes-Sociales">
    <section class="info">
      <h2>Redes Sociales</h2>
      <ul>
        @foreach($redes as $item)
        <li> <a href="{{$item->link}}"><i class="{{$item->icon}}"></i> {{$item->title}}</a></li>
        <li> <a href=""><i class="fa-brands fa-instagram"></i> Instagram</a></li>
        <li> <a href=""><i class="fa-brands fa-whatsapp"></i> Whatsapp</a></li>
        @endforeach
      </ul>
    </section>
    <section class="info">
      <ul>
        <h2 id="Contactos"> Contactos</h2>
        <li><a href=""><i class="fa-solid fa-phone"></i> 099999999</a></li>
        <li> <a href=""><i class="fa-regular fa-envelope"></i> CoperativaSurco@gmail.com</a></li>
      </ul>
    </section>
    <section class="info">
      <div>
        <h2><i class="fa-solid fa-location-dot"></i> Geocalizacion</h2>
        <iframe src="{{$empresa->georeferencia}}"
      </div>
    </section>
  </section>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>