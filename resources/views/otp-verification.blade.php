<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>CG Club | Login</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />

    <!-- Bootstrap core CSS -->
    <link href="{{ url('/') }}/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Font  -->
    <link href="https://fonts.googleapis.com/css?family=Dosis:300,400,500,600,700,800|Roboto:300,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
    <!-- Icofont CSS -->
    <link rel="stylesheet" href="{{ url('/') }}/assets/css/icofont.min.css">
    <!-- Meanmenu CSS -->
    <link rel="stylesheet" href="{{ url('/') }}/assets/css/meanmenu.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="{{ url('/') }}/assets/css/animate.css">
    <!-- venobox -->
    <link rel="stylesheet" href="{{ url('/') }}/assets/venobox/css/venobox.min.css" />
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ url('/') }}/assets/css/style.css">
    <!-- Responsive  CSS -->
    <link rel="stylesheet" href="{{ url('/') }}/assets/css/responsive.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .main-footer {
            background-color: #0E70C7;
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            color: white;
            text-align: center;
        }
        .container-fluid {
            background: #644222;
        }
    </style>
</head>

<body class="body__Sec">

    <!-- Topbar Start -->
    <div class="container-fluid  p-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="row gx-0 d-none d-lg-flex">
            <div class="col-lg-12 px-5 text-start" style="padding: 15px 0px; color:#fff; font-size: 22px;">
                <center><b>WELCOME TO CHHATTISGARH CLUB</b></center>
            </div>

        </div>
    </div>
    <!-- Topbar End -->

    <section class="banner-section">
        <div class="row">
            <div class="col-md-4">
            </div>
            <div class="col-md-4 mt-5">
                <div class="mt-1 mb-5">
                    <!-- /.login-logo -->
                    <div class="card card-outline card-primary" style="box-shadow: rgba(0, 0, 0, 0.19) 0px 10px 20px, rgba(0, 0, 0, 0.23) 0px 6px 6px;">
                        <div class="card-header">
                            <div class="col-12 text-center">
                                <h3>OTP Verification</h3>
                            </div>
                        </div>
                        <div class="card-body">
                            @if (session('info'))
                                <div class="alert alert-warning alert-dismissible">
                                    <button type="button" class="close" data-bs-dismiss="alert" aria-hidden="true">×</button>
                                    <h5><i class="icon fa fa-exclamation-triangle"></i> Alert!</h5>
                                    {{ session('info') }}
                                </div>
                            @elseif (session('success'))
                                <div class="alert alert-warning alert-dismissible">
                                    <button type="button" class="close" data-bs-dismiss="alert" aria-hidden="true">×</button>
                                    <h5><i class="icon fa fa-exclamation-triangle"></i> Alert!</h5>
                                    {{ session('success') }}
                                </div>
                            @endif

                            <form id="otp_verification_form" method="POST" action="{{ route('verify.otp') }}" enctype="multipart/form-data">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                <input type="hidden" name="mobileNum" value="{{ $otpTable->mobile }}" />
                                <input type="hidden" name="otpNum" value="{{ $otpTable->otp }}" />

                                <div class="form-group" style="line-height: 100%;">
                                    <small></small>
                                    <div class="input-group mb-3 form-field">
                                        <input type="number" name="otp_field" id="otp_field" class="form-control" placeholder="Please Enter OTP" autocomplete="off">
                                    </div>
                                </div>

                                <div class="social-auth-links text-center mt-3 mb-3">
                                    <button id="submitBtn" type="submit" name="btnSubmit" class="btn btn-block btn-primary">
                                        Verify OTP
                                    </button>
                                </div>
                            </form>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.login-box -->
            </div>
            <div class="col-md-4">
            </div>
        </div>
    </section>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

    <script src="{{ url('/') }}/assets/js/sha512.js"></script>

    <script type="text/javascript">

        $(document).ready(function() {
            const usernameEl = $("input[name='username']");
            const passwordEl = $("input[name='password']");
            const otp_verification_form = $("#otp_verification_form");

            const captcha_code = $("input[name='captcha_code']");

            var password = "";
            var username = "";
            var captcha = "";

            const isRequired = value => value === '' ? false : true;
            const isBetween = (length, min, max) => length < min || length > max ? false : true;
            const isPasswordSecure = (password) => {
                const re = new RegExp("^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})");
                return re.test(password);
            };

            const showError = (input, message) => {
                // get the form-field element
                input.css("border", "1px solid red");
                const formField = input.parents(".form-group").children("small");
                //console.log(formField);
                // add the error class
                formField.removeClass('success');
                formField.addClass('text-danger');

                // show the error message
                formField.html(message);
            };

            const showSuccess = (input) => {
                // get the form-field element
                input.css("border", "1px solid #ced4da");
                const formField = input.parents(".form-group").children("small");

                // remove the error class
                formField.removeClass('text-danger');
                formField.addClass('success');

                // hide the error message
                const error = formField.empty();
            }

            const checkUsername = () => {
                let valid = false;
                const min = 3,
                    max = 25;
                username = usernameEl.val().trim();
                if (!isRequired(username)) {
                    showError(usernameEl, 'Username cannot be blank.');
                } else if (!isBetween(username.length, min, max)) {
                    showError(usernameEl, `Username must be between ${min} and ${max} characters.`)
                } else {
                    showSuccess(usernameEl);
                    valid = true;
                }
                return valid;
            }

            $('#submitBtn').click(function(event) {
                // validate forms
                let isUsernameValid = checkUsername(),
                    isPasswordValid = checkPassword(),
                    isCaptchaValid = checkCaptcha();

                let isFormValid = isUsernameValid && isPasswordValid && isCaptchaValid;

                // submit to the server if the form is valid
                if (isFormValid) {
                    otp_verification_form.submit();
                    return true;
                } else {
                    createCaptcha();
                    return false;
                    event.preventDefault();
                }
            });
        });
    </script>
</body>

</html>