@extends('layout')
@extends('essentials.cabecera')
@extends('essentials.navbar-top')
@extends('essentials.navbar')

@section('content')
<br>
<div class = "container" id="contacto-form">
    <br>
   <div class ="container"  id="contasto">

   <div class = "hero">
        <h1 class="texto">CONTÁCTANOS</h1>
    </div>
   
    <br>
    <div class="row" Style="text-align:center;"></i>
      <p>TUCOMEXLATAM Posee la experiencia necesaria para entregar un  servicio de calidad, personalizado y eficiente.</p>
      <p>No te compliques más con los procesos de importación y exportación de productos y/o servicios, consúltanos para que obtengas la asesoría necesaria y no tengas inconvenientes con plazos, cobros extra y retiros de mercancía.</p>  
    </div>
</div>
    <br>
                <div class="form-group">
                    <label for="name">Nombre</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Nombre" required>
                </div>
                <div class="form-group">
                    <label for="email">Correo</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Correo" required>
                </div>
                <div class="form-group">
                    <label for="subject">Asunto</label>
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Asunto" required>
                </div>
                <div class="form-group">
                    <label for="message">Mensaje</label>
                    <textarea class="form-control" name="message" id="message" rows="3" placeholder="Mensaje" required></textarea>
                </div>
               
                <div class="mb-3">
                    <label for="email" class="form-label">Correo Electrónico *</label>
                    <input type="email" size="25" maxlength="100" required pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}" class="form-control" id="email" placeholder="correo@ejemplo.com">
                </div>
                <div class="mb-3">
                    <label for="firstname" class="form-label">Nombre *</label>
                    <input type="nombre" class="form-control" id="firstname" placeholder="Nombre" required minlength="3" maxlength="40">
                </div>
                <div class="mb-3">
                    <label for="secondname" class="form-label">Apellido *</label>
                    <input type="apellido" class="form-control" id="secondname" placeholder="Apellido" required minlength="3" maxlength="40">
                </div>
            
            

                <form>
                <label for="tel" class="col-form-label col-sm-3" style="width:220px;">Teléfono de contacto *</label>
                <input type="tel"  id="phone"  placeholder="Teléfono de contacto" required minlength="7" maxlength="11">
                </form>
                <br>

                <div class="mb-3">
                    <label for="razon" class="form-label">Razón Social (Persona natural) *</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Razon Social" required minlength="3" maxlength="40">
                </div>
                <div class="form-group row" style="margin-top:20px;">
                            <label for="rut" class="col-form-label col-sm-2" style="width:80px;">RUT *</label>
                        <div class="col-sm-8">
                        <input type="number" name="rut" id="rut" class="form-control" placeholder="Rut" tabindex="1" style="width: 200px;" required minlength="6" maxlength="8">
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
                        <option value="4">En planificacion</option>
                        <option value="5">Otros</option>
                    </select>
                </div>

                
                <div class="mb-3" style="margin-top:30px;">
                    <label for="exampleFormControlTextarea1" class="form-label">Para una mejor respuesta añada fechas y detalle de productos y/o servicios.</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"  required minlength="4" maxlength="500"></textarea>
                </div>

                <div class="mb-3">
                    <label for="formFile" class="form-label">Añada los documentos de transporte, facturas, u otros relevantes para agilizar su trámite.</label>
                    <input class="form-control" type="file" id="formFile" accept=".xls,.xlsx,.pdf,.jpg">
                
                
                </div>

            

                <br>

        

    <button type="button" class="btn btn-success">Enviar</button>
</div>
<br>
@endsection



@extends('essentials.footer')