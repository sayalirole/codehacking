@extends('layouts.admin')

@section('content')

    <div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Posts</h1>
            </div>
        </div>
    </div>
</div>

<div class="col-md-6">
    {!! Form::model($categories, ['method'=>'PATCH','action'=>['AdminCategoriesController@update',$categories->id],'files'=>true])!!}
        <div class="container">
            <div class="form-group">
                {!! Form::label('name','Name') !!}
                {!! Form::text('name',null,['class'=>'form-control'])!!}
            </div>
            <div class="form-group">
                {!! Form::submit('Create Category',['class'=>'btn btn-primary','rows'=>3])!!}
            </div>
        </div>
    {!! Form::close() !!}
</div>
@stop