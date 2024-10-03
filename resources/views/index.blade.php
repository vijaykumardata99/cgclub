@extends('layouts.dashboard')

@section('title', 'Home')

@section('content')

<section id=home class="slider-area fix p-relative">
    <div class=slider-active style=background:#101010>
        <div class="single-slider slider-bg"
            style="background-image:url(assets/img/cg/nn1.jpg);background-size:cover">
            <div class=container>
                <div class="row">
                    <div class="col-lg-6 col-lg-offset-6">
                        <div class="slider-content s-slider-content mt-200">
                            <div class="slider-title">
                                <h2 data-animation=fadeInUp data-delay=.4s>More than a club... <br> an experience</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single-slider slider-bg"
            style="background-image:url(assets/img/cg/nn2.jpg);background-size:cover;">
            <div class=container>
                <div class="row">
                    <div class="col-lg-6 col-lg-offset-6">
                        <div class="slider-content s-slider-content mt-200">
                            <div class="slider-title">
                                <h2 data-animation=fadeInUp data-delay=.4s>Feels like... <br> Staying in home.</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single-slider slider-bg d-flex"
            style=background-image:url(assets/img/cg/nn3.jpg);background-size:cover>
            <div class=container>
                <div class="row">
                    <div class="col-lg-6 col-lg-offset-6">
                        <div class="slider-content s-slider-content mt-200">
                            <div class="slider-title">
                                <h2 data-animation=fadeInUp data-delay=.4s>Play for <br>competition, <br> Come back for
                                    friendship</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container-fluid" style="padding-right: 0px;"> 
        <div class="headertext">Upcoming Events</div> 
            <div>
                <marquee style="width:100%;color:#016117;background: antiquewhite;font-size: 18px;" 
                onmouseover="this.stop();" onmouseout="this.start();" 
                direction="left" behavior="scroll" scrollamount="10">
                <a href="assets/images/summer-camp.jpeg" target="_blank">Mansoon Sports Festival</a>
                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; |&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="assets/images/summer-camp.jpeg" target="_blank">Mansoon Sports Festival</a>
                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; |&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="assets/images/summer-camp.jpeg" target="_blank">Mansoon Sports Festival</a>
                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; |&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="assets/images/summer-camp.jpeg" target="_blank">Mansoon Sports Festival</a>
                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; |&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="assets/images/summer-camp.jpeg" target="_blank">Mansoon Sports Festival</a>
                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; |&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="assets/images/summer-camp.jpeg" target="_blank">Mansoon Sports Festival</a>
                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; |&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="assets/images/summer-camp.jpeg" target="_blank">Mansoon Sports Festival</a>
                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; |&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="assets/images/summer-camp.jpeg" target="_blank">Mansoon Sports Festival</a>
                 &nbsp;&nbsp;
                </marquee>
            </div>
        </div>
</section>
<section class="about-area about-p mt-40 pb-10 p-relative fix">
    <div class=animations-02><img src=assets/img/bg/an-img-02.png alt=contact-bg-an-02></div>
    <div class=container>
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="s-about-img p-relative wow fadeInLeft animated" data-animation=fadeInLeft
                    data-delay=.4s>
                    <img src=assets/img/features/about_img_02.png alt=img>
                    <div class=about-icon>
                        <img src=assets/img/features/about_img_03.png alt=img>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="about-content s-about-content wow fadeInRight animated pl-30"
                    data-animation=fadeInRight data-delay=.4s>
                    <div class="about-title second-title pb-25">
                        <h5>Welcome to </h5>
                        <h2>Chhattisgarh Club</h2>
                    </div>
                    <p>We at Chhattisgarh Club, take pride in mentioning ourselves as a century old social establishment, in Raipur - capital of Chhattisgarh State. Established in 1902 and spread across 16000 Sq. Mts., amidst the town. The legacy of the club is that the management of the club is designated to the senior officials of the state. The club houses all the modern amenities of sports, socializing, entertainment & more</p>
                    <p><strong>~ As People Say ~</strong> <br>
                        Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                    <div class="about-content3 mt-30">
                        <div class="row justify-content-center align-items-center">
                            <div class=col-md-12>
                                <div class=slider-btn>
                                    <a href="about.php" class="btn ss-btn smoth-scroll">  Know More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12"></div>
        </div>
    </div>
</section>
<section id=service-details2 class="pt-20 pb-40 p-relative" style=background-color:#f7f5f1>
    <div class=animations-01><img src=assets/img/bg/an-img-01.png alt=an-img-01></div>
    <div class=container>
        <div class="row align-items-center">
            <div class=col-lg-12>
                <div class="section-title center-align mb-10 text-center">
                    <h5>Our Features</h5>
                    <h2>~ Explore The Club ~</h2>
                </div>
            </div>
            <div class="features">
                <div class="features-child">
                    <div class="services-08-item">
                        <div class=services-icon2>
                            <img src=assets/img/icon/fe-icon01.png alt=img>
                        </div>
                        <div class=services-08-thumb>
                            <img src=assets/img/icon/fe-icon01.png alt=img>
                        </div>
                        <div class=services-08-content>
                            <h3>Friendly Service</h3>
                        </div>
                    </div>
                </div>
                <div class="features-child">
                    <div class="services-08-item">
                        <div class=services-icon2>
                            <img src=assets/img/icon/fe-icon04.png alt=img>
                        </div>
                        <div class=services-08-thumb>
                            <img src=assets/img/icon/fe-icon04.png alt=img>
                        </div>
                        <div class=services-08-content>
                            <h3>Restaurant & Bar</h3>
                        </div>
                    </div>
                </div>
                <div class="features-child">
                    <div class="services-08-item">
                        <div class=services-icon2>
                            <img src=assets/img/icon/fe-icon05.png alt=img>
                        </div>
                        <div class=services-08-thumb>
                            <img src=assets/img/icon/fe-icon05.png alt=img>
                        </div>
                        <div class=services-08-content>
                            <h3>Events & Activities</h3>
                        </div>
                    </div>
                </div>
                <div class="features-child">
                    <div class="services-08-item">
                        <div class=services-icon2>
                            <img src=assets/img/icon/fe-icon06.png alt=img>
                        </div>
                        <div class=services-08-thumb>
                            <img src=assets/img/icon/fe-icon06.png alt=img>
                        </div>
                        <div class=services-08-content>
                            <h3>Jacuzzi & SPA</h3>
                        </div>
                    </div>
                </div>
                <div class="features-child">
                    <div class="services-08-item">
                        <div class=services-icon2>
                            <img src=assets/img/icon/fe-icon07.png alt=img>
                        </div>
                        <div class=services-08-thumb>
                            <img src=assets/img/icon/fe-icon07.png alt=img>
                        </div>
                        <div class=services-08-content>
                            <h3>Cozy Rooms</h3>
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
          <div class="col-lg-3 col-md-6">
               <div class="single-post2 hover-zoomin mb-30 wow fadeInUp animated" data-animation="fadeInUp" data-delay=".4s">
                   <div class="blog-thumb2">
                       <a href="#"><img src="assets/img/cg/f1.jpg" alt="img"></a>
                   </div>
                   <div class="blog-content2">
                       <h4><a href="#">BILLIARDS & SNOOKER
                        </a></h4>
                       <p>Just don't miss the ball. Keep your eyes on the ball</p>
                   </div>
               </div>
           </div>
            <div class="col-lg-3 col-md-6">
               <div class="single-post2 mb-30 hover-zoomin wow fadeInUp animated" data-animation="fadeInUp" data-delay=".4s">
                   <div class="blog-thumb2">
                       <a href="#"><img src="assets/img/cg/f2.jpg" alt="img"></a>
                   </div>
                   <div class="blog-content2">
                       <h4><a href="#">GYM</a></h4>
                       <p>Building confidence. Building fitness.</p>
                   </div>
               </div>
           </div>
           <div class="col-lg-3 col-md-6">
               <div class="single-post2 mb-30 hover-zoomin wow fadeInUp animated" data-animation="fadeInUp" data-delay=".4s">
                   <div class="blog-thumb2">
                       <a href="#"><img src="assets/img/cg/f3.jpg" alt="img"></a>
                   </div>
                   <div class="blog-content2">
                       <h4><a href="#">DARBAR HALL</a></h4>
                       <p>A Darbar Hall is where memories shine</p>
                   </div>
               </div>
           </div>
       
          <div class="col-lg-3 col-md-6">
               <div class="single-post2 hover-zoomin mb-30 wow fadeInUp animated" data-animation="fadeInUp" data-delay=".4s">
                   <div class="blog-thumb2">
                       <a href="#"><img src="assets/img/cg/f4.jpg" alt="img"></a>
                   </div>
                   <div class="blog-content2">
                       <h4><a href="#">BADMINTON COURT</a></h4>
                       <p>To bring smiles to the faces of kids and adults alike.</p>
                   </div>
               </div>
           </div>
            <div class="col-lg-3 col-md-6">
               <div class="single-post2 mb-30 hover-zoomin wow fadeInUp animated" data-animation="fadeInUp" data-delay=".4s">
                   <div class="blog-thumb2">
                       <a href="#"><img src="assets/img/cg/f5.jpg" alt="img"></a>
                   </div>
                   <div class="blog-content2">
                       <h4><a href="#">Restaurant</a></h4>
                       <p>Flavors for royalty.</p>
                   </div>
               </div>
           </div>
           <div class="col-lg-3 col-md-6">
               <div class="single-post2 mb-30 hover-zoomin wow fadeInUp animated" data-animation="fadeInUp" data-delay=".4s">
                   <div class="blog-thumb2">
                       <a href="#"><img src="assets/img/cg/f6.jpg" alt="img"></a>
                   </div>
                   <div class="blog-content2">
                       <h4><a href="#">BAR & LOUNGE</a></h4>
                       <p>Feel the New kind of happiness</p>
                   </div>
               </div>
           </div>
           <div class="col-lg-3 col-md-6">
               <div class="single-post2 hover-zoomin mb-30 wow fadeInUp animated" data-animation="fadeInUp" data-delay=".4s">
                   <div class="blog-thumb2">
                       <a href="#"><img src="assets/img/cg/f1.jpg" alt="img"></a>
                   </div>
                   <div class="blog-content2">
                       <h4><a href="#">BILLIARDS & SNOOKER
                        </a></h4>
                       <p>Just don't miss the ball. Keep your eyes on the ball</p>
                   </div>
               </div>
           </div>
            <div class="col-lg-3 col-md-6">
               <div class="single-post2 mb-30 hover-zoomin wow fadeInUp animated" data-animation="fadeInUp" data-delay=".4s">
                   <div class="blog-thumb2">
                       <a href="#"><img src="assets/img/cg/f2.jpg" alt="img"></a>
                   </div>
                   <div class="blog-content2">
                       <h4><a href="#">GYM</a></h4>
                       <p>Building confidence. Building fitness.</p>
                   </div>
               </div>
           </div>
       </div>
   </div>
</section>
<section id="services" class="services-area pt-20 pb-40">
    <div class=container>
        <div class="row justify-content-center">
            <div class=col-xl-12>
                <div class="section-title center-align mb-50 text-center">
                    <h5>The pleasure of luxury</h5>
                    <h2>Rooms & Suites</h2>
                </div>
            </div>
        </div>
        <div class="row services-active mbb_nobtm">
            <div class="col-xl-3 col-md-3">
                <div class="single-services mb-30">
                    <div class=services-thumb>
                        <a class="gallery-link popup-image" href=assets/img/cg/r1.jpg>
                            <img src=assets/img/cg/r1.jpg alt=img>
                        </a>
                    </div>
                    <div class=services-content>
                        <div class=day-book>
                            <ul>
                                <li> ₹ 2500/Day</li>
                            </ul>
                        </div>
                        <h4><a href="booking.php">Super Deluxe Room</a></h4>
                        <div class="icon">
                            <ul>
                                <li><img src="assets/img/icon/sve-icon1.png" alt="img"></li>
                                <li><img src="assets/img/icon/sve-icon2.png" alt="img"></li>
                                <li><img src="assets/img/icon/sve-icon3.png" alt="img"></li>
                                <li><img src="assets/img/icon/sve-icon4.png" alt="img"></li>
                                <li><img src="assets/img/icon/sve-icon5.png" alt="img"></li>
                                <li><img src="assets/img/icon/sve-icon6.png" alt="img"></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-3">
                <div class="single-services mb-30">
                    <div class=services-thumb>
                        <a class="gallery-link popup-image" href=assets/img/cg/r2.jpg>
                            <img src=assets/img/cg/r2.jpg alt=img>
                        </a>
                    </div>
                    <div class=services-content>
                        <div class=day-book>
                            <ul>
                                <li> ₹ 2500/Day</li>
                            </ul>
                        </div>
                        <h4><a href="booking.php">Suite Room</a></h4>
                        <div class="icon">
                            <ul>
                                <li><img src="assets/img/icon/sve-icon1.png" alt="img"></li>
                                <li><img src="assets/img/icon/sve-icon2.png" alt="img"></li>
                                <li><img src="assets/img/icon/sve-icon3.png" alt="img"></li>
                                <li><img src="assets/img/icon/sve-icon4.png" alt="img"></li>
                                <li><img src="assets/img/icon/sve-icon5.png" alt="img"></li>
                                <li><img src="assets/img/icon/sve-icon6.png" alt="img"></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-3">
                <div class="single-services mb-30">
                    <div class=services-thumb>
                        <a class="gallery-link popup-image" href=assets/img/cg/r3.jpg>
                            <img src=assets/img/cg/r3.jpg alt=img>
                        </a>
                    </div>
                    <div class=services-content>
                        <div class=day-book>
                            <ul>
                                <li> ₹ 2000/Day</li>
                            </ul>
                        </div>
                        <h4><a href="booking.php">Deluxe Room</a></h4>
                        <div class="icon">
                            <ul>
                                <li><img src="assets/img/icon/sve-icon1.png" alt="img"></li>
                                <li><img src="assets/img/icon/sve-icon2.png" alt="img"></li>
                                <li><img src="assets/img/icon/sve-icon3.png" alt="img"></li>
                                <li><img src="assets/img/icon/sve-icon4.png" alt="img"></li>
                                <li><img src="assets/img/icon/sve-icon5.png" alt="img"></li>
                                <li><img src="assets/img/icon/sve-icon6.png" alt="img"></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-3">
                <div class="single-services mb-30">
                    <div class=services-thumb>
                        <a class="gallery-link popup-image" href=assets/img/cg/r4.jpg>
                            <img src=assets/img/cg/r4.jpg alt=img>
                        </a>
                    </div>
                    <div class=services-content>
                        <h4><a href="booking.php">Activity Room</a></h4>
                        <div class="icon">
                            <ul>
                                <li><img src="assets/img/icon/sve-icon2.png" alt="img"></li>
                                <li><img src="assets/img/icon/sve-icon3.png" alt="img"></li>
                                <li><img src="assets/img/icon/sve-icon4.png" alt="img"></li>
                                <li><img src="assets/img/icon/sve-icon5.png" alt="img"></li>
                                <li><img src="assets/img/icon/sve-icon6.png" alt="img"></li>
                            </ul>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="testimonial-area pt-20 pb-20 p-relative fix"
    style=background-image:url(assets/img/bg/testimonial-bg.png);background-size:cover>
    <div class=container>
        <div class=row>
            <div class=col-lg-12>
                <div class="section-title center-align mb-50 text-center">
                    <h5>Testimonials</h5>
                    <h2>What Our Happy Clients Says</h2>
                </div>
            </div>
            <div class=col-lg-12>
                <div class=testimonial-active>
                    <div class=single-testimonial>
                        <div class=testi-author>
                            <center><img src=assets/images/mr-amitabh-jain.jpg alt=img></center>
                            <div class=ta-info>
                                <h6>Amitabh Jain</h6>
                                <span>President</span>
                            </div>
                        </div>
                        <p>“Phasellus aliquam quis lorem amet dapibus feugiat vitae purus vitae efficitur.
                            Vestibulum sed elit id orci rhoncus ultricies. Morbi vitae semper consequat ipsum
                            semper quam”.</p>
                        <div class=qt-img>
                            <img src=assets/img/testimonial/qt-icon.png alt=img>
                        </div>
                    </div>
                    <div class=single-testimonial>
                        <div class=testi-author>
                        <center><img src=assets/images/k-c-Devasenapati.jpg alt=img></center>
                            <div class=ta-info>
                                <h6>K.C. Devasenapati</h6>
                                <span>Secretary</span>
                            </div>
                        </div>
                        <p>“Phasellus aliquam quis lorem amet dapibus feugiat vitae purus vitae efficitur.
                            Vestibulum sed elit id orci rhoncus ultricies. Morbi vitae semper consequat ipsum
                            semper quam”.</p>
                        <div class=qt-img>
                            <img src=assets/img/testimonial/qt-icon.png alt=img>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</section>
<section id="video" class="video-area pt-150 pb-150 p-relative" style="background-image:url(assets/images/bottle-pic.jpeg); background-repeat: no-repeat; background-position: center bottom; background-size:cover;">
            <!-- Lines -->
            <div class="content-lines-wrapper2">
                <div class="content-lines-inner2">
                    <div class="content-lines2"></div>
                </div>
            </div>
           <!-- Lines -->
    <div class="container">                   
         <div class="row">
            <div class="col-12">
                <div class="s-video-wrap">
                    <div class="s-video-content">
                        <a href="assets/images/bottle.mp4" class="popup-video"><img src="assets/img/play-button.png" alt="circle_right"></a>
                       
                    </div>
                </div>
                <div class="section-title center-align text-center">
                    <h2>
                     Sip, sip, hooray!
                    </h2>
                </div>
            </div>
            
        </div>
    </div>
</section>
<div class="brand-area pt-20 pb-20" style=background-color:#f7f5f1>
    <div class="row align-items-center">
        <div class=col-lg-12>
            <div class="section-title center-align mb-50 text-center wow fadeInDown animated"
                data-animation=fadeInDown data-delay=.4s>
                <h2>
                    Recent Activities
                </h2>
            </div>
        </div>
    </div>
    <div class=container>
        <div class="row brand-active mbb_nobtm">
            <div class="col-lg-3 col-md-3 pr-10">
                <div class="single-post2 hover-zoomin mb-30 wow fadeInUp animated" data-animation=fadeInUp
                    data-delay=.4s>
                    <div class=blog-thumb2>
                        <a href=#><img src=assets/images/1.jpeg alt=img></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 pr-10">
                <div class="single-post2 hover-zoomin mb-30 wow fadeInUp animated" data-animation=fadeInUp
                    data-delay=.4s>
                    <div class=blog-thumb2>
                        <a href=#><img src=assets/images/2.jpeg alt=img></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 pr-10">
                <div class="single-post2 hover-zoomin mb-30 wow fadeInUp animated" data-animation=fadeInUp
                    data-delay=.4s>
                    <div class=blog-thumb2>
                        <a href=#><img src=assets/images/3.jpeg alt=img></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 pr-10">
                <div class="single-post2 hover-zoomin mb-30 wow fadeInUp animated" data-animation=fadeInUp
                    data-delay=.4s>
                    <div class=blog-thumb2>
                        <a href=#><img src=assets/images/4.jpeg alt=img></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 pr-10">
                <div class="single-post2 hover-zoomin mb-30 wow fadeInUp animated" data-animation=fadeInUp
                    data-delay=.4s>
                    <div class=blog-thumb2>
                        <a href=#><img src=assets/images/5.jpeg alt=img></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 pr-10">
                <div class="single-post2 hover-zoomin mb-30 wow fadeInUp animated" data-animation=fadeInUp
                    data-delay=.4s>
                    <div class=blog-thumb2>
                        <a href=#><img src=assets/images/6.jpeg alt=img></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 pr-10">
                <div class="single-post2 hover-zoomin mb-30 wow fadeInUp animated" data-animation=fadeInUp
                    data-delay=.4s>
                    <div class=blog-thumb2>
                        <a href=#><img src=assets/images/7.jpeg alt=img></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 pr-10">
                <div class="single-post2 hover-zoomin mb-30 wow fadeInUp animated" data-animation=fadeInUp
                    data-delay=.4s>
                    <div class=blog-thumb2>
                        <a href=#><img src=assets/images/8.jpeg alt=img></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 pr-10">
                <div class="single-post2 hover-zoomin mb-30 wow fadeInUp animated" data-animation=fadeInUp
                    data-delay=.4s>
                    <div class=blog-thumb2>
                        <a href=#><img src=assets/images/9.jpeg alt=img></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 pr-10">
                <div class="single-post2 hover-zoomin mb-30 wow fadeInUp animated" data-animation=fadeInUp
                    data-delay=.4s>
                    <div class=blog-thumb2>
                        <a href=#><img src=assets/images/10.jpeg alt=img></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 pr-10">
                <div class="single-post2 hover-zoomin mb-30 wow fadeInUp animated" data-animation=fadeInUp
                    data-delay=.4s>
                    <div class=blog-thumb2>
                        <a href=#><img src=assets/images/11.jpeg alt=img></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 pr-10">
                <div class="single-post2 hover-zoomin mb-30 wow fadeInUp animated" data-animation=fadeInUp
                    data-delay=.4s>
                    <div class=blog-thumb2>
                        <a href=#><img src=assets/images/12.jpeg alt=img></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection



<!-- <a href="assets/images/summer-camp-video.mp4" class="float" target="_blank">
   <video width="400" controls autoplay muted class="my-float">
      <source src="assets/images/summer-camp-video.mp4" type="video/mp4">
      <source src="assets/images/summer-camp-video.mp4" type="video/ogg">
      Your browser does not support HTML video.
    </video>
</a> -->