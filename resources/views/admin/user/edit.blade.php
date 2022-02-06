@extends('layouts.k-wd')
@section('content')
<div >
    <div class="card " style="padding: 5%">
        <div class="inline-block text-2xl font-bold tracking-wider uppercase">
            
                <h6 >
                    {{ trans('global.edit') }}
                    {{ trans('cruds.user.title_singular') }}:
                    {{ trans('cruds.user.fields.id') }}
                    {{ $user->id }}
                </h6>
            
        </div>

        <div class="card-body">
            @livewire('user.edit', [$user])
        </div>
    </div>
</div>
@endsection