



@section('navbar')
<header id="header">
    <nav  class="navbar navbar-expand-lg bg-dark" id="navegadora">
        <div id="test" class="container-fluid-arv" >
            
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <img src="{{ asset('img/logo.gif') }}" alt="logo" id="logo" style="width:80px; height:80px; margin-right:180px">

                <ul class="navbar-nav">
                    <li class="nav-item">
                    <a id="text-navbar" class="nav-link active m-2" aria-current="page" href="{{url('/')}}">INICIO</a>
                    </li>
                    <li class="nav-item">
                    <a id="text-navbar" class="nav-link active  m-2" aria-current="page" href="{{url('/quines_somos')}}">QUIENES SOMOS</a>
                    </li>
                    <li class="nav-item">
                    <a id="text-navbar" class="nav-link  m-2 " href="{{url('/preguntas')}}">PREGUNTAS FRECUENTES</a>
                    </li>
                    <li class="nav-item dropdown" id="boton-servicio" >
                    <a href="javascript:void(0)" class="dropbtn">SERVICIOS</a>
                    <div class="dropdown-content">
                    <a id="text-navbar" href="{{url('/importacion')}}">IMPORTACION</a>
                    <a id="text-navbar" href="{{url('/exportacion')}}">EXPORTACION</a>
                    <a id="text-navbar" href="{{url('/asesorias')}}">ASESORIA</a>
                    </div>
                    <li class="nav-item" id="boton-contacto">
                    <a  id="text-navbar" class="nav-link" href="{{url('/contacto')}}">CONTACTO</a>
                    </li>
                    </li>
                    
                </ul>
            </div>
        </div>
    </nav>
        
</header>
@endsection