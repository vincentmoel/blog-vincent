@extends('layout.main')

@section('jumbotron')

<header class="masthead" style="background-image: url('assets/img/home-bg.jpg')">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="site-heading">
                    <h1>Hey Everyone</h1>
                    <span class="subheading">Welcome to My Blog!</span>
                </div>
            </div>
        </div>
    </div>
</header>


@endsection


@section('container')



<div class="row gx-4 gx-lg-5 justify-content-center">
    <div class="col-md-10 col-lg-8 col-xl-7">
        <!-- Post preview-->
        <div class="post-preview">
            <a href="/interaksi-manusia-dan-komputer">
                <h2 class="post-title">Interaksi Manusia dan Komputer</h2>
                <h5 class="post-subtitle">Apa itu Interaksi Manusia dan Komputer?</h5>
            </a>
            <p class="post-meta">
                21 Maret 2022
            </p>
        </div>

        <hr class="my-4" />


        <div class="post-preview">
            <a href="/paradigma-dan-prinsip-usability">
                <h2 class="post-title">Paradigma dan Prinsip Usability</h2>
                <h5 class="post-subtitle">Apa itu Paradigma?</h5>
            </a>
            <p class="post-meta">
                23 Maret 2022
            </p>
        </div>
        <!-- Divider-->
        <hr class="my-4" />
        
    </div>
</div>


@endsection
