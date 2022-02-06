<?php
// include('../include.php');
?>

<?php

// $name = $email = $contact = $location = $message = "";
$errors = array();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$name = test_input($_POST["name"]);
	$contact = test_input($_POST["contact"]);
	$email = test_input($_POST["email"]);
	$location = test_input($_POST["location"]);
	$message = test_input($_POST["message"]);

	if (empty($_POST["name"])) {
		array_push($errors, "please enter your name");
	} else {
		$name = test_input($_POST["name"]);
	}

	if (empty($_POST["email"])) {
		$email = "";
		// array_push($errors, "please enter your email");
	} else {
		$email = test_input($_POST["email"]);
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			array_push($errors, "please enter a valid email Id.");
		}
	}

	if (empty($_POST["contact"])) {
		array_push($errors, "please enter your contact number");
	} else {
		$contact = test_input($_POST["contact"]);
	}

	if (empty($_POST["location"])) {
		$location = "";
		// array_push($errors, "please enter your location");
	} else {
		$messlocationage = test_input($_POST["location"]);
	}

	if (count($errors) == 0) {
		$email_to = "renuaerealtor@gmail.com";

		$text = "<br />
            <h3>Contact us Mail From mumbaireality.net.in</h3>
            Name: $name<br />
            Email Id: $email<br />
            Contact Number: $contact<br />
            Location: $location<br />
			Query: $message";

		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html; charset=utf-8" . "\r\n";
		$headers .= "From: <$email>" . "\r\n";

		if (mail($email_to, "Contact us Mail From mumbaireality.net.in", $text, $headers)) {
			$success = "Your message has been sent.";

			$curl = curl_init();
			curl_setopt_array($curl, array(
				CURLOPT_RETURNTRANSFER => 1,
				CURLOPT_URL => 'https://sanjarcrm.com/api/leads/submit',
				CURLOPT_POST => 1,
				CURLOPT_POSTFIELDS => array(
					'name' => $name,
					'email' => $email,
					'contact' => $contact,
					// 'location' => $location,
					'message' => $location,
					// 'extra' => 'https://budgetivfmumbai.com/',
					'table_alias' => 'mumbairealty_in_net_',
					'api_key' => '082279cc107842b7ddd66e61a2bbfbc0',
				),
			));
			// Send the request & save response to $resp
			$resp = curl_exec($curl);
			// Close request to clear up some resources
			curl_close($curl);

			// if ($_POST["email"] == "example@gmail.com" && $_POST["location"] == ".") {
			//echo '<script language="javascript"> window.location.href = "https://api.whatsapp.com/send?phone=919930739143&text=' . $message . '"; </script>';
			// }
			$name = $email = $contact = $location = $message = "";
		} else {
			array_push($errors, "<strong>Error : </strong> Your message has not been sent !");
		}
	}
}

function test_input($data)
{
	$data = trim($data);
	$data = stripslashes($data);
	return $data;
}
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Raheja Ascencio , Chandivali - New Residential Project in Kavesar, Chandivali</title>
	<meta name="description" content="Raheja Ascencio Properties presenting Raheja Ascencio  with premium residences in Kavesar, Chandivali. Perfectly designed homes with amenities like rooftop pool, sky lounge, spa, meditation pavilion and much more offers a comfortable and relaxed experience for each and every member of your family." />
	<meta name="keywords" content="Raheja Ascencio , Raheja Ascencio  Chandivali, Raheja Ascencio  Kavesar,  Raheja Ascencio  Kavesar Chandivali, Raheja Ascencio Properties Kavesar, Raheja Ascencio Properties Chandivali, Apartments in Kavesar, Flats in Kavesar, Property in Kavesar, Apartments in Kavesar, Projects in Kavesar, Apartments in Chandivali, Flats in Chandivali, Property in Chandivali, Apartments in Chandivali, Projects in Chandivali" />

	<link rel="canonical" href="index.php">
	<link rel="shortcut icon" href="https://www.Raheja Ascencioproperties.com/backoffice/data_content/projects/Raheja Ascencio__mumbai/landing_page/images/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="css/main_style.css">
	<link rel="stylesheet" href="css/fullpage.min.css">
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<link rel="stylesheet" href="css/jquery.fancybox.css">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">


	<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>

	<style type="text/css">
		.error_msg {
			border: solid 2px red !important;
		}

		.fieldwrapper.form-cta-btn .btn {
			text-align: center;
			font-family: 'Champagne-Limousines-Bold';
			padding: 0;
			margin: 0 5px 0 5px;
			border: none;
			background-color: #fff;
			color: #000;
			text-decoration: none;
			text-transform: uppercase;
			cursor: pointer;
			-webkit-transition: all 0.3s ease-in-out;
			transition: all 0.3s ease-in-out;
			font-size: 18px;
			max-width: 120px;
			border-radius: 5px;
			width: 100%;
			height: 40px;
			display: flex;
			align-items: center;
			justify-content: center;
		}

		.fieldwrapper.form-cta-btn .btn {
			color: #000;
			text-decoration: none;
			position: relative;
		}

		/*.fieldwrapper.form-cta-btn a:after {
  content: "\f178";
  font-family: 'FontAwesome';
  color: #000;
  margin-left: 10px;
}*/
	</style>

<body>
	<!-- <button class="menu-btn" onclick="document.getElementById('menuid').style.display='block'" style="width:auto;">Menu</button> -->
	<?php
	// include('../menu.php'); 
	?>
	<div style="    position: fixed;
    bottom: 24%;
    right: 3.6%;
    z-index: 20000;">
		<a href="tel:9930205302">
			<img src="images/phone.png" alt="call us" style="width:45px; height:45px">
		</a>
	</div>
	<div class="data" id="data">
		<a href="https://wa.me/+9930205302">
			<img src="images/whatsapp.svg" alt width="45px" style="width: 45px;">
		</a>
	</div>
	<header id="site_header">
		<div class="container">
			<div class="brand_logo"><a href="index.php"><img src="images/brand_logowhite.png" alt="" class="menu_logo1"   ></a></div>
			<div class="project_logo"><a href="index.php"><img src="images/project_logo_white.png" class="menu_logo2" alt=""></a></div>
			<nav id="site_nav">
				<ul id="menu">
					<li><a href="#overview" data-menuanchor="overview">Overview</a></li>
					<li><a href="#exclusiveamenities" data-menuanchor="exclusiveamenities">Exclusive Amenities</a></li>
					<li><a href="#podiumamenities" data-menuanchor="podiumamenities">Why Raheja </a></li>
					<li><a href="#gallery" data-menuanchor="gallery">GALLERY</a></li>
					<li><a href="#location" data-menuanchor="location">Location</a></li>
					<li><a href="#contact" data-menuanchor="contact">Contact Us</a></li>
				</ul>
			</nav>
			<div class="menu_burger">
				<span class="open_menu"><i class="fa fa-bars" aria-hidden="true"></i></span>
				<span class="close_menu"><i class="fa fa-times" aria-hidden="true"></i></span>
			</div>
		</div>
	</header>

	<main id="site_main">
		<div id="fullpage">
			<!-- Main slider start -->
			<div class="section active" id="home-wrp">
				<div class="main_slide owl-carousel">
					<div class="item slide_02">
						<div class="container banner_txt" style="z-index: 999999;">
							<h2 class="banner_head" style="z-index: 9999999;color: #fff; position: relative;">
								<span class="greeting"></span>
								<span style="display: none;" id="clock"></span>
								<span class="linebr" style="z-index: 99999999; color: #fff;">
									<span style="z-index: 9999999; position: relative; color: #fff;">THERE ARE VERY FEW LUXURIES</span>
									<span>THAT ARE EXCLUSIVELY YOURS</span>
									<span>Launching THE LAST & FINEST TOWER OF RAHEJA Chandivali</span>
									<span> Spacious 2 & 2 Plus Bed Homes starts from
										1.98 Cr* Onwards</span>
								</span>
							
							</h2>
							<p class="banner_para">For you, and only you.</p>
						</div>
					</div>
					<div class="item slide_04">
						<div class="container banner_txt">
							<h2 class="banner_head">
								<span class="greeting"></span>
								<span style="display: none;" id="clock"></span>
								<span class="linebr">
									<span>SOME EXPERIENCES</span>
									<span>ARE RESERVED FOR A FEW.</span>
									<span>AN EVENING SWIM IN THE SKY,</span>
									<span>FOR INSTANCE.</span>
								</span>
								<span class="linebr">2 Bed Premium: &#8377;1.27Cr.+* | 3 Bed Luxe:
									&#8377;1.69Cr.+*<br>Pay 5% now & relax till March 2022^</span>
							</h2>
							<p class="banner_para">For you, and only you.</p>
						</div>
					</div>
				</div>
			</div>
			<!-- Main slider end -->


			<!-- project overview start -->
			<div class="section bgsecond" id="overview-wrp">
				<div class="overview_bg"></div>
				<div class="container">
					<!-- <p>There’s a world that belongs to everybody. And then, there’s a world that’s designed for you.</p> -->
					<p class="overview_firstpara" style="position: relative; z-index: 999999; color: #fff;">Raheja Ascencio is the finest evolution of luxury homes at Raheja Chandivali. Built by K Raheja Corp one of Mumbai’s most trusted developers, this multi-storeyed tower has 2 and 2 plus residences which are thoughtfully planned to offer its residents the comfort of space & privacy.

						.</p>
					<p style="    color: #fff;
    position: relative;
    z-index: 9;">For you, and only you.</p>
				</div>
			</div>
			<!-- project overview end -->
			<!-- project Podium Amenities start -->
			<div class="section" id="exclusiveamenities-wrp">
				<div class="exclusiveamenities_slider owl-carousel owl-theme">
					<div class="item slide_01" data-dot="<button>Nature-Centric Privileges <span></span></button>">

						<div class="container banner_txt">
							<p class="banner_txtpara" style="">Raheja Ascencio has many amenities dedicated exclusively to its residents alone. A contemporary clubhouse is the hub around which many privileges are built. Raheja Ascencio also gives its residents a life amidst nature. The beautiful landscaping too hosts many amenities so that one can enjoy being in the lap of nature.</p>
							<h2 class="banner_txt_1"> Nature-Centric Privileges</h2>
							<ul class="exclusiveamenitiesul">
								<li class="exclusiveamenitiesulli">
									<a href="#" class="exclusiveamenitiesula">Mini forest trail</a>
								</li>
								<li class="exclusiveamenitiesulli">
									<a href="#" class="exclusiveamenitiesula"> Organic garden</a>

								</li>
								<li class="exclusiveamenitiesulli">
									<a href="#" class="exclusiveamenitiesula">Stepped garden</a>

								</li>

								<li class="exclusiveamenitiesulli">
									<a href="#" class="exclusiveamenitiesula"> Garden pavilion with sit-out areas</a>
								</li>

							</ul>
						</div>
					</div>
					<div class="item slide_02" data-dot="<button>Recreational Privileges<span></span></button>">
						<div class="container banner_txt">
							<p class="banner_txtpara" style="">Raheja Ascencio has many amenities dedicated exclusively to its residents alone. A contemporary clubhouse is the hub around which many privileges are built. Raheja Ascencio also gives its residents a life amidst nature. The beautiful landscaping too hosts many amenities so that one can enjoy being in the lap of nature.</p>

							<h2> Recreational Privileges </h2>
							<ul class="exclusiveamenitiesul">
								<li class="exclusiveamenitiesulli">
									<a href="#" class="exclusiveamenitiesula">Mini Amphitheatre with a party lawn
									</a>
								</li>
								<li class="exclusiveamenitiesulli">
									<a href="#" class="exclusiveamenitiesula"> Kids play area
									</a>
								</li>
								<li class="exclusiveamenitiesulli">
									<a href="#" class="exclusiveamenitiesula">Walkway</a>

								</li>

								<li class="exclusiveamenitiesulli">
									<a href="#" class="exclusiveamenitiesula"> Banquet hall</a>
								</li>

							</ul>

						</div>
					</div>
					<div class="item slide_03" data-dot="<button>Exclusive Privileges <span></span></button>">
						<div class="container banner_txt">
							<p class="banner_txtpara" style="">Raheja Ascencio has many amenities dedicated exclusively to its residents alone. A contemporary clubhouse is the hub around which many privileges are built. Raheja Ascencio also gives its residents a life amidst nature. The beautiful landscaping too hosts many amenities so that one can enjoy being in the lap of nature.</p>

							<h2>Exclusive Privileges</h2>

							<ul class="exclusiveamenitiesul">
								<li class="exclusiveamenitiesulli">
									<a href="#" class="exclusiveamenitiesula">Clubhouse
									</a>
								</li>
								<li class="exclusiveamenitiesulli">
									<a href="#" class="exclusiveamenitiesula"> Squash court
									</a>
								</li>
								<li class="exclusiveamenitiesulli">
									<a href="#" class="exclusiveamenitiesula">Fitness centre
									</a>

								</li>

								<li class="exclusiveamenitiesulli">
									<a href="#" class="exclusiveamenitiesula"> Indoor games room</a>
								</li>

							</ul>
						</div>
					</div>
					<!-- <div class="item slide_04" data-dot="<button>Raheja ascencio Balcony view <span></span></button>">
						<div class="container banner_txt">
							<h2>Balcony view for each tower</h2>
							<p>Relax and rejuvenate whenever you want with a Balcony view </p>
						</div>
					</div> -->
					<!-- <div class="item slide_05" data-dot="<button>Raheja ascencio Dual-lobby System <span></span></button>">
						<div class="container banner_txt">
							<h2>Dual-lobby system</h2>
							<p>Live the exclusive life with just 3 homes per lobby</p>
						</div>
					</div>
					<div class="item slide_06" data-dot="<button>Raheja ascencio No Shared Walls <span></span></button>">
						<div class="container banner_txt">
							<h2>No shared walls</h2>
							<p>Enjoy enhanced privacy with no shared walls between residences</p>
						</div>
					</div> -->
				</div>
			</div>
			<!-- project highlights end -->

			<!-- project Podium Amenities start -->
			<div class="section gallerybg " id="podiumamenities-wrp">
				<div class="whyrahejabg">
					<!-- <div class="podiumamenities_slider owl-carousel owl-theme">
					<div class="item slide_01" data-dot="<button>Multipurpose Play Court <span></span></button>">
						<div class="container banner_txt">
							<h2>Multipurpose Play Court</h2>
						</div>
					</div>
					<div class="item slide_02" data-dot="<button>Cricket Pitch <span></span></button>">
						<div class="container banner_txt">
							<h2>Cricket Pitch</h2>
						</div>
					</div>
					<div class="item slide_03" data-dot="<button>Kids’ Play Area <span></span></button>">
						<div class="container banner_txt">
							<h2>Kids’ Play Area</h2>
						</div>
					</div>
					<div class="item slide_04" data-dot="<button>Senior Citizen Corner <span></span></button>">
						<div class="container banner_txt">
							<h2>Senior Citizen Corner</h2>
						</div>
					</div>
					<div class="item slide_05" data-dot=
					
					>
						<div class="container banner_txt">
							<h2>Meditation Pavilion</h2>
						</div>
					</div>
				</div> -->
					<div class="container-fluid ">
						<p class="whyrahejafirst_p">
							Spacious 2 & 2 Plus Bed Homes starts from
							<br>
							<strong style="font-size: 35px;">1.98 Cr* </strong>
							Onwards
						</p>
						<div class="whyrahejarow">
							<div class="col-md-6">
								<h2 class="whyrahejafirtcol_fh2">PROJECT FEATURES</h2>
								<ul class="whyrahejaul">
									<li class="whyrahejali">
										<a href="#" class="whyrahejaa">30 Acre Township Development of Raheja Vihar in Chandivali .
										</a>
									</li>
									<li class="whyrahejali">
										<a href="#" class="whyrahejaa"> Raheja Ascencio – Total Area: 1.76 Acres & Landscaped Area 76% of The Total Plot
										</a>
									</li>
									<li class="whyrahejali">
										<a href="#" class="whyrahejaa">Spacious 2 and 2 Plus Bed Homes with Lavish Balconies</a>

									</li>

									<li class="whyrahejali">
										<a href="#" class="whyrahejaa"> Exclusive Clubhouse Dedicated for Ascencio Residents </a>
									</li>
									<li class="whyrahejali">
										<a href="#" class="whyrahejaa"> in Addition, Access to The Raheja Vihar Common Club House </a>
									</li>
									<li class="whyrahejali">
										<a href="#" class="whyrahejaa"> Well Connected to All Necessities. </a>
									</li>

								</ul>


							</div>
							<div class="col-md-6">
								<div class="whyrahejabutton" style="margin-top: -123px;" 
   >
									<img src="images/phone.png" style="    width: 33px;
" alt="">
									<span class="ubtn-data ubtn-text" style="        margin-left: 14px;
;color: #000;">Call Now +91-993-020-5302 </span>
								</div>
							</div>

						</div>
						
					</div>

				</div>
			</div>
			<!-- project Podium Amenities end -->
			<!-- project Gallery start -->
			<div class="section " id="gallery-wrp">
				<div class="gallery_slider owl-carousel owl-theme">
					<div class="item">
						<a href="https://youtu.be/DdMyG65m3ds" data-fancybox="video-galley">
							<div class="video_img_01"></div>
							<span class="video_head1">Site Virtual Tour Video </span>

							<img src="images/youtube.png" alt="" class="videoheadimg">
							<span class="video_head">Raheja Ascencio , Chandivali | Concept </span>
						</a>
					</div>
					<div class="item">
						<a href="https://youtu.be/aaY77c5ORZg" data-fancybox="video-galley">
							<div class="video_img_02"></div>
							<span class="video_head1">Site Virtual Tour Video </span>

							<img src="images/youtube.png" alt="" class="videoheadimg">
							<span class="video_head">Raheja Ascencio , Chandivali | Teaser </span>
						</a>
					</div>
				</div>
				<div class="slider-counter"></div>
			</div>
			<!-- project Gallery end -->
			<!-- project Locaton start -->
			<div class="section gallerybg" id="locaton-wrp">
				<!-- <div class="locaton_bg"></div> -->
				<div class="container-fluid" style="position: relative;">
				<p class="whyrahejafirst_p">
				More Reasons to Live in Chandivali. Just in Case Raheja Vihar Itself Wasn’t Enough.
							
						</p>
					<div class="locationrow">
						<div class="locationcol1">
							<img src="images/raheja_map.png" alt="" style="    width: 374px;
    height: 374px;">
						</div>
						<div class="locationcol2">

<div class="fancy-collapse-panel">
	<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
		<div class="panel panel-default">
			<div class="panel-heading" role="tab" id="headingOne">
				<h4 class="panel-title" id="panel-title">
					Nearby Location


				</h4>
				<span class="icon_span"> <i class="fa fa-arrow-up" aria-hidden="true"
						id="accord-icon1"></i> </span>

			</div>

			<div id="collapseOne" class="panel-collapse ">
				<div class="panel-body" id="panel-body">
					<div class="row">
						<div class="col-md-12 accordion">
							
						  <p class="accordionpara">Hiranandani Business Park  – 2.7 kms*</p>
						  <p class="accordionpara"> Bombay Scottish High School  – 2.0 kms*</p>
						  <p class="accordionpara"> Eastern Express Highway  – 5.1 kms*</p>
						  <p class="accordionpara"> Pheonix Market City, Kurla  – 6.1 kms*

</p>
<p class="accordionpara"> International Airpot  – 5 kms*
<p class="accordionpara"> Domestic Airport  – 6.1 kms*


						</div>
						<!-- <div class="col-md-6 accordion">
						 
						</div> -->
					</div>
				</div>
			</div>



		</div>

	
	</div>
</div>

						</div>

					</div>
					<!-- <p class="location_link"><a href="https://goo.gl/maps/E2Km5swa2o4tq97VA" target="_blank">Get
							Direction <i class="fa fa-long-arrow-up" aria-hidden="true"></i></a></p> -->
				</div>
			</div>
			<!-- project Locaton end -->
			<!-- address and disclaimer start -->
			<div class="section" id="contact-wrp">
				<div class="container">
					<div class="disc_txt">
						<h2>Site Office</h2>
						<p>Sales office: Raheja Chandivali, Circular Road, Chandivali, Mumbai - 4OOO72
							Corporate office: Raheja Towers, Plot no. C-3O, Block G, BKC, Bandra (E), Mumbai — 4OOO51
							.</p>
						<!-- <h2>REGIONAL OFFICE</h2>
						<p>Unit No. 5C, 5th Floor, Raheja Ascencio One, Pirojshanagar, Vikhroli East, Mumbai - 400 079.</p> -->
						<h2>MAHA RERA DETAILS</h2>
						<p>The project is registered as Raheja Ascencio under MahaRERA No. P518OOO285O6, available at
							http://maharera.mahaonline.gov.in. The project is being developed by Raheja Corp Homes — One of India’s leading developers.</p>
						<h2><span>Disclaimer</span></h2>
						<p>Raheja Ascencio head quartered in Mumbai was founded in 1980. Raheja Ascencio (Pvt) Ltd. (RUPL), is headed by Mr. Suresh Raheja & his sons Rahul Raheja & Ashish Raheja

							The Raheja Ascencio (Pvt) Ltd. (RUPL), and its Promoter Group have completed development of over approx. 8.34 million sq. ft. of real estate in the Mumbai Metropolitan Region (MMR) across 53 projects Landmark projects.

							Landmark Residential projects developed by Raheja Ascencio (Pvt) Ltd. (RUPL), such as One Altamount Road, Raheja Anchorage, Raheja Atlantis, Raheja Legend, Raheja Empress, Raheja Sunkist, Raheja Sherwood. Raheja Exotica I & ll , Raheja Acropolis I & ll, Raheja Ridgewood & Raheja Waterfront (Mangalore)

							Raheja Ascencio has completed Landmark Commercial projects such as Raheja Chromium, Raheja Centre-Point. Raheja Plaza. Raheja Titanium and Stanchart Tower

							Developer.
							Our strive for excellence has won us prestigious awards including Business Super Brand award (thrice) and helped us gain recognition over the years.</p>
						<!-- <p>T&C Apply, offer subject to loan eligibility of the customers. Customer will pay 5% of agreement value at the time of booking, then pay Stamp duty registration & other government taxes within 60 days of booking, customer does not have to pay Pre-EMI till March 2021. Next 15% of agreement value has to be paid within 90 days of booking, next 10% of agreement value to be paid within 180 days of booking and the remainder to be paid as per construction linked programme.</p> --><br>
						<p><strong><a style="color: #fff;" href="https://www.Raheja Ascencioproperties.com/pdf/Raheja Ascencio-Privacy-Policy.pdf" target="_blank">Privacy Policy</a></strong></p>
					</div>
				</div>
			</div>
			<!-- address and disclaimer end -->
		</div>
	</main>
	<!-- Enquire now from start -->
	<script>
		(function() {
			var colombiaPixelURL = 'https://ade.clmbtech.com/cde/eventTracking.htm?pixelId=7209&amp;_w=1&amp;rd=' +
				new Date().getTime();
			(new Image()).src = colombiaPixelURL;
		})();
	</script><noscript><img height='1' width='1' style='display:none' src='https://ade.clmbtech.com/cde/eventTracking.htm?pixelId=7209&amp;_w=1' /></noscript>
	<script src="js/contact_form_validator.js" type="text/javascript"></script>


	<div id="fixed_form_wrap">
		<div class="form_container container">
			<span class="form_close"><i class="fa fa-times" aria-hidden="true"></i></span>
			<h5 class="site_heading5">Enquire Now</h5>
			<form id="frmContactus" action="<?php echo htmlspecialchars($_SERVER[' PHP_SELF ']); ?>" name="form1" method="post" class="form">
				<input type="hidden" name="projid" id="projid" value="a1l2s00000003BMAAY">
				<input type="hidden" name="prjName" id="prjName" value="Raheja Ascencio , Mumbai">
				<div class="fieldwrapper">
					<input name="name" type="text" id="name" placeholder="Full name*" value="<?php
																								// echo $name; 
																								?>" required>
				</div>
				<div class="fieldwrapper">
					<input name="email" type="text" id="email" placeholder="e-mail address*" required>
				</div>
				<div class="fieldwrapper">
					<input id="contact" autocomplete="off" name="contact" placeholder="Phone Number*" type="text" required>
				</div>
				<div class="fieldwrapper">
					<?php
					//  include('../country.php');
					?>
				</div>
				<div class="fieldwrapper">
					<input id="message" autocomplete="off" name="location" placeholder="Enter Your Comment*" type="text">
				</div>
				<div class="fieldwrapper form-cta-btn">
					<input type="submit" name="submit" placeholder="enter your contact" class="btn update_button" value="Submit">
				</div>
			</form>
		</div>
	</div>
	<div class="mobi_form_btn">Enquire Now</div>
	<!-- Enquire now from end -->

	<?php
	include('../status.php');
	?>

	<script type="text/javascript" src="js/scrolloverflow.js"></script>
	<script type="text/javascript" src="js/fullpage.min.js"></script>
	<script type="text/javascript" src="js/owl.carousel.min.js"></script>
	<script type="text/javascript" src="js/jquery.fancybox.min.js"></script>
	<script type="text/javascript" src="js/common.js"></script>
	<script type="text/javascript" src="js/custom.js"></script>


</body>

</html>