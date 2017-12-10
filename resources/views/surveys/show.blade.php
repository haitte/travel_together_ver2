@extends('layouts.headerapp')

@section('content')

<div class="pageheader fixed-demo dark">
        <!-- agoda -->
        <div id="hero-banner" class="hero-banner-container" data-selenium="hero-banner" style="background-image: url(/images/survey.jpg);background-color: #aaa">
            <div class="container-agoda"> 
            <h1 id="hero-banner-header1" class=" fade-in " data-selenium="hero-banner-h1">Survey with trip no. {{$survey->trip_id}}</h1>                 
            </div>
        </div>    
    </div>

<div class="body_content">
    <div>
        First preference is {{$survey->first_p}} <br />
        Second preference is {{$survey->second_p}} <br />
        Third preference is {{$survey->third_p}} <br /><br />
        <small>Created at {{$survey->created_at}}</small>
    </div>
    <hr>
    <a href="/surveys/{{$survey->survey_id}}/edit" class="btn btn-default">Edit</a>
</div>
@endsection