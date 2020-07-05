<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/app.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
    </head>
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
    <form class="" action="login.php" method="post">
      <label id="titleIngreso" for="">Ingresar</label> <br>

      <label class="labelInput" for="">Email:</label>
      <input class="input" id="inputEmail" type="email" name="email" value="" required><br>

      <label class="labelInput" for="">Contraseña:</label>
      <input class="input" type="password" name="password" value="" required><br>


      <input id="botonSubmit" type="submit" name="enviar" value="Enviar">

    </form>


    </div>
    </body>
</html>