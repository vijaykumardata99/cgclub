<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
    <title>Tower Allocation - Home Page</title>

    <style>
        #example2_paginate,
        #example2_filter {
            float: right;
        }
    </style>
</head>

<body>


    <!--wrapper-->
    <div class="wrapper">
        <!--sidebar wrapper -->

        @include ('admin.include.index-header2');


        <!--end header -->
        <!--start page wrapper -->
        <div class="page-wrapper">
            <div class="page-content">
                <div class="row">
                    <div class="col-xl-9 mx-auto">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                        <h6 class="mb-0 text-uppercase">Change Password</h6>
                        <hr />
                        <div class="card">
                            <div class="card-body">
                                <div class="p-4 border rounded">
                                    <form action="{{ url('admin/new/password')}}/{{ session('user_id') }}" method="POST">
                                        @csrf
                                        <div class="form-group mt-4 ml-4">
                                            <label for="password">Enter New Password</label>
                                            <input id="password" class="form-control" type="password" name="password" required><br><br>
                                    
                                            <label for="password_confirmation">Confirm Password</label>
                                            <input id="password_confirmation" class="form-control" type="password" name="password_confirmation" required><br><br>
                                    
                                            <button class="btn btn-primary">Submit</button>
                                        </div>
                                    </form>
                                    
                                </div>
                            </div>
                        </div>

                        <div class="overlay toggle-icon"></div>
                        <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
                        @include ('admin.include.color-switcher')
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
                    <!--app JS-->
</body>

</html>
