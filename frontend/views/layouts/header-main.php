<?php
/**
 * Created by PhpStorm.
 * User: vietv
 * Date: 3/9/2018
 * Time: 11:15 PM
 */

use yii\helpers\Url;
use common\helpers\FunctionHelper;
use frontend\assets\ThemeAsset;
ThemeAsset::register($this);
?>

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
                        <li><a href="#" data-toggle="modal" data-target="#dangnhap">Đăng nhập</a> </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

</header>