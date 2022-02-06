@extends('layouts.k-wd')
@section('content')
<div >
    <div class="card " style="padding: 5%">
        <div class="inline-block text-2xl font-bold tracking-wider uppercase">
            
                <h6 >
                    {{ trans('global.edit') }}
                    {{ trans('cruds.country.title_singular') }}:
                    {{ trans('cruds.country.fields.id') }}
                    {{ $country->id }}
                </h6>
            
        </div>

        <div class="card-body">
            @livewire('country.edit', [$country])
        </div>
    </div>
</div>
@endsection