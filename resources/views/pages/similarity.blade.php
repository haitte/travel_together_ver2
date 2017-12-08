@extends('layouts.headerapp')

@section('content')

<div class="pageheader fixed-demo dark">
        <!-- agoda -->
        <div id="hero-banner" class="hero-banner-container" data-selenium="hero-banner" style="background-image: url(/images/similarity.jpg);background-color: #aaa">
            <div class="container-agoda"> 
             @if(!Auth::guest())
    @if(Auth::user()->id == $my_trip->user_id)
            <h1 id="hero-banner-header1" class=" fade-in " data-selenium="hero-banner-h1">Congratulations {{$me->name}}! You have matched with</h1>                 
            </div>
        </div>    
    </div>
    
 <div class="body_content">  
        @if(!Auth::guest())
            @foreach($trips as $trip)
                @if( $trip -> destination_name == $my_trip -> destination_name )
                    @if(($my_trip->departure_time) <= ($trip->arrive_time)) 
                        <div class="well">
                        <h1>{{$trip->user->name}}</h1>
                        @if(($trip->survey->first_p) == ($my_trip->survey->first_p)||($trip->survey->second_p) == ($my_trip->survey->first_p)||($trip->survey->third_p) == ($my_trip->survey->first_p))
                        <p style="color:red;">Extremely Compatible!</p>
                        
                        @elseif(($trip->survey->first_p) == ($my_trip->survey->second_p)||($trip->survey->second_p) == ($my_trip->survey->second_p)||($trip->survey->third_p) == ($my_trip->survey->second_p))
                        <p style="color:orange;">Highly Compatible!</p>
                        
                        @elseif(($trip->survey->first_p) == ($my_trip->survey->third_p)||($trip->survey->second_p) == ($my_trip->survey->third_p)||($trip->survey->third_p) == ($my_trip->survey->third_p))
                        <p style="color:green;">Good compatability!</p>
                        
                        @endif
                        </div>
                    @endif
                @endif
            @endforeach
        @else
            <p>Sorry, there are no available matches at the moment.</p>
        @endif
        @else
        <p>Sorry, you may only view your matches.</p>
    @endif
    @else
    <p>Sorry, you need to login to view your matches</p>
@endif
</div>
@endsection