@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Welkom bij de Patch Tool!</div>

                <div class="panel-body">
                    @if(Auth::guest())
                        <a href="/login" class="btn btn-success btn-block btn-lg" role="button">Aanmelden</a>
                    @else
                        <a href="/tasks-incomplete" class="btn btn-primary btn-block btn-lg" role="button">Apparaten</a>
                    @endif()
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
