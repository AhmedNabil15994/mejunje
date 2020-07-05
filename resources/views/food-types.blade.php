@extends('Layouts.master')
@section('title','Food Types')
@section('name','Ahmed')
@section('extra_title','Food Types')

@section('content')

<div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-10">
        <div class="chart chart5">
            <div class="row">
                <div class="col-md-12">
                    <div class="chart-data food-types">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="deshed">
                                    <img src="{{ URL::to('/assets/images/dishes.jpeg') }}" alt="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="dashed">
                                    <h2>$0 delivery for 30 days!</h2>
                                    <p>$0 delivery for order $10 for 30 days</p>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="learn">
                                    Learn More
                                </div>
                            </div>
                        </div>
                    </div>
                </div>        
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-10">
        <div class="chart chart2 food_types2">
            <div class="row rowest">
                <h4>Food Types</h4>
                <div class="col-xs-12">
                    <!-- Slider main container -->
                    <div class="swiper-container" dir="ltr">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <!-- Slides -->
                            <div class="swiper-slide swiper-slide-active">
                                <img src="{{ URL::to('/assets/images/logo.jpeg') }}" alt="">
                                <p>All</p>
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ URL::to('/assets/images/logo.jpeg') }}" alt="">
                                <p>All 2</p>
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ URL::to('/assets/images/logo.jpeg') }}" alt="">
                                <p>All 3</p>
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ URL::to('/assets/images/logo.jpeg') }}" alt="">
                                <p>All 4</p>
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ URL::to('/assets/images/logo.jpeg') }}" alt="">
                                <p>All 5</p>
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ URL::to('/assets/images/logo.jpeg') }}" alt="">
                                <p>All 6</p>
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ URL::to('/assets/images/logo.jpeg') }}" alt="">
                                <p>All 7</p>
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ URL::to('/assets/images/logo.jpeg') }}" alt="">
                                <p>All 8</p>
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ URL::to('/assets/images/logo.jpeg') }}" alt="">
                                <p>All 9</p>
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ URL::to('/assets/images/logo.jpeg') }}" alt="">
                                <p>All 10</p>
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ URL::to('/assets/images/logo.jpeg') }}" alt="">
                                <p>All 11</p>
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ URL::to('/assets/images/logo.jpeg') }}" alt="">
                                <p>All 12</p>
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ URL::to('/assets/images/logo.jpeg') }}" alt="">
                                <p>All 13</p>
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ URL::to('/assets/images/logo.jpeg') }}" alt="">
                                <p>All 14</p>
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ URL::to('/assets/images/logo.jpeg') }}" alt="">
                                <p>All 15</p>
                            </div>
                        </div>
                        <!-- If we need pagination -->
                        <!-- If we need navigation buttons -->
                        <div class="swiper-button-next"></div>

                        <!-- If we need scrollbar -->
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="col-md-3 img-holder">
                        <div class="food-details" style="background-image: url('{{ URL::to('/assets/images/meal.jpeg') }}');">
                            <span class="price">30~35</span>
                        </div>
                        <h5>Bagal Story</h5>
                        <p class="details">
                            <span><i class="fa fa-star"></i> 4.7</span>
                            <span>Bell</span>
                            <span>Story</span>
                            <span>$5</span>
                        </p>
                    </div>
                    <div class="col-md-3 img-holder">
                        <div class="food-details" style="background-image: url('{{ URL::to('/assets/images/meal.jpeg') }}');">
                            <span class="price">30~35</span>
                        </div>
                        <h5>Bagal Story</h5>
                        <p class="details">
                            <span><i class="fa fa-star"></i> 4.7</span>
                            <span>Bell</span>
                            <span>Story</span>
                            <span>$5</span>
                        </p>
                    </div>
                    <div class="col-md-3 img-holder">
                        <div class="food-details" style="background-image: url('{{ URL::to('/assets/images/meal.jpeg') }}');">
                            <span class="price">30~35</span>
                        </div>
                        <h5>Bagal Story</h5>
                        <p class="details">
                            <span><i class="fa fa-star"></i> 4.7</span>
                            <span>Bell</span>
                            <span>Story</span>
                            <span>$5</span>
                        </p>
                    </div>
                    <div class="col-md-3 img-holder">
                        <div class="food-details" style="background-image: url('{{ URL::to('/assets/images/meal.jpeg') }}');">
                            <span class="price">30~35</span>
                        </div>
                        <h5>Bagal Story</h5>
                        <p class="details">
                            <span><i class="fa fa-star"></i> 4.7</span>
                            <span>Bell</span>
                            <span>Story</span>
                            <span>$5</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-10">
        <div class="chart chart2 food_types2">
            <div class="row rowest">
                <h4>Food Types</h4>
                <div class="col-xs-12">
                    <!-- Slider main container -->
                    <div class="swiper-container" dir="ltr">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <!-- Slides -->
                            <div class="swiper-slide swiper-slide-active">
                                <img src="{{ URL::to('/assets/images/logo.jpeg') }}" alt="">
                                <p>All</p>
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ URL::to('/assets/images/logo.jpeg') }}" alt="">
                                <p>All 2</p>
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ URL::to('/assets/images/logo.jpeg') }}" alt="">
                                <p>All 3</p>
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ URL::to('/assets/images/logo.jpeg') }}" alt="">
                                <p>All 4</p>
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ URL::to('/assets/images/logo.jpeg') }}" alt="">
                                <p>All 5</p>
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ URL::to('/assets/images/logo.jpeg') }}" alt="">
                                <p>All 6</p>
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ URL::to('/assets/images/logo.jpeg') }}" alt="">
                                <p>All 7</p>
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ URL::to('/assets/images/logo.jpeg') }}" alt="">
                                <p>All 8</p>
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ URL::to('/assets/images/logo.jpeg') }}" alt="">
                                <p>All 9</p>
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ URL::to('/assets/images/logo.jpeg') }}" alt="">
                                <p>All 10</p>
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ URL::to('/assets/images/logo.jpeg') }}" alt="">
                                <p>All 11</p>
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ URL::to('/assets/images/logo.jpeg') }}" alt="">
                                <p>All 12</p>
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ URL::to('/assets/images/logo.jpeg') }}" alt="">
                                <p>All 13</p>
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ URL::to('/assets/images/logo.jpeg') }}" alt="">
                                <p>All 14</p>
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ URL::to('/assets/images/logo.jpeg') }}" alt="">
                                <p>All 15</p>
                            </div>
                        </div>
                        <!-- If we need pagination -->
                        <!-- If we need navigation buttons -->
                        <div class="swiper-button-next"></div>

                        <!-- If we need scrollbar -->
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="col-md-3 img-holder">
                        <div class="food-details" style="background-image: url('{{ URL::to('/assets/images/meal.jpeg') }}');">
                            <span class="price">30~35</span>
                        </div>
                        <h5>Bagal Story</h5>
                        <p class="details">
                            <span><i class="fa fa-star"></i> 4.7</span>
                            <span>Bell</span>
                            <span>Story</span>
                            <span>$5</span>
                        </p>
                    </div>
                    <div class="col-md-3 img-holder">
                        <div class="food-details" style="background-image: url('{{ URL::to('/assets/images/meal.jpeg') }}');">
                            <span class="price">30~35</span>
                        </div>
                        <h5>Bagal Story</h5>
                        <p class="details">
                            <span><i class="fa fa-star"></i> 4.7</span>
                            <span>Bell</span>
                            <span>Story</span>
                            <span>$5</span>
                        </p>
                    </div>
                    <div class="col-md-3 img-holder">
                        <div class="food-details" style="background-image: url('{{ URL::to('/assets/images/meal.jpeg') }}');">
                            <span class="price">30~35</span>
                        </div>
                        <h5>Bagal Story</h5>
                        <p class="details">
                            <span><i class="fa fa-star"></i> 4.7</span>
                            <span>Bell</span>
                            <span>Story</span>
                            <span>$5</span>
                        </p>
                    </div>
                    <div class="col-md-3 img-holder">
                        <div class="food-details" style="background-image: url('{{ URL::to('/assets/images/meal.jpeg') }}');">
                            <span class="price">30~35</span>
                        </div>
                        <h5>Bagal Story</h5>
                        <p class="details">
                            <span><i class="fa fa-star"></i> 4.7</span>
                            <span>Bell</span>
                            <span>Story</span>
                            <span>$5</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection