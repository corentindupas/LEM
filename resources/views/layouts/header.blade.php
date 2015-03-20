<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF8">
    <title>{{ $title or "Blog-Laravel" }}</title>
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/bootstrap-theme.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <script src="{{asset('bower/jquery/dist/jquery.min.js')}}" type="text/javascript"></script>
</head>
<body>
<div class="container navigation">
    <!-- class row  -->
    <div class="row navigation">
       @include('layouts.nav')
    </div>
</div>
<!-- navigation -->