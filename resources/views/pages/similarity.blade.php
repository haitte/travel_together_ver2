@extends('layouts.app')

@section('content')
    <h1>You are most similar with</h1>
    @if(count($surveys) >0)
        @foreach($surveys as $survey)
            <div class="well">
                hello
            </div>
        @endforeach
        {{$surveys->links()}}
    @else
        <p>No surveys found</p>
    @endif
@endsection