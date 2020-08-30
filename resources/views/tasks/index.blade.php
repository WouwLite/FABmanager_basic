@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-sm-offset-1 col-sm-10">

            <!-- Display Validation Errors -->
            @include('common.status')

            @if (count($tasks) > 0)

                <a href="/tasks-incomplete" class="btn btn-primary btn-block btn-lg" role="button">Nog niet verwerkte apparaten</a>
                <br>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        Nieuw apparaat toevoegen
                    </div>
                    <div class="panel-body">

                        @include('tasks.partials.create-task')

                    </div>
                </div>

                <div id="content">
                    <ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
                        <li class="active"><a href="#all" data-toggle="tab"><span class="fa fa-tasks" aria-hidden="true"></span> <span class="hidden-xs">Overzicht</span></a></li>
                        <li><a href="#incomplete" data-toggle="tab"><span class="fa fa-square-o" aria-hidden="true"></span> <span class="hidden-xs">Openstaand</span></a></li>
                        <li><a href="#complete" data-toggle="tab"><span class="fa fa-check-square-o" aria-hidden="true"></span> <span class="hidden-xs">Afgehandeld</span></a></li>
                    </ul>
                    <div id="my-tab-content" class="tab-content">

                        @include('tasks/partials/task-tab', array('tab' => 'overzicht', 'tasks' => $tasks, 'title' => 'Overzicht', 'status' => 'active'))
                        @include('tasks/partials/task-tab', array('tab' => 'niet verwerkt', 'tasks' => $tasksInComplete, 'title' => 'Niet verwerkt'))
                        @include('tasks/partials/task-tab', array('tab' => 'afgehandeld', 'tasks' => $tasksComplete, 'title' => 'Afgehandeld'))

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