@extends('layouts.headerapp')
    
@section('content')

<div class="pageheader fixed-demo dark">
        <!-- agoda -->
        <div id="hero-banner" class="hero-banner-container" data-selenium="hero-banner" style="background-image: url(/images/mytrips.jpg);background-color: #aaa">
            <div class="container-agoda"> 
            <h1 id="hero-banner-header1" class=" fade-in " data-selenium="hero-banner-h1">My Trips</h1>                 
            </div>
        </div>    
    </div>

<div class="body_content">
    @if(count($trips) >0)
        @foreach($trips as $trip)
            <div class="well">
                <div class="container"> 
                    <div class="row">
                        <div class="col-sm-8">
                            <h3>{{$trip->destination_name}}</h3>
                            <small><i>{{$trip->departure_time}} to {{$trip->arrive_time}}</i></small> <br />
            
                                    <a href="/similarity/{{$trip->id}}">View my similarities</a>
                        
                        </div>
                        
                        <div class="col-sm-4">
                            <div style="width:150px">
                            {!! Form::open(['action' => ['TripsController@destroy',$trip->id],'method' => 'POST']) !!}
                                {{Form::hidden('_method','DELETE')}}
                                {{Form::submit('Delete Trip', ['class' => 'btn btn-danger btn-block'])}}
                            {!! Form::close()!!}
                    
                            
                                 <a href="/surveys/{{$trip->survey->survey_id}}/edit" class="btn btn-primary btn-block">Reset Preferences</a>
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        
    @else
        <p>No trips found</p>
    @endif
@endsection