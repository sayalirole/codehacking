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
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Id</th>
            <td>Username</td>
            <td>Category</td>
            <th>Post image</th>
            <th>Title</th>
            <th>Body</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @if($post)
            @foreach($post as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->user->name}}</td>
                    <td>{{$user->category->name}}</td>
                    <td><img height="50" width="50" src="{{$user->photo ? $user->photo->photo : 'http://placehold.it/200x200' }}" class="img-responsive img-circle"></td>
                    <td>{{$user->title}}</td>
                    <td>{{str_limit($user->body,7)}}</td>
                    <td>
                        <a href="{{route('posts.edit',$user->id)}}"><input type="submit" class="btn-primary btn btn-sm" value="Edit"></a>
                        {!! Form::open(['method'=>'DELETE','action'=>['AdminPostsController@destroy',$user->id],'files'=>true])!!}
                        {!! Form::submit('Delete',['class'=>'btn btn-danger btn btn-sm'])!!}
                        {!! Form::close() !!}
                    </td>

            @endforeach
        @endif
        </tbody>
    </table>



@endsection