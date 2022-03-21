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
            <a href="post.html">
                <h2 class="post-title">Test Title</h2>
                <h3 class="post-subtitle">Problems look mighty small from 150 miles up</h3>
            </a>
            <p class="post-meta">
                September 24, 2021
            </p>
        </div>
        <!-- Divider-->
        <hr class="my-4" />
        
    </div>
</div>


@endsection
