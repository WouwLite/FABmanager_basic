@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    Je bent aangemeld!
                    <br>
                    <a href="/tasks-incomplete" class="btn btn-primary btn-block btn-lg" role="button">Apparaten</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
