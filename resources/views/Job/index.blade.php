<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 3/16/2017
 * Time: 15:11
 */
?>
@extends('layouts.layout')

@section('title', 'index')
@section('icon', 'fa fa-suitcase')
@section('page_header', 'Search Job')

@section('content')
    {!! Breadcrumbs::render('job') !!}
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <div style="margin-bottom: 10px; width: 500px;">
                    {!! Form::open(['method' => 'GET', 'route' => ['job.index'], 'style' => 'display:inline']) !!}
                    {!! Form::text('search_title', null, array('class' => 'form-control', 'style' => 'width:50%; float:left', 'placeholder' => 'Search')) !!}
                    {!! Form::submit('Search', ['class' => 'btn btn-submit']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
            <div class="pull-right" >
                <a class="btn btn-danger" href="#" onclick="deleteAllJob();">Delete</a>
            </div>
            <div class="pull-right" style=" margin-right: 5px">
                <a class="btn btn-success" href="{{ route('job.create')}}">Create</a>
            </div>
        </div>
    </div>

    <table class="table table-bordered">
        <tr>
            <th><input type="checkbox" id="select_all"/></th>
            <th>#</th>
            <th>Images</th>
            <th>Title</th>
            <th>Views</th>
            <th>Author</th>
            <th>Date Create</th>
            <th width="280px">Action</th>
        </tr>
        <input type="hidden" value="{{$i = 0}}"/>
        @foreach($jobs as $key => $job)
            <tr>
                <td><input class="checkbox" type="checkbox" name="check[]" value="{{ $job->id }}"></td>
                <td>{!! $i++ !!}</td>
                <td width="10%">

                    @if(!empty($job->images))
                        <img src="{{URL::to($job->images)}}" id='image_show' style='width:100%; height: 15%;'>
                    @else
                        <img src="{{asset('img/default.png')}}" id='image_show' style='width:100%; height: 15%;'>
                    @endif
                </td>
                <td>{{ $job->title }}</td>
                <td>{{ $job->views }}</td>
                <td>{{ $job->staff_name }}</td>
                <td>{{ $job->created_at }}</td>
                <td>
                    <a class="fa fa-search fa-lg" href="{{ route('job.show', $job->id) }}"></a>
                    <a class="fa fa-pencil-square-o fa-lg" href="{{ route('job.edit', $job->id) }}"></a>
                    <a class="fa fa-trash-o fa-lg" href="{{ route('job.delete', $job->id) }}"></a>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $jobs->render() !!}

@endsection