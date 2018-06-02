
@extends('layouts.master')

@section('title', 'Cliente | Ver')

@section('content')

<div class="container">
  <div class="card card-success card-outline mt-5">
    <div class="card-header">
      <h3>Ver cliente <a href="{{ URL::previous() }}" class="badge badge-success float-right"> <i class="fas fa-chevron-circle-left"></i> Regresar </a></h3>
      
    </div>
    <div class="card-body">

      <div class="row">
        <div class="col-md-4">
          <div class="small-box bg-success">
            <div class="inner">
              <h4>Nombres y Apellidos</h4>
              <p>{{ $cliente->nombre }} {{ $cliente->apellido }}</p>
            </div>
            <div class="icon">
              <i class="fas fa-american-sign-language-interpreting"></i>
            </div>
            <a href="{{ route('clientes.edit', $cliente->id) }}" class="small-box-footer"> Editar <i class="fas fa-edit"></i></a>
          </div>
        </div>

        <div class="col-md-4">
          <div class="small-box bg-success">
            <div class="inner">
              <h4>Empresa</h4>
              <p>{{ $cliente->empresa }}</p>
            </div>
            <div class="icon">
              <i class="far fa-building"></i>
            </div>
            <a href="{{ route('clientes.edit', $cliente->id) }}" class="small-box-footer"> Editar <i class="fas fa-edit"></i></a>
          </div>
        </div>

        <div class="col-md-4">
          <div class="small-box bg-success">
            <div class="inner">
              <h4>Estado</h4>
              @if($cliente->estado == 1)
                <p> On </p>
              @else
                <p> Off </p>
              @endif
            </div>
            <div class="icon">
              @if($cliente->estado == 1)
                <i class="fas fa-battery-full"></i>
              @else
                <i class="fas fa-battery-empty"></i>
              @endif
            </div>
            <a href="{{ route('clientes.edit', $cliente->id) }}" class="small-box-footer"> Editar <i class="fas fa-edit"></i></a>
          </div>
        </div>

      </div>

      <div class="row">
        <div class="col-md-12">
          <div class="small-box bg-success">
            <div class="inner">
              <h4>Direccion</h4>
              <p>{{ $cliente->direccion }}</p>
            </div>
            <div class="icon">
              <i class="fas fa-map-marker"></i>
            </div>
            <a href="{{ route('clientes.edit', $cliente->id) }}" class="small-box-footer"> Editar <i class="fas fa-edit"></i></a>
          </div>
        </div>
      </div>
      
    </div>
  </div>
</div>
  

@stop
