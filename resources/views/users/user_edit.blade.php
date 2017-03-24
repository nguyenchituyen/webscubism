@extends('layouts.layout')

@section('title', 'edit')
@section('icon', 'icon_document_alt')
@section('page_header', 'Edit User')

@section('content')
    {!! Breadcrumbs::render('user.edit', $user->id) !!}
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('user.index') }}"> Back</a>
            </div>
        </div>
    </div>
    {!! Form::model($user, ['method' => 'PATCH','route' => ['user.update', $user->id]]) !!}
    @include('users.user_form')
    {!! Form::close() !!}
@endsection