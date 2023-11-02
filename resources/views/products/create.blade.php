@extends('layouts.app')
  
@section('title', 'Create Product')
  
@section('contents')
    <h1 class="mb-0">Añadir Producto</h1>
    <hr />
    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="Nombre" class="form-control" placeholder="Nombre">
            </div>
            <div class="col">
                <input type="text" name="Precio" class="form-control" placeholder="Precio">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="Codigo del producto" class="form-control" placeholder="Codigo del producto">
            </div>
            <div class="col">
                <textarea class="form-control" name="Descripcion" placeholder="Descripcion"></textarea>
            </div>
        </div>
 
        <div class="row">
            <div class="d-grid">
                <button type="Añadir" class="btn btn-primary">Añadir</button>
            </div>
        </div>
    </form>
@endsection