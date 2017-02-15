@extends('layout')

@section('title' ) {{ $title }} @endsection


@section('content')
    <div id="fullpage" class="gallery-page">

        <div class="section fp-section section-pdf">
            <div class="row">
                @if ($pdfType == 'foodmenu' )
                    <div class="col-md-2 link-pdf">
                        <a href="/content/pdf/main-1.pdf" target="_blank">Скачать меню</a>
                    </div>
                    <div class="col-md-10">
                        <iframe class="menu-pdf" src="/content/pdf/main-1.pdf" width="100%"/>
                    </div>

                @elseif ($pdfType == 'cocktailmenu')
                    <div class="col-md-2 link-pdf">
                        <a href="/content/pdf/kokteli.pdf" target="_blank">Скачать меню</a>
                    </div>
                    <div class="col-md-10">
                        <iframe class="menu-pdf" src="/content/pdf/kokteli.pdf" width="100%"/>
                    </div>

                @endif

            </div>
        </div>
    </div>

@endsection