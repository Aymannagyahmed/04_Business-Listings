@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                {{ __('Edit Listing') }}
                <a class="float-right btn btn-success btn-xs"  href="/dashboard">Back to Dashboard</a>
            </div>

            <div class="card-body">
                {!! Form::open(['action' => ['ListingController@update',$listing->id],'method'=>'POST']) !!}
                    {{Form::bsText('name',$listing->name,['placeholder'=>'Company Name'])}}
                    {{Form::bsText('website',$listing->website,['placeholder'=>'Company website'])}}
                    {{Form::bsText('email',$listing->email,['placeholder'=>'Contact Email'])}}
                    {{Form::bsText('phone',$listing->phone,['placeholder'=>'Contact Phone'])}}
                    {{Form::bsText('address',$listing->address,['placeholder'=>'Business Address'])}}
                    {{Form::bsTextArea('bio',$listing->bio,['placeholder'=>'About this Business'])}}
                    {{Form::hidden('_method', 'PUT') }}
                    {{Form::bsSubmit('submit')}}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>

@endsection