<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Signin</title>

        
    </head>

    <body>
    
        @if($service == 'google')
            <div class="title m-b-md">
                Welcome {{$user->name}}
                <br>
                <img src="{{$user->avatar}}"></img>
            </div>
        @endif
    </body>    
</html>