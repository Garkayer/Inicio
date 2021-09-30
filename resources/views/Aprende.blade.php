@extends('layout')

    
@section('contenidos')




<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Easy Card Design Layout with CSS Grid</title>
  <link rel="stylesheet" href="kard.css">

</head>
<body>
<!-- partial:index.partial.html -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<div class="cards">
  <div class="card">
    <img class="card__image" src="img/Material.jpg" alt="">
    <div class="card__content">
      <p>
          Directorio de empresas.
      </p>
      
    </div>
    <div class="card__info">
      <div>
      </div>
      <div>
        <a href="Directorio" class="card__link">Ir al enlace</a>
      </div>
    </div>
  </div>
  <div class="card">
    <img class="card__image" src="img/Cont.jpg" alt="">
    <div class="card__content">
      <p>
          Contaminacion ambiental.
      </p>
    </div>
    <div class="card__info">
      <div>
      </div>
      <div>
        <a href="Contaminacion" class="card__link">Ir al enlace</a>
      </div>
    </div>
  </div>
  <div class="card">
    <img class="card__image" src="img/Arbol.jpg" alt="">
    <div class="card__content">
      <p>
          Beneficios del reciclaje
      </p>
    </div>
    <div class="card__info">
      <div>
      </div>
      <div>
        <a href="Beneficios" class="card__link">Ir al enlace</a>
      </div>
    </div>
  </div>
  <div class="card">
    <img class="card__image" src="img/Ben.jpg" alt="">
    <div class="card__content">
      <p>
          Cuida el medio ambiente.
      </p>
    </div>
    <div class="card__info">
      <div>
      </div>
      <div>
        <a href="Cuidar" class="card__link">Ir al enlace</a>
      </div>
    </div>
  </div>
  <div class="card">
    <img class="card__image" src="img/Aprender.jpg" alt="">
    <div class="card__content">
      <p>
          Aprende a reciclar.
      </p>
    </div>
    <div class="card__info">
      <div>
      </div>
      <div>
        <a href="educativo" class="card__link">Ir al enlace</a>
      </div>
    </div>
  </div>
  <div class="card">
    <img class="card__image" src="img/Tipos.png" alt="">
    <div class="card__content">
      <p>
          Tipos de reciclaje
      </p>
    </div>
    <div class="card__info">
      <div>
      </div>
      <div>
        <a href="TiposDeReciclaje" class="card__link">Ir al enlace</a>
      </div>
    </div>
  </div>
</div>
<!-- partial -->
  
</body>
</html>
@endsection