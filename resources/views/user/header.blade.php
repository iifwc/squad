<header class="header">
    <div class="header-inner">
        <nav class="navbar navbar-expand-lg bg-barren barren-head navbar fixed-top justify-content-sm-start pt-0 pb-0">
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                    <span class="navbar-toggler-icon">
                        <i class="fa-solid fa-bars"></i>
                    </span>
                </button>
                <a class="navbar-brand order-1 order-lg-0 ml-lg-0 ml-2 me-auto" href="{{route('home')}}">
                    <div class="res-main-logo">
                        <img src="images/logo-icon.svg" alt="">
                    </div>
                    <div class="main-logo" id="logo">
                        <img src="images/logo.svg" alt="">
                        <img class="logo-inverse" src="images/dark-logo.svg" alt="">
                    </div>
                </a>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <div class="offcanvas-logo" id="offcanvasNavbarLabel">
                            <img src="images/logo-icon.svg" alt="">
                        </div>
                        <button type="button" class="close-btn" data-bs-dismiss="offcanvas" aria-label="Close">
                            <i class="fa-solid fa-xmark"></i>
                        </button>
                    </div>
                    <div class="offcanvas-body">
                        <div class="offcanvas-top-area">
                            <div class="create-bg">
                                <a href="create.html" class="offcanvas-create-btn">
                                    <i class="fa-solid fa-calendar-days"></i>
                                    <span>Create Event</span>
                                </a>
                            </div>
                        </div>
                        <ul class="navbar-nav justify-content-end flex-grow-1 pe_5">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Explore Events
                                </a>
                                <ul class="dropdown-menu dropdown-submenu">
                                    <li><a class="dropdown-item" href="explore_events.html">Explore Events</a></li>
                                    <li><a class="dropdown-item" href="venue_event_detail_view.html">Venue Event Detail View</a></li>
                                    <li><a class="dropdown-item" href="online_event_detail_view.html">Online Event Detail View</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="pricing.html">Pricing</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Blog
                                </a>
                                <ul class="dropdown-menu dropdown-submenu">
                                    <li><a class="dropdown-item" href="our_blog.html">Our Blog</a></li>
                                    <li><a class="dropdown-item" href="blog_detail_view.html">Blog Detail View</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Help
                                </a>
                                <ul class="dropdown-menu dropdown-submenu">
                                    <li><a class="dropdown-item" href="{{route('help_center')}}">Help Center</a></li>
                                    <li><a class="dropdown-item" href="{{route('contact_us')}}">Contact Us</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Pages
                                </a>
                                <ul class="dropdown-menu dropdown-submenu">
                                    <li><a class="dropdown-item" href="booking_confirmed.html">Booking Confirmed</a></li>
                                    <li><a class="dropdown-item" href="attendee_profile_view.html">Attendee Profile View</a></li>
                                    <li><a class="dropdown-item" href="invoice.html">Invoice</a></li>
                                    <li><a class="dropdown-item" href="{{route('terms_and_conditions')}}">Terms & Conditions</a></li>
                                    <li><a class="dropdown-item" href="{{route('privacy_policy')}}">Privacy Policy</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a id="notificationDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Notifications
                                    <span id="notificationBadge" class="badge bg-danger">4</span>
                                </a>
                                <ul id="notificationMenu" class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="notificationDropdown">
                                    <div class="dropdown-head bg-primary bg-pattern rounded-top">
                                        <div class="p-3">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <h6 class="m-0 fs-16 fw-semibold text-white">Notifications</h6>
                                                </div>
                                                <div class="col-auto dropdown-tabs">
                                                    <span class="badge badge-soft-light fs-13">4 New</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="px-2 pt-2">
                                            <ul class="nav nav-tabs dropdown-tabs nav-tabs-custom" data-dropdown-tabs="true" id="notificationItemsTab" role="tablist">
                                                <li class="nav-item waves-effect waves-light">
                                                    <a class="nav-link active" data-bs-toggle="tab" href="#all-noti-tab" role="tab" aria-selected="true">All (4)</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="tab-content" id="notificationItemsTabContent">
                                        <div class="tab-pane fade show active py-2 ps-2" id="all-noti-tab" role="tabpanel">
                                            <div data-simplebar style="max-height: 300px;" class="pe-2">
                                                <!-- Your notification items here -->
                                                <div class="text-reset notification-item d-block dropdown-item position-relative">
                                                    <div class="d-flex">
                                                        <div class="avatar-xs me-3">
                                                            <span class="avatar-title bg-soft-info text-info rounded-circle fs-16">
                                                                <i class="bx bx-badge-check"></i>
                                                            </span>
                                                        </div>
                                                        <div class="flex-1">
                                                            <a href="#!" class="stretched-link">
                                                                <h6 class="mt-0 mb-2 lh-base">Your <b>Elite</b> author Graphic Optimization <span class="text-secondary">reward</span> is ready!</h6>
                                                            </a>
                                                            <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                                                <span><i class="mdi mdi-clock-outline"></i> Just 30 sec ago</span>
                                                            </p>
                                                        </div>
                                                        <div class="px-2 fs-15">
                                                            <div class="form-check notification-check">
                                                                <input class="form-check-input" type="checkbox" value="" id="all-notification-check01">
                                                                <label class="form-check-label" for="all-notification-check01"></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                               
                                            </div>
                                        </div>
                                    </div>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="offcanvas-footer">
                        <div class="offcanvas-social">
                            <h5>Follow Us</h5>
                            <ul class="social-links">
                                <li><a href="#" class="social-link"><i class="fab fa-facebook-square"></i></a></li>
                                <li><a href="#" class="social-link"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#" class="social-link"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#" class="social-link"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#" class="social-link"><i class="fab fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="right-header order-2">
                    <ul class="align-self-stretch">
                        <li class="dropdown account-dropdown">
                            <a href="#" class="account-link" role="button" id="accountClick" data-bs-auto-close="outside" data-bs-toggle="dropdown" aria-expanded="false">
                                @if ($users->isNotEmpty())
                                    @foreach ($users as $user)
                                        @if ($user->Avatar)
                                            <img src="{{ $user->Avatar }}" alt="">
                                        @else
                                            <img src="https://img.freepik.com/premium-photo/male-female-profile-avatar-user-avatars-gender-icons_1020867-75342.jpg" alt="">
                                        @endif
                                        <i class="fas fa-caret-down arrow-icon"></i>
                                    @endforeach
                                @else
                                    <p>No user found</p>
                                @endif
                            </a>
                            <ul class="dropdown-menu dropdown-menu-account dropdown-menu-end" aria-labelledby="accountClick">
                                <li>
                                    <div class="dropdown-account-header">
                                        <div class="account-holder-avatar">
                                            @if ($users->isNotEmpty())
                                                @foreach ($users as $user)
                                                    <div>
                                                        @if ($user->Avatar)
                                                            <img src="{{ $user->Avatar }}" alt="">
                                                        @else
                                                            <img src="https://img.freepik.com/premium-photo/male-female-profile-avatar-user-avatars-gender-icons_1020867-75342.jpg" alt="">
                                                        @endif
                                                        @if ($user->Name)
                                                            <h5>{{ $user->Name }}</h5>
                                                        @endif
                                                        @if ($user->Email)
                                                            <p>{{ $user->Email }}</p>
                                                        @endif
                                                    </div>
                                                @endforeach
                                            @else
                                                <p>No user found</p>
                                            @endif
                                        </div>
                                    </div>
                                </li>
                                <li class="profile-link">
                                    <a href="{{route('profile')}}" class="link-item">My Profile</a>
                                    <a href="{{route('signout')}}" class="link-item">Sign Out</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <div class="night_mode_switch__btn">
                                <div id="night-mode" class="fas fa-moon fa-sun"></div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="overlay"></div>
    </div>
</header>
