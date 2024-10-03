@extends('layouts.dashboard')

@section('title', 'Contact')

@section('content')
        <section class="breadcrumb-area d-flex align-items-center" style=background-image:url(assets/img/bg/bdrc-bg.jpg)>
            <div class=container>
                <div class="row align-items-center">
                    <div class="col-xl-12 col-lg-12">
                        <div class="breadcrumb-wrap text-center">
                            <div class=breadcrumb-title>
                                <h2>Contact Us</h2>
                                <div class=breadcrumb-wrap>
                                    <nav aria-label=breadcrumb>
                                        <ol class=breadcrumb>
                                            <li class=breadcrumb-item><a href="{{url ('/')}}">Home</a></li>
                                            <li class="breadcrumb-item active" aria-current=page>Contact</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id=contact class="contact-area after-none contact-bg pt-20 pb-20 p-relative fix">
            <div class=container>
                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-4 order-1">
                        <div class=contact-info>
                            <div class="single-cta pb-30 mb-30 wow fadeInUp animated"
                                data-animation="fadeInDown animated" data-delay=.2s>
                                <div class=f-cta-icon>
                                    <i class="far fa-map"></i>
                                </div>
                                <h5>Office Address :</h5>
                                <p>Civil Lines, Raipur, Chhattisgarh 492001</p>
                            </div>
                            <div class="single-cta pb-30 mb-30 wow fadeInUp animated"
                                data-animation="fadeInDown animated" data-delay=.2s>
                                <div class=f-cta-icon>
                                    <i class="far fa-phone"></i>
                                </div>
                                <h5>Office :</h5>
                                <p>0771 4035243</p>
                            </div>
                            <div class="single-cta wow fadeInUp animated" data-animation="fadeInDown animated"
                                data-delay=.2s>
                                <div class=f-cta-icon>
                                    <i class="far fa-envelope-open"></i>
                                </div>
                                <h5>Message Us</h5>
                                <p> <a href=#>chhattisgarhclub@rediffmail.com</a></a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 order-2">
                        <div class=contact-bg02>
                            <div class="section-title center-align mb-40 text-center wow fadeInDown animated"
                                data-animation=fadeInDown data-delay=.4s>
                                <h2>
                                    Get In Touch
                                </h2>
                            </div>
                            <form action=# method=post
                                class="contact-form mt-30">
                                <div class=row>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="contact-field p-relative c-name mb-20">
                                            <input type=text id=firstn name=firstn placeholder="First Name" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="contact-field p-relative c-subject mb-20">
                                            <input type=text id=email name=email placeholder=Eamil required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="contact-field p-relative c-subject mb-20">
                                            <input type=text id=phone name=phone placeholder="Phone No." required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="contact-field p-relative c-subject mb-20">
                                            <input type=text id=subject name=subject placeholder=Subject>
                                        </div>
                                    </div>
                                    <div class=col-lg-12>
                                        <div class="contact-field p-relative c-message mb-30">
                                            <textarea name=message id=message cols=30 rows=10
                                                placeholder="Write comments"></textarea>
                                        </div>
                                        <div class=slider-btn>
                                            <button class="btn ss-btn" data-animation=fadeInRight
                                                data-delay=.8s><span>Submit Now</span></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="newslater-area p-relative pt-10 pb-10" style=background-color:#f7f5f1>
            <div class=animations-01><img src=assets/img/bg/an-img-07.png alt=contact-bg-an-05></div>
            <div class=container>
                <div class="row justify-content-center align-items-center text-center">
                    <div class="col-xl-9 col-lg-9">
                        <div class="section-title center-align mb-40 text-center wow fadeInDown animated"
                            data-animation=fadeInDown data-delay=.4s>
                            <h5>Location </h5>
                            <h2>
                                Find Us on Map
                            </h2>
                        </div>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d29750.583856438734!2d81.652793!3d21.238867!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a28dd0eeaaaaaab%3A0x29fa84d62a5389e3!2sChhattisgarh%20Club!5e0!3m2!1sen!2sus!4v1717404697111!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </section>
  @endsection