
@extends('layout')

@section('contenidos')

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css" />

    <link rel="stylesheet" href="style.css">

	

    <title>bootstrap card gallery</title>
  </head>
  <body>
   <section class="gallery-block cards-gallery">
   	<div class="container">
   		<div class="heading">
   			<h2></h2>
   		</div>
   		<div class="row">
   			<div class="col-md-6 col-lg-4">
   				<div class="card border-0 transform-on-hover">
   					<a class="lightbox" href="img/Material.jpg"><img src="img/Material.jpg" class="card-img-top"></a>
   					<div class="card-body">
   						<h6>Directorio de empresas</h6>
   						<a href="Directorio" class="btn btn-primary">Ir al link</a>
   					</div>
   				</div>
   			</div>
   			
   			<div class="col-md-6 col-lg-4">
   				<div class="card border-0 transform-on-hover">
   					<a class="lightbox" href="img/Cont.jpg"><img src="img/Cont.jpg" class="card-img-top"></a>
   					<div class="card-body">
   						<h6>Contaminacion Ambiental</h6>
   						<a href="Contaminacion" class="btn btn-primary">Ir al link</a>
   					</div>
   				</div>
   			</div>
   			
   			<div class="col-md-6 col-lg-4">
   				<div class="card border-0 transform-on-hover">
   					<a class="lightbox" href="img/Arbol.jpg"><img src="img/Arbol.jpg" class="card-img-top"></a>
   					<div class="card-body">
   						<h6>Beneficios del reciclaje</h6>
   						<a href="Beneficios" class="btn btn-primary">Ir al link</a>
   					</div>
   				</div>
   			</div>
   		</div>
   		
   		
   		<div class="row">
   			<div class="col-md-6 col-lg-4">
   				<div class="card border-0 transform-on-hover">
   					<a class="lightbox" href="img/Ben.jpg"><img src="img/Ben.jpg" class="card-img-top"></a>
   					<div class="card-body">
   						<h6>Cuida el medio ambiente</h6>
   						<a href="Cuidar" class="btn btn-primary center">Ir al link</a>
   					</div>
   				</div>
   			</div>
   			
   			<div class="col-md-6 col-lg-4">
   				<div class="card border-0 transform-on-hover">
   					<a class="lightbox" href="img/Aprender.jpg"><img src="img/Aprender.jpg" class="card-img-top"></a>
   					<div class="card-body">
   						<h6>Aprende a reciclar</h6>
   						<a href="educativo" class="btn btn-primary">Ir al link</a>
   					</div>
   				</div>
   			</div>
   			
			  

   			<div class="col-md-6 col-lg-4">
   				<div class="card border-0 transform-on-hover">
   					<a class="lightbox" href="img/Tipos.png"><img src="img/Tipos.png" class="card-img-top"></a>
   					<div class="card-body">
   						<h6>Tipos de reciclaje</h6>
   						<a href="TiposDeReciclaje" class="btn btn-primary">Ir al link</a>
   					</div>
   				</div>
   			</div>
   		</div>
   	</div>

   </section>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script>
	      baguetteBox.run('.cards-gallery', {animation: 'slideIn'});
	  </script>
    
  </body>
</html>

@endsection

