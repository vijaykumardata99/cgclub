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
    <!-- <link rel="stylesheet" href="{{ url('/') }}/assets/css/style.css"> -->
    {{-- <link rel="stylesheet" href="{{ url('/') }}/assets/css/responsive.css"> --}}
   
       

</head>

<body>
    <div class="wrapper">
        @include ('admin.include.index-header2');
        <div class="page-wrapper">
            <div class="page-content">
                <!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Coach</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Add New Coach</li>
							</ol>
						</nav>
					</div>
				</div>
				<!--end breadcrumb-->
                <div class="card">
						  <div class="card-body p-4">
							  <!-- <h5 class="card-title">Add New Product</h5>
							  <hr/> -->
							   <div class="form-body mt-4">
								<div class="row">
								   <div class="col-lg-12">
								   <div class="border border-3 p-4 rounded">
                                   <form autocomplete="off" enctype="multipart/form-data" id="submitForm" action="" method="POST">
                                        
                                        @csrf
                                        <div class="card-body">
                                            @if (session('success'))
                                            <div class="alert alert-success alert-dismissible">
                                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                                <h5><i class="icon fas fa-check"></i> Success!</h5>
                                                {{ session('success') }}
                                            </div>
                                            @endif
                                            @if (session('info'))
                                            <div class="alert alert-danger alert-dismissible">
                                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                                <h5><i class="icon fas fa-exclamation-triangle"></i> Alert!</h5>
                                                {{ session('info') }}
                                            </div>
                                            @endif
                                            <div class="row">

                                                <div class="form-group col-md-4">
                                                    <label>Coach Name</label>
                                                    <input type="text" class="form-control text-left" placeholder="Enter Coach Name"
                                                        id="coach_name" name="coach_name">
                                                    <small class="text-danger">{{ $errors->first('coach_name') }}</small>
                                                </div>

                                                <div class="form-group col-md-4">
                                                    <label for="mobile">Mobile Number</label>
                                                    <input type="text" class="form-control" placeholder="Contact Number" id="coach_num"
                                                        name="coach_num" maxlength="10">
                                                    <small class="text-danger">{{ $errors->first('coach_num') }}</small>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label>Sports Name</label>
                                                    <select class="form-control select2" style="width: 100%;" id="sports_name"
                                                        name="sports_name">
                                                        <option value="">--Select Sports Name--</option>
                                                        <option value="BADMINTON">
                                                        BADMINTON
                                                        </option>
                                                        <option value="TENNIS">
                                                        TENNIS
                                                        </option>
                                                        <option value="CRICKET">
                                                        CRICKET
                                                        </option>
                                                    </select>
                                                    <small class="text-danger">{{ $errors->first('sports_name') }}</small>
                                                </div>

                                                <div class="form-group col-md-4">
                                                    <label for="email">Designation</label>
                                                    <input type="text" class="form-control" placeholder="Enter Designation" id="designation" name="designation">
                                                    <small class="text-danger">{{ $errors->first('designation') }}</small>
                                                </div>
                                            </div>
                                                <div class="col-6">
                                                <button type="submit" class="btn btn-primary" value="submit"
                                                    name="btnSubmit">Submit</button>
                                                <button type="reset" class="btn btn-danger">Cancel</button>
                                                </div>
                                        </div>
                                    </form>
									</div>
								   </div>
								   
							  </div> 
						  </div>
						  </div>
					   </div><!--end row-->
					</div>
				  </div>
			  </div>
            </div>
        </div>
        <!-- @include ('admin.include.color-switcher'); -->
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
