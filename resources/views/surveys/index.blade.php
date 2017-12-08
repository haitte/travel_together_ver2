@extends('layouts.headerapp')

@section('content')

<div class="pageheader fixed-demo dark">
        <!-- agoda -->
        <div id="hero-banner" class="hero-banner-container" data-selenium="hero-banner" style="background-image: url(/images/survey.jpg);background-color: #aaa">
            <div class="container-agoda"> 
            <h1 id="hero-banner-header1" class=" fade-in " data-selenium="hero-banner-h1">Surveys</h1>                 
            </div>
        </div>    
    </div>

<div class="body_content">
    @if(count($surveys) >0)
        @foreach($surveys as $survey)
            <div class="well">
                <h3>trip id is {{$survey->trip_id}}</h3> <br />
                First preference is {{$survey->first_p}} <br />
                Second preference is {{$survey->second_p}} <br />
                Third preference is {{$survey->third_p}} <br /><br />
                <small>Created at {{$survey->created_at}}</small>            
                </div>
                {!! Form::open(['action' => ['SurveysController@destroy',$survey->survey_id],'method' => 'POST','class'=>'pull-right']) !!}
                    {{Form::hidden('_method','DELETE')}}
                    {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                {!! Form::close()!!}
        @endforeach
        {{$surveys->links()}}
    @else
        <p>No surveys found</p>
    @endif
    </div>
@endsection