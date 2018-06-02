@extends('layouts.master')

@section('title', 'Clientes | Listado')

@section('content')

<div class="container">
    <div class="card card-success card-outline mt-5">
        <div class="card-header">
            <h3>Listado de clientes </h3>
            <a href="{{ route('clientes.create') }}" class="btn btn-app btn-success float-right">
                <h6><i class="fas fa-plus text-success"></i> <p> Crear </p> </h6>
            </a>
            <p class="badge badge-info"> {{ $clientes->count() }} clientes </p>
        </div>

        <div class="card-body">
            <table id="clientesTable" class="table table-sm table-bordered">
                <thead>
                    <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col"> Telefono </th>
                    <th scope="col"> Empresa </th>
                    <th scope="col"> Ruc </th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    
                    @foreach ($clientes as $cliente)
                    <tr>
                        <td> {{ $cliente->nombre }} </td>
                        <td> {{ $cliente->apellido }} </td>
                        <td> {{ $cliente->telefono }} </td>
                        <td> {{ $cliente->empresa }} </td>
                        <td> {{ $cliente->ruc }} </td>
                        <td width="10px">
                            <a class="btn btn-sm btn-primary" href="{{ route('clientes.show', $cliente->id) }}">
                                <i class="far fa-eye text-success text-light"></i> 
                            </a>
                        </td>
                        <td width="10px">
                            <a class="btn btn-sm btn-warning" href="{{ route('clientes.edit', $cliente->id) }}">
                                <i class="far fa-edit text-success text-light"></i>
                            </a>
                        </td>
                        <td width="10px">
                            {!! Form::open(['route' => ['clientes.destroy', $cliente->id], 'method' => 'DELETE', 'onclick' => ' return confirm("Estas seguro?")']) !!}
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
        $('#clientesTable').DataTable({
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


