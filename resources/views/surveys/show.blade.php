@extends('layouts.app')

@section('content')
    <h1>Survey with trip no. {{$survey->trip_id}}</h1>
    <div>
        First preference is {{$survey->first_p}} <br />
        Second preference is {{$survey->second_p}} <br />
        Third preference is {{$survey->third_p}} <br /><br />
        <small>Created at {{$survey->created_at}}</small>
    </div>
    <hr>
    <a href="/surveys/{{$survey->survey_id}}/edit" class="btn btn-default">Edit</a>
@endsection