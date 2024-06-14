﻿<!DOCTYPE html>
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
		<link href="vendor/OwlCarousel/assets/owl.theme.default.min.css"
			rel="stylesheet">
		<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css"
			rel="stylesheet">
		<link href="vendor/ckeditor5/sample/css/sample.css" rel="stylesheet">

	</head>

	<body class="d-flex flex-column h-100">
		<!-- Create Support Ticket Model Start-->
		<div class="modal fade" id="supportTicketModal" tabindex="-1"
			aria-labelledby="supportTicketModalLabel" aria-hidden="false">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="supportTicketModalLabel">Submit a ticket</h5>
						<button type="button" class="close-model-btn" data-bs-dismiss="modal"
							aria-label="Close"><i class="uil uil-multiply"></i></button>
					</div>
					<div class="modal-body">
						<div class="model-content main-form">
							<div class="row">
								<div class="col-lg-12 col-md-12">
									<div class="form-group mt-4">
										<label class="form-label">Contact Name*</label>
										<input class="form-control h_40" type="text" placeholder value>
									</div>
									<div class="form-group mt-4">
										<label class="form-label">Email*</label>
										<input class="form-control h_40" type="text" placeholder value>
									</div>
									<div class="form-group mt-4">
										<label class="form-label">Subject*</label>
										<input class="form-control h_40" type="text" placeholder value>
									</div>
									<div class="form-group mt-4">
										<label class="form-label">Description*</label>
										<div class="text-editor">
											<div id="tk_editor"></div>
										</div>
									</div>
									<div class="form-group mt-4">
										<label class="form-label">Priority*</label>
										<select class="selectpicker" title="None">
											<option value="High">High</option>
											<option value="Medium">Medium</option>
											<option value="Low">Low</option>
										</select>
									</div>
									<div class="form-group mt-4">
										<label class="form-label">Classifications*</label>
										<select class="selectpicker" title="None">
											<option value="Question">Question</option>
											<option value="Problem">Problem</option>
											<option value="Feature">Feature</option>
											<option value="Others">Others</option>
										</select>
									</div>
									<div class="form-group mt-4">
										<label class="form-label">Attechments*</label>
										<div class="upload-file-dt">
											<div class="upload-btn">
												<input class="uploadBtn-input" type="file"
													accept="image/*, application/pdf" id="upload" multiple>
												<label for="upload" title="Image">Upload Files</label>
											</div>
											<span class="uploadBtn-file-name">Attach a file</span>
											<small>(Up to 20 MB )</small>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="co-main-btn min-width btn-hover h_40"
							data-bs-target="#aboutModal" data-bs-toggle="modal"
							data-bs-dismiss="modal">Cancel</button>
						<button type="button"
							class="main-btn min-width btn-hover h_40">Save</button>
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
														<input class="form-control h_50 w-100" type="text"
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
											<!-- <div class="col-xl-4 col-lg-12 col-md-12">
												<div class="main-card">
													<div class="bp-title">
														<h4>FAQ</h4>
													</div>
													<div class="help-faq-content">
														<a href="help_article_detail_view.html" class="help-faq-link">Does
															the new Barren affect my current events or attendees?</a>
														<a href="help_article_detail_view.html" class="help-faq-link">How
															do I transfer to the new platform?</a>
														<a href="help_article_detail_view.html" class="help-faq-link">How
															can I log into my old Barren account?</a>
														<a href="help_article_detail_view.html" class="help-faq-link">How
															do I know who has arrived at my event?</a>
														<a href="help_article_detail_view.html" class="help-faq-link">How
															do I access the backend of my website (admin section)?</a>
														<a href="help_article_detail_view.html" class="help-faq-link">Does
															it take long to set up my account?</a>
														<a href="help_article_detail_view.html" class="help-faq-link">Can
															I easily share my events page?</a>
														<a href="help_article_detail_view.html" class="help-faq-link">How
															often will I get paid the ticket sales?</a>
														<a href="help_article_detail_view.html" class="help-faq-link">Do
															my customers have to make an account with Barren?</a>
														<a href="help_article_detail_view.html" class="help-faq-link">Are
															payments made via Barren secure?</a>
													</div>
												</div>
												<div class="main-card mt-4">
													<div class="bp-title">
														<h4>Related Articles</h4>
													</div>
													<div class="help-faq-content">
														<a href="help_article_detail_view.html" class="help-faq-link">How
															to import or add attendees at the backend</a>
														<a href="help_article_detail_view.html" class="help-faq-link">How
															do I switch my website on / off?</a>
														<a href="help_article_detail_view.html" class="help-faq-link">How
															to add, edit & delete users</a>
														<a href="help_article_detail_view.html"
															class="help-faq-link">Scanning tickets from the app</a>
														<a href="help_article_detail_view.html" class="help-faq-link">How
															to setup a Stripe account</a>
													</div>
												</div>
											</div> -->
											<div class="d-flex justify-content-center align-items-center vh-100">
												<div class="help-center-title mt-5 mt-xl-0">
													<h4 class="border_bottom text-center">How do I access the backend of my website
														(admin section)?</h4>
													<div class="main-card help-v-content p-4 ">
														<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
															Curabitur ornare sagittis mi. Sed ac accumsan ex. Nam
															pellentesque ultrices augue, at vestibulum elit feugiat at. In ac
															blandit justo, non elementum est. Praesent posuere magna in
															eleifend vestibulum. Duis non mauris accumsan, vestibulum purus
															at, suscipit magna. Proin nec hendrerit turpis. Vivamus tincidunt
															leo at urna sodales lobortis. Curabitur aliquet, eros eu
															imperdiet vehicula, orci augue elementum massa, id aliquet ex est
															ut quam.</p>
														<p>Mauris arcu est, malesuada bibendum facilisis a, pellentesque a
															urna. Nullam bibendum mi posuere mi convallis hendrerit.
															Phasellus tellus lacus, tincidunt sollicitudin elementum eget,
															efficitur non nisi. Phasellus vel eros ligula. Praesent vulputate
															convallis nibh non venenatis. Proin rhoncus non ante quis
															bibendum. Cras a varius risus. Nullam sed scelerisque urna, sit
															amet sodales est. Duis sagittis, ex in mollis lacinia, turpis
															eros volutpat erat, id cursus neque arcu vitae nulla. Nunc
															consectetur lorem velit, vel commodo eros ultricies eu. Sed eget
															eros at sapien efficitur convallis in eget elit. Interdum et
															malesuada fames ac ante ipsum primis in faucibus. Nunc vitae est
															at lorem porta dignissim. Mauris vulputate quis massa vitae
															imperdiet.</p>
														<p>Nam consectetur non odio ut lacinia. Morbi non imperdiet dui.
															Proin lacus eros, tempus non purus eu, mattis gravida enim. Morbi
															ornare et ante ut iaculis. Phasellus ut enim feugiat est volutpat
															convallis. Phasellus consectetur tempus varius. Nullam tincidunt
															a erat et finibus.</p>
														<div class="help-v-footer border_top">
															<div class="helful-feedback">
																<span class="helful-title">Helpful?</span>
																<a href="#" class="helpful-btn">
																	<i class="fa-solid fa-thumbs-up"></i>
																	<span>5</span>
																</a>
																<a href="#" class="helpful-btn">
																	<i class="fa-solid fa-thumbs-down fa-flip-horizontal"></i>
																	<span>0</span>
																</a>
															</div>
															<div class="help-publish-date">
																<span>Updated: 5 days ago</span>
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
							@if($users->isNotEmpty())
    @include('user.footer')
@else
    @include('guest.footer')
@endif
												<!-- Footer End-->

												<script src="js/jquery.min.js"></script>
												<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
												<script src="vendor/OwlCarousel/owl.carousel.js"></script>
												<script
													src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
												<script src="vendor/ckeditor5/ckeditor.js"></script>
												<script src="js/custom.js"></script>
												<script src="js/night-mode.js"></script>
												<script>
		ClassicEditor
		.create( document.querySelector( '#tk_editor' ), {
			// toolbar: [ 'heading', '|', 'bold', 'italic', 'link' ]
		} )
		.then( editor => {
			window.editor = editor;
		} )
		.catch( err => {
			console.error( err.stack );
		} );
	</script>
											</body>
										</html>