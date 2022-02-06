@extends('layouts.k-wd')
@section('content')
<div >
    <div class="card " style="padding: 5%">
        <div class="inline-block text-2xl font-bold tracking-wider uppercase">
            
                <h6 >
                    {{ trans('global.edit') }}
                    {{ trans('cruds.role.title_singular') }}:
                    {{ trans('cruds.role.fields.id') }}
                    {{ $role->id }}
                </h6>
            
        </div>

        <div class="card-body">
            @livewire('role.edit', [$role])
        </div>
    </div>
</div>
@endsection