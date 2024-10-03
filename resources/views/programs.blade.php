@extends('layouts.dashboard')

@section('title', 'Programs')

@section('content')
        <section class="breadcrumb-area d-flex align-items-center" style=background-image:url(assets/img/bg/bdrc-bg.jpg)>
            <div class=container>
                <div class="row align-items-center">
                    <div class="col-xl-12 col-lg-12">
                        <div class="breadcrumb-wrap text-center">
                            <div class=breadcrumb-title>
                                <h2>Programs</h2>
                                <div class=breadcrumb-wrap>
                                    <nav aria-label=breadcrumb>
                                        <ol class=breadcrumb>
                                            <li class=breadcrumb-item><a href="{{url ('/')}}">Home</a></li>
                                            <li class="breadcrumb-item active" aria-current=page>Programs</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="about-area5 about-p p-relative">
            <div class="container pt-20 pb-20">
                <div class=row>
                    <div class="col-sm-12 col-md-12 col-lg-4 order-1">
                        <aside class="sidebar services-sidebar">
                            <div class="sidebar-widget categories">
                                <div class=widget-content>
                                    <h2 class=widget-title> Programs List </h2>
                                    <ul class=services-categories>
                                        <li class=active><a href=#>FEBRUARY 2020</a></li>
                                        <li><a href=#>JANUARY 2020</a></li>
                                        <li><a href=#>DECEMBER 2019</a></li>
                                        <li><a href=#>NOVEMBER 2019</a></li>
                                        <li><a href=#>OCTOBER 2019</a></li>
                                        <li><a href=#>SEPTEMBER 2019</a></li>
                                        <li><a href=#>AUGUST 2019</a></li>
                                        <li><a href=#>JULY 2019</a></li>
                                        <li><a href=#>JUNE 2019</a></li>
                                        <li><a href=#> MAY 2019 </a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="service-detail-contact wow fadeup-animation" data-wow-delay=1.1s>
                                <h3 class=h3-title>If You Need Any Help Contact With Us</h3>
                                <a href=javascript:void(0) title="Call now">+91 705 2101 786</a>
                            </div>
                        </aside>
                    </div>
                    <div class="col-lg-8 col-md-12 col-sm-12 order-2">
                        <div class=service-detail>
                            <div class=content-box>
                                
                                <h3>FEBRUARY 2020</h3>
                                <div class=two-column>
                                    <div class=row>
                                        <div class="image-column col-xl-12 col-lg-12 col-md-12">
                                            <figure class=image><img src=assets/img/gallery/program.jpg alt></figure>
                                        </div>
                                    </div>
                                </div>
                                <p></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endsection