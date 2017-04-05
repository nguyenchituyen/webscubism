@extends('layouts.layout')

@section('title', 'edit')
@section('icon', 'icon_genius')
@section('page_header', 'Edit Role')

@section('content')
    {!! Breadcrumbs::render('role.edit', $role->id) !!}
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('role.index') }}"> Back</a>
            </div>
        </div>
    </div>
    {!! Form::model($role, ['method' => 'PATCH','route' => ['role.update', $role->id]]) !!}
    @include('roles.role_form')
    {!! Form::close() !!}
@endsection