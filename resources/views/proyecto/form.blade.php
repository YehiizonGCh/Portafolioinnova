
<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Titulo') }}
            {{ Form::text('Titulo', $proyecto->Titulo, ['class' => 'form-control' . ($errors->has('Titulo') ? ' is-invalid' : ''), 'placeholder' => 'Titulo']) }}
            {!! $errors->first('Titulo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Descripcion') }}
            {{ Form::text('Descripcion', $proyecto->Descripcion, ['class' => 'form-control' . ($errors->has('Descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
            {!! $errors->first('Descripcion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <!-- <div class="form-group">
            {{ Form::label('Imagen') }}
            {{ Form::text('Imagen', $proyecto->Imagen, ['class' => 'form-control' . ($errors->has('Imagen') ? ' is-invalid' : ''), 'placeholder' => 'Imagen']) }}
            {!! $errors->first('Imagen', '<div class="invalid-feedback">:message</div>') !!}
        </div> -->
        <div class="form-group">
            {{ Form::label('Imagen') }}
            <div class="custom-file">
                {{ Form::file('Imagen', ['class' => 'custom-file-input' . ($errors->has('Imagen') ? ' is-invalid' : ''), 'id' => 'customFile']) }}
                {{ Form::label('customFile', 'Choose file', ['class' => 'custom-file-label']) }}
            </div>
            {!! $errors->first('Imagen', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('URL') }}
            {{ Form::text('URL', $proyecto->URL, ['class' => 'form-control' . ($errors->has('URL') ? ' is-invalid' : ''), 'placeholder' => 'Url']) }}
            {!! $errors->first('URL', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>