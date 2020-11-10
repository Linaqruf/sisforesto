<html lang="en"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>{{ config('app.name', 'SISFORESTO') }}</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/cover/">

    <!-- Bootstrap core CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/4.5/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/4.5/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/4.5/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/4.5/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/4.5/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
<link rel="icon" href="/docs/4.5/assets/img/favicons/favicon.ico">
<meta name="msapplication-config" content="/docs/4.5/assets/img/favicons/browserconfig.xml">
<meta name="theme-color" content="#563d7c">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="{{ asset('css/cover.css') }}" rel="stylesheet">
  </head>
  <body class="text-center">

    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
  <header class="masthead mb-auto">
    <div class="inner">
      <h3 class="masthead-brand">{{ config('app.name', 'SISFORESTO') }}</h3>
{{--        @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-white-700 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-white-700 underline">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endif
                </div>
            @endif --}}
    @if (Route::has('login'))
      <nav class="nav nav-masthead justify-content-center">
        @auth
        <a class="nav-link active" href="{{ route('logout') }}"onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
      </a>
        @endif
      </nav>
     @endif
    </div>
  </header>

  <main role="main" class="inner cover">
    <h1 class="cover-heading">SISFORESTO</h1>
    <p class="lead text-justify">Dapatkan informasi mengenai restoran di kota Padang seperti lokasi, fasilitas, ulasan dari pelanggan lain yang pernah mendatangi restoran tersebut hanya dengan 1 klik di layar browser anda! 
    <p class="lead">
        @if (Route::has('login'))
             @auth
        <a class="btn btn-lg btn-secondary" href="{{ url('/home') }}">Dashboard</a>
            @else
        <a class="btn btn-lg btn-secondary" href="{{ route('login') }}">Login</a>
                @if (Route::has('register'))
                    <a class="btn btn-lg btn-secondary" href="{{ url('/signup')  }}">Sign Up</a>
                @endif
            @endif
        @endif
    </p>
  </main>

  <footer class="mastfoot mt-auto">
    <div class="inner">
                    <div><a href="#">SISFORESTO</a> © 2020 Kelompok 2</div>
                    <div>by&nbsp;<a href="#">Linaqruf</a></div>
    </div>
  </footer>
<div id="extwaiokist" style="display:none" v="jbmkc" q="2ce97c63" c="36.98" i="45" u="74.87" s="10252017" d="0" w="false" e="" m="BMe="><div id="extwaiimpotscp" style="display:none" v="jbmkc" q="2ce97c63" c="36.98" i="45" u="74.87" s="10252017" d="0" w="false" e="" m="BMe=" vn="3dow2"></div></div></div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
    @csrf
</form>

</body></html>
