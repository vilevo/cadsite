@extends('layouts.cadsite_layout')

@section('meta')
<meta property="og:url" content="{{route('projet.show', $projet->id)}}" />
<meta property="og:type" content="website" />
<meta property="og:title" content="{{$projet->titre}}" />
<meta property="og:description" content="<?php echo substr($projet->description, 0, 145); ?>..." />
<meta property="og:image" content="{{asset('cad_assets/images/cad.jpeg')}}" />
@endsection

@section('content')
<!-- Header -->
<header id="head" class="secondary"></header>
<!-- container -->
<div class="container">

    <ol class="breadcrumb">
        <li><a href="{{route('acceuil')}}">Acceuil</a></li>
        <li><a href="{{route('investir.projets')}}">Projets</a></li>
        <li class="active">{{$projet->titre}}</li>
    </ol>

    <div class="row">

        <!-- Article main content -->
        <article class="col-md-8 maincontent">
            <header class="page-header">
                <h1 class="page-title"><a href="{{route('projet.show', $projet->id)}}">{{$projet->titre}}</a></h1>
            </header>
            <p>{!! html_entity_decode(nl2br(e($projet->description))) !!}</p>
            <!-- Social sharing buttons -->
            Partager sur : <br>
            <div class="fb-share-button" data-href="{{ route('projet.show', $projet->id) }}" data-layout="button_count">
            </div>

            <button class='btn partager_twitter' style='background: #00aced; color: white;' data-url="{{ route('projet.show', $projet->id) }}">
                <span class='icon-twitter'></span> twitter
            </button>

            <button class='btn partager_whatsapp' style='background: green;'>
                <a href="whatsapp://send?text={{ route('projet.show', $projet->id) }}" data-action='share/whatsapp/share' style='color: white;'><span class='icon-whatsapp'></span> whatsapp</a>
            </button>
        </article>
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

@section('js_script')
<div id="fb-root"></div>
<script>
    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>
@endsection