@extends('layout')

@section('title' ) {{ $page['title'] }} @endsection


@section('content')
    <div id="fullpage" class="gallery-page">

        <div class="section fp-section section-pdf">
            <div class="col-md-12 link-pdf">
                <a href="{{$page['src']}}" target="_blank">Скачать меню</a>
            </div>
            <div class="col-md-12 menu-pdf">
                <iframe class="" src="{{$page['src']}}" width="100%"/>
            </div>
        </div>
    </div>

@endsection