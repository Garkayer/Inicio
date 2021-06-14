
@extends('layout')

@section('contenidos')

<div class="row justify-content-center">
            <div class="col-10">
                <div class="row">


   
    <div class="col-md-4 col-12 justify-content-center mb-5">
    <div class="card m-auto" style="width: 18rem;">
    <img src="img/Material.jpg" class="card-img-top" alt="...">
    <div class="card-body">
    <h5 class="card-title">Empresas de reciclaje</h5>
    <a href="Directorio" class="btn btn-dark">IR AL ENLACE</a>

    </div>
  </div>


  <div class="col-md-4 col-12 justify-content-center mb-5">
    <div class="card m-auto" style="width: 18rem;">
    <img src="img/Aprender.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">APRENDE A RECICLAR</h5>
      <a href="educativo" class="btn btn-dark">IR AL ENLACE</a>

      <div class="col-md-4 col-12 justify-content-center mb-5">
    <div class="card m-auto" style="width: 18rem;">
    <img src="img/Tipos.png" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Tipos de reciclaje</h5>
      <a href="TiposDeReciclaje" class="btn btn-dark">IR AL ENLACE</a>



    </div>
  </div>


  <chat-component v-bind:form="forms" ref="chat" v-show="forms['chat'].mostrar"></chat-component>

@endsection