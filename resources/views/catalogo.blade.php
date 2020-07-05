<!DOCTYPE html>
<html lang="en">

<head>
  <title></title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>

  <header id="banner">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="home">Home</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-item nav-link active" href="#">Perfil de Usuario <span class="sr-only">(current)</span></a>
          <a class="nav-item nav-link" href="contacto">Contacto</a>
          <a class="nav-item nav-link" href="#" tabindex="-1">F.A.Q</a>
        </div>
      </div>
    </nav>

    <img id="logo" src="images/logoDS.png" alt="Logo de negocio">
    <h1 id="titleHome">
      <span style="color:black; margin-top:3%">Digital</span>
      <span style="color:white; margin-top:3%">Store</span>
    </h1>
  </header>

  <nav class="nav flex-column">
    <a class="nav-link active" href="#">Celulares</a>
    <a class="nav-link" href="#">Fundas</a>
    <a class="nav-link" href="#">Cargadores</a>
  </nav>

  <section class="vip-products">
    <div class="container">
      <div class="row">
        @foreach($productos as $value)
        <div class="col-lg-4 col-md-6 col-sm-12">
          <article class="product mb-5">
            <div class="photo-container">
              <a href="producto/{{$value->id}}"><img class="photo " src="/images/{{$value->image}}" alt="Fotografia de celulares"></a>
            </div>

            <h2 class="">
              <a href="" class="item__info-title">
                <span class="main-title">{{$value->titulo}}
                </span>
              </a>
            </h2>

            <div class="precioClass mb-2">
              <span class="simboloPrecio">$</span>
              <span class="precio">{{$value->precio}}</span>
            </div>
            <div class="d-flex justify-content-center mr-5">
              <button type="" class="btn btn-primary">Comprar</button>
            </div>
          </article>
        </div>
        @endforeach
      </div>
      <div class="d-flex justify-content-center">{{$productos->links()}}</div>

    </div>
  </section>




</body>

</html>