@extends('layouts.admin')

@section('content')
    <div class="row dashboard">
        <div class="form-group">
            <button class="btn btn-primary">
                <a class="link" href="{{url('student/create')}}">{{trans('student.add')}}</a>
            </button>
        </div>
    </div>
    @include('partials.list')
@stop