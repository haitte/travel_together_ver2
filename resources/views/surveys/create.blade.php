@extends('layouts.headerapp')

@section('content')

<div class="pageheader fixed-demo dark">
        <!-- agoda -->
        <div id="hero-banner" class="hero-banner-container" data-selenium="hero-banner" style="background-image: url(/images/survey.jpg);background-color: #aaa">
            <div class="container-agoda"> 
            <h1 id="hero-banner-header1" class=" fade-in " data-selenium="hero-banner-h1">Please tell us why you'd like to travel in order of your top three priorities:</h1>                 
            </div>
        </div>    
    </div>

<div class="body_content">
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
</div>
@endsection