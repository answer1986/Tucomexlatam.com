@extends('layout')
@extends('essentials.cabecera')
@extends('essentials.navbar-top')
@extends('essentials.navbar')

@section('content')
<br>
<div class = "container" id="contacto-form">
    <br>
   <div class ="container" style="background-image:url('/tucomexlatam/public/img/comercio-internacional.png');"> 
    <div class = "row" style="text-align:center">
        <h2>CONTÁCTANOS</h2>
    </div>
    <br>
    <div class="row" Style="text-align:center;"></i>
      <p>TUCOMEXLATAM Posee la experiencia necesaria para entregar un  servicio de calidad, personalizado y eficiente.</p>
      <p>No te compliques más con los procesos de importación y exportación de productos y/o servicios, consúltanos para que obtengas la asesoría necesaria y no tengas inconvenientes con plazos, cobros extra y retiros de mercancía.</p>  
    </div>
</div>
    <br>
    <div class="mb-3">
         <label for="exampleFormControlInput1" class="form-label">Correo Electrónico *</label>
         <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="correo@ejemplo.com">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nombre *</label>
        <input type="nombre" class="form-control" id="exampleFormControlInput1" placeholder="Nombre">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Apellido *</label>
        <input type="apellido" class="form-control" id="exampleFormControlInput1" placeholder="Apellido">
    </div>
   
   

    <div class="form-group row" style="margin-top:20px;">
                <label for="nombre" class="col-form-label col-sm-3" style="width:120px;">Teléfono de contacto *</label>
              <div class="col-sm-8">
            <input type="number" name="celular" id="nombre" class="form-control" placeholder="Celular" tabindex="1" style="width: 200px;">
              </div>
     </div>

    

     <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Razón Social (Persona natural) *</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Razon Social">
    </div>
    <div class="form-group row" style="margin-top:20px;">
                <label for="nombre" class="col-form-label col-sm-2" style="width:80px;">RUT *</label>
              <div class="col-sm-8">
            <input type="number" name="rut" id="nombre" class="form-control" placeholder="Rut" tabindex="1" style="width: 200px;">
              </div>
     </div>

     <br>
    
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
             <option value="3">Urgente</option>
             <option value="3">En planificacion</option>
             <option value="3">Otros</option>
           </select>
    </div>

    
    <div class="mb-3" style="margin-top:30px;">
        <label for="exampleFormControlTextarea1" class="form-label">Para una mejor respuesta añada fechas y detalle de productos y/o servicios.</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>

    <div class="mb-3">
         <label for="formFile" class="form-label">Añada los documentos de transporte, facturas, u otros relevantes para agilizar su trámite.</label>
         <input class="form-control" type="file" id="formFile">
    </div>

    <br>

    <button type="button" class="btn btn-success">Enviar</button>
</div>
<br>
@endsection



@extends('essentials.footer')