@extends('layouts.layout')

@section('title', 'Contacts')
@section('icon', 'icon_contacts_alt')
@section('page_header', 'CONTACTS MANAGEMENT')

@section('content')
    {!! Breadcrumbs::render('contact') !!}
    <table class="table table-striped" style="width: auto">
        <div class="row">
            <div class="col-lg-12">
                <tr>
                    <td><b>.No</b></td>
                    <td><b>Name</b></td>
                    <td><b>Email</b></td>
                    <td><b>Message</b></td>
                    <td><b>Status</b></td>
                </tr>
                @foreach($contacts as $contact)
                    <tr>
                        <td><b>{{$contact->id}}</b></td>
                        <td><b>{{$contact->name}}</b></td>
                        <td><b>{{$contact->email}}</b></td>
                        <td><b>{{$contact->message}}</b></td>
                        <td><b>{{$contact->status}}</b></td>
                    </tr>
                @endforeach
                {!! $contacts->appends(request()->input())->links() !!}
            </div>
        </div>
        <div class="row" style="margin-bottom: 10px;">
            <form action="{{  route('contact.search') }}" method="get">
                <div class="col-lg-12">
                    <input type="text" name="name" value=""/> <input type="submit" name="search" value="Search"/>
                </div>
            </form>
        </div>
    </table>
@endsection