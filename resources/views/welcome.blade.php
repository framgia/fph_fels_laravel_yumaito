<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>




        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
                border-bottom: 1px;

            }

            .position-ref {
                position: relative;
                text-align: right;
            }

            .top-left {
               position: absolute;
                left: 10px;
                top: 18px;
                font-size: 15px;
                font-weight: 600;
                padding: 0 25px;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
               
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
                font-size: 15px;
                font-weight: 600;
                padding: 0 25px;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: blue;
                border-bottom: solid 0.4px blue;               
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">

            <div class="top-left title">
                <font size="5">Elearning System</font>
            </div>    
           
            <div class="top-right links">
                <a href="{{ url('/categories') }}">Categories</a>
                   
                <a href="{{ url('/link2') }}">Link2</a>

                <a href="{{ url('/link3') }}">Link3</a>
                
            </div>
        </div>
           


       <!--      <div class="">

          <div class="content"> 
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div> -->
            <!-- </div> -->
        </div>
    </body>
</html>
