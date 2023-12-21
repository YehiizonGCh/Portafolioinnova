@extends('layouts.app')

@section('template_title')
    {{ $proyecto->name ?? "{{ __('Show') Proyecto" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Proyecto</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('proyectos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Titulo:</strong>
                            {{ $proyecto->Titulo }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $proyecto->Descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Imagen:</strong>
                            {{ $proyecto->Imagen }}
                        </div>
                        <div class="form-group">
                            <strong>Url:</strong>
                            {{ $proyecto->URL }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
