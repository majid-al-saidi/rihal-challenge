@extends('layouts.k-wd')
@section('content')
<div >
    <div class="card " style="padding: 5%">

            <div class="inline-block text-2xl font-bold tracking-wider uppercase">
                
                    {{ trans('global.view') }}
                    {{ trans('cruds.country.title_singular') }}:
                    {{ trans('cruds.country.fields.id') }}
                    {{ $country->id }}
                
            </div>

        <div class="">
            <div class="pt-3">
                <table class="table table-view w-full">
                    <tbody >
                        <tr>
                            <th>
                                {{ trans('cruds.country.fields.id') }}
                            </th>
                            <td class="dark:text-light">
                                {{ $country->id }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.country.fields.name') }}
                            </th>
                            <td class="dark:text-light">
                                {{ $country->name }}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="form-group">
                @can('country_edit')
                    <a href="{{ route('admin.countries.edit', $country) }}" class="btn btn-indigo mr-2">
                        {{ trans('global.edit') }}
                    </a>
                @endcan
                <a href="{{ route('admin.countries.index') }}" class="btn btn-secondary">
                    {{ trans('global.back') }}
                </a>
            </div>
        </div>
    </div>
</div>
@endsection