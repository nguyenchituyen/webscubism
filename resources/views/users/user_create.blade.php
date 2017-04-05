@extends('layouts.layout')

@section('title', 'create')
@section('icon', 'icon_document_alt')
@section('page_header', 'Create User')

@section('content')
    {!! Breadcrumbs::render('user.create') !!}
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('user.index') }}"> Back</a>
            </div>
        </div>
    </div>
    {!! Form::open(array('route' => 'user.store','method'=>'POST')) !!}
    @include('users.user_form')
    {!! Form::close() !!}
@endsection