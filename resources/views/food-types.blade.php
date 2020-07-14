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
                                    <h2><span class="total"></span> delivery for 30 days!</h2>
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
                                <img src="https://firebasestorage.googleapis.com/v0/b/mejunje.appspot.com/o/src%2Ffood_types%2Fjay-wennington-UgolPhUcu9g-unsplash.jpg?alt=media&token=5a9d41c1-0964-456e-b811-48d3ee53d892" alt="">
                                <p>American</p>
                            </div>
                            <div class="swiper-slide">
                                <img src="https://firebasestorage.googleapis.com/v0/b/mejunje.appspot.com/o/src%2Ffood_types%2Fandrik-langfield-iPNilBHvNvg-unsplash.jpg?alt=media&token=5c12e3a6-d80f-4534-8258-9058dccd7286" alt="">
                                <p>BBQ / Steak</p>
                            </div>
                            <div class="swiper-slide">
                                <img src="https://firebasestorage.googleapis.com/v0/b/mejunje.appspot.com/o/src%2Ffood_types%2Falice-y4eF4JOCZvw-unsplash.jpg?alt=media&token=5777b3d2-515a-4341-82a1-bd305f1aef51" alt="">
                                <p>Chinese</p>
                            </div>
                            <div class="swiper-slide">
                                <img src="https://firebasestorage.googleapis.com/v0/b/mejunje.appspot.com/o/src%2Ffood_types%2Fsalsa-criolla-92180-1.jpeg?alt=media&token=1e14163d-59f5-473d-88b5-c27dab83c68c" alt="">
                                <p>Criolla</p>
                            </div>
                            <div class="swiper-slide">
                                <img src="https://firebasestorage.googleapis.com/v0/b/mejunje.appspot.com/o/src%2Ffood_types%2Friccardo-bergamini-Xe14NrSK9io-unsplash.jpg?alt=media&token=4227031f-01bb-4ea4-9071-a639fec434af" alt="">
                                <p>Pasta</p>
                            </div>
                            <div class="swiper-slide">
                                <img src="https://firebasestorage.googleapis.com/v0/b/mejunje.appspot.com/o/src%2Ffood_types%2Fcarissa-gan-_0JpjeqtSyg-unsplash.jpg?alt=media&token=4ac1cbea-36ba-4b66-a03d-b913a6de385c" alt="">
                                <p>Pizza</p>
                            </div>
                            <div class="swiper-slide">
                                <img src="https://firebasestorage.googleapis.com/v0/b/mejunje.appspot.com/o/src%2Ffood_types%2FRotisserie-chicken-1.jpg?alt=media&token=efdfbe60-8b01-47a8-8e44-b3b34d34e103" alt="">
                                <p>Chicken</p>
                            </div>
                            <div class="swiper-slide">
                                <img src="https://firebasestorage.googleapis.com/v0/b/mejunje.appspot.com/o/src%2Ffood_types%2Fmae-mu-IZ0LRt1khgM-unsplash.jpg?alt=media&token=4b756c1b-496a-4561-8322-46595811c205" alt="">
                                <p>Sandwich</p>
                            </div>
                            <div class="swiper-slide">
                                <img src="https://firebasestorage.googleapis.com/v0/b/mejunje.appspot.com/o/src%2Ffood_types%2Ftai-s-captures-JiRSy0GfqPA-unsplash.jpg?alt=media&token=5f88fe13-84e8-4960-83d3-6892a80e2379" alt="">
                                <p>Mexican</p>
                            </div>
                            <div class="swiper-slide">
                                <img src="https://firebasestorage.googleapis.com/v0/b/mejunje.appspot.com/o/src%2Ffood_types%2FMofongo-Smart-Little-Cookie-3.jpg?alt=media&token=4bb4ccf8-db0a-4390-949b-e560853dcc79" alt="">
                                <p>Mofongo</p>
                            </div>
                            <div class="swiper-slide">
                                <img src="https://firebasestorage.googleapis.com/v0/b/mejunje.appspot.com/o/src%2Ffood_types%2Fmaria-labanda-hEKN_m0qGMA-unsplash.jpg?alt=media&token=3df3930d-0f33-4511-86eb-94e00003a216" alt="">
                                <p>Sea food</p>
                            </div>
                            <div class="swiper-slide">
                                <img src="https://firebasestorage.googleapis.com/v0/b/mejunje.appspot.com/o/src%2Ffood_types%2Fnadine-primeau--ftWfohtjNw-unsplash.jpg?alt=media&token=24cad1ff-76f3-4743-981f-af1d84b398c8" alt="">
                                <p>Salad</p>
                            </div>
                            <div class="swiper-slide">
                                <img src="https://firebasestorage.googleapis.com/v0/b/mejunje.appspot.com/o/src%2Ffood_types%2Fketo-chicken-coconut-curry-with-broccoli-rice-145315-2.jpg?alt=media&token=bf7f76f3-bc14-41f5-a1ea-a5bee0e3fa01" alt="">
                                <p>Lowcarb / Keto</p>
                            </div>
                            <div class="swiper-slide">
                                <img src="https://firebasestorage.googleapis.com/v0/b/mejunje.appspot.com/o/src%2Ffood_types%2Ftobias-zils-CMACG6AjjY4-unsplash.jpg?alt=media&token=94c1cf0a-9232-4461-aa3d-fb12dd9e61fd" alt="">
                                <p>Food Truck</p>
                            </div>
                            <div class="swiper-slide">
                                <img src="https://firebasestorage.googleapis.com/v0/b/mejunje.appspot.com/o/src%2Ffood_types%2Fheather-ford-teuvnOXOGVo-unsplash.jpg?alt=media&token=9c553ff2-33e4-48a4-b84c-701683551ff1" alt="">
                                <p>Breakfast / Brunches</p>
                            </div>
                        </div>
                        <!-- If we need pagination -->
                        <!-- If we need navigation buttons -->
                        <!-- If we need scrollbar -->
                    </div>
                    <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                </div>

                <div class="row my-menu"></div>  
                {{-- <div class="col-xs-12">
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
                </div> --}}
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
<script type="text/javascript" src="{{ URL::to('/assets/js/food-types.js') }}"></script>
@endsection