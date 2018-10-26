@extends('layouts.admin')

@section('content')


    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Edit Posts</h1>
                </div>
            </div>
        </div>
    </div>

    {!! Form::model($post,['method'=>'PATCH','action'=>['AdminPostsController@update',$post->id],'files'=>true])!!}
    <div class="container">
        <div class="form-group">
            {!! Form::label('title','Title') !!}
            {!! Form::text('title',null,['class'=>'form-control'])!!}
        </div>
        <div class="form-group">
            {!! Form::label('category_id','Category') !!}
            {!! Form::select('category_id',[''=>'Choose from options']+ $categories,null,['class'=>'form-control'])!!}
        </div>
        <div class="form-group">
            {!! Form::label('body','Body') !!}
            {!! Form::textarea('body',null,['class'=>'form-control'])!!}
        </div>
        <div class="form-group">
            {!! Form::label('photo_id','Picture') !!}
            {!! Form::file('photo_id',['class'=>'form-control'])!!}

        </div>
        <div class="form-group">
            <img height="150" width="150" src="{{$post->photo ? $post->photo->photo : 'http://placehold.it/200x200' }}" class="img-responsive img-circle">
        </div>
        <br><br>
        <div class="form-group">
            {!! Form::submit('Edit Post',['class'=>'btn btn-primary','rows'=>3])!!}
        </div>
    </div>
    {!! Form::close() !!}

    @include('includes.form_errors')

@endsection