@extends('layouts.admin.main')

@section('title')
    {{ $title }}
@stop

@section('content')
    <div class="col-lg-12">
        <section class="box ">

            @include('layouts.admin.header')

            <div class="content-body">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <table id="data_grid" class="table table-striped dt-responsive display" cellspacing="0" width="100%">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nombre</th>
                                <th>Email</th>
                            </tr>
                            </thead>

                            <tfoot>
                            <tr>
                                <th>Id</th>
                                <th>Nombre</th>
                                <th>Email</th>
                            </tr>
                            </tfoot>

                            <tbody>
                             @foreach($users as $use)
                                 <tr>
                                     <td>{{ $use->id  }}</td>
                                     <td>{{ $use->name  }}</td>
                                     <td>{{ $use->email  }}</td>
                                 </tr>
                             @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section></div>
@stop

