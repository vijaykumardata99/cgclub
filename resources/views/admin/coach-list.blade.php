<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Chhattisgarh Club Raipur | Coach List</title>
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
    {{-- <link rel="stylesheet" href="{{ url('/') }}/assets/css/style.css"> --}}
    <style>
        .container {
            margin: auto;
            width: 95%;
        }
        .order-2 {
            box-shadow: 0px 0px 10px lightgray;
            padding: 20px;
            margin-top: 20px;
            margin-bottom: 20px;
        }
        .section-title {
            /* margin-bottom: 2em; */
            padding: 5px;
            margin-bottom: 10px;
            background: lightskyblue;
        }
        .add-coach-form {
            overflow-x: auto;
        }
    </style>

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
								<li class="breadcrumb-item active" aria-current="page">List Coach</li>
							</ol>
						</nav>
					</div>
				</div>
				<!--end breadcrumb-->
                <section id="contact" class="contact-area after-none contact-bg pt-20 pb-20 p-relative fix">
                    <div class="container">
                        <div class="row justify-content-center align-items-center">
                            <div class="col-lg-12 order-2">
                                <div class="add-coach-form">
                                    @if(session('success'))
                                        <div class="alert alert-success alert-dismissible">
                                            <button type="button" class="close" data-bs-dismiss="alert" aria-hidden="true">×</button>
                                            {{ session('success') }}
                                        </div>
                                    @endif
                                    <div class="section-title center-align mb-40 text-center wow fadeInDown animated"
                                        data-animation=fadeInDown data-delay=.4s>
                                        <h4>
                                            Coach List
                                        </h4>
                                    </div>
                                    <table id="example2" class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>SNO.</th>
                                                <th>Name</th>
                                                <th>Mobile No.</th>
                                                <th>Email Id</th>
                                                <th>Designation</th>
                                                {{-- <th>Action</th> --}}
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $counter=0; ?>
                                            @foreach ($coachList as $coachRow)
                                            <?php $counter=$counter+1; ?>
                                            <tr>
                                                    <td><?php echo $counter ?></td>
                                                    <td>{{ $coachRow->coach_name }}</td>
                                                    <td>{{ $coachRow->coach_num }}</td>
                                                    <td>{{ $coachRow->sports_name }}</td>
                                                    <td>{{ $coachRow->designation }}</td>
                                                    {{-- <td>
                                                        <button class="btn btn-warning edit-button"
                                                            data-id="{{ $coachRow->id }}"
                                                            data-session="{{ $coachRow->member_address }}">Edit</button>
                                                        <a href="{{ url('/admin/delete') }}/{{ $coachRow->id }}"><button
                                                                class="btn btn-danger">Delete</button></a>
                                                    </td> --}}
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
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

    <script>
        $(document).ready(function() {
            var table = $('#example2').DataTable({
                lengthChange: false,
                buttons: ['copy', 'excel', 'pdf', 'print']
            });

            table.buttons().container()
                .appendTo('#example2_wrapper .col-md-6:eq(0)');

            // Event delegation for edit button
            $('#example2').on('click', '.edit-button', function() {
                var sessionId = $(this).data('id');
                var sessionYear = $(this).data('session');
                $('#sessionId').val(sessionId);
                $('#sessionYear').val(sessionYear);
                $('#editSessionForm').attr('action', '/admin/update-session/' + sessionId);
                $('#editSessionModal').modal('show');
            });

            // Reset modal on close
            $('#editSessionModal').on('hidden.bs.modal', function() {
                $('#editSessionForm')[0].reset();
                $('#editSessionForm').attr('action', '');
            });
        });
    </script>
</body>

</html>
