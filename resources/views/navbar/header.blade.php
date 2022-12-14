<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="/films"><img class="logo" src="{{asset('image/1.png')}}"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-item nav-link " href="/o_nas">О нас</a>
            <a class="nav-item nav-link" href="/films">Афиша</a>
            <a class="nav-item nav-link" href="/where">Где нас найти</a>

        </div>
        <div class="navbar-nav">
            @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                   <a class="nav-link" href="{{ route('login') }}">{{ __('Авторизация') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Регистрация') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    
                                    <a class="dropdown-item" href="/cart">{{'Корзина'}}</a>
                                   @if (Auth::user()->login =='admin')
                                    <a class="dropdown-item" href="/admin">{{'Админ-панель'}}</a>
                                   @endif
                                   <a class="dropdown-item" href="{{ route('logout') }}"
                                    
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Выйти') }}
                                    </a>
                                    
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
        </div>
    </div>
</nav>
</header>
<div class="content">
@section('content')
</div>
<style>
   
    body {
            background-color: black;
        }

        .navbar-dark {
            background-color: #0d0c0c;
        }
        .nav-link{ color: #FFFFFF;}
        .nav-item {
            font-family:'Nunito';
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
        @media (max-width: 992px) {
            .navbar-collapse {
                padding-top:10px;
                display: flex;
                justify-content: center;
                flex-direction: column;
                align-items: center;
            }
        }
    </style>

    