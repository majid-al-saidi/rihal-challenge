@extends('layouts.k-wd')
@section('content')
<div >
    <div class="card " style="padding: 5%">

            <div class="inline-block text-2xl font-bold tracking-wider uppercase">
                
                    {{ trans('global.view') }}
                    {{ trans('cruds.role.title_singular') }}:
                    {{ trans('cruds.role.fields.id') }}
                    {{ $role->id }}
                
            </div>

        <div class="">
            <div class="pt-3">
                <table class="table table-view w-full">
                    <tbody >
                        <tr>
                            <th>
                                {{ trans('cruds.role.fields.id') }}
                            </th>
                            <td class="dark:text-light">
                                {{ $role->id }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.role.fields.title') }}
                            </th>
                            <td class="dark:text-light">
                                {{ $role->title }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.role.fields.permissions') }}
                            </th>
                            <td>
                                @foreach($role->permissions as $key => $entry)
                                    <span class="badge badge-relationship">{{ $entry->title }}</span>
                                @endforeach
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="form-group">
                @can('role_edit')
                    <a href="{{ route('admin.roles.edit', $role) }}" class="btn btn-indigo mr-2">
                        {{ trans('global.edit') }}
                    </a>
                @endcan
                <a href="{{ route('admin.roles.index') }}" class="btn btn-secondary">
                    {{ trans('global.back') }}
                </a>
            </div>
        </div>
    </div>
</div>
@endsection