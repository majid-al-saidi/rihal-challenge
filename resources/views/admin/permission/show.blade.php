@extends('layouts.k-wd')
@section('content')
<div >
    <div class="card " style="padding: 5%">

            <div class="inline-block text-2xl font-bold tracking-wider uppercase">
                
                    {{ trans('global.view') }}
                    {{ trans('cruds.permission.title_singular') }}:
                    {{ trans('cruds.permission.fields.id') }}
                    {{ $permission->id }}
                
            </div>

        <div class="">
            <div class="pt-3">
                <table class="table table-view w-full">
                    <tbody >
                        <tr>
                            <th>
                                {{ trans('cruds.permission.fields.id') }}
                            </th>
                            <td class="dark:text-light">
                                {{ $permission->id }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.permission.fields.title') }}
                            </th>
                            <td class="dark:text-light">
                                {{ $permission->title }}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="form-group">
                @can('permission_edit')
                    <a href="{{ route('admin.permissions.edit', $permission) }}" class="btn btn-indigo mr-2">
                        {{ trans('global.edit') }}
                    </a>
                @endcan
                <a href="{{ route('admin.permissions.index') }}" class="btn btn-secondary">
                    {{ trans('global.back') }}
                </a>
            </div>
        </div>
    </div>
</div>
@endsection