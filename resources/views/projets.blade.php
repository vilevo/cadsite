@extends('layouts.cadsite_layout')

@section('meta')
<meta name="keywords" content="Entreprendre, investir , investir en afrique, CAD, cad" />
<meta name="description" content="CAD : entrepreneuriat et gestion de projets." />
<meta property="og:url" content="https://www.entreprisecad.herokuapp.co" />
<meta property="og:type" content="website" />
<meta property="og:title" content="CAD - Investir, projets" />
<meta property="og:description" content="CAD : entrepreneuriat et gestion de projets." />
<meta property="og:image" content="{{asset('cad_assets/images/cad.jpeg')}}" />
@endsection

@section('content')
<!-- Header -->
<header id="head" class="secondary"></header>
<!-- container -->
<div class="container">

    <ol class="breadcrumb">
        <li><a href="{{route('acceuil')}}">Acceuil</a></li>
        <li class="active">Projets</li>
    </ol>

    <div class="row">

        <!-- Article main content -->
        @foreach($projets as $projet)
        <article class="col-md-8 maincontent">
            <header class="page-header">
                <h1 class="page-title"><a href="{{route('projet.show', $projet->id)}}">{{$projet->titre}}</a></h1>
            </header>
            <p><?php echo substr($projet->description, 0, 145); ?>...</p>
        </article>
        @endforeach
        <!-- /Article -->

        <!-- Sidebar -->
        <aside class="col-md-4 sidebar sidebar-right">

            <div class="row widget">
                <div class="col-xs-12">
                    <h4></h4>
                    <p><img src="{{asset('cad_assets/images/cad.jpeg')}}" alt=""></p>
                </div>
            </div>
            <div class="row widget">
                <div class="col-xs-12">
                    <h4>Créez un compte</h4>
                    <p>Créez votre compte maintenant <a href="{{route('register')}}">ICI</a></p>
                </div>
            </div>

        </aside>
        <!-- /Sidebar -->

    </div>
</div> <!-- /container -->
@endsection