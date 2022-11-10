@extends('layout')
@extends('essentials.cabecera')
@extends('essentials.navbar-top')
@extends('essentials.navbar')

@section('content')





<br>
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
  
<div data-anchor="Servicioss" class="section">
				<div class="fondo-body">
					<!-- INTERNACIONAL -->
					<section class="sec-1-home" style="display: none;">
						<div class="texto animado fadeLeft undefined t-animated t-default" style="animation-duration: 1s; opacity: 1;">
							<h5>Transporte Internacional</h5>
							<p>Logística</p>
						</div>
						<div class="texto animado fadeRight undefined t-animated t-default" style="animation-duration: 1s; opacity: 1;">
							<h5>01.</h5>
							<p></p><p class="fr-tag">Flete aéreo, marítimo y terrestre en origen, para cargas generales y sobredimensionadas.&nbsp;</p><p></p>
						</div>
					</section>
					<!-- NACIONAL -->
					<section class="sec-1-home" style="display: grid;">
						<div class="texto animado fadeLeft undefined t-animated t-default" style="animation-duration: 1s; opacity: 1;">
							<h5>Transporte Nacional</h5>
							<p>Logística</p>
						</div>
						<div class="texto animado fadeRight undefined t-animated t-default" style="animation-duration: 1s; opacity: 1;">
							<h5>02.</h5>
							<p></p><p class="fr-tag"><span lang="ES-MX">Flete terrestre local para carga general y sobredimensionada de Arica a Punta Arenas. Gestionamos tu carga hasta tu bodega.</span></p><p></p>
						</div>
					</section>
					<!-- SEGUROS -->
					<section class="sec-1-home" style="display: none;">
						<div class="texto animado fadeLeft undefined t-animated t-default" style="animation-duration: 1s; opacity: 1;">
							<h5>Seguros</h5>
							<p>Riesgo</p>
						</div>
						<div class="texto animado fadeRight undefined t-animated t-default" style="animation-duration: 1s; opacity: 1;">
							<h5>03.</h5>
							<p></p><p class="fr-tag">Intermediamos seguros de carga puerto a puerto con cobertura para todo riesgo. Tu carga viajara segura con nuestro servicio.</p><p></p>
						</div>
					</section>
					<!-- ADUANA -->
					<section class="sec-1-home" style="display: none;">
						<div class="texto animado fadeLeft undefined t-animated t-default" style="animation-duration: 1s; opacity: 1;">
							<h5>Aduana</h5>
							<p>Normativa</p>
						</div>
						<div class="texto animado fadeRight undefined t-animated t-default" style="animation-duration: 1s; opacity: 1;">
							<h5>04.</h5>
							<p>Tenemos una alianza estratégica con una Agencia de Aduana con más de 50 años de experiencia y con sucursales en Santiago, Valparaíso, San Antonio y Los Andes.</p>
						</div>
					</section>
					<!-- ASESORIA -->
					<section class="sec-1-home" style="display: none;">
						<div class="texto animado fadeLeft undefined t-animated t-default" style="animation-duration: 1s; opacity: 1;">
							<h5>Asesoría en comercio exterior</h5>
							<p>Acompañamiento</p>
						</div>
						<div class="texto animado fadeRight undefined t-animated t-default" style="animation-duration: 1s; opacity: 1;">
							<h5>05.</h5>
							<p></p><p class="fr-tag">Orientamos en materias técnicas y operativas para todo el proceso de importación, tales como normativa aduanera, tratados internacionales, riesgos operacionales y costos directos.</p><p></p>
						</div>
					</section>
					<!-- OUTSOURCING -->
					<section class="sec-1-home" style="display: none;">
						<div class="texto animado fadeLeft undefined t-animated t-default" style="animation-duration: 1s; opacity: 1;">
							<h5>Outsourcing de comercio exterior</h5>
							<p>Servicio Integral</p>
						</div>
						<div class="texto animado fadeRight undefined t-animated t-default" style="animation-duration: 1s; opacity: 1;">
							<h5>06.</h5>
							<p>Nos transformamos en tu área de comercio exterior y nos presentamos con tus proveedores como integrante del equipo de tu empresa. Es un servicio transversal, gestionado desde la OC hasta la recepción en bodega.</p>
						</div>
					</section>
					<!-- NEGOCIACIÓN -->
					<section class="sec-1-home" style="display: none;">
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
					<section class="sec-1-home" style="display: none;">
						<div class="texto animado fadeLeft undefined t-animated t-default" style="animation-duration: 1s; opacity: 1;">
							<h5>Costeos de operaciones de importación</h5>
							<p>Costos Directos</p>
						</div>
						<div class="texto animado fadeRight undefined t-animated t-default" style="animation-duration: 1s; opacity: 1;">
							<h5>08.</h5>
							<p>Costeamos y cuadramos tu operación de importación, entregándote el costo unitario de cada producto para que sea ingresado a tu inventario y contabilidad.</p>
						</div>
					</section>
					<!-- LOGISTICA -->
					<section class="sec-1-home" style="display: none;">
						<div class="texto animado fadeLeft undefined t-animated t-default" style="animation-duration: 1s; opacity: 1;">
							<h5>Partner logístico</h5>
							<p>Partnership</p>
						</div>
						<div class="texto animado fadeRight undefined t-animated t-default" style="animation-duration: 1s; opacity: 1;">
							<h5>09.</h5>
							<p></p><p class="fr-tag">En Elevenship nos enfocamos en otorgar un servicio integral de comercio exterior, que aborde todas las etapas del proceso de importación, con&nbsp;soluciones personalizadas que resuelvan las necesidades específicas del negocio.&nbsp;Nos transformamos en tu partner logístico.</p><p></p>
						</div>
					</section>
		
					
				</div>
			</div>
@endsection


@extends('essentials.footer')