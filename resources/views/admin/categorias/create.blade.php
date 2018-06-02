@extends('layouts.master')

@section('title', 'Categorias | Registro')

@section('content')

<div class="container">
  <div class="card card-success card-outline mt-5">
    <div class="card-header">
      Registro de Categorias
    </div>
    <div class="card-body">
     
      {!! Form::open(['route' => 'categorias.store', 'method' => 'POST']) !!}
        {{ csrf_field() }}

        @include('admin.categorias.partials.form')
        
      {!! Form::close() !!}
      
    </div>
  </div>
</div>

@stop