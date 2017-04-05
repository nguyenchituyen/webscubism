@extends('layouts.layout')

@section('title', 'create')
@section('icon', 'icon_genius')
@section('page_header', 'Create Role')

@section('content')
    {!! Breadcrumbs::render('role.create') !!}
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('role.index') }}"> Back</a>
            </div>
        </div>
    </div>
    {!! Form::open(array('route' => 'role.store','method'=>'POST')) !!}
    @include('roles.role_form')
    {!! Form::close() !!}
@endsection