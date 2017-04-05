<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 3/16/2017
 * Time: 16:03
 */
?>

@extends('layouts.layout')

@section('title', 'create')
@section('icon', 'fa fa-suitcase')
@section('page_header', 'Create Job')

@section('content')

    {!! Breadcrumbs::render('job.create') !!}
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('job.index') }}"> Back</a>
            </div>
        </div>
    </div>

    {!! Form::open(array('route' => 'job.store','method'=>'POST', 'files' => true, 'enctype' => 'multipart/form-data')) !!}
    <div class="row">

        <div class="col-md-12">
            <div class="form-group">
                <strong>Job Name:</strong>
                {!! Form::text('name', null, array('placeholder' => 'Job Name','class' => 'form-control', 'id' => 'name')) !!}
            </div>
        </div>

        <div class="col-md-12">
            <div class="form-group">
                <strong>Job Alias:</strong>
                {!! Form::text('alias', null, array('placeholder' => 'Job Alias','class' => 'form-control', 'id' => 'alias')) !!}
            </div>
        </div>

        <div class="col-md-12">
            <div class="form-group">
                <strong>Job Introduce:</strong>
                {!! Form::textarea('introduce', null, array('placeholder' => 'Job Introduce','class' => 'form-control','style'=>'height:70px', 'id' => 'introduce')) !!}
            </div>
        </div>

        <div class="col-md-12">
            <div class="form-group">
                <strong>Upload Image:</strong>
                {!! Form::file('images', array('id' => 'image_input'))!!}
            </div>
        </div>

        <div class="col-md-12">
            <div class="form-group">
                <strong>Tags:</strong>
                <select multiple name="tags[]">
                    @foreach($tags as $key => $tag)
                        <option value="{{$tag->id}}">{{$tag->name}}</option>
                    @endforeach
                </select>

            </div>
        </div>

        <div class="col-md-12">
            <div class="form-group">
                <strong>Job Description:</strong>
                {!! Form::textarea('description', null, array('placeholder' => 'Job Description','class' => 'form-control','style'=>'height:100px', 'id' => 'description')) !!}
            </div>
        </div>

        <div class="col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
    {!! Form::close() !!}
@endsection



