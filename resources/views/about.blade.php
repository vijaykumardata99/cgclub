@extends('layouts.dashboard')

@section('title', 'About Us')

@section('content')
<style>
    .blog-content2 {
        padding: 15px 10px;
        position: relative;
        background: #fff;
        border: 1px solid #b7b7b7;
        min-height: 210px;
    }
</style>
<section class="breadcrumb-area d-flex align-items-center" style=background-image:url(assets/img/bg/bdrc-bg.jpg)>
    <div class=container>
        <div class="row align-items-center">
            <div class="col-xl-12 col-lg-12">
                <div class="breadcrumb-wrap text-center">
                    <div class=breadcrumb-title>
                        <h2>About Us</h2>
                        <div class=breadcrumb-wrap>
                            <nav aria-label=breadcrumb>
                                <ol class=breadcrumb>
                                    <li class=breadcrumb-item><a href="{{url ('/')}}">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current=page>About Us</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="about-area about-p pt-20 pb-20 p-relative fix">
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
                        <h5>ABOUT CHHATTISGARH CLUB</h5>
                        <h2>Over a century old tradition & legacy of patronizing</h2>
                    </div>
                    <p>We at Chhattisgarh Club, take pride in mentioning ourselves as a century old social establishment, in Raipur - capital of Chhattisgarh State. The club humbly acknowledges & extends its gratitude towards its esteemed Patrons, Members & Guests, who have contributed with their plausible time & efforts to build the aura & ambience of the club, standing tall and accomodating to strong relationships & more.</p>
                    <p>Established in 1902 and spread across 16000 Sq. Mts., amidst the town. The legacy of the club, compells us to designate the management by the senior officials of the state. The club houses all the modern amenities of sports, socializing, entertainment & more. Adding feathers to the crown, are the events celebrated at the club, with whole-hearted participation of our members & families, making them memorable forever.</p>
                    <div class="about-content3 mt-30">
                        <div class="row justify-content-center align-items-center">
                            <div class=col-md-12>
                                <ul class="green mb-30">
                                    <li> 24 Month / 24,000km Nationwide Warranty monotone</li>
                                    <li> Curabitur dapibus nisl a urna congue, in pharetra urna accumsan.</li>
                                    <li> Customer Rewards Program and excellent technology</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id=skill class="skill-area p-relative fix" style=background:#291d16>
    <div class=animations-01><img src=assets/img/bg/an-img-06.png alt=contact-bg-an-05></div>
    <div class=container>
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="skills-content s-about-content">
                    <div class="skills-title pb-10 pt-10">
                        <h2>
                            ~ The Paradigms ~
                        </h2>
                    </div>
                    <p>We at Chhattisgarh Club choose to follow certain parameters in memberships & patronage. As much we wish to enhance the company of elite personalities from diversified sectors & professions, the parameters become as much significant, further making us more responsible in creating the value of harmony among ourselves, as a group. We shall be happy to adress your queries for memberships and shall assist you with the quintessential pointers.</p>
                    <p>We also take pride in following the requisite code-of-conduct while patronizing. The club also has multiple associations with other clubs (Affiliated Clubs Program) towards increasing the visibility and services extension.</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 pr-30">
                <div class="skills-img wow fadeInRight animated" data-animation=fadeInRight data-delay=.4s>
                    <img src=assets/img/cg/1.jpg alt=img class=img>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="services" class="services-area pt-120 pb-90">
    <div class="container">
        <div class="row align-items-center">
            <div class=col-lg-12>
                <div class="section-title center-align mb-50 text-center wow fadeInDown animated"
                    data-animation=fadeInDown data-delay=.4s>
                    <h2>
                        ~ The Moments ~
                    </h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4 col-md-6">
                <div class="single-services ser-m mb-30">
                    <div class="services-thumb">
                        <a class="gallery-link popup-image" href="assets/img/gallery/protfolio-img01.JPG">
                        <img src="assets/img/gallery/protfolio-img01.JPG" alt="img">
                        </a>
                    </div>
                </div>  
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="single-services ser-m mb-30">
                    <div class="services-thumb">
                        <a class="gallery-link popup-image" href="assets/img/gallery/protfolio-img02.JPG">
                        <img src="assets/img/gallery/protfolio-img02.JPG" alt="img">
                        </a>
                    </div>
                </div>  
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="single-services ser-m mb-30">
                    <div class="services-thumb">
                        <a class="gallery-link popup-image" href="assets/img/gallery/protfolio-img03.JPG">
                        <img src="assets/img/gallery/protfolio-img03.JPG" alt="img">
                        </a>
                    </div>
                </div>  
            </div>
        </div>
    </div>
</section>
<section id=blog class="blog-area p-relative fix pt-20 pb-20">
    <div class=animations-02><img src=assets/img/bg/an-img-06.png alt=contact-bg-an-05></div>
    <div class=container>
        <div class="row align-items-center">
            <div class=col-lg-12>
                <div class="section-title center-align mb-50 text-center wow fadeInDown animated"
                    data-animation=fadeInDown data-delay=.4s>
                    <h2>
                       ~ The Info ~
                    </h2>
                </div>
            </div>
        </div>
        <div class=row>
            <div class="col-lg-4 col-md-6">
                <div class="single-post2 hover-zoomin mb-30 wow fadeInUp animated" data-animation=fadeInUp
                    data-delay=.4s>
                    <div class=blog-content2>
                        <h4><a href=blog-details.php>MANAGEMENT</a></h4>
                        <p>The Club is managed and controlled by an Executive Committee elected under provisions of the club's constitution. President of the club is Ex. Office Chief Secretary of the State.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-post2 hover-zoomin mb-30 wow fadeInUp animated" data-animation=fadeInUp
                    data-delay=.4s>
                    <div class=blog-content2>
                        <h4><a href=blog-details.php>LEGAL</a></h4>
                        <p>Established in 1902 <br>
                            Registered under 1973 Act of Firms & Societies <br>
                            Registration # : 6435/01.04.1978 <br>
                            Purpose: Family, Sports, Recreational, Social & Cultural activities
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-post2 hover-zoomin mb-30 wow fadeInUp animated" data-animation=fadeInUp
                    data-delay=.4s>
                    <div class=blog-content2>
                        <h4><a href=blog-details.php>OTHERS</a></h4>
                        <p>Spread in a whopping 16000 Sq. Mts. 
                            (approx. 4 Acres) <br><br>
                            <b>Operating Time</b> 
                            06:00 AM to 11:00 PM
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection