<!-- New Task Form -->
{!! Form::model(new App\Task, ['route' => ['tasks.store'], 'class'=>'form-horizontal', 'role' => 'form']) !!}

    <!-- Location -->
    <div class="form-group">
        <label for="task-name" class="col-sm-3 control-label">Ruimte</label>

        <div class="col-sm-6">
            <input type="text" name="name" id="task-name" class="form-control" value="{{ old('task') }}">
        </div>
    </div>

    <!-- Type -->
{{--    <div class="form-group">--}}
{{--        <label for="task-name" class="col-sm-3 control-label">Type</label>--}}

{{--        <div class="col-sm-6">--}}
{{--            <input type="text" name="type" id="type" class="form-control" value="{{ old('task') }}" disabled>--}}
{{--        </div>--}}
{{--    </div>--}}

    <!-- MAC address -->
    <div class="form-group">
        <label for="task-description" class="col-sm-3 control-label">MAC/SWI/Overige info</label>

        <div class="col-sm-6">
{{--            <trix-editor input="description"></trix-editor>--}}
            <input type="text" name="description" id="task-description" class="form-control" value="{{ old('task') }}" maxlength="100">
        </div>
    </div>

    <!-- IP Address -->
{{--    <div class="form-group">--}}
{{--        <label for="task-name" class="col-sm-3 control-label">IP Adres</label>--}}

{{--        <div class="col-sm-6">--}}
{{--            <input type="text" name="ip" id="ip" class="form-control" value="{{ old('task') }}" disabled>--}}
{{--        </div>--}}
{{--    </div>--}}

    <!-- Patchnumber -->
    <div class="form-group">
        <label for="patchnumber" class="col-sm-3 control-label">Patchnummer</label>

        <div class="col-sm-6">
            <input type="text" name="patchnumber" id="patchnumber" class="form-control" value="{{ old('task') }}" maxlength="100">
        </div>
    </div>

{{--    <!-- Is patched -->--}}
{{--    <div class="form-group">--}}
{{--        <label for="task-name" class="col-sm-3 control-label">Gepatched</label>--}}

{{--        <div class="col-sm-6">--}}
{{--            <input type="text" name="is_patched" id="is_patched" class="form-control" value="{{ old('task') }}" disabled>--}}
{{--        </div>--}}
{{--    </div>--}}

    <!-- Add Task Button -->
    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-6">
             {{Form::button('<span class="fa fa-plus fa-fw" aria-hidden="true"></span> Aanmaken', array('type' => 'submit', 'class' => 'btn btn-success'))}}
        </div>
    </div>

{!! Form::close() !!}