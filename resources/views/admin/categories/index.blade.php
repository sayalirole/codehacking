@extends('layouts.admin')

@section('content')

    @if(Session::has('deleted_post'))

        <p class="bg-danger">{{session('deleted_post')}}</p>

    @endif

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

        {!! Form::open(['method'=>'POST','action'=>'AdminCategoriesController@store'])!!}
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






    <div class="container">
        <div class="col-md-6">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Id</th>
                <td>Category Name</td>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @if($category)
                @foreach($category as $cate)
                    <tr>
                        <td>{{$cate->id}}</td>
                        <td>{{$cate->name}}</td>
                        <td>
                            <a href="{{route('categories.edit',$cate->id)}}"><input type="submit" class="btn-primary btn btn-sm" value="Edit"></a>
                            {!! Form::open(['method'=>'DELETE','action'=>['AdminCategoriesController@destroy',$cate->id]])!!}
                            {!! Form::submit('Delete',['class'=>'btn btn-danger btn btn-sm'])!!}
                            {!! Form::close() !!}
                        </td>

                @endforeach
            @endif
            </tbody>
        </table>
        </div>
    </div>



@endsection