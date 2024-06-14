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
		<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
		<link href='vendor/unicons-2.0.1/css/unicons.css' rel='stylesheet'>
		<link href="css/style.css" rel="stylesheet">
		<link href="css/datepicker.min.css" rel="stylesheet">
		<link href="css/jquery-steps.css" rel="stylesheet">
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
	<!-- Create Single Ticket Model Start-->
	<div class="modal fade" id="singleTicketModal" tabindex="-1" aria-labelledby="singleTicketModalLabel" aria-hidden="false">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="singleTicketModalLabel">Create Single Ticket</h5>
					<button type="button" class="close-model-btn" data-bs-dismiss="modal" aria-label="Close"><i class="uil uil-multiply"></i></button>
				</div>
				<div class="modal-body">
					<div class="model-content main-form">
						<div class="row">
							<div class="col-lg-12 col-md-12">
								<div class="form-group mt-4">
									<label class="form-label">Ticket Name*</label>
									<input class="form-control h_40" type="text" placeholder="Event Ticket Name" value="">																								
								</div>
							</div>
							<div class="col-lg-12 col-md-12">
								<div class="main-card p-4 mt-4">
									<div class="form-label mb-4 fs-16">Ticket Restrictions</div>
									<div class="form-group border_bottom">
										<div class="d-flex align-items-center flex-wrap pb-4 flex-nowrap">
											<h4 class="fs-14 mb-0 me-auto">Total number of tickets available</h4>
											<label class="btn-switch m-0 me-3">
												<input type="checkbox" id="is-restrict-total-ticket" checked="">
												<span class="checkbox-slider"></span>
											</label>
											<div>
											   <label class="fs-12 m-0">Unlimited</label>
											</div>
										</div>
										<div class="p-0 mb-4 total_ticket_per_level" style="display:none;">
											<div class="form-group">
												<div class="input-number">
													<input class="form-control h_40" type="number" min="0" max="30" placeholder="Enter Total Tickets">
												</div>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="d-flex align-items-center flex-wrap pt-4 flex-nowrap">
											<h4 class="fs-14 mb-0 me-auto">Maximum number of tickets for each customer</h4>
											<label class="btn-switch m-0 me-3">
												<input type="checkbox" id="is-restrict-ticket-per-user" checked="">
												<span class="checkbox-slider"></span>
											</label>
											<div>
											   <label class="fs-12 m-0">Unlimited</label>
											</div>
										</div>
										<div class="p-0 mt-4 total_ticket_per_user" style="display:none;">
											<div class="form-group">
												<div class="input-number">
													<input class="form-control h_40" type="number" min="0" max="30" placeholder="Enter Max. per order">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-12 col-md-12">
								<div class="main-card p-4 mt-4">
									<div class="form-label mb-4 fs-16">Ticket Restrictions</div>
									<div class="form-group">
										<label class="form-label mb-2 fs-14">Ticket Order*</label>
										<input class="form-control h_40" type="number" value="1" min="1" max="30" placeholder="Enter Sort Order">
									</div>
									<div class="form-group mt-4">
										<label class="form-label mb-2 fs-14">Ticket Description*</label>
										<textarea class="form-textarea" placeholder="Description will go here"></textarea>
									</div>
								</div>
							</div>
							<div class="col-lg-12 col-md-12">
								<div class="main-card p-4 mt-4">
									<div class="d-flex align-items-center justify-content-between price-variation-head">
										<h5 class="m-0 color-black fs-16"> 
										Variations (<span class="ticket-subtype-count">1</span>)</h5>
										<span class="add-btn btn-hover">  
											<i class="fa-regular fa-square-plus"></i>
										</span>
									</div>
									<div class="table-responsive">
										<div class="div-base-table border-0 mt-2 full-width small-table ticket-subtype-table">
											<div class="table-row table-head no-bg">
												<div class="table-col fs-14 text-light3">Price <span class="red">*</span></div>
												<div class="table-col fs-14 text-light3">Variation Name <span class="red">*</span></div>
												<div class="table-col fs-14 text-light3 text-right">Actions</div>
											</div>
											<div class="table-row ticket-subtype-row">
												<div class="table-col first-col">
													<div class="form-group m-0 form-custom-validation">                  
														<input class="form-control h_40" type="number" min="0" max="10000" required="" placeholder="Price" value="">
													</div>
												</div>
												<div class="table-col second-col">
													<div class="form-group m-0">
														<input class="form-control h_40" type="text" maxlength="75" required="" value="">
													</div>
												</div>
												<div class="table-col third-col">
													<button type="button" class="v-btn-close btn-hover">
														<i class="fa-solid fa-xmark"></i>
													</button>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-12 col-md-12">
								<div class="main-card p-4 mt-4">
									<div class="form-group">
										<div class="d-flex align-items-start">
											<label class="btn-switch m-0 me-3">
												<input type="checkbox" class="" id="bird-discount" value="">
												<span class="checkbox-slider"></span>
											</label>
											<div class="d-flex flex-column">
												<label class="color-black mb-1">I want to offer early bird discount.</label>
												<p class="mt-2 fs-14 d-block mb-3">Enabling this discount lets your attendees get all the regular tickets features at a discounted price. <a href="#" class="a-link">Learn more</a></p>
											</div>
										</div>
										<div class="online-event-discount-wrapper" style="display: none;">
											<div class="row g-3">
												<div class="col-md-3">
													<label class="form-label mt-3 fs-6">Discount*</label>
													<input class="form-control h_40" type="text" placeholder="0" value="">
												</div>
												<div class="col-md-3">
													<label class="form-label mt-3 fs-6">Price*</label>
													<select class="selectpicker">
														<option value="Percentage" selected="">Percent(%)</option>
														<option value="Fixed">Fixed($)</option>
													</select>
												</div>
												<div class="col-md-3">
													<label class="form-label mt-3 fs-6">Discount ends on*</label>
													<div class="loc-group position-relative">
														<input class="form-control h_40 datepicker-here" data-language="en" data-position="top left" type="text" placeholder="MM/DD/YYYY" value="">
														<span class="absolute-icon top_0"><i class="fa-solid fa-calendar-days"></i></span>
													</div>
												</div>
												<div class="col-md-3">
													<div class="clock-icon">
														<label class="form-label mt-3 fs-6">Time</label>	
														<select class="selectpicker" data-size="5" data-live-search="true">
															<option value="00:00">12:00 AM</option>
															<option value="00:15">12:15 AM</option>
															<option value="00:30">12:30 AM</option>
															<option value="00:45">12:45 AM</option>
															<option value="01:00">01:00 AM</option>
															<option value="01:15">01:15 AM</option>
															<option value="01:30">01:30 AM</option>
															<option value="01:45">01:45 AM</option>
															<option value="02:00">02:00 AM</option>
															<option value="02:15">02:15 AM</option>
															<option value="02:30">02:30 AM</option>
															<option value="02:45">02:45 AM</option>
															<option value="03:00">03:00 AM</option>
															<option value="03:15">03:15 AM</option>
															<option value="03:30">03:30 AM</option>
															<option value="03:45">03:45 AM</option>
															<option value="04:00">04:00 AM</option>
															<option value="04:15">04:15 AM</option>
															<option value="04:30">04:30 AM</option>
															<option value="04:45">04:45 AM</option>
															<option value="05:00">05:00 AM</option>
															<option value="05:15">05:15 AM</option>
															<option value="05:30">05:30 AM</option>
															<option value="05:45">05:45 AM</option>
															<option value="06:00">06:00 AM</option>
															<option value="06:15">06:15 AM</option>
															<option value="06:30">06:30 AM</option>
															<option value="06:45">06:45 AM</option>
															<option value="07:00">07:00 AM</option>
															<option value="07:15">07:15 AM</option>
															<option value="07:30">07:30 AM</option>
															<option value="07:45">07:45 AM</option>
															<option value="08:00">08:00 AM</option>
															<option value="08:15">08:15 AM</option>
															<option value="08:30">08:30 AM</option>
															<option value="08:45">08:45 AM</option>
															<option value="09:00">09:00 AM</option>
															<option value="09:15">09:15 AM</option>
															<option value="09:30">09:30 AM</option>
															<option value="09:45">09:45 AM</option>
															<option value="10:00" selected="selected">10:00 AM</option>
															<option value="10:15">10:15 AM</option>
															<option value="10:30">10:30 AM</option>
															<option value="10:45">10:45 AM</option>
															<option value="11:00">11:00 AM</option>
															<option value="11:15">11:15 AM</option>
															<option value="11:30">11:30 AM</option>
															<option value="11:45">11:45 AM</option>
															<option value="12:00">12:00 PM</option>
															<option value="12:15">12:15 PM</option>
															<option value="12:30">12:30 PM</option>
															<option value="12:45">12:45 PM</option>
															<option value="13:00">01:00 PM</option>
															<option value="13:15">01:15 PM</option>
															<option value="13:30">01:30 PM</option>
															<option value="13:45">01:45 PM</option>
															<option value="14:00">02:00 PM</option>
															<option value="14:15">02:15 PM</option>
															<option value="14:30">02:30 PM</option>
															<option value="14:45">02:45 PM</option>
															<option value="15:00">03:00 PM</option>
															<option value="15:15">03:15 PM</option>
															<option value="15:30">03:30 PM</option>
															<option value="15:45">03:45 PM</option>
															<option value="16:00">04:00 PM</option>
															<option value="16:15">04:15 PM</option>
															<option value="16:30">04:30 PM</option>
															<option value="16:45">04:45 PM</option>
															<option value="17:00">05:00 PM</option>
															<option value="17:15">05:15 PM</option>
															<option value="17:30">05:30 PM</option>
															<option value="17:45">05:45 PM</option>
															<option value="18:00">06:00 PM</option>
															<option value="18:15">06:15 PM</option>
															<option value="18:30">06:30 PM</option>
															<option value="18:45">06:45 PM</option>
															<option value="19:00">07:00 PM</option>
															<option value="19:15">07:15 PM</option>
															<option value="19:30">07:30 PM</option>
															<option value="19:45">07:45 PM</option>
															<option value="20:00">08:00 PM</option>
															<option value="20:15">08:15 PM</option>
															<option value="20:30">08:30 PM</option>
															<option value="20:45">08:45 PM</option>
															<option value="21:00">09:00 PM</option>
															<option value="21:15">09:15 PM</option>
															<option value="21:30">09:30 PM</option>
															<option value="21:45">09:45 PM</option>
															<option value="22:00">10:00 PM</option>
															<option value="22:15">10:15 PM</option>
															<option value="22:30">10:30 PM</option>
															<option value="22:45">10:45 PM</option>
															<option value="23:00">11:00 PM</option>
															<option value="23:15">11:15 PM</option>
															<option value="23:30">11:30 PM</option>
															<option value="23:45">11:45 PM</option>
														</select>
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
				<div class="modal-footer">
					<button type="button" class="co-main-btn min-width btn-hover h_40" data-bs-target="#aboutModal" data-bs-toggle="modal" data-bs-dismiss="modal">Cancel</button>
					<button type="button" class="main-btn min-width btn-hover h_40">Save</button>
				</div>
			</div>
		</div>
	</div>
	<!-- Create Single Ticket Model End-->
	<!-- Create Group Ticket Model Start-->
	<div class="modal fade" id="groupTicketModal" tabindex="-1" aria-labelledby="groupTicketModalLabel" aria-hidden="false">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="groupTicketModalLabel">Create Group Ticket</h5>
					<button type="button" class="close-model-btn" data-bs-dismiss="modal" aria-label="Close"><i class="uil uil-multiply"></i></button>
				</div>
				<div class="modal-body">
					<div class="model-content main-form">
						<div class="row">
							<div class="col-lg-12 col-md-12">
								<div class="form-group mt-4">
									<label class="form-label">Ticket Name*</label>
									<input class="form-control h_40" type="text" placeholder="Enter Ticket Type - Group Name (E.g Gold - Family Pass)" value="">																								
								</div>
							</div>
							<div class="col-lg-12 col-md-12">
								<div class="main-card p-4 mt-4">
									<div class="form-label mb-4 fs-16">Ticket Restrictions</div>
									<div class="form-group border_bottom">
										<div class="d-flex align-items-center flex-wrap pb-4 flex-nowrap">
											<h4 class="fs-14 mb-0 me-auto">Total number of tickets available</h4>
											<label class="btn-switch m-0 me-3">
												<input type="checkbox" id="is-restrict-total-ticket2" checked="">
												<span class="checkbox-slider"></span>
											</label>
											<div>
											   <label class="fs-12 m-0">Unlimited</label>
											</div>
										</div>
										<div class="p-0 mb-4 total_ticket_per_level2" style="display:none;">
											<div class="form-group">
												<div class="input-number">
													<input class="form-control h_40" type="number" min="0" max="30" placeholder="Enter Total Tickets">
												</div>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="d-flex align-items-center flex-wrap pt-4 flex-nowrap">
											<h4 class="fs-14 mb-0 me-auto">Maximum number of tickets for each customer</h4>
											<label class="btn-switch m-0 me-3">
												<input type="checkbox" id="is-restrict-ticket-per-user2" checked="">
												<span class="checkbox-slider"></span>
											</label>
											<div>
											   <label class="fs-12 m-0">Unlimited</label>
											</div>
										</div>
										<div class="p-0 mt-4 total_ticket_per_user2" style="display:none;">
											<div class="form-group">
												<div class="input-number">
													<input class="form-control h_40" type="number" min="0" max="30" placeholder="Enter Max. per order">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-12 col-md-12">
								<div class="main-card p-4 mt-4">
									<div class="form-label mb-4 fs-16">Ticket Restrictions</div>
									<div class="form-group">
										<label class="form-label mb-2 fs-14">Ticket Order*</label>
										<input class="form-control h_40" type="number" value="1" min="1" max="30" placeholder="Enter Sort Order">
									</div>
									<div class="form-group mt-4">
										<label class="form-label mb-2 fs-14">Ticket Description*</label>
										<textarea class="form-textarea" placeholder="Description will go here"></textarea>
									</div>
								</div>
							</div>
							<div class="col-lg-12 col-md-12">
								<div class="form-group mt-4">
									<label class="form-label mb-2 fs-14">Ticket Price*</label>
									<input class="form-control h_40" type="number" value="10" placeholder="Enter Ticket Price">
								</div>
							</div>
							<div class="col-lg-12 col-md-12">
								<div class="form-group mt-4">
									<label class="form-label mb-2 fs-14">Number of tickets for each group*</label>
									<input class="form-control h_40" type="number" min="0" value="" placeholder="Enter Total Tickets Per Group">
								</div>
							</div>
							<div class="col-lg-12 col-md-12">
								<div class="main-card p-4 mt-4">
									<div class="form-group">
										<div class="d-flex align-items-start">
											<label class="btn-switch m-0 me-3">
												<input type="checkbox" class="" id="bird-discount2" value="">
												<span class="checkbox-slider"></span>
											</label>
											<div class="d-flex flex-column">
												<label class="color-black mb-1">I want to offer early bird discount.</label>
												<p class="mt-2 fs-14 d-block mb-3">Enabling this discount lets your attendees get all the regular tickets features at a discounted price. <a href="#" class="a-link">Learn more</a></p>
											</div>
										</div>
										<div class="online-event-discount-wrapper2" style="display: none;">
											<div class="row g-3">
												<div class="col-md-3">
													<label class="form-label mt-3 fs-6">Discount*</label>
													<input class="form-control h_40" type="text" placeholder="0" value="">
												</div>
												<div class="col-md-3">
													<label class="form-label mt-3 fs-6">Price*</label>
													<select class="selectpicker">
														<option value="Percentage" selected="">Percent(%)</option>
														<option value="Fixed">Fixed($)</option>
													</select>
												</div>
												<div class="col-md-3">
													<label class="form-label mt-3 fs-6">Discount ends on*</label>
													<div class="loc-group position-relative">
														<input class="form-control h_40 datepicker-here" data-language="en" data-position="top left" type="text" placeholder="MM/DD/YYYY" value="">
														<span class="absolute-icon top_0"><i class="fa-solid fa-calendar-days"></i></span>
													</div>
												</div>
												<div class="col-md-3">
													<div class="clock-icon">
														<label class="form-label mt-3 fs-6">Time</label>	
														<select class="selectpicker" data-size="5" data-live-search="true">
															<option value="00:00">12:00 AM</option>
															<option value="00:15">12:15 AM</option>
															<option value="00:30">12:30 AM</option>
															<option value="00:45">12:45 AM</option>
															<option value="01:00">01:00 AM</option>
															<option value="01:15">01:15 AM</option>
															<option value="01:30">01:30 AM</option>
															<option value="01:45">01:45 AM</option>
															<option value="02:00">02:00 AM</option>
															<option value="02:15">02:15 AM</option>
															<option value="02:30">02:30 AM</option>
															<option value="02:45">02:45 AM</option>
															<option value="03:00">03:00 AM</option>
															<option value="03:15">03:15 AM</option>
															<option value="03:30">03:30 AM</option>
															<option value="03:45">03:45 AM</option>
															<option value="04:00">04:00 AM</option>
															<option value="04:15">04:15 AM</option>
															<option value="04:30">04:30 AM</option>
															<option value="04:45">04:45 AM</option>
															<option value="05:00">05:00 AM</option>
															<option value="05:15">05:15 AM</option>
															<option value="05:30">05:30 AM</option>
															<option value="05:45">05:45 AM</option>
															<option value="06:00">06:00 AM</option>
															<option value="06:15">06:15 AM</option>
															<option value="06:30">06:30 AM</option>
															<option value="06:45">06:45 AM</option>
															<option value="07:00">07:00 AM</option>
															<option value="07:15">07:15 AM</option>
															<option value="07:30">07:30 AM</option>
															<option value="07:45">07:45 AM</option>
															<option value="08:00">08:00 AM</option>
															<option value="08:15">08:15 AM</option>
															<option value="08:30">08:30 AM</option>
															<option value="08:45">08:45 AM</option>
															<option value="09:00">09:00 AM</option>
															<option value="09:15">09:15 AM</option>
															<option value="09:30">09:30 AM</option>
															<option value="09:45">09:45 AM</option>
															<option value="10:00" selected="selected">10:00 AM</option>
															<option value="10:15">10:15 AM</option>
															<option value="10:30">10:30 AM</option>
															<option value="10:45">10:45 AM</option>
															<option value="11:00">11:00 AM</option>
															<option value="11:15">11:15 AM</option>
															<option value="11:30">11:30 AM</option>
															<option value="11:45">11:45 AM</option>
															<option value="12:00">12:00 PM</option>
															<option value="12:15">12:15 PM</option>
															<option value="12:30">12:30 PM</option>
															<option value="12:45">12:45 PM</option>
															<option value="13:00">01:00 PM</option>
															<option value="13:15">01:15 PM</option>
															<option value="13:30">01:30 PM</option>
															<option value="13:45">01:45 PM</option>
															<option value="14:00">02:00 PM</option>
															<option value="14:15">02:15 PM</option>
															<option value="14:30">02:30 PM</option>
															<option value="14:45">02:45 PM</option>
															<option value="15:00">03:00 PM</option>
															<option value="15:15">03:15 PM</option>
															<option value="15:30">03:30 PM</option>
															<option value="15:45">03:45 PM</option>
															<option value="16:00">04:00 PM</option>
															<option value="16:15">04:15 PM</option>
															<option value="16:30">04:30 PM</option>
															<option value="16:45">04:45 PM</option>
															<option value="17:00">05:00 PM</option>
															<option value="17:15">05:15 PM</option>
															<option value="17:30">05:30 PM</option>
															<option value="17:45">05:45 PM</option>
															<option value="18:00">06:00 PM</option>
															<option value="18:15">06:15 PM</option>
															<option value="18:30">06:30 PM</option>
															<option value="18:45">06:45 PM</option>
															<option value="19:00">07:00 PM</option>
															<option value="19:15">07:15 PM</option>
															<option value="19:30">07:30 PM</option>
															<option value="19:45">07:45 PM</option>
															<option value="20:00">08:00 PM</option>
															<option value="20:15">08:15 PM</option>
															<option value="20:30">08:30 PM</option>
															<option value="20:45">08:45 PM</option>
															<option value="21:00">09:00 PM</option>
															<option value="21:15">09:15 PM</option>
															<option value="21:30">09:30 PM</option>
															<option value="21:45">09:45 PM</option>
															<option value="22:00">10:00 PM</option>
															<option value="22:15">10:15 PM</option>
															<option value="22:30">10:30 PM</option>
															<option value="22:45">10:45 PM</option>
															<option value="23:00">11:00 PM</option>
															<option value="23:15">11:15 PM</option>
															<option value="23:30">11:30 PM</option>
															<option value="23:45">11:45 PM</option>
														</select>
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
				<div class="modal-footer">
					<button type="button" class="co-main-btn min-width btn-hover h_40" data-bs-target="#aboutModal" data-bs-toggle="modal" data-bs-dismiss="modal">Cancel</button>
					<button type="button" class="main-btn min-width btn-hover h_40">Save</button>
				</div>
			</div>
		</div>
	</div>
	<!-- Create Group Ticket Model End-->
	<!-- Header Start-->
	<header class="header">
		<div class="header-inner">
			<nav class="navbar navbar-expand-lg bg-barren barren-head navbar fixed-top justify-content-sm-start pt-0 pb-0">
				<div class="container">	
					<button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
						<span class="navbar-toggler-icon">
							<i class="fa-solid fa-bars"></i>
						</span>
					</button>
					<a class="navbar-brand order-1 order-lg-0 ml-lg-0 ml-2 me-auto" href="index.html">
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
									<a class="nav-link active" aria-current="page" href="index.html">Home</a>
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
										<li><a class="dropdown-item" href="faq.html">FAQ</a></li>
										<li><a class="dropdown-item" href="help_center.html">Help Center</a></li>
										<li><a class="dropdown-item" href="contact_us.html">Contact Us</a></li>
									</ul>
								</li>
								<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
										Pages
									</a>
									<ul class="dropdown-menu dropdown-submenu">
										<li>
											<a class="dropdown-item submenu-item" href="#">Other Pages</a>
											<ul class="submenu dropdown-menu">
												<li><a class="dropdown-item pe-5" href="sign_in.html">Sign In</a></li>
												<li><a class="dropdown-item pe-5" href="sign_up.html">Sign Up</a></li>
												<li><a class="dropdown-item pe-5" href="forgot_password.html">Forgot Password</a></li>
												<li><a class="dropdown-item pe-5" href="about_us.html">About Us</a></li>
												<li><a class="dropdown-item pe-5" href="checkout.html">Checkout</a></li>
												<li><a class="dropdown-item pe-5" href="checkout_premium.html">Checkout Premium</a></li>
												<li><a class="dropdown-item pe-5" href="invoice.html">Invoice</a></li>
												<li><a class="dropdown-item pe-5" href="coming_soon.html">Coming Soon</a></li>
												<li><a class="dropdown-item pe-5" href="error_404.html">Error 404</a></li>
											</ul>
										</li>
										<li>
											<a class="dropdown-item submenu-item" href="#">Create Event</a>
											<ul class="submenu dropdown-menu">
												<li><a class="dropdown-item pe-5" href="create.html">Create</a></li>
												<li><a class="dropdown-item pe-5" href="create_venue_event.html">Create Venue Event</a></li>
												<li><a class="dropdown-item pe-5" href="create_online_event.html">Create Online Event</a></li>
											</ul>
										</li>
										<li>
											<a class="dropdown-item submenu-item" href="#">Events View</a>
											<ul class="submenu dropdown-menu">
												<li><a class="dropdown-item pe-5" href="online_event_detail_view.html">Online Event Detail View</a></li>
												<li><a class="dropdown-item pe-5" href="venue_event_detail_view.html">Venue Event Detail View</a></li>
											</ul>
										</li>
										<li><a class="dropdown-item" href="booking_confirmed.html">Booking Confirmed</a></li>
										<li><a class="dropdown-item" href="attendee_profile_view.html">Attendee Profile View</a></li>
										<li><a class="dropdown-item" href="organiser_profile_view.html">Organiser Profile View</a></li>
										<li><a class="dropdown-item" href="my_organisation_dashboard.html">Organization Dashboard</a></li>
										<li><a class="dropdown-item" href="sell_tickets_online.html">Sell Tickets Online</a></li>
										<li><a class="dropdown-item" href="refer_a_friend.html">Refer a Friend</a></li>
										<li><a class="dropdown-item" href="term_and_conditions.html">Terms & Conditions</a></li>
										<li><a class="dropdown-item" href="privacy_policy.html">Privacy Policy</a></li>
									</ul>
								</li>
							</ul>
						</div>
						<div class="offcanvas-footer">
							<div class="offcanvas-social">
								<h5>Follow Us</h5>
								<ul class="social-links">
									<li><a href="#" class="social-link"><i class="fab fa-facebook-square"></i></a>
									<li><a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
									<li><a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
									<li><a href="#" class="social-link"><i class="fab fa-linkedin-in"></i></a>
									<li><a href="#" class="social-link"><i class="fab fa-youtube"></i></a>
								</ul>
							</div>
						</div>
					</div>
					<div class="right-header order-2">
						<ul class="align-self-stretch">
							<li>
								<a href="create.html" class="create-btn btn-hover">
									<i class="fa-solid fa-calendar-days"></i>
									<span>Create Event</span>
								</a>
							</li>
							<li class="dropdown account-dropdown">
								<a href="#" class="account-link" role="button" id="accountClick" data-bs-auto-close="outside" data-bs-toggle="dropdown" aria-expanded="false">
									<img src="images/profile-imgs/img-13.jpg" alt="">
									<i class="fas fa-caret-down arrow-icon"></i>
								</a>
								<ul class="dropdown-menu dropdown-menu-account dropdown-menu-end" aria-labelledby="accountClick">
									<li>
										<div class="dropdown-account-header">
											<div class="account-holder-avatar">
												<img src="images/profile-imgs/img-13.jpg" alt="">
											</div>
											<h5>John Doe</h5>
											<p>johndoe@example.com</p>
										</div>
									</li>
									<li class="profile-link">
										<a href="my_organisation_dashboard.html" class="link-item">My Organisation</a>
										<a href="organiser_profile_view.html" class="link-item">My Profile</a>									
										<a href="sign_in.html" class="link-item">Sign Out</a>									
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
	<!-- Header End-->
	<!-- Body Start-->
	<div class="wrapper">
		<div class="breadcrumb-block">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-10">
						<div class="barren-breadcrumb">
							<nav aria-label="breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Home</a></li>
									<li class="breadcrumb-item"><a href="create.html">Create</a></li>
									<li class="breadcrumb-item active" aria-current="page">Create Online Event</li>
								</ol>
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
						<div class="main-title text-center">
							<h3>Create Venue Event</h3>
						</div>
					</div>
					<div class="col-xl-8 col-lg-9 col-md-12">
						<div class="wizard-steps-block">
							<div id="add-event-tab" class="step-app">
								<ul class="step-steps">
									<li class="active">
										<a href="#tab_step1">
											<span class="number"></span>
											<span class="step-name">Details</span>
										</a>
									</li>
									<li >
										<a href="#tab_step2" hidden>
											<span class="number"></span>
											<span class="step-name">Tickets</span>
										</a>
									</li>
									<li>
										<a href="#tab_step2">
											<span class="number"></span>
											<span class="step-name">Tickets</span>
										</a>
									</li>
								</ul>
								<div class="step-content">
									<div class="step-tab-panel step-tab-info active" id="tab_step1"> 
										<div class="tab-from-content">
											<div class="main-card">
												<div class="bp-title">
													<h4><i class="fa-solid fa-circle-info step_icon me-3"></i>Details</h4>
												</div>
												<div class="p-4 bp-form main-form">
													<div class="row">
														<div class="col-lg-12 col-md-12">
                                                            
															<form method="POST" id="details">
                                                                @csrf
                                                               
                                                                        <div class="form-group border_bottom pb_30">
                                                                            <label class="form-label fs-16">Give your event a
                                                                                name.*</label>
                                                                            <p class="mt-2 d-block fs-14 mb-3">See how your
                                                                                name appears on the event page and a list of all
                                                                                places where your event name will be used. <a
                                                                                    href="#" class="a-link">Learn
                                                                                    more</a></p>
                                                                            <input class="form-control h_50" type="text"
                                                                                name="Event_Title" id="Event_Title"
                                                                                placeholder="Enter event name here"
                                                                                value="">
                                                                        </div>
                                                                        
                                                                        <div class="form-group border_bottom pt_30 pb_30">
                                                                            <label class="form-label fs-16">When is your
                                                                                event?*</label>
                                                                            <p class="mt-2 fs-14 d-block mb-3">Tell your
                                                                                attendees when your event starts so they can get
                                                                                ready to attend.</p>
                                                                            <div class="row g-2">
                                                                                <div class="col-md-6">
                                                                                    <label class="form-label mt-3 fs-6">Event
                                                                                        Date.*</label>
                                                                                    <div class="loc-group position-relative">
                                                                                        <input
                                                                                            class="form-control h_50 datepicker-here"
                                                                                            data-language="en"
                                                                                            data-date-format="dd/mm/yyyy"
                                                                                            name="Event_Date" id="Event_Date"
                                                                                            type="text"
                                                                                            placeholder="DD/MM/YYYY"
                                                                                            value="">
                                                                                        <span class="absolute-icon"><i
                                                                                                class="fa-solid fa-calendar-days"></i></span>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <div class="row g-2">
                                                                                        <div class="col-md-6">
                                                                                            <div class="clock-icon">
                                                                                                <label
                                                                                                    class="form-label mt-3 fs-6">Time*</label>
                                                                                                <input
                                                                                                    class="form-control h_50 "
                                                                                                    type="time"
                                                                                                    name="Event_Time"
                                                                                                    id="Event_Time"
                                                                                                    type="text"
                                                                                                    placeholder="HH:MM AM/PM"
                                                                                                    value="">
                                                                                                
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-md-6">
                                                                                            <label
                                                                                                class="form-label mt-3 fs-6">Duration</label>
                                                                                            <input class="form-control h_50 "
                                                                                                type="text"
                                                                                                name="Event_Duration"
                                                                                                id="Event_Duration"
                                                                                                type="text"
                                                                                                placeholder="Event Duration..."
                                                                                                value="">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <label class="form-label mt-3 fs-6">Host
                                                                                        Name*</label>
                                                                                    <div class="loc-group position-relative">
                                                                                        <input class="form-control h_50 "
                                                                                            name="Event_Host" id="Event_Host"
                                                                                            type="text"
                                                                                            placeholder="Event Host..."
                                                                                            value="">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <label class="form-label mt-3 fs-6">Host
                                                                                        Mobile NO.*</label>
                                                                                    <div class="loc-group position-relative">
                                                                                        <input class="form-control h_50 "
                                                                                            name="Mobile_Number"
                                                                                            id="Mobile_Number" type="text"
                                                                                            placeholder="Event Host Mobile Number..."
                                                                                            value="">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group pt_30 pb_30">
                                                                            <label class="form-label fs-16">Add a image for
                                                                                your event banner.</label>
                                                                            <p class="mt-2 fs-14 d-block mb-3 pe_right">Upload
                                                                                colorful and vibrant images as the banner for
                                                                                your event! See how beautiful images help your
                                                                                event details page. <a href="#"
                                                                                    class="a-link">Learn more</a></p>
                                                                            <div class="content-holder mt-4">
                                                                                <div class="default-event-thumb">
                                                                                    <div class="default-event-thumb-btn">
                                                                                        <div class="thumb-change-btn">
                                                                                            <input type="file"
                                                                                                id="Event_Logo_Banner_Image"
                                                                                                name="Event_Logo_Banner_Image">
                                                                                            <label
                                                                                                for="Event_Logo_Banner_Image">Add
                                                                                                Banner
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <img src="images/banners/custom-img.jpg"
                                                                                        id="Banner_Image" alt="">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group border_bottom pb_30">
                                                                            <label class="form-label fs-16">Please describe
                                                                                your event.</label>
                                                                            <p class="mt-2 fs-14 d-block mb-3">Write a few
                                                                                words below to describe your event and provide
                                                                                any extra information such as schedules,
                                                                                itinerary or any special instructions required
                                                                                to attend your event.</p>
                                                                            <div class="text-editor mt-4">
                                                                                <textarea id="Event_Description"  rows="8"  class="form-control" name="Event_Description"></textarea>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group pt_30 pb-2">
                                                                            <label class="form-label fs-16">Where is your
                                                                                event taking place? *</label>
                                                                            <p class="mt-2 fs-14 d-block mb-3">Add a venue to
                                                                                your event to tell your attendees where to join
                                                                                the event.</p>
                                                                            <div class="stepper-data-set">
                                                                                <div class="content-holder template-selector">
                                                                                    <div class="row g-4">
                                                                                        {{-- <div class="col-md-12">
                                                                                            <div class="venue-event">
                                                                                                <div class="map">
                                                                                                    <iframe
                                                                                                        src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d27382.59422947023!2d75.84077125074462!3d30.919535510612153!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1534312417365"
                                                                                                        style="border:0"
                                                                                                        allowfullscreen></iframe>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div> --}}
                                                                                        <div class="col-md-6">
                                                                                            <div class="form-group mt-1">
                                                                                                <label
                                                                                                    class="form-label fs-6">Venue*</label>
                                                                                                <input
                                                                                                    class="form-control h_50"
                                                                                                    id="Venue"
                                                                                                    name="Venue"
                                                                                                    type="text"
                                                                                                    placeholder=""
                                                                                                    value="">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-md-6">
                                                                                            <div class="form-group mt-1">
                                                                                                <label
                                                                                                    class="form-label fs-6">Address*</label>
                                                                                                <input
                                                                                                    class="form-control h_50"
                                                                                                    id="Address"
                                                                                                    name="Address"
                                                                                                    type="text"
                                                                                                    placeholder=""
                                                                                                    value="">
                                                                                            </div>
                                                                                        </div>
        
                                                                                        <div class="col-md-6">
                                                                                            <div
                                                                                                class="form-group main-form mt-1">
                                                                                                <label
                                                                                                    class="form-label">Country*</label>
                                                                                                <select class="selectpicker"
                                                                                                    id="Country"
                                                                                                    name="Country"
                                                                                                    data-size="5"
                                                                                                    title="Nothing selected"
                                                                                                    data-live-search="true">
                                                                                                    <option value="Algeria">
                                                                                                        Algeria</option>
                                                                                                    <option value="Argentina">
                                                                                                        Argentina</option>
                                                                                                    <option value="Australia"
                                                                                                        selected="">
                                                                                                        Australia</option>
                                                                                                    <option value="Austria">
                                                                                                        Austria (Österreich)
                                                                                                    </option>
                                                                                                    <option value="Belgium">
                                                                                                        Belgium (België)
                                                                                                    </option>
                                                                                                    <option value="Bolivia">
                                                                                                        Bolivia</option>
                                                                                                    <option value="Brazil">
                                                                                                        Brazil</option>
                                                                                                    <option value="Canada">
                                                                                                        Canada</option>
                                                                                                    <option value="Chile">
                                                                                                        Chile</option>
                                                                                                    <option value="Colombia">
                                                                                                        Colombia</option>
                                                                                                    <option value="Costa Rica">
                                                                                                        Costa Rica</option>
                                                                                                    <option value="Cyprus">
                                                                                                        Cyprus</option>
                                                                                                    <option
                                                                                                        value="Czech Republic">
                                                                                                        Czech Republic</option>
                                                                                                    <option value="Denmark">
                                                                                                        Denmark</option>
                                                                                                    <option
                                                                                                        value="Dominican Republic">
                                                                                                        Dominican Republic
                                                                                                    </option>
                                                                                                    <option value="Estonia">
                                                                                                        Estonia</option>
                                                                                                    <option value="Finland">
                                                                                                        Finland</option>
                                                                                                    <option value="France">
                                                                                                        France</option>
                                                                                                    <option value="Germany">
                                                                                                        Germany</option>
                                                                                                    <option value="Greece">
                                                                                                        Greece</option>
                                                                                                    <option value="Hong Kong">
                                                                                                        Hong Kong</option>
                                                                                                    <option value="Iceland">
                                                                                                        Iceland</option>
                                                                                                    <option value="India" selected>
                                                                                                        India</option>
                                                                                                    <option value="Indonesia">
                                                                                                        Indonesia</option>
                                                                                                    <option value="Ireland">
                                                                                                        Ireland</option>
                                                                                                    <option value="Israel">
                                                                                                        Israel</option>
                                                                                                    <option value="Italy">
                                                                                                        Italy</option>
                                                                                                    <option value="Japan">
                                                                                                        Japan</option>
                                                                                                    <option value="Latvia">
                                                                                                        Latvia</option>
                                                                                                    <option value="Lithuania">
                                                                                                        Lithuania</option>
                                                                                                    <option value="Luxembourg">
                                                                                                        Luxembourg</option>
                                                                                                    <option value="Malaysia">
                                                                                                        Malaysia</option>
                                                                                                    <option value="Mexico">
                                                                                                        Mexico</option>
                                                                                                    <option value="Nepal">
                                                                                                        Nepal</option>
                                                                                                    <option
                                                                                                        value="Netherlands">
                                                                                                        Netherlands</option>
                                                                                                    <option
                                                                                                        value="New Zealand">
                                                                                                        New Zealand</option>
                                                                                                    <option value="Norway">
                                                                                                        Norway</option>
                                                                                                    <option value="Paraguay">
                                                                                                        Paraguay</option>
                                                                                                    <option value="Peru">
                                                                                                        Peru</option>
                                                                                                    <option
                                                                                                        value="Philippines">
                                                                                                        Philippines</option>
                                                                                                    <option value="Poland">
                                                                                                        Poland</option>
                                                                                                    <option value="Portugal">
                                                                                                        Portugal</option>
                                                                                                    <option value="Singapore">
                                                                                                        Singapore</option>
                                                                                                    <option value="Slovakia">
                                                                                                        Slovakia</option>
                                                                                                    <option value="Slovenia">
                                                                                                        Slovenia</option>
                                                                                                    <option
                                                                                                        value="South Africa">
                                                                                                        South Africa</option>
                                                                                                    <option
                                                                                                        value="South Korea">
                                                                                                        South Korea</option>
                                                                                                    <option value="Spain">
                                                                                                        Spain</option>
                                                                                                    <option value="Sweden">
                                                                                                        Sweden</option>
                                                                                                    <option
                                                                                                        value="Switzerland">
                                                                                                        Switzerland</option>
                                                                                                    <option value="Tanzania">
                                                                                                        Tanzania</option>
                                                                                                    <option value="Thailand">
                                                                                                        Thailand</option>
                                                                                                    <option value="Turkey">
                                                                                                        Turkey</option>
                                                                                                    <option
                                                                                                        value="United Kingdom">
                                                                                                        United Kingdom</option>
                                                                                                    <option
                                                                                                        value="United States">
                                                                                                        United States</option>
                                                                                                    <option value="Vietnam">
                                                                                                        Vietnam</option>
                                                                                                </select>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-md-6">
                                                                                            <div class="form-group mt-1">
                                                                                                <label
                                                                                                    class="form-label">State*</label>
                                                                                                <input
                                                                                                    class="form-control h_50"
                                                                                                    id="State"
                                                                                                    name="State"
                                                                                                    type="text"
                                                                                                    placeholder="">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-lg-6 col-md-12">
                                                                                            <div class="form-group mt-1">
                                                                                                <label
                                                                                                    class="form-label">City*</label>
                                                                                                <input
                                                                                                    class="form-control h_50"
                                                                                                    inputmode="City"
                                                                                                    name="City"
                                                                                                    type="text"
                                                                                                    placeholder="">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-lg-6 col-md-12">
                                                                                            <div class="form-group mt-1">
                                                                                                <label
                                                                                                    class="form-label">Zip/Pin
                                                                                                    Code*</label>
                                                                                                <input
                                                                                                    class="form-control h_50"
                                                                                                    id="Pincode"
                                                                                                    name="Pincode"
                                                                                                    type="text"
                                                                                                    placeholder="">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    
                                                            </form>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									
									<div class="step-tab-panel step-tab-gallery" id="tab_step2">
										<div class="tab-from-content">
											<div class="main-card">
												<div class="bp-title">
													<h4><i class="fa-solid fa-ticket step_icon me-3"></i>Tickets</h4>
												</div>
												<div class="bp-form main-form">
													<div class="p-4 form-group border_bottom pb_30">
														<div class="row">
															<div class="ticket-section">
																<label class="form-label fs-16">Let's Create Tickets!</label>
																<p class="mt-2 fs-14 d-block mb-3 pe_right">Create tickets for your event by clicking on the 'Add Tickets' button below.</p>
															</div>
															<div class="d-flex align-items-center justify-content-between pt-4 pb-3 full-width">
																<h3 class="fs-18 mb-0">Tickets (<span class="venue-event-ticket-counter">3</span>)</h3>
                                                                <button id="add-ticket-btn" class="btn btn-primary mt-4">Add Ticket</button>
																	
															</div>


                                                            {{-- Bootking start time and date  --}}
                                                            {{-- <div class="setting-item border_bottom pb_30 pt-4">
                                                                <div class="d-flex align-items-start">
                                                                    <label class="btn-switch m-0 me-3">
                                                                        <input type="checkbox" class="" id="booking-start-time-btn" value="" checked>
                                                                        <span class="checkbox-slider"></span>
                                                                    </label>
                                                                    <div class="d-flex flex-column">
                                                                        <label class="color-black fw-bold mb-1">I want the bookings to start immediately.</label>
                                                                        <p class="mt-2 fs-14 d-block mb-0">Disable this option if you want to start your booking from a specific date and time.</p>
                                                                    </div>
                                                                </div>
                                                                <div class="booking-start-time-holder" style="display:none;">
                                                                    <div class="form-group pt_30">
                                                                        <label class="form-label fs-16">Booking starts on</label>
                                                                        <p class="mt-2 fs-14 d-block mb-0">Specify the date and time when you want the booking to start.</p>
                                                                        <div class="row g-3">
                                                                            <div class="col-md-6">
                                                                                <label class="form-label mt-3 fs-6">Event Date.*</label>																
                                                                                <div class="loc-group position-relative">
                                                                                    <input class="form-control h_50 datepicker-here" data-language="en" type="text" placeholder="MM/DD/YYYY" value="">
                                                                                    <span class="absolute-icon"><i class="fa-solid fa-calendar-days"></i></span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">																		
                                                                                <div class="clock-icon">
                                                                                    <label class="form-label mt-3 fs-6">Time</label>	
                                                                                    <input class="form-control h_50 " type="time" name="Booking_Time" id="Booking_Time" type="text"  placeholder="" value="">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div> --}}
															<div class="ticket-type-item-empty d-none text-center p_30">
																<div class="ticket-list-icon d-inline-block">
																	<img src="images/ticket.png" alt="">
																</div>
																<h4 class="color-black mt-4 mb-3 fs-18">You have no tickets yet.</h4>
																<p class="mb-0">You have not created a ticket yet. Please click the button above to create your event ticket.</p>
															</div>
															<div class="ticket-type-item-list mt-4" >
                                                                <form method="POST" id="ticket-container">
                                                                    @csrf
																{{-- <div class="price-ticket-card mt-4">
																	<div class="price-ticket-card-head d-md-flex flex-wrap align-items-start justify-content-between position-relative p-4">
																		<div class="d-flex align-items-center top-name">
																			<div class="icon-box">
																				<span class="icon-big rotate-icon icon icon-purple">
																					<i class="fa-solid fa-ticket"></i>
																				</span>
																				<h5 class="fs-16 mb-1 mt-1">Common </h5>
																				<p class="text-gray-50 m-0"><span class="visitor-date-time">This Ticket Contains the basic facilities.</span></p>
																			</div>
																		</div>
																		
																	</div>
																	<div class="price-ticket-card-body border_top p-4">
																		<div class="full-width d-flex flex-wrap justify-content-between align-items-center">
																			<div class="icon-box">
																				<div class="icon me-3">
																					<i class="fa-solid fa-ticket"></i>
																				</div>
																				<span class="text-145">Total tickets</span>
																				<h6 class="coupon-status"><input type="text" name="" id="" class="form-control"></h6>
																			</div>
																			<div class="icon-box">
																				<div class="icon me-3">
																					<i class="fa-solid fa-users"></i>
																				</div>
																				<span class="text-145">Ticket Category</span>
																				<h6 class="coupon-status"><input type="text" name="" id="" class="form-control"></h6>
																			</div>
																			<div class="icon-box">
																				<div class="icon me-3">
																					<i class="fa-solid fa-indian-rupee"></i>
																				</div>
																				<span class="text-145">Price</span>
																				<h6 class="coupon-status"><input type="text" name="" id="" class="form-control"></h6>
																			</div>
																		</div>
																	</div>
																</div> --}}
																{{-- <div class="price-ticket-card mt-4">
																	<div class="price-ticket-card-head d-md-flex flex-wrap align-items-start justify-content-between position-relative p-4">
																		<div class="d-flex align-items-center top-name">
																			<div class="icon-box">
																				<span class="icon-big rotate-icon icon icon-yellow">
																					<i class="fa-solid fa-ticket"></i>
																				</span>
																				<h5 class="fs-16 mb-1 mt-1" >Gold </h5>
																				<p class="text-gray-50 m-0"><span class="visitor-date-time">May 3, 2022</span></p>
																			</div>
																		</div>
																		
																	</div>
																	<div class="price-ticket-card-body border_top p-4">
																		<div class="full-width d-flex flex-wrap justify-content-between align-items-center">
																			<div class="icon-box">
																				<div class="icon me-3">
																					<i class="fa-solid fa-ticket"></i>
																				</div>
																				<span class="text-145">Total tickets</span>
																				<h6 class="coupon-status"><input type="text" name="" id="" class="form-control"></h6>
																			</div>
																			<div class="icon-box">
																				<div class="icon me-3">
																					<i class="fa-solid fa-users"></i>
																				</div>
																				<span class="text-145">Ticket Category</span>
																				<h6 class="coupon-status"><input type="text" name="" id="" class="form-control"></h6>
																			</div>
																			<div class="icon-box">
																				<div class="icon me-3">
																					<i class="fa-solid fa-indian-rupee"></i>
																				</div>
																				<span class="text-145">Price</span>
																				<h6 class="coupon-status"><input type="text" name="" id="" class="form-control"></h6>
																			</div>
																		</div>
																	</div>
																</div> --}}

																<div class="col-lg-12 col-md-12">
																	<div class="form-group mt-1">
																		<label
																			class="form-label">Enter Total No. of Tickets*</label>
																		<input class="form-control h_50" id="Total_Tickets" name="Total_Tickets" type="text" placeholder="total numer of tickets...">
																	</div>
																</div>

                                                                <div class="price-ticket-card mt-4" id="Ticket">
																	<div class="price-ticket-card-head d-md-flex flex-wrap align-items-start justify-content-between position-relative p-4">
																		<div class="d-flex align-items-center top-name">
																			<div class="icon-box">
																				<span class="icon-big rotate-icon icon text-secondary">
																					<i class="fa-solid fa-ticket"></i>
																				</span>
																				<h5 class="fs-16 mb-1 mt-1"><input type="text" name="Ticket_Name[]" id="Ticket_Name" class="form-control" placeholder="enter category"></h5>
																				<p class="text-gray-50 m-0"><span class="visitor-date-time">Common facilities.</span></p>
																			</div>
																		</div>
																		
																	</div>
																	<div class="price-ticket-card-body border_top p-4" id="TicketBody">
																		<div class="full-width d-flex flex-wrap justify-content-between align-items-center">
																			<div class="icon-box">
																				<div class="icon me-3">
																					<i class="fa-solid fa-ticket"></i>
																				</div>
																				<span class="text-145">No. of Tickets</span>
																				<h6 class="coupon-status"><input type="text" name="No_of_Tickets[]" id="No_of_Tickets" class="form-control"></h6>
																			</div>
																			{{-- <div class="icon-box">
																				<div class="icon me-3">
																					<i class="fa-solid fa-users"></i>
																				</div>
																				<span class="text-145">Ticket Category</span>
																				<h6 class="coupon-status"><input type="text" name="" id="" class="form-control"></h6>
																			</div> --}}
																			<div class="icon-box">
																				<div class="icon me-3">
																					<i class="fa-solid fa-indian-rupee"></i>
																				</div>
																				<span class="text-145">Price</span>
																				<h6 class="coupon-status"><input type="text" name="Price[]" id="Price" class="form-control"></h6>
																			</div>
																		</div>
																	</div>
																</div>
                                                                </form>																
															</div>
														</div>
													</div>
													
												</div>
											</div>
										</div>
									</div>
									 {{-- <div class="step-tab-panel step-tab-location" id="tab_step3">
										<div class="tab-from-content">											
											<div class="main-card">
												<div class="bp-title">
													<h4><i class="fa-solid fa-gear step_icon me-3"></i>Setting</h4>
												</div>
												<div class="p_30 bp-form main-form">
													<div class="form-group">
														<div class="ticket-section">
															<label class="form-label fs-16">Let's configure a few additional options for your event!</label>
															<p class="mt-2 fs-14 d-block mb-3 pe_right">Change the following settings based on your preferences to customise your event accordingly.</p>
															<div class="content-holder">
																<div class="setting-item border_bottom pb_30 pt-4">
																	<div class="d-flex align-items-start">
																		<label class="btn-switch m-0 me-3">
																			<input type="checkbox" class="" id="booking-start-time-btn" value="" checked>
																			<span class="checkbox-slider"></span>
																		</label>
																		<div class="d-flex flex-column">
																			<label class="color-black fw-bold mb-1">I want the bookings to start immediately.</label>
																			<p class="mt-2 fs-14 d-block mb-0">Disable this option if you want to start your booking from a specific date and time.</p>
																		</div>
																	</div>
																	<div class="booking-start-time-holder" style="display:none;">
																		<div class="form-group pt_30">
																			<label class="form-label fs-16">Booking starts on</label>
																			<p class="mt-2 fs-14 d-block mb-0">Specify the date and time when you want the booking to start.</p>
																			<div class="row g-3">
																				<div class="col-md-6">
																					<label class="form-label mt-3 fs-6">Event Date.*</label>																
																					<div class="loc-group position-relative">
																						<input class="form-control h_50 datepicker-here" data-language="en" type="text" placeholder="MM/DD/YYYY" value="">
																						<span class="absolute-icon"><i class="fa-solid fa-calendar-days"></i></span>
																					</div>
																				</div>
																				<div class="col-md-6">																		
																					<div class="clock-icon">
																						<label class="form-label mt-3 fs-6">Time</label>	
																						<select class="selectpicker" data-size="5" data-live-search="true">
																							<option value="00:00">12:00 AM</option>
																							<option value="00:15">12:15 AM</option>
																							<option value="00:30">12:30 AM</option>
																							<option value="00:45">12:45 AM</option>
																							<option value="01:00">01:00 AM</option>
																							<option value="01:15">01:15 AM</option>
																							<option value="01:30">01:30 AM</option>
																							<option value="01:45">01:45 AM</option>
																							<option value="02:00">02:00 AM</option>
																							<option value="02:15">02:15 AM</option>
																							<option value="02:30">02:30 AM</option>
																							<option value="02:45">02:45 AM</option>
																							<option value="03:00">03:00 AM</option>
																							<option value="03:15">03:15 AM</option>
																							<option value="03:30">03:30 AM</option>
																							<option value="03:45">03:45 AM</option>
																							<option value="04:00">04:00 AM</option>
																							<option value="04:15">04:15 AM</option>
																							<option value="04:30">04:30 AM</option>
																							<option value="04:45">04:45 AM</option>
																							<option value="05:00">05:00 AM</option>
																							<option value="05:15">05:15 AM</option>
																							<option value="05:30">05:30 AM</option>
																							<option value="05:45">05:45 AM</option>
																							<option value="06:00">06:00 AM</option>
																							<option value="06:15">06:15 AM</option>
																							<option value="06:30">06:30 AM</option>
																							<option value="06:45">06:45 AM</option>
																							<option value="07:00">07:00 AM</option>
																							<option value="07:15">07:15 AM</option>
																							<option value="07:30">07:30 AM</option>
																							<option value="07:45">07:45 AM</option>
																							<option value="08:00">08:00 AM</option>
																							<option value="08:15">08:15 AM</option>
																							<option value="08:30">08:30 AM</option>
																							<option value="08:45">08:45 AM</option>
																							<option value="09:00">09:00 AM</option>
																							<option value="09:15">09:15 AM</option>
																							<option value="09:30">09:30 AM</option>
																							<option value="09:45">09:45 AM</option>
																							<option value="10:00" selected="selected">10:00 AM</option>
																							<option value="10:15">10:15 AM</option>
																							<option value="10:30">10:30 AM</option>
																							<option value="10:45">10:45 AM</option>
																							<option value="11:00">11:00 AM</option>
																							<option value="11:15">11:15 AM</option>
																							<option value="11:30">11:30 AM</option>
																							<option value="11:45">11:45 AM</option>
																							<option value="12:00">12:00 PM</option>
																							<option value="12:15">12:15 PM</option>
																							<option value="12:30">12:30 PM</option>
																							<option value="12:45">12:45 PM</option>
																							<option value="13:00">01:00 PM</option>
																							<option value="13:15">01:15 PM</option>
																							<option value="13:30">01:30 PM</option>
																							<option value="13:45">01:45 PM</option>
																							<option value="14:00">02:00 PM</option>
																							<option value="14:15">02:15 PM</option>
																							<option value="14:30">02:30 PM</option>
																							<option value="14:45">02:45 PM</option>
																							<option value="15:00">03:00 PM</option>
																							<option value="15:15">03:15 PM</option>
																							<option value="15:30">03:30 PM</option>
																							<option value="15:45">03:45 PM</option>
																							<option value="16:00">04:00 PM</option>
																							<option value="16:15">04:15 PM</option>
																							<option value="16:30">04:30 PM</option>
																							<option value="16:45">04:45 PM</option>
																							<option value="17:00">05:00 PM</option>
																							<option value="17:15">05:15 PM</option>
																							<option value="17:30">05:30 PM</option>
																							<option value="17:45">05:45 PM</option>
																							<option value="18:00">06:00 PM</option>
																							<option value="18:15">06:15 PM</option>
																							<option value="18:30">06:30 PM</option>
																							<option value="18:45">06:45 PM</option>
																							<option value="19:00">07:00 PM</option>
																							<option value="19:15">07:15 PM</option>
																							<option value="19:30">07:30 PM</option>
																							<option value="19:45">07:45 PM</option>
																							<option value="20:00">08:00 PM</option>
																							<option value="20:15">08:15 PM</option>
																							<option value="20:30">08:30 PM</option>
																							<option value="20:45">08:45 PM</option>
																							<option value="21:00">09:00 PM</option>
																							<option value="21:15">09:15 PM</option>
																							<option value="21:30">09:30 PM</option>
																							<option value="21:45">09:45 PM</option>
																							<option value="22:00">10:00 PM</option>
																							<option value="22:15">10:15 PM</option>
																							<option value="22:30">10:30 PM</option>
																							<option value="22:45">10:45 PM</option>
																							<option value="23:00">11:00 PM</option>
																							<option value="23:15">11:15 PM</option>
																							<option value="23:30">11:30 PM</option>
																							<option value="23:45">11:45 PM</option>
																						</select>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
																<div class="setting-item border_bottom pb_30 pt_30">
																	<div class="d-flex align-items-start">
																		<label class="btn-switch m-0 me-3">
																			<input type="checkbox" class="" id="booking-end-time-btn" value="" checked>
																			<span class="checkbox-slider"></span>
																		</label>
																		<div class="d-flex flex-column">
																			<label class="color-black fw-bold mb-1">I want the bookings to continue until my event ends.</label>
																			<p class="mt-2 fs-14 d-block mb-0">Disable this option if you want to end your booking from a specific date and time.</p>
																		</div>
																	</div>
																	<div class="booking-end-time-holder" style="display:none;">
																		<div class="form-group pt_30">
																			<label class="form-label fs-16">Booking ends on</label>
																			<p class="mt-2 fs-14 d-block mb-0">Specify the date and time when you want the booking to start.</p>
																			<div class="row g-3">
																				<div class="col-md-6">
																					<label class="form-label mt-3 fs-6">Event Date.*</label>																
																					<div class="loc-group position-relative">
																						<input class="form-control h_50 datepicker-here" data-language="en" type="text" placeholder="MM/DD/YYYY" value="">
																						<span class="absolute-icon"><i class="fa-solid fa-calendar-days"></i></span>
																					</div>
																				</div>
																				<div class="col-md-6">																		
																					<div class="clock-icon">
																						<label class="form-label mt-3 fs-6">Time</label>	
																						<select class="selectpicker" data-size="5" data-live-search="true">
																							<option value="00:00">12:00 AM</option>
																							<option value="00:15">12:15 AM</option>
																							<option value="00:30">12:30 AM</option>
																							<option value="00:45">12:45 AM</option>
																							<option value="01:00">01:00 AM</option>
																							<option value="01:15">01:15 AM</option>
																							<option value="01:30">01:30 AM</option>
																							<option value="01:45">01:45 AM</option>
																							<option value="02:00">02:00 AM</option>
																							<option value="02:15">02:15 AM</option>
																							<option value="02:30">02:30 AM</option>
																							<option value="02:45">02:45 AM</option>
																							<option value="03:00">03:00 AM</option>
																							<option value="03:15">03:15 AM</option>
																							<option value="03:30">03:30 AM</option>
																							<option value="03:45">03:45 AM</option>
																							<option value="04:00">04:00 AM</option>
																							<option value="04:15">04:15 AM</option>
																							<option value="04:30">04:30 AM</option>
																							<option value="04:45">04:45 AM</option>
																							<option value="05:00">05:00 AM</option>
																							<option value="05:15">05:15 AM</option>
																							<option value="05:30">05:30 AM</option>
																							<option value="05:45">05:45 AM</option>
																							<option value="06:00">06:00 AM</option>
																							<option value="06:15">06:15 AM</option>
																							<option value="06:30">06:30 AM</option>
																							<option value="06:45">06:45 AM</option>
																							<option value="07:00">07:00 AM</option>
																							<option value="07:15">07:15 AM</option>
																							<option value="07:30">07:30 AM</option>
																							<option value="07:45">07:45 AM</option>
																							<option value="08:00">08:00 AM</option>
																							<option value="08:15">08:15 AM</option>
																							<option value="08:30">08:30 AM</option>
																							<option value="08:45">08:45 AM</option>
																							<option value="09:00">09:00 AM</option>
																							<option value="09:15">09:15 AM</option>
																							<option value="09:30">09:30 AM</option>
																							<option value="09:45">09:45 AM</option>
																							<option value="10:00" selected="selected">10:00 AM</option>
																							<option value="10:15">10:15 AM</option>
																							<option value="10:30">10:30 AM</option>
																							<option value="10:45">10:45 AM</option>
																							<option value="11:00">11:00 AM</option>
																							<option value="11:15">11:15 AM</option>
																							<option value="11:30">11:30 AM</option>
																							<option value="11:45">11:45 AM</option>
																							<option value="12:00">12:00 PM</option>
																							<option value="12:15">12:15 PM</option>
																							<option value="12:30">12:30 PM</option>
																							<option value="12:45">12:45 PM</option>
																							<option value="13:00">01:00 PM</option>
																							<option value="13:15">01:15 PM</option>
																							<option value="13:30">01:30 PM</option>
																							<option value="13:45">01:45 PM</option>
																							<option value="14:00">02:00 PM</option>
																							<option value="14:15">02:15 PM</option>
																							<option value="14:30">02:30 PM</option>
																							<option value="14:45">02:45 PM</option>
																							<option value="15:00">03:00 PM</option>
																							<option value="15:15">03:15 PM</option>
																							<option value="15:30">03:30 PM</option>
																							<option value="15:45">03:45 PM</option>
																							<option value="16:00">04:00 PM</option>
																							<option value="16:15">04:15 PM</option>
																							<option value="16:30">04:30 PM</option>
																							<option value="16:45">04:45 PM</option>
																							<option value="17:00">05:00 PM</option>
																							<option value="17:15">05:15 PM</option>
																							<option value="17:30">05:30 PM</option>
																							<option value="17:45">05:45 PM</option>
																							<option value="18:00">06:00 PM</option>
																							<option value="18:15">06:15 PM</option>
																							<option value="18:30">06:30 PM</option>
																							<option value="18:45">06:45 PM</option>
																							<option value="19:00">07:00 PM</option>
																							<option value="19:15">07:15 PM</option>
																							<option value="19:30">07:30 PM</option>
																							<option value="19:45">07:45 PM</option>
																							<option value="20:00">08:00 PM</option>
																							<option value="20:15">08:15 PM</option>
																							<option value="20:30">08:30 PM</option>
																							<option value="20:45">08:45 PM</option>
																							<option value="21:00">09:00 PM</option>
																							<option value="21:15">09:15 PM</option>
																							<option value="21:30">09:30 PM</option>
																							<option value="21:45">09:45 PM</option>
																							<option value="22:00">10:00 PM</option>
																							<option value="22:15">10:15 PM</option>
																							<option value="22:30">10:30 PM</option>
																							<option value="22:45">10:45 PM</option>
																							<option value="23:00">11:00 PM</option>
																							<option value="23:15">11:15 PM</option>
																							<option value="23:30">11:30 PM</option>
																							<option value="23:45">11:45 PM</option>
																						</select>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
																<div class="setting-item border_bottom pb_30 pt_30">
																	<div class="d-flex align-items-start">
																		<label class="btn-switch m-0 me-3">
																			<input type="checkbox" class="" id="passing-service-charge-btn" value="" checked>
																			<span class="checkbox-slider"></span>
																		</label>
																		<div class="d-flex flex-column">
																			<label class="color-black fw-bold mb-1">I want my customers to pay the applicable service fees at the time when they make the bookings.</label>
																			<p class="mt-2 fs-14 d-block mb-0 pe_right">Passing your service charge means your attendees will pay your service charge in addition to the ticket price. <a href="#" class="a-link">Learn more</a></p>
																		</div>
																	</div>
																</div>
																<div class="setting-item border_bottom pb_30 pt_30">
																	<div class="d-flex align-items-start">
																		<label class="btn-switch m-0 me-3">
																			<input type="checkbox" class="" id="refund-policies-btn" value="" checked>
																			<span class="checkbox-slider"></span>
																		</label>
																		<div class="d-flex flex-column">
																			<label class="color-black fw-bold mb-1">I do not wish to offer my customers with option to cancel their orders and receive refund.</label>
																			<p class="mt-2 fs-14 d-block mb-0">Disable this slider if you want to let your customers cancel their order and select a refund policy.</p>
																		</div>
																	</div>
																	<div class="refund-policies-holder" style="display:none;">
																		<div class="refund-policies-content border_top mt-4">
																			<div class="row grid-padding-8">
																				<div class="col-md-12 mb-6">
																					<div class="refund-method">
																						<div class="form-group mb-0">
																							<label class="brn-checkbox-radio mb-0 mt-4">
																								<input type="radio" required="" name="refund_policy_id" value="refund-id-1" class="form-check-input br-checkbox refund-policy1">
																								<span class="fs-14 fw-bold ms-xl-2">I wish to offer my customers with option to cancel their orders. However, I will handle refund manually.</span>
																								<span class="ms-xl-4 d-block sub-label mt-2 mb-4">Select this option if you want to refund your customer manually.</span>
																							</label>
																							<div class="refund-input-content" data-method="refund-id-1">
																								<div class="input-content mb-3">
																									<label class="color-black mb-2 fs-14 fw-bold">Cancellation must be made<span class="red">*</span></label>
																									<div class="d-block d-md-flex align-items-center flex-wrap flex-lg-wrap-reverse">
																										<div class="col-md-4 pl-0">
																											<div class="input-group mr-3 mx-width-135 input-number">
																												<input type="number" min="0" max="30" class="form-control" placeholder="">
																											</div>
																										</div>
																										<div class="input-sign ms-md-3 mt-3 mb-3">days before the event</div>
																									</div>
																								</div>
																							</div>
																						</div>
																					</div>
																					<div class="refund-method">
																						<label class="brn-checkbox-radio mb-0 mt-4">
																							<input type="radio" name="refund_policy_id" value="refund-id-2" class="form-check-input br-checkbox refund-polic-2">
																							<span class="fs-14 fw-bold ms-xl-2">I wish to offer my customers with option to cancel their orders and receive refund automatically.</span>
																							<span class="ms-xl-4 d-block sub-label mt-2 mb-4">Select this option if you want to refund your customer automatically.</span>
																						</label>
																						<div class="refund-input-content" data-method="refund-id-2">
																							<div class="input-content mb-3">
																								<label class="color-black mb-2 fs-14 fw-bold">Cancellation must be made <span class="red">*</span></label>
																								<div class="d-block d-md-flex align-items-center flex-wrap flex-lg-wrap-reverse">
																									<div class="col-md-4">
																										<div class="input-group input-number">
																											<input type="number" min="0" max="30" class="form-control" placeholder="">
																										</div>
																									</div>
																									<div class="input-sign ms-md-3 mt-3 mb-3">days before the event</div>
																								</div>
																							</div>
																							<div class="input-content mb-3">
																								<label class="color-black mb-2 fs-14 fw-bold">Refund amount <span class="red">*</span></label>
																								<div class="d-block d-md-flex align-items-center flex-wrap flex-lg-wrap-reverse">
																									<div class="col-md-4">
																										<div class="input-group loc-group position-relative">
																											<input type="text" value="" class="form-control" placeholder="">
																											<span class="percentage-icon"><i class="fa-solid fa-percent"></i></span>
																										</div>
																									</div>
																									<div class="input-sign ms-md-3 mt-3 mb-3">days before the event</div>
																								</div>
																							</div>
																						</div>
																					</div>
																				</div>
																			</div>																	
																		</div>
																	</div>
																</div>
																<div class="setting-item border_bottom pb_30 pt_30">
																	<div class="d-flex align-items-start">
																		<label class="btn-switch m-0 me-3">
																			<input type="checkbox" class="" id="ticket-instructions-btn" value="" checked>
																			<span class="checkbox-slider"></span>
																		</label>
																		<div class="d-flex flex-column">
																			<label class="color-black fw-bold mb-1">I do not require adding any special instructions on the tickets.</label>
																			<p class="mt-2 fs-14 d-block mb-0">Use this space to provide any last minute checklists your attendees must know in order to attend your event. Anything you provide here will be printed on your ticket.</p>
																		</div>
																	</div>		
																	<div class="ticket-instructions-holder" style="display:none;">
																		<div class="ticket-instructions-content mt-4">
																			<textarea class="form-textarea" placeholder="About"></textarea>
																		</div>
																	</div>
																</div>
																<div class="setting-item pb-0 pt_30">
																	<div class="d-flex align-items-start">
																		<label class="btn-switch m-0 me-3">
																			<input type="checkbox" class="" id="tags-btn" value="" checked>
																			<span class="checkbox-slider"></span>
																		</label>
																		<div class="d-flex flex-column">
																			<label class="color-black fw-bold mb-1">I do not want to add tags in my event</label>
																			<p class="mt-2 fs-14 d-block mb-0">Use relevant words as your tags to improve the discoverability of your event. <a href="#" class="a-link">Learn more</a></p>
																		</div>
																	</div>
																	<div class="tags-holder" style="display:none;">
																		<div class="ticket-instructions-content tags-container mt-4">
																			<input class="form-control tags-input" type="text" placeholder="Type your tags and press enter">
																			<div class="tags-list">
																				<!-- keywords go here -->									
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
									</div>														    --}}
								</div>
								<div class="step-footer step-tab-pager mt-4">
									<button data-direction="prev" class="btn btn-default btn-hover steps_btn">Previous</button>
									<button data-direction="next" class="btn btn-default btn-hover steps_btn">Next</button>
									<button data-direction="finish" class="btn btn-default btn-hover steps_btn" onclick=addEvent()>Create</button>
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
	<footer class="footer mt-auto">
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-6">
						<div class="footer-content">
							<h4>Company</h4>
							<ul class="footer-link-list">
								<li><a href="about_us.html" class="footer-link">About Us</a></li>
								<li><a href="help_center.html" class="footer-link">Help Center</a></li>
								<li><a href="faq.html" class="footer-link">FAQ</a></li>
								<li><a href="contact_us.html" class="footer-link">Contact Us</a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-3 col-md-6">
						<div class="footer-content">
							<h4>Useful Links</h4>
							<ul class="footer-link-list">
								<li><a href="create.html" class="footer-link">Create Event</a></li>
								<li><a href="sell_tickets_online.html" class="footer-link">Sell Tickets Online</a></li>
								<li><a href="privacy_policy.html" class="footer-link">Privacy Policy</a></li>
								<li><a href="term_and_conditions.html" class="footer-link">Terms & Conditions</a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-3 col-md-6">
						<div class="footer-content">
							<h4>Resources</h4>
							<ul class="footer-link-list">
								<li><a href="pricing.html" class="footer-link">Pricing</a></li>
								<li><a href="our_blog.html" class="footer-link">Blog</a></li>
								<li><a href="refer_a_friend.html" class="footer-link">Refer a Friend</a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-3 col-md-6">
						<div class="footer-content">
							<h4>Follow Us</h4>
							<ul class="social-links">
								<li><a href="#" class="social-link"><i class="fab fa-facebook-square"></i></a>
								<li><a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
								<li><a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
								<li><a href="#" class="social-link"><i class="fab fa-linkedin-in"></i></a>
								<li><a href="#" class="social-link"><i class="fab fa-youtube"></i></a>
							</ul>
						</div>
						<div class="footer-content">
							<h4>Download Mobile App</h4>
							<div class="download-app-link">
								<a href="#" class="download-btn"><img src="images/app-store.png" alt=""></a>
								<a href="#" class="download-btn"><img src="images/google-play.png" alt=""></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="footer-copyright-text">
							<p class="mb-0">© 2022, <strong>Barren</strong>. All rights reserved. Powered by Gambolthemes</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- Footer End-->
	
	
	<script src="js/jquery.min.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="vendor/OwlCarousel/owl.carousel.js"></script>
	<script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>	
	<script src="vendor/ckeditor5/ckeditor.js"></script>
	<script src="js/custom.js"></script>
	<script src="js/night-mode.js"></script>
	<script src="js/jquery-steps.min.js"></script>
	<script src="js/datepicker.min.js"></script>
	<script src="js/i18n/datepicker.en.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
	<script>
		$('#add-event-tab').steps({
		  onFinish: function () {
			// alert('Wizard Completed');
		  }
		});		
	</script>
	 <script>

        // Function for showing selected image in the image banner---------
        $('#Event_Logo_Banner_Image').on('change', function(event) {
            var input = event.target;

            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#Banner_Image').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        });

        

<script>
    document.addEventListener('DOMContentLoaded', function() {
            document.getElementById('add-ticket-btn').addEventListener('click', function() {
                // Get the template ticket card
                var ticketCard = document.getElementById('Ticket');
                // Clone the ticket card
                var newTicketCard = ticketCard.cloneNode(true);
                // Clear the inputs in the cloned card
                var inputs = newTicketCard.getElementsByTagName('input');
                for (var i = 0; i < inputs.length; i++) {
                    inputs[i].value = '';
                }
                // Append the cloned card to the container
                document.getElementById('ticket-container').appendChild(newTicketCard);
            });
        });
</script>
</body>
</html>