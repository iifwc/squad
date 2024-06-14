<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=9">
    <meta name="description" content="Gambolthemes">
    <meta name="author" content="Gambolthemes">
    <title>Barren - Simple Online Event Ticketing System</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Favicon Icon -->
    <link rel="icon" type="image/png" href="images/fav.png">
    <!----usind fa-fa icon-->
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
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
    <link href="vendor/ckeditor5/sample/css/sample.css" rel="stylesheet">

</head>

<body class="d-flex flex-column h-100">
    <!-- Create Support Ticket Model Start-->
    <div class="modal fade" id="supportTicketModal" tabindex="-1" aria-labelledby="supportTicketModalLabel"
        aria-hidden="false">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="supportTicketModalLabel">Submit a ticket</h5>
                    <button type="button" class="close-model-btn" data-bs-dismiss="modal" aria-label="Close"><i
                            class="uil uil-multiply"></i></button>
                </div>
                <div class="modal-body" id="help_center_modal">
                    <div class="model-content main-form">
                        <form method="POST" id="help_center" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group mt-4">
                                        <label class="form-label">Contact Name*</label>
                                        <input class="form-control h_40" type="text" id="Contact_Name"
                                            name="Contact_Name">
                                    </div>
                                    <div class="form-group mt-4">
                                        <label class="form-label">Email*</label>
                                        <input class="form-control h_40" type="text" id="Email" name="Email">
                                    </div>
                                    <div class="form-group mt-4">
                                        <label class="form-label">Subject*</label>
                                        <input class="form-control h_40" type="text" id="Subject" name="Subject">
                                    </div>
                                    <div class="form-group mt-4">
                                        <label class="form-label">Description</label>
                                        <textarea name="Description" id="Description" rows="5" class="form-control"></textarea>
                                    </div>
                                    <div class="form-group mt-4">
                                        <label class="form-label">Query For</label>
                                        <select class="selectpicker" title="None" id="Query_For" name="Query_For">
                                            <option value="Site">Site</option>
                                            <option value="Organizer">Organizer</option>
                                            <!-- <option value="Low">Low</option> -->
                                        </select>
                                    </div>
                                    <div class="form-group mt-4">
                                        <label class="form-label">Claasification</label>
                                        <select class="selectpicker" title="None" id="Claasification"
                                            name="Claasification">
                                            <option value="Question">Question</option>
                                            <option value="Problem">Problem</option>
                                            <option value="Feature">Feature</option>
                                            <option value="Others">Others</option>
                                        </select>
                                    </div>
                                    <div class="form-group mt-4">
                                        <label class="form-label">Attachments*</label>
                                        <input type="file" class="form-control" name="Attachments">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary min-width btn-hover h_40"
                                            data-bs-dismiss="modal">Cancel</button>
                                        <button type="submit"
                                            class="btn btn-primary min-width btn-hover h_40">Save</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <!-- Create Support Ticket Model End-->
    <!-- Header Start-->
    @if($users->isNotEmpty())
    @include('user.header')
@else
    @include('guest.header')
@endif
    <!-- Header End-->
    <!-- Body Start-->
    <div class="wrapper">
        <div class="hero-banner">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-12">
                        <div class="hero-banner-content text-center">
                            <h2>How can we help?</h2>
                            <p class="ps-0">Search our knowledge base or submit a ticket.</p>
                            <div class>
                                <input class="form-control h_50 w-100 Center" type="text"
                                    placeholder="Search Articles...">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="explore-events p-80">
            <div class="container">
                <div class="row">
                    <!-- <div class="col-lg-4 col-md-12">
            <div class="main-card">
             <a href="help_section_detail_view.html"
              class="help-item d-flex align-center border_bottom">
              <div class="help-item-icon">
               <i class="fa-solid fa-calendar-days"></i>
              </div>
              <div class="help-item-content">
               <h4>I am an Organiser</h4>
               <span>76 Articles</span>
              </div>
             </a>
             <a href="help_section_detail_view.html"
              class="help-item d-flex align-center border_bottom">
              <div class="help-item-icon">
               <i class="fa-solid fa-user-tie"></i>
              </div>
              <div class="help-item-content">
               <h4>I am an Attendee</h4>
               <span>15 Articles</span>
              </div>
             </a>
             <a href="help_section_detail_view.html"
              class="help-item d-flex align-center border_bottom">
              <div class="help-item-icon">
               <i class="fa-solid fa-microphone"></i>
              </div>
              <div class="help-item-content">
               <h4>I am a Speaker</h4>
               <span>5 Articles</span>
              </div>
             </a>
             <a href="help_section_detail_view.html"
              class="help-item d-flex align-center border_bottom">
              <div class="help-item-icon">
               <i class="fa-solid fa-paper-plane"></i>
              </div>
              <div class="help-item-content">
               <h4>Promoting an Event</h4>
               <span>12 Articles</span>
              </div>
             </a>
             <a href="help_section_detail_view.html"
              class="help-item d-flex align-center border_bottom">
              <div class="help-item-icon">
               <i class="fa-solid fa-gear"></i>
              </div>
              <div class="help-item-content">
               <h4>Troubleshooting</h4>
               <span>9 Articles</span>
              </div>
             </a>
             <a href="help_section_detail_view.html"
              class="help-item d-flex align-center border_bottom">
              <div class="help-item-icon">
               <i class="fa-solid fa-file-lines"></i>
              </div>
              <div class="help-item-content">
               <h4>I use old Barren</h4>
               <span>40 Articles</span>
              </div>
             </a>
            </div>
           </div> -->
                    <div class="d-flex justify-content-center align-items-center vh-100">
                        <div class="help-center-title mt-5 mt-lg-0">

                            <h4 class="border_bottom text-center" style="padding-top: 40px;">Popular Articles</h4>
                            <div class="right-header order-2 text-center ">
                                <ul class="align-self-stretch" style="margin-left: 70%; padding-bottom: 10px;">
                                    <li>
                                        <a href="#" class="create-btn btn-hover" data-bs-toggle="modal"
                                            data-bs-target="#supportTicketModal">
                                            <i class="fa-solid fa-plus"></i>
                                            <span>Add Ticket</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="main-card" style="width: 1000px;">
                                <a href="help_article_detail_view.html" class="help-item-link">Creating an event</a>
                                <a href="help_article_detail_view.html" class="help-item-link">How
                                    do I access the backend of my website (admin section)?</a>
                                <a href="help_article_detail_view.html" class="help-item-link">Where is my event's
                                    name being used?</a>
                                <a href="help_article_detail_view.html" class="help-item-link">How
                                    to build my own survey?</a>
                                <a href="help_article_detail_view.html" class="help-item-link">Deleting & refunding
                                    tickets</a>
                                <a href="help_article_detail_view.html" class="help-item-link">How
                                    to import or add attendees at the backend</a>
                                <a href="help_article_detail_view.html" class="help-item-link">How
                                    to setup a Stripe account</a>
                                <a href="help_article_detail_view.html" class="help-item-link">Can
                                    my events page reflect my company's branding?</a>
                                <a href="help_article_detail_view.html" class="help-item-link">Do
                                    my customers have to make an account with Barren?</a>
                                <a href="help_article_detail_view.html" class="help-item-link">How
                                    do I know who has arrived at my event?</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Body End-->
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
    <script src="vendor/ckeditor5/ckeditor.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/night-mode.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>


let apiUrl = "{{ $Api_url }}";
        ClassicEditor
            .create(document.querySelector('#tk_editor'), {
                // toolbar: [ 'heading', '|', 'bold', 'italic', 'link' ]
            })
            .then(editor => {
                window.editor = editor;
            })
            .catch(err => {
                console.error(err.stack);
            });

        $("#help_center_modal").on("submit", function(event) {
            event.preventDefault();
            var formData = new FormData(document.getElementById('help_center'));

            $.ajax({
                url: apiUrl+"/api/queries",
                type: "POST",
                data: formData,
                contentType: false,
                processData: false,
                success: function(response) {
                    if (response.status == 'true') {
                        $("#help_center").trigger("reset");
                        location.reload();

                        // Display success message using SweetAlert
                        Swal.fire({
                            icon: 'success',
                            title: 'Success!',
                            text: 'Your query has been submitted successfully.',
                        });
                    }
                },
                error: function(xhr, status, error) {
                    // Handle error
                    Swal.fire({
                        icon: 'error',
                        title: 'Error!',
                        text: 'Failed to submit your query. Please try again later.',
                    });
                }
            });
        });
    </script>
</body>

</html>
