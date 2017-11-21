@extends('layouts.app')

@section('content')
    <h1>You are most similar with</h1>
    @if(count($surveys) >0)
        @foreach($surveys as $survey)
            <div class="well">
                <h3>trip id is {{$survey->trip_id}}</h3> <br />
                First preference is {{$survey->first_p}} <br />
                Second preference is {{$survey->second_p}} <br />
                Third preference is {{$survey->third_p}} <br /><br />
                <small>Created at {{$survey->created_at}}</small>            
                </div>
        @endforeach
        {{$surveys->links()}}
    @else
        <p>No surveys found</p>
    @endif
@endsection