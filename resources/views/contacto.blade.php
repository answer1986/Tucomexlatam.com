@extends('layout')
@extends('essentials.cabecera')
@extends('essentials.navbar-top')
@extends('essentials.navbar')

@section('content')
<br>
<div class = "container" id="contacto-form">
    <br>
    <div class = "row" style="text-align:center">
        <h2>Formulario de contacto </h2>
    </div>
    <div class="mb-3">
         <label for="exampleFormControlInput1" class="form-label">Correo Electronico</label>
         <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="correo@ejemplo.com">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nombre</label>
        <input type="nombre" class="form-control" id="exampleFormControlInput1" placeholder="Nombre">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Apellido</label>
        <input type="apellido" class="form-control" id="exampleFormControlInput1" placeholder="Apellido">
    </div>
    <div class="row">
        <div class="col">
            <h5>Telefono</h5>
        </div>
            <div class="col-auto" style=" width: 250px;">
                <label for="phone" class="visually-hidden">Telefono</label>
                <input type="tel" class="form-control" id="phone" placeholder="Telefono" style="margin-bottom:8px;">
            </div>
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Razon Social</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Razon Social">
    </div>
    <div class="mb-3" style="width: 250px;">
        <label for="exampleFormControlInput1" class="visually-hidden">Rut</label>
        <input type="number" onkeypress="return onlyNumberKey(event)" class="form-control" id="number" placeholder="Rut">
    </div>
    
    <h6>Servicio que solicita*</h6>
    <br>
    <h6>Marque las opciones que requiera</h6>
    <form action="/action_page.php">
        <input type="checkbox" id="Servicio1" name="Servicio1" value="Bike">
        <label for="Servicio1"> Exportar</label><br>
        <input type="checkbox" id="Servicio2" name="Servicio2" value="Car">
        <label for="Servicio2"> Importar</label><br>
        <input type="checkbox" id="Servicio3" name="Servicio3" value="Boat">
        <label for="Servicio3"> Asesoria</label><br><br>
    </form>

    <div class="mb-3">
        <h6>Prioridad*</h6>
         <select class="form-select" aria-label="Default select example">
             <option selected>Selecciona tu servicio</option>
             <option value="1">En proceso de compra</option>
             <option value="2">En transporte</option>
             <option value="3">URGENTE</option>
             <option value="3">En planificacion</option>
             <option value="3">Otros</option>
           </select>
    </div>

    
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Servicios</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
    <button type="button" class="btn btn-success">Enviar</button>
</div>
<br>
@endsection



@extends('essentials.footer')