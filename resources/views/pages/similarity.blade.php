@extends('layouts.app')

@section('content')
 @if(!Auth::guest())
    @if(Auth::user()->id == $my_trip->users_id)
        <h1>Congratulations {{$me->name}}! You have matched with</h1>
        @if(!Auth::guest())
            @foreach($trips as $trip)
                @if( $trip -> destination_name == $my_trip -> destination_name )
                    @if(($my_trip->departure_time) <= ($trip->arrive_time)) 
                        <div class="well">
                        <h1>{{$trip->user->name}}</h1>
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
@endsection