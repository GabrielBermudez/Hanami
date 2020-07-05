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

    <section class="vip-products"> 
        <div class="container">
<div class="row">
<div class="d-flex justify-content-center">
    <div class="col-lg-6 col-md-6 col-sm-12">
    <article class="product">
				
        <span><h1>{{$producto->titulo}}</h1></span>
        <div class="photo-container">
        <img src="/images/{{$producto->image}}" alt="Imagen de {{$producto->tipo_producto}}">
</div>
    </div>

    <div class="col-lg-6 col-md-6 col-sm-12">
        <p class="mt-5">{{$producto->descripcion}}</p>
        <div class="precioClass">
          <span class="simboloPrecio">$</span>
          <span class="precio">{{$producto->precio}}</span>
        </div>
        <br>
        <a class="btn btn-primary" href="/catalogo" role="button">Volver</a>
        <a class="btn btn-primary" href="#" role="button">Comprar</a>
       
    </div>
    </article>


</div>
</div>
</section>
    </body>
</html>