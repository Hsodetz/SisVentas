<div class="form-group">
  {!! Form::label('nombre', 'Nombre') !!}
  {!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre de la categoria']) !!}
</div>

<div class="form-group">
  {!! Form::label('descripcion', 'Descripcion') !!}
  {!! Form::textarea('descripcion', null, ['class' => 'form-control', 'rows' => '2', 'placeholder' => 'Ingrese la descripcion de la categoria']) !!}
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