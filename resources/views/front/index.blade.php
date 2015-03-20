@extends('layouts.master')

@section('content')
    @if(isset($students))
        @foreach($students as $student)
            <div class="clearfix">
                <h2><a href="{{url('single/'.$student->id.'/'.$student->name)}}">{{$student->name}}</a></h2>
                <br><small>{{$student->getDate()}}</small>
        @endforeach
    @endif
@stop

@section('footer')
    @parent
    mentions légales
@stop