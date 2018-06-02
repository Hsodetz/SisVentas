@extends('layouts.master')

@section('title', 'Categorias | Listado')

@section('content')

<div class="container">
    <div class="card card-success card-outline mt-5">
        <div class="card-header">
            <h3>Listado de Categorias </h3>
            <a href="{{ route('categorias.create') }}" class="btn btn-app btn-success float-right">
                <h6><i class="fas fa-plus text-success"></i> <p> Crear </p> </h6>
            </a>
            <p class="badge badge-info"> {{ $categorias->count() }} Categorias </p>
        </div>

        <div class="card-body">
            <table id="categoriasTable" class="table table-sm table-bordered">
                <thead>
                    <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Descripcion</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    
                    @foreach ($categorias as $categoria)
                    <tr>
                        <td> {{ $categoria->nombre }} </td>
                        <td> {{ $categoria->descripcion }} </td>
                        <td width="10px">
                            <a class="btn btn-sm btn-primary" href="{{ route('categorias.show', $categoria->id) }}">
                                <i class="far fa-eye text-success text-light"></i> 
                            </a>
                        </td>
                        <td width="10px">
                            <a class="btn btn-sm btn-warning" href="{{ route('categorias.edit', $categoria->id) }}">
                                <i class="far fa-edit text-success text-light"></i>
                            </a>
                        </td>
                        <td width="10px">
                            {!! Form::open(['route' => ['categorias.destroy', $categoria->id], 'method' => 'DELETE', 'onclick' => ' return confirm("Estas seguro?")']) !!}
                                <button class="btn btn-sm btn-danger">
                                    <i class="far fa-trash-alt text-light"></i>
                                </button>
                            {!! Form::close() !!}
                        </td>    
                    </tr> 
                    @endforeach
                
                </tbody>
            </table>
            
        </div>

    </div>
</div>

@stop

@section('scripts')
<script>
    $(document).ready( function () {
        $('#categoriasTable').DataTable({
            "language":{
                "search": "Buscar",
                "lengthMenu": "Mostrar _MENU_ registros por pagina",
                "paginate": {
                    "first": "Primero",
                    "last": "Ultimo",
                    "next": "Siguiente",
                    "previous": "Anterior"
                }
            },
            "paging": true,
            "lengthChange": true,
            "searching": true,
            "ordering": true,
            "info": false,
            "autoWidth": false,
        });
    });
</script>
@stop


