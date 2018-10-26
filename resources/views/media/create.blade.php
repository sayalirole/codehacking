@extends('layouts.admin')

@section('style')


    <style rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/basic.css"></style>
@stop


@section('content')

    <h1>Create Media</h1>

    {!! Form::open(['method'=>'POST','action'=>'AdminMediaController@store','class'=>'dropzone'])!!}


    {!! Form::close() !!}

@stop

@section('script')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.js"></script>
    @stop