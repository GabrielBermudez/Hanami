<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/app.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>
    <body>
    <body>
        <div class="container">
            
        
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="home">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="#">Perfil de Usuario <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="#">Catalogo</a>
      <a class="nav-item nav-link" href="contacto">Contacto</a>
      <a class="nav-item nav-link" href="#" tabindex="-1" >F.A.Q</a>
    </div>
     
</div>
</nav>

  <form action="registrarse" method="POST">
  {{csrf_field()}}
  <h1 id="titleRegistro">Registrarse</h1>
  <img id="imagenPersonaRegistro" src="images/personaRegistro.png" alt="">
  <input id="subirFotoRegistro" type="file" name="fotoRegistro" value="">
  <br>

<!-- NUEVO FORMULARIO DE REGISTRO -->

  <div class="form-row">
    <div class="form-group col-lg-6 col-sm-12">
      <label for="inputNombre">Nombre</label>
      <input type="text" class="form-control" id="inputNombre" name="nombre" value="{{old('nombre')}}">
    </div>
    <div class="form-group col-lg-6 col-sm-12">
      <label for="inputApellido">Apellido</label>
      <input type="text" class="form-control" id="inputApellido" name="apellido" value="{{old('apellido')}}">
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-lg-6 col-sm-12">
      <label for="inputUsuario">Usuario</label>
      <input type="text" class="form-control" id="inputUsuario" name="usuario" value="{{old('usuario')}}">
    </div>
    <div class="form-group col-lg-6 col-sm-12">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" id="inputEmail4" name="email" value="{{old('email')}}">
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-lg-6 col-sm-12">
      <label for="inputPassword4">Contraseña</label>
      <input type="password" class="form-control" id="inputPassword4" name="contraseña" >
    </div>
    <div class="form-group col-lg-6 col-sm-12">
      <label for="inputPassword4">Verificar Contraseña</label>
      <input type="password" class="form-control" id="inputPassword4" name="verifContraseña">
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-lg-6 col-sm-12">
      <label for="inputTelefono">Telefono</label>
      <input type="text" class="form-control" id="inputTelefono" name="telefono" value="{{old('telefono')}}">
    </div>
    <div class="form-group col-lg-6 col-sm-12">
      <label for="inputCelular">Celular</label>
      <input type="text" class="form-control" id="inputCelular" name="celular" value="{{old('celular')}}">
    </div>
  </div>

  
  <div class="form-group col-lg-6 col-sm-12">
      <label for="inputState">Pais</label>
      <select id="inputState" class="form-control" name="pais" value="{{old('pais')}}">
        <option selected>Elegir...</option>
        <option value="Argentina">Argentina</option>
        <option value="Chile">Chile</option>
        <option value="Colombia">Colombia</option>
        <option value="Uruguay">Uruguay</option>
        <option value="Brasil">Brasil</option>
        <option value="Paraguay">Paraguay</option> 
      </select>
    </div>

    <fieldset class="form-group">
    <label for="genero">Genero</label>
    <div class="row">
      <div class="col-lg-6 col-sm-12">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="genero" id="gridRadios1" value="Hombre" checked>
          <label class="form-check-label" for="gridRadios1">
            Hombre
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="genero" id="gridRadios2" value="Mujer">
          <label class="form-check-label" for="gridRadios2">
            Mujer
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="genero" id="gridRadios2" value="Otro">
          <label class="form-check-label" for="gridRadios3">
            Otro
          </label>
        </div>
      </div>
    </div>
  </fieldset>

  <div class="d-flex justify-content-center">
  <button type="submit" class="btn btn-primary">Enviar</button>
  </div>
</form>


<ul style="color:red" class="errores">
  @foreach($errors->all() as $error)
    <li>
      {{$error}}
    </li>
  @endforeach
</ul>





   
  
  

    </body>
</html>