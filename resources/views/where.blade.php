<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    @include('navbar.header')

<div class="container">
    <div class="center">
        <h1>Где нас найти?</h1>
        
</div>
<div class="content">
    <h3>Адрес:5/9, микрорайон Восточный, Новый Уренгой</h3>
     <h3>Телефон: +7 495 6680 926</h3> 
    <h3>Email: dima.zubkov03@mail.ru</h3> 
   
  <div class="image">

  </div>

</div>

</div>
<br>
<br>
<footer class="pt-4 my-md-5 pt-md-5 border-top" style="height: 100%;bottom:0;"
 >
    <div class=" d-flex" style="flex-wrap: nowrap; flex-direction:row;">
        <div class="col-12 col-md d-flex" style="flex-wrap: nowrap; flex-direction:row;">
            <div class="col-12 col-md d-flex" >
            <a class="navbar-brand" href="/"><img class="logo" src="image/1.png"></a>
            <a class="nav-item nav-link " href="/o_nas">О нас</a>
            <a class="nav-item nav-link" href="#">Афиша</a>
            <a class="nav-item nav-link" href="/where">Где нас найти</a>
        </div>
    </div>
</footer>
<style>
    
    .content .image{
       background-size: cover;
        background-image: url('image/map.jpeg');
        background-repeat: no-repeat;
        margin-top: 45px;
       border-radius: 40px;
        height: 450px;
    }
    .center{display: flex;justify-content:space-between;}
    .center h1{color: white;font-size: 40px;margin-top: 80px;}
     .content {
         width: 100% ;
        
        display: flex;
        justify-content: space-between;
        flex-direction: column;
        flex-wrap: wrap;
       
    }
    .radio iframe{
        padding-top: 50px;
    }
     .content h3{
       
         font-size: 20px;
         margin-top: 80px;
        
        color: white;
    }
    </style>

    
</body>
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    
</html>