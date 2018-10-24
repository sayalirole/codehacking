@extends('layouts.admin')

@section('content')

    @if(Session::has('deleted_user'))

        <p class="bg-danger">{{session('deleted_user')}}</p>

        @endif
        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>User</h1>
                    </div>
                </div>
            </div>
        </div>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Id</th>
            <th>Photo</th>
            <th>Username</th>
            <th>Email</th>
            <th>Role</th>
            <th>Active</th>
            <th>Created_at</th>
            <th>Updated_at</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @if($users)
            @foreach($users as $user)

        <tr>
            <td>{{$user->id}}</td>
            <td><img height="50" width="50" src="{{$user->photo ? $user->photo->photo : 'http://placehold.it/200x200' }}" class="img-responsive img-circle"></td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->role->name}}</td>
            <td>{{$user->is_active == 1 ? 'Active' : 'Not Active'}}</td>
            <td>{{$user->created_at->diffForHumans()}}</td>
            <td>{{$user->updated_at->diffForHumans()}}</td>
            <td>
                <a href="{{route('users.edit',$user->id)}}"><input type="submit" class="btn-primary btn btn-sm" value="Edit"></a>
                {!! Form::open(['method'=>'DELETE','action'=>['AdminUsersController@destroy',$user->id],'files'=>true])!!}
                        {!! Form::submit('Delete',['class'=>'btn btn-danger btn btn-sm'])!!}
                {!! Form::close() !!}
            </td>
        </tr>
             @endforeach
        @endif
        </tbody>
    </table>
    </div>
@endsection