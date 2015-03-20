@extends('layouts.master')

@section('content')
 @if(isset($student))
            <div class="clearfix">
                <h1>{{$student->surname.' '.$student->name}}</h1>
                <h2>{{$student->formation}}</h2>
                </br>
                </br>
                <h3>{{$student->bio}}</h3>
    @endif
@stop

@section('footer')
    @parent
    mentions légales
@stop