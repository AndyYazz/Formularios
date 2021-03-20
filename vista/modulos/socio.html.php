<div class="container">

    <div class="row">

        <div class="col-12">
            <h1 class="titulo">Agregar un nuevo paciente</h1>
            <h2 class="subtitulo">Para agregar un nuevo paciente, tienes que ingresar al menos los datos obligatorios del siguiente formulario:</h2>
        </div>

             <hr class="my-3"> 
       
        <div class="col-4 mb-3">
            <p1 class="datos">Nombre:</p1> <span><p2 class="obligatorio">*obligatorio</p2></span>
             <input type="text" class="form-control" placeholder="Nombre">
        </div>

        <div class="col-4 mb-3">
            <p1 class="datos">Apellido materno</p1> <span><p2 class="obligatorio">*obligatorio</p2></span>
             <input type="text" class="form-control" placeholder="Apellido materno">
        </div>

        <div class="col-4 mb-3">
            <p1 class="datos">Apellido paterno:</p1>
             <input type="text" class="form-control" placeholder="Apellido paterno">
        </div>

        <div class="col-4 mb-3">
            <p1 class="datos">Fecha de nacimiento:</p1> <span><p2 class="obligatorio">*obligatorio</p2></span>
             <input type="text" class="form-control" placeholder="AAAA/MM/DD">
        </div>

        <div class="col-4 mb-3">
            <p1 class="datos">Sexo:</p1> <span><p2 class="obligatorio">*obligatorio</p2></span>
             <select class="form-control" name="sexo" id="sexo">
                 <option value="H">Hombre</option>
                 <option value="M">Mujer</option>

             </select>
        </div>

        <div class="col-4 mb-3">
            <p1 class="datos">Correo electrónico</p1>
             <input type="email" class="form-control" placeholder="correo@ejemplo.com">
        </div>

        <div class="col-4 mb-3">
            <p1 class="datos">Celular:</p1>
             <input type="text" class="form-control" placeholder="10 digitos">
        </div>

        <div class="col-4 mb-3">
            <p1 class="datos">Numero local:</p1>
             <input type="text" class="form-control" placeholder="10 digitos">
        </div>

        <div class="col-4 mb-3">
            <p1 class="datos">CURP:</p1>
             <input type="text" class="form-control" placeholder="GACA970303HDCMFI">
        </div>

        <div class="col-12 mb-3">
            <p1 class="datos">Direccion:</p1>
             <input type="text" class="form-control" placeholder="Dirección completa">
        </div>

        <div class="col-4">
            <p1 class="datos">Direccion:</p1>
            <input type="number" class="form-control" placeholder="Número de hijos">
        </div>

        <div class="col-4">
            <p1 class="datos">Ocupacion:</p1>
             <input type="text" class="form-control" placeholder="Ama de casa, Estduiante, trabajador">
        </div>

        <div class="col-4">
            <p1 class="datos">RFC:</p1>
             <input type="text" class="form-control" placeholder="GACA970303">
        </div>

       <!--<div class="col-4">
            <input type="email" class="form-control">
            <input type="password" class="form-control" required>
            <input type="number" class="form-control" placeholder="Número de hijos">
        </div> -->   

    </div>

</div>