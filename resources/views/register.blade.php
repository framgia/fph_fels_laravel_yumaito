<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

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
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
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
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <form class="" action="/store" method="post">
                    {{ csrf_field() }}
                    <!-- field = "hidden" -->
                  
                    <input type="text" name="name" placeholder="Username">
                    <br><br>
                    <input type="text" name="email" placeholder="Email">
                     <br><br>

                     <form method="post" action="/myaction" accept-charset="UTF-8" files => "true">

                    <!-- 成功時 -->
                    @if (session('success'))
                         <div class="alert alert-success">{{ session('success') }}</div>
                    @endif

                    <!-- エラーメッセージ -->
                    @if ($errors->any())
                        <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                        </div>
                    @endif
                    
                    <div class="form-group">
                        @if ($user->avatar_filename)
                            <p>
                                <img src="{{ asset('storage/avatar/' .$user->avatar_filename) }}" alt="avatar" />
                            </p>
                        @endif
                        {!! Form::label('file', '画像アップロード', ['class' => 'control-label']) !!}
                        {!! Form::file('file') !!}
                    </div>
                                      
                    <div class="form-group">
                        {!! Form::submit('アップロード', ['class' => 'btn btn-default']) !!}
                    </div>

                    {!! Form::close() !!}
                    <br><br>            
                    <input type="password" name="password" placeholder="Password">
                    <br><br>
                    <button type="submit" name="button">Register</button>
                </form>               
            </div>
        </div>
    </body>
</html>
                 <!--    @section('content') 
                    <div class="container">
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                <img src="/uploads/avatars/{{ $user->avatar }}" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;">
                                <h2>{{ $user->name }}'s profile</h2>
                                <form enctype="multipart/form-data" action="/profile" method="POST">
                                    <label>Update Profile Image</label>
                                        <input type="file" name="avatar">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="pull-right btn btn-sm btn-priary">
                                </form>    
                            </div>
                        </div>
                    </div>    
                    @endsection   -->       

                  
