<tr>

    <!-- Task Status -->
    <td>

        @if ($task->completed === 1)

            <a href="{{ route('tasks.edit', $task->id) }}">
                <span class="label label-success">
                    Verwerkt
                </span>
            </a>

        @else

            <a href="{{ route('tasks.edit', $task->id) }}">
                <span class="label label-danger">
                    Open <i class="fa fa-wrench"></i>
                </span>
            </a>

        @endif

{{--    </td>--}}

{{--    <td>--}}

{{--        @if ($task->completed === 0)--}}

{{--            <span class="label label-success">--}}
{{--                <label for="status">--}}
{{--                    {!! Form::checkbox('completed', 1, null, ['id' => 'status']) !!} {!! Form::submit('Vink') !!}--}}
{{--                </label>--}}
{{--            </span>--}}

{{--        @endif--}}

{{--    </td>--}}

    <!-- Task Name -->
    <td class="table-text">
        <span class="label label-primary">
            <strong>{{ $task->name }}</strong>
        </span>
    </td>

    <!-- Task Description -->
    <td>
        {{ $task->description }}
    </td>

    <!-- Task Description -->
    <td>
        {{ $task->patchnumber }}
    </td>

</tr>
