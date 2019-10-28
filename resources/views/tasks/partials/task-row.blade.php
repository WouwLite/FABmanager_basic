<tr>

    <!-- Task Status -->
    <td>

        @if ($task->completed === 1)

            <a href="{{ route('tasks.edit', $task->id) }}">
                <span class="label label-success">
                    Afgeleverd
                </span>
            </a>

        @else

            <a href="{{ route('tasks.edit', $task->id) }}">
                <span class="label label-danger">
                    Open
                </span>
            </a>

        @endif

    </td>

{{--    <!-- Task Edit Icon -->--}}
{{--    <td>--}}
{{--        <a href="{{ route('tasks.edit', $task->id) }}">--}}
{{--            <span class="label label-info">--}}
{{--                Aanpassen--}}
{{--            </span>--}}
{{--        </a>--}}
{{--    </td>--}}

    <!-- Task Name -->
    <td class="table-text">
        {{ $task->name }}
    </td>

    <!-- Task Description -->
    <td>
        {{ $task->description }}
    </td>

    <!-- Task Status Checkbox -->
{{--    <td>--}}

{{--        {!! Form::model($task, array('action' => array('TasksController@update', $task->id), 'method' => 'PUT', 'class'=>'form-inline', 'role' => 'form')) !!}--}}
{{--            <div class="checkbox">--}}
{{--                <label for="completed">--}}
{{--                    {!! Form::checkbox('completed', 1, $task->completed, ['id' => 'completed','onClick' => 'this.form.submit()']) !!}--}}
{{--                </label>--}}
{{--            </div>--}}
{{--        {!! Form::close() !!}--}}

{{--    </td>--}}

    <!-- Task Time -->
    <!-- <td class="table-text">
{{--        {{ $task->updated_at }}--}}
    </td> -->
</tr>
