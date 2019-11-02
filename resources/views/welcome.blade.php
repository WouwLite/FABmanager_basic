@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Welkom bij de Food & Beverage Manager - Basic!</div>

                <div class="panel-body">
                    @if(Auth::guest())
                        <a href="/login" class="btn btn-success btn-block btn-lg" role="button">Aanmelden</a>
                    @else
                        <a href="/tasks-incomplete" class="btn btn-primary btn-block btn-lg" role="button">Bestellingen</a>
                    @endif()

{{--                    @if(Auth::user()->3)--}}
{{--                            <a href="/special/aafjednp-plattegrond" class="btn btn-default btn-block btn-lg" role="button">Plattegrond DNP</a>--}}
{{--                    @endif--}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
