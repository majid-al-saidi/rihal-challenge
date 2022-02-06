@extends('layouts.k-wd')
@section('content')
<div >
    <div class="card " style="padding: 5%">
        <div class="inline-block text-2xl font-bold tracking-wider uppercase">
            <div class="">
                <h6 >
                    {{ trans('global.create') }}
                    {{ trans('cruds.permission.title_singular') }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            @livewire('permission.create')
        </div>
    </div>
</div>
@endsection