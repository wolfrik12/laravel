<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://bootstraptema.ru/plugins/2017/jquery-flipster/jquery.flipster.min.css" />
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    
  
    <!-- Flipster Js -->
    
    <title>Document</title>
</head>


<!-- Flipster CSS -->

@include('navbar.header')
<body>
    <div class="container mt-5 ">
        <div class="d-flex justify-content-center align-items-center  " style="margin 0 auto;height:500px;">
            <style>
                .d-flex{
                  
                    flex-wrap: wrap;
                    flex-direction: column;

                }
                .flip-items{
                    user-select: none;
                }
                </style>
            <img src="image/1.png" style="width: auto;height:200px;" class=" ">
            <p class="" style="color: white ;font-family:'Nunito';">Бери и смотри!</p>
    </div>
    </div>
    <div class="seans">
        <h1 style="font-family:'Nunito';">Новые сеансы</h1>
    </div>
    <div class="container">
    <div id="carousel">
        <ul class="flip-items">
            
            
            @foreach ($sliders as $slider)
            <li>
                <img src="{{$slider->image}}">
                <p>{{$slider->description}}</p>
            </li>      
            @endforeach


            
        </ul>
</div>
    </div>
<script>
    $(document).ready(function(){
$("#carousel").flipster({
    
        style: 'carousel',
        spacing: -0.5,
        nav: false,
        buttons:   true,
   });
});
    </script>
    <style>
        .flip-items img{
            border-radius: 25px;
        }
     img +  p{
           color: white;
           text-align: center;
           font-size:25px;
       }
        .flip-items{
            width: 100%;
        }
       .carousel-item img{
           border-radius: 25px;
           width: 100%;
           height: 400px;
       }
        p {
            text-align: center;
            font-size: 10px;
        }

        body {
            background-color: black;
        }

        .navbar-dark {
            background-color: #0d0c0c;
        }

        .nav-item {
            color: #FFFFFF;
            margin-right: 37px;
        }

        .nav-link:hover {
            color: #583e04;
        }

        .logo {

            width: auto;
            height: 50px;
        }

        .navbar-collapse {
            display: flex;
            justify-content: space-between;
        }

        .seans {
            display: flex;
            justify-content: center;
        }

        h1 {
            padding-bottom: 50px;
            padding-top: 100px;
            color: white;
            font-size: calc((35px + 15) * ((100vw-320px)/(1280-320)));
        }

        

        @media (max-width: 992px) {
            img +  p{
           color: white;
           text-align: center;
           font-size:15px;
       }
            .flip-items li img{
            width: 200px;
            height:auto ;
        }
            .navbar-collapse {
                padding-top: 10px;
                display: flex;
                justify-content: center;
                flex-direction: column;
                align-items: center;
            }
        }
    </style>



<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
          integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
          <script src="https://bootstraptema.ru/plugins/2017/jquery-flipster/jquery.flipster.min.js"></script>
        
</html>
