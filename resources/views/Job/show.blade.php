<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 3/16/2017
 * Time: 16:15
 */
?>
@extends('layouts.layout')

@section('title', 'show')
@section('icon', 'fa fa-suitcase')
@section('page_header', 'Show Job')

@section('content')
    {!! Breadcrumbs::render('job.show', $job->id) !!}
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Item</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('job.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>JobID:</strong>
                {{ $job->id }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>JobName:</strong>
                {{ $job->name }}
            </div>
        </div>

        <div class="col-md-12">
            <div class="form-group">
                <strong>Job Alias:</strong>
                {{ $job->alias }}
            </div>
        </div>

        <div class="col-md-12">
            <div class="form-group">
                <strong>Job Introduce:</strong>
                {{ $job->introduce }}
            </div>
        </div>

        <div class="col-md-12">
            <div class="form-group">
                <strong>Upload Image:</strong>
                @if(!empty($job->images))
                    <img src="{{URL::to($job->images)}}" id='image_show' style='width:15%'>
                @endif
            </div>
        </div>

        <div class="col-md-12">
            <div class="form-group">
                <strong>Tags:</strong>
                <select multiple name="tags[]" disabled>
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

        <div class="col-md-12">
            <div class="form-group">
                <strong>Job Description:</strong>
                {!! $job->description !!}
            </div>
        </div>
    </div>
@endsection
