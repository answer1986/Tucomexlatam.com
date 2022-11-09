@extends('layout')
@extends('essentials.cabecera')
@extends('essentials.navbar-top')
@extends('essentials.navbar')

@section('content')
<br>
<div class="container" id="containers">
    <div class="row" id="rowrs">
        <div class="col" id="imageners">
            <div class="card text-center" id="cartars">
            <div class="card-body" id="cardbody">
                <img src="{{asset('img/Iconos/1.png')}}" class="card-img-top" alt="...">
                <a id="textors" >Transporte Nacional</a>
            </div>
            </div>
        </div>

        <div class="col" id="imageners">   
            <div class="card text-center" id="cartars">
            <div class="card-body" id="cardbody">
                <img src="{{asset('img/Iconos/2.png')}}" class="card-img-top" alt="...">
                <a id="textors">Outsourcing en comercio exterior</a>
            </div>
            </div>
        </div>


        <div class="col" id="imageners"> 
            <div class="card text-center" id="cartars">
            <div class="card-body" id="cardbody">
                <img src="{{asset('img/Iconos/3.png')}}" class="card-img-top" alt="...">
                <a id="textors">Negociacion proveedores</a>
            </div>
            </div>
        </div>   

        <div class="col" id="imageners"> 
            <div class="card text-center" id="cartars">
            <div class="card-body"id="cardbody">
                <img src="{{asset('img/Iconos/4.png')}}" class="card-img-top" alt="...">
                <a id="textors">Transporte internacional</a>
            </div>
            </div>
        </div>   

        <div class="col" id="imageners"> 
            <div class="card text-center" id="cartars">
            <div class="card-body" id="cardbody">
                <img src="{{asset('img/Iconos/5.png')}}" class="card-img-top" alt="...">
                <a id="textors">Asesoria comercio exterior</a>
            </div>
            </div>
        </div>


        <div class="col" id="imageners">     
            <div class="card text-center" id="cartars">
            <div class="card-body" id="cardbody">
                <img src="{{asset('img/Iconos/6.png')}}" class="card-img-top" alt="...">
                <a id="textors">Aduana</a>
            </div>
            </div>
        </div>    

        <div class="col" id="imageners">     
            <div class="card text-center" id="cartars">
            <div class="card-body" id="cardbody">
                <img src="{{asset('img/Iconos/7.png')}}" class="card-img-top" alt="...">
                <a id="textors">Logistica</a>
            </div>
            </div>
        </div>

        <div class="col" id="imageners">     
            <div class="card text-center" id="cartars">
            <div class="card-body" id="cardbody">
                <img src="{{asset('img/Iconos/8.png')}}" class="card-img-top" alt="...">
                <a id="textors">Seguros</a>
            </div>
            </div>
        </div>

    </div>
</div>
<br>







  
@endsection


@extends('essentials.footer')