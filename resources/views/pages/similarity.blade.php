@extends('layouts.app')

@section('content')
 @if(!Auth::guest())
    @if(Auth::user()->id == $my_trip->user_id)
        <h1>Congratulations {{$me->name}}! You have matched with</h1>
        @if(!Auth::guest())
            @foreach($trips as $trip)
                @if( $trip -> destination == $my_trip -> destination )
                    @if(
                    (((($my_trip->start_date) >= ($trip->start_date)) && (($my_trip->end_date) <= ($trip->end_date)))||
                    ((($my_trip->start_date) <= ($trip->start_date)) && (($my_trip->end_date) <= ($trip->end_date)))||
                    ((($my_trip->start_date) >= ($trip->start_date)) && (($my_trip->end_date) >= ($trip->end_date)))||
                    ((($my_trip->start_date) <= ($trip->start_date)) && (($my_trip->end_date) >= ($trip->end_date)))) &&
                    ((($my_trip->start_date) <= ($trip->end_date)) || (($mytrip->end_date) >= ($trip->start_date)))
                    )
                        <div class="well">
                        <h1>{{$trip->user->name}}</h1>
                        </div>
                    @else
                        <p>Sorry, no-one is travelling your dates.</p>
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