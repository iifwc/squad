<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=9">
    <meta name="description" content="Gambolthemes">
    <meta name="author" content="Gambolthemes">
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
</head>

<body class="d-flex flex-column h-100">
    <!-- Header Start-->

    @if($users->isNotEmpty())
        @include('user.header')
    @else
        @include('guest.header')
    @endif
    <!-- Header End-->
    <!-- Body Start-->
    <div class="wrapper">
        <div class="breadcrumb-block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-10">
                        <div class="barren-breadcrumb">
                            <nav aria-label="breadcrumb">
                                <!-- <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                            </ol> -->
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="event-dt-block p-80">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12 col-md-12">
                        <div class="main-title checkout-title text-center">
                            <h3>Contact Us</h3>
                            <p class="mb-0">Have any questions? Let's Work Together.</p>
                        </div>
                    </div>
                    <div class="col-lg-10" id="reg">
                        <div class="main-card mt-5">
                            <div class="row">
                                <div class="col-xl-7 col-lg-12 col-md-12 order-lg-2">
                                    <div class="contact-form bp-form p-lg-5 ps-lg-4 pt-lg-4 pb-5 p-4">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group mt-4">
                                                    <label class="form-label">First Name</label>
                                                    <input class="form-control h_50" name="First_Name" type="text"
                                                        placeholder="" value="">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group mt-4">
                                                    <label class="form-label">Last Name</label>
                                                    <input class="form-control h_50" name="Last_Name" type="text"
                                                        placeholder="" value="">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group mt-4">
                                                    <label class="form-label">Email</label>
                                                    <input class="form-control h_50" name="Email" type="email"
                                                        placeholder="" value="">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group mt-4">
                                                    <label class="form-label">Phone</label>
                                                    <input class="form-control h_50" name="Mobile_Number" type="text"
                                                        placeholder="" value="">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group mt-4">
                                                    <label class="form-label">Message</label>
                                                    <textarea class="form-textarea" name="Message"
                                                        placeholder=""></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="text-center mt-4">
                                                    <button class="main-btn btn-hover h_50 w-100"
                                                        type="submit">Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-5 col-lg-12 col-md-12 order-lg-1 d-none d-xl-block">
                                    <div class="contact-banner-block">
                                        <div class="contact-hero-banner">
                                            <div class="contact-hero-banner-info">
                                                <h3>Contact information</h3>
                                                <p>Fill out the form and our team will get back to you soon.</p>
                                                <ul>
                                                    <li>
                                                        <div class="contact-info d-flex align-items-center">
                                                            <div class="contact-icon">
                                                                <i class="fa-solid fa-square-phone fa-beat-fade"
                                                                    style="--fa-beat-fade-opacity: 0.67; --fa-beat-fade-scale: 1.075;"></i>
                                                            </div>
                                                            <a href="#">+1(000)00-00000</a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="contact-info d-flex align-items-center">
                                                            <div class="contact-icon">
                                                                <i class="fa-solid fa-envelope fa-beat-fade"
                                                                    style="--fa-beat-fade-opacity: 0.67; --fa-beat-fade-scale: 1.075;"></i>
                                                            </div>
                                                            <a href="#">contact@barren.com</a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="contact-info d-flex align-items-center">
                                                            <div class="contact-icon">
                                                                <i class="fa-solid fa-life-ring fa-beat-fade"
                                                                    style="--fa-beat-fade-opacity: 0.67; --fa-beat-fade-scale: 1.075;"></i>
                                                            </div>
                                                            <a href="#">Help Center</a>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-10 col-md-12 d-block d-xl-none">
                        <div class="main-card mt-4">
                            <div class="contact-banner-block">
                                <div class="contact-hero-banner p_30 min-h-auto">
                                    <div class="contact-hero-banner-info">
                                        <h3>Contact information</h3>
                                        <p>Fill out the form and our team will get back to you soon.</p>
                                        <ul>
                                            <li>
                                                <div class="contact-info d-flex align-items-center">
                                                    <div class="contact-icon">
                                                        <i class="fa-solid fa-square-phone fa-beat-fade"
                                                            style="--fa-beat-fade-opacity: 0.67; --fa-beat-fade-scale: 1.075;"></i>
                                                    </div>
                                                    <a href="#">+1(000)00-00000</a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="contact-info d-flex align-items-center">
                                                    <div class="contact-icon">
                                                        <i class="fa-solid fa-envelope fa-beat-fade"
                                                            style="--fa-beat-fade-opacity: 0.67; --fa-beat-fade-scale: 1.075;"></i>
                                                    </div>
                                                    <a href="#">contact@barren.com</a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="contact-info d-flex align-items-center">
                                                    <div class="contact-icon">
                                                        <i class="fa-solid fa-life-ring fa-beat-fade"
                                                            style="--fa-beat-fade-opacity: 0.67; --fa-beat-fade-scale: 1.075;"></i>
                                                    </div>
                                                    <a href="#">Help Center</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Body End-->
    <!-- Footer Start-->
    <!-- Footer Start-->
    @if($users->isNotEmpty())
        @include('user.footer')
    @else
        @include('guest.footer')
    @endif

    <!-- Footer End-->

    <script src="js/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/OwlCarousel/owl.carousel.js"></script>
    <script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/night-mode.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <script>

        var csrfToken = "{{ csrf_token() }}";
        x
        var apiUrl = {{$Api_url}};
        $(document).ready(function () {
            $('#reg').on('submit', function (event) {
                event.preventDefault();

                // Reference to the form
                var form = $(this);

                // Convert form to FormData object
                var formData = new FormData(form[0]);

                // Ajax settings
                var settings = {
                    url: apiUrl + "/api/organisation-signup",
                    method: "POST",
                    processData: false, // Prevent jQuery from automatically processing the data
                    contentType: false, // Prevent jQuery from setting the Content-Type header
                    data: formData,
                };

                // Ajax request
                $.ajax(settings)
                    .done(function (response) {
                        if (response.status == 'true') {
                            Swal.fire({
                                icon: 'success',
                                title: '',
                                text: "I'll connect with you soon.",
                                confirmButtonText: 'OK',
                                headers: {
                                    "X-CSRF-TOKEN": csrfToken
                                }

                            });
                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: 'Error',
                                text: response.message,
                                confirmButtonText: 'OK'
                            });
                        }
                    })
                    .fail(function (jqXHR, textStatus, errorThrown) {
                        Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            text: JSON.parse(jqXHR.responseText).message,
                            confirmButtonText: 'OK'
                        });
                    });
            });
        });
    </script>

</body>

</html>