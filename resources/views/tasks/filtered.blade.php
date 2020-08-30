@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-sm-offset-1 col-sm-10">

            <!-- Display Validation Errors -->
            @include('common.status')

            <!-- Current Tasks -->
            @if (count($tasks) > 0)

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-12">

                                @if (Request::is('tasks-all'))
                                    Alle apparaten
                                @elseif (Request::is('tasks-incomplete'))
                                    Nog niet verwerkte apparaten
                                @elseif (Request::is('tasks-complete'))
                                    Verwerkte apparaten
                                @else
                                    Geen apparaten
                                @endif

                                <div class="pull-right">

                                    <a href="{{ url('/tasks-all') }}" class="btn btn-sm btn-default {{ Request::is('tasks-all') ? 'active' : '' }}" type="button">
                                        <span class="fa fa-tasks" aria-hidden="true"></span> <span class="hidden-xs">Overzicht</span>
                                    </a>
                                    <a href="{{ url('/tasks-incomplete') }}" class="btn btn-sm btn-default {{ Request::is('tasks-incomplete') ? 'active' : '' }}" type="button">
                                        <span class="fa fa-square-o" aria-hidden="true"></span> <span class="hidden-xs">Openstaand</span>
                                    </a>
                                    <a href="{{ url('/tasks-complete') }}" class="btn btn-sm btn-default {{ Request::is('tasks-complete') ? 'active' : '' }}" type="button">
                                        <span class="fa fa-check-square-o" aria-hidden="true"></span> <span class="hidden-xs">Afgehandeld</span>
                                    </a>
                                    <a href="{{ url('/tasks/create') }}" class="btn btn-sm btn-primary" type="button">
                                        <span class="fa fa-plus" aria-hidden="true"></span> <span class="hidden-xs">Nieuw apparaat</span>
                                    </a>

                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped task-table table-condensed">
                                <thead>
                                    <th>Status</th>
{{--                                    <th>Vink</th>--}}
{{--                                    <th></th>--}}
                                    <th>Ruimte</th>
                                    <th>MAC/SWI/Overig</th>
                                    <th>Patchnummer</th>
                                   <!-- <th>Aangemaakt</th> -->
                                </thead>
                                <tbody>
                                    @foreach ($tasks as $task)
                                        @include('tasks.partials.task-row')
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="panel-footer">
                        <div class="row">
                            <div class="col-xs-12">
                                <a href="{{ url('/tasks/create') }}" class="btn btn-primary btn-block" type="button">
                                    <span class="fa fa-plus" aria-hidden="true"></span> Nieuw apparaat
                                </a>
                            </div>
                        </div>
                    </div>

                </div>

            @else

                <div class="panel panel-default">
                    <div class="panel-heading">
                        Nieuw apparaat toevoegen
                    </div>
                    <div class="panel-body">

                        @include('tasks.partials.create-task')

                    </div>
                </div>

            @endif

        </div>
    </div>
@endsection

@section('scripts')
    <script type="text/javascript">
        $(document).ready(function() {
            $('table').DataTable();
        } );
    </script>


    <script type="text/javascript">
        jQuery(document).ready(function ($) {
            $('#tabs').tab();
        });
    </script>

@endsection
