@extends('layouts.k-wd')
@section('content')
<div >
    <div class="card " style="padding: 5%">
        <div class="inline-block text-2xl font-bold tracking-wider uppercase">
            
                <h6 >
                    {{ trans('global.edit') }}
                    {{ trans('cruds.studentClass.title_singular') }}:
                    {{ trans('cruds.studentClass.fields.id') }}
                    {{ $studentClass->id }}
                </h6>
            
        </div>

        <div class="card-body">
            @livewire('student-class.edit', [$studentClass])
        </div>
    </div>
</div>
@endsection