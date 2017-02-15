@extends('layout')

@section('title' ) {{ $title }} @endsection


@section('content')
    <p>This is my body content.</p>
    <div class="parallax-viewport" id="parallax">

        <!-- parallax layers -->
        <div class="parallax-layer" style="width:860px; height:273px;">
            <img src="images/parallax_sketch/0_sun.png" alt="" style="position:absolute; left:300px; top:-12px;"/>
            <div class="fotorama"
                 data-width="100%"
                 data-ratio="800/600"
                 data-minwidth="400"
                 data-maxwidth="1000"
                 data-minheight="300"
                 data-maxheight="100%">
                <img src="/content/images/gallery_1_1440x900.jpg">
                <img src="/content/images/gallery_2_1440x900.jpg">
                <img src="/content/images/gallery_3_1440x900.jpg">
                <img src="/content/images/gallery_4_1440x900.jpg">
                <img src="/content/images/gallery_5_1440x900.jpg">
            </div>
        </div>
        <div class="parallax-layer" style="width:920px; height:274px;">
            <div class="button-header-wrapper">
                <div class="button-table-bottom">
                    <div class="button-table-bottom-cell">
                        <h1><span class="first-line" data-replace="Date"
                                  data-base="Добро пожаловать">Добро пожаловать</span></h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="parallax-layer" style="width:1100px; height:284px;">
            <div class="button-wrapper">
					<span class="second-border button-content button-frame" style="position: relative; ">
						<span class="button-frame-inner" style="transform: translateX(0px) translateY(0px);">
							<span class="second-line">НАШЕ МЕНЮ</span>
							<span class="button-frame-hover" style="position: absolute; left: -2px; top: -2px; right: -2px; bottom: -2px; display: block; border: 2px solid rgb(255, 255, 255); transform: translateX(0px) translateY(0px); opacity: 0;"></span>
						</span>
					</span>
            </div>
        </div>
        <div class="parallax-layer" style="width:1360px; height:320px;">
            <div class="button-wrapper">
                <div class="button-content button-arrow" style="opacity: 1;">
                    <span class="second-line">НАШЕ МЕНЮ</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="second-border" xmlns:xlink="http://www.w3.org/1999/xlink" width="100px" height="100%" viewBox="0 0 100 50" preserveAspectRatio="xMidYMid meet" zoomAndPan="disable"><line id="e4_line" x1="0" y1="25" x2="98" y2="25" stroke="#fff" style="stroke-width: 2px; vector-effect: non-scaling-stroke; fill: none;"></line><polygon points="100,25 85,34 85,16" style="stroke-width: 2px; vector-effect: non-scaling-stroke; fill: #fff;"></polygon></svg>
                </div>
            </div>
        </div>
        <div class="parallax-layer" style="width:1360px; height:320px;">
            <div class="button-wrapper">
					<span class="button-content button-text">
												<a href="/menu" class="second-line" data-replace="14 | 02 | 2017" data-base="НАШЕ МЕНЮ">НАШЕ МЕНЮ</a>
						<div id="reservation-trigger"></div>
					</span>
            </div>
        </div>


    </div>
@endsection