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
        $email_to = "contact@budgetivfmumbai.com";

        $text = "<br />
            <h3>Contact us Mail From budgetivfmumbai.com</h3>
            Name: $name<br />
            Email Id: $email<br />
            Contact Number: $contact<br />
            Location: $location<br />
			Query: $message";

        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html; charset=utf-8" . "\r\n";
        $headers .= "From: <$email>" . "\r\n";

        if (mail($email_to, "Contact us Mail From budgetivfmumbai.com", $text, $headers)) {
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
                    'location' => $location,
                    'message' => $message,
                    'extra' => 'https://budgetivfmumbai.com/',
                    'table_alias' => 'budgetivfmumbai_com_',
                    'api_key' => '16d1323ff8edb6f4910aa3336aa323a1',
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
	<title>Raheja , Vihar - New Residential Project in Kavesar, Vihar</title>
	<meta name="description"
		content="Raheja Properties presenting Raheja  with premium residences in Kavesar, Vihar. Perfectly designed homes with amenities like rooftop pool, sky lounge, spa, meditation pavilion and much more offers a comfortable and relaxed experience for each and every member of your family." />
	<meta name="keywords"
		content="Raheja , Raheja  Vihar, Raheja  Kavesar,  Raheja  Kavesar Vihar, Raheja Properties Kavesar, Raheja Properties Vihar, Apartments in Kavesar, Flats in Kavesar, Property in Kavesar, Apartments in Kavesar, Projects in Kavesar, Apartments in Vihar, Flats in Vihar, Property in Vihar, Apartments in Vihar, Projects in Vihar" />

	<link rel="canonical" href="index.php">
	<link rel="shortcut icon"
		href="https://www.Rahejaproperties.com/backoffice/data_content/projects/Raheja__mumbai/landing_page/images/favicon.ico"
		type="image/x-icon">
	<link rel="stylesheet" href="css/main_style.css">
	<link rel="stylesheet" href="css/fullpage.min.css">
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<link rel="stylesheet" href="css/jquery.fancybox.css">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="font-awesome/4.7.0/css/font-awesome.min.css">

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
	
	<header id="site_header">
		<div class="container">
			<div class="brand_logo"><a href="index.php"><img src="images/brand_logo.png" alt="" style="    width: 200px;
    margin-top: -32px;"></a></div>
			<div class="project_logo"><a href="index.php"><img src="images/project_logo.png" style="width: 101px;" alt=""></a></div>
			<nav id="site_nav">
				<ul id="menu">
					<li><a href="#overview" data-menuanchor="overview">Overview</a></li>
					<li><a href="#exclusiveamenities" data-menuanchor="exclusiveamenities">Exclusive Amenities</a></li>
					<li><a href="#podiumamenities" data-menuanchor="podiumamenities">Podium AMENITIES</a></li>
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
						<div class="container banner_txt">
							<h2 class="banner_head">
								<span class="greeting"></span>
								<span style="display: none;" id="clock"></span>
								<span class="linebr">
									<span>THERE ARE VERY FEW LUXURIES</span>
									<span>THAT ARE EXCLUSIVELY YOURS</span>
									<span>ENJOYING 270&deg; PANORAMIC VIEWS,</span>
									<span>At DUSK IS ONE OF THEM</span>
								</span>
								<span class="linebr">2 Bed Premium: &#8377;1.27Cr.+* | 3 Bed Luxe:
									&#8377;1.69Cr.+*<br>Pay 5% now & relax till March 2022^</span>
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
			<div class="section" id="overview-wrp">
				<div class="overview_bg"></div>
				<div class="container">
					<!-- <p>There’s a world that belongs to everybody. And then, there’s a world that’s designed for you.</p> -->
					<p>Welcome to Raheja . It’s an address that comes with luxuries that only a few can claim
						to be theirs. Each of our 3 towers comes with its own world of luxuries, making your world even
						more exclusive.</p>
					<p>For you, and only you.</p>
				</div>
			</div>
			<!-- project overview end -->
			<!-- project Podium Amenities start -->
			<div class="section" id="exclusiveamenities-wrp">
				<div class="exclusiveamenities_slider owl-carousel owl-theme">
					<div class="item slide_01" data-dot="<button>Horizon Pool <span></span></button>">
						<div class="container banner_txt">
							<h2>Horizon Pool for each tower</h2>
							<p>Melt away your cares of the day as you soak in the rooftop pool</p>
						</div>
					</div>
					<div class="item slide_02" data-dot="<button>Skyscape Gym <span></span></button>">
						<div class="container banner_txt">
							<h2>Skyscape Gym for each tower</h2>
							<p>Sweat it out with picturesque views of the Vihar skyline</p>
						</div>
					</div>
					<div class="item slide_03" data-dot="<button>Sky Lounge <span></span></button>">
						<div class="container banner_txt">
							<h2>Sky lounge for each tower</h2>
							<p>Spend your leisure time with your near and dear ones at the sky lounge</p>
						</div>
					</div>
					<div class="item slide_04" data-dot="<button>Rooftop Jacuzzi & Spa <span></span></button>">
						<div class="container banner_txt">
							<h2>Rooftop Jacuzzi & Spa for each tower</h2>
							<p>Relax and rejuvenate whenever you want with a rooftop Jacuzzi and spa</p>
						</div>
					</div>
					<div class="item slide_05" data-dot="<button>Dual-lobby System <span></span></button>">
						<div class="container banner_txt">
							<h2>Dual-lobby system</h2>
							<p>Live the exclusive life with just 3 homes per lobby</p>
						</div>
					</div>
					<div class="item slide_06" data-dot="<button>No Shared Walls <span></span></button>">
						<div class="container banner_txt">
							<h2>No shared walls</h2>
							<p>Enjoy enhanced privacy with no shared walls between residences</p>
						</div>
					</div>
				</div>
			</div>
			<!-- project highlights end -->

			<!-- project Podium Amenities start -->
			<div class="section" id="podiumamenities-wrp">
				<div class="podiumamenities_slider owl-carousel owl-theme">
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
					<div class="item slide_05" data-dot="<button>Meditation Pavilion <span></span></button>">
						<div class="container banner_txt">
							<h2>Meditation Pavilion</h2>
						</div>
					</div>
				</div>
			</div>
			<!-- project Podium Amenities end -->
			<!-- project Gallery start -->
			<div class="section" id="gallery-wrp">
				<div class="gallery_slider owl-carousel owl-theme">
					<div class="item">
						<a href="https://www.youtube.com/watch?v=ve3lxaJVo9s&amp;feature=youtu.be"
							data-fancybox="video-galley">
							<div class="video_img_01"></div>
							<span class="video_head">Raheja , Vihar | Concept AV</span>
						</a>
					</div>
					<div class="item">
						<a href="https://www.youtube.com/watch?v=JE7RZCH6H0A&amp;feature=youtu.be"
							data-fancybox="video-galley">
							<div class="video_img_02"></div>
							<span class="video_head">Raheja , Vihar | Teaser AV</span>
						</a>
					</div>
				</div>
				<div class="slider-counter"></div>
			</div>
			<!-- project Gallery end -->
			<!-- project Locaton start -->
			<div class="section" id="locaton-wrp">
				<div class="locaton_bg"></div>
				<div class="container">
					<p class="location_link"><a href="https://goo.gl/maps/nEEcMUBk2LezARqJA" target="_blank">Get
							Direction <i class="fa fa-long-arrow-up" aria-hidden="true"></i></a></p>
				</div>
			</div>
			<!-- project Locaton end -->
			<!-- address and disclaimer start -->
			<div class="section" id="contact-wrp">
				<div class="container">
					<div class="disc_txt">
						<h2>Site Office</h2>
						<p>Sales Lounge: Raheja , Near Mercedes-Benz Showroom, Ghodbunder Road, Vihar.</p>
						<!-- <h2>REGIONAL OFFICE</h2>
						<p>Unit No. 5C, 5th Floor, Raheja One, Pirojshanagar, Vikhroli East, Mumbai - 400 079.</p> -->
						<h2>MAHA RERA DETAILS</h2>
						<p>The project is registered as Raheja  under MahaRERA No. P51700024496, available at
							http://maharera.mahaonline.gov.in. The project is being developed by Ashank Macbricks
							Private Limited, a part of Raheja Properties Limited group.</p>
						<h2><span>Disclaimer</span></h2>
						<p>The Sale is subject to terms of Application Form and Agreement for Sale. All specifications
							of the unit shall be as per the final agreement between the Parties. Recipients are advised
							to apprise themselves of the necessary and relevant information of the project prior to
							making any purchase decisions. The official website of Raheja Properties Ltd. is
							www.Rahejaproperties.com. Please do not rely on the information provided on any other
							website. *The project comprises of towers with 33 floors which may be increased up to 39
							floors subject to receipt of necessary approvals. **For select apartments only. ##We do not
							represent or warrant the continuance of panoramic views for any period of time after the
							date of publication. #Indicative Agreement Value. Stamp Duty Registration, GST and Other
							Charges over and above the Agreement Value. PLC & Floor Rise as applicable over and above
							for all residences. ^T&C Apply. Offer subject to loan eligibility of the customers. To book,
							customer will pay 5% of agreement value at the time of booking, then pay Stamp duty
							registration & other government taxes within 60 days of booking, customer does not have to
							pay Pre-EMI till March 2022. Remainder value to be paid as per construction linked plan.
							Valid with select banks.</p>
						<!-- <p>T&C Apply, offer subject to loan eligibility of the customers. Customer will pay 5% of agreement value at the time of booking, then pay Stamp duty registration & other government taxes within 60 days of booking, customer does not have to pay Pre-EMI till March 2021. Next 15% of agreement value has to be paid within 90 days of booking, next 10% of agreement value to be paid within 180 days of booking and the remainder to be paid as per construction linked programme.</p> --><br>
						<p><strong><a style="color: #fff;"
									href="https://www.Rahejaproperties.com/pdf/Raheja-Privacy-Policy.pdf"
									target="_blank">Privacy Policy</a></strong></p>
					</div>
				</div>
			</div>
			<!-- address and disclaimer end -->
		</div>
	</main>
	<!-- Enquire now from start -->
	<script>
		(function () {
			var colombiaPixelURL = 'https://ade.clmbtech.com/cde/eventTracking.htm?pixelId=7209&amp;_w=1&amp;rd=' +
				new Date().getTime();
			(new Image()).src = colombiaPixelURL;
		})();
	</script><noscript><img height='1' width='1' style='display:none'
			src='https://ade.clmbtech.com/cde/eventTracking.htm?pixelId=7209&amp;_w=1' /></noscript>
	<script src="js/contact_form_validator.js" type="text/javascript"></script>


	<div id="fixed_form_wrap">
		<div class="form_container container">
			<span class="form_close"><i class="fa fa-times" aria-hidden="true"></i></span>
			<h5 class="site_heading5">Enquire Now</h5>
			<form id="frmContactus" action="<?php echo htmlspecialchars($_SERVER[' PHP_SELF ']); ?>" name="form1"
				method="post" class="form">
				<input type="hidden" name="projid" id="projid" value="a1l2s00000003BMAAY">
				<input type="hidden" name="prjName" id="prjName" value="Raheja , Mumbai">
				<div class="fieldwrapper">
					<input name="name" type="text" id="name" placeholder="Full name*" value="<?php 
					// echo $name; 
					?>"
						required>
				</div>
				<div class="fieldwrapper">
					<input name="email" type="text" id="email" placeholder="e-mail address*" required>
				</div>
				<div class="fieldwrapper">
					<input id="contact" autocomplete="off" name="contact" placeholder="Phone Number*" type="text"
					
						required>
				</div>
				<div class="fieldwrapper">
					<?php
					//  include('../country.php');
					 ?>
				</div>
				<div class="fieldwrapper">
					<input id="message" autocomplete="off" name="location" placeholder="Enter Your Comment*" type="text"
						>
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

</body>

</html>