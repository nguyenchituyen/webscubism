@extends('layouts.layout')

@section('title', 'create')
@section('icon', 'icon_genius')
@section('page_header', 'Create Role Action')

@section('content')
    {!! Breadcrumbs::render('resource.create') !!}
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('resource.index') }}"> Back</a>
            </div>
        </div>
    </div>
    {!! Form::open(array('route' => 'resource.store','method'=>'POST')) !!}
    @include('resources.resource_form')
    {!! Form::close() !!}
@endsection