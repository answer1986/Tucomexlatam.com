@extends('layouts.layout')
@extends('essentials.cabecera')
@extends('essentials.navbar-top')
@extends('essentials.navbar')



@section('content')
<div class="presentacion">

	<img src="{{asset('/img/portada/world.gif')}}" width="100%" height="30%">
	<h1 id="headline-7-1544" class="ct-headline h1-banner pushDescubrelo" data-offcanvas-push="#-off-canvas-500-1544" style="--offcanvas-push:600px; --offcanvas-push-duration:0.5s;">Servicios a un click<br><span id="span-17-1544" class="ct-span">de distancia</span></h1>
	<a class="cajax1">Exportar</a>
	<a class="caja2">Importar </a>
	<a class="caja3">Asesorias</a>



	<p class="item-1">Asesoría en procesos de documentación.</p>

	<p class="item-2">Mejoramos el costo de la carga y el flete.</p>

	<p class="item-3">Reducción en los gastos con organismos estatales.</p>



</div>

<!-- fin prsentacion web-->

<div class=" container-fluid" id="experts">

	<div id="particles-js"></div>

	<h2 id="expertors">Que nos hace expertos</h2>
	<p id="expertorsp">Mejoramos la adaptabilidad de tu operación a las nuevas normas y los cambios constantes de este mercado.
		Contamos con una red de partners a en los países con más crecimiento en el área.
		Conocemos los mercados así optimizamos tu operación.
		Por eso y más confía en nosotros.</p>
</div>
<button class="btn btn-primary" id="btnrs">Ver más</button>
<!--procesos -->
<div class="procesos">



	<img src="{{asset('/img/Imagen-fondo/procesos.gif')}}" class="procesos_img" width="100%" height="60%">


	<h1 id="titleventajas">Nuestras ventajas</h1>


	<div class="row">
		<div class="col" id="icono1">
			<div class="icono1">
				<img src="{{asset('/img/Iconos/3.png')}}" width="30%" height="20%">
				<h4>Realizamos Asesorias</h4>
			</div>
		</div>

		<div class="col" id="icono2">
			<div class="icono2">
				<img src="{{asset ('/img/Iconos/4.png')}}" width="30%" height="20%">
				<h4>Evaluamos las posibilidades</h4>
			</div>
		</div>

		<div class="col" id="icono3">
			<div class="icono3">
				<img src="{{asset ('/img/Iconos/10.png')}}" width="30%" height="25%">
				<h4>Tenemos los precios mas competitivos</h4>
			</div>
		</div>

		<div class="col" id="parrafo">
			<p>La empresa tiene como propósito apoyar el emprendimiento en la región, llevando a los clientes a obtener el mayor beneficio ante este proceso de importación y exportación. Estamos para ayudarte</p>
		</div>

		<div class="col" id="btn5">
			<button class="btn btn-primary" id="btn5">Ver más</button>
		</div>
	</div>
</div>

<!--end procesos -->


<!-- tucomex es -->

<br>
<div class="container">

	<div class="row">



	


		<div class="col" id= "textors">
			<h2 class="wave">¿PORQUE ESCOGERNOS? </h2>
			<br>
			<h4>Al tener al socio estratégico en tu operación puedes mejorar varios ítems, los cuales en un periodo de tiempo bajaran tus gastos y aumentaran tu productividad, así te enfocas en tus clientes y tu operación diaria.</h4>
		</div>


		<div class="col" id= "videors">

		<video width="100%" height="100%" controls>
			<source src="{{asset('/video/T-Internacional.mp4')}}" type="video/mp4">
			

		</div>


	</div>

</div>

<br>
<!-- fin tucomex es -->


<hr style="height: 20px; color:#2b87b1; background-color:#2b87b1; whidt:80%">
<!--contactenos -->
<div class="container">

	<div class="hero">
		<h1 class="textors">CONTÁCTANOS</h1>
	</div>
	<div class="mb-3" id="contacto1">
		<label for="exampleFormControlInput1" class="form-label">Tu correo</label>
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