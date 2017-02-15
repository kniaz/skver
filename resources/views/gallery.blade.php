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
                    <div class="col-md-6">
                        <a href="{{$gallery->alias}}"></a>{{$gallery->alias}}
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