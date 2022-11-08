@extends('layout')
@extends('essentials.cabecera')
@extends('essentials.navbar-top')
@extends('essentials.navbar')

@section('content')

<div class="row align-items-start" id="iconors">
    <div class="col"id="imageners">
      <img src="{{ asset('img/Iconos/icono1.jpg') }}" alt="imagen1" id="imageners" style="width:100%; height:100%; margin-top: 50px">
    </div>
    <div class="col" id="imageners">
      <img src="{{ asset('img/Iconos/icono2.jpg') }}" alt="imagen2" id="imageners" style="width:100%; height:100%; margin-top: 50px">
    </div>
    <div class="col" id="imageners">
      <img src="{{ asset('img/Iconos/icono3.jpg') }}" alt="imagen3" id="imageners" style="width:100%; height:100%; margin-top: 50px">
    </div>
    <div class="col" id="imageners">
      <img src="{{ asset('img/Iconos/icono9.jpg') }}" alt="imagen4" id="imageners" style="width:100%; height:100%; margin-top: 50px">
    </div>
    <div class="col" id="imageners">
        <img src="{{ asset('img/Iconos/icono5.jpg') }}" alt="imagen5" id="imageners" style="width:100%; height:100%; margin-top: 50px">
    </div>
    <div class="col"id="imageners">
        <img src="{{ asset('img/Iconos/icono6.jpg') }}" alt="imagen5" id="imageners" style="width:100%; height:100%; margin-top: 50px">
    </div>
    <div class="col" id="imageners">
        <img src="{{ asset('img/Iconos/icono7.jpg') }}" alt="imagen5" id="imageners" style="width:100%; height:100%; margin-top: 50px">
        <a>holi</a>
    </div>
  </div>

  <br>
@endsection


@extends('essentials.footer')