@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">

            <!-- Display Validation Errors -->
            @include('common.status')
            <div class="alert alert-info" role="alert">
                Binnenkort komen er nieuwe features! Wil je weten welke? <a href="/nieuwefeatures" class="alert-link">Check dan deze link</a>. Give it a click if you like.
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">
                    Nieuw apparaat toevoegen
                </div>
                <div class="panel-body">

                    @include('tasks.partials.create-task')

                </div>
                <div class="panel-footer">
                    <a href="{{ route('tasks.index') }}" class="btn btn-sm btn-default" type="button">
                        <span class="fa fa-reply" aria-hidden="true"></span> Terug naar overzicht
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection