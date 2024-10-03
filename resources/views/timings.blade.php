@extends('layouts.dashboard')

@section('title', 'Timings')

@section('content')
<style>
thead th{
    font-size: 23px;
    color: #644222;
}
table a:hover{
text-decoration: underline;
}
table{
    min-height: 214px;
}
th{
    vertical-align: middle;
}
.tble__1 td, th{
    vertical-align: middle;
}
td:first-child{
    font-weight: 500;
}
.skills-title h2{
    color: #644222;
    text-shadow: 2px 2px 4px #ffbd7c;
}

    </style>
        <section class="breadcrumb-area d-flex align-items-center" style=background-image:url(assets/img/bg/bdrc-bg.jpg)>
            <div class=container>
                <div class="row align-items-center">
                    <div class="col-xl-12 col-lg-12">
                        <div class="breadcrumb-wrap text-center">
                            <div class=breadcrumb-title>
                                <h2>Timings</h2>
                                <div class=breadcrumb-wrap>
                                    <nav aria-label=breadcrumb>
                                        <ol class=breadcrumb>
                                            <li class=breadcrumb-item><a href="{{url ('/')}}">Home</a></li>
                                            <li class="breadcrumb-item active" aria-current=page>Timings</li>
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
               
               <div class="row">
                  <div class="col-md-12">
                    <div class="skills-title pb-10 pt-10">
                        <h2>
                            ~ Swimming Pool Timing ~
                        </h2>
                    </div>
</div>
</div>
<div class="row">
                  <div class="col-md-6">
                    <div class="table-responsive tble__1">
                        <table class="table table-bordered" width="100%">
                            <thead>
                                <tr>
                                    <th colspan="2">Morning</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>6:00AM - 7:00AM</td>
                                    <td>Only for Professional Coaching</td>
                                </tr>
                                <tr>
                                    <td>7:00AM - 8:00AM</td>
                                    <td>Members Only</td>
                                </tr>
                                <tr>
                                    <td>8:00AM - 9:00AM</td>
                                    <td>General (Guest & Members)</td>
                                </tr>           
                                
                            </tbody>
                        </table>
                    </div>
</div>
<div class="col-md-6">

                    <div class="table-responsive">
                        <table class="table table-bordered" width="100%">
                            <thead>
                                <tr>
                                    <th colspan="2">Evening</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>4:30PM - 5:30PM</td>
                                    <td>Only for Professional Coaching</td>
                                </tr>
                                <tr>
                                    <td>5:30PM - 6:30PM</td>
                                    <td>Ladies Only</td>
                                </tr>
                                <tr>
                                    <td>6:30PM - 8:30PM</td>
                                    <td>Members Only</td>
                                </tr>  
                                <tr>
                                    <td>8:30PM - 9:30PM</td>
                                    <td>General (Guest & Members)</td>
                                </tr>           
                                
                            </tbody>
                        </table>
                    </div>
</div>
</div>
                  </div>
               </div>
           </div>
        </section>
        @endsection