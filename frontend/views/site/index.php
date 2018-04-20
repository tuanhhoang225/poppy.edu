<?php

use frontend\assets\JssorAsset;
use common\helpers\FunctionHelper;
use yii\helpers\Url;

/* @var $this yii\web\View */

JssorAsset::register($this);

$general = FunctionHelper::get_general_information();

$this->title = $general['site_name'];
$key_newpage = FunctionHelper::get_post_by_page_key('news-page', 5);
$category_key = FunctionHelper::get_category('tin-tuc-7');


?>
<body class="">
<div id="wrapper" class="clearfix">
    <!-- preloader -->
    <div id="preloader">
        <div id="spinner">
            <img alt="" src="images/preloaders/5.gif">
        </div>
        <div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div>
    </div>

    <!-- Header -->
    <header id="header" class="header">
        <div class="header-top bg-theme-color-2 sm-text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="widget no-border m-0">
                            <ul class="list-inline">
                                <li class="m-0 pl-10 pr-10"><i class="fa fa-phone text-white"></i> <a class="text-white"
                                                                                                      href="#">123-456-789</a>
                                </li>
                                <li class="text-white m-0 pl-10 pr-10"><i class="fa fa-clock-o text-white"></i> Mon-Fri
                                    8:00 to 2:00
                                </li>
                                <li class="m-0 pl-10 pr-10"><i class="fa fa-envelope-o text-white"></i> <a
                                            class="text-white" href="#">contact@yourdomain.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="widget no-border m-0">
                            <ul class="list-inline text-right sm-text-center">
                                <li>
                                    <a href="#" class="text-white">FAQ</a>
                                </li>
                                <li class="text-white">|</li>
                                <li>
                                    <a href="#" class="text-white">Help Desk</a>
                                </li>
                                <li class="text-white">|</li>
                                <li>
                                    <a href="#" class="text-white">Support</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-nav">
            <div class="header-nav-wrapper navbar-scrolltofixed bg-white">
                <div class="container">
                    <nav id="menuzord-right" class="menuzord default">
                        <a class="menuzord-brand pull-left flip" style="margin-top: 7px" href="javascript:void(0)">
                            <img src="images/img/logo1-1.png" alt="">
                        </a>
                        <ul class="menuzord-menu">
                            <li class="active"><a href="#home">Trang chủ</a>

                            </li>
                            <li><a href="#">Khóa học</a>
                                <ul class="dropdown">
                                    <li><a href="#">Tiếng anh trẻ em</a>
                                        <ul class="dropdown">
                                            <li><a href="features-header-style1.html">Tiếng anh mầm non</a></li>
                                            <li><a href="features-header-style2.html">Tiếng anh tiểu học</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Tiếng anh trung học</a>
                                        <ul class="dropdown">
                                            <li><a href="features-page-title-text-left.html">Tiếng anh trung học cơ
                                                    sở</a></li>
                                            <li><a href="features-page-title-text-center.html">Tiếng anh trung học phổ
                                                    thông</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Tiếng anh giao tiếp</a>
                                        <ul class="dropdown">
                                            <li><a href="features-side-push-panel-left-overlay.html">Beginer</a></li>
                                            <li><a href="features-side-push-panel-left-push.html">Intermediate</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Luyện thi IELTS</a>
                                        <ul class="dropdown">
                                            <li><a href="#">Fre IELTS 3.5+</a>
                                            </li>
                                            <li><a href="features-home-bg-image-slider.html">IELTS Foundation 5.5+</a>
                                            </li>
                                            <li><a href="features-home-owl-fullwidth-carousel.html">IELTS Intermediate
                                                    6.0+</a></li>
                                            <li><a href="features-home-parallax-bg.html">Static/Parallax Image Bg</a>
                                            </li>
                                            <li><a href="features-home-video-bg.html">Video Image Bg</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Khóa học ngắn hạn</a>
                                        <ul class="dropdown">
                                            <li><a href="#">Thuyết trình</a>
                                            </li>
                                            <li><a href="#">Ngữ pháp</a>
                                            </li>
                                            <li><a href="#">Giao tiếp</a>
                                            </li>
                                            <li><a href="#">Tiếng anh học thuật</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Tiếng anh theo yêu cầu <span class="label label-success">New</span></a>
                                    </li>
                                    <li><a href="#">Tiếng anh one to one</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="#">Giáo viên</a>

                            </li>
                            <li><a href="#">Tin tức</a>

                            </li>
                            <li><a href="#home">Về chúng tôi</a>

                            </li>
                            <li><a href="#home">Liên hệ</a>

                            </li>
                            <li><a href="#">Thư viện ảnh</a>

                            </li>
                            <li><a href="#" data-toggle="modal" data-target="#dangky">Đăng ký</a> </li>
                            <?= $this->render('signup')?>
                            <li><a href="#" data-toggle="modal" data-target="#dangnhap">Đăng nhập</a> </li>
                            <?= $this->render('login')?>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>

    </header>

    <!-- Start main-content -->
    <div class="main-content">
        <!-- Section: home -->
        <section id="home">

            <!-- Slider Revolution Start -->
            <div class="rev_slider_wrapper">
                <div class="rev_slider" data-version="5.0">
                    <ul>

                        <!-- SLIDE 1 -->
                        <li data-index="rs-1" data-transition="slidingoverlayhorizontal" data-slotamount="default"
                            data-easein="default" data-easeout="default" data-masterspeed="default"
                            data-thumb="images/bg/bg5.jpg" data-rotate="0" data-saveperformance="off"
                            data-title="Slide 1" data-description="">
                            <!-- MAIN IMAGE -->
                            <img src="images/bg/bg5.jpg" alt="" data-bgposition="center center" data-bgfit="cover"
                                 data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="10" data-no-retina>
                            <!-- LAYERS -->

                        </li>

                        <!-- SLIDE 3 -->
                        <li data-index="rs-3" data-transition="slidingoverlayhorizontal" data-slotamount="default"
                            data-easein="default" data-easeout="default" data-masterspeed="default"
                            data-thumb="images/bg/bg1.jpg" data-rotate="0" data-saveperformance="off"
                            data-title="Slide 3" data-description="">
                            <!-- MAIN IMAGE -->
                            <img src="images/bg/bg1.jpg" alt="" data-bgposition="center top" data-bgfit="cover"
                                 data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="10" data-no-retina>
                            <!-- LAYERS -->


                        </li>

                    </ul>
                </div>
                <!-- end .rev_slider -->
            </div>
            <!-- end .rev_slider_wrapper -->
            <script>
                $(document).ready(function (e) {
                    $(".rev_slider").revolution({
                        sliderType: "standard",
                        sliderLayout: "auto",
                        dottedOverlay: "none",
                        delay: 5000,
                        navigation: {
                            keyboardNavigation: "off",
                            keyboard_direction: "horizontal",
                            mouseScrollNavigation: "off",
                            onHoverStop: "off",
                            touch: {
                                touchenabled: "on",
                                swipe_threshold: 75,
                                swipe_min_touches: 1,
                                swipe_direction: "horizontal",
                                drag_block_vertical: false
                            },
                            arrows: {
                                style: "zeus",
                                enable: true,
                                hide_onmobile: true,
                                hide_under: 600,
                                hide_onleave: true,
                                hide_delay: 200,
                                hide_delay_mobile: 1200,
                                tmp: '<div class="tp-title-wrap">    <div class="tp-arr-imgholder"></div> </div>',
                                left: {
                                    h_align: "left",
                                    v_align: "center",
                                    h_offset: 30,
                                    v_offset: 0
                                },
                                right: {
                                    h_align: "right",
                                    v_align: "center",
                                    h_offset: 30,
                                    v_offset: 0
                                }
                            },
                            bullets: {
                                enable: true,
                                hide_onmobile: true,
                                hide_under: 600,
                                style: "metis",
                                hide_onleave: true,
                                hide_delay: 200,
                                hide_delay_mobile: 1200,
                                direction: "horizontal",
                                h_align: "center",
                                v_align: "bottom",
                                h_offset: 0,
                                v_offset: 30,
                                space: 5,
                                tmp: '<span class="tp-bullet-img-wrap">  <span class="tp-bullet-image"></span></span><span class="tp-bullet-title">{{title}}</span>'
                            }
                        },
                        responsiveLevels: [1240, 1024, 778],
                        visibilityLevels: [1240, 1024, 778],
                        gridwidth: [1170, 1024, 778, 480],
                        gridheight: [650, 768, 960, 720],
                        lazyType: "none",
                        parallax: {
                            origo: "slidercenter",
                            speed: 1000,
                            levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 100, 55],
                            type: "scroll"
                        },
                        shadow: 0,
                        spinner: "off",
                        stopLoop: "on",
                        stopAfterLoops: 0,
                        stopAtSlide: -1,
                        shuffle: "off",
                        autoHeight: "off",
                        fullScreenAutoWidth: "off",
                        fullScreenAlignForce: "off",
                        fullScreenOffsetContainer: "",
                        fullScreenOffset: "0",
                        hideThumbsOnMobile: "off",
                        hideSliderAtLimit: 0,
                        hideCaptionAtLimit: 0,
                        hideAllCaptionAtLilmit: 0,
                        debugMode: false,
                        fallbacks: {
                            simplifyAll: "off",
                            nextSlideOnWindowFocus: "off",
                            disableFocusListener: false,
                        }
                    });
                });
            </script>
            <!-- Slider Revolution Ends -->

        </section>

        <!-- Section: home-boxes -->
        <section class="bg-silver-light">
            <div class="container pt-0 pb-0">
                <div class="section-content">
                </div>
            </div>
        </section>


        <!-- Section: About -->
        <section id="about">
            <div class="container pb-70">
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-8 col-sm-12 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s">
                            <img class="img-fullwidth" src="images/about/7.jpg" alt="">
                        </div>
                        <div class="col-md-4 col-sm-12 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
                            <div class="p-30 bg-theme-colored mt-10">
                                <h3 class="text-white mt-0 mb-10">Tư vấn miễn phí!</h3>
                                <!-- Appilication Form Start-->
                                <form id="reservation_form" name="reservation_form" class="reservation-form mt-20"
                                      method="post"
                                      action="http://thememascot.net/demo/personal/m/learnpress/v2.0/demo/includes/reservation.php">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group mb-20">
                                                <input placeholder="Họ tên" type="text" id="reservation_name"
                                                       name="reservation_name" required="" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group mb-20">
                                                <input placeholder="Email" type="text" id="reservation_email"
                                                       name="reservation_email" class="form-control" required="">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group mb-20">
                                                <input placeholder="Số điện thoại" type="text" id="reservation_phone"
                                                       name="reservation_phone" class="form-control" required="">
                                            </div>
                                        </div>

                                        <div class="col-sm-12">
                                            <div class="form-group mb-0 mt-10">
                                                <input name="form_botcheck" class="form-control" type="hidden" value="">
                                                <button type="submit"
                                                        class="btn btn-colored btn-default text-black btn-lg btn-block"
                                                        data-loading-text="Please wait...">Đăng ký
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <!-- Application Form End-->

                                <!-- Application Form Validation Start-->
                                <script type="text/javascript">
                                    $("#reservation_form").validate({
                                        submitHandler: function (form) {
                                            var form_btn = $(form).find('button[type="submit"]');
                                            var form_result_div = '#form-result';
                                            $(form_result_div).remove();
                                            form_btn.before('<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>');
                                            var form_btn_old_msg = form_btn.html();
                                            form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
                                            $(form).ajaxSubmit({
                                                dataType: 'json',
                                                success: function (data) {
                                                    if (data.status == 'true') {
                                                        $(form).find('.form-control').val('');
                                                    }
                                                    form_btn.prop('disabled', false).html(form_btn_old_msg);
                                                    $(form_result_div).html(data.message).fadeIn('slow');
                                                    setTimeout(function () {
                                                        $(form_result_div).fadeOut('slow')
                                                    }, 6000);
                                                }
                                            });
                                        }
                                    });
                                </script>
                                <!-- Application Form Validation Start -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Section: Mission -->
        <section id="mission">
            <div class="container-fluid pt-0 pb-0">
                <div class="row equal-height">
                    <div class="col-sm-8 col-md-8 xs-pull-none bg-theme-colored wow fadeInLeft" data-wow-duration="1s"
                         data-wow-delay="0.3s">
                        <div class="pt-60 pb-40 pl-90 pr-160 p-md-30">
                            <h2 class="title text-white text-uppercase line-bottom mt-0 mb-30">WELCOME TO POPPY ENGLISH
                                HOUSE</h2>
                            <div class="icon-box clearfix m-0 p-0 pb-10">
                                <a href="#" class="icon icon-circled bg-white icon-lg pull-left flip sm-pull-none">
                                    <i class="fa fa-desktop text-theme-color-2 font-36"></i>
                                </a>
                                <div class="ml-120 ml-sm-0">
                                    <h4 class="icon-box-title text-white mt-5 mb-10 letter-space-1">Chương trình
                                        học</h4>
                                    <p class="text-white">Các chương trình học tại Poppy English House được biên soạn
                                        theo tiêu chuẩn quốc tế, phù hợp với từng lứa tuổi và từng đối tượng, giúp học
                                        viên có thể đạt được hiệu quả cao nhất trong việc học Tiếng Anh. </p>
                                </div>
                            </div>
                            <div class="icon-box clearfix m-0 p-0 pb-10">
                                <a href="#" class="icon icon-circled bg-white icon-lg pull-left flip sm-pull-none">
                                    <i class="fa fa-user text-theme-color-2 font-36"></i>
                                </a>
                                <div class="ml-120 ml-sm-0">
                                    <h4 class="icon-box-title text-white mt-5 mb-10 letter-space-1">Đội ngũ giảng
                                        viên</h4>
                                    <p class="text-white">Giáo viên của các trường Quốc Tế với đầy đủ các chứng chỉ
                                        TESOL/CELTA với kinh nghiệm nhiều năm giảng dạy IELTS.</p>
                                </div>
                            </div>
                            <div class="icon-box clearfix m-0 p-0 pb-10">
                                <a href="#" class="icon icon-circled bg-white icon-lg pull-left flip sm-pull-none">
                                    <i class="fa fa-money text-theme-color-2 font-36"></i>
                                </a>
                                <div class="ml-120 ml-sm-0">
                                    <h4 class="icon-box-title text-white mt-5 mb-10 letter-space-1">Cam kết</h4>
                                    <p class="text-white">Chúng tôi cam kết đưa bạn đến thành công và đồng hành cùng
                                        bạn…</p>
                                </div>
                            </div>
                            <div class="icon-box clearfix m-0 p-0 pb-10">
                                <a href="#" class="icon icon-circled bg-white icon-lg pull-left flip sm-pull-none">
                                    <i class="fa fa-money text-theme-color-2 font-36"></i>
                                </a>
                                <div class="ml-120 ml-sm-0">
                                    <h4 class="icon-box-title text-white mt-5 mb-10 letter-space-1">Cơ sở vật chất</h4>
                                    <p class="text-white">POPPY ENGLISH HOUSE có hệ thống cơ sở vật chất khang trang,
                                        tiện nghi, hiện đại và không gian học tập thay đổi linh hoạt theo từng lứa tuổi
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 p-0 bg-img-cover wow fadeInRight hidden-xs"
                         data-bg-img="images/img/aaaaaa.jpg" data-wow-duration="1s" data-wow-delay="0.3s">
                    </div>
                </div>
            </div>
        </section>

        <!-- Section: courses -->
        <section>
            <div class="container pt-70 pb-40">
                <div class="section-title text-center">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <h2 class="mt-0 line-height-1 text-center text-uppercase mb-10 text-black-333">KHÓA HỌC TẠI
                                POPPY ENGLISH HOUSE </h2>
                            <p>Chúng tôi hân hạnh mang lại cho các bạn những khóa học chất lượng và phù hợp nhất.</p>
                        </div>
                    </div>
                </div>
                <div class="row multi-row-clearfix">
                    <div class="col-md-12">
                        <div class="owl-carousel-3col owl-nav-top" data-dots="true">
                            <div class="item">
                                <div class="project mb-30 border-2px">
                                    <div class="thumb">
                                        <img class="img-fullwidth" alt="" src="images/img/linh1.jpg">
                                        <div class="hover-link">
                                            <a class="btn btn-flat btn-dark btn-theme-colored btn-md pull-left font-20"
                                               href="#"><span>12000000vnd</span> </a>
                                        </div>
                                    </div>
                                    <div class="project-details p-15 pt-10 pb-10">
                                        <h5 class="font-14 font-weight-500 mb-5">Truong thang</h5>
                                        <h4 class="font-weight-700 text-uppercase mt-0"><a
                                                    href="page-courses-accounting-technologies.html">Khóa học IETLS
                                                master</a></h4>

                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="project mb-30 border-2px">
                                    <div class="thumb">
                                        <img class="img-fullwidth" alt="" src="images/img/linh2.jpg">
                                        <div class="hover-link">
                                            <a class="btn btn-flat btn-dark btn-theme-colored btn-md pull-left font-20"
                                               href="#"><span>Free</span> </a>
                                        </div>
                                    </div>
                                    <div class="project-details p-15 pt-10 pb-10">
                                        <h5 class="font-14 font-weight-500 mb-5">Trương Thắng</h5>
                                        <h4 class="font-weight-700 text-uppercase mt-0"><a
                                                    href="page-courses-accounting-technologies.html">Khóa học IELTS
                                                Intermediate</a></h4>

                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="project mb-30 border-2px">
                                    <div class="thumb">
                                        <img class="img-fullwidth" alt="" src="images/img/linh3.jpg">
                                        <div class="hover-link">
                                            <a class="btn btn-flat btn-dark btn-theme-colored btn-md pull-left font-20"
                                               href="#"><span>Free</span> </a>
                                        </div>
                                    </div>
                                    <div class="project-details p-15 pt-10 pb-10">
                                        <h5 class="font-14 font-weight-500 mb-5">Trương Thắng</h5>
                                        <h4 class="font-weight-700 text-uppercase mt-0"><a
                                                    href="page-courses-accounting-technologies.html">Khóa học IELTS
                                                Foundation</a></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="project mb-30 border-2px">
                                    <div class="thumb">
                                        <img class="img-fullwidth" alt="" src="images/img/linh4.png">
                                        <div class="hover-link">
                                            <a class="btn btn-flat btn-dark btn-theme-colored btn-md pull-left font-20"
                                               href="#"><span>Free</span> </a>
                                        </div>
                                    </div>
                                    <div class="project-details p-15 pt-10 pb-10">
                                        <h5 class="font-14 font-weight-500 mb-5">Trương Thắng</h5>
                                        <h4 class="font-weight-700 text-uppercase mt-0"><a
                                                    href="page-courses-accounting-technologies.html">Tiếng Anh Trung Học Phổ
                                                Thông</a></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="project mb-30 border-2px">
                                    <div class="thumb">
                                        <img class="img-fullwidth" alt="" src="images/img/linh5.jpg">
                                        <div class="hover-link">
                                            <a class="btn btn-flat btn-dark btn-theme-colored btn-md pull-left font-20"
                                               href="#"><span>Free</span> </a>
                                        </div>
                                    </div>
                                    <div class="project-details p-15 pt-10 pb-10">
                                        <h5 class="font-14 font-weight-500 mb-5">Trương Thắng</h5>
                                        <h4 class="font-weight-700 text-uppercase mt-0"><a
                                                    href="page-courses-accounting-technologies.html">Tiếng Anh Trung Học Cơ
                                                Sở</a></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="project mb-30 border-2px">
                                    <div class="thumb">
                                        <img class="img-fullwidth" alt="" src="images/img/linh6.jpg">
                                        <div class="hover-link">
                                            <a class="btn btn-flat btn-dark btn-theme-colored btn-md pull-left font-20"
                                               href="#"><span>Free</span> </a>
                                        </div>
                                    </div>
                                    <div class="project-details p-15 pt-10 pb-10">
                                        <h5 class="font-14 font-weight-500 mb-5">Trương Thắng</h5>
                                        <h4 class="font-weight-700 text-uppercase mt-0"><a
                                                    href="page-courses-accounting-technologies.html">Tiếng Anh Tiểu Học</a>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Divider: Funfact -->
        <section class="divider parallax layer-overlay" data-bg-img="images/bg/bg6.jpg" data-parallax-ratio="0.7">
            <div class="container pt-70 pb-60">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
                        <div class="funfact text-center">
                            <i class="fa fa-users mt-5 text-white"></i>
                            <h2 data-animation-duration="2000" data-value="50"
                                class="animate-number text-white mt-0 font-38 font-weight-500">0</h2>
                            <h4 class="text-white text-uppercase">Professors</h4>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
                        <div class="funfact text-center">
                            <i class="fa fa-book mt-5 text-white"></i>
                            <h2 data-animation-duration="2000" data-value="75"
                                class="animate-number text-white mt-0 font-38 font-weight-500">0</h2>
                            <h4 class="text-white text-uppercase">Class Types</h4>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
                        <div class="funfact text-center">
                            <i class="fa fa-home mt-5 text-white"></i>
                            <h2 data-animation-duration="2000" data-value="204"
                                class="animate-number text-white mt-0 font-38 font-weight-500">0</h2>
                            <h4 class="text-white text-uppercase">Class Rooms</h4>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
                        <div class="funfact text-center">
                            <i class="fa  fa-graduation-cap mt-5 text-white"></i>
                            <h2 data-animation-duration="2000" data-value="2324"
                                class="animate-number text-white mt-0 font-38 font-weight-500">0</h2>
                            <h4 class="text-white text-uppercase">Students</h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section: Teachers -->
        <section id="teachers">
            <div class="container pt-70 pb-70">
                <div class="section-title text-center">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <h2 class="mt-0 line-height-1 text-center text-uppercase mb-10 text-black-333">ĐỘI NGŨ GIÁO
                                VIÊN</h2>
                        </div>
                    </div>
                </div>
                <div class="row mtli-row-clearfix">
                    <div class="col-md-12">
                        <div class="owl-carousel-4col">
                            <div class="item">
                                <div class="team-members border-bottom-theme-color-2px text-center maxwidth400">
                                    <div class="team-thumb">
                                        <img class="img-fullwidth" alt="" src="images/img/gv1.jpg">
                                        <div class="team-overlay"></div>
                                    </div>
                                    <div class="team-details bg-silver-light pt-10 pb-10">
                                        <h4 class="text-uppercase font-weight-600 m-5"><a
                                                    href="page-teachers-details.html">Lê Hoàng Phúc</a></h4>
                                        <ul class="styled-icons icon-theme-colored icon-dark icon-circled icon-sm">
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                            <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="team-members border-bottom-theme-color-2px text-center maxwidth400">
                                    <div class="team-thumb">
                                        <img class="img-fullwidth" alt="" src="images/img/gv2.jpg">
                                        <div class="team-overlay"></div>
                                    </div>
                                    <div class="team-details bg-silver-light pt-10 pb-10">
                                        <h4 class="text-uppercase font-weight-600 m-5"><a
                                                    href="page-teachers-details.html">Lê Hương Quế</a></h4>
                                        <ul class="styled-icons icon-theme-colored icon-dark icon-circled icon-sm">
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                            <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="team-members border-bottom-theme-color-2px text-center maxwidth400">
                                    <div class="team-thumb">
                                        <img class="img-fullwidth" alt="" src="images/img/gv3.jpg">
                                        <div class="team-overlay"></div>
                                    </div>
                                    <div class="team-details bg-silver-light pt-10 pb-10">
                                        <h4 class="text-uppercase font-weight-600 m-5"><a
                                                    href="page-teachers-details.html">Nguyễn Thị Hương</a></h4>
                                        <ul class="styled-icons icon-theme-colored icon-dark icon-circled icon-sm">
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                            <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="team-members border-bottom-theme-color-2px text-center maxwidth400">
                                    <div class="team-thumb">
                                        <img class="img-fullwidth" alt="" src="images/img/gv4.jpg"
                                             style="margin-bottom: 137px">
                                        <div class="team-overlay"></div>
                                    </div>
                                    <div class="team-details bg-silver-light pt-10 pb-10">
                                        <h4 class="text-uppercase font-weight-600 m-5"><a
                                                    href="page-teachers-details.html">Sean David Alberts</a></h4>
                                        <ul class="styled-icons icon-theme-colored icon-dark icon-circled icon-sm">
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                            <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section: events -->
        <section id="events" class="divider parallax layer-overlay overlay-dark-8" data-stellar-background-ratio="0.5"
                 data-bg-img="images/bg/bg1.jpg">
            <div class="container pt-70 pb-40">
                <div class="section-title mb-30">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 text-center">
                            <h2 class="mt-0 line-height-1 text-center mb-10 text-white text-uppercase">LỘ TRÌNH IELTS
                                GỌN NHẸ TỪ 0 ĐẾN 6.5</h2>
                        </div>
                    </div>
                </div>
                <div class="section-content">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-6 mb-30 wow fadeInRight" data-wow-duration="1s"
                             data-wow-delay="0.5s">
                            <div class="pricing table-horizontal maxwidth400">
                                <div class="row">
                                    <h4 class="mt-0 mb-5"><a href="#" class="text-white" style="margin-left: 30px">GIAI
                                            ĐOẠN 1</a></h4>
                                    <ul class="text-white" style="margin: 21px">
                                        <li>Hệ thống hóa, xây dựng nền tảng ngữ âm,ngữ pháp toàn diện</li>
                                        <li>Hế thống từ vựng thông dụng</li>
                                        <li>Phát âm chuẩn 44 âm cơ bản trong tiếng Anh</li>
                                        <li>Bạn sẽ bắt đầu làm quen với 3 giọng tiếng Anh trong IELTS: Anh-Anh, Anh-Mỹ,
                                            và Anh-Úc
                                        </li>
                                        <li>Tiếp cận với những dạng câu hỏi thường gặp trong phần thi Listening và luyện
                                            tập với một số chủ đề quen thuộc
                                        </li>
                                        <li>Mục tiêu 3.0+ IELTS</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 mb-30 wow fadeInRight" data-wow-duration="1s"
                             data-wow-delay="0.5s">
                            <div class="pricing table-horizontal maxwidth400">
                                <div class="row">
                                    <h4 class="mt-0 mb-5"><a href="#" class="text-white" style="margin-left: 30px">GIAI
                                            ĐOẠN 2</a></h4>
                                    <ul class="text-white" style="margin: 21px">
                                        <li>Cách đưa ra câu trả lời dài cho 2 dạng câu hỏi &nbsp;Speaking quan trọng là
                                            Basic Description và Wh-H
                                        </li>
                                        <li>Cấu trúc bài Task 1 hoàn chỉnh và các cấu trúc câu / từ vựng được dùng trong
                                            Task 1
                                        </li>
                                        <li>Quy trình làm các dạng câu hỏi trong Reading</li>
                                        <li>Cách đọc/tìm kiếm thông tin trong đoạn văn</li>
                                        <li>Luyện nói có ngữ điệu lên xuống giống người bản ngữ</li>
                                        <li>Mục tiêu 4.5-5.0 IELTS</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 mb-30 wow fadeInRight" data-wow-duration="1s"
                             data-wow-delay="0.5s">
                            <div class="pricing table-horizontal maxwidth400">
                                <div class="row">
                                    <h4 class="mt-0 mb-5"><a href="#" class="text-white" style="margin-left: 30px">GIAI
                                            ĐOẠN 3</a></h4>
                                    <ul class="text-white" style="margin: 21px">
                                        <li>Hoàn thiện các kỹ năng nghe, nói, đọc, viết theo định hướng IELTS</li>
                                        <li>Trả lời nhuần nhuyễn 4 section của bài thi Listening</li>
                                        <li>Thành thạo cách sử dụng thời gian trống, khả năng suy luận và bám sát bài
                                            nghe, các dạng câu phủ định/bẫy phổ biến trong phần thi Listening
                                        </li>
                                        <li>Sửa lỗi phát âm, luyện nói có ngữ điệu lên xuống như người bản ngữ</li>
                                        <li>Mục tiêu 5.5-6.0+ IELTS</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 mb-30 wow fadeInRight" data-wow-duration="1s"
                             data-wow-delay="0.5s">
                            <div class="pricing table-horizontal maxwidth400">
                                <div class="row">
                                    <h4 class="mt-0 mb-5"><a href="#" class="text-white" style="margin-left: 30px">GIAI
                                            ĐOẠN 4</a></h4>
                                    <ul class="text-white" style="margin: 21px">
                                        <li>Tăng cường luyện đề chuyên sâu, các dạng đề thi khó với 2 kỹ năng Reading và
                                            Listening
                                        </li>
                                        <li>Đào tạo nâng cao 2 kỹ năng Speaking và Writing</li>
                                        <li>Thành thạo 11 dạng bài luận &nbsp;đầy đủ trong Writing, các cấu trúc. kiến
                                            thức khó, các điểm đặc trưng được giám khảo đánh giá cao
                                        </li>
                                        <li>Thành thạo các chủ đề, dạng bài Speaking phổ biến, cách trả lời đạt band
                                            điểm nói 6.0-6.5
                                        </li>
                                        <li>Mục tiêu 6.5-7.0+ IELTS</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Gallery Grid 3 -->
        <section id="gallery">
            <div class="container pt-70 pb-70">
                <div class="section-title text-center">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <h2 class="mt-0 line-height-1 text-center mb-10 text-black-333 text-uppercase">Our <span
                                        class="text-theme-color-2"> Gllery</span></h2>
                            <p class="mb-0 pb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem autem<br>
                                voluptatem obcaecati!</p>
                        </div>
                    </div>
                </div>
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Portfolio Filter -->
                            <div class="portfolio-filter font-alt align-center text-center mb-6 0">
                                <a href="#" class="active" data-filter="*">All</a>
                                <a href="#photos" class="" data-filter=".photos">Photos</a>
                                <a href="#campus" class="" data-filter=".campus">Campus</a>
                                <a href="#students" class="mt-10" data-filter=".students">Students</a>
                            </div>
                            <!-- End Portfolio Filter -->

                            <!-- Portfolio Gallery Grid -->
                            <div class="gallery-isotope grid-4 gutter-small clearfix" data-lightbox="gallery">
                                <!-- Portfolio Item Start -->
                                <div class="gallery-item campus">
                                    <div class="thumb">
                                        <img class="img-fullwidth" src="images/gallery/1.jpg" alt="project">
                                        <div class="overlay-shade"></div>
                                        <div class="text-holder">
                                            <div class="title text-center">Sample Title</div>
                                        </div>
                                        <div class="icons-holder">
                                            <div class="icons-holder-inner">
                                                <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                                    <a href="images/gallery/1.jpg" data-lightbox-gallery="gallery"
                                                       title="Your Title Here"><i class="fa fa-picture-o"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Portfolio Item End -->

                                <!-- Portfolio Item Start -->
                                <div class="gallery-item photos students">
                                    <div class="thumb">
                                        <img class="img-fullwidth" src="images/gallery/2.jpg" alt="project">
                                        <div class="overlay-shade"></div>
                                        <div class="text-holder">
                                            <div class="title text-center">Sample Title</div>
                                        </div>
                                        <div class="icons-holder">
                                            <div class="icons-holder-inner">
                                                <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                                    <a href="images/gallery/2.jpg" data-lightbox-gallery="gallery"
                                                       title="Your Title Here"><i class="fa fa-picture-o"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Portfolio Item End -->

                                <!-- Portfolio Item Start -->
                                <div class="gallery-item campus">
                                    <div class="thumb">
                                        <img class="img-fullwidth" src="images/gallery/3.jpg" alt="project">
                                        <div class="overlay-shade"></div>
                                        <div class="text-holder">
                                            <div class="title text-center">Sample Title</div>
                                        </div>
                                        <div class="icons-holder">
                                            <div class="icons-holder-inner">
                                                <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                                    <a href="images/gallery/3.jpg" data-lightbox-gallery="gallery"
                                                       title="Your Title Here"><i class="fa fa-picture-o"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Portfolio Item End -->

                                <!-- Portfolio Item Start -->
                                <div class="gallery-item photos">
                                    <div class="thumb">
                                        <img class="img-fullwidth" src="images/gallery/4.jpg" alt="project">
                                        <div class="overlay-shade"></div>
                                        <div class="text-holder">
                                            <div class="title text-center">Sample Title</div>
                                        </div>
                                        <div class="icons-holder">
                                            <div class="icons-holder-inner">
                                                <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                                    <a href="images/gallery/4.jpg" data-lightbox-gallery="gallery"
                                                       title="Your Title Here"><i class="fa fa-picture-o"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Portfolio Item End -->

                                <!-- Portfolio Item Start -->
                                <div class="gallery-item campus students">
                                    <div class="thumb">
                                        <img class="img-fullwidth" src="images/gallery/5.jpg" alt="project">
                                        <div class="overlay-shade"></div>
                                        <div class="text-holder">
                                            <div class="title text-center">Sample Title</div>
                                        </div>
                                        <div class="icons-holder">
                                            <div class="icons-holder-inner">
                                                <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                                    <a href="images/gallery/5.jpg" data-lightbox-gallery="gallery"
                                                       title="Your Title Here"><i class="fa fa-picture-o"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Portfolio Item End -->

                                <!-- Portfolio Item Start -->
                                <div class="gallery-item students">
                                    <div class="thumb">
                                        <img class="img-fullwidth" src="images/gallery/6.jpg" alt="project">
                                        <div class="overlay-shade"></div>
                                        <div class="text-holder">
                                            <div class="title text-center">Sample Title</div>
                                        </div>
                                        <div class="icons-holder">
                                            <div class="icons-holder-inner">
                                                <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                                    <a href="images/gallery/6.jpg" data-lightbox-gallery="gallery"
                                                       title="Your Title Here"><i class="fa fa-picture-o"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Portfolio Item End -->

                                <!-- Portfolio Item Start -->
                                <div class="gallery-item photos">
                                    <div class="thumb">
                                        <img class="img-fullwidth" src="images/gallery/7.jpg" alt="project">
                                        <div class="overlay-shade"></div>
                                        <div class="text-holder">
                                            <div class="title text-center">Sample Title</div>
                                        </div>
                                        <div class="icons-holder">
                                            <div class="icons-holder-inner">
                                                <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                                    <a href="images/gallery/7.jpg" data-lightbox-gallery="gallery"
                                                       title="Your Title Here"><i class="fa fa-picture-o"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Portfolio Item End -->

                                <!-- Portfolio Item Start -->
                                <div class="gallery-item students">
                                    <div class="thumb">
                                        <img class="img-fullwidth" src="images/gallery/8.jpg" alt="project">
                                        <div class="overlay-shade"></div>
                                        <div class="text-holder">
                                            <div class="title text-center">Sample Title</div>
                                        </div>
                                        <div class="icons-holder">
                                            <div class="icons-holder-inner">
                                                <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                                    <a href="images/gallery/8.jpg" data-lightbox-gallery="gallery"
                                                       title="Your Title Here"><i class="fa fa-picture-o"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Portfolio Item End -->

                                <!-- Portfolio Item Start -->
                                <div class="gallery-item photos">
                                    <div class="thumb">
                                        <img class="img-fullwidth" src="images/gallery/4.jpg" alt="project">
                                        <div class="overlay-shade"></div>
                                        <div class="text-holder">
                                            <div class="title text-center">Sample Title</div>
                                        </div>
                                        <div class="icons-holder">
                                            <div class="icons-holder-inner">
                                                <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                                    <a href="images/gallery/4.jpg" data-lightbox-gallery="gallery"
                                                       title="Your Title Here"><i class="fa fa-picture-o"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Portfolio Item End -->

                                <!-- Portfolio Item Start -->
                                <div class="gallery-item campus students">
                                    <div class="thumb">
                                        <img class="img-fullwidth" src="images/gallery/5.jpg" alt="project">
                                        <div class="overlay-shade"></div>
                                        <div class="text-holder">
                                            <div class="title text-center">Sample Title</div>
                                        </div>
                                        <div class="icons-holder">
                                            <div class="icons-holder-inner">
                                                <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                                    <a href="images/gallery/5.jpg" data-lightbox-gallery="gallery"
                                                       title="Your Title Here"><i class="fa fa-picture-o"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Portfolio Item End -->

                                <!-- Portfolio Item Start -->
                                <div class="gallery-item students">
                                    <div class="thumb">
                                        <img class="img-fullwidth" src="images/gallery/6.jpg" alt="project">
                                        <div class="overlay-shade"></div>
                                        <div class="text-holder">
                                            <div class="title text-center">Sample Title</div>
                                        </div>
                                        <div class="icons-holder">
                                            <div class="icons-holder-inner">
                                                <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                                    <a href="images/gallery/6.jpg" data-lightbox-gallery="gallery"
                                                       title="Your Title Here"><i class="fa fa-picture-o"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Portfolio Item End -->

                                <!-- Portfolio Item Start -->
                                <div class="gallery-item photos">
                                    <div class="thumb">
                                        <img class="img-fullwidth" src="images/gallery/7.jpg" alt="project">
                                        <div class="overlay-shade"></div>
                                        <div class="text-holder">
                                            <div class="title text-center">Sample Title</div>
                                        </div>
                                        <div class="icons-holder">
                                            <div class="icons-holder-inner">
                                                <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                                    <a href="images/gallery/7.jpg" data-lightbox-gallery="gallery"
                                                       title="Your Title Here"><i class="fa fa-picture-o"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Portfolio Item End -->
                            </div>
                            <!-- End Portfolio Gallery Grid -->

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Section: Blog -->
        <section class="" data-stellar-background-ratio="0,5" data-bg-img="images/bg/bg1.jpg"
                 style="background-image: url(" images
        /bg/bg1.jpg"); background-position: 50% -226px;">
        <div class="kc-row-container  kc-container">
            <div class="kc-wrap-columns">
                <div class="kc-elm kc-css-316597 kc_col-sm-12 kc_column kc_col-sm-12">
                    <div class="kc-col-container">
                        <div class="widget-heading-title center_white">
                            <h3 class="text-white text-uppercase" data-line-Color="red" style="margin-left: 449px">
                                Tại sao lại chọn chúng tôi </h3>
                            <div class="desc"></div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
                                <div class="kc_wrapper kc-col-inner-container">
                                    <div class="kc-elm kc-css-365685 kc-feature-boxes kc-fb-layout-1">

                                        <div class="content-icon">
                                            <i class="mn-icon-1220">
                                            </i>
                                        </div>
                                        <div><h4 class="text-white text-uppercase">Chất lượng giảng dạy</h4></div>
                                        <div class="text-white text-uppercase">Poppy English House áp dụng tiêu chuẩn
                                            chất lượng giảng dạy chuẩn quốc tế, mỗi chương trình lại được thiết kế phù
                                            hợp với độ tuổi và trình độ của học viên.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
                                <div class="kc_wrapper kc-col-inner-container">
                                    <div class="kc-elm kc-css-436382 kc-feature-boxes kc-fb-layout-1">

                                        <div class="content-icon">
                                            <i class="mn-icon-621"></i>
                                        </div>
                                        <div><h4 class="text-white text-uppercase">Giáo trình cải tiến</h4></div>
                                        <div class="text-white text-uppercase">Poppy English House luôn thực hiện những
                                            đầu tư quy mô lớn vào các nghiên cứu, phát triển và cải tiến. Chúng tôi
                                            thường xuyên thực hiện các khảo sát với học viên và khách hàng nhằm đảm bảo
                                            các khóa học của chúng tôi không chỉ đáp ứng đúng nhu cầu mà còn vượt xa hơn
                                            cả mong đợi của họ.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
                                <div class="kc_wrapper kc-col-inner-container">
                                    <div class="kc-elm kc-css-376532 kc-feature-boxes kc-fb-layout-1">

                                        <div class="content-icon">
                                            <i class="mn-icon-393"></i>
                                        </div>
                                        <div><h4 class="text-white text-uppercase">Đội ngũ giáo viên</h4></div>
                                        <div class="text-white text-uppercase">Đội ngũ nhân viên và giáo viên của Poppy
                                            là những người có bằng cấp cao trong việc quản lý, giảng dạy, đào tạo Anh
                                            ngữ. Ngoài ra, với nguồn năng lượng của tuổi trẻ, họ sẽ mang đến cho học
                                            viên những giờ phút học tập và sinh hoạt khó quên.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
                                <div class="kc_wrapper kc-col-inner-container">
                                    <div class="kc-elm kc-css-733521 kc-feature-boxes kc-fb-layout-1">

                                        <div class="content-icon">
                                            <i class="mn-icon-1075"></i>
                                        </div>
                                        <div><h4 class="text-white text-uppercase">Cơ sở vật chất</h4></div>
                                        <div class="text-white text-uppercase">Cơ sở của Poppy được xây dựng với tiêu
                                            chuẩn cao. Các lớp học, bàn ghế, trang trí và thiết bị đều được thiết kế phù
                                            hợp với nhu cầu của học viên nhằm mang đến một môi trường học tập thoải mái
                                            và an toàn nhất.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </section>

        <!-- Section: Client Say -->
        <section class="divider parallax layer-overlay overlay-dark-4" data-background-ratio="0.5"
                 data-bg-img="images/bg/bg2.jpg">
            <div class="container pt-60 pb-60">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h2 class="text-uppercase mt-0 pb-0  text-center text-white">CẢM NHẬN CỦA HỌC VIÊN VỀ POPPY
                            ENGLISH HOUSE?</h2>
                        <div class="owl-carousel-1col" data-dots="true">
                            <div class="item">
                                <div class="testimonial-wrapper text-center">
                                    <div class="thumb"><img class="" alt="" src="images/img/st1.png"></div>
                                    <div class="content pt-10">
                                        <p class="lead text-white">3 tháng trôi qua kể từ lần đầu tiên khi tới đây, tôi
                                            đã thực sự học được rất nhiều thứ vượt qua cả những kiến thức trong sách vở,
                                            giúp tôi có những phương hướng hoàn thiện bản thân trong tương lai. Mỗi
                                            người ở trung tâm đều mang lại cho tôi những câu chuyện và kỷ niệm riêng,
                                            đặc biệt với đội ngũ giáo viên và ban lãnh đạo, tôi không hề cảm thấy có sự
                                            xa cách mà ngược lại tôi luôn cảm nhận được sự quan tâm vô hạn. Tất cả mọi
                                            người đều mang lại cho tôi cảm giác gần gũi như một gia đình thứ hai
                                            vậy.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonial-wrapper text-center">
                                    <div class="thumb"><img class="" alt="" src="images/img/st2.jpg"></div>
                                    <div class="content pt-10">
                                        <p class="lead text-white">Từ khi biết đến trung tâm Poppy English House được
                                            cùng các bạn trải nghiệm những giờ học tiếng anh đầu tiên thì em mới biết
                                            tiếng anh là 1 môn học vô cùng thú vị. Mỗi tiết học đều rất vui vẻ , dễ hiểu
                                            dưới sự hướng dẫn nhiệt tình của thầy cô. Học tiếng anh không phải khó, mà
                                            là mình muốn học tiếng anh hay không. Em tin rằng với sự quyết tâm, chăm chỉ
                                            thì em sẽ vượt qua thời gian khó khăn này để không bao giờ phải chia sợ
                                            tiếng anh nữa. Cảm ơn thầy cô, trung tâm Poppy House English rất nhiều những
                                            người đã truyền lửa, tạo động lực cho chúng em.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonial-wrapper text-center">
                                    <div class="thumb"><img class="" alt="" src="images/img/st3.jpg"></div>
                                    <div class="content pt-10">
                                        <p class="lead text-white">Khi ra trường gia đình em muốn em đi du học và đưa em
                                            đến trung tâm Poppy English House. Khi mới bắt đầu em nghĩ có lẽ mình sẽ
                                            chẳng học được nhưng với sự giúp đỡ nhiệt tình của các thầy cô trong trung
                                            tâm, môn tiếng anh đối với em đã không còn là một ác mộng như trước nữa. Tuy
                                            thời gian vào trung tâm cũng chưa lâu nhưng em thực sự cảm nhận được mọi
                                            người đối với nhau như 1 gia đình. Mọi người luôn hòa đồng. Trong những bài
                                            giảng của các thầy cô luôn sôi nổi, không nhàm chán. Lựa chọn trung tâm là 1
                                            điều đúng đắn đối với em. Em mong thầy cô sẽ luôn mang đến những bài giảng
                                            hay cho chúng em.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Divider: Clients -->
        <section class="clients bg-theme-colored">
            <div class="container pt-10 pb-10 pb-sm-0 pt-sm-0">
                <div class="row">
                    <div class="col-md-12">
                        <!-- Section: Clients -->
                        <div class="owl-carousel-6col transparent text-center owl-nav-top">
                            <div class="item"><a href="#"><img src="images/img/logo1-1.png" alt=""></a></div>
                            <div class="item"><a href="#"><img src="images/img/footer1.jpg" alt=""></a></div>
                            <div class="item"><a href="#"><img src="images/img/footer2.jpg" alt=""></a></div>
                            <div class="item"><a href="#"><img src="images/img/footer3.jpg" alt=""></a></div>
                            <div class="item"><a href="#"><img src="images/img/footer4.jpg" alt=""></a></div>
                            <div class="item"><a href="#"><img src="images/img/logo1-1.png" alt=""></a></div>
                            <div class="item">
                            </div>
                        </div>
                    </div>
                </div>
        </section>

    </div>
    <!-- end main-content -->

    <!-- Footer -->
    <footer id="footer" class="footer bg-black-222" data-bg-img="images/footer-bg.png">
        <section class="kc-elm kc-css-879009 kc_row">
            <div class="kc-row-container  kc-container">
                <div class="kc-wrap-columns">
                    <div class="kc-elm kc-css-457024 kc_col-sm-6 kc_column kc_col-sm-6">
                        <div class="kc-col-container" style="color: #fdf8f8">
                            <div class="kc-elm kc-css-711002 kc_text_block">
                                <p><strong>Thông tin liên hệ</strong></p>
                            </div>
                            <div class="kc-elm kc-css-6220 kc_text_block">
                                <div class="address">
                                    <div class="media">
                                        <div class="media-left">
                                            <i class="mn-icon-75">
                                                <i class="hidden">icon</i>
                                            </i>
                                        </div>
                                        <div class="media-body">Trụ sở Hà Nội: Tầng 6 – Tòa nhà Láng Trung – 60/850
                                            đường Láng – Đống Đa – Hà Nội
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div class="media-left">
                                            <i class="mn-icon-75">
                                                <i class="hidden">icon</i>
                                            </i>
                                        </div>
                                        <div class="media-body">Chi nhánh Bắc Giang: 197 Nguyễn Thị Minh Khai - P.Xương
                                            Giang - TP. Bắc Giang
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div class="media-left"><i class="mn-icon-220"><i class="hidden">icon</i></i>
                                        </div>
                                        <div class="media-body">info@poppy.edu.vn</div>
                                    </div>
                                    <div class="media">
                                        <div class="media-left"><i class="mn-icon-250"><i class="hidden">icon</i></i>
                                        </div>
                                        <div class="media-body">02423481888</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="kc-elm kc-css-551047 kc_col-sm-6 kc_column kc_col-sm-6">
                        <div class="kc-col-container">
                            <div class="widget widget-google-map">
                                <div id="widget-google-map6YUJ1" class="google-map-wrapper"
                                     style="height: 200px; position: relative; overflow: hidden;"
                                     data-latitude="21.018447" data-longitude="105.803365" data-zoom="16"
                                     data-style="[{&quot;featureType&quot;:&quot;landscape.man_made&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#f7f1df&quot;}]},{&quot;featureType&quot;:&quot;landscape.natural&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#d0e3b4&quot;}]},{&quot;featureType&quot;:&quot;landscape.natural.terrain&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;poi&quot;,&quot;elementType&quot;:&quot;labels&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;poi.business&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;poi.medical&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#fbd3da&quot;}]},{&quot;featureType&quot;:&quot;poi.park&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#bde6ab&quot;}]},{&quot;featureType&quot;:&quot;road&quot;,&quot;elementType&quot;:&quot;geometry.stroke&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;road&quot;,&quot;elementType&quot;:&quot;labels&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;road.highway&quot;,&quot;elementType&quot;:&quot;geometry.fill&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#ffe15f&quot;}]},{&quot;featureType&quot;:&quot;road.highway&quot;,&quot;elementType&quot;:&quot;geometry.stroke&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#efd151&quot;}]},{&quot;featureType&quot;:&quot;road.arterial&quot;,&quot;elementType&quot;:&quot;geometry.fill&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#ffffff&quot;}]},{&quot;featureType&quot;:&quot;road.local&quot;,&quot;elementType&quot;:&quot;geometry.fill&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;black&quot;}]},{&quot;featureType&quot;:&quot;transit.station.airport&quot;,&quot;elementType&quot;:&quot;geometry.fill&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#cfb2db&quot;}]},{&quot;featureType&quot;:&quot;water&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#a2daf2&quot;}]}]">
                                    <div style="height: 100%; width: 100%; position: absolute; top: 0px; left: 0px; background-color: rgb(229, 227, 223);">
                                        <div class="gm-style"
                                             style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px;">
                                            <div tabindex="0"
                                                 style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; cursor: url(&quot;http://maps.gstatic.com/mapfiles/openhand_8_8.cur&quot;), default; touch-action: pan-x pan-y;">
                                                <div style="z-index: 1; position: absolute; left: 50%; top: 50%; transform: translate(0px, 0px);">
                                                    <div style="position: absolute; left: 0px; top: 0px; z-index: 100; width: 100%;">
                                                        <div style="position: absolute; left: 0px; top: 0px; z-index: 0;">
                                                            <div style="position: absolute; z-index: 1; transform: matrix(1, 0, 0, 1, -234, -226);">
                                                                <div style="position: absolute; left: 0px; top: 256px; width: 256px; height: 256px;">
                                                                    <div style="width: 256px; height: 256px;"></div>
                                                                </div>
                                                                <div style="position: absolute; left: -256px; top: 256px; width: 256px; height: 256px;">
                                                                    <div style="width: 256px; height: 256px;"></div>
                                                                </div>
                                                                <div style="position: absolute; left: -256px; top: 0px; width: 256px; height: 256px;">
                                                                    <div style="width: 256px; height: 256px;"></div>
                                                                </div>
                                                                <div style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px;">
                                                                    <div style="width: 256px; height: 256px;"></div>
                                                                </div>
                                                                <div style="position: absolute; left: 256px; top: 0px; width: 256px; height: 256px;">
                                                                    <div style="width: 256px; height: 256px;"></div>
                                                                </div>
                                                                <div style="position: absolute; left: 256px; top: 256px; width: 256px; height: 256px;">
                                                                    <div style="width: 256px; height: 256px;"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div style="position: absolute; left: 0px; top: 0px; z-index: 101; width: 100%;"></div>
                                                    <div style="position: absolute; left: 0px; top: 0px; z-index: 102; width: 100%;"></div>
                                                    <div style="position: absolute; left: 0px; top: 0px; z-index: 103; width: 100%;">
                                                        <div style="position: absolute; left: 0px; top: 0px; z-index: -1;">
                                                            <div style="position: absolute; z-index: 1; transform: matrix(1, 0, 0, 1, -234, -226);">
                                                                <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 0px; top: 256px;"></div>
                                                                <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -256px; top: 256px;"></div>
                                                                <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -256px; top: 0px;"></div>
                                                                <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 0px; top: 0px;"></div>
                                                                <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 256px; top: 0px;"></div>
                                                                <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 256px; top: 256px;"></div>
                                                            </div>
                                                        </div>
                                                        <div style="width: 27px; height: 43px; overflow: hidden; position: absolute; left: -14px; top: -43px; z-index: 0; animation-duration: 500ms; animation-iteration-count: 1; animation-name: _gm822;">
                                                            <img alt=""
                                                                 src="http://maps.gstatic.com/mapfiles/api-3/images/spotlight-poi2.png"
                                                                 draggable="false"
                                                                 style="position: absolute; left: 0px; top: 0px; width: 27px; height: 43px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                                        </div>
                                                    </div>
                                                    <div style="position: absolute; left: 0px; top: 0px; z-index: 0;">
                                                        <div style="position: absolute; z-index: 1; transform: matrix(1, 0, 0, 1, -234, -226);">
                                                            <div style="position: absolute; left: 0px; top: 256px; width: 256px; height: 256px;">
                                                                <img draggable="false" alt=""
                                                                     src="http://maps.google.com/maps/vt?pb=!1m5!1m4!1i16!2i52028!3i28853!4i256!2m3!1e0!2sm!3i418118796!3m14!2svi-VN!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy50OjgxfHMuZTpnfHAuYzojZmZmN2YxZGYscy50OjgyfHMuZTpnfHAuYzojZmZkMGUzYjQscy50OjEzMTR8cy5lOmd8cC52Om9mZixzLnQ6MnxzLmU6bHxwLnY6b2ZmLHMudDozM3xwLnY6b2ZmLHMudDozNnxzLmU6Z3xwLmM6I2ZmZmJkM2RhLHMudDo0MHxzLmU6Z3xwLmM6I2ZmYmRlNmFiLHMudDozfHMuZTpnLnN8cC52Om9mZixzLnQ6M3xzLmU6bHxwLnY6b2ZmLHMudDo0OXxzLmU6Zy5mfHAuYzojZmZmZmUxNWYscy50OjQ5fHMuZTpnLnN8cC5jOiNmZmVmZDE1MSxzLnQ6NTB8cy5lOmcuZnxwLmM6I2ZmZmZmZmZmLHMudDo1MXxzLmU6Zy5mfHAuYzpibGFjayxzLnQ6MTA1OXxzLmU6Zy5mfHAuYzojZmZjZmIyZGIscy50OjZ8cy5lOmd8cC5jOiNmZmEyZGFmMg!4e0!23i1301875&amp;token=108048"
                                                                     style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                                            </div>
                                                            <div style="position: absolute; left: -256px; top: 256px; width: 256px; height: 256px;">
                                                                <img draggable="false" alt=""
                                                                     src="http://maps.google.com/maps/vt?pb=!1m5!1m4!1i16!2i52027!3i28853!4i256!2m3!1e0!2sm!3i418118796!3m14!2svi-VN!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy50OjgxfHMuZTpnfHAuYzojZmZmN2YxZGYscy50OjgyfHMuZTpnfHAuYzojZmZkMGUzYjQscy50OjEzMTR8cy5lOmd8cC52Om9mZixzLnQ6MnxzLmU6bHxwLnY6b2ZmLHMudDozM3xwLnY6b2ZmLHMudDozNnxzLmU6Z3xwLmM6I2ZmZmJkM2RhLHMudDo0MHxzLmU6Z3xwLmM6I2ZmYmRlNmFiLHMudDozfHMuZTpnLnN8cC52Om9mZixzLnQ6M3xzLmU6bHxwLnY6b2ZmLHMudDo0OXxzLmU6Zy5mfHAuYzojZmZmZmUxNWYscy50OjQ5fHMuZTpnLnN8cC5jOiNmZmVmZDE1MSxzLnQ6NTB8cy5lOmcuZnxwLmM6I2ZmZmZmZmZmLHMudDo1MXxzLmU6Zy5mfHAuYzpibGFjayxzLnQ6MTA1OXxzLmU6Zy5mfHAuYzojZmZjZmIyZGIscy50OjZ8cy5lOmd8cC5jOiNmZmEyZGFmMg!4e0!23i1301875&amp;token=41849"
                                                                     style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                                            </div>
                                                            <div style="position: absolute; left: -256px; top: 0px; width: 256px; height: 256px;">
                                                                <img draggable="false" alt=""
                                                                     src="http://maps.google.com/maps/vt?pb=!1m5!1m4!1i16!2i52027!3i28852!4i256!2m3!1e0!2sm!3i418118796!3m14!2svi-VN!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy50OjgxfHMuZTpnfHAuYzojZmZmN2YxZGYscy50OjgyfHMuZTpnfHAuYzojZmZkMGUzYjQscy50OjEzMTR8cy5lOmd8cC52Om9mZixzLnQ6MnxzLmU6bHxwLnY6b2ZmLHMudDozM3xwLnY6b2ZmLHMudDozNnxzLmU6Z3xwLmM6I2ZmZmJkM2RhLHMudDo0MHxzLmU6Z3xwLmM6I2ZmYmRlNmFiLHMudDozfHMuZTpnLnN8cC52Om9mZixzLnQ6M3xzLmU6bHxwLnY6b2ZmLHMudDo0OXxzLmU6Zy5mfHAuYzojZmZmZmUxNWYscy50OjQ5fHMuZTpnLnN8cC5jOiNmZmVmZDE1MSxzLnQ6NTB8cy5lOmcuZnxwLmM6I2ZmZmZmZmZmLHMudDo1MXxzLmU6Zy5mfHAuYzpibGFjayxzLnQ6MTA1OXxzLmU6Zy5mfHAuYzojZmZjZmIyZGIscy50OjZ8cy5lOmd8cC5jOiNmZmEyZGFmMg!4e0!23i1301875&amp;token=16318"
                                                                     style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                                            </div>
                                                            <div style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px;">
                                                                <img draggable="false" alt=""
                                                                     src="http://maps.google.com/maps/vt?pb=!1m5!1m4!1i16!2i52028!3i28852!4i256!2m3!1e0!2sm!3i418118796!3m14!2svi-VN!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy50OjgxfHMuZTpnfHAuYzojZmZmN2YxZGYscy50OjgyfHMuZTpnfHAuYzojZmZkMGUzYjQscy50OjEzMTR8cy5lOmd8cC52Om9mZixzLnQ6MnxzLmU6bHxwLnY6b2ZmLHMudDozM3xwLnY6b2ZmLHMudDozNnxzLmU6Z3xwLmM6I2ZmZmJkM2RhLHMudDo0MHxzLmU6Z3xwLmM6I2ZmYmRlNmFiLHMudDozfHMuZTpnLnN8cC52Om9mZixzLnQ6M3xzLmU6bHxwLnY6b2ZmLHMudDo0OXxzLmU6Zy5mfHAuYzojZmZmZmUxNWYscy50OjQ5fHMuZTpnLnN8cC5jOiNmZmVmZDE1MSxzLnQ6NTB8cy5lOmcuZnxwLmM6I2ZmZmZmZmZmLHMudDo1MXxzLmU6Zy5mfHAuYzpibGFjayxzLnQ6MTA1OXxzLmU6Zy5mfHAuYzojZmZjZmIyZGIscy50OjZ8cy5lOmd8cC5jOiNmZmEyZGFmMg!4e0!23i1301875&amp;token=82517"
                                                                     style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                                            </div>
                                                            <div style="position: absolute; left: 256px; top: 0px; width: 256px; height: 256px;">
                                                                <img draggable="false" alt=""
                                                                     src="http://maps.google.com/maps/vt?pb=!1m5!1m4!1i16!2i52029!3i28852!4i256!2m3!1e0!2sm!3i418118808!3m14!2svi-VN!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy50OjgxfHMuZTpnfHAuYzojZmZmN2YxZGYscy50OjgyfHMuZTpnfHAuYzojZmZkMGUzYjQscy50OjEzMTR8cy5lOmd8cC52Om9mZixzLnQ6MnxzLmU6bHxwLnY6b2ZmLHMudDozM3xwLnY6b2ZmLHMudDozNnxzLmU6Z3xwLmM6I2ZmZmJkM2RhLHMudDo0MHxzLmU6Z3xwLmM6I2ZmYmRlNmFiLHMudDozfHMuZTpnLnN8cC52Om9mZixzLnQ6M3xzLmU6bHxwLnY6b2ZmLHMudDo0OXxzLmU6Zy5mfHAuYzojZmZmZmUxNWYscy50OjQ5fHMuZTpnLnN8cC5jOiNmZmVmZDE1MSxzLnQ6NTB8cy5lOmcuZnxwLmM6I2ZmZmZmZmZmLHMudDo1MXxzLmU6Zy5mfHAuYzpibGFjayxzLnQ6MTA1OXxzLmU6Zy5mfHAuYzojZmZjZmIyZGIscy50OjZ8cy5lOmd8cC5jOiNmZmEyZGFmMg!4e0!23i1301875&amp;token=43145"
                                                                     style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                                            </div>
                                                            <div style="position: absolute; left: 256px; top: 256px; width: 256px; height: 256px;">
                                                                <img draggable="false" alt=""
                                                                     src="http://maps.google.com/maps/vt?pb=!1m5!1m4!1i16!2i52029!3i28853!4i256!2m3!1e0!2sm!3i418118808!3m14!2svi-VN!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy50OjgxfHMuZTpnfHAuYzojZmZmN2YxZGYscy50OjgyfHMuZTpnfHAuYzojZmZkMGUzYjQscy50OjEzMTR8cy5lOmd8cC52Om9mZixzLnQ6MnxzLmU6bHxwLnY6b2ZmLHMudDozM3xwLnY6b2ZmLHMudDozNnxzLmU6Z3xwLmM6I2ZmZmJkM2RhLHMudDo0MHxzLmU6Z3xwLmM6I2ZmYmRlNmFiLHMudDozfHMuZTpnLnN8cC52Om9mZixzLnQ6M3xzLmU6bHxwLnY6b2ZmLHMudDo0OXxzLmU6Zy5mfHAuYzojZmZmZmUxNWYscy50OjQ5fHMuZTpnLnN8cC5jOiNmZmVmZDE1MSxzLnQ6NTB8cy5lOmcuZnxwLmM6I2ZmZmZmZmZmLHMudDo1MXxzLmU6Zy5mfHAuYzpibGFjayxzLnQ6MTA1OXxzLmU6Zy5mfHAuYzojZmZjZmIyZGIscy50OjZ8cy5lOmd8cC5jOiNmZmEyZGFmMg!4e0!23i1301875&amp;token=68676"
                                                                     style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="gm-style-pbc"
                                                     style="z-index: 2; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px; opacity: 0;">
                                                    <p class="gm-style-pbt"></p></div>
                                                <div style="z-index: 3; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px; touch-action: pan-x pan-y;">
                                                    <div style="z-index: 1; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px;"></div>
                                                    <div style="z-index: 4; position: absolute; left: 50%; top: 50%; transform: translate(0px, 0px);">
                                                        <div style="position: absolute; left: 0px; top: 0px; z-index: 104; width: 100%;"></div>
                                                        <div style="position: absolute; left: 0px; top: 0px; z-index: 105; width: 100%;"></div>
                                                        <div style="position: absolute; left: 0px; top: 0px; z-index: 106; width: 100%;">
                                                            <div class="gmnoprint"
                                                                 style="width: 27px; height: 43px; overflow: hidden; position: absolute; opacity: 0.01; left: -14px; top: -43px; z-index: 0;">
                                                                <img alt=""
                                                                     src="http://maps.gstatic.com/mapfiles/api-3/images/spotlight-poi2.png"
                                                                     draggable="false" usemap="#gmimap0"
                                                                     style="position: absolute; left: 0px; top: 0px; width: 27px; height: 43px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                                                <map name="gmimap0" id="gmimap0">
                                                                    <area log="miw"
                                                                          coords="13.5,0,4,3.75,0,13.5,13.5,43,27,13.5,23,3.75"
                                                                          shape="poly" title=""
                                                                          style="cursor: pointer; touch-action: none;">
                                                                </map>
                                                            </div>
                                                        </div>
                                                        <div style="position: absolute; left: 0px; top: 0px; z-index: 107; width: 100%;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <iframe frameborder="0" src="about:blank"
                                                    style="z-index: -1; position: absolute; width: 100%; height: 100%; top: 0px; left: 0px; border: none;"></iframe>
                                            <div style="margin-left: 5px; margin-right: 5px; z-index: 1000000; position: absolute; left: 0px; bottom: 0px;">
                                                <a target="_blank"
                                                   href="https://maps.google.com/maps?ll=21.018447,105.803365&amp;z=16&amp;t=m&amp;hl=vi-VN&amp;gl=US&amp;mapclient=apiv3"
                                                   title="Nhấp để xem khu vực này trên Google Maps"
                                                   style="position: static; overflow: visible; float: none; display: inline;">
                                                    <div style="width: 66px; height: 26px; cursor: pointer;"><img alt=""
                                                                                                                  src="http://maps.gstatic.com/mapfiles/api-3/images/google_white5.png"
                                                                                                                  draggable="false"
                                                                                                                  style="position: absolute; left: 0px; top: 0px; width: 66px; height: 26px; user-select: none; border: 0px; padding: 0px; margin: 0px;">
                                                    </div>
                                                </a></div>
                                            <div style="background-color: white; padding: 15px 21px; border: 1px solid rgb(171, 171, 171); font-family: Roboto, Arial, sans-serif; color: rgb(34, 34, 34); box-shadow: rgba(0, 0, 0, 0.2) 0px 4px 16px; z-index: 10000002; display: none; width: 256px; height: 148px; position: absolute; left: 128px; top: 10px;">
                                                <div style="padding: 0px 0px 10px; font-size: 16px;">Dữ liệu Bản đồ
                                                </div>
                                                <div style="font-size: 13px;">Dữ liệu bản đồ ©2018 Google</div>
                                                <div style="width: 13px; height: 13px; overflow: hidden; position: absolute; opacity: 0.7; right: 12px; top: 12px; z-index: 10000; cursor: pointer;">
                                                    <img alt=""
                                                         src="http://maps.gstatic.com/mapfiles/api-3/images/mapcnt6.png"
                                                         draggable="false"
                                                         style="position: absolute; left: -2px; top: -336px; width: 59px; height: 492px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                                </div>
                                            </div>
                                            <div class="gmnoprint"
                                                 style="z-index: 1000001; position: absolute; right: 223px; bottom: 0px; width: 148px;">
                                                <div draggable="false" class="gm-style-cc"
                                                     style="user-select: none; height: 14px; line-height: 14px;">
                                                    <div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;">
                                                        <div style="width: 1px;"></div>
                                                        <div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div>
                                                    </div>
                                                    <div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;">
                                                        <a style="text-decoration: none; cursor: pointer; display: none;">Dữ
                                                            liệu Bản đồ</a><span>Dữ liệu bản đồ ©2018 Google</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gmnoscreen"
                                                 style="position: absolute; right: 0px; bottom: 0px;">
                                                <div style="font-family: Roboto, Arial, sans-serif; font-size: 11px; color: rgb(68, 68, 68); direction: ltr; text-align: right; background-color: rgb(245, 245, 245);">
                                                    Dữ liệu bản đồ ©2018 Google
                                                </div>
                                            </div>
                                            <div class="gmnoprint gm-style-cc" draggable="false"
                                                 style="z-index: 1000001; user-select: none; height: 14px; line-height: 14px; position: absolute; right: 119px; bottom: 0px;">
                                                <div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;">
                                                    <div style="width: 1px;"></div>
                                                    <div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div>
                                                </div>
                                                <div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;">
                                                    <a href="https://www.google.com/intl/vi-VN_US/help/terms_maps.html"
                                                       target="_blank"
                                                       style="text-decoration: none; cursor: pointer; color: rgb(68, 68, 68);">Điều
                                                        khoản sử dụng</a></div>
                                            </div>
                                            <button draggable="false" title="Chuyển đổi chế độ xem toàn màn hình"
                                                    aria-label="Chuyển đổi chế độ xem toàn màn hình" type="button"
                                                    style="background: none rgb(255, 255, 255); border: 0px; margin: 10px 14px; padding: 0px; position: absolute; cursor: pointer; user-select: none; width: 25px; height: 25px; overflow: hidden; top: 0px; right: 0px;">
                                                <img alt="" src="http://maps.gstatic.com/mapfiles/api-3/images/sv9.png"
                                                     draggable="false" class="gm-fullscreen-control"
                                                     style="position: absolute; left: -52px; top: -86px; width: 164px; height: 175px; user-select: none; border: 0px; padding: 0px; margin: 0px;">
                                            </button>
                                            <div draggable="false" class="gm-style-cc"
                                                 style="user-select: none; height: 14px; line-height: 14px; position: absolute; right: 0px; bottom: 0px;">
                                                <div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;">
                                                    <div style="width: 1px;"></div>
                                                    <div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div>
                                                </div>
                                                <div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;">
                                                    <a target="_blank" rel="noopener"
                                                       title="Báo cáo lỗi trong bản đồ đường hoặc hình ảnh đến Google"
                                                       href="https://www.google.com/maps/@21.018447,105.803365,16z/data=!10m1!1e1!12b1?source=apiv3&amp;rapsrc=apiv3"
                                                       style="font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); text-decoration: none; position: relative;">Báo
                                                        cáo một lỗi bản đồ</a></div>
                                            </div>
                                            <div class="gmnoprint gm-bundled-control gm-bundled-control-on-bottom"
                                                 draggable="false" controlwidth="28" controlheight="93"
                                                 style="margin: 10px; user-select: none; position: absolute; bottom: 107px; right: 28px;">
                                                <div class="gmnoprint" controlwidth="28" controlheight="55"
                                                     style="position: absolute; left: 0px; top: 38px;">
                                                    <div draggable="false"
                                                         style="user-select: none; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; border-radius: 2px; cursor: pointer; background-color: rgb(255, 255, 255); width: 28px; height: 55px;">
                                                        <button draggable="false" title="Phóng to" aria-label="Phóng to"
                                                                type="button"
                                                                style="background: none; display: block; border: 0px; margin: 0px; padding: 0px; position: relative; cursor: pointer; user-select: none; width: 28px; height: 27px; top: 0px; left: 0px;">
                                                            <div style="overflow: hidden; position: absolute; width: 15px; height: 15px; left: 7px; top: 6px;">
                                                                <img alt=""
                                                                     src="http://maps.gstatic.com/mapfiles/api-3/images/tmapctrl.png"
                                                                     draggable="false"
                                                                     style="position: absolute; left: 0px; top: 0px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none; width: 120px; height: 54px;">
                                                            </div>
                                                        </button>
                                                        <div style="position: relative; overflow: hidden; width: 67%; height: 1px; left: 16%; background-color: rgb(230, 230, 230); top: 0px;"></div>
                                                        <button draggable="false" title="Thu nhỏ" aria-label="Thu nhỏ"
                                                                type="button"
                                                                style="background: none; display: block; border: 0px; margin: 0px; padding: 0px; position: relative; cursor: pointer; user-select: none; width: 28px; height: 27px; top: 0px; left: 0px;">
                                                            <div style="overflow: hidden; position: absolute; width: 15px; height: 15px; left: 7px; top: 6px;">
                                                                <img alt=""
                                                                     src="http://maps.gstatic.com/mapfiles/api-3/images/tmapctrl.png"
                                                                     draggable="false"
                                                                     style="position: absolute; left: 0px; top: -15px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none; width: 120px; height: 54px;">
                                                            </div>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="gm-svpc" controlwidth="28" controlheight="28"
                                                     style="background-color: rgb(255, 255, 255); box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; border-radius: 2px; width: 28px; height: 28px; cursor: url(&quot;http://maps.gstatic.com/mapfiles/openhand_8_8.cur&quot;), default; touch-action: none; position: absolute; left: 0px; top: 0px;">
                                                    <div style="position: absolute; left: 1px; top: 1px;"></div>
                                                    <div style="position: absolute; left: 1px; top: 1px;">
                                                        <div aria-label="Kiểm soát người hình mắc áo trong chế độ xem phố"
                                                             style="width: 26px; height: 26px; overflow: hidden; position: absolute; left: 0px; top: 0px;">
                                                            <img alt=""
                                                                 src="http://maps.gstatic.com/mapfiles/api-3/images/cb_scout5.png"
                                                                 draggable="false"
                                                                 style="position: absolute; left: -147px; top: -26px; width: 215px; height: 835px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                                        </div>
                                                        <div aria-label="Người hình mắc áo ở đầu Bản đồ"
                                                             style="width: 26px; height: 26px; overflow: hidden; position: absolute; left: 0px; top: 0px; visibility: hidden;">
                                                            <img alt=""
                                                                 src="http://maps.gstatic.com/mapfiles/api-3/images/cb_scout5.png"
                                                                 draggable="false"
                                                                 style="position: absolute; left: -147px; top: -52px; width: 215px; height: 835px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                                        </div>
                                                        <div aria-label="Kiểm soát người hình mắc áo trong chế độ xem phố"
                                                             style="width: 26px; height: 26px; overflow: hidden; position: absolute; left: 0px; top: 0px; visibility: hidden;">
                                                            <img alt=""
                                                                 src="http://maps.gstatic.com/mapfiles/api-3/images/cb_scout5.png"
                                                                 draggable="false"
                                                                 style="position: absolute; left: -147px; top: -78px; width: 215px; height: 835px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="gmnoprint" controlwidth="28" controlheight="0"
                                                     style="display: none; position: absolute;">
                                                    <div title="Xoay bản đồ 90 độ"
                                                         style="width: 28px; height: 28px; overflow: hidden; position: absolute; background-color: rgb(255, 255, 255); box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; border-radius: 2px; cursor: pointer; display: none;">
                                                        <img alt=""
                                                             src="http://maps.gstatic.com/mapfiles/api-3/images/tmapctrl4.png"
                                                             draggable="false"
                                                             style="position: absolute; left: -141px; top: 6px; width: 170px; height: 54px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                                    </div>
                                                    <div class="gm-tilt"
                                                         style="width: 28px; height: 28px; overflow: hidden; position: absolute; background-color: rgb(255, 255, 255); box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; border-radius: 2px; top: 0px; cursor: pointer;">
                                                        <img alt=""
                                                             src="http://maps.gstatic.com/mapfiles/api-3/images/tmapctrl4.png"
                                                             draggable="false"
                                                             style="position: absolute; left: -141px; top: -13px; width: 170px; height: 54px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gmnoprint"
                                                 style="margin: 10px; z-index: 0; position: absolute; cursor: pointer; left: 0px; top: 0px;">
                                                <div class="gm-style-mtc" style="float: left; position: relative;">
                                                    <div role="button" tabindex="0" title="Hiển thị bản đồ phố"
                                                         aria-label="Hiển thị bản đồ phố" aria-pressed="true"
                                                         draggable="false"
                                                         style="direction: ltr; overflow: hidden; text-align: center; position: relative; color: rgb(0, 0, 0); font-family: Roboto, Arial, sans-serif; user-select: none; font-size: 11px; background-color: rgb(255, 255, 255); padding: 8px; border-bottom-left-radius: 2px; border-top-left-radius: 2px; background-clip: padding-box; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; min-width: 36px; font-weight: 500;">
                                                        Bản đồ
                                                    </div>
                                                    <div style="background-color: white; z-index: -1; padding: 2px; border-bottom-left-radius: 2px; border-bottom-right-radius: 2px; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; position: absolute; left: 0px; top: 29px; text-align: left; display: none;">
                                                        <div draggable="false" title="Hiển thị bản đồ phố với địa hình"
                                                             style="color: rgb(0, 0, 0); font-family: Roboto, Arial, sans-serif; user-select: none; font-size: 11px; background-color: rgb(255, 255, 255); padding: 6px 8px 6px 6px; direction: ltr; text-align: left; white-space: nowrap;">
                                                            <span role="checkbox"
                                                                  style="box-sizing: border-box; position: relative; line-height: 0; font-size: 0px; margin: 0px 5px 0px 0px; display: inline-block; background-color: rgb(255, 255, 255); border: 1px solid rgb(198, 198, 198); border-radius: 1px; width: 13px; height: 13px; vertical-align: middle;"><div
                                                                        style="position: absolute; left: 1px; top: -2px; width: 13px; height: 11px; overflow: hidden; display: none;"><img
                                                                            alt=""
                                                                            src="http://maps.gstatic.com/mapfiles/mv/imgs8.png"
                                                                            draggable="false"
                                                                            style="position: absolute; left: -52px; top: -44px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none; width: 68px; height: 67px;"></div></span><label
                                                                    style="vertical-align: middle; cursor: pointer;">Địa
                                                                hình</label></div>
                                                    </div>
                                                </div>
                                                <div class="gm-style-mtc" style="float: left; position: relative;">
                                                    <div role="button" tabindex="0"
                                                         title="Hiển thị hình ảnh qua vệ tinh"
                                                         aria-label="Hiển thị hình ảnh qua vệ tinh" aria-pressed="false"
                                                         draggable="false"
                                                         style="direction: ltr; overflow: hidden; text-align: center; position: relative; color: rgb(86, 86, 86); font-family: Roboto, Arial, sans-serif; user-select: none; font-size: 11px; background-color: rgb(255, 255, 255); padding: 8px; border-bottom-right-radius: 2px; border-top-right-radius: 2px; background-clip: padding-box; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; min-width: 36px; border-left: 0px;">
                                                        Vệ tinh
                                                    </div>
                                                    <div style="background-color: white; z-index: -1; padding: 2px; border-bottom-left-radius: 2px; border-bottom-right-radius: 2px; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; position: absolute; right: 0px; top: 29px; text-align: left; display: none;">
                                                        <div draggable="false" title="Hiển thị hình ảnh có tên phố"
                                                             style="color: rgb(0, 0, 0); font-family: Roboto, Arial, sans-serif; user-select: none; font-size: 11px; background-color: rgb(255, 255, 255); padding: 6px 8px 6px 6px; direction: ltr; text-align: left; white-space: nowrap;">
                                                            <span role="checkbox"
                                                                  style="box-sizing: border-box; position: relative; line-height: 0; font-size: 0px; margin: 0px 5px 0px 0px; display: inline-block; background-color: rgb(255, 255, 255); border: 1px solid rgb(198, 198, 198); border-radius: 1px; width: 13px; height: 13px; vertical-align: middle;"><div
                                                                        style="position: absolute; left: 1px; top: -2px; width: 13px; height: 11px; overflow: hidden;"><img
                                                                            alt=""
                                                                            src="http://maps.gstatic.com/mapfiles/mv/imgs8.png"
                                                                            draggable="false"
                                                                            style="position: absolute; left: -52px; top: -44px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none; width: 68px; height: 67px;"></div></span><label
                                                                    style="vertical-align: middle; cursor: pointer;">Nhãn</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="footer-bottom bg-black-333">
            <div class="container pt-20 pb-20">
                <div class="row">
                    <div class="col-md-6">
                        <p class="font-11 text-black-777 m-0">Copyright &copy;2015 ThemeMascot. All Rights Reserved</p>
                    </div>
                    <div class="col-md-6 text-right">
                        <div class="widget no-border m-0">
                            <ul class="list-inline sm-text-center mt-5 font-12">
                                <li>
                                    <a href="#">FAQ</a>
                                </li>
                                <li>|</li>
                                <li>
                                    <a href="#">Help Desk</a>
                                </li>
                                <li>|</li>
                                <li>
                                    <a href="#">Support</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>
<!-- end wrapper -->

<!-- Footer Scripts -->
<!-- JS | Custom script for all pages -->
<script src="js/custom.js"></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS
      (Load Extensions only on Local File Systems !
       The following part can be removed on Server for On Demand Loading) -->
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.actions.min.js"></script>
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.carousel.min.js"></script>
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.kenburn.min.js"></script>
<script type="text/javascript"
        src="js/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.migration.min.js"></script>
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.navigation.min.js"></script>
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.parallax.min.js"></script>
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.video.min.js"></script>
</body>

