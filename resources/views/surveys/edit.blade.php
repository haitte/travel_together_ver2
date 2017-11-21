@extends('layouts.app')

@section('content')
    <h1>Edit survey with survey id {{$survey->survey_id}}</h1>
    
    {!! Form::open(['action' => ['SurveysController@update',$survey->survey_id],'method' => 'POST']) !!}
        <div class ="form-group">
            {{Form::label('trip_id', 'Trip ID')}}
            {{Form::text('trip_id',$survey->trip_id,['class'=>'form-control','placeholder'=>'3'])}}
        </div>
        <div class ="form-group">
            {{Form::label('first_p', 'First Preference')}}
            {{Form::select('first_p', ['option1' => 'Food', 'option2' => 'Historical Sites', 'option3' => 'Exploring Art', 'option4' => 'Living like a Local', 'option5' => 'Finding hidden treasures'], $survey->first_p)}}
        </div>
        <div class ="form-group">
            {{Form::label('second_p', 'Second Preference')}}
            {{Form::select('second_p', ['option1' => 'Food', 'option2' => 'Historical Sites', 'option3' => 'Exploring Art', 'option4' => 'Living like a Local', 'option5' => 'Finding hidden treasures'], $survey->second_p)}}
        </div>
        <div class ="form-group">
            {{Form::label('third_p', 'Third Preference')}}
            {{Form::select('third_p', ['option1' => 'Food', 'option2' => 'Historical Sites', 'option3' => 'Exploring Art', 'option4' => 'Living like a Local', 'option5' => 'Finding hidden treasures'], $survey->third_p)}}
        </div>
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}

@endsection