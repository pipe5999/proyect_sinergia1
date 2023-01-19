@extends('layouts.app')

@section('template_title')
    {{ $cliente->name ?? 'Show Cliente' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Cliente</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('clientes.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Tipo Documento:</strong>
                            {{ $cliente->tipo_documento }}
                        </div>
                        <div class="form-group">
                            <strong>Numero Documento:</strong>
                            {{ $cliente->numero_documento }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre 1:</strong>
                            {{ $cliente->nombre_1 }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre 2:</strong>
                            {{ $cliente->nombre_2 }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido 1:</strong>
                            {{ $cliente->apellido_1 }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido 2:</strong>
                            {{ $cliente->apellido_2 }}
                        </div>
                        <div class="form-group">
                            <strong>Genero Id:</strong>
                            {{ $cliente->genero_id }}
                        </div>
                        <div class="form-group">
                            <strong>Departamento Id:</strong>
                            {{ $cliente->departamento_id }}
                        </div>
                        <div class="form-group">
                            <strong>Municipio Id:</strong>
                            {{ $cliente->municipio_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
