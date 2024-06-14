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


    <style>
        /* Style the select element */
        .custom-select {
            appearance: none;
            -webkit-appearance: none;
            -moz-appearance: none;
            background-color: #03a9f4;
            color: #fff;
            border: none;
            outline: #03a9f4;
            padding: 8px 20px;
            border-radius: 3px;
            cursor: pointer;
        }

        .custom-select:hover {
            background-color: #3891bb;
        }

        /* Style the options */
        .custom-select option {
            background-color: white;
            color: #000000;
        }
    </style>
</head>

<body class="d-flex flex-column h-100">
    <!-- Header Start-->
    @if($users->isNotEmpty())
        @include('user.header')
    @else
        @include('guest.header')
    @endif

    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="loginModalLabel">Select Singin Type</h5>
                    <button type="button" class="close-model-btn" data-bs-dismiss="modal" aria-label="Close"><i
                            class="uil uil-multiply"></i></button>
                </div>
                <div class="modal-body">
                    <div class="model-content main-form " style="color:#fff;">
                        <div class="row mt-4">
                            <a href="{{route('signin')}}" style="color:#fff;">
                                <div class="col-lg-12 col-md-12  choose-type choose-hover">
                                    <div class="form-group ">
                                        <i class="fa-solid fa-user"></i> Singin As User
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="row mt-4">
                            <a href="{{route('org-signin')}}" style="color:#fff;">
                                <div class="col-lg-12 col-md-12 choose-type">
                                    <div class="form-group   ">
                                        <i class="fa-solid fa-people-roof"></i> Singin As Organiser
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="row mt-4">
                            <a href="{{route('admin-signin')}}" style="color:#fff;">
                                <div class="col-lg-12 col-md-12 choose-type">
                                    <div class="form-group   ">
                                        <i class="fa-solid fa-user-tie"></i> Singin As Admin
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End-->
    <!-- Body Start-->
    <div class="wrapper">
        <div class="hero-banner">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-lg-8 col-md-10">
                        <div class="hero-banner-content">
                            <h2>Discover Events For All The Things You Love</h2>
                            <div class="search-form main-form">
                                <div class="row g-3">
                                    <div class="col-lg-5 col-md-12">
                                        <div class="form-group search-category">
                                            <input class="form-control" data-width="100%" data-size="5"
                                                style="height: 50px;" name="Location" id="Location"
                                                placeholder="Location...">

                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-12">
                                        <div class="form-group">
                                            <input class="form-control " id="Event_Title" name="Event_Title"
                                                style="height: 50px;" placeholder="Event Title/Name...">
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-12">
                                        <button class="main-btn btn-hover w-100" onclick=SearchEvents()>Find</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="explore-events p-80">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12">
                        <div class="main-title">
                            <h3>Explore Events</h3>
                        </div>
                    </div>
                    <div class="col-xl-12 col-lg-12 col-md-12">
                        <div class="event-filter-items">
                            <div class="featured-controls">

                                <div class="controls">
                                    <button type="button" class="control" data-filter="all">All</button>
                                    <button type="button" class="control" data-filter=".arts">Arts</button>
                                    <button type="button" class="control" data-filter=".business">Business</button>
                                    <button type="button" class="control" data-filter=".concert">Concert</button>
                                    <button type="button" class="control" data-filter=".workshops">Workshops</button>
                                    <button type="button" class="control" data-filter=".coaching_consulting">Coaching
                                        and Consulting</button>
                                    <button type="button" class="control" data-filter=".health_Wellness">Health and
                                        Wellbeing</button>
                                    <button type="button" class="control" data-filter=".volunteer">Volunteer</button>
                                    <button type="button" class="control" data-filter=".sports">Sports</button>
                                    <button type="button" class="control" data-filter=".free">Free</button>
                                </div>
                                <div class="row" data-ref="event-filter-content" id="cardsContainer">


                                              </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="host-engaging-event-block p-80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10">
                        <div class="main-title">
                            <h3>Host Engaging Online and Venue Events with Barren</h3>
                            <p>Organise venue events and host online events with unlimited possibilities using our
                                built-in virtual event platform. Build a unique event experience for you and your
                                attendees.</p>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="engaging-block">
                            <div class="owl-carousel engaging-slider owl-theme">
                                <div class="item">
                                    <div class="main-card">
                                        <div class="host-item">
                                            <div class="host-img">
                                                <img src="images/icons/venue-events.png" alt="">
                                            </div>
                                            <h4>Venue Events</h4>
                                            <p>Create outstanding event page for your venue events, attract attendees
                                                and sell more tickets.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="main-card">
                                        <div class="host-item">
                                            <div class="host-img">
                                                <img src="images/icons/webinar.png" alt="">
                                            </div>
                                            <h4>Webinar</h4>
                                            <p>Webinars tend to be one-way events. Barren helps to make them more
                                                engaging.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="main-card">
                                        <div class="host-item">
                                            <div class="host-img">
                                                <img src="images/icons/training-workshop.png" alt="">
                                            </div>
                                            <h4>Training & Workshop </h4>
                                            <p>Create and host profitable workshops and training sessions online, sell
                                                tickets and earn money.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="main-card">
                                        <div class="host-item">
                                            <div class="host-img">
                                                <img src="images/icons/online-class.png" alt="">
                                            </div>
                                            <h4>Online Class</h4>
                                            <p>Try our e-learning template to create a fantastic e-learning event page
                                                and drive engagement. </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="main-card">
                                        <div class="host-item">
                                            <div class="host-img">
                                                <img src="images/icons/talk-show.png" alt="">
                                            </div>
                                            <h4>Talk Show</h4>
                                            <p>Use our intuitive built-in event template to create and host an engaging
                                                Talk Show.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="feature-block p-80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10">
                        <div class="main-title">
                            <h3>No Feature Overload, Get Exactly What You Need</h3>
                            <p>As well as being the most affordable online-based event registration tool and one of the
                                best online event ticketing systems in Australia, Barren is super easy-to-use and built
                                with a simplistic layout which is totally convenient for the organisers to operate.</p>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="feature-group-list">
                            <div class="row">
                                <div class="col-xl-3 col-lg-4 col-md-6">
                                    <div class="feature-item mt-46">
                                        <div class="feature-icon">
                                            <img src="images/icons/feature-icon-1.png" alt="">
                                        </div>
                                        <h4>Online Events</h4>
                                        <p>Built-in video conferencing platform to save you time and cost.</p>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6">
                                    <div class="feature-item mt-46">
                                        <div class="feature-icon">
                                            <img src="images/icons/feature-icon-2.png" alt="">
                                        </div>
                                        <h4>Venue Event</h4>
                                        <p>Easy-to-use features to create and manage your venue events.</p>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6">
                                    <div class="feature-item mt-46">
                                        <div class="feature-icon">
                                            <img src="images/icons/feature-icon-3.png" alt="">
                                        </div>
                                        <h4>Engaging Event Page</h4>
                                        <p>Create engaging event pages with your logo and our hero image collage
                                            gallery.</p>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6">
                                    <div class="feature-item mt-46">
                                        <div class="feature-icon">
                                            <img src="images/icons/feature-icon-4.png" alt="">
                                        </div>
                                        <h4>Marketing Automation</h4>
                                        <p>Use our marketing automation tools to promote your events on social media and
                                            email.</p>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6">
                                    <div class="feature-item mt-46">
                                        <div class="feature-icon">
                                            <img src="images/icons/feature-icon-5.png" alt="">
                                        </div>
                                        <h4>Sell Tickets</h4>
                                        <p>Start monetising your online and venue events, sell unlimited* tickets.</p>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6">
                                    <div class="feature-item mt-46">
                                        <div class="feature-icon">
                                            <img src="images/icons/feature-icon-6.png" alt="">
                                        </div>
                                        <h4>Networking</h4>
                                        <p>Engage your attendees with the speakers using our interactive tools and build
                                            your own network.</p>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6">
                                    <div class="feature-item mt-46">
                                        <div class="feature-icon">
                                            <img src="images/icons/feature-icon-7.png" alt="">
                                        </div>
                                        <h4>Recording</h4>
                                        <p>Securely record your online events and save on the cloud of your choice*.</p>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6">
                                    <div class="feature-item mt-46">
                                        <div class="feature-icon">
                                            <img src="images/icons/feature-icon-8.png" alt="">
                                        </div>
                                        <h4>Live Streaming</h4>
                                        <p>Livestream your online events on Facebook, YouTube and other social networks.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6">
                                    <div class="feature-item mt-46">
                                        <div class="feature-icon">
                                            <img src="images/icons/feature-icon-9.png" alt="">
                                        </div>
                                        <h4>Engagement Metrics</h4>
                                        <p>Track your event engagement metrics like visitors, ticket sales, etc. from
                                            your dashboard.</p>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6">
                                    <div class="feature-item mt-46">
                                        <div class="feature-icon">
                                            <img src="images/icons/feature-icon-10.png" alt="">
                                        </div>
                                        <h4>Security & Support</h4>
                                        <p>Secure data and payment processing backed by a team eager to see you succeed.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6">
                                    <div class="feature-item mt-46">
                                        <div class="feature-icon">
                                            <img src="images/icons/feature-icon-11.png" alt="">
                                        </div>
                                        <h4>Reports & Analytics</h4>
                                        <p>Get useful reports and insights to boost your sales and marketing activities.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6">
                                    <div class="feature-item mt-46">
                                        <div class="feature-icon">
                                            <img src="images/icons/feature-icon-12.png" alt="">
                                        </div>
                                        <h4>Mobile & Desktop App</h4>
                                        <p>Stay on top of things, manage and monitor your events using the organiser
                                            app.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="host-step-block p-80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10">
                        <div class="main-title">
                            <h3>Be a Star Event Host in 4 Easy Steps</h3>
                            <p>Use early-bird discounts, coupons and group ticketing to double your ticket sale. Get
                                paid quickly and securely.</p>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="easy-steps-tab">
                            <div class="nav step-tabs" role="tablist">
                                <button class="step-link active" data-bs-toggle="tab" data-bs-target="#step-01"
                                    type="button" role="tab" aria-controls="step-01" aria-selected="true">Step
                                    01<span>Create Your Event</span></button>
                                <button class="step-link" data-bs-toggle="tab" data-bs-target="#step-02" type="button"
                                    role="tab" aria-controls="step-02" aria-selected="false">Step
                                    02<span>Sell Tickets and Get Paid</span></button>
                                <button class="step-link" data-bs-toggle="tab" data-bs-target="#step-03" type="button"
                                    role="tab" aria-controls="step-03" aria-selected="false">Step
                                    03<span>Finally, Host Your Event</span></button>
                                <button class="step-link" data-bs-toggle="tab" data-bs-target="#step-04" type="button"
                                    role="tab" aria-controls="step-04" aria-selected="false">Step
                                    04<span>Repeat and Grow</span></button>
                            </div>
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="step-01" role="tabpanel">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12">
                                            <div class="step-text">Sign up for free and create your event easily in
                                                minutes.</div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="step-item">
                                                <div class="step-icon">
                                                    <img src="images/icons/step-icon-1.png" alt="">
                                                </div>
                                                <h4>Sign up for free</h4>
                                                <p>Sign up easily using your Google or Facebook account or email and
                                                    create your events in minutes.</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="step-item">
                                                <div class="step-icon">
                                                    <img src="images/icons/step-icon-2.png" alt="">
                                                </div>
                                                <h4>Use built-in event page template</h4>
                                                <p>Choose from our customised page templates specially designed to
                                                    attract attendees.</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="step-item">
                                                <div class="step-icon">
                                                    <img src="images/icons/step-icon-3.png" alt="">
                                                </div>
                                                <h4>Customise your event page as you like</h4>
                                                <p>Add logo, collage hero images, and add details to create an
                                                    outstanding event page.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="step-02" role="tabpanel">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12">
                                            <div class="step-text">Use our multiple ticketing features & marketing
                                                automation tools to boost ticket sales.</div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="step-item">
                                                <div class="step-icon">
                                                    <img src="images/icons/step-icon-4.png" alt="">
                                                </div>
                                                <h4>Promote your events on social media & email</h4>
                                                <p>Use our intuitive event promotion tools to reach your target audience
                                                    and sell tickets.</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="step-item">
                                                <div class="step-icon">
                                                    <img src="images/icons/step-icon-5.png" alt="">
                                                </div>
                                                <h4>Use early-bird discounts, coupons & group ticketing</h4>
                                                <p>Double your ticket sales using our built-in discounts, coupons and
                                                    group ticketing features.</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="step-item">
                                                <div class="step-icon">
                                                    <img src="images/icons/step-icon-6.png" alt="">
                                                </div>
                                                <h4>Get paid quickly & securely</h4>
                                                <p>Use our PCI compliant payment gateways to collect your payment
                                                    securely.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="step-03" role="tabpanel">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12">
                                            <div class="step-text">Use Barren to host any types of online events for
                                                free.</div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="step-item">
                                                <div class="step-icon">
                                                    <img src="images/icons/step-icon-7.png" alt="">
                                                </div>
                                                <h4>Free event hosting</h4>
                                                <p>Use Eventbookings to host any types of online events for free.</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="step-item">
                                                <div class="step-icon">
                                                    <img src="images/icons/step-icon-8.png" alt="">
                                                </div>
                                                <h4>Built-in video conferencing platform</h4>
                                                <p>No need to integrate with ZOOM or other 3rd party apps, use our
                                                    built-in video conferencing platform for your events.</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="step-item">
                                                <div class="step-icon">
                                                    <img src="images/icons/step-icon-9.png" alt="">
                                                </div>
                                                <h4>Connect your attendees with your event</h4>
                                                <p>Use our live engagement tools to connect with attendees during the
                                                    event.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="step-04" role="tabpanel">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12">
                                            <div class="step-text">Create more events and earn more money.</div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="step-item">
                                                <div class="step-icon">
                                                    <img src="images/icons/step-icon-10.png" alt="">
                                                </div>
                                                <h4>Create multiple sessions & earn more</h4>
                                                <p>Use our event scheduling features to create multiple sessions for
                                                    your events & earn more money.</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="step-item">
                                                <div class="step-icon">
                                                    <img src="images/icons/step-icon-11.png" alt="">
                                                </div>
                                                <h4>Clone past event to create similar events</h4>
                                                <p>Use our event cloning feature to clone past event and create a new
                                                    one easily within a few clicks.</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="step-item">
                                                <div class="step-icon">
                                                    <img src="images/icons/step-icon-12.png" alt="">
                                                </div>
                                                <h4>Get support like nowhere else</h4>
                                                <p>Our dedicated on-boarding coach will assist you in becoming an expert
                                                    in no time.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="our-organisations-block p-80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="main-title text-center">
                            <h3>321+ events created by thousands of organisations around the globe</h3>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="organisations-area">
                            <div class="owl-carousel organisations-slider owl-theme">
                                <div class="item">
                                    <div class="sponsor">
                                        <a href="#"><img src="images/icons/sponsor-1.png" alt=""></a>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="sponsor">
                                        <a href="#"><img src="images/icons/sponsor-2.png" alt=""></a>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="sponsor">
                                        <a href="#"><img src="images/icons/sponsor-3.png" alt=""></a>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="sponsor">
                                        <a href="#"><img src="images/icons/sponsor-4.png" alt=""></a>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="sponsor">
                                        <a href="#"><img src="images/icons/sponsor-5.png" alt=""></a>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="sponsor">
                                        <a href="#"><img src="images/icons/sponsor-6.png" alt=""></a>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="sponsor">
                                        <a href="#"><img src="images/icons/sponsor-7.png" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @if($users->isNotEmpty())
        @include('user.footer')
    @else
        @include('guest.footer')
    @endif


    <script src="js/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/OwlCarousel/owl.carousel.js"></script>
    <script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="vendor/mixitup/dist/mixitup.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="js/night-mode.js"></script>
    <script>





        let apiUrl = "{{ $Api_url }}";
        var containerEl = document.querySelector('[data-ref~="event-filter-content"]');

        var mixer = mixitup(containerEl, {
            selectors: {
                target: '[data-ref~="mixitup-target"]'
            }
        });


        function navigateToPage() {
            var dropdown = document.getElementById("signin-dropdown");
            var selectedValue = dropdown.options[dropdown.selectedIndex].value;
            if (selectedValue) {
                window.location.href = selectedValue;
            }
        }




        window.onload = function () {
            ShowData();
        }

        function ShowData() {
            var formdata = new FormData();
            var settings = {
                "url": apiUrl + "/api/event",
                "method": "POST",
                "timeout": 0,
                "processData": false,
                "mimeType": "multipart/form-data",
                "contentType": false,
                "data": formdata,
                "headers": {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}' // Include CSRF token in the headers
                }
            };


            $.ajax(settings).done(function (response) {
                response = jQuery.parseJSON(response);
                var data = response.data;

                // Clear existing cards
                $('#cardsContainer').empty();

                $.each(data, function (index, value) {


                    // Dynamically create the card HTML
                    var cards = `
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mix health_Wellness concert volunteer sports free business" data-ref="mixitup-target">
                    <div class="main-card mt-4">
                        <div class="event-thumbnail">
                            <a href="{{url('event_detail/${value.Event_id}')}}" class="thumbnail-img">

                                <img src="${value.Event_Logo_Banner_Image}" alt="Event Image">
                            </a>
                            <span class="bookmark-icon"   onclick="favourite(${value.Event_id})" title="Bookmark"></span>
                        </div>
                        <div class="event-content">
                            <a href="{{url('event_detail/${value.Event_id}')}}" class="event-title">${value.Event_Title}</a>
                            <div class="duration-price-remaining">
                                <span class="duration-price">₹&nbsp${value.Pricing}.00</span>
                                <span class="remaining"><i class="fa-solid fa-ticket fa-rotate-90"></i>${value.Capacity}</span>
                            </div>
                        </div>
                        <div class="event-footer">
                            <div class="event-timing">
                                <div class="publish-date">
                                    <span><i class="fa-solid fa-calendar-day me-2"></i>${value.Event_Date_Time}</span>
                                    <span class="dot"><i class="fa-solid fa-circle"></i></span>
                                    <span>${value.Location}</span>
                                </div>
                                <span class="publish-time"><i class="fa-solid fa-clock me-2"></i>${value.Event_Duration}</span>
                            </div>
                        </div>
                    </div>
                </div>
            `;

                    // Append the card to the container
                    $('#cardsContainer').append(cards);
                });
            });
        }


        function SearchEvents() {

            var Location = document.getElementById('Location').value;
            var Event_Title = document.getElementById('Event_Title').value;
            console.log(Location, Event_Title);

            var formdata = new FormData();
            formdata.append('Location', Location);
            formdata.append('Event_Title', Event_Title);

            var settings = {
                "url": apiUrl + "/api/eventSearch",
                "method": "POST",
                "timeout": 0,
                "processData": false,
                "mimeType": "multipart/form-data",
                "contentType": false,
                "data": formdata,
                "headers": {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}' // Include CSRF token in the headers
                }



            };

            $.ajax(settings).done(function (response) {
                $('#cardsContainer').empty();
                response = jQuery.parseJSON(response);
                var data = response.events;
                console.log(data);
                // Clear existing cards

                $.each(data, function (index, value) {
                    // Dynamically create the card HTML
                    var cards = `
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mix health_Wellness concert volunteer sports free business" data-ref="mixitup-target">
                    <div class="main-card mt-4">
                        <div class="event-thumbnail">
                            <a  href="{{url('event_detail/${value.Event_id}')}}" class="thumbnail-img">
                                <img src="${value.Event_Logo_Banner_Image}" alt="Event Image">
                            </a>
                            <span class="bookmark-icon"  onclick="favourite(${value.Event_id})" title="Bookmark"></span>
                        </div>
                        <div class="event-content">
                            <a  href="{{url('event_detail/${value.Event_id}')}}" class="event-title">${value.Event_Title}</a>
                            <div class="duration-price-remaining">
                                <span class="duration-price">₹&nbsp${value.Pricing}.00</span>
                                <span class="remaining"><i class="fa-solid fa-ticket fa-rotate-90"></i>${value.Capacity}</span>
                            </div>
                        </div>
                        <div class="event-footer">
                            <div class="event-timing">
                                <div class="publish-date">
                                    <span><i class="fa-solid fa-calendar-day me-2"></i>${value.Event_Date_Time}</span>
                                    <span class="dot"><i class="fa-solid fa-circle"></i></span>
                                    <span>${value.Location}</span>
                                </div>
                                <span class="publish-time"><i class="fa-solid fa-clock me-2"></i>${value.Event_Duration}</span>
                            </div>
                        </div>
                    </div>
                </div>
            `;

                    // Append the card to the container
                    $('#cardsContainer').append(cards);
                });
            });
        }
    </script>



    <script>



        function favourite(event_id) {
            var users = @json($users); // Convert the Laravel collection to JSON

            // Check if the user is authenticated
            if (users.length > 0) {
                var mobileNumber = users[0].Mobile_Number; // Assuming Mobile_Number is the key in the user object
            } else {
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: "Please sign in before adding this event to your wish list",
                    confirmButtonText: 'OK'
                });
                return; // Exiting the function to prevent further execution
            }

            var settings = {
                url: apiUrl + "/api/userwishlist_add",
                method: "POST",
                data: {
                    'Event_id': event_id,
                    'Mobile_Number': mobileNumber,
                    _token: '{{ csrf_token()}}'
                }
            };

            $.ajax(settings)
                .done(function (response) {
                    Swal.fire({
                        icon: 'message',
                        title: 'message',
                        text: response.message,
                        confirmButtonText: 'OK'
                    });
                })
                .fail(function (jqXHR, textStatus, errorThrown) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: "Failed to add event to wish list. Please try again later.",
                        confirmButtonText: 'OK'
                    });
                    // Handle any errors
                });
        }
    </script>


</body>

</html>