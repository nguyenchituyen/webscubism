@extends('layouts.layout')

@section('title', 'edit')
@section('icon', 'icon_genius')
@section('page_header', 'Edit Role Action')

@section('content')
    {!! Breadcrumbs::render('resource.edit', $roleAction['role_action_id']) !!}
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('resource.index') }}"> Back</a>
            </div>
        </div>
    </div>
    {!! Form::model($roleAction, ['method' => 'PATCH','route' => ['resource.update', $roleAction['role_action_id']]]) !!}
    @include('resources.resource_form')
    {!! Form::close() !!}
@endsection