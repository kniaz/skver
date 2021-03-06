@extends('layout')

@section('title' ) {{ $page->seo_title }} @endsection
@section('keywords' ) {{ $page->seo_keywords }} @endsection
@section('description' ) {{ $page->seo_description }} @endsection



@section('content')
    <div id="fullpage">
        @foreach ($page->slides as $slide)
            <div class="section slide-type-{{$slide->type}}">

                @if($slide->background)
                <img src="{{ $slide->background }}"
                     class="item__background"
                     alt="">
                @endif
                @if ($slide->type=="page")
                    <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 item__description">
                        {!! $slide->text !!}
                    </div>
                @endif
                @if ($slide->type=="image-page")
                    @if($loop->iteration % 2 == 0)
                        <div style="background-image: url('{{ $slide->image }}')"
                             class="item__image col-sm-6"></div>
                    @endif
                        <img src="{{ $slide->image }}" alt="" class="item-image-mobile">
                    <div class="col-xs-12 col-sm-6 item__description">
                        {!! $slide->text !!}
                    </div>
                    @if($loop->iteration % 2 != 0)
                        <div style="background-image: url('{{ $slide->image }}')"
                             class="item__image col-sm-6"></div>
                    @endif
                @endif
                @if ($slide->type=="gallery")

                    <div class="gallery">
                        <div class="fotorama b-fotorama" data-loop="true" data-width="100%"    data-minheight="100%" data-maxheight="100%" data-nav="thumbs" data-fit="cover">
                            @foreach (json_decode($slide->gallery) as $image)
                            <img src="{{$image->img}}" alt="{{$image->alt}}">
                            @endforeach
                        </div>

                    </div>
                @endif
            </div>
        @endforeach
    </div>
@endsection