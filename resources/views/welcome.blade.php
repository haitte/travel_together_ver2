<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>   
    </head>
    <body>
            <div class="row">
                <div class="col-xs-3 col-sm-3"></div>
                <div class="clearfix visible-xs"></div
            </div>
         <div class="row">
           @foreach($post_plan_info as $location_plan)
           <div class="col-xs-3 col-sm-3">
           <ol>
                <li>{{$location_plan->location_name}}</li>
                <li>{{$location_plan->des}}</li>  
                <li>{{$location_plan->name}}</li>
            </ol>
            </div>    
           @endforeach
       </div>
    </body>
</html>
