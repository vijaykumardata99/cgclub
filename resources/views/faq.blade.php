@extends('layouts.dashboard')

@section('title', 'FAQ')

@section('content')
            <!-- breadcrumb-area -->
            <section class="breadcrumb-area d-flex align-items-center" style="background-image:url(assets/img/bg/bdrc-bg.jpg)">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-12 col-lg-12">
                            <div class="breadcrumb-wrap text-center">
                                <div class="breadcrumb-title">
                                    <h2>Faq</h2>    
                                    <div class="breadcrumb-wrap">
                              
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{url ('/')}}">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Faq </li>
                                    </ol>
                                </nav>
                            </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </section>
            <!-- breadcrumb-area-end -->
			 <!-- faq-area -->
            <section id="faq" class="faq-area pt-120 pb-120">             
                <div class="container">   
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="faq-wrap">
                                <div class="accordion" id="accordionExample">
                                    <div class="card">
                                        <div class="card-header" id="headingOne">
                                            <h2 class="mb-0">
                                                <button class="faq-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                                                    Breaking The Rules Using SQLite To Demo Web?
                                                </button>
                                            </h2>
                                        </div>
                                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample" style="">
                                            <div class="card-body">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                                aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingTwo">
                                            <h2 class="mb-0">
                                                <button class="faq-btn" type="button" data-bs-toggle="collapse"  data-bs-target="#collapseTwo">
                                                    Monthly Web Development Update Pragmatic Releasing?
                                                </button>
                                            </h2>
                                        </div>
                                        <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-bs-parent="#accordionExample" style="">
                                            <div class="card-body">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                                aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingThree">
                                            <h2 class="mb-0">
                                                <button class="faq-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree">
                                                    How To Use Underlined Text To Improve User Experience
                                                </button>
                                            </h2>
                                        </div>
                                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample" style="">
                                            <div class="card-body">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                                aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingFour">
                                            <h2 class="mb-0">
                                                <button class="faq-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour">
                                                    Understanding CSS Layout And The Block Formatting
                                                </button>
                                            </h2>
                                        </div>
                                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                            <div class="card-body">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                                aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="faq-wrap">
                                <div class="accordion" id="accordionExample1">
                                    <div class="card">
                                        <div class="card-header" id="headingfive">
                                            <h2 class="mb-0">
                                                <button class="faq-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefive">
                                                    Breaking The Rules Using SQLite To Demo Web?
                                                </button>
                                            </h2>
                                        </div>
                                        <div id="collapsefive" class="collapse" aria-labelledby="headingfive" data-bs-parent="#accordionExample1" style="">
                                            <div class="card-body">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                                aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingSix">
                                            <h2 class="mb-0">
                                                <button class="faq-btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix">
                                                    Monthly Web Development Update Pragmatic Releasing?
                                                </button>
                                            </h2>
                                        </div>
                                        <div id="collapseSix" class="collapse show" aria-labelledby="headingSix" data-bs-parent="#accordionExample" style="">
                                            <div class="card-body">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                                aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingSeveen">
                                            <h2 class="mb-0">
                                                <button class="faq-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeveen">
                                                    How To Use Underlined Text To Improve User Experience
                                                </button>
                                            </h2>
                                        </div>
                                        <div id="collapseSeveen" class="collapse" aria-labelledby="headingSeveen" data-bs-parent="#accordionExample" style="">
                                            <div class="card-body">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                                aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingEighte">
                                            <h2 class="mb-0">
                                                <button class="faq-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEighte">
                                                    Understanding CSS Layout And The Block Formatting
                                                </button>
                                            </h2>
                                        </div>
                                        <div id="collapseEighte" class="collapse" aria-labelledby="headingEighte" data-bs-parent="#accordionExample">
                                            <div class="card-body">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                                aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                      
                        
                    </div>
                </div>
            </section>
            <!-- faq-area-end -->  
            
         <!-- newslater-area -->
            <section class="newslater-area p-relative pt-120 pb-120" style="background-color: #f7f5f1;">
                <div class="animations-01"><img src="assets/img/bg/an-img-07.png" alt="contact-bg-an-05"></div>
                <div class="container">
                    <div class="row justify-content-center align-items-center text-center">
                        <div class="col-xl-9 col-lg-9">
                            <div class="section-title center-align mb-40 text-center wow fadeInDown animated" data-animation="fadeInDown" data-delay=".4s">
                                 <h5>Newsletter</h5>
                                <h2>
                                    Get Best Offers On The Hotel
                                </h2>
                                <p>With the subscription, enjoy your favourite Hotels without having to think about it</p>
                            </div>
                            <form name="ajax-form" id="contact-form4" action="#" method="post" class="contact-form newslater">
                               <div class="form-group">
                                  <input class="form-control" id="email2" name="email" type="email" placeholder="Your Email Address" value="" required=""> 
                                  <button type="submit" class="btn btn-custom" id="send2">Subscribe Now</button>
                               </div>
                               <!-- /Form-email -->	
                            </form>
                        </div>
                       
                    </div>
                   
                </div>
            </section>
            <!-- newslater-aread-end -->
                <!-- team-area -->
            <section class="team-area2 fix p-relative pt-105 pb-80">  
                <div class="container">  
                    <div class="row">   
                        <div class="col-lg-12 p-relative">
                            <div class="section-title center-align mb-40 text-center wow fadeInDown animated" data-animation="fadeInDown" data-delay=".4s">
                                 <h5>Our Team</h5>
                                <h2>
                                     Best Expert Hotel
                                </h2>
                                <p>Proin consectetur non dolor vitae pulvinar. Pellentesque sollicitudin dolor eget neque viverra, sed interdum metus interdum. Cras lobortis pulvinar dolor, sit amet ullamcorper dolor iaculis vel </p>
                            </div>
                        </div>                        
                         
                    </div>
                   <div class="row team-active">                   
                        <div class="col-xl-4 col-md-6">
                            <div class="single-team mb-40" >
                                <div class="team-thumb">
                                    <div class="brd">
                                         <img src="assets/img/team/team01.jpg" alt="img">
                                        
                                    </div>
                                </div>
                                <div class="team-info">
                                    <h4>Howard Holmes</h4>
                                    <p>Designer</p>
                                    <div class="team-social">
                                        <ul>
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li> 
                                            <li> <a href="#"><i class="fab fa-twitter"></i></a></li>   
                                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>   
                                        </ul>       
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="single-team mb-40" >
                                <div class="team-thumb">
                                    <div class="brd">
                                        <img src="assets/img/team/team02.jpg" alt="img">
                                    </div>                                     
                                </div>
                                <div class="team-info">
                                    <h4>Ella Thompson</h4>
                                    <p>Designer</p>
                                    <div class="team-social">
                                        <ul>
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li> 
                                            <li> <a href="#"><i class="fab fa-twitter"></i></a></li>   
                                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>   
                                        </ul>       
                                    </div>
                                </div>
                            </div>
                        </div>
                       <div class="col-xl-4 col-md-6">
                            <div class="single-team mb-40" >
                                <div class="team-thumb">
                                    <div class="brd">
                                        <img src="assets/img/team/team03.jpg" alt="img">
                                    </div>
                                    
                                </div>
                                <div class="team-info">
                                    <h4>Vincent Cooper</h4>
                                    <p>Designer</p>
                                    <div class="team-social">
                                        <ul>
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li> 
                                            <li> <a href="#"><i class="fab fa-twitter"></i></a></li>   
                                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>   
                                        </ul>       
                                    </div>
                                </div>
                            </div>
                        </div>
                         <div class="col-xl-4 col-md-6">
                            <div class="single-team mb-40" >
                                <div class="team-thumb">
                                    <div class="brd">
                                         <img src="assets/img/team/team04.jpg" alt="img">
                                    </div>
                                
                                </div>
                                <div class="team-info">
                                    <h4>Danielle Bryant</h4>
                                    <p>Designer</p>
                                    <div class="team-social">
                                        <ul>
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li> 
                                            <li> <a href="#"><i class="fab fa-twitter"></i></a></li>   
                                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>   
                                        </ul>       
                                    </div>
                                </div>
                            </div>
                        </div>
                       <div class="col-xl-4 col-md-6">
                            <div class="single-team mb-40" >
                                <div class="team-thumb">
                                    <div class="brd">
                                        <img src="assets/img/team/team05.jpg" alt="img">
                                    </div>
                                    
                                </div>
                                <div class="team-info">
                                    <h4>Vincent Cooper</h4>
                                    <p>Designer</p>
                                    <div class="team-social">
                                        <ul>
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li> 
                                            <li> <a href="#"><i class="fab fa-twitter"></i></a></li>   
                                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>   
                                        </ul>       
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </section>
            @endsection