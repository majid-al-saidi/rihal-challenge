@extends('layouts.k-wd')
@section('content')
<div >
    <div style="padding: 2%">
        <div class="inline-block text-2xl font-bold tracking-wider uppercase text-primary-dark dark:text-light">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('cruds.role.title_singular') }}
                    {{ trans('global.list') }}
                </h6>

                
                
            </div>
        </div>
        @livewire('role.index')

    </div>
</div>
@endsection