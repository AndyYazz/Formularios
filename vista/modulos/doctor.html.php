<div class="container">

    <form method="GET" id="formularioAltaDoctor" class="row">

        <div class="col-12">
            <h1 class="titulo">Agregar un nuevo doctor</h1>
            <h2 class="subtitulo">Para agregar un nuevo doctor, tienes que ingresar al menos los datos obligatorios del siguiente formulario:</h2>
        </div>

         <hr class="my-3"> 

         <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mb-4">
            <p1 class="datos">Nombre:</p1> <span><p2 class="obligatorio">*obligatorio</p2></span>
             <input type="text" name="nombreDoctor" id="nombreDoctor" class="form-control" placeholder="Nombre">
        </div>

        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mb-4">
            <p1 class="datos">Apellido paterno:</p1> <span><p2 class="obligatorio">*obligatorio</p2></span>
             <input type="text" name="apellidoPaterno" id="apellidoPaterno" class="form-control" placeholder="Apellido paterno">
        </div>

        
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mb-4">
            <p1 class="datos">Apellido materno:</p1> <span><p2 class="obligatorio">*obligatorio</p2></span>
             <input type="text" name="apellidoMaterno" id="apellidoMaterno" class="form-control" placeholder="Apellido materno">
        </div>

        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mb-4">
            <p1 class="datos">Fecha de nacimiento:</p1> <span><p2 class="obligatorio">*obligatorio</p2></span>
             <input type="text" name="fechaNacimiento" id="fechaNacimiento" class="form-control" placeholder="AAAA/MM/DD">
        </div>

        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mb-4">
            <p1 class="datos">Sexo:</p1> <span><p2 class="obligatorio">*obligatorio</p2></span>
             <select class="form-control" name="sexo" id="sexo">
                 <option value="H">Hombre</option>
                 <option value="M">Mujer</option>
             </select>
        </div>
        
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mb-4">
            <p1 class="datos">Correo electrónico:</p1>
             <input type="email" name="correo"id="correo"class="form-control" placeholder="correo@ejemplo.com">
        </div>

        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-4">
            <p1 class="datos">Telefono local:</p1>
             <input type="text" name="telefonoLocal" sid="telefonoLocal"class="form-control">
        </div>

        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-4">
            <p1 class="datos">Telefono movil:</p1>
             <input type="text" name="telefonoMovil" id="telefonoMovil"class="form-control">
        </div>

        
        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-4">
            <p1 class="datos">CURP:</p1>
             <input type="text" name="curp" id="curp"class="form-control" placeholder="GACA970303HMDFR">
        </div>

        
        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-4">
            <p1 class="datos">Especialidades:</p1>
             <input type="text" name="especialidades"id="especialidades"class="form-control" placeholder="Dermatología, denista, cirujano">
        </div>

        <button class="btn btn-block btn-success" type="submit">Enviar formulario</button>

    </form>
</div>