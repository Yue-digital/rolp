@section('header')
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link href='https://fonts.googleapis.com/css?family=Open Sans' rel='stylesheet'>

  <title>Resurrection of Our Lord Parish</title>
  <link rel="stylesheet" href="{{asset('/css/global.css')}}">
  <link rel="stylesheet" href="{{asset('/css/lightbox.css')}}">

</head>

<body>

<nav class="navbar navbar-expand-lg rolp-header-nav bg-transparent fixed-top ">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/', []) }}"><img src="{{asset('assets/img/LOGO.png')}}" alt=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link <?php echo(Request::is('/') ? 'active' : ''); ?>" aria-current="page" href="{{ url('/', []) }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo(Request::is('about') ? 'active' : ''); ?>" href="{{ url('/about', []) }}">About</a>
                </li>
                {{-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Sacraments & Services
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li> --}}

                <li class="nav-item">
                    <a class="nav-link <?php echo(Request::is('about/history') ? 'active' : ''); ?>" href="{{ url('/about/history', []) }}">Our History</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/our-community', []) }}">Our Community</a>
                </li>

                {{-- <li class="nav-item">
                    <a class="nav-link" href="#">Give</a>
                </li> --}}

                <!--<li class="nav-item">
                    <a class="nav-link <?php echo(Request::is('test') ? 'active' : ''); ?>" href="{{ url('/test', []) }}">test</a>
                </li>
                -->

            </ul>
        </div>
    </div>
</nav>
@endsection
