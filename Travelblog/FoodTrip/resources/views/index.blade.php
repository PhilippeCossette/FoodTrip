@extends('master')
@section('title', 'Home Page')
@section('content')
<section class="main-banner">
    <header class="main-banner__header mx-1200">
        <h1 class="main-banner__title">FoodTrip</h1>
        <p class="main-banner__undertitle">Blog about food and travel.</p>
    </header>
    <div class="banner-slider mx-1200 section-spacing">
        <article class="post-banner grid-12">
            <picture class="post-banner__card-image__container">
                <img src="{{ asset('uploads/ramen.jpg') }}" alt="" class="post-banner__card-image">
            </picture>
            <div class="post-banner__card">
                <header class="post-banner__card-header">
                    <p class="post-banner__card-date">12 Dec 2023</p>
                    <h2 class="post-banner__card-title">Discover the best foods in the world</h2>
                    <span class="category">Global Flavors</span>
                </header>
                <div>
                    <p class="post-banner__card-content">From sizzling street food in Bangkok to decadent pastries in Paris, your taste buds are in for a global adventure! 🌎🍴</p>
                </div>
                <footer class="post-banner__card-footer">
                    <button class="btn-lm">
                        <span class="circle">
                            <span class="arrow"></span>
                        </span>
                        <span class="btn-text">Learn More</span>
                    </button>
                </footer>
            </div>

        </article>
    </div>
</section>

<section class="mx-1200 section-spacing">
    <div class="featured-post__grid">
        <!-- Card 1 -->
        <div class="featured-post__card">
            <picture class="featured-post__card-image__container">
                <img src="{{ asset('uploads/ramen-post.jpg') }}" alt="Japanese Ramen" class="featured-post__card-image">
            </picture>
            <div class="featured-post__card-body">
                <div class="featured-post__card-header">
                    <h3 class="featured-post__card-title">Exploring the Culinary Delights of Japan: A Food Lover's Journey</h3>
                    <span class="category">Japanese Cuisine</span>
                </div>
                <div class="featured-post__card-content">
                    <p class="featured-post__card-date">12 Dec 2023</p>
                    <p class="featured-post__card-text">From sushi to ramen, tempura to takoyaki, Japan offers a diverse array of culinary delights that will tantalize your taste buds.</p>
                    <button class="link-button">Learn More <i class="ri-arrow-right-line"></i></button>
                </div>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="featured-post__card">
            <picture class="featured-post__card-image__container">
                <img src="{{ asset('uploads/tapas-post.jpg') }}" alt="Spanish Tapas" class="featured-post__card-image">
            </picture>
            <div class="featured-post__card-body">
                <div class="featured-post__card-header">
                    <h3 class="featured-post__card-title small-post">The Vibrant Flavors of Spain: Tapas and More</h3>
                    <span class="category">Spanish Cuisine</span>
                </div>
                <div class="featured-post__card-content small-post">
                    <p class="featured-post__card-date">20 Jan 2024</p>
                    <p class="featured-post__card-text small-post">Discover how tapas bring people together in Spain — small plates full of flavor, meant to be shared with family and friends.</p>
                    <button class="link-button">Learn More <i class="ri-arrow-right-line"></i></button>
                </div>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="featured-post__card">
            <picture class="featured-post__card-image__container">
                <img src="{{ asset('uploads/pizza-post.jpg') }}" alt="Italian Pizza" class="featured-post__card-image">
            </picture>
            <div class="featured-post__card-body">
                <div class="featured-post__card-header">
                    <h3 class="featured-post__card-title small-post">Italy’s Classic Pizza: A Slice of Tradition</h3>
                    <span class="category">Italian Cuisine</span>
                </div>
                <div class="featured-post__card-content small-post">
                    <p class="featured-post__card-date">05 Feb 2024</p>
                    <p class="featured-post__card-text small-post">From Naples to the world, learn how authentic Italian pizza is crafted with fresh ingredients and centuries of tradition.</p>
                    <button class="link-button">Learn More <i class="ri-arrow-right-line"></i></button>
                </div>
            </div>
        </div>
    </div>
</section>



@endsection