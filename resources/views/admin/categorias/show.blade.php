
@extends('layouts.master')

@section('title', 'Categoria | Ver')

@section('content')

<div class="container">
  <div class="card card-success card-outline mt-5">
    <div class="card-header">
      <h3>Ver Categoria <a href="{{ URL::previous() }}" class="badge badge-success float-right"> <i class="fas fa-chevron-circle-left"></i> Regresar </a></h3>
      
    </div>
    <div class="card-body">

      <div class="row">
        <div class="col-md-4">
          <div class="small-box bg-success">
            <div class="inner">
              <h4>Nombre</h4>
              <p>{{ $categoria->nombre }}</p>
            </div>
            <div class="icon">
              <i class="fas fa-american-sign-language-interpreting"></i>
            </div>
            <a href="{{ route('categorias.edit', $categoria->id) }}" class="small-box-footer"> Editar <i class="fas fa-edit"></i></a>
          </div>
        </div>

        <div class="col-md-4">
          <div class="small-box bg-success">
            <div class="inner">
              <h4>Descripcion</h4>
              <p>{{ $categoria->descripcion }}</p>
            </div>
            <div class="icon">
              <i class="far fa-bookmark"></i>
            </div>
            <a href="{{ route('categorias.edit', $categoria->id) }}" class="small-box-footer"> Editar <i class="fas fa-edit"></i></a>
          </div>
        </div>

        <div class="col-md-4">
          <div class="small-box bg-success">
            <div class="inner">
              <h4>Estado</h4>
              @if($categoria->estado == 1)
                <p> On </p>
              @else
                <p> Off </p>
              @endif
            </div>
            <div class="icon">
              @if($categoria->estado == 1)
                <i class="fas fa-battery-full"></i>
              @else
                <i class="fas fa-battery-empty"></i>
              @endif
            </div>
            <a href="{{ route('categorias.edit', $categoria->id) }}" class="small-box-footer"> Editar <i class="fas fa-edit"></i></a>
          </div>
        </div>

      </div>
      
    </div>
  </div>
</div>
  

@stop
