@extends('layouts.admin')

@section('content')


    <h1>Media</h1>

    <table class="table table-striped">
        <thead>
        <tr>
            <th>Id</th>
            <td>Name</td>
            <th>Created_at</th>
        </tr>
        </thead>
        <tbody>
        @if($photo)
            @foreach($photo as $pics)
                <tr>
                    <td>{{$pics->id}}</td>
                    <td><img height="50" width="50" src="{{$pics->photo}}"></td>
                    <td>{{$pics->created_at}}</td>
                    <td>
                        {!! Form::open(['method'=>'DELETE','action'=>['AdminMediaController@destroy',$pics->id],'files'=>true])!!}
                            {!! Form::submit('Delete',['class'=>'btn btn-danger btn btn-sm'])!!}
                        {!! Form::close() !!}
                    </td>
            @endforeach
        @endif
        </tbody>
    </table>
@stop
