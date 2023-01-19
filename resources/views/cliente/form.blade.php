<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('tipo_documento') }}
            {{ Form::text('tipo_documento', $cliente->tipo_documento, ['class' => 'form-control' . ($errors->has('tipo_documento') ? ' is-invalid' : ''), 'placeholder' => 'Tipo Documento']) }}
            {!! $errors->first('tipo_documento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('numero_documento') }}
            {{ Form::text('numero_documento', $cliente->numero_documento, ['class' => 'form-control' . ($errors->has('numero_documento') ? ' is-invalid' : ''), 'placeholder' => 'Numero Documento']) }}
            {!! $errors->first('numero_documento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombre_1') }}
            {{ Form::text('nombre_1', $cliente->nombre_1, ['class' => 'form-control' . ($errors->has('nombre_1') ? ' is-invalid' : ''), 'placeholder' => 'Nombre 1']) }}
            {!! $errors->first('nombre_1', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombre_2') }}
            {{ Form::text('nombre_2', $cliente->nombre_2, ['class' => 'form-control' . ($errors->has('nombre_2') ? ' is-invalid' : ''), 'placeholder' => 'Nombre 2']) }}
            {!! $errors->first('nombre_2', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('apellido_1') }}
            {{ Form::text('apellido_1', $cliente->apellido_1, ['class' => 'form-control' . ($errors->has('apellido_1') ? ' is-invalid' : ''), 'placeholder' => 'Apellido 1']) }}
            {!! $errors->first('apellido_1', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('apellido_2') }}
            {{ Form::text('apellido_2', $cliente->apellido_2, ['class' => 'form-control' . ($errors->has('apellido_2') ? ' is-invalid' : ''), 'placeholder' => 'Apellido 2']) }}
            {!! $errors->first('apellido_2', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('genero_id') }}
            {{ Form::text('genero_id', $cliente->genero_id, ['class' => 'form-control' . ($errors->has('genero_id') ? ' is-invalid' : ''), 'placeholder' => 'Genero Id']) }}
            {!! $errors->first('genero_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('departamento_id') }}
            {{ Form::text('departamento_id', $cliente->departamento_id, ['class' => 'form-control' . ($errors->has('departamento_id') ? ' is-invalid' : ''), 'placeholder' => 'Departamento Id']) }}
            {!! $errors->first('departamento_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('municipio_id') }}
            {{ Form::text('municipio_id', $cliente->municipio_id, ['class' => 'form-control' . ($errors->has('municipio_id') ? ' is-invalid' : ''), 'placeholder' => 'Municipio Id']) }}
            {!! $errors->first('municipio_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>