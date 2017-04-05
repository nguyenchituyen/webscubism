<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 3/16/2017
 * Time: 16:17
 */
?>
@extends('layouts.layout')

@section('title', 'edit')
@section('icon', 'fa fa-suitcase')
@section('page_header', 'Edit Job')

@section('content')
    {!! Breadcrumbs::render('job.edit', $job->id) !!}
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Item</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('job.index') }}"> Back</a>
            </div>
        </div>
    </div>

    {!! Form::model($job, ['method' => 'PATCH', 'route' => ['job.update', $job], 'files' => true, 'enctype' => 'multipart/form-data']) !!}
    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Job Name:</strong>
                {!! Form::text('name', null, array('placeholder' => 'JobID', 'class' => 'form-control', 'id' => 'name')) !!}
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
                @if(!empty($job->images))
                    <img src="{{URL::to($job->images)}}" id='image_show' style='width:15%'>
                @endif
            </div>
        </div>

        <div class="col-md-12">
            <div class="form-group">
                <strong>Tags:</strong>
                <select multiple name="tags[]" style="width:10%">
                    @foreach($tags as $key => $tag)
                        @if(in_array($tag->id, $selected))
                            <option value="{{$tag->id}}" selected>{{$tag->name}}</option>
                        @else
                            <option value="{{$tag->id}}" >{{$tag->name}}</option>
                        @endif
                    @endforeach
                </select>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Job Description:</strong>
                {!! Form::textarea('description', null, array('placeholder' => 'JobName','class' => 'form-control','style'=>'height:100px', 'id' => 'description')) !!}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>

    </div>
    {!! Form::close() !!}
@endsection
