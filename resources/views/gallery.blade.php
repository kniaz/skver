@extends('layout')

@if($page)
@section('title' ) {{ $page->seo_title }} @endsection
@section('keywords' ) {{ $page->seo_keywords }} @endsection
@section('description' ) {{ $page->seo_description }} @endsection
@endif
@section('content')
    <div id="fullpage" class="gallery-page">

        <div class="section">
            <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 item__description">
                @foreach($galleries as $gallery)
                    <div class="col-md-6 gallery-item">
                        <a href="{{$gallery->alias}}">
                            @inject('imageService', 'App\Services\ImageService')

                        <img src="<?
                            $slides = json_decode(isset($gallery->slides[0])? $gallery->slides[0]->gallery:"[]");
                            if(isset($slides[0])){
                                echo $imageService->resizeImage($slides[0]->img);
                            }else{
                                echo "/assets/img/no-image.png";
                            }
                         ?>"
                            >
                        </a>
                    </div>
        @if($loop->iteration % 4 == 0)
            </div>
        </div>
        <div class="section">
            <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 item__description">
        @endif
                @endforeach
            </div>
        </div>
@endsection