@extends('layouts.dashboard')

@section('title', 'Clubs')

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
                                <h2>List of Clubs</h2>
                                <div class=breadcrumb-wrap>
                                    <nav aria-label=breadcrumb>
                                        <ol class=breadcrumb>
                                            <li class=breadcrumb-item><a href="{{url ('/')}}">Home</a></li>
                                            <li class="breadcrumb-item active" aria-current=page>Clubs</li>
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
                            ~ List of clubs ~
                        </h2>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered" width="100%">
                            <thead>
                                <tr>
                                    <th>S. No.</th>
                                    <th>Name</th>
                                    <th>Location</th>
                                    <th>Number</th>
                                    <th>Email Id</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Ekta Club</td>
                                    <td>Ahmedabad</td>
                                    <td><a href="tel:07925370099">079 25370099</a></td>
                                    <td><a href="mailto:">clubreservations@ekaworld</a></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>ELLIS BRIDGE GYMKHANA</td>
                                    <td>Ahmedabad</td>
                                    <td><a href="tel:07926425240">079-26-425240</a>/<a href="tel:07926425241">41</a>/<a href="tel:07926425242">42</a></td>
                                    <td><a href="mailto:">info@ellisbridgegymkhana.com</a></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>GULMOHAR CLUB</td>
                                    <td>Ahmedabad</td>
                                    <td><a href="tel:9687628050">9687628050</a>/<a href="tel:9687628051">51</a>/<a href="tel:9687628052">52</a></td>
                                    <td><a href="mailto:">info@glumohargreens.com</a></td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>AHMEDNAGAR CLUB</td>
                                    <td>Ahmedabad</td>
                                    <td><a href="tel:02412323947">0241-2323947</a>/<a href="tel:02412323000">2323000</a></td>
                                    <td><a href="mailto:">achalmednagar@gmail.com</a></td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>ARERA CLUB</td>
                                    <td>Bhopal</td>
                                    <td><a href="tel:07552557294">0755 2557294</a></td>
                                    <td><a href="mailto:areraclub@hotmail.com">areraclub@hotmail.com</a></td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>BHUBANESWAR CLUB</td>
                                    <td>Bhopal</td>
                                    <td><a href="tel:06742392211">0674 2392211</a>/<a href="tel:06742391654">2391654</a>/<a href="tel:06742392277">2392277</a></td>
                                    <td><a href="mailto:info@bbsrclub.com">info@bbsrclub.com</a></td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>LOTUS CLUB</td>
                                    <td>Cochin</td>
                                    <td><a href="tel:04842352456">0484-2352456</a>/<a href="tel:04842366737">2366737</a></td>
                                    <td><a href="mailto:lotusclubcochin@yahoo.co.in">lotusclubcochin@yahoo.co.in</a></td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>CUTTACK CLUB</td>
                                    <td>Cuttack</td>
                                    <td><a href="tel:06712301041">0671 2301041</a>/<a href="tel:06712300007">2300007</a></td>
                                    <td><a href="mailto:cuttackelulägmail.com">cuttackelulägmail.com</a></td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>DARJEELING CLUB LTD.</td>
                                    <td>Darjeeling</td>
                                    <td><a href="tel:03542254348">0354 2254348</a>/<a href="tel:03542254349">2254349</a></td>
                                    <td><a href="mailto:darjclub@gmail.com">darjclub@gmail.com</a></td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>HUBLI GYMKHANA</td>
                                    <td>Hubli</td>
                                    <td><a href="tel:2366685">2366685</a>/<a href="tel:2362798">2362798</a></td>
                                    <td><a href="mailto:hubligymkhanaclub@gmail.com">hubligymkhanaclub@gmail.com</a></td>
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