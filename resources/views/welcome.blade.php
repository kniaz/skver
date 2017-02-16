@extends('layout')

@section('title' ) {{ $title }} @endsection


@section('content')
    <div class="row welcome-page">
        <h1 class="slogan">Ресторан душевной кухни и искреннего гостеприимства</h1>

        <img class="main-img" src="/content/images/main_3_1350x900.jpg"
             alt="Ресторан душевной кухни и искреннего гостеприимства">

        <div class="col-md-3 col-sm-12 col-xs-12">
            <div class="home-info">
                <div class="hidden-sm hidden-xs home-logo text-center">
                    <a href="/"><img src="/content/images/logo_main.png" class="" alt="Ресторан «Сквер»"></a>
                </div>
                <div class="home-info-inner">

                    <p>Ресторан душевной кухни и искреннего гостеприимства. <a href="/about">Читать дальше</a></p>

                    <p><strong>Наши контакты</strong></p>

                    <p style="text-align: left;">+38 (048) 377-098 / <a
                                href="mailto:skver2016@mail.ua"><b>skver2016@mail.ua</b></a></p>

                    <p style="text-align: left;">Украина, Одесса<br>
                        Улица&nbsp;Левитана, 95A</p>

                    <h3 style="text-align: left;">Время работы</h3>

                    <p style="text-align: left;">Понедельник — Воскресенье: 11.00&nbsp;—&nbsp;23.00</p>

                    <p style="text-align: left;">
                    </p>

                    <div class="vc_row wpb_row vc_row-fluid hidden">
                        <div class="wpb_column vc_column_container vc_col-sm-12">
                            <div class="vc_column-inner ">
                                <div class="wpb_wrapper"></div>
                            </div>
                        </div>
                    </div>

                    <a href="/foodmenu" class="hidden-md hidden-lg booking-switch home-left-button"
                       style="font-family: lato; font-weight: 900; font-size: 12px; letter-spacing: 2px; padding: 15px; border: 2px solid #333; text-align: center; cursor: pointer; margin-bottom: 15px; "><span>МЕНЮ РЕСТОРАНА</span></a>

                </div>
                <div class="home-info-footer bottom">
                    <div class="social-profiles">
                        <ul>
                            <li><a href="https://www.facebook.com/restaurant.skver/"><i
                                            class="fa fa-facebook-official"></i></a></li>
                            <li><a href="https://www.instagram.com/restaurant.skver/"><i
                                            class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                    <p>{{date('Y', time())}} ⓒ Skver</p>
                </div>

            </div>
        </div>
        <div class="col-md-9 col-sm-12 col-xs-12 home-right mobile-none ">
            <div id="container" class="home-content">
                <ul id="scene" class="scene">
                    <!-- parallax layers -->
                    <li class="layer" data-depth="0.30">
                        <div class="fotorama fotorama-main" data-loop="true"
                             data-width="110%"
                             data-maxwidth="110%"
                             data-minheight="120%"
                             data-maxheight="120%"
                             data-nav="none"
                             data-arrows="false"
                             data-fit="cover"
                             data-autoplay="true"
                             data-transition="crossfade">
                            <img src="/content/images/main_1_1350x900.jpg">
                            <img src="/content/images/main_2_1350x900.jpg">
                            <img src="/content/images/main_3_1350x900.jpg">
                            <img src="/content/images/main_4_1350x900.jpg">
                            <img src="/content/images/main_5_1350x900.jpg">
                            <img src="/content/images/main_6_1350x900.jpg">
                            <img src="/content/images/main_7_1350x900.jpg">
                            <img src="/content/images/main_8_1350x900.jpg">
                            <img src="/content/images/main_9_1350x900.jpg">
                            <img src="/content/images/main_10_1350x900.jpg">
                            <img src="/content/images/main_11_1350x900.jpg">

                        </div>
                    </li>
                    <li class="layer" data-depth="0.40">
                        <div class="button-header-wrapper">
                            <div class="button-table-bottom">
                                <div class="button-table-bottom-cell">
                                    <h1><span class="first-line" data-replace="Date"
                                              data-base="Добро пожаловать">Добро пожаловать</span></h1>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="layer" data-depth="0.60">
                        <div class="button-wrapper">
					<span class="second-border button-content button-frame" style="position: relative; ">
						<span>
							<span href="/foodmenu" class="second-line">МЕНЮ РЕСТОРАНА</span>
						</span>
					</span>
                        </div>
                    </li>
                    <li class="layer" data-depth="0.80">
                        <div class="button-wrapper">
                            <div class="button-content button-arrow">
                                <span class="second-line">МЕНЮ РЕСТОРАНА</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="second-border"
                                     xmlns:xlink="http://www.w3.org/1999/xlink" width="100px" height="100%"
                                     viewBox="0 0 100 50" preserveAspectRatio="xMidYMid meet" zoomAndPan="disable">
                                    <line id="e4_line" x1="0" y1="25" x2="98" y2="25" stroke="#fff"
                                          style="stroke-width: 2px; vector-effect: non-scaling-stroke; fill: none;"></line>
                                    <polygon points="100,25 85,34 85,16"
                                             style="stroke-width: 2px; vector-effect: non-scaling-stroke; fill: #fff;"></polygon>
                                </svg>
                            </div>
                        </div>
                    </li>
                    <li class="layer" data-depth="0.70">
                        <div class="button-wrapper">
					<span class="button-content">
                        <a href="/foodmenu" class="second-line" data-base="МЕНЮ РЕСТОРАНА">МЕНЮ РЕСТОРАНА</a>
					</span>
                        </div>
                    </li>
                </ul>

            </div>
        </div>
    </div>

@endsection