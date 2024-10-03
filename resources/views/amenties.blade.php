@extends('layouts.dashboard')

@section('title', 'Amenities')

@section('content')
    <style>
        .service-detail .content-box {
            position: relative;
            padding: 50px 0 0;
        }
        .service-detail .two-column .image-column {
            position: relative;
            margin-bottom: 0px;
        }
    </style>

        <section class="breadcrumb-area d-flex align-items-center" style=background-image:url(assets/img/bg/bdrc-bg.jpg)>
            <div class=container>
                <div class="row align-items-center">
                    <div class="col-xl-12 col-lg-12">
                        <div class="breadcrumb-wrap text-center">
                            <div class=breadcrumb-title>
                                <h2>Amenities</h2>
                                <div class=breadcrumb-wrap>
                                    <nav aria-label=breadcrumb>
                                        <ol class=breadcrumb>
                                            <li class=breadcrumb-item><a href="{{url ('/')}}">Home</a></li>
                                            <li class="breadcrumb-item active" aria-current=page>Amenties</li>
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
                                    <h2 class=widget-title> Amenities List </h2>
                                    <ul class=services-categories>
                                        <li class=active><a href=#swim>Swimming</a></li>
                                        <li><a href=#cre-art>Creative Art</a></li>
                                        <li><a href="#lawn">Lawn Tennis</a></li>
                                        <li><a href="#TT">Table Tennis</a></li>
                                        <li><a href=#>Badminton</a></li>
                                        <li><a href=#>Net Cricket</a></li>
                                        <li><a href=#>Shooting</a></li>
                                        <li><a href=#>Yoga</a></li>
                                        <li><a href=#>Gym</a></li>
                                        <li><a href=#>Golf</a></li>
                                        <li><a href=#>Bar & Restaurant</a></li>
                                        <li><a href=#>Health Club (SPA)</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="service-detail-contact wow fadeup-animation" data-wow-delay=1.1s>
                                <h3 class=h3-title>If You Need Any Help Contact With Us</h3>
                                <a href="tel:+917052101786" title="Call now">+91 705 2101 786</a>
                            </div>
                        </aside>
                    </div>
                    <div class="col-lg-8 col-md-12 col-sm-12 order-2">
                        <div class=service-detail>
                            <div class="content-box" id="swim">
                                <h3>Swimming</h3>
                                <div class=two-column>
                                    <div class=row>
                                        <div class="image-column col-xl-8 col-lg-8 col-md-8">
                                            <figure class=image><img src=assets/images/2.jpeg alt></figure>
                                        </div>
                                        <div class="image-column col-xl-4 col-lg-4 col-md-4">
                                            <div class="row">
                                                <div class="image-column col-xl-12 col-lg-12 col-md-12">
                                                    <figure class=image><img src=assets/images/3.jpeg alt></figure>
                                                </div>
                                                <div class="image-column col-xl-12 col-lg-12 col-md-12">
                                                    <figure class=image><img src=assets/images/5.jpeg alt></figure>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=row>
                                        <div class="image-column col-xl-12 col-lg-12 col-md-12">
                                           <h2></h2>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="content-box" id="cre-art">
                                <h3>Creative Arts</h3>
                                <div class=two-column>
                                    <div class=row>
                                        <div class="image-column col-xl-8 col-lg-8 col-md-8">
                                            <figure class=image><img src=assets/images/bottle-pic.jpeg alt></figure>
                                        </div>
                                        <div class="image-column col-xl-4 col-lg-4 col-md-4">
                                            <div class="row">
                                                <div class="image-column col-xl-12 col-lg-12 col-md-12">
                                                    <figure class=image><img src=assets/images/4.jpeg alt></figure>
                                                </div>
                                                <div class="image-column col-xl-12 col-lg-12 col-md-12">
                                                    <figure class=image><img src=assets/images/1.jpeg alt></figure>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- <div class="content-box" id="TT">
                                <h3>Table Tennis</h3>
                                <div class=two-column>
                                    <div class=row>
                                        <div class="image-column col-xl-4 col-lg-4 col-md-4">
                                            <figure class=image><img src=assets/img/gallery/program.jpg alt></figure>
                                        </div>
                                        <div class="image-column col-xl-4 col-lg-4 col-md-4">
                                            <figure class=image><img src=assets/img/gallery/program.jpg alt></figure>
                                        </div>
                                        <div class="image-column col-xl-4 col-lg-4 col-md-4">
                                            <figure class=image><img src=assets/img/gallery/program.jpg alt></figure>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endsection