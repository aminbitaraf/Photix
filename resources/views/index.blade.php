<!DOCTYPE html>
<html lang="en">
<head>
    <title>Thumber &mdash; Colorlib Website Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700,900" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('fonts/icomoon/style.css')}}">

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">

    <link rel="stylesheet" href="{{asset('css/bootstrap-datepicker.css')}}">

    <link rel="stylesheet" href="{{asset('fonts/flaticon/font/flaticon.css')}}">

    <link rel="stylesheet" href="{{asset('css/aos.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery.scrollbar.css')}}">
    <link rel="stylesheet" href="{{asset('css/fancybox.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/swiper.min.css')}}">

    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/master.css')}}">

</head>
<body>


<div class="site-wrap">

    <div class="site-mobile-menu">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>

    <header class="header-bar d-flex d-lg-flex align-items-center no-scroll"  data-aos="fade-down">
        <div class="site-logo">
            <a href="#">Thumber</a>
            {{--        TODO Change it--}}
        </div>

        <div class="d-inline-block d-xl-block ml-md-0 ml-auto py-3"  style="position: relative; top: 3px; ">
            <a href="#"
               class="site-menu-toggle js-menu-toggle text-white"><span
                    class="icon-menu h3"></span> <span style="position: relative;top: -4px; text-transform: uppercase;">Menu</span></a>
        </div>

        <div class="main-menu d-none">
            <ul class="js-clone-nav">
                <li class="active"><a href="index.html">Home</a></li>
                <li><a href="photos.html">Photos</a></li>
                <li><a href="bio.html">About Me</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
            <ul class="social js-clone-nav">
                <li><a href="#"><span class="icon-facebook"></span></a></li>
                <li><a href="#"><span class="icon-twitter"></span></a></li>
                <li><a href="#"><span class="icon-instagram"></span></a></li>
            </ul>
        </div>
    </header>


    <div class="swiper-container gallery-top">
        <div class="swiper-wrapper">
            <div class="swiper-slide cover" style="background-image: url({{asset('images/img_1.jpg')}});">
                <a href="{{asset('images/img_1.jpg')}}" data-fancybox="gallery" class="zoom"><span
                        class="icon-search"></span></a>
                <div class="img-info">
                    <span class="btn-toggle-expand"><span class="icon-call_made"></span></span>
                    <div class="img-info-content">
                        <h2>Image Title Here</h2>
                        <div class="scrollbar-inner style-scrollbar-sm js-scrollbar-container">
                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum, ipsam, illo
                                dolorum laboriosam voluptatum laudantium. Lorem ipsum dolor sit amet, consectetur
                                adipisicing elit. Aspernatur facilis architecto deserunt doloribus, nisi placeat quas
                                ratione perferendis? Placeat aliquid assumenda, odio numquam vero eveniet fugit
                                blanditiis dolorum laudantium voluptatibus!</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-slide cover" style="background-image: url({{asset('images/img_2.jpg')}});">
                <a href="{{asset('images/img_2.jpg')}}" data-fancybox="gallery" class="zoom"><span
                        class="icon-search"></span></a>
                <div class="img-info">
                    <span class="btn-toggle-expand"><span class="icon-call_made"></span></span>
                    <div class="img-info-content">
                        <h2>Image Title Here 2</h2>
                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum, ipsam, illo
                            dolorum laboriosam voluptatum laudantium.</p>
                    </div>
                </div>
            </div>

            <div class="swiper-slide cover" style="background-image: url({{asset('images/img_3.jpg')}});">
                <a href="{{asset('images/img_3.jpg')}}" data-fancybox="gallery" class="zoom"><span
                        class="icon-search"></span></a>
                <div class="img-info">
                    <span class="btn-toggle-expand"><span class="icon-call_made"></span></span>
                    <div class="img-info-content">
                        <h2>Image Title Here 3</h2>
                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum, ipsam, illo
                            dolorum laboriosam voluptatum laudantium.</p>
                    </div>
                </div>
            </div>

            <div class="swiper-slide cover" style="background-image: url({{asset('images/img_4.jpg')}});">
                <a href="{{asset('images/img_4.jpg')}}" data-fancybox="gallery" class="zoom"><span
                        class="icon-search"></span></a>
                <div class="img-info">
                    <span class="btn-toggle-expand"><span class="icon-call_made"></span></span>
                    <div class="img-info-content">
                        <h2>Image Title Here 4</h2>
                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum, ipsam, illo
                            dolorum laboriosam voluptatum laudantium.</p>
                    </div>
                </div>
            </div>

            <div class="swiper-slide cover" style="background-image: url({{asset('images/img_5.jpg')}});">
                <a href="{{asset('images/img_5.jpg')}}" data-fancybox="gallery" class="zoom"><span
                        class="icon-search"></span></a>
                <div class="img-info">
                    <span class="btn-toggle-expand"><span class="icon-call_made"></span></span>
                    <div class="img-info-content">
                        <h2>Image Title Here 5</h2>
                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum, ipsam, illo
                            dolorum laboriosam voluptatum laudantium.</p>
                    </div>
                </div>
            </div>

            <div class="swiper-slide cover" style="background-image: url({{asset('images/img_6.jpg')}});">
                <a href="{{asset('images/img_6.jpg')}}" data-fancybox="gallery" class="zoom"><span
                        class="icon-search"></span></a>
                <div class="img-info">
                    <span class="btn-toggle-expand"><span class="icon-call_made"></span></span>
                    <div class="img-info-content">
                        <h2>Image Title Here 6</h2>
                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum, ipsam, illo
                            dolorum laboriosam voluptatum laudantium.</p>
                    </div>
                </div>
            </div>

            <div class="swiper-slide cover" style="background-image: url({{asset('images/img_7.jpg')}});">
                <a href="{{asset('images/img_7.jpg')}}" data-fancybox="gallery" class="zoom"><span
                        class="icon-search"></span></a>
                <div class="img-info">
                    <span class="btn-toggle-expand"><span class="icon-call_made"></span></span>
                    <div class="img-info-content">
                        <h2>Image Title Here 7</h2>
                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum, ipsam, illo
                            dolorum laboriosam voluptatum laudantium.</p>
                    </div>
                </div>
            </div>

            <div class="swiper-slide cover" style="background-image: url({{asset('images/img_8.jpg')}});">
                <a href="{{asset('images/img_8.jpg')}}" data-fancybox="gallery" class="zoom"><span
                        class="icon-search"></span></a>
                <div class="img-info">
                    <span class="btn-toggle-expand"><span class="icon-call_made"></span></span>
                    <div class="img-info-content">
                        <h2>Image Title Here 8</h2>
                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum, ipsam, illo
                            dolorum laboriosam voluptatum laudantium.</p>
                    </div>
                </div>
            </div>

            <div class="swiper-slide cover" style="background-image: url({{asset('images/img_9.jpg')}});">
                <a href="{{asset('images/img_9.jpg')}}" data-fancybox="gallery" class="zoom"><span
                        class="icon-search"></span></a>
                <div class="img-info">
                    <span class="btn-toggle-expand"><span class="icon-call_made"></span></span>
                    <div class="img-info-content">
                        <h2>Image Title Here 9</h2>
                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum, ipsam, illo
                            dolorum laboriosam voluptatum laudantium.</p>
                    </div>
                </div>
            </div>

            <div class="swiper-slide cover" style="background-image: url({{asset('images/img_10.jpg')}});">
                <a href="{{asset('images/img_10.jpg')}}" data-fancybox="gallery" class="zoom"><span
                        class="icon-search"></span></a>
                <div class="img-info">
                    <span class="btn-toggle-expand"><span class="icon-call_made"></span></span>
                    <div class="img-info-content">
                        <h2>Image Title Here 10</h2>
                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum, ipsam, illo
                            dolorum laboriosam voluptatum laudantium.</p>
                    </div>
                </div>
            </div>

            <div class="swiper-slide cover" style="background-image: url({{asset('images/img_1.jpg')}});">
                <a href="{{asset('images/img_1.jpg')}}" data-fancybox="gallery" class="zoom"><span
                        class="icon-search"></span></a>
                <div class="img-info">
                    <span class="btn-toggle-expand"><span class="icon-call_made"></span></span>
                    <div class="img-info-content">
                        <h2>Image Title Here</h2>
                        <div class="scrollbar-inner style-scrollbar-sm js-scrollbar-container">
                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum, ipsam, illo
                                dolorum laboriosam voluptatum laudantium. Lorem ipsum dolor sit amet, consectetur
                                adipisicing elit. Aspernatur facilis architecto deserunt doloribus, nisi placeat quas
                                ratione perferendis? Placeat aliquid assumenda, odio numquam vero eveniet fugit
                                blanditiis dolorum laudantium voluptatibus!</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-slide cover" style="background-image: url({{asset('images/img_2.jpg')}});">
                <a href="{{asset('images/img_2.jpg')}}" data-fancybox="gallery" class="zoom"><span
                        class="icon-search"></span></a>
                <div class="img-info">
                    <span class="btn-toggle-expand"><span class="icon-call_made"></span></span>
                    <div class="img-info-content">
                        <h2>Image Title Here 2</h2>
                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum, ipsam, illo
                            dolorum laboriosam voluptatum laudantium.</p>
                    </div>
                </div>
            </div>

            <div class="swiper-slide cover" style="background-image: url({{asset('images/img_3.jpg')}});">
                <a href="{{asset('images/img_3.jpg')}}" data-fancybox="gallery" class="zoom"><span
                        class="icon-search"></span></a>
                <div class="img-info">
                    <span class="btn-toggle-expand"><span class="icon-call_made"></span></span>
                    <div class="img-info-content">
                        <h2>Image Title Here 3</h2>
                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum, ipsam, illo
                            dolorum laboriosam voluptatum laudantium.</p>
                    </div>
                </div>
            </div>

            <div class="swiper-slide cover" style="background-image: url({{asset('images/img_4.jpg')}});">
                <a href="{{asset('images/img_4.jpg')}}" data-fancybox="gallery" class="zoom"><span
                        class="icon-search"></span></a>
                <div class="img-info">
                    <span class="btn-toggle-expand"><span class="icon-call_made"></span></span>
                    <div class="img-info-content">
                        <h2>Image Title Here 4</h2>
                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum, ipsam, illo
                            dolorum laboriosam voluptatum laudantium.</p>
                    </div>
                </div>
            </div>

            <div class="swiper-slide cover" style="background-image: url({{asset('images/img_5.jpg')}});">
                <a href="{{asset('images/img_5.jpg')}}" data-fancybox="gallery" class="zoom"><span
                        class="icon-search"></span></a>
                <div class="img-info">
                    <span class="btn-toggle-expand"><span class="icon-call_made"></span></span>
                    <div class="img-info-content">
                        <h2>Image Title Here 5</h2>
                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum, ipsam, illo
                            dolorum laboriosam voluptatum laudantium.</p>
                    </div>
                </div>
            </div>

            <div class="swiper-slide cover" style="background-image: url({{asset('images/img_6.jpg')}});">
                <a href="{{asset('images/img_6.jpg')}}" data-fancybox="gallery" class="zoom"><span
                        class="icon-search"></span></a>
                <div class="img-info">
                    <span class="btn-toggle-expand"><span class="icon-call_made"></span></span>
                    <div class="img-info-content">
                        <h2>Image Title Here 6</h2>
                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum, ipsam, illo
                            dolorum laboriosam voluptatum laudantium.</p>
                    </div>
                </div>
            </div>

            <div class="swiper-slide cover" style="background-image: url({{asset('images/img_7.jpg')}});">
                <a href="{{asset('images/img_7.jpg')}}" data-fancybox="gallery" class="zoom"><span
                        class="icon-search"></span></a>
                <div class="img-info">
                    <span class="btn-toggle-expand"><span class="icon-call_made"></span></span>
                    <div class="img-info-content">
                        <h2>Image Title Here 7</h2>
                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum, ipsam, illo
                            dolorum laboriosam voluptatum laudantium.</p>
                    </div>
                </div>
            </div>

            <div class="swiper-slide cover" style="background-image: url({{asset('images/img_8.jpg')}});">
                <a href="{{asset('images/img_8.jpg')}}" data-fancybox="gallery" class="zoom"><span
                        class="icon-search"></span></a>
                <div class="img-info">
                    <span class="btn-toggle-expand"><span class="icon-call_made"></span></span>
                    <div class="img-info-content">
                        <h2>Image Title Here 8</h2>
                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum, ipsam, illo
                            dolorum laboriosam voluptatum laudantium.</p>
                    </div>
                </div>
            </div>

            <div class="swiper-slide cover" style="background-image: url({{asset('images/img_9.jpg')}});">
                <a href="{{asset('images/img_9.jpg')}}" data-fancybox="gallery" class="zoom"><span
                        class="icon-search"></span></a>
                <div class="img-info">
                    <span class="btn-toggle-expand"><span class="icon-call_made"></span></span>
                    <div class="img-info-content">
                        <h2>Image Title Here 9</h2>
                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum, ipsam, illo
                            dolorum laboriosam voluptatum laudantium.</p>
                    </div>
                </div>
            </div>

            <div class="swiper-slide cover" style="background-image: url({{asset('images/img_10.jpg')}});">
                <a href="{{asset('images/img_10.jpg')}}" data-fancybox="gallery" class="zoom"><span
                        class="icon-search"></span></a>
                <div class="img-info">
                    <span class="btn-toggle-expand"><span class="icon-call_made"></span></span>
                    <div class="img-info-content">
                        <h2>Image Title Here 10</h2>
                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum, ipsam, illo
                            dolorum laboriosam voluptatum laudantium.</p>
                    </div>
                </div>
            </div>

        </div>

        <div class="swiper-button-next swiper-button-white"></div>
        <div class="swiper-button-prev swiper-button-white"></div>
    </div>
    <div class="swiper-container gallery-thumbs">
        <div class="swiper-wrapper">
            <div class="swiper-slide cover" style="background-image:url({{asset('images/img_1.jpg')}})"></div>
            <div class="swiper-slide cover" style="background-image:url({{asset('images/img_2.jpg')}})"></div>
            <div class="swiper-slide cover" style="background-image:url({{asset('images/img_3.jpg')}})"></div>
            <div class="swiper-slide cover" style="background-image:url({{asset('images/img_4.jpg')}})"></div>
            <div class="swiper-slide cover" style="background-image:url({{asset('images/img_5.jpg')}})"></div>
            <div class="swiper-slide cover" style="background-image:url({{asset('images/img_6.jpg')}})"></div>
            <div class="swiper-slide cover" style="background-image:url({{asset('images/img_7.jpg')}})"></div>
            <div class="swiper-slide cover" style="background-image:url({{asset('images/img_8.jpg')}})"></div>
            <div class="swiper-slide cover" style="background-image:url({{asset('images/img_9.jpg')}})"></div>
            <div class="swiper-slide cover" style="background-image:url({{asset('images/img_10.jpg')}})"></div>
            <div class="swiper-slide cover" style="background-image:url({{asset('images/img_1.jpg')}})"></div>
            <div class="swiper-slide cover" style="background-image:url({{asset('images/img_2.jpg')}})"></div>
            <div class="swiper-slide cover" style="background-image:url({{asset('images/img_3.jpg')}})"></div>
            <div class="swiper-slide cover" style="background-image:url({{asset('images/img_4.jpg')}})"></div>
            <div class="swiper-slide cover" style="background-image:url({{asset('images/img_5.jpg')}})"></div>
            <div class="swiper-slide cover" style="background-image:url({{asset('images/img_6.jpg')}})"></div>
            <div class="swiper-slide cover" style="background-image:url({{asset('images/img_7.jpg')}})"></div>
            <div class="swiper-slide cover" style="background-image:url({{asset('images/img_8.jpg')}})"></div>
            <div class="swiper-slide cover" style="background-image:url({{asset('images/img_9.jpg')}})"></div>
            <div class="swiper-slide cover" style="background-image:url({{asset('images/img_10.jpg')}})"></div>
        </div>
    </div>

</div> <!-- .site-wrap -->

<script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('js/jquery-migrate-3.0.1.min.js')}}"></script>
<script src="{{asset('js/jquery-ui.js')}}"></script>
<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<!-- <script src="{{asset('js/jquery.stellar.min.js')}}"></script> -->
<script src="{{asset('js/jquery.countdown.min.js')}}"></script>
<script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('js/bootstrap-datepicker.min.js')}}"></script>
<script src="{{asset('js/aos.js')}}"></script>

<script src="{{asset('js/jquery.fancybox.min.js')}}"></script>
<script src="{{asset('js/swiper.min.js')}}"></script>
<script src="{{asset('js/jquery.scrollbar.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>


</body>
</html>
