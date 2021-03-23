<div class="container">

    <div class="row">

        <div class="col-12">
            <h1 class="titulo">Agregar un nuevo pago</h1>
            <h2 class="subtitulo">Para agregar un nuevo pago, tienes que ingresar al menos los datos obligatorios del siguiente formulario:</h2>
        </div>

             <hr class="my-3"> 
       
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mb-4">
            <p1 class="datos">Monto pagado:</p1> <span><p2 class="obligatorio">*obligatorio</p2></span>
             <input type="text" id="montoPagado" class="form-control" placeholder="$2,000">
        </div>

        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mb-4">
            <p1 class="datos">Forma de pago:</p1> <span><p2 class="obligatorio">*obligatorio</p2></span>
             <select class="form-control" name="tipoPago" id="tipoPago">
                 <option value="Efectivo">Efectivo</option>
                 <option value="Tarjeta">Tarjeta</option>
             </select>
        </div>

        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mb-4">
            <p1 class="datos">Fecha de pago:</p1> <span><p2 class="obligatorio">*obligatorio</p2></span>
             <input type="text" id="fechaPago" class="form-control" placeholder="AAAA/MM/DD">
        </div>

        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mb-4">
            <p1 class="datos">Comprobante del pago:</p1>  <span><p2 class="obligatorio">*obligatorio</p2></span>
            <input type="file" id="comprobantePago  " class="form-control">
        </div>

    </div>

</div>
