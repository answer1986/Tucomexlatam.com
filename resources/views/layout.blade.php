<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta name="keywords" content="comercio intenacional en chile, importacion, exportacion en chile,agente de aduana en chile, como exportar en chile, partidas arancelarias en chile, aduana en chile, tratados de libre comercio con chile, certificacion de origen en chile, como certificar un producto en chile, requisitos para importar en chile,costos de una importacion en chile, tasa de interes de una importacion en chile, como liberar productos en puerto en chile, desaduanar en chile, empresas importadoras en chile, transporte internacional en chile, transporte nacional en chile, flete aereo en chile, flete maritimo en chile, flete terrestre en chile, flete cargas sobredimensionadas, flete local para carga general, gestion de carga en chile, cobertura fletes internacionales en chile, seguro para importaciones en chile, seguro para cargas generales en chile, coberturas internacionales en chile, adunas en chile, agencias de aduana en chile, asesoria en comercio internacional, asesoria en comercio exterior, asesoria en comex, como importar en chile, como exportar en chile, Comercio internacional en chile, importación, exportación en chile, agente de aduana en chile, como exportar en chile, partidas arancelarias en chile, aduana en chile, tratados de libre comercio con chile, certificación de origen en chile, como certificar un producto en chile, requisitos para importar en chile, costos de una importación en chile, tasa de interes de una importación en chile, como liberar productos en puerto en chile, des aduanar en chile, empresas importadoras en chile, transporte internacional en chile, trasporte nacional en chile, flete aéreo en chile, flete marítimo en chile, flete terrestre en chile, flete cargas sobredimensionadas, flete local para carga general, gestión de carga en chile, cobertura fletes internacionales en chile, seguro para importaciones en chile, seguro para cargas generales en chile, coberturas internacionales en chile, adunas en chile, agencias de aduana en chile, asesoría en comercio internacional, asesoría en comercio exterior, asesoría en comex, como importar en chile, como exportar en chile, "/>
            <!-- CSS only -->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

            <link type="text/css" href="{{asset('./css/hojastylo.css') }}" rel="stylesheet">
            <link rel="stylesheet" href="{{asset ('./css/intlTelInput.css')}}">
            <link rel="stylesheet" href="{{asset ('./css/t-scroll.min.css')}}">
            <link rel="stylesheet" href="{{asset ('./css/styloso.css')}}">
            <title>Tucomexlatam.com</title>

            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
            <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Open+Sans&display=swap" rel="stylesheet">
        </head>

<body>
        @yield('navbar-top')
        @yield('navbar')
        @yield('content')
        @yield('footer')
</body>
            <script src="js/carrousel.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            <script src="./js/intlTelInput.js"></script>
            <script src="./js/utils.js"></script>
            <script src="./js/bootstrap.js"></script>
            <script src="./js/parallax.min.js"></script>
            <script src="./js/funciones.js"></script>
            <script src="./js/animado.js"></script>
            <script src="./js/t-scroll.min.js"></script>
            <script src="https://www.google.com/recaptcha/enterprise.js?render=6Le5B_giAAAAADZqRxpLi3_0txtYAbLKq-Wn4UEx"></script>
            <script src="www.google.com/recaptcha/api.js" async defer></script>



            <script>
                var input =  document.querySelector("#phone");
                window.intlTelInput(input, {});
            </script>
                        <script>
                Tu.tScroll({

                't-element': '.animado',

                't-duration': 1

                });

                $('.parallax').paroller({

                factor: 0.3,            // multiplier for scrolling speed and offset

                type: 'background',     // background, foreground

                direction: 'vertical' // vertical, horizontal, TODO: diagonal

                });



                /* Loader */

                // Animate loader off screen

                $(".se-pre-con").fadeOut("slow");;



                /* Fin Loader*/

                $(function() {

                $(window).scroll(function() {

                if ($(window).scrollTop() > 10) {

                    $("header").addClass("fijo");
                    $(".navbar").addClass("fijo");

                    $("body").addClass("paddingTop");

                    $(".der-car").addClass("fijo");

                } else {

                    $("header").removeClass("fijo");
                    $(".navbar").removeClass("fijo");

                    $("body").removeClass("paddingTop");

                    $(".der-car").removeClass("fijo");

                    }

                });

                });

                document.querySelectorAll('a[href^="#"]').forEach(anchor => {

                anchor.addEventListener('click', function (e) {

                    e.preventDefault();

                    document.querySelector(this.getAttribute('href')).scrollIntoView({

                        behavior: 'smooth',

                        inline:'center',


                    });
                


                });

                });

                $(document).on('click', '.dropdown-menu', function (e) {

                e.stopPropagation();

                });

                $(function(){ 

                var navMain = $("#bs-example-navbar-collapse-1");

                navMain.on("click", "a", null, function () {

                    navMain.collapse('hide');

                });

                });

            </script>

<script type="text/javascript">
		$(document).ready(function(){
			document.querySelectorAll('.nombre-navegacion')[0].classList.add('nav-header-activo');
		});
        $("#owl1").owlCarousel({
    
        autoPlay: 9000, //Set AutoPlay to 3 seconds
    
        itemsDesktop : false,
        itemsDesktopSmall : false,
        itemsTablet: false,
        items : 1,
		stagePadding: 0,
		autoWidth:true,
        navigation: true,
            responsiveClass: true,
            navigationText : ['<span class="carousel-control-next-icon" aria-hidden="true"><img src="img/arrow-prev.svg" width="60" height="auto" alt="Anterior"></span>','<span class="carousel-control-next-icon" aria-hidden="true"><img src="img/arrow-next.svg" width="60" height="auto" alt="Anterior"></span>']
        });

		function navServicios(elemento,info) {
			var a = document.querySelectorAll('.barra-home a');
			$('.barra-home a').removeClass('barra-activa');
			
			$(elemento).addClass("barra-activa");
			$('.sec-1-home').css("display","none");
			$('.sec-1-home:nth-child('+info+')').css("display","grid");
			if(screen.width <= 728)
			{
				$('html, body').animate({
                    scrollTop: $(".fondo-body").offset().top-200
                }, 1000);
			}
		}
		function ocultarNavbar(elemento,posicion) 
		{
			$('.nombre-navegacion').each(function(){
				$(this).removeClass('nav-header-activo');
			});
			var navegacion = document.querySelectorAll('.nombre-navegacion');
			for(var i = 0; i < navegacion.length;i++)
			{
				if(i == posicion){
					$(elemento).addClass('nav-header-activo');
				}
			}
			$(".navbar-collapse").removeClass("show");

		}
    </script>

</html>