@extends('layouts.layout')

@section('title', 'user')
@section('icon', 'icon_document_alt')
@section('page_header', 'USERS MANAGEMENT')

@section('content')
    {!! Breadcrumbs::render('user') !!}
    <table class="table table-striped" style="width: auto">
        <div class="row">
            <div class="col-lg-12">
                <tr>
                    <td><b>ID</b></td>
                    <td><b>Name</b></td>
                    <td><b>Email</b></td>
                    <td><b>Create Date</b></td>
                    <td><b>Update Date</b></td>
                    <td><b>Action</b></td>
                </tr>
                @foreach($users as $user)
                    <tr>
                        <td><b>{{$user->id}}</b></td>
                        <td><b>{{$user->name}}</b></td>
                        <td><b>{{$user->email}}</b></td>
                        <td><b>{{$user->created_at}}</b></td>
                        <td><b>{{$user->updated_at}}</b></td>
                        <td align="right">
                            <a class="btn btn-info" href="{{ route('user.show',$user->id) }}">Show</a>
                            <a class="btn btn-primary" href="{{ route('user.edit',$user->id) }}">Edit</a>
                            {!! Form::open(['method' => 'DELETE','route' => ['user.destroy', $user->id],'style'=>'display:inline','onsubmit' => 'return confirmDelete()']) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach
                {!! $users->appends(request()->input())->links() !!}
            </div>
        </div>
        <div class="row" style="margin-bottom: 10px;">
            <form action="{{route('user.search')}}" method="get">
                <div class="col-lg-12">
                    <input type="text" name="name" value=""/>
                    <input type="submit" name="search" value="Search"/>
                </div>
            </form>
        </div>
    </table>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <a class="btn btn-success" href="{{ route('user.create') }}"> Create New User</a>
            </div>
        </div>
    </div>
@endsection