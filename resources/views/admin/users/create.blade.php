@extends('layouts.admin')

@section('content')


    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Create User</h1>
                </div>
            </div>
        </div>
    </div>

    {!! Form::open(['method'=>'POST','action'=>'AdminUsersController@store','files'=>true])!!}
    <div class="container">
        <div class="form-group">
            {!! Form::label('name','Username') !!}
            {!! Form::text('name',null,['class'=>'form-control'])!!}
        </div>
        <div class="form-group">
            {!! Form::label('email','Email') !!}
            {!! Form::email('email',null,['class'=>'form-control'])!!}
        </div>
        <div class="form-group">
            {!! Form::label('password','Password') !!}
            {!! Form::password('password',['class'=>'form-control'])!!}
        </div>
        <div class="form-group">
            {!! Form::label('role_id','Role') !!}
            {!! Form::select('role_id',[''=>'Choose from options']+ $roles,null,['class'=>'form-control'])!!}

        </div>
        <div class="form-group">
            {!! Form::label('is_active','Status') !!}
            {!! Form::select('is_active',array(1=> 'Active' ,0=> 'Not Active') ,0,['class'=>'form-control'])!!}

        </div>
        <div class="form-group">
            {!! Form::label('file','Status') !!}
            {!! Form::file('file',['class'=>'form-control'])!!}

        </div>
            <br><br>
            <div class="form-group">
                {!! Form::submit('Create User',['class'=>'btn btn-primary'])!!}
            </div>
    </div>
    {!! Form::close() !!}

    @include('includes.form_errors')
    @endsection