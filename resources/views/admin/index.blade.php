<!doctype html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Chhattisgarh Club Raipur | Admin Dashboard</title>
      <!--favicon-->
      {{-- <link rel="icon" href="{{ url('/') }}/adminadminassets/images/favicon-32x32.png" type="image/png" /> --}}
      <!--plugins-->
      <link href="{{ url('/') }}/adminassets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet"/>
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
      <!-- Font Awesome -->
      <link rel="stylesheet" href="{{ url('/') }}/assets/fontawesome/css/all.min.css">
      <style>
         .close {
            border: none;
            float: right;
            background: transparent;
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
               {{-- @if(session('success'))
                  <div class="alert alert-success alert-dismissible">
                     <button type="button" class="close" data-bs-dismiss="alert" aria-hidden="true">×</button>
                     {{ session('success') }}
                  </div>
               @endif --}}
               
               <div class="row row-cols-1 row-cols-md-2 row-cols-xl-4">
                  <div class="col">
                     <div class="card radius-10 bg-gradient-deepblue">
                        
                        <div class="card-body">
                           <div class="d-flex align-items-center">
                              <h5 class="mb-0 text-white">631</h5>
                              <div class="ms-auto">
                                 <i class='bx bx-group fs-3 text-white'></i>
                              </div>
                           </div>
                           <div class="progress my-3 bg-light-transparent" style="height:3px;">
                              <div class="progress-bar bg-white" role="progressbar" style="width: 55%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                           </div>
                           <div class="d-flex align-items-center text-white">
                              <p class="mb-0">Members</p>
                              {{-- <p class="mb-0 ms-auto">+4.2%<span><i class='bx bx-up-arrow-alt'></i></span></p> --}}
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col">
                     <div class="card radius-10 bg-gradient-orange">
                        <div class="card-body">
                           <div class="d-flex align-items-center">
                              <h5 class="mb-0 text-white">40</h5>
                              <div class="ms-auto">
                                 <i class='bx bx-group fs-3 text-white'></i>
                              </div>
                           </div>
                           <div class="progress my-3 bg-light-transparent" style="height:3px;">
                              <div class="progress-bar bg-white" role="progressbar" style="width: 55%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                           </div>
                           <div class="d-flex align-items-center text-white">
                              <p class="mb-0">Coach</p>
                              {{-- <p class="mb-0 ms-auto">+1.2%<span><i class='bx bx-up-arrow-alt'></i></span></p> --}}
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col">
                     <div class="card radius-10 bg-gradient-ohhappiness">
                        <div class="card-body">
                           <div class="d-flex align-items-center">
                              <h5 class="mb-0 text-white">10</h5>
                              <div class="ms-auto">
                                 <i class='bx bx-home fs-3 text-white'></i>
                              </div>
                           </div>
                           <div class="progress my-3 bg-light-transparent" style="height:3px;">
                              <div class="progress-bar bg-white" role="progressbar" style="width: 55%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                           </div>
                           <div class="d-flex align-items-center text-white">
                              <p class="mb-0">Rooms</p>
                              {{-- <p class="mb-0 ms-auto">+5.2%<span><i class='bx bx-up-arrow-alt'></i></span></p> --}}
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col">
                     <div class="card radius-10 bg-gradient-ibiza">
                        <div class="card-body">
                           <div class="d-flex align-items-center">
                              <h5 class="mb-0 text-white">350</h5>
                              <div class="ms-auto">
                                 <i class='bx bx-envelope fs-3 text-white'></i>
                              </div>
                           </div>
                           <div class="progress my-3 bg-light-transparent" style="height:3px;">
                              <div class="progress-bar bg-white" role="progressbar" style="width: 55%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                           </div>
                           <div class="d-flex align-items-center text-white">
                              <p class="mb-0">Due List</p>
                              {{-- <p class="mb-0 ms-auto">+2.2%<span><i class='bx bx-up-arrow-alt'></i></span></p> --}}
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
				
            </div>
         </div>

         <div class="overlay toggle-icon"></div>
         <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>

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