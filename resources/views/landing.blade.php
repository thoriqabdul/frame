<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        img{
            transform: rotate(270deg);

        }
        .body{
            position: absolute;
            top: 30%;
            left: 35%;
            margin-top: -50px;
            margin-left: -50px;
            width: 30%;
            height: 20%;
        }
        .body-bot{
            position: absolute;
            top: 80%;
            left: 35%;
            margin-left: -50px;
            width: 30%;
            height: 20%;
        }
    </style>
</head>
<body>
    <section>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container text-white">
                <a class="navbar-brand" href="#"><b>Thor-q</b></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                        <a class="nav-link" href="#">No Menu At All <span class="sr-only">(current)</span></a>
                        </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </section>
    <section>
        <div class="container text-center">
            <div class="body ">
                <img src="{{asset('thoriq.jpeg')}}" alt="" class="img-fluid">
            </div>
            <div class="body-bot">
                <h6>No one know Just Shit Happen here</h6>
                <h5>Fuck Off</h5>
            </div>
        </div>
    </section>
    
</body>
</html>