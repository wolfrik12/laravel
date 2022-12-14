
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @include('navbar.header')
    @if ($message = Session::get('success'))
                          <div class="p-4 mb-3 bg-green-400 rounded">
                              <p class="text-green-800">{{ $message }}</p>
                          </div>
                      @endif
    <section style="background-color: #000;">
      
      <div class="text-center container py-5">
        <h4 class="mt-4 mb-5"><strong style="color: white;">Доступные сеансы</strong></h4>
    <div class="row d-flex justify-content-center">
      <div class="col-lg-2 col-md-6 mb-4">
        <div class="dropdown">
          <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
            Дата показа
          </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <li><a class="dropdown-item" href="/films/sort/new">Самые новые</a></li>
            <li><a class="dropdown-item" href="/films/sort/old">Самые старые</a></li>
          </ul>
        </div>
      </div>
      <div class="col-lg-2 col-md-6 mb-4">
        <div class="dropdown">
          <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
            Наименование
          </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <li><a class="dropdown-item" href="/films/sort/name_desc">А-Я</a></li>
            <li><a class="dropdown-item" href="/films/sort/name">Я-А </a></li>
          </ul>
        </div>
      </div>
      <div class="col-lg-2 col-md-6 mb-4">
        <div class="dropdown">
          <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
            Возрастное огр.
          </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <li><a class="dropdown-item" href="/films/sort/child">Детское</a></li>
            <li><a class="dropdown-item" href="/films/sort/adult">Взрослое</a></li>
          </ul>
        </div>
      </div>
      
      <div class="col-lg-2 col-md-6 mb-4" >
        <div class="dropdown">
          <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
            Жанр
          </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <li><a class="dropdown-item" href="/films/sort/комедия">Комедия</a></li>
            <li><a class="dropdown-item" href="/films/sort/драма">Драма</a></li>
            <li><a class="dropdown-item" href="/films/sort/фантастика">Фантастика</a></li>
            <li><a class="dropdown-item" href="/films/sort/боевик">Боевик</a></li>
            <li><a class="dropdown-item" href="/films/sort/мультфильм">Мультфильм</a></li>
          </ul>
        </div>
      </div>
      <div class="col-lg-2 col-md-6 mb-4" >
          <a class="btn btn-danger"href="/films">Сбросить X</a>
      </div>
    </div>
      
    <div class="row">
      
      @foreach ($films as $film)
      <div class="col-lg-2 col-md-6 mb-4">
        
        <div class="card">
              <div class="bg-image hover-zoom ripple ripple-surface ripple-surface-light"
                data-mdb-ripple-color="light">
                <img src="{{asset($film->image)}}"
                  class="w-100" />
                  <a href="#!">
                    <div class="mask">
                      <div class="d-flex justify-content-start align-items-end h-100">
                        <h5>
                          <span class="badge bg-success ms-2">{{$film->age}}+</span><span
                            class="badge bg-danger ms-2">{{$film->genre}}</span>
                        </h5>
                      </div>
                    </div>
                    <div class="hover-overlay">
                      <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                    </div>
                  </a>
                </div>
              
              <div class="card-body">
                <a href="" class="text-reset">
                  <h5 class="card-title mb-3 " >{{$film->description}}</h5>
                </a>
                <a href="" class="text-reset">
                  <p style="color: white;font-family:'Nunito';">{{$film->price}}</p>
                </a>
                @guest
                            @if (Route::has('login'))
                            <button type="button" class="btn btn-light d-none">Купить</button>
                            @endif

                            @if (Route::has('register'))
                            <button type="button" class="btn btn-light d-none">Купить</button>
                            @endif
                        @else
                <button type="button"  class="btn btn-light "><a href="/films/{{$film->id}}">Купить</a></button>
                @endguest
              </div>
            </div>
          
          </div>
          @endforeach
        </div>
    
          </div>
        </div>
      </div>
     
    </section>



      
     
</body>
<style>
  .card{
    transition: 1s;
  }
  .card:hover{
    transform: scale(1.0);
  }
  .card:not(:hover){
    transform: scale(0.8);
  }
  a {
    text-decoration: none;

  }
  .btn-light a{color: black;}
  .card {
    transition: 1s; /* Время эффекта */
   }

  

  .card-title{
    color: white;
   font-size: 20px;
  }
  .col-lg-2{
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
  }
  button a{

    color: #53B857;
  }

  
  button{
    border-radius: 25px;
    background-color: white;
    color: #53B857;
  }
  .card{
    background-color: black;
  }
  </style>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  
</html>