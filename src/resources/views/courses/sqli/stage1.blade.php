@extends('layouts.study-layout')

@section('title', 'SQL')

@section('content')
<div>
    <div class="flex">
        <div style="width: 60%;">@include('courses.sqli.right-content')</div>
        <div style="width: 40%;">@include('courses.sqli.iframe',['url'=>'http://127.0.0.1:20001'])</div>
    </div>
</div>
@endsection

