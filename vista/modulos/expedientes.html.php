<div class="container">

    <form method="POST" id="formularioExpediente"class="row">

        <div class="col-12">
            <h1 class="titulo">Agregar expediente</h1>
            <h2 class="subtitulo">Para agregar un expediente, tienes que ingresar al menos los datos obligatorios del siguiente formulario:</h2>
        </div>

         <hr class="my-3"> 

         <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mb-4">
            <p1 class="datos">Nombre del responsable del paciente:</p1> <span><p2 class="obligatorio">*obligatorio</p2></span>
             <input type="text" name="nombreResponsable" id="nombreResponsable" class="form-control" placeholder="Nombre completo">
        </div>

        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mb-4">
            <p1 class="datos">Ubicación del expediente:</p1> 
             <input type="text" name="ubicacionExpediente" id="ubicacionExpediente" class="form-control">
        </div>

        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mb-4">
            <p1 class="datos">Motivo de la consulta:</p1> <span><p2 class="obligatorio">*obligatorio</p2></span>
             <input type="text" name="motivoConsulta" id="motivoConsulta" class="form-control">
        </div>

        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mb-4">
            <p1 class="datos">Peso:</p1> 
             <input type="text" name="peso" id="peso" class="form-control" placeholder="56 kg">
        </div>

        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mb-4">
            <p1 class="datos">Talla:</p1>
             <input type="text" name="talla" id="talla" class="form-control" placeholder="1.65 m">
        </div>

        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mb-4">
            <p1 class="datos">Temperatura:</p1>
             <input type="text" name="temperatura" id="temperatura" class="form-control" placeholder="36°">
        </div>

        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 mb-4">
            <p1 class="datos">Frecuencia respiratoria:</p1> 
             <input type="text" name="frecuanciaResp" id="frecuanciaResp" class="form-control" placeholder="12-20">
        </div>

        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 mb-4">
            <p1 class="datos">Pulso:</p1>
             <input type="text" name="Pulso" id="Pulso" class="form-control" placeholder="180/100"> 
        </div>

        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 mb-4">
            <p1 class="datos">Grupo sanguineo:</p1> 
             <input type="text" name="grupoSanguineo" id="grupoSanguineo" class="form-control" placeholder="0+">
        </div>

        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 mb-4">
            <p1 class="datos">RH:</p1> 
             <input type="text" name="rh" id="rh" class="form-control" placeholder="AA">
        </div>
    </form>
</div>