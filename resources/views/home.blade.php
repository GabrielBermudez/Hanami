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
    <div class="container">
      
    <header id="banner">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="home">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="#">Perfil de Usuario <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="catalogo">Catalogo</a>
      <a class="nav-item nav-link" href="contacto">Contacto</a>
      <a class="nav-item nav-link" href="#" tabindex="-1" >F.A.Q</a>
    </div>
     <!--Botones de ingreso y registrarse      -->
      <div class="d-flex justify-content-end mr-5">
      <button type="button" class="btn btn-primary" name="login" onclick="location='login'">Ingresar</button>
      </div>

      <div class="d-flex justify-content-end ">
      <button type="button" class="btn btn-primary" name="registro" onclick="location='registrarse'">Registrarse</button>
      </div>
</div>
</nav>

    <img id="logo" src="images/logoDS.png" alt="Logo de negocio">
    <h1 id="titleHome">
      <span style="color:black">Digital</span>
      <span style="color:white">Store</span>
    </h1>

    </header>

    <!--FIN DEL HEADER-->
    
  <section class="vip-products"> 
    <div class="container">
      <div class="row">
      @foreach ($productos as $value)
        <div class="col-lg-4 col-md-6 col-sm-12">
          <article class="product mb-5">
            
            <div class="photo-container">
              <a href=""><img class="photo " src="/images/{{$value->image}}"  alt="Fotografia de plantas"></a>
            </div>

            <h2 class="">
              <a href="" class="item__info-title">
                <span class="main-title">{{$value->titulo}}</span>
              </a>
            </h2>

            <div class="precioClass mb-2">
              <span class="simboloPrecio">$ {{$value->precio}}</span>
              <span class="precio"></span>
            </div>

            <div class="d-flex justify-content-center mr-5">
              <button type="" class="btn btn-primary">Comprar</button>
            </div>

          </article>
        </div>
      @endforeach
      </div>
    </div>
  </section>
  
<!--FIN PRODUCTOS-->

<!--COMIENZO DEL FOOTER-->

  <footer>
  <p id="infoHome"><br> Tel:2614568765 <br><br> Cel:+54 9 2614568723 <br><br> Direccion:
  Avenida de, Acceso Este 3280, M5500 Mendoza</p>
  <iframe class="ml-3" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6127.880960222142!2d-68.80210067397549!3d-32.90241998258057!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x967e0ea0bc78593d%3A0x61932a53d62932c7!2sMendoza%20Plaza%20Shopping!5e0!3m2!1ses!2sar!4v1580176708242!5m2!1ses!2sar" width="200" height="150" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
  <a href="https://www.facebook.com/"> <img class="logos" src="images/facebook.png" alt="Facebook"> </a>
  <a href="https://www.instagram.com/"> <img class="logos" src="images/instagram.png" alt="Instagram"> </a>
  <a href="https://www.twitter.com/"> <img class="logos" src="images/twitter.png" alt="Twitter"> </a> <br> <br>
  <nav id="barraNavHome"> <!-- Barra de navegacion       -->
      <a class="barraNav" href="home.php">Home |</a>
      <a class="barraNav" href="perfil.php">Perfil de Usuario |</a>
      <a class="barraNav" href="catalogo.php">Catalogo |</a>
      <a class="barraNav" href="contacto.php">Contacto |</a>
      <a class="barraNav" href="faq.php">F.A.Q</a>
</nav>
</footer>




    </div>
    
    </body>
</html>