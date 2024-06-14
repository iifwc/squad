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
				{{-- <div class="row">
					<div class="col-lg-12 col-md-10">
						<div class="barren-breadcrumb">
							<nav aria-label="breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Terms & Conditions</li>
								</ol>
							</nav>
						</div>
					</div>
				</div> --}}
			</div>
		</div>
		<div class="event-dt-block p-80">
			<div class="container">
				<div class="row">
					{{-- <div class="col-lg-4 col-md-12">
						<div class="main-card">
							<div class="bp-title">
								<h4>Terms & Conditions</h4>
							</div>
							<div class="bp-content">
								<div class="group-terms-tabs">
									<div class="nav terms-tabs p-2 border-bottom-0 mt-4" role="tablist">
										<a class="term-link active" id="sellers-tab" data-bs-toggle="tab" href="#sellers" role="tab" aria-controls="sellers" aria-selected="true">for Ticket Sellers</a>
										<a class="term-link" id="buyer-tab" data-bs-toggle="tab" href="#buyer" role="tab" aria-controls="buyer" aria-selected="false">for Ticket Buyer</a>
									</div>
								</div>
							</div>
						</div>
					</div> --}}
                    <div class="col-lg-8 col-md-12">							
                        <div class="tab-content pt-0 p-2 mt-5 mt-lg-0" >
                            <div class="tab-pane fade show active" id="sellers" role="tabpanel">
                                <div class="terms-main-title">
									<h4>Terms & Conditions for Ticket Sellers</h4>
								</div>
								<div class="terms-content">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis molestie purus lorem, eget facilisis augue cursus eget. Aliquam posuere vehicula dignissim. Vivamus vitae odio consectetur, pharetra tortor ac, interdum urna. Cras leo mi, tincidunt non ultrices in, finibus ac dolor. Mauris tincidunt non metus id iaculis.</p>
									<ol>
										<li>Who we are and what we do</li>
									</ol>
									<ul>
										<li>
											Barren offers the following services to event organisers (“services”):
											<ul>
												<li>Nam consectetur felis a risus ultrices sollicitudin.</li>
												<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
												<li>In pulvinar ipsum a nisi venenatis aliquet at ullamcorper erat.</li>
												<li>Praesent elementum mi in finibus pellentesque.</li>
											</ul>										
										</li>
									</ul>
									<ol start="2">
										<li>Your use of our Services</li>
									</ol>
									<p>Mauris id ligula et est lacinia malesuada. Quisque leo purus, porttitor efficitur aliquet ac, dictum vitae eros. Pellentesque at nisl lorem. Aliquam pretium diam ullamcorper ullamcorper suscipit. In consectetur scelerisque odio sit amet sagittis. Nunc viverra justo vel ante placerat pharetra. Quisque eget est et tortor molestie iaculis. Proin a quam urna. Phasellus nec orci lacinia, egestas massa sed, pretium justo. Aliquam mauris arcu, rutrum vitae tortor ut, tincidunt scelerisque nisi. Suspendisse aliquam est nec malesuada rhoncus.</p>							
									<ol start="3">
										<li>Creating an account</li>
									</ol>
									<p>Phasellus faucibus eros nec quam rutrum congue. Quisque lobortis porttitor turpis, in volutpat libero accumsan eu. Sed feugiat massa sed venenatis ullamcorper. Integer sed volutpat dolor, aliquam bibendum leo. In sed eros scelerisque, tempus augue a, viverra turpis. Nam pharetra ipsum velit, sollicitudin dapibus nulla cursus ut. Nulla facilisi. Ut lacinia dui non nunc placerat, vitae tristique dui luctus. Quisque eu lorem euismod, tristique mi in, porttitor risus. Nam ut nisi quis nisi vehicula scelerisque. Vivamus vestibulum nibh cursus, commodo sem sit amet, mattis odio.</p>
									<ol start="4">
										<li>Content of the event page</li>
									</ol>
									<p>Morbi non facilisis ipsum. Mauris volutpat sagittis purus, nec mattis dui auctor quis. Maecenas interdum ex eget mauris ullamcorper, quis aliquet risus faucibus. Suspendisse posuere accumsan mi, ut accumsan elit. Duis aliquam a neque eu congue. Donec finibus felis vitae dui condimentum, sit amet placerat leo dapibus. In hac habitasse platea dictumst. Nunc tristique dolor vitae ipsum condimentum euismod. Morbi scelerisque ornare tortor in sodales. Duis ligula ex, tristique quis ultrices et, faucibus non metus.</p>
									<ol start="5">
										<li>Ownership of content</li>
									</ol>
									<p>Integer sed volutpat dolor, aliquam bibendum leo. In sed eros scelerisque, tempus augue a, viverra turpis. Nam pharetra ipsum velit, sollicitudin dapibus nulla cursus ut. Nulla facilisi. Ut lacinia dui non nunc placerat, vitae tristique dui luctus. Quisque eu lorem euismod, tristique mi in, porttitor risus. Nam ut nisi quis nisi vehicula scelerisque. Vivamus vestibulum nibh cursus, commodo sem sit amet, mattis odio.</p>
									<ol start="6">
										<li>Payment</li>
									</ol>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ut ex magna. Vivamus finibus faucibus luctus. Fusce eleifend turpis in tortor mattis tincidunt. Mauris sed eros blandit ipsum imperdiet egestas. Donec sit amet arcu at urna porttitor ullamcorper in eget mi. Cras id nisl ac elit tristique pretium. Mauris augue magna, consequat nec pharetra sed, cursus eu mauris.</p>
									<ol start="7">
										<li>Cancelled, varied or postponed events</li>
									</ol>
									<p>Pellentesque at nisl lorem. Aliquam pretium diam ullamcorper ullamcorper suscipit. In consectetur scelerisque odio sit amet sagittis. Nunc viverra justo vel ante placerat pharetra. Quisque eget est et tortor molestie iaculis. Proin a quam urna. Phasellus nec orci lacinia, egestas massa sed, pretium justo. Aliquam mauris arcu, rutrum vitae tortor ut, tincidunt scelerisque nisi. Suspendisse aliquam est nec malesuada rhoncus.</p>
									<ol start="8">
										<li>Exchanges and refunds</li>
									</ol>
									<p>In hac habitasse platea dictumst. Sed ultrices mauris quis condimentum dapibus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Fusce fermentum quis mi in vestibulum. Nullam volutpat nisl sed nibh ultricies, et lobortis mauris tristique. Cras aliquam nisi et turpis consectetur condimentum. Pellentesque sed ullamcorper sapien. Mauris nec augue eget ligula viverra aliquam. Ut a pellentesque metus. Integer ut elementum lorem. Sed bibendum fringilla orci, sed accumsan mauris egestas sed. Suspendisse elit sapien, cursus vitae congue at, hendrerit tempor nunc. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nullam lacinia facilisis ligula, blandit gravida elit sodales sit amet. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Curabitur volutpat imperdiet malesuada.</p>
									<ol start="9">
										<li>Unauthorised use of the Site</li>
									</ol>
									<p>Quisque eget est et tortor molestie iaculis. Proin a quam urna. Phasellus nec orci lacinia, egestas massa sed, pretium justo. Aliquam mauris arcu, rutrum vitae tortor ut, tincidunt scelerisque nisi. Suspendisse aliquam est nec malesuada rhoncus. Duis ligula ex, tristique quis ultrices et, faucibus non metus. Aliquam auctor in erat at tempus. Mauris finibus vitae justo et auctor. Integer dignissim erat lectus, quis porta tellus pretium ac. Ut in nunc ex.</p>
									<ol start="10">
										<li>Termination of Account</li>
									</ol>
									<p>hendrerit tempor nunc. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nullam lacinia facilisis ligula, blandit gravida elit sodales sit amet. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Curabitur volutpat imperdiet malesuada.</p>
									<ol start="11">
										<li>Consequences of a breach</li>
									</ol>
									<p>In sed eros scelerisque, tempus augue a, viverra turpis. Nam pharetra ipsum velit, sollicitudin dapibus nulla cursus ut. Nulla facilisi. Ut lacinia dui non nunc placerat, vitae tristique dui luctus. Quisque eu lorem euismod, tristique mi in, porttitor risus. Nam ut nisi quis nisi vehicula scelerisque. Vivamus vestibulum nibh cursus, commodo sem sit amet, mattis odio.</p>
									<ol start="12">
										<li>Disclaimer and Limitation of Liability</li>
									</ol>
									<p>Morbi non facilisis ipsum. Mauris volutpat sagittis purus, nec mattis dui auctor quis. Maecenas interdum ex eget mauris ullamcorper, quis aliquet risus faucibus. Suspendisse posuere accumsan mi, ut accumsan elit. Duis aliquam a neque eu congue. Donec finibus felis vitae dui condimentum, sit amet placerat leo dapibus.</p>
									<ol start="13">
										<li>Indemnity</li>
									</ol>
									<p>Nulla facilisi. Ut lacinia dui non nunc placerat, vitae tristique dui luctus. Quisque eu lorem euismod, tristique mi in, porttitor risus. Nam ut nisi quis nisi vehicula scelerisque. Vivamus vestibulum nibh cursus, commodo sem sit amet, mattis odio.</p>
									<ol start="14">
										<li>General Provisions</li>
									</ol>
									<p>Quisque eget est et tortor molestie iaculis. Proin a quam urna. Phasellus nec orci lacinia, egestas massa sed, pretium justo. Aliquam mauris arcu, rutrum vitae tortor ut, tincidunt scelerisque nisi. Suspendisse aliquam est nec malesuada rhoncus.</p>
								</div>
							</div>
							<div class="tab-pane fade" id="buyer" role="tabpanel">
								<div class="terms-main-title">
									<h4>Terms & Conditions for Ticket Buyer</h4>
								</div>
								<div class="terms-content">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis molestie purus lorem, eget facilisis augue cursus eget. Aliquam posuere vehicula dignissim. Vivamus vitae odio consectetur, pharetra tortor ac, interdum urna. Cras leo mi, tincidunt non ultrices in, finibus ac dolor. Mauris tincidunt non metus id iaculis.</p>
									<ol>
										<li>Who we are and what we do</li>
									</ol>
									<ul>
										<li>
											Barren offers the following services to event organisers (“services”):
											<ul>
												<li>Nam consectetur felis a risus ultrices sollicitudin.</li>
												<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
												<li>In pulvinar ipsum a nisi venenatis aliquet at ullamcorper erat.</li>
											</ul>										
										</li>
									</ul>
									<ol start="2">
										<li>Purchasing tickets or registrations</li>
									</ol>
									<p>Mauris id ligula et est lacinia malesuada. Quisque leo purus, porttitor efficitur aliquet ac, dictum vitae eros. Pellentesque at nisl lorem. Aliquam pretium diam ullamcorper ullamcorper suscipit. In consectetur scelerisque odio sit amet sagittis. Nunc viverra justo vel ante placerat pharetra. Quisque eget est et tortor molestie iaculis. Proin a quam urna. Phasellus nec orci lacinia, egestas massa sed, pretium justo. Aliquam mauris arcu, rutrum vitae tortor ut, tincidunt scelerisque nisi. Suspendisse aliquam est nec malesuada rhoncus.</p>							
									<ol start="3">
										<li>Payment</li>
									</ol>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ut ex magna. Vivamus finibus faucibus luctus. Fusce eleifend turpis in tortor mattis tincidunt. Mauris sed eros blandit ipsum imperdiet egestas. Donec sit amet arcu at urna porttitor ullamcorper in eget mi. Cras id nisl ac elit tristique pretium. Mauris augue magna, consequat nec pharetra sed, cursus eu mauris.</p>
									<ol start="4">
										<li>Cancelled, varied or postponed events</li>
									</ol>
									<p>Pellentesque at nisl lorem. Aliquam pretium diam ullamcorper ullamcorper suscipit. In consectetur scelerisque odio sit amet sagittis. Nunc viverra justo vel ante placerat pharetra. Quisque eget est et tortor molestie iaculis. Proin a quam urna. Phasellus nec orci lacinia, egestas massa sed, pretium justo. Aliquam mauris arcu, rutrum vitae tortor ut, tincidunt scelerisque nisi. Suspendisse aliquam est nec malesuada rhoncus.</p>
									<ol start="5">
										<li>Unauthorised Use</li>
									</ol>
									<p>In hac habitasse platea dictumst. Sed ultrices mauris quis condimentum dapibus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Fusce fermentum quis mi in vestibulum. Nullam volutpat nisl sed nibh ultricies, et lobortis mauris tristique. Cras aliquam nisi et turpis consectetur condimentum. Pellentesque sed ullamcorper sapien. Mauris nec augue eget ligula viverra aliquam. Ut a pellentesque metus. Integer ut elementum lorem. Sed bibendum fringilla orci, sed accumsan mauris egestas sed. Suspendisse elit sapien, cursus vitae congue at, hendrerit tempor nunc. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nullam lacinia facilisis ligula, blandit gravida elit sodales sit amet. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Curabitur volutpat imperdiet malesuada.</p>
									<ol start="6">
										<li>Permitted Use of the Site</li>
									</ol>
									<p>Quisque eget est et tortor molestie iaculis. Proin a quam urna. Phasellus nec orci lacinia, egestas massa sed, pretium justo. Aliquam mauris arcu, rutrum vitae tortor ut, tincidunt scelerisque nisi. Suspendisse aliquam est nec malesuada rhoncus. Duis ligula ex, tristique quis ultrices et, faucibus non metus. Aliquam auctor in erat at tempus. Mauris finibus vitae justo et auctor. Integer dignissim erat lectus, quis porta tellus pretium ac. Ut in nunc ex.</p>
									<ol start="7">
										<li>Breaches of Terms</li>
									</ol>
									<p>hendrerit tempor nunc. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nullam lacinia facilisis ligula, blandit gravida elit sodales sit amet. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Curabitur volutpat imperdiet malesuada.</p>
									<ol start="8">
										<li>Disclaimer and Limitation of Liability</li>
									</ol>
									<p>Morbi non facilisis ipsum. Mauris volutpat sagittis purus, nec mattis dui auctor quis. Maecenas interdum ex eget mauris ullamcorper, quis aliquet risus faucibus. Suspendisse posuere accumsan mi, ut accumsan elit. Duis aliquam a neque eu congue. Donec finibus felis vitae dui condimentum, sit amet placerat leo dapibus.</p>
									<ol start="9">
										<li>Indemnity</li>
									</ol>
									<p>Nulla facilisi. Ut lacinia dui non nunc placerat, vitae tristique dui luctus. Quisque eu lorem euismod, tristique mi in, porttitor risus. Nam ut nisi quis nisi vehicula scelerisque. Vivamus vestibulum nibh cursus, commodo sem sit amet, mattis odio.</p>
									<ol start="10">
										<li>General Provisions</li>
									</ol>
									<p>Quisque eget est et tortor molestie iaculis. Proin a quam urna. Phasellus nec orci lacinia, egestas massa sed, pretium justo. Aliquam mauris arcu, rutrum vitae tortor ut, tincidunt scelerisque nisi. Suspendisse aliquam est nec malesuada rhoncus.</p>
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
	<script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>	
	<script src="js/custom.js"></script>
	<script src="js/night-mode.js"></script>
</body>
</html>