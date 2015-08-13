@extends('layouts.admin.main')

@section('title')
    {{ $title }}
@stop

@section('content')



    <div class="col-lg-12">
        <section class="box ">

            <header class="panel_header">
                <h2 class="title pull-left">{{ $title  }}</h2>
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
                            </tr>
                            </thead>

                            <tfoot>
                            <tr>
                                <th>Id</th>
                                <th>Nombre</th>
                                <th>Descriccion</th>
                            </tr>
                            </tfoot>

                            <tbody>
                            @foreach($genres as $genre)
                                <tr>
                                    <td>{{ $genre->id  }}</td>
                                    <td>{{ $genre->name  }}</td>
                                    <td>{{ $genre->description }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section></div>
@stop

