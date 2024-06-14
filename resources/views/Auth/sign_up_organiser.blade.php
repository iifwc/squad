<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=9">
    <meta name="description" content="Gambolthemes">
    <meta name="author" content="Gambolthemes">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Barren - Simple Online Event Ticketing System</title>
    <!-- Favicon Icon -->
    <link rel="icon" type="image/png" href="images/fav.png">
    <!-- Stylesheets -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <link href='vendor/unicons-2.0.1/css/unicons.css' rel='stylesheet'>
    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <link href="css/night-mode.css" rel="stylesheet">
    <!-- Vendor Stylesheets -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="vendor/OwlCarousel/assets/owl.carousel.css" rel="stylesheet">
    <link href="vendor/OwlCarousel/assets/owl.theme.default.min.css" rel="stylesheet">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <style>
        .input-group {
            position: relative;
        }

        .form-control {
            padding-right: 100px;
            /* Adjust to ensure space for the button */
        }

        .input-group-append .btn {
            position: absolute;
            right: 0;
            top: 0;
            height: 100%;
            width: 100px;
            border-top-left-radius: 0;
            border-bottom-left-radius: 0;
            z-index: 100;
            background-color: #03A9F4;
            color: #fff;
            /* Ensure button is above the input field */
        }
    </style>
</head>

<body>
    <div class="form-wrapper">
        <div class="app-form">
            <div class="app-form-sidebar">
                <div class="sidebar-sign-logo">
                    <img src="images/sign-logo.svg" alt="">
                </div>
                <div class="sign_sidebar_text">
                    <h1>The Easiest Way to Create Events and Sell More Tickets Online</h1>
                </div>
            </div>
            <div class="app-form-content">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-10 col-md-10">
                            <div class="app-top-items">
                                <a href="index.html">
                                    <div class="sign-logo" id="logo">
                                        <img src="images/logo.svg" alt="">
                                        <img class="logo-inverse" src="images/dark-logo.svg" alt="">
                                    </div>
                                </a>
                                <div class="app-top-right-link">
                                    Already have an account?<a class="sidebar-register-link" href="{{route('org-signin')}}">Sign In</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-6 col-md-7">
                            <div class="registration">
                                <form id="reg">
                                    @csrf
                                    <h2 class="registration-title">Sign up to </h2>
                                    <div class="row mt-3">
                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group mt-4">
                                                <label class="form-label">Name*</label>
                                                <input class="form-control h_50" name="Name" type="text"
                                                    placeholder="Enter name..." value="">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group mt-4">
                                                <label class="form-label">Mobile No.*</label>
                                                <div class="input-group h_50">
                                                    <input class="form-control" name="Mobile_Number" id="Mobile_Number"
                                                        type="text" placeholder="Enter mobile no..." value="">
                                                    <div class="input-group-append" id="generateOTP">
                                                        <button class="btn " type="button" onclick="GenerateOTP()">
                                                            <i class="fa-solid fa-mobile-retro"></i> Get OTP
                                                        </button>
                                                    </div>
                                                    <div class="input-group-append" id="generateNew" hidden>
                                                        <button class="btn " type="button"
                                                            onclick="GenerateNewOTP()">Generate New</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12" id="enter-otp" hidden>
                                            <div class="form-group mt-4">
                                                <div class="input-group h_50">
                                                    <input class="form-control" name="OTP" type="text" id="OTP"
                                                        placeholder="Enter OTP..." value="">
                                               
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            <button class="main-btn btn-hover w-100 mt-4" type="submit">Sign Up</button>
                                        </div>
                                    </div>
                                </form>
                                <div class="agree-text">
                                    By clicking "Sign up", you agree to Squad <a href="#">Terms & Conditions</a>
                                    and have read the <a href="#">Privacy Policy</a>.
                                </div>
                                <div class="divider">
                                    <span>or</span>
                                </div>
                                <div class="social-btns-list mb-lg-5">
                                    <button class="social-login-btn">
                                        <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 26.488 27.029">
                                            <g transform="translate(-0.126)">
                                                <path
                                                    d="M1258.806,1021.475a11.578,11.578,0,0,0-.285-2.763h-12.688v5.015h7.448a6.605,6.605,0,0,1-2.763,4.384l-.025.168,4.012,3.108.278.028a13.214,13.214,0,0,0,4.024-9.941"
                                                    transform="translate(-1232.192 -1007.66)" fill="#4285f4"></path>
                                                <path
                                                    d="M145.071,1502.921a12.881,12.881,0,0,0,8.949-3.273l-4.265-3.3a8,8,0,0,1-4.685,1.352,8.136,8.136,0,0,1-7.688-5.616l-.158.013-4.172,3.229-.055.152a13.5,13.5,0,0,0,12.073,7.448"
                                                    transform="translate(-131.431 -1475.893)" fill="#34a853"></path>
                                                <path
                                                    d="M5.952,689.263a8.32,8.32,0,0,1-.45-2.673,8.744,8.744,0,0,1,.435-2.673l-.008-.179-4.224-3.28-.138.066a13.486,13.486,0,0,0,0,12.133l4.385-3.393"
                                                    transform="translate(0 -673.076)" fill="#fbbc05"></path>
                                                <path
                                                    d="M145.071,5.225A7.49,7.49,0,0,1,150.3,7.238l3.814-3.724A12.984,12.984,0,0,0,145.071,0,13.5,13.5,0,0,0,133,7.448l4.37,3.394a8.169,8.169,0,0,1,7.7-5.616"
                                                    transform="translate(-131.431)" fill="#eb4335"></path>
                                            </g>
                                        </svg>
                                        Sign in with Google
                                    </button>
                                    <button class="social-login-btn">
                                        <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 27 27">
                                            <g transform="translate(0)">
                                                <circle cx="13.5" cy="13.5" r="13.5" transform="translate(0 0)"
                                                    fill="#3b5998"></circle>
                                                <path
                                                    d="M851.461,383.684h-3.1c-1.841,0-3.889.735-3.889,3.266.009.882,0,1.727,0,2.678h-2.13v3.215h2.2V402.1h4.035v-9.316h2.663l.241-3.163H848.5s.007-1.407,0-1.816c0-1,1.1-.943,1.164-.943.522,0,1.538,0,1.8,0v-3.176Z"
                                                    transform="translate(-833.401 -379.385)" fill="#fff"></path>
                                            </g>
                                        </svg>
                                        Sign in with Facebook
                                    </button>
                                </div>
                                <div class="new-sign-link">
                                    Already have an account?<a class="signup-link" href="sign_in.html">Sign In</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="copyright-footer">
                    © 2024, Squad. All rights reserved.
                </div>
            </div>
        </div>
    </div>
    <script src="js/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/OwlCarousel/owl.carousel.js"></script>
    <script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="js/night-mode.js"></script>
    <script>
        let apiUrl = "{{ $Api_url }}"; // Assuming you have the API URL stored in a variable
        var csrfToken = "{{ csrf_token() }}";

        // Set up CSRF token for jQuery AJAX requests
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        function GenerateOTP() {
            let phoneNumberElement = document.getElementById('Mobile_Number');
            if (!phoneNumberElement) {
                console.error('Element with id "Mobile_Number" not found');
                return;
            }

            let phoneNumber = phoneNumberElement.value;
            let otpUrl = apiUrl + "/api/send-otp";

            let data = {
                Mobile_Number: phoneNumber
            };

            document.getElementById('enter-otp').hidden = true;

            $.ajax({
                url: otpUrl,
                type: 'POST',
                data: data,
                success: function (response) {
                  


                    Swal.fire({
                icon: 'success',
                title: 'OTP',
                text: "OTP sent successfully",
                confirmButtonText: 'OK'
                
            });

                   
                    // document.getElementById('otpInput').value = response.otp;
                    document.getElementById('enter-otp').hidden = false;
                    document.getElementById('generateOTP').hidden = true;
                    document.getElementById('generateNew').hidden = false;
                },
                error: function (xhr, status, error) {
                    console.error('Error fetching OTP:', error);
                    Swal.fire({
                icon: 'error',
                title: 'Error',
                text: JSON.parse(jqXHR.responseText).message,
                confirmButtonText: 'OK'
            });
                }
            });
        }

        function GenerateNewOTP() {
            document.getElementById('enter-otp').hidden = true;
            document.getElementById('generateOTP').hidden = false;
            document.getElementById('generateNew').hidden = true;
            document.getElementById('otpInput').value = '';
            GenerateOTP();
        }

        // $('#reg').on('submit', function (event) {
        //     event.preventDefault();

        //     // Reference to the form
        //     var form = $(this);

        //     // Convert form to FormData object
        //     var formData = new FormData(form[0]);

        //     // Append user_verify to FormData object
        //     formData.append('user_verify', user_verify);

        //     var settings = {
        //         url: apiUrl + "/api/register",
        //         method: "POST",
        //         processData: false, // Prevent jQuery from automatically processing the data
        //         contentType: false, // Prevent jQuery from setting the Content-Type header
        //         data: formData
        //     };

        //     $.ajax(settings).done(function (response) {
        //         user_verify = false;
               
               
                
        //         if (response.success) {
        //             Swal.fire({
        //                 icon: 'success',
        //                 title: 'Success',
        //                 text: 'User registered successfully',
        //                 confirmButtonText: 'OK'
        //             }).then(() => {
        //                 window.location.href = "{{ route('signin') }}";
        //             });
        //         }
        //     }).fail(function (jqXHR, textStatus, errorThrown) {
        //         user_verify = false;
        //         // Handle failure response
        //         var errorMessage;

        //         try {
        //             // Attempt to parse the JSON response
        //             var responseJSON = JSON.parse(jqXHR.responseText);
        //             errorMessage = responseJSON.message; // Extract the error message value
        //         } catch (e) {
        //             // If parsing fails, use the entire responseText
        //             errorMessage = jqXHR.responseText;
        //         }

        //         console.log(errorMessage); // Print the error message to console

        //         Swal.fire({
        //             icon: 'error',
        //             title: 'Error',
        //             text: errorMessage,
        //             confirmButtonText: 'OK'
        //         });
        //     });
        // });


        $('#reg').on('submit', function (event) {
    event.preventDefault();

    // Reference to the form
    var form = $(this);
    
    // Convert form to FormData object
    var formData = new FormData(form[0]);
    var otp = document.getElementById("OTP").value;
	formData.append('otp', otp);

    // Append user_verify to FormData object
   

    var settings = {
    url: apiUrl + "/api/organisation-signup",
    method: "POST",
    processData: false, // Prevent jQuery from automatically processing the data
    contentType: false, // Prevent jQuery from setting the Content-Type header
    data: formData,
    headers: {
        "X-CSRF-TOKEN": csrfToken
    }
    };

	

    $.ajax(settings).done(function (response) {
        if (response.status == 'true') {
          console.log(response);
             window.location.href = "{{route('organisation_dashboard')}}";
            
        } else {
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: response.message,
                confirmButtonText: 'OK'
            });
        }
    }).fail(function (jqXHR, textStatus, errorThrown) {
      

		Swal.fire({
    icon: 'error',
    title: 'Error',
    text: JSON.parse(jqXHR.responseText).message, // Parse JSON and access message property
    confirmButtonText: 'OK'
});

    });
});







        
    </script>

</body>

</html>