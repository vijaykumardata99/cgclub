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
                                <h3>LOGIN</h3>
                            </div>
                        </div>
                        <div class="card-body">
                            @if (session('info'))
                            <div class="alert alert-warning alert-dismissible">
                                <button type="button" class="close" data-bs-dismiss="alert" aria-hidden="true">×</button>
                                <h5><i class="icon fa fa-exclamation-triangle"></i> Alert!</h5>
                                {{ session('info') }}
                            </div>
                            @endif

                            <form id="login_form" method="POST" action="" enctype="multipart/form-data">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                <div class="form-group" style="line-height: 100%;">
                                    <small></small>
                                    <div class="input-group mb-3 form-field">
                                        <input type="username" name="username" id="username" class="form-control" placeholder="Please Enter User ID" autocomplete="off">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <i class="fa fa-user" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group" style="line-height: 100%;">
                                    <small></small>
                                    <div class="input-group mb-3 form-field">
                                        <input type="password" name="password" id="password" class="form-control" placeholder="Please Enter Password" autocomplete="off">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span class="fa fa-key"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <small></small>
                                    <div class="row">
                                        <div class="col-5">
                                            <input type="text" class="form-control" id="captcha_code" placeholder="Captcha" name="captcha_code" maxlength="4" autocomplete="off" oninvalid="this.setCustomValidity('Please Enter Captcha')" oninput="this.setCustomValidity('')" pattern="[0-9 .]+" required>
                                        </div>
                                        <div class="col-7 input-group">
                                            <canvas id="validcode"></canvas>
                                            <label id="toggle" style="cursor: pointer;" class="mt-2 small">
                                                <span class="fa fa-sync-alt" style="font-size:16px;"></span>
                                                <i class="fa fa-refresh" aria-hidden="true" style="font-size: 20px;margin-left: 20px;"></i>
                                            </label>
                                        </div>
                                        <!-- /.col -->
                                    </div>
                                </div>

                                <div class="social-auth-links text-center mt-3 mb-3">
                                    <button id="submitBtn" type="submit" name="btnSubmit" value="Login" class="btn btn-block btn-primary">
                                        Login
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
        //var code;
        let rightCode = '';

        function randomColor() {
            let r = Math.floor(Math.random() * 256);
            let g = Math.floor(Math.random() * 256);
            let b = Math.floor(Math.random() * 256);
            return 'rgb(' + r + ',' + g + ',' + b + ')';
        }

        function getImgValiCode() {
            let showNum = [];
            let canvasWinth = 120;
            let canvasHeight = 40;
            let canvas = document.getElementById('validcode');
            let context = canvas.getContext('2d');
            canvas.width = canvasWinth;
            canvas.height = canvasHeight;
            let sCode = '0,1,2,3,4,5,6,7,8,9';
            let saCode = sCode.split(',');
            let saCodeLen = saCode.length;
            for (let i = 0; i <= 3; i++) {
                let sIndex = Math.floor(Math.random() * saCodeLen);
                let sDeg = (Math.random() * 30 * Math.PI) / 180;
                let cTxt = saCode[sIndex];
                showNum[i] = cTxt.toLowerCase();
                let x = 10 + i * 20;
                let y = 20 + Math.random() * 8;
                context.font = 'bold 25px Arial';
                context.translate(x, y);
                context.rotate(sDeg);

                context.fillStyle = randomColor();
                context.fillText(cTxt, 0, 0);

                context.rotate(-sDeg);
                context.translate(-x, -y);
            }
            for (let i = 0; i <= 5; i++) {
                context.strokeStyle = randomColor();
                context.beginPath();
                context.moveTo(
                    Math.random() * canvasWinth,
                    Math.random() * canvasHeight
                );
                context.lineTo(
                    Math.random() * canvasWinth,
                    Math.random() * canvasHeight
                );
                context.stroke();
            }
            for (let i = 0; i < 30; i++) {
                context.strokeStyle = randomColor();
                context.beginPath();
                let x = Math.random() * canvasWinth;
                let y = Math.random() * canvasHeight;
                context.moveTo(x, y);
                context.lineTo(x + 1, y + 1);
                context.stroke();
            }
            rightCode = showNum.join('');
        }

        function createCaptcha() {
            let captcha_code = document.querySelector('#captcha_code');
            let toggleBtn = document.querySelector('#toggle');
            toggleBtn.addEventListener('click', function() {
                getImgValiCode();
                captcha_code.value = "";
            }, false);
            getImgValiCode();
            captcha_code.value = "";
        }

        $(document).ready(function() {
            createCaptcha();

            const usernameEl = $("input[name='username']");
            const passwordEl = $("input[name='password']");
            const login_form = $("#login_form");

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

            const checkCaptcha = () => {
                let valid = false;
                const min = 4,
                    max = 4;
                captcha = captcha_code.val().trim();
                if (!isRequired(captcha)) {
                    showError(captcha_code, 'Captcha cannot be blank.');
                } else if (captcha != rightCode) {
                    showError(captcha_code, 'Captcha code is invalid.');
                } else if (!isBetween(captcha.length, min, max)) {
                    showError(captcha_code, `Captcha length must be ${max} characters.`)
                } else {
                    showSuccess(captcha_code);
                    valid = true;
                }
                return valid;
            }

            const checkPassword = () => {
                let valid = false;
                const min = 8,
                    max = 20;
                password = passwordEl.val().trim();
                if (!isRequired(password)) {
                    showError(passwordEl, 'Password cannot be blank.');
                }
                // else if(!isBetween(password.length, min, max)) {
                //     showError(passwordEl, `Password must be between ${min} and ${max} characters.`);
                // }
                else {
                    showSuccess(passwordEl);
                    valid = true;
                }
                return valid;
            };

            $('#submitBtn').click(function(event) {
                // validate forms
                let isUsernameValid = checkUsername(),
                    isPasswordValid = checkPassword(),
                    isCaptchaValid = checkCaptcha();

                let isFormValid = isUsernameValid && isPasswordValid && isCaptchaValid;

                // submit to the server if the form is valid
                if (isFormValid) {
                    login_form.submit();
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