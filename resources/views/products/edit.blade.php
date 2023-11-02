@extends('layouts.app')
  
@section('title', 'Edit Product')
  
@section('contents')
    <h1 class="mb-0">Editar producto</h1>
    <hr />
    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Nombre del producto</label>
                <input type="text" name="Nombre del producto" class="form-control" placeholder="Nombre del producto" value="{{ $product->title }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Precio</label>
                <input type="text" name="Precio" class="form-control" placeholder="Precio" value="{{ $product->price }}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Codigo del producto</label>
                <input type="text" name="Codigo del producto" class="form-control" placeholder="Codigo del producto" value="{{ $product->product_code }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Descripcion</label>
                <textarea class="form-control" name="Descripcion" placeholder="Descripcion" >{{ $product->description }}</textarea>
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Actualizar</button>
            </div>
        </div>
    </form>
@endsection