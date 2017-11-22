@extends('layouts.app')

@section('content')
    <h1>Congratulations {{$me->name}}! You have matched with</h1>
    @if(!Auth::guest())
        @foreach($trips as $trip)
            @if($trip->destination == $my_trip->destination)
                <div class="well">
                <h1>{{$trip->user->name}}</h1>
                </div>
            @endif
        @endforeach
    @else
        <p>Sorry, there are no available matches at the moment.</p>
    @endif
@endsection