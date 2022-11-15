@extends('layout')
@extends('essentials.cabecera')
@extends('essentials.navbar-top')
@extends('essentials.navbar')


    
@section('content')
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>

  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="">
      <img src="{{URL::asset('./img/portada/1.jpg')}}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h1>Enfocate en tu negocio.</h1>
        <h3>Nosotros nos encargamos de la gestión integral de comercio exterior.</h3>
      </div>
    </div>

    <div class="carousel-item" data-bs-interval="" >
      <img src="{{URL::asset('./img/portada/2.jpg')}}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h1>Eres pyme y quieres importar?</h1>
        <h3>Conversemos de tu negocio y deja en nuestras manos la gestión de la importación .</h3>
      </div>
    </div>

    <div class="carousel-item " data-bs-interval="" >
      <img src="{{URL::asset('./img/portada/3.jpg')}}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h1>Tu empresa necesita comenzar a importar? china? Europa? Usa?  </h1>
        <h3>Cuéntanos de tu proyecto. Nosotros te ayudamos a importar con éxito desde cualquier origen.</h3>
      </div>
    </div>

    <div class="carousel-item" data-bs-interval="" >
      <img src="{{URL::asset('./img/portada/5.jpg')}}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h1 id="title-carrousel">El mejor amigo logístico de tu empresa.</h1>
        <h3>Realizamos la Consolidación y Des-consolidación de tus contenedores.</h3>
      </div>
    </div>

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
<br>





@stop

@extends('essentials.footer')