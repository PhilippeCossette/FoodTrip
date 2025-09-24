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
<section class="my-5 mx-1200">
    <div class="container-fluid">
        <div class="row g-3">

            <!-- Big post on the left -->
            <div class="col-12 col-lg-8">
                <div class="featured-card h-100">
                    <img src="{{ asset('uploads/food-category.jpg') }}" class="featured-card-img-bg" alt="Big Post">
                    <div class="featured-card-body hover-slide-up">
                        <h1 class="featured-card-title">A Taste of Morocco</h1>
                        <p class="featured-card-date">September 24 2025</p>
                        <div class="featured-card-content">
                            <p class="featured-card-text">Morocco’s cuisine is a feast of colors, aromas, and tradition. From slow-cooked lamb tagines and fluffy couscous to sweet mint tea, every dish tells a story of family and culture. Street food like msemen and seafood from the coast add even more variety to this rich culinary heritage.</p>
                            <a href="#" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Three smaller posts on the right -->
            <div class="col-12 col-lg-4 d-flex flex-column gap-3">
                <!-- Small Post 1 -->
                <div class="featured-card">
                    <picture>
                        <img src="{{ asset('uploads/food-category.jpg') }}" class="featured-card-img-bg" alt="Small Post 1">
                    </picture>
                    <div class="featured-card-body">
                        <p class="featured-card-title">Small Post 1</p>
                        <p class="featured-card-date">September 24 2025</p>
                        <p class="featured-card-text">Short summary for small post 1.</p>
                        <a href="#" class="btn btn-sm btn-primary">Read More</a>
                    </div>
                </div>

                <!-- Small Post 2 -->
                <div class="featured-card">
                    <img src="https://via.placeholder.com/400x190" class="featured-card-img-bg" alt="Small Post 2">
                    <div class="card-body">
                        <h5 class="card-title">Small Post 2</h5>
                        <p class="card-text">Short summary for small post 2.</p>
                        <a href="#" class="btn btn-sm btn-primary">Read More</a>
                    </div>
                </div>
                <!-- Small Post 3 -->
                <div class="featured-card">
                    <img src="https://via.placeholder.com/400x190" class="featured-card-img-bg" alt="Small Post 2">
                    <div class="card-body">
                        <h5 class="card-title">Small Post 2</h5>
                        <p class="card-text">Short summary for small post 2.</p>
                        <a href="#" class="btn btn-sm btn-primary">Read More</a>
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>



@endsection