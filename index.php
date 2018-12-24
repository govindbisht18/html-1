<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<title>MyaCare | Home</title>
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

	<!--css-->
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/owl.carousel.min.css" rel="stylesheet">
	<link href="css/owl.theme.default.min.css" rel="stylesheet">
	<link href="css/animate.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
</head>
<body class="home">
	<!--main-wrapper-->
	<div class="main_wrapper">
	
		<!--header-->
		<?php include 'header.php';?>
		<!--/header-->
		
		<!--banner-section-->
		<div class="banner_section div_section">
			<div class="owl-carousel owl-theme">
				<div class="item">
					<img src="images/slider1.jpg" alt="" class="img-responsive">
					<div class="banner_search_section">
						<h1>Find healthcare worldwide</h1>
						<div class="search_container">
							<div class="search_inner">
								
								<!--basic-search-->
								<div class="basic_search_form form_search active" id="form1">
									<div class="select_field field">
										<select class="form-control" name="">
											<option selected value="">Doctor Or healthcare provider</option>
											<option value="">Doctor</option>
											<option value="">Healthcare Provider</option>
										</select>
									</div>
									<div class="treatment_field field">
										<input type="text" class="form-control" placeholder="Treatment" autocomplete="off">
									</div>
									<div class="location_field field">
										<input type="text" class="form-control" placeholder="Treatment" autocomplete="off">
									</div>
									<div class="search_field field">
										<button type="button" class="search_btn form-control">Search</button>
									</div>
								</div>
								<!--/-basic-search-->
								
								<!--advance-search-form-->
								<div class="advance_search_form form_search" id="form2" style="display:none;">
									<ul class="search_tabs_nav">
										<li class="active">
											<a href="#!" class="tab1">Doctor and Healthcare Provider</a>
											<i class="fa fa-caret-down" aria-hidden="true"></i>
										</li>
										<li class="">
											<a href="#!" class="tab2">Doctor</a>
											<i class="fa fa-caret-down" aria-hidden="true"></i>
										</li>
										<li class="">
											<a href="#!" class="tab3">Healthcare Provider</a>
											<i class="fa fa-caret-down" aria-hidden="true"></i>
										</li>
									</ul>
									<div class="search_tab_content">
									
										<!--doctor-healthcare-provider-tab-->
										<div id="doctor_healthcare_tab" class="tab_pane tab1 active healthcare_search_form">
											<div class="form-group hp_field_1">
												<select class="form-control" name="">
													<option selected value="">Country of treatment *</option>
													<option value="">India</option>
													<option value="">Malaysia</option>
													<option value="">Thailand</option>
													<option value="">Turkey</option>
													<option value="">United Arab Emirates</option>
													<option value="">United Kingdom</option>
												</select>
											</div>
											<div class="form-group hp_field_2">
												<select class="form-control" name="">
													<option selected value="">State</option>
												</select>
											</div>
											<div class="form-group hp_field_3">
												<select class="form-control" name="">
													<option selected value="">City</option>
													<option value="">India</option>
													<option value="">Malaysia</option>
													<option value="">Thailand</option>
													<option value="">Turkey</option>
													<option value="">United Arab Emirates</option>
													<option value="">United Kingdom</option>
												</select>
											</div>
											<div class="form-group hp_field_4">
												<input type="text" class="form-control" placeholder="Type Of Provider" autocomplete="off">
											</div>
											<div class="form-group hp_field_5">
												<input type="text" class="form-control" placeholder="Accreditations" autocomplete="off">
											</div>
											<div class="form-group hp_field_6">
												<input type="text" class="form-control" placeholder="Specialities" autocomplete="off">
											</div>
											<div class="form-group hp_field_7">
												<input type="text" class="form-control" placeholder="Procedures" autocomplete="off">
											</div>
											<div class="form-group hp_field_8">
												<input type="text" class="form-control" placeholder="Services" autocomplete="off">
											</div>
											<div class="form-group hp_field_9">
												<input type="text" class="form-control" placeholder="Equipment" autocomplete="off">
											</div>
											<div class="form-group hp_field_10">
												<input type="text" class="form-control" placeholder="Translation Services" autocomplete="off">
											</div>
											<div class="form-group hp_field_11">
												<select class="form-control" name="">
													<option selected value="">Country of residence</option>
													<option value="">India</option>
													<option value="">Malaysia</option>
													<option value="">Thailand</option>
													<option value="">Turkey</option>
													<option value="">United Arab Emirates</option>
													<option value="">United Kingdom</option>
												</select>
											</div>
											<div class="form-group hp_field_12">
												<input type="text" class="form-control" placeholder="Insurance Plan" autocomplete="off">
												<span class="tooltip_span" data-toggle="tooltip" data-placement="top" title="Please select your Country of Residence to view the relevant Insurance plans.  Please make sure to confirm coverage with your insurance provider before going ahead with any procedure.">
													<i class="fa fa-info"></i>
												</span>
											</div>
											<div class="form-group treatment_field">
												<select class="form-control" name="">
													<option selected value="">Treatment for location</option>
												</select>
											</div>
											<div class="form-group search_field">
												<button type="button" class="search_btn form-control">Search</button>
											</div>
										</div>
										<!--/-doctor-healthcare-provider-tab-->
										
										<!--doctor-tab-->
										<div id="doctors_tab" class="tab_pane tab2 doctors_search_form">
											<div class="form-group hp_field_1">
												<select class="form-control" name="">
													<option selected value="">Country of treatment *</option>
													<option value="">India</option>
													<option value="">Malaysia</option>
													<option value="">Thailand</option>
													<option value="">Turkey</option>
													<option value="">United Arab Emirates</option>
													<option value="">United Kingdom</option>
												</select>
											</div>
											<div class="form-group hp_field_2">
												<select class="form-control" name="">
													<option selected value="">State</option>
												</select>
											</div>
											<div class="form-group hp_field_3">
												<select class="form-control" name="">
													<option selected value="">City</option>
												</select>
											</div>
											<div class="form-group hp_field_4">
												<input type="text" class="form-control" placeholder="Specialities" autocomplete="off">
											</div>
											<div class="form-group hp_field_5">
												<input type="text" class="form-control" placeholder="Procedures" autocomplete="off">
											</div>
											<div class="form-group hp_field_6">
												<input type="text" class="form-control" placeholder="Services" autocomplete="off">
											</div>
											<div class="form-group hp_field_7">
												<select class="form-control" name="">
													<option selected value="">Language</option>
												</select>
											</div>
											<div class="form-group hp_field_8">
												<input type="text" class="form-control" placeholder="Accreditations" autocomplete="off">
											</div>
											<div class="form-group hp_field_9">
												<input type="text" class="form-control" placeholder="No of procedures performed" autocomplete="off">
												<span class="tooltip_span" data-toggle="tooltip" data-placement="top" title="Please note a number of Doctors do not provide this information. Searching with this criteria may limit your search results">
													<i class="fa fa-info"></i>
												</span>
											</div>
											<div class="form-group hp_field_10">
												<input type="text" class="form-control" placeholder="Associated Healthcare Provider" autocomplete="off">
											</div>
											<div class="form-group hp_field_11">
												<input type="text" class="form-control" placeholder="No of Years of Experience" autocomplete="off">
											</div>
											<div class="form-group hp_field_12">
												<select class="form-control" name="">
													<option selected value="">Country of residence</option>
													<option value="">India</option>
													<option value="">Malaysia</option>
													<option value="">Thailand</option>
													<option value="">Turkey</option>
													<option value="">United Arab Emirates</option>
													<option value="">United Kingdom</option>
												</select>
											</div>
											<div class="form-group hp_field_13">
												<input type="text" class="form-control" placeholder="Insurance Plan" autocomplete="off">
												<span class="tooltip_span" data-toggle="tooltip" data-placement="top" title="Please select your Country of Residence to view the relevant Insurance plans.  Please make sure to confirm coverage with your insurance provider before going ahead with any procedure.">
													<i class="fa fa-info"></i>
												</span>
											</div>
											<div class="form-group treatment_field">
												<select class="form-control" name="">
													<option selected value="">Treatment for location</option>
												</select>
											</div>
											<div class="form-group search_field">
												<button type="button" class="search_btn form-control">Search</button>
											</div>
										</div>
										<!--/-doctor-tab-->
										
										<!--healthcare-provider-tab-->
										<div id="healthcare_tab" class="tab_pane tab3 healthcare_search_form">
											<div class="form-group hp_field_1">
												<select class="form-control" name="">
													<option selected value="">Country of treatment *</option>
													<option value="">India</option>
													<option value="">Malaysia</option>
													<option value="">Thailand</option>
													<option value="">Turkey</option>
													<option value="">United Arab Emirates</option>
													<option value="">United Kingdom</option>
												</select>
											</div>
											<div class="form-group hp_field_2">
												<select class="form-control" name="">
													<option selected value="">State</option>
												</select>
											</div>
											<div class="form-group hp_field_3">
												<select class="form-control" name="">
													<option selected value="">City</option>
													<option value="">India</option>
													<option value="">Malaysia</option>
													<option value="">Thailand</option>
													<option value="">Turkey</option>
													<option value="">United Arab Emirates</option>
													<option value="">United Kingdom</option>
												</select>
											</div>
											<div class="form-group hp_field_4">
												<input type="text" class="form-control" placeholder="Type Of Provider" autocomplete="off">
											</div>
											<div class="form-group hp_field_5">
												<input type="text" class="form-control" placeholder="Accreditations" autocomplete="off">
											</div>
											<div class="form-group hp_field_6">
												<input type="text" class="form-control" placeholder="Specialities" autocomplete="off">
											</div>
											<div class="form-group hp_field_7">
												<input type="text" class="form-control" placeholder="Procedures" autocomplete="off">
											</div>
											<div class="form-group hp_field_8">
												<input type="text" class="form-control" placeholder="Services" autocomplete="off">
											</div>
											<div class="form-group hp_field_9">
												<input type="text" class="form-control" placeholder="Equipment" autocomplete="off">
											</div>
											<div class="form-group hp_field_10">
												<input type="text" class="form-control" placeholder="Translation Services" autocomplete="off">
											</div>
											<div class="form-group hp_field_11">
												<select class="form-control" name="">
													<option selected value="">Country of residence</option>
													<option value="">India</option>
													<option value="">Malaysia</option>
													<option value="">Thailand</option>
													<option value="">Turkey</option>
													<option value="">United Arab Emirates</option>
													<option value="">United Kingdom</option>
												</select>
											</div>
											<div class="form-group hp_field_12">
												<input type="text" class="form-control" placeholder="Insurance Plan" autocomplete="off">
												<span class="tooltip_span" data-toggle="tooltip" data-placement="top" title="Please select your Country of Residence to view the relevant Insurance plans.  Please make sure to confirm coverage with your insurance provider before going ahead with any procedure.">
													<i class="fa fa-info"></i>
												</span>
											</div>
											<div class="form-group treatment_field">
												<select class="form-control" name="">
													<option selected value="">Treatment for location</option>
												</select>
											</div>
											<div class="form-group search_field">
												<button type="button" class="search_btn form-control">Search</button>
											</div>
										</div>
										<!--/-healthcare-provider-tab-->
										
									</div>
								</div>
								<!--/advance-search-form-->
							</div>
						</div>
						<div class="advanced_field">
							<span  data-id="#form1" class="search_toggle advance_toggle"><i class="fa fa-plus" aria-hidden="true"></i> Filters</span>
							<span data-id="#form2" class="search_toggle basic_toggle active"><i class="fa fa-minus" aria-hidden="true"></i> Basic search</span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/-banner-section-->
		
		<!--home-about-us-->
		<div class="home_about div_section">
			<div class="container">
				<h2><span>About</span> Us</h2>
				<p>Mya is a global end-to-end solution for your health and wellness needs. Our online portal connects healthcare professionals, healthcare providers and other service providers around the globe with customers.  Users will have access to solutions including doctors, hospitals, alternative medicine, wellness spas, health insurance, telehealth, pharmacies and other related services.</p>
				<p>Occasionally local hospitals do not have the expertise to deal with certain diseases or disorders,  and even when they do, the prices charged for treatment are out of the question. It's at times like these that you may have to consider traveling abroad to get the care you need in order to claim your health back.</p>
				<a href="#!" class="read_more_btn">Read More <i class="fa fa-long-arrow-right"></i></a>
			</div>
		</div>
		<!--/-home-about-us-->
		
		<!--news-&-partners-->
		<div class="news_partners div_section">
			<div class="news_container">
			<div class="news_aside wow slideInLeft" data-wow-duration="1s">
				<div class="title">
					<h3 class="h2"><span>Latest</span> News</h3>
					<a href="#!" class="view_all">View All <i class="fa fa-long-arrow-right"></i></a>
				</div>
				<div class="news_list">
					<div class="row">
						<div class="col-md-4 col-sm-4 news_img">
							<figure>
								<img src="images/mother-baby.jpg" alt="" class="img-responsive">
								<figcaption>24 Jul <br/> 2018</figcaption>
							</figure>
						</div>
						<div class="col-md-8 col-sm-8 news_info">
							<a href="#!" class="news_title">Mother, baby and child awards 2018</a>
							<p>Dubai London Clinic among top 15 Dental Care Providers. Vote for them to make them 1st!</p>
							<div class="read_news">
								<a href="#!">Read More <i class="fa fa-long-arrow-right"></i></a>
							</div>
						</div>
					</div>
				</div>
				<div class="news_list">
					<div class="row">
						<div class="col-md-4 col-sm-4 news_img">
							<figure>
								<img src="images/web-summit.png" alt="" class="img-responsive">
								<!-- <figcaption>24 Jul <br/> 2018</figcaption> -->
							</figure>
						</div>
						<div class="col-md-8 col-sm-8 news_info">
							<a href="#!" class="news_title">Visit us at web summit</a>
							<p>Visit us at Web Summit from November 5 - November 8.</p>
							<div class="read_news">
								<a href="#!">Read More <i class="fa fa-long-arrow-right"></i></a>
							</div>
						</div>
					</div>
				</div>					
			</div>
			
			<div class="partners_aside wow slideInRight" data-wow-duration="1s">
				<div class="title">
					<h3 class="h2"><span>Our</span> Partners</h3>
				</div>
				<div class="partners_slider">
					<div class="owl-carousel owl-theme">
						<div class="item">
							<div class="partner_logo">
								<img src="images/partner_thum/apex-small.jpg" alt="" class="img-responsive">
							</div>
							<div class="partner_logo">
								<img src="images/partner_thum/ambani-small.jpg" alt="" class="img-responsive">
							</div>
						</div>
						<div class="item">
							<div class="partner_logo"><img src="images/partner_thum/asthetics-small.jpg" alt="" class="img-responsive"></div>
							<div class="partner_logo"><img src="images/partner_thum/bangkok-small.jpg" alt="" class="img-responsive"></div>
						</div>
						<div class="item">
							<div class="partner_logo"><img src="images/partner_thum/blk-small.jpg" alt="" class="img-responsive"></div>
							<div class="partner_logo"><img src="images/partner_thum/brumrungrad-hospital-small.jpg" alt="" class="img-responsive"></div>
						</div>
						<div class="item">
							<div class="partner_logo"><img src="images/partner_thum/bupa-small.png" alt="" class="img-responsive"></div>
							<div class="partner_logo"><img src="images/partner_thum/century-small.jpg" alt="" class="img-responsive"></div>
						</div>
						<div class="item">
							<div class="partner_logo"><img src="images/partner_thum/dubai-london-clinic-small.jpg" alt="" class="img-responsive"></div>
							<div class="partner_logo"><img src="images/partner_thum/hinduja-small.jpg" alt="" class="img-responsive"></div>
						</div>
						<div class="item">
							<div class="partner_logo"><img src="images/partner_thum/jaslok-small.jpg" alt="" class="img-responsive"></div>
							<div class="partner_logo"><img src="images/partner_thum/medanta-small.png" alt="" class="img-responsive"></div>
						</div>
						<div class="item">
							<div class="partner_logo"><img src="images/partner_thum/narayana-small.jpg" alt="" class="img-responsive"></div>
							<div class="partner_logo"><img src="images/partner_thum/prime-small.png" alt="" class="img-responsive"></div>
						</div>
					</div>
				</div>
			</div>
			</div>
		</div>
		<!--/-news-&-partners-->
		
		<!--account_section-->
		<div class="accounts_section div_section wow fadeInUp" data-wow-duration="1s">
			<div class="container">
				<div class="accounts-tabs-container">
					<ul class="accounts-tabs mya-tabs">
						<li data-id="#user-accounts" class="active">
							<div class="tabs-title">
							<img src="images/user_icon_white.png" alt="" class="white_img">
							<img src="images/user_icon_gray.png" alt="" class="gray_img">
							<br><span>User</span><br>Accounts</div>
						</li>
						<li data-id="#doctor-accounts" class="">
							<div class="tabs-title">
							<img src="images/doctor_icon_white.png" alt="" class="white_img">
							<img src="images/doctor_icon_gray.png" alt="" class="gray_img">
							<br><span>Doctor</span><br>Accounts</div>
						</li>
						<li data-id="#health-care-provider" class="">
							<div class="tabs-title">
							<img src="images/health_care_icon_white.png" alt="" class="white_img">
							<img src="images/health_care_icon_gray.png" alt="" class="gray_img">
							<br><span>Health</span><br>Care Provider</div>
						</li>
						<li data-id="#user-loan" class="">
							<div class="tabs-title">
							<img src="images/loan_icon_white.png" alt="" class="white_img">
							<img src="images/loan_icon_gray.png" alt="" class="gray_img">
							<br><span>User</span><br>Loans</div>
						</li>
					</ul>
				</div>
				<div class="accounts-tabs-contents mya-tabs-content">
					<!--user-accounts-->
					<div class="account-tabs-pan mya-tab-pane active" id="user-accounts">
						<div class="vertical-img-container"> 
							<img src="images/user-account-small.jpg" alt="" class="img-responsive">
						</div>
						<div class="tabs-content">
							<h3 class="h2">
								<i><img src="images/user_icon_gray.png" alt=""></i>
								<span><b>User </b>Account</span></h3>
							<p>To get access to the directory of doctors, physicians, and healthcare providers, the only thing a patient need is to create a user account.</p> 
							<p> Through this account, you can have access to experts and specialist in various fields and sub-specialties all around the globe, as per your need, and you can get in touch with them with barely a click.</p>
							<a href="#!" class="read_more_btn">Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
						</div>                
					</div>
					<!--user-accounts-->
					
					<!--doctor-accounts-->
					<div class="account-tabs-pan mya-tab-pane active" id="doctor-accounts" style="display:none;">
						<div class="vertical-img-container"> 
							<img src="images/doctor-account-small.jpg" alt="" class="img-responsive">
						</div>
						<div class="tabs-content">
							<h3 class="h2">
								<i><img src="images/doctor_icon_gray.png" alt=""></i>
								<span><b>Doctor </b>Account</span></h3>
							<p>If you are a doctor, physician or a specialist, then this is an opportunity for you to cater your services and specialty to the world at large without leaving home.</p> 
							<p>You can showcase your expertise and specialty on one platform and have patients from all over the world come to you with consultations, diseases, disorders, all requiring treatments.</p>
							<a href="#!" class="read_more_btn">Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
						</div>                
					</div>
					<!--/doctor-accounts-->
					
					<!--health-care-provider-->
					<div class="account-tabs-pan mya-tab-pane" id="health-care-provider" style="display:none;">
						<div class="vertical-img-container"> 
							<img src="images/health-care-provider-small.jpg" alt="" class="img-responsive">
						</div>
						<div class="tabs-content">
							<h3 class="h2">
								<i><img src="images/health_care_icon_gray.png" alt=""></i>
								<span><b>Health </b>care provider</span></h3>
							<p>If you are a doctor, physician or a specialist, then this is an opportunity for you to cater your services and specialty to the world at large without leaving home.</p> 
							<p>You can showcase your expertise and specialty on one platform and have patients from all over the world come to you with consultations, diseases, disorders, all requiring treatments.</p>
							<a href="#!" class="read_more_btn">Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
						</div>                
					</div>
					<!--/health-care-provider-->
					
					<!--user-loan-->
					<div class="account-tabs-pan mya-tab-pane" id="user-loan" style="display:none;">
						<div class="vertical-img-container"> 
							<img src="images/user-loan-small.jpg" alt="" class="img-responsive">
						</div>
						<div class="tabs-content">
							<h3 class="h2">
								<i><img src="images/user_icon_gray.png" alt=""></i>
								<span><b>User </b>loan</span></h3>
							<p>If you are a doctor, physician or a specialist, then this is an opportunity for you to cater your services and specialty to the world at large without leaving home.</p> 
							<p>You can showcase your expertise and specialty on one platform and have patients from all over the world come to you with consultations, diseases, disorders, all requiring treatments.</p>
							<a href="#!" class="read_more_btn">Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
						</div>                
					</div>
					<!--/user-loan-->
				</div>
			</div>
		</div>
		<!--/-account_section-->
		
		<!--footer-->
		<?php include 'footer.php';?>
		<!--/footer-->
		
		<!--enquiry-popup-->
		<?php include 'enquiry-popup.php';?>
		<!--/enquiry-popup-->
		
		
	</div>
	<!--/main-wrapper-->



<!--Js-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/jquery-custom.js"></script>

<script>
	//home page banner slider
	$('.banner_section .owl-carousel').owlCarousel({
		loop:true,
		margin:0,
		nav:true,
		dots: false,
		touchDrag: false,
		mouseDrag: false,
		responsive:{
			0:{
				items:1
			},
			600:{
				items:1
			},
			1000:{
				items:1
			}
		}
	})

	//home page partners slider
	$('.partners_slider .owl-carousel').owlCarousel({
		loop:true,
		margin:10,
		nav:true,
		dots: false,
		touchDrag: true,
		mouseDrag: true,
		loop:false,
		responsive:{
			375:{
				items:1
			},
			600:{
				items:2
			},
			768:{
				items:3
			},
			1000:{
				items:3
			}
		}
	})
</script>


</body>
</html>
