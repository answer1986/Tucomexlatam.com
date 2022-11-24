@extends('layouts.layout')
@extends('essentials.cabecera')
@extends('essentials.navbar-top')
@extends('essentials.navbar')


    
@section('content')
<div class="presentacion">

		<img src="{{asset('/img/portada/world.gif')}}" width="100%" height="30%" >
		<h1 id="headline-7-1544" class="ct-headline h1-banner pushDescubrelo" data-offcanvas-push="#-off-canvas-500-1544" style="--offcanvas-push:600px; --offcanvas-push-duration:0.5s;">Servicios a un click<br><span id="span-17-1544" class="ct-span">de distancia</span></h1>
	<a class="cajax1">Exportar</a>
	<a class="caja2">Importar </a>
	<a class="caja3">Asesorias</a>
</div>

<div class=" container-fluid" id="experts">

	<div id="particles-js"></div>

<h2 id="expertors">Que nos hace expertos</h2>
<p id="expertorsp">Mejoramos la adaptabilidad de tu operación a las nuevas normas y los cambios constantes de este mercado.
Contamos con una red de partners a en los países con más crecimiento en el área.
Conocemos los mercados así optimizamos tu operación.
Por eso y más confía en nosotros.</p>
</div>



<div class="container" >

<div class = "hero">
        <h1 class="textors">CONTÁCTANOS</h1>
    </div>
<div class="mb-3" id="contacto1">
  <label for="exampleFormControlInput1" class="form-label" >Tu correo</label>
  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
</div>
<div class="mb-3" id="contacto1">
  <label for="exampleFormControlTextarea1" class="form-label">Tus comentarios</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
</div>
<button type="button" class="btn btn-primary">Enviar</button>

</div>

<div class=" container-fluid" id="sugerencia de contacto">

	<div id="particles-js"></div>


</div>

@stop

@extends('essentials.footer')