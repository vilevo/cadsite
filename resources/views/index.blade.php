@extends('layouts.cadsite_layout')

@section('meta')
<meta name="keywords" content="Entreprendre, investir , investir en afrique, CAD, cad" />
<meta name="description" content="CAD : entrepreneuriat et gestion de projets." />
<meta property="og:url" content="https://www.entreprisecad.herokuapp.co" />
<meta property="og:type" content="website" />
<meta property="og:title" content="CAD - Acceuil" />
<meta property="og:description" content="CAD : entrepreneuriat et gestion de projets." />
<meta property="og:image" content="{{asset('cad_assets/images/cad.jpeg')}}" />
@endsection

@section('content')
<!-- Header -->
<header id="head">
    <div class="container">
        <div class="row">
            <h1 class="lead">INVESTISSEZ ET GAGNER DE L'ARGENT</h1>
            <p class="tagline">CAD: petite description de l'entreprise</p>
            <p><a class="btn btn-default btn-lg" role="button">PLUS D'INFO</a> <a class="btn btn-action btn-lg" role="button" href="{{route('investir.projets')}}">ACHETER DES ACTIONS</a></p>
        </div>
    </div>
</header>
<!-- /Header -->

<!-- Intro -->
<div class="container text-center">
    <br> <br>
    <h2 class="thin">Vous etes au bon endroit pour investir votre argent</h2>
    <p class="text-muted">
        CAD vous permet d'investir en toute sécurité sur des projets selectionnés à la loupe par des experts.
    </p>
</div>
<!-- /Intro-->

<!-- Highlights - jumbotron -->
<div class="jumbotron top-space">
    <div class="container">

        <h3 class="text-center thin">Les étapes pour investir</h3>

        <div class="row">
            <div class="col-md-3 col-sm-6 highlight">
                <div class="h-caption">
                    <h4><i class="fa fa-cogs fa-5"></i>Selectionnez un projet</h4>
                </div>
                <div class="h-body text-center">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque aliquid adipisci aspernatur. Soluta quisquam dignissimos earum quasi voluptate. Amet, dignissimos, tenetur vitae dolor quam iusto assumenda hic reprehenderit?</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 highlight">
                <div class="h-caption">
                    <h4><i class="fa fa-flash fa-5"></i>Prenez contact avec un vendeur</h4>
                </div>
                <div class="h-body text-center">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, commodi, sequi quis ad fugit omnis cumque a libero error nesciunt molestiae repellat quos perferendis numquam quibusdam rerum repellendus laboriosam reprehenderit! </p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 highlight">
                <div class="h-caption">
                    <h4><i class="fa fa-heart fa-5"></i>Finalisez votre achat</h4>
                </div>
                <div class="h-body text-center">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, vitae, perferendis, perspiciatis nobis voluptate quod illum soluta minima ipsam ratione quia numquam eveniet eum reprehenderit dolorem dicta nesciunt corporis?</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 highlight">
                <div class="h-caption">
                    <h4><i class="fa fa-smile-o fa-5"></i>Suivez votre investissement</h4>
                </div>
                <div class="h-body text-center">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, excepturi, maiores, dolorem quasi reprehenderit illo accusamus nulla minima repudiandae quas ducimus reiciendis odio sequi atque temporibus facere corporis eos expedita? </p>
                </div>
            </div>
        </div> <!-- /row  -->

    </div>
</div>
<!-- /Highlights -->

<!-- container -->
<div class="container">
    <div class="jumbotron top-space">
        <img src="{{ asset('cad_assets/images/2781070.svg') }}" alt="image" width="100" height="100">
        <h4>Devenez libre financierement en investissant sur un projet maintenant!</h4>
        <p class="text-right"><a class="btn btn-primary btn-large" href="{{route('investir.projets')}}">ACHETER DES ACTIONS »</a></p>
    </div>

</div> <!-- /container -->

<!-- Social links. @TODO: replace by link/instructions in template -->
<section id="social">
    <div class="container">
        <div class="wrapper clearfix">
            <!-- AddThis Button BEGIN -->
            <div class="addthis_toolbox addthis_default_style">
                <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
                <a class="addthis_button_tweet"></a>
                <a class="addthis_button_linkedin_counter"></a>
                <a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
            </div>
            <!-- AddThis Button END -->
        </div>
    </div>
</section>
<!-- /social links -->
@endsection