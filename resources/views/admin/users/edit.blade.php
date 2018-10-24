@extends('layouts.admin')

@section('content')


    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Edit User</h1>
                </div>
            </div>
        </div>
    </div>
<div class="container">
        {!! Form::model($user ,['method'=>'PATCH','action'=>['AdminUsersController@update',$user->id],'files'=>true])!!}


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
                {!! Form::select('role_id',$roles,null,['class'=>'form-control'])!!}

            </div>
            <div class="form-group">
                {!! Form::label('is_active','Status') !!}
                {!! Form::select('is_active',array(1=> 'Active' ,0=> 'Not Active') ,0,['class'=>'form-control'])!!}

            </div>
            <div class="form-group">
                {!! Form::label('photo_id','Picture') !!}
                {!! Form::file('photo_id',['class'=>'form-control'])!!}

            </div>
            <div class="form-group">
                <img src="{{$user->photo ? $user->photo->photo : 'http://placehold.it/200x200' }}" class="img-responsive img-circle">
            </div>
            <br><br>
            <div class="form-group">
                {!! Form::submit('Edit User',['class'=>'btn btn-primary'])!!}
            </div>
        </div>
        {!! Form::close() !!}
</div>

    @include('includes.form_errors')
@endsection