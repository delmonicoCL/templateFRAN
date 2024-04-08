@extends('layouts.principal')

@section('contenido')
    

<div class="container d-flex mt-5">

  <form action="{{ action([App\Http\Controllers\SaludController::class, 'saludo'], ['Eres el MEJOR'])}}" method="POST">
  @csrf
    <div class="mb-3">
      <label for="nombre" class="form-label">Nombre</label>
      <input type="text" class="form-control" id="nombre" name="nombre">
      
    </div>
    <div class="mb-3">
      <label for="apellido" class="form-label">Apellido</label>
      <input type="text" class="form-control" id="apellido" name="apellido">
    </div>
   
    <button type="submit" class="btn btn-primary">Saludar</button>
  </form>
    
</div>



@endsection
