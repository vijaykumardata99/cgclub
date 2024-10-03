@extends('layouts.dashboard')

@section('title', 'Facilities')

@section('content')
        <section class="breadcrumb-area d-flex align-items-center" style=background-image:url(assets/img/bg/bdrc-bg.jpg)>
            <div class=container>
                <div class="row align-items-center">
                    <div class="col-xl-12 col-lg-12">
                        <div class="breadcrumb-wrap text-center">
                            <div class=breadcrumb-title>
                                <h2>Facilities</h2>
                                <div class=breadcrumb-wrap>
                                    <nav aria-label=breadcrumb>
                                        <ol class=breadcrumb>
                                            <li class=breadcrumb-item><a href="{{url ('/')}}">Home</a></li>
                                            <li class="breadcrumb-item active" aria-current=page>Facilities</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="blog" class="blog-area p-relative fix pt-20 pb-20">
            <div class="animations-02"><img src="assets/img/bg/an-img-06.png" alt="contact-bg-an-05"></div>
           <div class="container">
               <div class="row align-items-center"> 
                   <div class="col-lg-12">
                       <div class="section-title center-align mb-50 text-center wow fadeInDown animated" data-animation="fadeInDown" data-delay=".4s">
                        <h5>You'll Never Want To Leave</h5>
                        <h2>~ Our Club Facilities ~</h2>
                       </div>
                   </div>
               </div>
               <div class="row">
                  <div class="col-lg-3 col-md-3">
                       <div class="single-post2 hover-zoomin mb-30 wow fadeInUp animated" data-animation="fadeInUp" data-delay=".4s">
                           <div class="blog-thumb2">
                               <a href="#"><img src="assets/img/cg/f1.jpg" alt="img"></a>
                           </div>
                           <div class="blog-content2">
                               <h4><a href="#">BILLIARDS & SNOOKER
                                </a></h4>
                           </div>
                       </div>
                   </div>
                    <div class="col-lg-3 col-md-3">
                       <div class="single-post2 mb-30 hover-zoomin wow fadeInUp animated" data-animation="fadeInUp" data-delay=".4s">
                           <div class="blog-thumb2">
                               <a href="#"><img src="assets/img/cg/f2.jpg" alt="img"></a>
                           </div>
                           <div class="blog-content2">
                               <h4><a href="#">GYM</a></h4>
                           </div>
                       </div>
                   </div>
                   <div class="col-lg-3 col-md-3">
                       <div class="single-post2 mb-30 hover-zoomin wow fadeInUp animated" data-animation="fadeInUp" data-delay=".4s">
                           <div class="blog-thumb2">
                               <a href="#"><img src="assets/img/cg/f3.jpg" alt="img"></a>
                           </div>
                           <div class="blog-content2">
                               <h4><a href="#">DARBAR HALL</a></h4>
                           </div>
                       </div>
                   </div>
                  <div class="col-lg-3 col-md-3">
                       <div class="single-post2 hover-zoomin mb-30 wow fadeInUp animated" data-animation="fadeInUp" data-delay=".4s">
                           <div class="blog-thumb2">
                               <a href="#"><img src="assets/img/cg/f4.jpg" alt="img"></a>
                           </div>
                           <div class="blog-content2">
                               <h4><a href="#">BADMINTON COURT</a></h4>
                           </div>
                       </div>
                   </div>
                    <div class="col-lg-3 col-md-3">
                       <div class="single-post2 mb-30 hover-zoomin wow fadeInUp animated" data-animation="fadeInUp" data-delay=".4s">
                           <div class="blog-thumb2">
                               <a href="#"><img src="assets/img/cg/f5.jpg" alt="img"></a>
                           </div>
                           <div class="blog-content2">
                               <h4><a href="#">Restaurant</a></h4>
                           </div>
                       </div>
                   </div>
                   <div class="col-lg-3 col-md-3">
                       <div class="single-post2 mb-30 hover-zoomin wow fadeInUp animated" data-animation="fadeInUp" data-delay=".4s">
                           <div class="blog-thumb2">
                               <a href="#"><img src="assets/img/cg/f6.jpg" alt="img"></a>
                           </div>
                           <div class="blog-content2">
                               <h4><a href="#">BAR & LOUNGE</a></h4>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
        </section>
        <section class="testimonial-area pt-10 pb-10 p-relative fix" style="background-image: url(assets/img/bg/testimonial-bg.png); background-size: cover;">
            <div class="animations-02"><img src="assets/img/bg/an-img-02.png" alt="contact-bg-an-02"></div>
            <div class="container">
                <div class="row justify-content-center align-items-center">
                <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="about-content s-about-content  wow fadeInRight  animated pr-30" data-animation="fadeInRight" data-delay=".4s">
                            <div class="about-title second-title pb-25">
                                <h2>More Facilities</h2>
                            </div>
                                <div class="about-content3 mt-30">
                                    <div class="row justify-content-center align-items-center">
                                        <div class="col-md-6">
                                            <ul class="green mb-30">
                                                <li>Library</li>
                                                <li> Restaurant</li>
                                                <li>Bar</li>
                                                <li>Events & Activities</li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6">
                                            <ul class="green mb-30">
                                                <li>Spa Center</li>
                                                <li>Jacuzzi</li>
                                                <li>Sauna</li>
                                                <li>Wi-Fi Premise</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @endsection