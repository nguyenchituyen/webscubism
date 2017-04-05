@extends('layouts.layout')

@section('title', 'role')
@section('icon', 'icon_genius')
@section('page_header', 'ROLES MANAGEMENT')

@section('content')
    {!! Breadcrumbs::render('role') !!}
    <table class="table table-striped" style="width: auto">
        <div class="row">
            <div class="col-lg-12">
                <tr>
                    <td><b>ID</b></td>
                    <td><b>Name</b></td>
                    <td><b>Description</b></td>
                    <td><b>Create Date</b></td>
                    <td><b>Update Date</b></td>
                    <td><b>Action</b></td>
                    <td><b></b></td>
                </tr>
                @foreach($roles as $role)
                    <tr>
                        <td><b>{{$role->id}}</b></td>
                        <td><b>{{$role->name}}</b></td>
                        <td><b>{{$role->description}}</b></td>
                        <td><b>{{ date('Y/m/d', strtotime($role->created_at)) }}</b></td>
                        <td><b>{{ date('Y/m/d', strtotime($role->updated_at)) }}</b></td>
                        <td align="right">
                            <a class="btn btn-primary" href="{{ route('role.edit',$role->id) }}">Edit</a>
                            {!! Form::open(['method' => 'DELETE','route' => ['role.destroy', $role->id],'style'=>'display:inline','onsubmit' => 'return confirmDelete()']) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach
                {!! $roles->appends(request()->input())->links() !!}
            </div>
        </div>
        <div class="row" style="margin-bottom: 10px;">
            <form action="{{route('role.search')}}" method="get">
                <div class="col-lg-12">
                    <input type="text" name="name" value=""/> <input type="submit" name="search" value="Search"/>
                </div>
            </form>
        </div>
    </table>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <a class="btn btn-success" href="{{ route('role.create') }}"> Create New Role</a>
            </div>
        </div>
    </div>
@stop