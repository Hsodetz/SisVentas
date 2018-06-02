<div class="form-group">
  {!! Form::label('nombre', 'Nombre') !!}
  {!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre del cliente']) !!}
</div>

<div class="form-group">
  {!! Form::label('apellido', 'Apellido') !!}
  {!! Form::text('apellido', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el apellido del cliente']) !!}
</div>

<div class="form-group">
  {!! Form::label('telefono', 'Telefono') !!}
  {!! Form::tel('telefono', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el telefono del cliente']) !!}
</div>

<div class="form-group">
  {!! Form::label('direccion', 'Direccion') !!}
  {!! Form::textarea('direccion', null, ['class' => 'form-control', 'rows' => '2', 'placeholder' => 'Ingrese la direccion del cliente']) !!}
</div>

<div class="form-group">
  {!! Form::label('ruc', 'Ruc') !!}
  {!! Form::text('ruc', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el Ruc del cliente']) !!}
</div>

<div class="form-group">
  {!! Form::label('empresa', 'Empresa') !!}
  {!! Form::text('empresa', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la empresa del cliente']) !!}
</div>

<hr>
<div class="form-group">
  <h3> Estado </h3>
  <label>
    {!! Form::radio('estado', '1') !!} <span class="badge badge-success"> On </span>
  </label>
  <label>
    {!! Form::radio('estado', '0') !!} <span class="badge badge-danger"> Off </span>      
  </label>
</div>
<hr>

<div class="form-group">
  {!! Form::button('Guardar &nbsp; <i class="far fa-save"></i>', ['type' => 'submit', 'class' => 'btn btn-success float-right']) !!}
  <a href="{{ URL::previous() }}" class="badge badge-success"> <i class="fa fa-arrow-left"></i> Regresar </a>
</div>