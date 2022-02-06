@extends('layouts.k-wd')
@section('content')
    <div>
        <div class="card " style="padding: 5%">

            <div class="inline-block text-2xl font-bold tracking-wider uppercase">

                {{ trans('global.view') }}
                {{ trans('cruds.user.title_singular') }}:
                {{ trans('cruds.user.fields.id') }}
                {{ $user->id }}

            </div>

            <div class="">
                <div class="pt-3">
                    <table class="table table-view w-full">
                        <tbody >
                            <tr>
                                <th>
                                    {{ trans('cruds.user.fields.id') }}
                                </th>
                                <td class="dark:text-light">
                                    {{ $user->id }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('cruds.user.fields.name') }}
                                </th>
                                <td class="dark:text-light">
                                    {{ $user->name }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('cruds.user.fields.email') }}
                                </th>
                                <td class="dark:text-light">
                                    <a class="link-light-blue" href="mailto:{{ $user->email }}">
                                        <i class="far fa-envelope fa-fw">
                                        </i>
                                        {{ $user->email }}
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('cruds.user.fields.email_verified_at') }}
                                </th>
                                <td class="dark:text-light">
                                    {{ $user->email_verified_at }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('cruds.user.fields.roles') }}
                                </th>
                                <td>
                                    @foreach ($user->roles as $key => $entry)
                                        <span class="badge badge-relationship">{{ $entry->title }}</span>
                                    @endforeach
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('cruds.user.fields.class') }}
                                </th>
                                <td>
                                    @if ($user->class)
                                        <span class="badge badge-relationship">{{ $user->class->class_name ?? '' }}</span>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('cruds.user.fields.country') }}
                                </th>
                                <td>
                                    @if ($user->country)
                                        <span class="badge badge-relationship">{{ $user->country->name ?? '' }}</span>
                                    @endif
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="form-group">
                    @can('user_edit')
                        <a href="{{ route('admin.users.edit', $user) }}" class="btn btn-indigo mr-2">
                            {{ trans('global.edit') }}
                        </a>
                    @endcan
                    <a href="{{ route('admin.users.index') }}" class="btn btn-secondary">
                        {{ trans('global.back') }}
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
