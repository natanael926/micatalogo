@extends('layouts.admin.main')

@section('title')
    {{ $title }}
@stop

@section('content')
    <div class="col-lg-12">
        <section class="box ">
            <header class="panel_header">
                <h2 class="title pull-left">{{ $title }}</h2>
            </header>
            <div class="content-body">    <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        {!! Form::open(array('url' => 'admin/genres' . $genre->id, 'id' => 'form')) !!}
                            <div class="form-group">
                                    {!! Form::label('name', 'Nombre genero', ['class' => 'form-label']); !!}
                                <div class="controls">
                                    {!! Form::text('name', $genre->name, ['class' => 'form-control', 'id' => 'name', 'placeholder' => 'Por favor introduzca un nombre de genero']) !!}
                                </div>
                            </div>

                            <div class="form-group">
                                    {!! Form::label('description', 'Detalle', ['class' => 'form-label']); !!}
                                <div class="controls">
                                    {!! Form::text('description', $genre->description, ['class' => 'form-control', 'id' => 'description', 'placeholder' => 'Por favor introduzca un detalle del genero']) !!}
                                </div>
                            </div>

                            <div class="pull-right">
                                {!! Form::submit('Guardar', ['class' => 'btn btn-success'] ) !!}
                                {!! link_to('admin/genres', $title = 'Cancel', $attributes = ['class' => 'btn'], $secure = null); !!}
                            </div>

                            @if($genre->id)
                                {!! Form::hidden('_method', 'PUT') !!}
                            @endif

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </section>
    </div>
@stop