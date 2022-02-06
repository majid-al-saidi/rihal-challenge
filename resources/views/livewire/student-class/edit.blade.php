<form wire:submit.prevent="submit" class="pt-3">

    <div class="form-group {{ $errors->has('studentClass.class_name') ? 'invalid' : '' }}">
        <label class="form-label required dark:text-light" for="class_name">{{ trans('cruds.studentClass.fields.class_name') }}</label>
        <input class="form-control" type="text" name="class_name" id="class_name" required wire:model.defer="studentClass.class_name">
        <div class="validation-message">
            {{ $errors->first('studentClass.class_name') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.studentClass.fields.class_name_helper') }}
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.student-classes.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>