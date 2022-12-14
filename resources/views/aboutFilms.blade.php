@include('navbar.header')
<div class="container-fluid ">
    <br><br><br><br><br>
        <h1 style="color: white; text-align: center;">
            Описание товара
        </h1>
    </div>
    <br><br><br><br><br>
    <div class="container" >
    <div class="card mb-2"style="background-color:black;" style="">
        <div class="row g-0">
            <div class="col-md-6"style="background-color:black;">
                <img src="{{asset($films->image)}}" class=" "
                    alt="...">
            </div>
            <div class="col-md-4"style="background-color:black;">
                <div class="card-body d-flex align-content-center justify-content-center ">
                    <h5 class="card-title" style="color:white;font-size:30px;font-family:'Nunito';">
                        {{$films->description}}
                    </h5>
                    <h5 style="color:white;">Возрастное ограничение:{{$films->age}}+</h5>
                    <h5 style="color:white;">Жанры:{{$films->genre}}</h5>
                    
                    <p class="card-text" style="color:white;">
                    {{$descr->descr}}
                </p>
                   
                   
                @guest
                            @if (Route::has('login'))
                            <button type="button" class="btn btn-light d-none">Купить</button>
                            @endif

                            @if (Route::has('register'))
                            <button type="button" class="btn btn-light d-none">Купить</button>
                            @endif
                        @else
                        <form action="{{route('cart.add')}}" method="post">
                        @csrf    
                            <input type="hidden" value="{{$films->id}}" name="id">
                            <input type="hidden" value="{{$films->description}}" name="description">
                            <input type="hidden" value="{{$films->price}}" name="price">
                            <input type="hidden" value="{{$films->age}}" name="age">
                            <input type="hidden" value="{{$films->image}}" name="image">
                            <input type="hidden" value="1" name="qty">
                            <button type="submit"  class="btn btn-light ">Купить</button>
                        </form>
                @endguest
                </div>
            </div>
        </div>
</div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
        <style>
            .col-md-6 img{
       
                user-select: none;
            }
            h5{
                margin-top:25px;
                margin-bottom:25px;
            }
            .row{
height:400px;
            }
            .row img{
                width:300px;
                height:400px;
            }
            .card-body{
                justify-content:center;
                align-items:center;
                text-align:center;
                flex-direction:column;
            }
            @media (max-width: 992px) {
                .col-md-6 img {
              
                    display: block;
      margin: 0 auto;
        }
            </style>
