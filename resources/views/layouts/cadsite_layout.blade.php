<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="Hilario Houmey, vilevohilario@gmail.com">

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>{{ config('app.name', 'cadsite') }}</title>


<!-- Fonts -->
<link rel="dns-prefetch" href="//fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">


<link rel="shortcut icon" href="{{ asset('cad_assets/assets/images/gt_favicon.png') }}">

<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
<link rel="stylesheet" href="{{ asset('cad_assets/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('cad_assets/css/font-awesome.min.css') }}">

<!-- Custom styles for our template -->
<link rel="stylesheet" href="{{ asset('cad_assets/css/bootstrap-theme.css') }}" media="screen">
<link rel="stylesheet" href="{{ asset('cad_assets/css/main.css') }}">

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body class="home">
    <!-- Fixed navbar -->
    <div class="navbar navbar-inverse navbar-fixed-top headroom">
        <div class="container">
            <div class="navbar-header">
                <!-- Button for smallest screens -->
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                <a class="navbar-brand" href="{{ url('/') }}"><img src="assets/images/logo.png" alt="CAD"></a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav pull-right">
                    <li class="active"><a href="{{ url('/') }}">Acceuil</a></li>
                    <li><a href="{{ url('a-propos') }}">A propos</a></li>
                    <li><a href="{{ url('contact') }}">Contact</a></li>
                    <!-- Authentication Links -->
                    @guest
                    <li>
                        <a href="{{ route('login') }}">Se connecter</a>
                    </li>
                    @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            @can('manage-users')
                            <a class="dropdown-item" href="{{ route('admin.users.index') }}">User managment</a>
                            @endcan
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                    @endguest
                    <li><a class="btn" href="{{route('investir.projets')}}">ACHETER DES ACTIONS</a></li>
                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
    </div>
    <!-- /.navbar -->
    @yield('content')
    <footer id="footer" class="top-space">

        <div class="footer1">
            <div class="container">
                <div class="row">

                    <div class="col-md-3 widget">
                        <h3 class="widget-title">Contact</h3>
                        <div class="widget-body">
                            <p>+228 96734458 / +228 91897538<br>
                                <a href="mailto:#">devbusiness20@gmail.com</a><br>
                                <br>
                                Lomé, Togo
                            </p>
                        </div>
                    </div>

                    <div class="col-md-3 widget">
                        <h3 class="widget-title">Suivez-nous</h3>
                        <div class="widget-body">
                            <p class="follow-me-icons">
                                <a href=""><i class="fa fa-twitter fa-2"></i></a>
                                <a href=""><i class="fa fa-dribbble fa-2"></i></a>
                                <a href=""><i class="fa fa-github fa-2"></i></a>
                                <a href=""><i class="fa fa-facebook fa-2"></i></a>
                            </p>
                        </div>
                    </div>

                    <div class="col-md-6 widget">
                        <h3 class="widget-title">CAD</h3>
                        <div class="widget-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi, dolores, quibusdam architecto voluptatem amet fugiat nesciunt placeat provident cumque accusamus itaque voluptate modi quidem dolore optio velit hic iusto vero praesentium repellat commodi ad id expedita cupiditate repellendus possimus unde?</p>
                            <p>Eius consequatur nihil quibusdam! Laborum, rerum, quis, inventore ipsa autem repellat provident assumenda labore soluta minima alias temporibus facere distinctio quas adipisci nam sunt explicabo officia tenetur at ea quos doloribus dolorum voluptate reprehenderit architecto sint libero illo et hic.</p>
                        </div>
                    </div>

                </div> <!-- /row of widgets -->
            </div>
        </div>
        <div class="footer2">
            <div class="container">
                <div class="row">

                    <div class="col-md-6 widget">
                        <div class="widget-body">
                            <p class="simplenav">
                                <a href="{{ url('/') }}">Acceuil</a> |
                                <a href="{{ url('a-propos') }}">A propos</a> |
                                <a href="{{ url('contact') }}">Contact</a> |
                                <b><a href="{{route('investir.projets')}}">Acheter des actions</a></b>
                            </p>
                        </div>
                    </div>

                    <div class="col-md-6 widget">
                        <div class="widget-body">
                            <p class="text-right">
                                Copyright &copy; 2020, CAD. Designed by <a href="http://gettemplate.com/" rel="designer">gettemplate</a>
                            </p>
                        </div>
                    </div>

                </div> <!-- /row of widgets -->
            </div>
        </div>

    </footer>





    <!-- JavaScript libs are placed at the end of the document so the pages load faster -->
    <script src="{{ asset('cad_assets/js/jquery-1.12.1.min.js') }}"></script>
    <script src="{{ asset('cad_assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('cad_assets/js/headroom.min.js') }}"></script>
    <script src="{{ asset('cad_assets/js/jQuery.headroom.min.js') }}"></script>
    <script src="{{ asset('cad_assets/js/template.js') }}"></script>
</body>

</html>