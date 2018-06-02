@extends('layouts.master')

@section('title', 'Clientes | Registro')

@section('content')

<div class="container">
  <div class="card card-success card-outline mt-5">
    <div class="card-header">
      Registro de clientes
    </div>
    <div class="card-body">
     
      {!! Form::open(['route' => 'clientes.store', 'method' => 'POST']) !!}
        {{ csrf_field() }}

        @include('admin.clientes.partials.form')
        
      {!! Form::close() !!}
      
    </div>
  </div>
</div>

@stop