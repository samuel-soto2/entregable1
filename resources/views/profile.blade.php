@extends('layouts.app')
  
@section('title', 'Profile')
  
@section('contents')
@extends('layouts.app')
  
  @section('title', 'Profile')
    
  @section('contents')
      <h1 class="mb-0">Perfil</h1>
      <hr />
   
      <form method="POST" enctype="multipart/form-data" id="profile_setup_frm" action="" >
      <div class="row">
          <div class="col-md-12 border-right">
              <div class="p-3 py-5">
                  <div class="d-flex justify-content-between align-items-center mb-3">
                      <h4 class="text-right">Configuración del perfil</h4>
                  </div>
                  <div class="row" id="res"></div>
                  <div class="row mt-2">
    
                      <div class="col-md-6">
                          <label class="labels">Nombre</label>
                          <input type="text" name="name" class="form-control" placeholder="Nombres" value="{{ auth()->user()->name }}">
                      </div>
                      <div class="col-md-6">
                          <label class="labels">Correo electronico</label>
                          <input type="text" name="Correo electronico" disabled class="form-control" value="{{ auth()->user()->email }}" placeholder="Correo electronico">
                      </div>
                  </div>
                  <div class="row mt-2">
                      <div class="col-md-6">
                          <label class="labels">Telefono</label>
                          <input type="text" name="Telefono" class="form-control" placeholder="Telefono" value="{{ auth()->user()->phone }}">
                      </div>
                      <div class="col-md-6">
                          <label class="labels">Dirección</label>
                          <input type="text" name="Dirección" class="form-control" value="{{ auth()->user()->address }}" placeholder="Dirección">
                      </div>
                  </div>
                   
                  <div class="mt-5 text-center"><button id="btn" class="btn btn-primary profile-button" type="submit">Guardar perfil</button></div>
              </div>
          </div>
           
      </div>   
              
          </form>
  @endsection