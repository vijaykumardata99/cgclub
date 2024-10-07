<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Chhattisgarh Club Raipur | Add Member</title>
    <!--favicon-->
    <link rel="icon" href="{{ url('/') }}/adminassets/images/favicon-32x32.png" type="image/png" />
    <!--plugins-->
    <link href="{{ url('/') }}/adminassets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
    <link href="{{ url('/') }}/adminassets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
    <link href="{{ url('/') }}/adminassets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
    <link href="{{ url('/') }}/adminassets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
    <!-- loader-->
    <link href="{{ url('/') }}/adminassets/css/pace.min.css" rel="stylesheet" />
    <script src="{{ url('/') }}/adminassets/js/pace.min.js"></script>
    <!-- Bootstrap CSS -->
    <link href="{{ url('/') }}/adminassets/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&amp;display=swap" rel="stylesheet">
    <link href="{{ url('/') }}/adminassets/css/app.css" rel="stylesheet">
    <link href="{{ url('/') }}/adminassets/css/icons.css" rel="stylesheet">
    <!-- Theme Style CSS -->
    <link rel="stylesheet" href="{{ url('/') }}/adminassets/css/dark-theme.css" />
    <link rel="stylesheet" href="{{ url('/') }}/adminassets/css/semi-dark.css" />
    <link rel="stylesheet" href="{{ url('/') }}/adminassets/css/header-colors.css" />
    <!-- CSS -->
    <link rel="stylesheet" href="{{ url('/') }}/assets/css/style.css">
    {{-- <link rel="stylesheet" href="{{ url('/') }}/assets/css/responsive.css"> --}}
    <style>
        .container {
            margin: auto;
            width: 90%;
        }
        .order-2 {
            box-shadow: 0px 0px 10px lightgray;
            padding: 20px;
            margin-top: 20px;
            margin-bottom: 20px;
        }
        .section-title {
            margin-bottom: 2em;
        }
        .form-row {
          margin-bottom: 20px;
        }
        .entryarea {
          position: relative;
          height: 50px;
          line-height: 50px;
        }
        input, textarea {
          position: absolute;
          width: 100%;
          outline: none;
          /* font-size: 2em; */
          padding: 0 20px;
          line-height: 50px;
          transition: 0.1s ease;
          background: transparent;
          border: 1px solid gray;
          border-radius: 5px;
          z-index: 1111;
        }
        .labelline {
          position: absolute;
          /* font-size: 1.2em; */
          padding: 0 10px;
          margin: 0 15px;
          transition: 0.2s ease;
          background: #fff;
        }
        input[type="text"]:focus,
        input[type="text"]:valid, textarea:focus, textarea:valid {
          color: black;
          border: 1px solid green;
        }
        input[type="text"]:focus + .labelline,
        input[type="text"]:valid + .labelline,
        textarea:focus + .labelline, textarea:valid + .labelline {
          color: green;
          height: 30px;
          /* line-height: 30px; */
          transform: translate(-15px, -16px) scale(0.88);
          z-index: 1111;
        }
        .close {
            border: none;
            float: right;
            background: transparent;
        }
    </style>

</head>

<body>
    <div class="wrapper">
        @include ('admin.include.index-header2');
        <div class="page-wrapper">
            <div class="page-content">
                <!-- <section id="contact" class="contact-area after-none contact-bg pt-20 pb-20 p-relative fix">
                    <div class="container">
                        <div class="row justify-content-center align-items-center">
                            <div class="col-lg-12 order-2">
                                <div class="add-member-form"> -->
                                    @if(session('success'))
                                        <div class="alert alert-success alert-dismissible">
                                            <button type="button" class="close" data-bs-dismiss="alert" aria-hidden="true">×</button>
                                            {{ session('success') }}
                                        </div>
                                    @endif
                                    {{-- <div class="alert alert-warning alert-dismissible">
                                        <button type="button" class="close" data-bs-dismiss="alert" aria-hidden="true">×</button>
                                        <h5><i class="icon fa fa-exclamation-triangle"></i> Alert!</h5>
                                        {{ session('info') }}
                                    </div> --}}
                                    <div class="section-title center-align mb-40 text-center wow fadeInDown animated"
                                        data-animation=fadeInDown data-delay=.4s>
                                        <h4>
                                            Add Member
                                        </h4>
                                    </div>
                                    <form action="/admin/store-member" method="POST" class="member-form mt-30" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row form-row">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="entryarea">
                                                    <input type="text" required name="member_name">
                                                    <div class="labelline">Member Name</div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="entryarea">
                                                    <input type="text" required name="mobile_num">
                                                    <div class="labelline">Contact No.</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row form-row">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="entryarea">
                                                    <input type="text" required name="member_email_id">
                                                    <div class="labelline">Email ID</div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="entryarea">
                                                    <textarea name="member_address" required></textarea>
                                                    <div class="labelline">Address</div>
                                                </div>
                                            </div>
                                        </div>  <br>  
                                            <div class="col-lg-12">
                                                <div class="slider-btn">
                                                    <button class="btn ss-btn" data-animation="fadeInRight"
                                                        data-delay=.8s><span>Submit</span></button>
                                                </div>
                                            </div>
                                    </form>
                                <!-- </div>
                            </div>
                        </div>
                    </div>
                </section> -->
            </div>
        </div>
        @include ('admin.include.color-switcher');
    </div>

    <!-- Bootstrap JS -->
    <script src="{{ url('/') }}/adminassets/js/bootstrap.bundle.min.js"></script>
    <!--plugins-->
    <script src="{{ url('/') }}/adminassets/js/jquery.min.js"></script>
    <script src="{{ url('/') }}/adminassets/plugins/simplebar/js/simplebar.min.js"></script>
    <script src="{{ url('/') }}/adminassets/plugins/metismenu/js/metisMenu.min.js"></script>
    <script src="{{ url('/') }}/adminassets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
    <script src="{{ url('/') }}/adminassets/plugins/datatable/js/jquery.dataTables.min.js"></script>
    <script src="{{ url('/') }}/adminassets/plugins/datatable/js/dataTables.bootstrap5.min.js"></script>
    <!--app JS-->
    <script src="{{ url('/') }}/adminassets/js/app.js"></script>
    <script src="{{ url('/') }}/adminassets/js/index.js"></script>
</body>

</html>
