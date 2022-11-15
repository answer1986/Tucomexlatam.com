@extends('layout')
@extends('essentials.cabecera')
@extends('essentials.navbar-top')
@extends('essentials.navbar')

@section('content')
<div class="container" id="cabecera_pagina">
    <div class="container-fluid" id="contenedor-imagen">
        <div class="container" id="cabecera-preguntas">
            <img src="{{URL::asset('./img/fotoportada-preguntas/preguntas.jpg')}}" class="d-block w-100" alt="...">
    
        </div>
    </div>

</div>

<img src="{{URL::asset('./img/fotoportada-preguntas/preguntas.jpg')}}" class="d-block w-100" alt="...">


<div class="container">
parte2
</div>

<div class="container">
parte 3
</div>
@endsection


@extends('essentials.footer')