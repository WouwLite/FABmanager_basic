<div class="tab-pane {{{ $status or '' }}}" id="{{ $tab }}">
    <h1>
        {{ $title }}
    </h1>

    <div class="table-responsive">
        <table class="table table-striped task-table table-condensed">
            <thead>
                <th>Status</th>
{{--                <th></th>--}}
                <th>Locatie</th>
                <th>Bestelling</th>
{{--                <th>Tijd</th>--}}
            </thead>
            <tbody>
                @foreach ($tasks as $task)
                    @include('tasks.partials.task-row')
                @endforeach
            </tbody>
        </table>
    </div>
</div>