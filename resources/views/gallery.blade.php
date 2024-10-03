@extends('layouts.dashboard')

@section('title', 'Gallery')

@section('content')
    <style>
        .btn_bfr_hide button:before{
            display: none;
        }
    </style>

        <section class="breadcrumb-area d-flex align-items-center" style=background-image:url(assets/img/bg/bdrc-bg.jpg)>
            <div class=container>
                <div class="row align-items-center">
                    <div class="col-xl-12 col-lg-12">
                        <div class="breadcrumb-wrap text-center">
                            <div class=breadcrumb-title>
                                <h2>Gallery</h2>
                                <div class=breadcrumb-wrap>
                                    <nav aria-label=breadcrumb>
                                        <ol class=breadcrumb>
                                            <li class=breadcrumb-item><a href="{{url ('/')}}">Home</a></li>
                                            <li class="breadcrumb-item active" aria-current=page>Gallery </li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="profile fix pt-20">
            <div class=container-fluid>
                <div class=row>
                    <div class="col-xl-12 col-lg-12">
                        <div class="my-masonry text-center mb-10">
                            <div class="button-group filter-button-group btn_bfr_hide">
                                <button class=active data-filter=*>All</button>
                                <button data-filter=.financial>Rangoli</button>
                                <button data-filter=.banking>Fashion Show </button>
                                <button data-filter=.insurance>Garba </button>
                            </div>
                        </div>
                    </div>
                    <div class=col-lg-12>
                        <div>
                            <div class="grid justify-content-between align-items-center">
                                <div class="grid-item banking">
                                    <a class=popup-image href=assets/img/gallery/protfolio-img02.jpg>
                                        <figure class=gallery-image>
                                            <img src=assets/img/gallery/protfolio-img02.jpg alt=img class=img>
                                        </figure>
                                    </a>
                                </div>
                                <div class="grid-item insurance">
                                    <a class=popup-image href=assets/img/gallery/protfolio-img03.jpg>
                                        <figure class=gallery-image>
                                            <img src=assets/img/gallery/protfolio-img03.jpg alt=img class=img>
                                        </figure>
                                    </a>
                                </div>
                                <div class="grid-item financial">
                                    <a class=popup-image href=assets/img/gallery/protfolio-img01.jpg>
                                        <figure class=gallery-image>
                                            <img src=assets/img/gallery/protfolio-img01.jpg alt=img class=img>
                                        </figure>
                                    </a>
                                </div>
                                <div class="grid-item family">
                                    <a class=popup-image href=assets/img/gallery/protfolio-img04.jpg>
                                        <figure class=gallery-image>
                                            <img src=assets/img/gallery/protfolio-img04.jpg alt=img class=img>
                                        </figure>
                                    </a>
                                </div>
                                <div class="grid-item business">
                                    <a class=popup-image href=assets/img/gallery/protfolio-img05.jpg>
                                        <figure class=gallery-image>
                                            <img src=assets/img/gallery/protfolio-img05.jpg alt=img class=img>
                                        </figure>
                                    </a>
                                </div>
                                <div class="grid-item financial">
                                    <a class=popup-image href=assets/img/gallery/protfolio-img06.jpg>
                                        <figure class=gallery-image>
                                            <img src=assets/img/gallery/protfolio-img06.jpg alt=img class=img>
                                        </figure>
                                    </a>
                                </div>
                                <div class="grid-item banking">
                                    <a class=popup-image href=assets/img/gallery/protfolio-img07.jpg>
                                        <figure class=gallery-image>
                                            <img src=assets/img/gallery/protfolio-img07.jpg alt=img class=img>
                                        </figure>
                                    </a>
                                </div>
                                <div class="grid-item insurance">
                                    <a class=popup-image href=assets/img/gallery/protfolio-img08.jpg>
                                        <figure class=gallery-image>
                                            <img src=assets/img/gallery/protfolio-img08.jpg alt=img class=img>
                                        </figure>
                                    </a>
                                </div>
                                <div class="grid-item family">
                                    <a class=popup-image href=assets/img/gallery/protfolio-img09.jpg>
                                        <figure class=gallery-image>
                                            <img src=assets/img/gallery/protfolio-img09.jpg alt=img class=img>
                                        </figure>
                                    </a>
                                </div>
                                <div class="grid-item business">
                                    <a class=popup-image href=assets/img/gallery/protfolio-img10.jpg>
                                        <figure class=gallery-image>
                                            <img src=assets/img/gallery/protfolio-img10.jpg alt=img class=img>
                                        </figure>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @endsection
