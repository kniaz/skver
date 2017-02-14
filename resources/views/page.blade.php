@extends('layout')

@section('title' ) {{ $page->seo_title }} @endsection
@section('keywords' ) {{ $page->seo_keywords }} @endsection
@section('descroption' ) {{ $page->seo_descroption }} @endsection

@section('content')
    <div id="fullpage">
        @foreach ($page->slides as $slide)
            <div class="section">
                <img src="{{ $slide->background }}"class="item__background"alt="">
                @if ($slide->type=="page")
                    <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 item__description">
                        {!! $slide->text !!}
                    </div>
                @endif
                @if ($slide->type=="image-page")
                    <div style="background-image: url('{{ $slide->image }}')" class="item__image col-sm-6"></div>
                    <div class="col-xs-12 col-sm-6 item__description">
                        {!! $slide->text !!}
                    </div>
                @endif

            </div>
        @endforeach
    </div>
@endsection