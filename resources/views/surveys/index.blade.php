@extends('layouts.app')

@section('content')
    <h1>Surveys</h1>
    @if(count($surveys) >0)
        @foreach($surveys as $survey)
            <div class="well">
                trip id is {{$survey->trip_id}} <br />
                First preference is {{$survey->first_p}} <br />
                Second preference is {{$survey->second_p}} <br />
                Third preference is {{$survey->third_p}} <br />
            </div>
        @endforeach
    @else
        <p>No surveys found</p>
    @endif
@endsection