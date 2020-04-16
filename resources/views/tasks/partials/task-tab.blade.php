<div class="tab-pane {{{ $status or '' }}}" id="{{ $tab }}">
    <h1>
        {{ $title }}
    </h1>

    <div class="table-responsive">
        <table class="table table-striped task-table table-condensed">
            <thead>
                <th>Status</th>
{{--                <th></th>--}}
                <th>Ruimte</th>
                <th>MAC adres</th>
                <th>Patchnummer</th>
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