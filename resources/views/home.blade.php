<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Article Blog - Home</title>
         <!-- Fonts -->
         <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <!-- Styles -->
        <style>
            body{
                font-family: 'Nunito', sans-serif;
            }    
            .nav-link{
                color: #fb5607
            }
            .container{
                margin-right: 20px;
            }
            .side-img{
                width: 500px;
                height: 300px;
                margin-left: 30px;
                margin-top: 50px;
            }
            .introduction {
                font-size: 40px;
                text-align: right;
                margin-right: 30px;
                margin-bottom: 30px;
            }
            .subtitle-intro {
                font-size: 20px;
                text-align: right;
                margin-right: 30px;
            }
        </style>    
        <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand" href="#">
                    <img src="{{asset('assets/img/logo-laravel.png')}}" width="40" height="40">
                </a>
                {{-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button> --}}
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Posts</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Users</a>
                        </li>
                  </ul>
                </div>
                <ul class="nav justify-content-end">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Login</a>
                      </li>
                      <li class="nav-item active">
                        <a class="nav-link" href="#">Register</a>
                      </li>
                </ul>
            </nav>
        </header>
            <img class="side-img" src="{{asset('assets/img/ilustrasi-pekerjaan-online.jpg')}}">
            <div class="container">
                <h1 class="introduction">MAKE YOUR ARTICLE FOR FREE</h1>
                <p class="subtitle-intro">Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi accusamus alias voluptate tempore placeat adipisci fuga consequatur.</p>
            </div>
        <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    </body>
</html>