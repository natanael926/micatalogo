@extends('layouts.admin.main')

@section('title')
    {{ $title }}
@stop

@section('content')
    <div class="col-lg-12">

        @if($errors->any())
           @include('admin.partials.messages')
        @endif

        <section class="box ">
            <header class="panel_header">
                <h2 class="title pull-left">{{ $title }}</h2>
            </header>
            <div class="content-body">    <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        {!! Form::open(array('url' => 'admin/genres' . $genre->id, 'id' => 'form')) !!}

                            @include('admin.genre.partials.fields')

                            <div class="pull-right">
                                {!! Form::submit('Guardar', ['class' => 'btn btn-success'] ) !!}
                                {!! link_to('admin/genres', $title = 'Cancel', $attributes = ['class' => 'btn'], $secure = null); !!}
                            </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </section>
    </div>
@stop