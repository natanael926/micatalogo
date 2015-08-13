@extends('layouts.admin.main')

@section('title')
    {{ $title }}
@stop

@section('content')
    <div class="col-lg-12">

        @if(Session::has('message'))
            <p class="alert alert-success"> <strong> {{ Session::get('message') }} </strong> </p>
        @endif

        <section class="box ">

            <header class="panel_header">
                <h2 class="title pull-left">{{ $title  }} </h2>
                <div class="pull-right" style="margin: 8px;">
                    <a href="{{ url('admin/genres/create') }}" class="btn btn-success">
                        <i class="glyphicon glyphicon-plus-sign"></i>
                    </a>
                </div>
            </header>

            <div class="content-body">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">


                        <table id="data_grid" class="table table-striped dt-responsive display" cellspacing="0" width="100%">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nombre</th>
                                <th>Descriccion</th>
                                <th></th>
                            </tr>
                            </thead>

                            <tfoot>
                            <tr>
                                <th>Id</th>
                                <th>Nombre</th>
                                <th>Descriccion</th>
                                <th>
                                </th>
                            </tr>
                            </tfoot>

                            <tbody>
                            @foreach($genres as $genre)
                                <tr>
                                    <td>{{ $genre->id  }}</td>
                                    <td>{{ $genre->name  }}</td>
                                    <td>{{ $genre->description }}</td>
                                    <td>
                                        {!! link_to('admin/genres/' . $genre->id . '/edit', $title = 'Editar', ['class' => 'btn btn-primary btn-xs'], $secure = null); !!}
                                        {!! Form::open(['route' => ['admin.genres.destroy', $genre->id], 'method' => 'DELETE'])!!}
                                          {!! Form::submit('Eliminar', ['class' => 'btn btn-danger btn-xs']) !!}
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section></div>
@stop

