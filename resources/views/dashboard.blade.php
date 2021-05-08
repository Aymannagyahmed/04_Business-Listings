@extends('layouts.app')
@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                {{ __('Dashboard') }}
                <span class="float-right"><a href="/listing/create" class="btn btn-success btn-xs">
                    Create Listing</a> </span></div>

            <div class="card-body">
                <h3>Your Listings</h3>
                @if (count($listings))
                    <table>
                        <tr>
                            <th>Company</th>
                            <th></th>
                            <th></th>
                        </tr>
                        @foreach ($listings as $listing)
                            <tr>
                                <td>{{$listing->name}}</td>
                                <td><a class="float-right btn btn-primary btn-xs" href="/listing/{{$listing->id}}/edit">Edit</a></td>
                                <td>
                                    {!! Form::open(['action' => ['ListingController@destroy',$listing->id],
                                        'method'=>'POST',
                                        'class'=>'float-left',
                                        'onsubmit'=>'return confirm("Are You sure")'])
                                    !!}
                                        {{Form::hidden('_method', 'DELETE') }}
                                        {{Form::bsSubmit('Delete',['class'=>'btn btn-danger'])}}
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach
                    </table>
                @endif
            </div>
        </div>
    </div>
</div>

@endsection
