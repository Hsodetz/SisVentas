@extends('layouts.master')

@section('title', 'Categorias | Edicion')

@section('content')

<div class="container">
  <div class="card card-success card-outline mt-5">
    <div class="card-header">
      Editar Categorias
    </div>
    <div class="card-body">
     
      {!! Form::model($categoria, ['route' => ['categorias.update', $categoria->id], 'method' => 'PUT']) !!}
        {{ csrf_field() }}

        @include('admin.categorias.partials.form')
        
      {!! Form::close() !!}
      
    </div>
  </div>
</div>

@stop