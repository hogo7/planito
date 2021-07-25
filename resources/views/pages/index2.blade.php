<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Planito </title>
    <link rel="icon" href="{{asset('img/favicon.png')}}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('./css/bootstrap.min.css')}}">
    <!-- animate CSS -->
    <link rel="stylesheet" href="{{asset('./css/animate.css')}}">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="{{asset('./css/owl.carousel.min.css')}}">
    <!-- themify CSS -->
    <link rel="stylesheet" href="{{asset('./css/themify-icons.css')}}">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="{{asset('./css/flaticon.css')}}">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="{{asset('./css/magnific-popup.css')}}">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="{{asset('./css/slick.css')}}">


    <link rel='manifest' href='{{ asset('js/manifest.json') }}'>

    <!-- style CSS -->
    <link rel="stylesheet" href="{{asset('./css/style.css')}}">
    <link rel="stylesheet" href="{{asset('./css/style2.css')}}">

</head>

<body>
    <!--::header part start::-->
   @include('layouts.nav')
    <!-- Header part end-->

    <!-- banner part start-->
    <section class="banner_part">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-xl-6">
                    <div class="banner_text">
                        <div class="banner_text_iner">
                            <h5>پلنتیو یعنی وقت رشد تو</h5>
                            <h1>زندگی تو بهتر کن</h1>
                            <p>یک بستر روانشناسی انلاین باحال که بهت کمک میکنه خودتو بهتر بشناسی و پس از این بهتر برای اینده برنامه ریزی کنی</p>
                            <a href="#read-more" id='button' class="btn_1">بیشتر بدانیم</a>
                            <a href="{{route('register')}}" class="btn_2">شروع کنیم</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner part start-->

    <!-- feature_part start-->
    <section class="feature_part">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-xl-3 align-self-center">
                    <div class="single_feature_text ">
                        <h2>خفن ترین <br> ویژگی ها</h2>
                        <p>بهترین بهترین ها اینجا جمع شده اند برای شما و اینده شما  خب معطل نکنین</p>
                        <a href="#" class="btn_1">اطلاعات بیشتر</a>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="single_feature">
                        <div class="single_feature_part">
                            <span class="single_feature_icon"><i class="ti-bolt"></i></span>
                            <h4>سریع</h4>
                            <p>کمترین زمان بیشترین بازدهی این یعنی سرعت پلنیتو سریعه چه برای </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="single_feature">
                        <div class="single_feature_part">
                            <span class="single_feature_icon"><i class="ti-bar-chart"></i></span>
                            <h4>داده های گرافیکی </h4>
                            <p>
                                تمامی ازمون ها دارای چارت و داده های گرافیکی هستد که مراجعه کننده و مراجعه پذیر امکان شناخت هرچه بیشتر را میدهند
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="single_feature">
                        <div class="single_feature_part single_feature_part_2">
                            <span class="single_service_icon style_icon"><i class="ti-check-box"></i></span>
                            <h4>تایید شده و علمی </h4>
                            <p>
                            تمامی ازمون ها دارای مرجع علمی و دانشگاهی هستند و در نمونه اماری بالا کارایی شان ثابت شده است
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- upcoming_event part start-->


    <!-- member_counter counter start -->
    <section class="member_counter">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-sm-6">
                        <div class="single_member_counter">
                            <span class="counter">10</span>
                            <h4>مشاور حرفه ای</h4>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="single_member_counter">
                            <span class="counter">960</span>
                            <h4> مراجعه موفق</h4>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="single_member_counter">
                            <span class="counter">3856</span>
                            <h4>چارت ساخته شده</h4>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- member_counter counter end -->
    


    <!-- learning part start-->
    <section class="learning_part" id="read-more">
        <div class="container">
            <div class="row align-items-sm-center align-items-lg-stretch">
                <div class="col-md-7 col-lg-7">
                    <div class="learning_img">
                        <img src="{{asset('img/learning_img.png')}}" alt="">
                    </div>
                </div>
                <div class="col-md-5 col-lg-5">
                    <div class="learning_member_text">
                        <h5>اندکی درباره ما  </h5>
                        <h2>ساختن دنیا خود با نقشه  خود</h2>
                        <p>پلنیتو وابسته به مرکز مشاوره  کسب کار فردوسی بیش از یک دهه فعالیت در ضمینه مشاوره  توسعه فردی است </p>
                        تخصص ما :
                        <ul>
                            <li><span class="ti-pencil-alt"></span>  مشاوره و برنامه ریزی شخصی </li>
                            <li><span class="ti-ruler-pencil"></span> ارائه ابزار سنجش و توسعه شخصی است </li>
                        </ul>
                        <a href="#" class="btn_1">در وبلاگ بیشتر بخوانید</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- learning part end-->


    <!--::review_part start::-->
   
                

    <!-- footer part start-->
    <footer class="footer-area">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-sm-6 col-md-4 col-xl-3">
                    <div class="single-footer-widget footer_1">
                        <a href="index.html"> <img src="{{asset('img/logo.png')}}" alt=""> </a>
                        <p>آینده اینجا شروع میشود

                            آکادمی نوآوری و کارآفرینی فردوسی ، مجموعه ای دانش محور با رسالت توسعه و ترویج کسب و کار و با چشم انداز تبدیل شدن به مورد اعتماد ترین مجموعه در ارتقای توانمندی کسب و کاری افراد و کسب و کار ها در شرق کشور و کشور های فارسی زبان ، راه اندازی شده است. این مجموعه تلاش دارد روحیه کارآفرینی را در میان نوجوانان و جوانان با استفاده از مدل ها و محتوا های بومی شده خود ارتقا دهد و موجب افزایش احتمال موفقیت شغلی آینده مبتنی بر استعدادهای ذاتی افراد شود.
                            </p>
                        <p> </p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-xl-4">
                    <div class="single-footer-widget footer_2">
                       
                        <div class="social_icon">
                            <p>
                                <span style="position: relative; top: -4px;">ما در شبکه های اجتماعی همراهی کنید:</span> 
                                <span style="display: inline-block; font-size: 24px; line-height: 30px;">
                                <a href="https://telegram.me/ferdowsi_academy">Telegram</a> <a href="https://www.linkedin.com/company/ferdowsiacademy/about/"><i class="ti-linkedin"></i></a> <a href="https://www.instagram.com/ferdowsi_academy/"><i class="ti-instagram"></i></a>
                                </span>
                                </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-md-4">
                    <div class="single-footer-widget footer_2">
                        <h4>ارتباط با ما </h4>
                        <div class="contact_info">
                            <p><span> آدرس :</span> مشهد سید رضی  7 9 </p>
                            <p><span> تلفن :</span> 05136019367 </p>
                            <p><span> ایمیل : </span>info@colorlib.com </p>
                            
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="copyright_part_text text-center">
                        <div class="row">
                            <div class="col-lg-12">
                                <p class="footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>

<p class="footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved |  توسعه و ساخته شده با <i class="ti-heart" aria-hidden="true"></i> توسط <a href="https://colorlib.com" target="_blank">amir gh</a>
    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                                
</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</footer>
    <!-- footer part end-->

    <!-- jquery plugins here-->
    <!-- jquery -->
    <script src="{{asset('./js/jquery-1.12.1.min.js')}}"></script>
    <!-- popper js -->
    <script src="{{asset('./js/popper.min.js')}}"></script>
    <!-- bootstrap js -->
    <script src="{{asset('./js/bootstrap.min.js')}}"></script>
    <!-- easing js -->
    <script src="{{asset('./js/jquery.magnific-popup.js')}}"></script>
    <!-- swiper js -->
    <script src="{{asset('./js/swiper.min.js')}}"></script>
    <!-- swiper js -->
    <script src="{{asset('./js/masonry.pkgd.js')}}"></script>
    <!-- particles js -->
    <script src="{{asset('./js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('./js/jquery.nice-select.min.js')}}"></script>
    <!-- swiper js -->
    <script src="{{asset('./js/slick.min.js')}}"></script>
    <script src="{{asset('./js/jquery.counterup.min.js')}}"></script>

    
    <script src="{{asset('./js/waypoints.min.js')}}"></script>
    <!-- custom js -->
    <script src="{{asset('./js/custom.js')}}"></script>
    <script> 
    $("#button").click(function() {
    $('html, body').animate({
        scrollTop: $("#read-more").offset().top
    }, 1000);
});
    </script>
</body>
<script src="{{asset('./js/pwabuilder-sw.js')}}"></script>    
    <script src="{{asset('./js/pwabuilder-sw-register.js')}}"></script>  
  
</html>