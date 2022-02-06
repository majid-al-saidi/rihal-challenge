@extends('layouts.k-wd')
@section('content')
<div >
    <div class="card " style="padding: 5%">
        <div class="inline-block text-2xl font-bold tracking-wider uppercase">
            
                <h6 >
                    {{ trans('global.edit') }}
                    {{ trans('cruds.permission.title_singular') }}:
                    {{ trans('cruds.permission.fields.id') }}
                    {{ $permission->id }}
                </h6>
            
        </div>

        <div class="card-body">
            @livewire('permission.edit', [$permission])
        </div>
    </div>
</div>
@endsection