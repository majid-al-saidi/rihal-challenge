@extends('layouts.k-wd')
@section('content')
<div >
    <div class="card " style="padding: 5%">

            <div class="inline-block text-2xl font-bold tracking-wider uppercase">
                
                    {{ trans('global.view') }}
                    {{ trans('cruds.studentClass.title_singular') }}:
                    {{ trans('cruds.studentClass.fields.id') }}
                    {{ $studentClass->id }}
                
            </div>

        <div class="">
            <div class="pt-3">
                <table class="table table-view w-full">
                    <tbody >
                        <tr>
                            <th>
                                {{ trans('cruds.studentClass.fields.id') }}
                            </th>
                            <td class="dark:text-light">
                                {{ $studentClass->id }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.studentClass.fields.class_name') }}
                            </th>
                            <td class="dark:text-light">
                                {{ $studentClass->class_name }}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="form-group">
                @can('student_class_edit')
                    <a href="{{ route('admin.countries.edit', $studentClass) }}" class="btn btn-indigo mr-2">
                        {{ trans('global.edit') }}
                    </a>
                @endcan
                <a href="{{ route('admin.student-classes.index') }}" class="btn btn-secondary">
                    {{ trans('global.back') }}
                </a>
            </div>
        </div>
    </div>
</div>
@endsection