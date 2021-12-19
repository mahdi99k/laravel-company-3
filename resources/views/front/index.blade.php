<!DOCTYPE html>


{{--  ======= start head ======= --}}
@include('front.partials._head')   {{------- اشاره به view  -------}}
{{--  ======= end head ======= --}}


<body data-spy="scroll" data-target="#navbar-example">

<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container d-flex">

        <div class="logo mr-auto">
            <h1 class="text-light"><a href="index.html"><span>m</span>Business</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
        </div>

        <nav class="nav-menu d-none d-lg-block">
            <ul>
                <li class="active"><a href="#header">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#team">Team-family</a></li>
                <li><a href="#portfolio">Portfolio</a></li>
                <li><a href="#blog">Blog</a></li>
                {{-- <li class="drop-down"><a href="">Drop Down</a>
                        <ul>
                            <li><a href="#">photoshop</a></li>
                            <li class="drop-down"><a href="#">Programming</a>
                        <ul>
                              <li><a href="#">Html5</a></li>
                              <li><a href="#">Css</a></li>
                              <li><a href="#">Php8</a></li>
                              <li><a href="#">Laravel8</a></li>
                              <li><a href="#">Javascript</a></li>
                         </ul>
                              </li>
                                <li><a href="#">Seo Expert</a></li>
                                <li><a href="#">Web Design</a></li>
                                <li><a href="#">Web Developer</a></li>
                           </ul>
                      </li>--}}
                <li><a href="#contact">Contact</a></li>

            </ul>
        </nav><!-- .nav-menu -->

    </div>
</header><!-- End Header -->


<!-- ======= Slider Section ======= --> {{-------   slider pic  +   اشاره به view   -------}}
@include('front.partials._slider')
<!-- End Slider -->

<main id="main">


    <!-- ======= About Section ======= --> {{-------  About EBusiness  +   اشاره به view   -------}}
@include('front.partials._about')
<!-- End About Section -->


    <!-- ======= Services Section ======= --> {{-------   Our Services  +   اشاره به view   -------}}
@include('front.partials._service')
<!-- End Services Section -->


    <!-- ======= Skills Section ======= --> {{-------   %90 php  +   اشاره به view   -------}}
{{--  @include('front.partials._skill')  --}}
<!-- End Skills Section -->


    <!-- ======= Team Section ======= --> {{-------   Our Special Team  +   اشاره به view   -------}}
@include('front.partials._team')
<!-- End Team Section -->

    <!-- ======= Reviews Section ======= --> {{-------   WORKING WITH US   -------}}
{{--  @include('front.partials._review')  --}}
<!-- End Reviews Section -->


    <!-- ======= Portfolio Section ======= --> {{-------   Our Portfolio نمونه کار ها   -------}}
{{--  @include('front.partials._portfolio')  --}}
<!-- End Portfolio Section -->


    <!-- ======= Pricing Section ======= --> {{-------   Pricing Table  جدول قیمت گذلری  -------}}
{{--  @include('front.partials._pricing')  --}}
<!-- End Pricing Section -->


    <!-- ======= Testimonials Section ======= --> {{-------   lorem ipsum    -------}}
{{--  @include('front.partials._testimonials')  --}}
<!-- End Testimonials Section -->


    <!-- ======= Blog Section ======= --> {{-------   Latest News   -------}}
@include('front.partials._blog')
<!-- End Blog Section -->


    <!-- ======= Subscribe Section ======= --> {{-------  Welcome eBusiness company  -------}}
{{--  @include('front.partials._subscribe')  --}}
<!-- End Subscribe Section -->

    <!-- ======= Contact Section ======= --> {{-------  Contact + map  -------}}
{{--  @include('front.partials._contact')  --}}
<!-- End Contact Section -->

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer>


    <!-- ======= start Footer ======= -->
@include('front.partials._footer')   {{------- اشاره به view  -------}}
<!-- ======= end Footer ======= -->

    <div class="footer-area-bottom">    {{--  مشخصات پایین سایت  --}}
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="copyright text-center">
                        <p>
                            &copy; Copyright <strong>mBusiness</strong>. All Rights Reserved
                        </p>
                    </div>
                    <div class="credits">
                        <!--
                        All the links in the footer should remain intact.
                        You can delete the links only if you purchased the pro version.
                        Licensing information: https://bootstrapmade.com/license/
                        Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=eBusiness
                      -->
                        Designed by <a href="https://bootstrapmade.com/">Mahdi shm99k</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- End  Footer -->

<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
<div id="preloader"></div>

<!-- Vendor JS Files -->
<script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
<script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
<script src="{{ asset('assets/vendor/appear/jquery.appear.js') }}"></script>
<script src="{{ asset('assets/vendor/knob/jquery.knob.js') }}"></script>
<script src="{{ asset('assets/vendor/parallax/parallax.js') }}"></script>
<script src="{{ asset('assets/vendor/wow/wow.min.js') }}"></script>
<script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/vendor/nivo-slider/js/jquery.nivo.slider.js') }}"></script>
<script src="{{ asset('assets/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/vendor/venobox/venobox.min.js') }}"></script>

<!-- Template Main JS File -->
<script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>
