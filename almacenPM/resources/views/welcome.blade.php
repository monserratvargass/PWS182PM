@extends('layouts.plantilla')

@section('titulo','BeastMex')

@section('contenido')

<h2 class="display-1 text-center text-primary">Registro Producto</h2>

<div class="container mt-5 col-md-6">
<form>
    <div class="input-group mb-3">
      <span class="input-group-text"><i class="bi bi-person-badge"></i></span>
      <div class="form-floating">
        <input type="text" name="txtNombre" class="form-control" placeholder="Nombre(s)">
        <label for="floatingInputGroup1">Nombre producto</label>
      </div>
    </div>
    
    <div class="input-group mb-3">
      <span class="input-group-text"><i class="bi bi-person-badge"></i></span>
      <div class="form-floating">
        <input type="text" name="txtAP" class="form-control" placeholder="Apellido paterno">
        <label for="floatingInputGroup1">No. Serie</label>
      </div>
    </div>

    <div class="input-group mb-3">
      <span class="input-group-text"><i class="bi bi-person-badge"></i></span>
      <div class="form-floating">
        <input type="text" name="txtAM" class="form-control" placeholder="Apellido materno">
        <label for="floatingInputGroup1">Apellido materno</label>
      </div>
    </div>

    <div class="input-group mb-3">
      <span class="input-group-text"><i class="bi bi-person-workspace"></i></span>
      <div class="form-floating">
        <input type="text" name="txtPuesto" class="form-control" placeholder="Puesto">
        <label for="floatingInputGroup1">Marca</label>
      </div>
    </div>

    <div class="input-group mb-3">
      <span class="input-group-text"><i class="bi bi-envelope-at-fill"></i></span>
      <div class="form-floating">
        <input type="text" name="txtCorreo" class="form-control" placeholder="Correo">
        <label for="floatingInputGroup1">Cantidad</label>
      </div>
    </div>

    <div class="input-group mb-3">
      <span class="input-group-text"><i class="bi bi-file-lock2-fill"></i></span>
      <div class="form-floating">
        <input type="password" name="txtContra" class="form-control" placeholder="Contraseña">
        <label for="floatingInputGroup1">Fecha ingreso</label>
      </div>
    </div>

    <div class="input-group mb-3">
      <span class="input-group-text"><i class="bi bi-file-lock2-fill"></i></span>
      <div class="form-floating">
        <input type="password" name="txtContra" class="form-control" placeholder="Contraseña">
        <label for="floatingInputGroup1">Folio</label>
      </div>
    </div>

    <div class="input-group mb-3">
      <span class="input-group-text"><i class="bi bi-file-lock2-fill"></i></span>
      <div class="form-floating">
        <input type="password" name="txtContra" class="form-control" placeholder="Contraseña">
        <label for="floatingInputGroup1">Costo de compra</label>
      </div>
    </div>

    <div class="input-group mb-3">
      <span class="input-group-text"><i class="bi bi-file-lock2-fill"></i></span>
      <div class="form-floating">
        <input type="password" name="txtContra" class="form-control" placeholder="Contraseña">
        <label for="floatingInputGroup1">Precio de venta</label>
      </div>
    </div>
    
    <button type="submit" class="btn btn-primary">Registrar producto</button>
  </form>
</div>
@endsection
