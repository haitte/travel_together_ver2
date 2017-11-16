<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <title>Laravel</title>
       <!-- js file -->
        <script type="text/javascript" src="js/signin.js"></script>
        <!-- css file -->
        <link rel="stylesheet" href="css/signin.css">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->       
        <style>
            
        </style>

    </head>
    <body>
        <video  playsinline autoplay muted loop>
            <!-- WCAG general accessibility recommendation is that media such as background video play through only once. Loop turned on for the purposes of illustration; if removed, the end of the video will fade in the same way created by pressing the "Pause" button  -->
            <source src="http://thenewcode.com/assets/videos/glacier.webm" type="video/webm">
            <source src="http://thenewcode.com/assets/videos/glacier.mp4" type="video/mp4">
        </video>
        <div class="container">
            <div class="row">
                    <div class="box left col-sm-6">
                        
                            <h1>Welcome come to travel together</h1>
                            <div class="tabs">
                                <span class="tab signin active"><a href="#signin">Sign in</a></span>
                                <span class="tab signup"><a href="#signup">Sign up</a></span>
                            </div>
                            <div class="content">
                                <!--  Sign In Form  -->
                                    <div class="info signin-info">
                                        <form action="#" method="post" enctype="multipart/form-data">
                                        <input type="email" name="email" id="email" class="inpt" required="required" placeholder="Email">
                                        <label for="email">Email</label>
                                        <input type="password" name="password" id="password" class="inpt" required="required" placeholder="Password">
                                        <label for="password">Password</label>
                                            <div class="submit-wrap">
                                                <input type="submit" value="Sign in" class="submit">
                                                <a href="#" class="extra-link">Forgot your password?</a>
                                            </div>
                                        </form>
                                    </div>
                                <!--  Sign Up Form -->
                                    <div class="info signup-info">
                                        <form action="#" method="post">
                                            <input type="name" name="name" id="name" class="inpt" required="required" placeholder="Name">
                                            <label for="name">Name</label>
                                            <input type="email" name="email" id="email" class="inpt" required="required" placeholder="Email">
                                            <label for="email">Email</label>
                                            <input type="password" name="password" id="password" class="inpt" required="required" placeholder="New Password">
                                            <label for="password">New Password</label>
                                                <div class="submit-wrap">
                                                    <input type="submit" value="Sign up" class="submit">
                                                    <a href="#" class="extra-link">Please Read Our Terms and conditions</a>
                                                </div>
                                        </form>
                                    </div>
                            </div>
                          
                    </div>
        
            <!--  Social Network Sign In  -->

                    <div class="box right col-sm-6">
                        
                            <div class="info signin-info ">
                                <span class="sign-via">Sign in with </span>
                                <button class="social-network facebook"><i class="fa fa-facebook" aria-hidden="true"></i>Facebook</button>
                                <button class="social-network twitter"><i class="fa fa-twitter" aria-hidden="true"></i>Twitter</button>
                                <button onclick="window.location.href='/google/auth'" class="social-network google"><i class="fa fa-google-plus" aria-hidden="true"></i>Google</button>
                            </div>
                            <div class="info signup-info">
                                <span class="sign-via">Sign up with </span>
                                <button class="social-network facebook"><i class="fa fa-facebook" aria-hidden="true"></i>Facebook</button>
                                <button class="social-network twitter"><i class="fa fa-twitter" aria-hidden="true"></i>Twitter</button>
                                <button class="social-network google"><i class="fa fa-google-plus" aria-hidden="true"></i>Google+</button>
                            </div>
                            <div class=" emptybox">
                            </div>
                          
                    </div>
            </div>
        </div>    
    </body>
</html>
