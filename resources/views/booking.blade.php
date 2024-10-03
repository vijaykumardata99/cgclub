
@extends('layouts.dashboard')

@section('title', 'Programs')

@section('content')
        <section class="breadcrumb-area d-flex align-items-center" style=background-image:url(assets/img/bg/bdrc-bg.jpg)>
            <div class=container>
                <div class="row align-items-center">
                    <div class="col-xl-12 col-lg-12">
                        <div class="breadcrumb-wrap text-center">
                            <div class=breadcrumb-title>
                                <h2>Rooms & Darbar Hall Booking</h2>
                                <div class=breadcrumb-wrap>
                                    <nav aria-label=breadcrumb>
                                        <ol class=breadcrumb>
                                            <li class=breadcrumb-item><a href="{{url ('/')}}">Home</a></li>
                                            <li class="breadcrumb-item active" aria-current=page>Room Booking</li>
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
                <div class="row">
                    <div class="col-lg-7">
                        <div class="mt-10 mb-10">
                            <form action=# method=post
                                class="contact-form mt-30">
                                <div class=row>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="contact-field p-relative c-name mb-20">
                                            <label for="rooms">Select Rooms <small class="text-danger">*</small></label>
                                            <select type=text id=rooms name=rooms required>
                                                <option value="">Select Room</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="contact-field p-relative c-name mb-20">
                                            <label for="">Number of Rooms Required <small class="text-danger">*</small></label>
                                            <input type=number min="0 max=100" step="any" id=nor name=nor placeholder="Number Of Rooms" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="contact-field p-relative c-subject mb-20">
                                            <label for="">Number Of People <small class="text-danger">*</small></label>
                                            <input type=number min="0 max=100" step="any" id=nos name=nos placeholder="Number Of People" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="contact-field p-relative c-subject mb-20">
                                            <label for="">From Date <small>(Check In time 12:00 AM) *</small></label>
                                            <input type=date id=phone name=phone placeholder="Phone No." required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="contact-field p-relative c-subject mb-20">
                                            <label for="">To Date <small>(Check Out time 12:00 AM) *</small></label>
                                            <input type=date id=phone name=phone placeholder="Phone No." required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="contact-field p-relative c-name mb-20">
                                            <label for="">Guest Name <small class="text-danger">*</small></label>
                                            <input type=text id=gname name=gname placeholder="Guest Name" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="contact-field p-relative c-subject mb-20">
                                            <label for="">Guest Mobile <small class="text-danger">*</small></label>
                                            <input type=text id=gname name=gname placeholder="Guest Mobile" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="contact-field p-relative c-name mb-20">
                                            <label for="">Guest Email <small class="text-danger">*</small></label>
                                            <input type=text id=gname name=gname placeholder="Guest Email" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="contact-field p-relative c-subject mb-20">
                                            <label for="">Member Mobile No <small class="text-danger">*</small></label>
                                            <input type=text id=gname name=gname placeholder="Member Mobile No" required>
                                        </div>
                                    </div>
                                    <div class=col-lg-12>
                                        <div class=slider-btn>
                                            <button class="btn ss-btn" data-animation=fadeInRight
                                                data-delay=.8s><span>Book Now</span></button>
                                        </div>
                                        <address>
                                            Note : All Fields are Mandatory. Please fill in the details.The bookings are subject to availability & discretion of the Club.For any further clarifications, please contact : 0771-4081146
                                        </address>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <img src="assets/img/cg/booking.jpg" alt="">
                    </div>
                    
                </div>
            </div>
        </section>
        @endsection