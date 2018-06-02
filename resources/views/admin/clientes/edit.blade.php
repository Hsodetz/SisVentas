@extends('layouts.master')

@section('title', 'Clientes | Edicion')

@section('content')

<div class="container">
  <div class="card card-success card-outline mt-5">
    <div class="card-header">
      Editar clientes
    </div>
    <div class="card-body">
     
      {!! Form::model($cliente, ['route' => ['clientes.update', $cliente->id], 'method' => 'PUT']) !!}
        {{ csrf_field() }}

        @include('admin.clientes.partials.form')
        
      {!! Form::close() !!}
      
    </div>
  </div>
</div>

@stop