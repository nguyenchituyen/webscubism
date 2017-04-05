@extends('layouts.layout')
@section('title', 'User Rights Assignment')
@section('icon', 'icon_document_alt')
@section('page_header', 'User Role Assignment')

@section('content')
    {!! Breadcrumbs::render('acl') !!}
    <div class="row">
        <div class="col-lg-12">
            <table class="table table-striped" style="width: auto">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>E-Mail</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        {{ csrf_field() }}
                        <td>
                            <a href="{{ route('acl.edit',$user->id) }}?username={{ $user->name }}" class="btn btn-sm btn-info">Assign role</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop