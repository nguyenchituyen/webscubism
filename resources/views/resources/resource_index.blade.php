@extends('layouts.layout')

@section('title', 'Resource')
@section('icon', 'icon_genius')
@section('page_header', 'ROLES ACTION MANAGEMENT')

@section('content')
    {!! Breadcrumbs::render('resource') !!}
    <table class="table table-striped" style="width: auto">
        <div class="row">
            <div class="col-lg-12">
                <tr>
                    <td><b>ID</b></td>
                    <td><b>Name</b></td>
                    <td><b>Controller</b></td>
                    <td><b>Permission Action</b></td>
                    <td><b>Type</b></td>
                    <td><b>Create Date</b></td>
                    <td><b>Update Date</b></td>
                    <td><b>Action</b></td>
                    <td><b></b></td>
                </tr>
                @foreach($resources as $resource)
                    <tr>
                        <td><b>{{$resource->id}}</b></td>
                        <td><b>{{$resource->name}}</b></td>
                        <td><b>{{$resource->controller}}</b></td>
                        <td><b>{{$resource->action}}</b></td>
                        <td><b>{{$resource->type}}</b></td>
                        <td><b>{{ date('Y/m/d', strtotime($resource->created_at)) }}</b></td>
                        <td><b>{{ date('Y/m/d', strtotime($resource->updated_at)) }}</b></td>
                        <td align="right">
                            <a class="btn btn-primary" href="{{ route('resource.edit',$resource->id) }}">Edit</a>
                            {!! Form::open(['method' => 'DELETE','route' => ['resource.destroy', $resource->id],'style'=>'display:inline','onsubmit' => 'return confirmDelete()']) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach
                {!! $resources->appends(request()->input())->links() !!}
            </div>
        </div>

        <div class="row" style="margin-bottom: 10px;">
            <form action="{{route('resource.search')}}" method="get">
                <div class="col-lg-12">
                    <input type="text" name="name" value=""/> <input type="submit" name="search" value="Search"/>
                </div>
            </form>
        </div>
    </table>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <a class="btn btn-success" href="{{ route('resource.create') }}"> Create New Role Action</a>
            </div>
        </div>
    </div>
@stop