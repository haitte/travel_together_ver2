@extends('layouts.app')

@section('content')
    <h1>{{$title}}</h1>
    <div class="form">
        <div class="title">
            Please tell us why you'd like to visit <span class="destination"><i>{{$destination}}</i></span> in order of your top three priorities:
        </div>
        <div class="form-bottom">
            <form role="form" action="" method="post" class="login-form">
            	 <fieldset class="form-group">
                    <legend>1st Priority</legend>
                    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet"/>    
                    <div class="btn-group" data-toggle="buttons">
                      <label class="btn btn-primary">
                        <input type="radio" name="options" id="option1"> Food
                      </label>
                      <label class="btn btn-primary">
                        <input type="radio" name="options" id="option2"> Historical Sites
                      </label>
                      <label class="btn btn-primary">
                        <input type="radio" name="options" id="option3"> Exploring Art
                      </label>
                      <label class="btn btn-primary">
                        <input type="radio" name="options" id="option4"> Living like a Local
                      </label>
                      <label class="btn btn-primary">
                        <input type="radio" name="options" id="option5"> Finding hidden treasures
                      </label>
                    </div>
                </fieldset>

               <fieldset class="form-group">
                    <legend>2nd Priority</legend>
                    <div class="btn-group" data-toggle="buttons">
                          <label class="btn btn-primary">
                            <input type="radio" name="options" id="option1"> Food
                          </label>
                          <label class="btn btn-primary">
                            <input type="radio" name="options" id="option2"> Historical Sites
                          </label>
                          <label class="btn btn-primary">
                            <input type="radio" name="options" id="option3"> Exploring Art
                          </label>
                          <label class="btn btn-primary">
                            <input type="radio" name="options" id="option4"> Living like a Local
                          </label>
                          <label class="btn btn-primary">
                            <input type="radio" name="options" id="option5"> Finding hidden treasures
                          </label>
                    </div>
                </fieldset>
                  
                <fieldset class="form-group">
                    <legend>3rd Priority</legend>
                    <div class="btn-group" data-toggle="buttons">
                          <label class="btn btn-primary">
                            <input type="radio" name="options" id="option1"> Food
                          </label>
                          <label class="btn btn-primary">
                            <input type="radio" name="options" id="option2"> Historical Sites
                          </label>
                          <label class="btn btn-primary">
                            <input type="radio" name="options" id="option3"> Exploring Art
                          </label>
                          <label class="btn btn-primary">
                            <input type="radio" name="options" id="option4"> Living like a Local
                          </label>
                          <label class="btn btn-primary">
                            <input type="radio" name="options" id="option5"> Finding hidden treasures
                          </label>
                    </div>
                </fieldset>
                <button type="submit" class="btn">Submit</button>
            </form>
        </div>
    </div>
@endsection