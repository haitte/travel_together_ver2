@extends('layouts.app')

@section('content')
    <h1>Please tell us why you'd like to visit <span class="destination"><i>{{$destination}}</i></span> in order of your top three priorities:</h1>
    
    {!! Form::open(['action' => 'SurveysController@store','method' => 'POST']) !!}
        <div class ="form-group">
            {{Form::label('trip_id', 'Trip ID')}}
            {{Form::text('trip_id','',['class'=>'form-control','placeholder'=>'3'])}}
        </div>
        <div class ="form-group">
            {{Form::label('first_p', 'First Preference')}}
            {{Form::select('first_p', ['option1' => 'Food', 'option2' => 'Historical Sites', 'option3' => 'Exploring Art', 'option4' => 'Living like a Local', 'option5' => 'Finding hidden treasures'], null, ['placeholder' => 'Pick one!'])}}
        </div>
        <div class ="form-group">
            {{Form::label('second_p', 'Second Preference')}}
            {{Form::select('second_p', ['option1' => 'Food', 'option2' => 'Historical Sites', 'option3' => 'Exploring Art', 'option4' => 'Living like a Local', 'option5' => 'Finding hidden treasures'], null, ['placeholder' => 'Pick one!'])}}
        </div>
        <div class ="form-group">
            {{Form::label('third_p', 'Third Preference')}}
            {{Form::select('third_p', ['option1' => 'Food', 'option2' => 'Historical Sites', 'option3' => 'Exploring Art', 'option4' => 'Living like a Local', 'option5' => 'Finding hidden treasures'], null, ['placeholder' => 'Pick one!'])}}
        </div>
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}

@endsection