@extends('layout')
@extends('essentials.cabecera')
@extends('essentials.navbar-top')
@extends('essentials.navbar')


    
@section('content')
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="true">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>

  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="2000">
      <img src="{{URL::asset('./img/portada/1.jpg')}}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
          <div class="d-flex h-100 align-items-center justify-content-center" style="position:relative;width:800px;height:60px; padding-bottom:20px; text-shadow: 0 0 3px #050404  , 0 0 5px #0000FF;">
            <h1 >Enfocate en tu negocio.</h1>
          </div>  

          <div class="d-flex h-100 align-items-center justify-content-center" style="position:relative;width:900px;height:60px; padding-bottom:200px; text-shadow: 0 0 3px #050404  , 0 0 5px #0000FF;">
            <h3>Nosotros nos encargamos de la gestión integral de comercio exterior.</h3>
         </div>          
      </div>
    </div>

    <div class="carousel-item" data-bs-interval="3000" >
      <img src="{{URL::asset('./img/portada/2.jpg')}}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
      <div class="d-flex h-100 align-items-center justify-content-center" style="position:relative;width:900px;height:60px; padding-bottom:20px; text-shadow: 0 0 3px #050404  , 0 0 5px #0000FF;">
            <h1>Eres pyme y quieres importar?.</h1>
          </div>  

          <div class="d-flex h-100 align-items-center justify-content-center" style="position:relative;width:900px;height:60px; padding-bottom:200px; text-shadow: 0 0 3px #050404  , 0 0 5px #0000FF;">
            <h3>Conversemos de tu negocio y deja en nuestras manos la gestión de la importación.</h3>
         </div>    
      </div>
    </div>

    <div class="carousel-item " data-bs-interval="3000" >
      <img src="{{URL::asset('./img/portada/3.jpg')}}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
      <div class="d-flex h-100 align-items-center justify-content-center" style="position:relative;width:900px;height:60px; padding-bottom:20px; text-shadow: 0 0 3px #050404  , 0 0 5px #0000FF;">
            <h1>Tu empresa necesita comenzar a importar? china? Europa? Usa?</h1>
          </div>  

          <div class="d-flex h-100 align-items-center justify-content-center" style="position:relative;width:900px;height:60px; padding-bottom:200px; text-shadow: 0 0 3px #050404  , 0 0 5px #0000FF;">
            <h3>Cuéntanos de tu proyecto. Nosotros te ayudamos a importar con éxito desde cualquier origen.</h3>
         </div>   
      </div>
    </div>

    <div class="carousel-item" data-bs-interval="2000" >
      <img src="{{URL::asset('./img/portada/5.jpg')}}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
      <div class="d-flex h-100 align-items-center justify-content-center" style="position:relative;width:900px;height:60px; padding-bottom:20px; text-shadow: 0 0 3px #050404  , 0 0 5px #0000FF;">
            <h1>El mejor amigo logístico de tu empresa.</h1>
          </div>  

          <div class="d-flex h-100 align-items-center justify-content-center" style="position:relative;width:900px;height:60px; padding-bottom:200px; text-shadow: 0 0 3px #050404  , 0 0 5px #0000FF;">
            <h3>Realizamos la Consolidación y Des-consolidación de tus contenedores.</h3>
          </div>
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


<!-- carrousel end -->
<!-- comienzo cajas  de servicios -->

<div class="barra-home animado fadeIn t-animated undefined t-default" id="Servicio" style="animation-duration: 1s; opacity: 1;">
				<a href="#" onclick="navServicios(this,1);" class="">
					<div class="imagen">
                    <img src="{{asset('/img/Iconos/4.png')}}" alt="" style= "width:80px; height:80px;">
					</div>
					<p>Transporte Internacional</p>
				</a>
				<a href="#" onclick="navServicios(this,2);">
					<div class="imagen">
						<img src="{{asset('/img/Iconos/1.png')}}" alt="" style= "width:80px; height:80px;">
					</div>
					<p>Transporte Nacional</p>
				</a>
				<a href="#" onclick="navServicios(this,3);">
					<div class="imagen">
						<img src="{{asset('/img/Iconos/8.png')}}" alt="" style= "width:80px; height:80px;">
					</div>
					<p>Seguros</p>
				</a>
				<a href="#" onclick="navServicios(this,4);">
					<div class="imagen">
                        <img src="{{asset('/img/Iconos/6.png')}}" alt="" style= "width:80px; height:80px;">
					</div>
					<p>Aduana</p>
				</a>
				<a href="#" onclick="navServicios(this,5);">
					<div class="imagen">
                         <img src="{{asset('/img/Iconos/5.png')}}" alt="" style= "width:80px; height:80px;">
					</div>
					<p>Asesoría en comercio exterior</p>
				</a>
				<a href="#" onclick="navServicios(this,6);" class="barra-activa">
					<div class="imagen">
                        <img src="{{asset('/img/Iconos/3.png')}}" alt="" style= "width:80px; height:80px;">
					</div>
					<p>Outsourcing de comercio exterior</p>
				</a>
				<a href="#" onclick="navServicios(this,7);">
					<div class="imagen">
                        <img src="{{asset('/img/Iconos/2.png')}}" alt="" style= "width:80px; height:80px;">
					</div>
					<p>Negociación con proveedores</p>
				</a>
				<a href="#" onclick="navServicios(this,8);">
					<div class="imagen">
                        <img src="{{asset('/img/Iconos/10.png')}}" alt="" style= "width:80px; height:80px;">
					</div>
					<p>Costeos de operaciones de importación</p>
				</a>
				<a href="#" onclick="navServicios(this,9);">
					<div class="imagen">
                    <img src="{{asset('/img/Iconos/11.png')}}" alt="" style= "width:80px; height:80px; padding-bottom:4px;">
					</div>
					<p>Partner Logísticol</p>
				</a>
</div>

  <!-- fin cajas de servicios -->
  <div data-anchor="Servicioss" class="section">
				<div class="fondo-body">
					<!-- INTERNACIONAL -->
					<section class="sec-1-home" style="display:grid;">
						<div class="texto animado fadeLeft undefined t-animated t-default" style="animation-duration: 1s; opacity: 1;">
							<h5>Transporte Internacional</h5>
							<p style="color:white ;">Logística</p>
						</div>
						<div class="texto animado fadeRight undefined t-animated t-default" style="animation-duration: 1s; opacity: 1;">
							<h5>01.</h5>
							<p></p><p class="fr-tag">Flete aéreo, marítimo y terrestre en origen, para cargas generales y sobredimensionadas.&nbsp;</p><p></p>
						</div>
					</section>
					<!-- NACIONAL -->
					<section class="sec-1-home">
						<div class="texto animado fadeLeft undefined t-animated t-default" style="animation-duration: 1s; opacity: 1;">
							<h5>Transporte Nacional</h5>
							<p style="color:white ;">Logística</p>
						</div>
						<div class="texto animado fadeRight undefined t-animated t-default" style="animation-duration: 1s; opacity: 1;">
							<h5>02.</h5>
							<p></p><p class="fr-tag"><span lang="ES-MX">Flete terrestre local para carga general y sobredimensionada de Arica a Punta Arenas. Gestionamos tu carga hasta tu bodega.</span></p><p></p>
						</div>
					</section>
					<!-- SEGUROS -->
					<section class="sec-1-home">
						<div class="texto animado fadeLeft undefined t-animated t-default" style="animation-duration: 1s; opacity: 1;">
							<h5>Seguros</h5>
							<p style="color:white ;">Riesgo</p>
						</div>
						<div class="texto animado fadeRight undefined t-animated t-default" style="animation-duration: 1s; opacity: 1;">
							<h5>03.</h5>
							<p></p><p class="fr-tag">Intermediamos seguros de carga puerto a puerto con cobertura para todo riesgo. Tu carga viajara segura con nuestro servicio.</p><p></p>
						</div>
					</section>
					<!-- ADUANA -->
					<section class="sec-1-home">
						<div class="texto animado fadeLeft undefined t-animated t-default" style="animation-duration: 1s; opacity: 1;">
							<h5>Aduana</h5>
							<p style="color:white ;">Normativa</p>
						</div>
						<div class="texto animado fadeRight undefined t-animated t-default" style="animation-duration: 1s; opacity: 1;">
							<h5>04.</h5>
							<p>Tenemos una alianza estratégica con una Agencia de Aduana con más de 50 años de experiencia y con sucursales en Santiago, Valparaíso, San Antonio y Los Andes.</p>
						</div>
					</section>
					<!-- ASESORIA -->
					<section class="sec-1-home">
						<div class="texto animado fadeLeft undefined t-animated t-default" style="animation-duration: 1s; opacity: 1;">
							<h5>Asesoría en comercio exterior</h5>
							<p style="color:white ;">Acompañamiento</p>
						</div>
						<div class="texto animado fadeRight undefined t-animated t-default" style="animation-duration: 1s; opacity: 1;">
							<h5>05.</h5>
							<p></p><p class="fr-tag">Orientamos en materias técnicas y operativas para todo el proceso de importación, tales como normativa aduanera, tratados internacionales, riesgos operacionales y costos directos.</p><p></p>
						</div>
					</section>

					
					<!-- OUTSOURCING -->
					<section class="sec-1-home">
						<div class="texto animado fadeLeft undefined t-animated t-default" style="animation-duration: 1s; opacity: 1;">
							<h5>Outsourcing de comercio exterior</h5>
							<p style="color:white ;">Servicio Integral</p>
						</div>
						<div class="texto animado fadeRight undefined t-animated t-default" style="animation-duration: 1s; opacity: 1;">
							<h5>06.</h5>
							<p>Nos transformamos en tu área de comercio exterior y nos presentamos con tus proveedores como integrante del equipo de tu empresa. Es un servicio transversal, gestionado desde la OC hasta la recepción en bodega.</p>
						</div>
					</section>
					<!-- NEGOCIACIÓN -->
					<section class="sec-1-home">
						<div class="texto animado fadeLeft undefined t-animated t-default" style="animation-duration: 1s; opacity: 1;">
							<h5>Negociación con proveedores</h5>
							<p></p>
						</div>
						<div class="texto animado fadeRight undefined t-animated t-default" style="animation-duration: 1s; opacity: 1;">
							<h5>07.</h5>
							<p></p><p class="fr-tag">En caso que lo requieras&nbsp;y nos des tu aprobación, negociamos con tu proveedor las mejores condiciones comerciales de compra, sin limitación de idioma.&nbsp;</p><p></p>
						</div>
					</section>
					<!-- COSTOS -->
					<section class="sec-1-home">
						<div class="texto animado fadeLeft undefined t-animated t-default" style="animation-duration: 1s; opacity: 1;">
							<h5>Costeos de operaciones de importación</h5>
							<p style="color:white ;">Costos Directos</p>
						</div>
						<div class="texto animado fadeRight undefined t-animated t-default" style="animation-duration: 1s; opacity: 1;">
							<h5>08.</h5>
							<p>Costeamos y cuadramos tu operación de importación, entregándote el costo unitario de cada producto para que sea ingresado a tu inventario y contabilidad.</p>
						</div>
					</section>
					<!-- LOGISTICA -->
					<section class="sec-1-home">
						<div class="texto animado fadeLeft undefined t-animated t-default" style="animation-duration: 1s; opacity: 1;">
							<h5>Partner logístico</h5>
							<p style="color:white ;">Partnership</p>
						</div>
						<div class="texto animado fadeRight undefined t-animated t-default" style="animation-duration: 1s; opacity: 1;">
							<h5>09.</h5>
							<p></p><p class="fr-tag">En Elevenship nos enfocamos en otorgar un servicio integral de comercio exterior, que aborde todas las etapas del proceso de importación, con&nbsp;soluciones personalizadas que resuelvan las necesidades específicas del negocio.&nbsp;Nos transformamos en tu partner logístico.</p><p></p>
						</div>
					</section>
		
				</div>
			</div>

<!-- video -->
<br>
<div class="container text-center">
  <div class="row">
		<div class="col">
			<h2 style="font-family:calibri";>MENTORÍA:</h2>
			<p>Confeccionamos una estrategia del proceso, que permita una evolución positiva en el crecimiento del área de importaciones y exportaciones, tomando un plan que segmentaremos en pequeños hitos los cuales darán el resultado de optimización de la operación.</p>
		</div>
		<div class="col">
		<video id="videors" controls poster="vistaprevia.jpg">
			<source src="{{asset('/video/T-Internacional.mp4')}}" type="video/mp4">
		</video>
		</div>
  </div>
</div>

<br>
<div class="container-export-import">
	  <div class="row" style="background:radial-gradient( #9e9999,  #080808)">
			<div class="col" id="boxes">
				<h2 style="text-align:center; font-family: 'calibri'; text-shadow:0 0 3px #000000, 0 0 5px #2b87b1">Comercio internacional:</h2>
				<p style= "text-align:center;text-shadow:0 0 3px #000000, 0 0 5px #2b87b1;"> -Asesoría en procesos de documentación. <br> -Mejoramos el costo de la carga y el flete Reducción en los gastos con organismos estatales. <br> -Asesoría en cláusulas de ventas. </p>
			</div>
			<div class="col" id= "boxes1">
				<h2 style="text-align:center; font-family: 'calibri'; text-shadow:0 0 3px #000000, 0 0 5px #2b87b1; ">Exportacion:</h2>
				<p style= "text-align:center; text-shadow:0 0 3px #000000, 0 0 5px #2b87b1; "> Asesoría en el pago de todos los gastos y negociación de condiciones de pago.
												Capacidad de Negociar Seguro de carga, fletes nacionales e internacionales.
												Proceso de retiro de mercancías pago a proveedores y entrega a bodegas de clientes.
												Asesoría en cláusulas de compra  </p>

			</div>

			<div class="col" id= "boxes2">
				<h2 style="text-align:center; font-family:'calibri'; text-shadow:0 0 3px #000000, 0 0 5px #2b87b1;">Importacion:</h2>
				<p style= "text-align:center; text-shadow:0 0 3px #000000, 0 0 5px #2b87b1;"> Asesoría en el pago de todos los gastos y negociación de condiciones de pago.
												Capacidad de Negociar Seguro de carga, fletes nacionales e internacionales.
												Proceso de retiro de mercancías pago a proveedores y entrega a bodegas de clientes.
												Asesoría en cláusulas de compra   </p>

			</div>

			<div class="col" id= "boxes3">
				<h2 style="text-align:center; font-family:'calibri'; text-shadow:0 0 3px #000000, 0 0 5px #2b87b1;">Aduanas:</h2>
				<p style= "text-align:center; text-shadow:0 0 3px #000000, 0 0 5px #2b87b1;"> Nuestra empresa ha establecido una alianza estratégica con Agencia de Aduanas certificadas, de tal manera de optimizar los servicios de internación o exportación aduanera de las mercaderías. Como prestador de servicios de Tucomexlatam, se califica caso a caso, según índices de calidad.</p>

			</div>
  		</div>
</div>
<br>

<div class="container">
	<div class="row">
		<div class="col" id="nosotrors">
			<h2 style="text-align:center; font-family: 'calibri'">Nuestro team tiene:</h2>
			<p style= "text-align:center;"> Algunos casos de éxito
											Llevamos más de 15 años en el rubro haciendo asesoría dentro de la línea de algunas transnacionales las cuales pasamos a mencionar a continuación, déjanos asesorarte en tu proceso.</p>
			<img src="{{asset('/img/Iconos/liderazgo.png')}}" alt="porque" style="align-items:flex-start; width:30%; height:30% ;margin-left: 170px;margin-top:30px">
		</div>

		<div class="col" id="nosotrors">
			<h2 style="text-align:center; font-family: 'calibri'">¿Porque escogernos?:</h2>
			<p style= "text-align:center;"> <p>Al tener al socio estratégico en tu operación puedes mejorar varios ítems, los cuales en un periodo de tiempo bajaran tus gastos y aumentaran tu productividad, así te enfocas en tus clientes y tu operación</p>
			<img src="{{asset('/img/Iconos/team-building.png')}}" alt="porque" style="align-items:flex-start; width:30%; height:30% ;margin-left: 170px">
		</div>
	</div>
</div>
<br>

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


@stop

@extends('essentials.footer')