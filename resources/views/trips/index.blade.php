@extends('layouts.app')

@section('content')
    <h1>All Trips</h1>
    @if(count($trips) >0)
        @foreach($trips as $trip)
            <div class="well">
                <div class="container"> 
                    <div class="row">
                        <div class="col-sm-8">
                            <h3>{{$trip->destination}}</h3> 
                            <i>{{$trip->start_date}} to {{$trip->end_date}}</i>
                        </div>
                        
                        <!--Buttons below only visible if authenticated-->
                        @if(!Auth::guest())
                            @if(Auth::user()->id == $trip->user_id)
                                <div class="col-sm-4">
                                    <div style="width:150px">
                                    {!! Form::open(['action' => ['TripsController@destroy',$trip->trip_id],'method' => 'POST']) !!}
                                        {{Form::hidden('_method','DELETE')}}
                                        {{Form::submit('Delete Trip', ['class' => 'btn btn-danger btn-block'])}}
                                    {!! Form::close()!!}
                                    <a href="" class="btn btn-primary btn-block disabled">Edit Trip</a>
                                    <a href="" class="btn btn-primary btn-block">Reset Preferences</a>
                                    </div>
                                </div>
                            @endif
                        @endif
                    </div>
                </div>
            </div>
        @endforeach
        {{$trips->links()}}
    @else
        <p>No trips found</p>
    @endif
@endsection