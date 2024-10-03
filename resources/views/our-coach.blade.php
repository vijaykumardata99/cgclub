@extends('layouts.dashboard')

@section('title', 'Coach')

@section('content')

<style>
thead th{
    font-size: 23px;
    color: #644222;
}
table a:hover{
text-decoration: underline;
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
                                <h2>List of Coach</h2>
                                <div class=breadcrumb-wrap>
                                    <nav aria-label=breadcrumb>
                                        <ol class=breadcrumb>
                                            <li class=breadcrumb-item><a href="{{url ('/')}}">Home</a></li>
                                            <li class="breadcrumb-item active" aria-current=page>Coach</li>
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
                            ~ List of Coach ~
                        </h2>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered" width="100%">
                            <thead>
                                <tr>
                                    <th>Sports</th>
                                    <th>Coach Name</th>
                                    <th>Contact Number</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>BADMINTON</th>
                                    <td>MR. ANAND</td>
                                    <td><a href="tel:9770721226">9770721226</a></td>
                                </tr>
                                <tr>
                                    <th>TENNIS</th>
                                    <td>MR. TRINATH RAO</td>
                                    <td><a href="tel:8319419533">8319419533</a></td>
                                </tr>
                                <tr>
                                    <th>CRICKET</th>
                                    <td>MR. NARAYAN</td>
                                    <td><a href="tel:8319338002">8319338002</a></td>
                                </tr>
                                <tr>
                                    <th rowspan="2" style="vertical-align: middle;">SWIMMING POOL</th>
                                    <td>MR. MANI ADILE</td>
                                    <td><a href="tel:9098190343">9098190343</a></td>
                                </tr>
                                <tr>
                                    <!-- <td>SWIMMING POOL</td> -->
                                    <td>MISS KALASH THAKUR</td>
                                    <td><a href="tel:6261780111">6261780111</a></td>
                                </tr>
                                <tr>
                                    <th rowspan="2" style="vertical-align: middle;">SHOOTING RANGE</th>
                                    <td>MISS. SHAKTI</td>
                                    <td><a href="tel:7999899953">7999899953</a></td>
                                </tr>
                                <tr>
                                    <td>MR. SARFARAZ KHAN</td>
                                    <td><a href="tel:7225936892">7225936892</a></td>
                                </tr>
                                
                                <!-- <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td><a href="tel:"></a></td>
                                    <td><a href="mailto:"></a></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td><a href="tel:"></a></td>
                                    <td><a href="mailto:"></a></td>
                                </tr> -->

                                
                            </tbody>
                        </table>
                    </div>
                  </div>
               </div>
           </div>
        </section>
        @endsection