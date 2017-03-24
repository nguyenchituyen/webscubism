@extends('layouts.layout')

@section('title', 'profile')
@section('icon', 'icon_document_alt')
@section('page_header', 'Profile')

@section('content')
    {!! Breadcrumbs::render('user.show', $user->id) !!}
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('user.index') }}"> Back</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $user->name}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email:</strong>
                {{ $user->email}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Password:</strong>
                @for ($i =0; $i < strlen($user->password); $i++)
                    <strong>*</strong>
                @endfor
            </div>
        </div>
    </div>
@endsection