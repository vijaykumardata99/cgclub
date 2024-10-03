@extends('layouts.dashboard')

@section('title', 'Management')

@section('content')
        <section class="breadcrumb-area d-flex align-items-center" style=background-image:url(assets/img/bg/bdrc-bg.jpg)>
            <div class=container>
                <div class="row align-items-center">
                    <div class="col-xl-12 col-lg-12">
                        <div class="breadcrumb-wrap text-center">
                            <div class=breadcrumb-title>
                                <h2>Management</h2>
                                <div class=breadcrumb-wrap>
                                    <nav aria-label=breadcrumb>
                                        <ol class=breadcrumb>
                                            <li class=breadcrumb-item><a href="{{url ('/')}}">Home</a></li>
                                            <li class="breadcrumb-item active" aria-current=page>Management</li>
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
                        <p>The Club is managed and controlled by an Executive Committee elected under provisions of the club's constitution. President of the club is Ex. Office Chief Secretary of the State. The Executive Committee collectively takes decisions on substantial matters of management, memberships, events & relative subjects, in the best interest of the legacy, harmony & culture of the club. Mentioned below is the list of Executive Committee.</p>
                       </div>
                   </div>
               </div>
               <div class="row">
                  <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-bordered" width="100%">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Designation</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr><td>Shri Amitabh Jain (IAS)	</td><td>President</td></tr>
                                <tr><td>Shri Subrat Sahoo (IAS)	</td><td>Vice President</td></tr>
                                <tr><td>Shri Ashok Juneja (IPS)	</td><td>Vice President</td></tr>
                                <tr><td>Shri Sanjay Shukla (IFS)	</td><td>Honorary Vice-President</td></tr>
                                <tr><td>Shri K.C. Devasenapathi (IAS)</td><td>Secretary</td></tr>
                                <tr><td>Shri Alok Tiwari (IFS)	</td><td>Joint Secretary</td></tr>
                                <tr><td>Dr. Sanjay Alung (IAS)	</td><td>Member</td></tr>
                                <tr><td>Shri Amit Chaudhary	</td><td>Member</td></tr>
                                <tr><td>Shri Bharat Agrawal	</td><td>Member</td></tr>
                                <tr><td>Shri Kamal Sarda	</td><td>Member</td></tr>
                                <tr><td>Shri Nikhil Dhagat	</td><td>Member</td></tr>
                                <tr><td>Shri S. K. Gupta	</td><td>Member</td></tr>
                                <tr><td>Shri Sanjay Mehra	</td><td>Member</td></tr>
                                <tr><td>Shri Trilok Baradia	</td><td>Member</td></tr>
                            </tbody>
                        </table>
                    </div>
                  </div>
               </div>
           </div>
        </section>
        @endsection