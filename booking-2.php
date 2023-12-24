<?php include "include/session.php" ?>
<!DOCTYPE html>
<html lang="en">

	<head>
    <?php include "include/meta.php" ?>
		<title>THE LEISURE LEAGUE TOURISM​</title>
	</head>

	<body class="lqd-cc-outer-hidden" data-lqd-cc="true" class="lqd-preloader-activated lqd-preloader-style-fade" data-mobile-nav-breakpoint="1199" data-mobile-nav-style="modern" data-mobile-nav-scheme="dark" data-mobile-nav-trigger-alignment="right" data-mobile-header-scheme="gray" data-mobile-logo-alignment="default" data-overlay-onmobile="false">
		<div class="bg-white" id="wrap">


			<div class="titlebar border-bottom border-black-10" id="banner" style="background-image: linear-gradient(180deg, #bb2b9914 34%, #FFFFFF 100%);">

				<div class="lqd-sticky-placeholder hidden"></div>
				<?php include "include/header.php" ?>
				<div class="titlebar-inner">
					<div class="container titlebar-container">
						<div class="row titlebar-container justify-center">
							<div class="col titlebar-col col-xl-6 col-lg-8 col-12 text-center text-gray-400">
								<h1>Curate Your Perfect Vacation </h1>
								<p class="leading-20 text-gray-400">Enter Your Details to get started</p>
							</div>
						</div>
					</div>
				</div>
			</div>



			<!-- <?php
$data_array = array(
	"userName" => "aadarshkavita@gmail.com",
	"userPassword" => "Test@2023@#$",
);
$make_call = baseCall('contactForm', json_encode($data_array));
$attractions = json_decode($make_call, true)['attractionList'];
?> -->
<?php

function simulateApiCall() {
    $response = '
    {
        "attractionList": [
            {
                "attractionId": 9,
                "attractionName": "SKI DUBAI SNOW CLASSIC",
                "ticketTypeList": [
                    {
                        "ticketTypeId": 12,
                        "ticketTypeName": "SNOW CLASSIC",
                        "apiTicket": true
                    }
                ]
            },
            {
                "attractionId": 12,
                "attractionName": "WILDWADI ",
                "ticketTypeList": [
                    {
                        "ticketTypeId": 5,
                        "ticketTypeName": "WILDWADI STANDARD",
                        "apiTicket": false
                    },
					{
                        "ticketTypeId": 6,
                        "ticketTypeName": "WILDWADI STANDARD 2",
                        "apiTicket": true
                    },
					{
                        "ticketTypeId": 7,
                        "ticketTypeName": "WILDWADI STANDARD 3",
                        "apiTicket": true
                    }
                ]
            }
        ],
        "errorCode": 200,
        "errorMessage": "Success"
    }
    ';

    return $response;
}

$make_call = simulateApiCall();
$attractions = json_decode($make_call, true)['attractionList'];

// Now $attractions will contain simulated data similar to the actual API response
?>



			<!-- Start Reserve Form -->
			<section class="lqd-section reserve-form pt-55 pb-50 transition-all bg-no-repeat" style="background-image: url(./assets/images/demo/restaurant/form-reserve/bg-5.png);" data-custom-animations="true" data-ca-options='{"addPerspective": false, "animationTarget": ".animation-element", "initValues" :{"x": "-5px", "y": "10px", "opacity" : 0} , "animations" :{"x": "0px", "y": "0px", "opacity" : 1}}'>
				<div class="container flex items-center justify-center p-0">
					<div class="w-full flex flex-wrap rounded-10 bg-yellow-100 items-center">
						
						<div class="w-full p-60 text-center sm:w-full module-content" data-custom-animations="true" data-ca-options='{"addPerspective": false, "animationTarget": ".animation-element, .ld-fancy-heading", "startDelay" : 200, "initValues" :{"x": "-10px", "y": "10px", "opacity" : 0} , "animations" :{"x": "0px", "y": "0px", "opacity" : 1}}'>
							<div class="ld-fancy-heading border-top border-bottom border-black mb-35">
								<h3 class="ld-fh-element py-1/5em m-0 text-13 font-medium uppercase tracking-1">Hello <?php echo $_SESSION['name']; ?>, TLL Tourism Welcome You to Book your dream vacation.</h3>
							</div>
							
							<div class="lqd-contact-form lqd-contact-form-inputs-underlined lqd-contact-form-button-block lqd-contact-form-button-md lqd-contact-form-button-border-none lqd-contact-form-inputs-lg mb-30 animation-element">
								<div role="form" class="lqd-cf" lang="en-US">
									<div class="screen-reader-response">
										<p role="status" aria-live="polite" aria-atomic="true"></p>
									</div>
									
<form enctype="multipart/form-data" action="controllers/getstarted.php" method="POST" novalidate="novalidate" data-status="init">
  <div class="w-full relative flex">
    <div class="lqd-cf-response-output"></div>
    <span class="lqd-form-control w-full" data-name="name" style="text-align: start; ">
      <select name="attraction" class="lqd-form-control bg-transparent border-black text-black pl-30" aria-required="true" aria-invalid="false" placeholder="Choose Your Attraction">
        <option selected disabled>Choose Your Attraction</option>
        <?php foreach ($attractions as $attraction): ?>
          <option value="<?php echo $attraction['attractionId']; ?>"><?php echo $attraction['attractionName']; ?></option>
        <?php endforeach; ?>
      </select>
    </span>
  </div>

  <div class="w-full relative flex">
    <span class="lqd-form-control w-full" data-name="ticket_type" style="text-align: start; ">
      <select name="ticket_type" class="lqd-form-control bg-transparent border-black text-black pl-30" aria-required="true" aria-invalid="false" placeholder="Choose Your Ticket Type">
        <option selected disabled>Choose Your Ticket Type</option>
        <!-- This section will be populated dynamically using JavaScript based on the selected attraction -->
      </select>
    </span>
  </div>

  <p>
    <input type="submit" value="Next" class="has-spinner text-white bg-dark rounded-4 mt-20 ont-semibold uppercase leading-1/6em tracking-2 text-11 hover:bg-secondary">
  </p>
</form>
								</div>
								
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- End Reserve Form -->



			
<!-- Start Carousel Text LG -->
<section class="lqd-section carousel-text-lg bg-white transition-all">
	<div class="ld-particles-container w-full lqd-particles-as-bg lqd-overlay flex">
		<div class="ld-particles-inner lqd-overlay flex pointer-events-none" id="lqd-particle-text-carousel" data-particles="true" data-particles-options='{"particles": {"number": {"value" : 4} , "color": {"value" : ["#604CFD", "#FDA44C", "#0FBBB4", "#F85976"]} , "shape": {"type" : ["circle"]} , "opacity": {"value" : 1} , "size": {"value" : 4, "random": true} , "move": {"enable": true, "direction": "none", "random": true, "out_mode": "out"}} , "interactivity" : [], "retina_detect": true}'></div>
	</div>
	<div class="container-fluid p-0">
		<div class="row m-0">
			<div class="col col-12 p-0">
				<div class="carousel-container relative carousel-nav-shaped" id="carousel-text">
					<div class="carousel-items relative -mr-30 -ml-30" data-lqd-flickity='{"percentPosition": false, "columnsAutoWidth": true, "marquee": true, "pauseAutoPlayOnHover": false}'>
						<div class="carousel-item flex flex-col justify-center px-30">
							<div class="carousel-item-inner relative w-full">
								<div class="carousel-item-content relative w-full font-bold leading-1/2em module-title-top">
									<h2 class="m-0 text-inherit leading-inherit pb-0/1em text-size-inherit">
										<strong>Hello <?php echo $_SESSION['name']; ?>, TLL Tourism Welcome You to Book your dream vacation. </strong>
									</h2>
								</div>
							</div>
						</div>
						<div class="carousel-item flex flex-col justify-center px-30">
							<div class="carousel-item-inner relative w-full">
								<div class="carousel-item-content relative w-full font-bold leading-1/2em module-title-top">
									<h2 class="m-0 text-inherit leading-inherit pb-0/1em text-size-inherit">
										<strong> TLL Tourism Welcome You to Book your dream vacation. </strong>
									</h2>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col col-12 p-0">
				<div class="carousel-container relative carousel-nav-shaped">
					<div class="carousel-items relative -mr-30 -ml-30 " data-lqd-flickity='{"percentPosition": false, "columnsAutoWidth": true, "marquee": true, "rightToLeft": true, "pauseAutoPlayOnHover": false}'>
						<div class="carousel-item flex flex-col justify-center px-30">
							<div class="carousel-item-inner relative w-full">
								<div class="carousel-item-content relative w-full font-bold leading-1/2em  module-title-bottom">
									<h2 class="m-0 leading-inherit pb-0/1em text-transparent text-size-inherit"><strong> Hello <?php echo $_SESSION['name']; ?></strong></h2>
								</div>
							</div>
						</div>
						<div class="carousel-item flex flex-col justify-center px-30">
							<div class="carousel-item-inner relative w-full">
								<div class="carousel-item-content relative w-full font-bold leading-1/2em  module-title-bottom">
									<h2 class="m-0 leading-inherit pb-0/1em text-transparent text-size-inherit"><strong> , TLL Tourism Welcome You to Book your dream vacation.</strong></h2>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End Carousel Text LG -->














<?php include "include/contact-module.php" ?>

            <div class="lqd-top-scrol-ind fixed top-0 left-0 z-10 w-full pointer-events-none bg-white" data-lqd-scroll-indicator="true" data-scrl-indc-options='{"scale": true, "dir": "x" , "end": "bottom bottom" , "origin": "left"}'>
				<span class="lqd-scrl-indc-inner block lqd-overlay flex">
					<span class="lqd-scrl-indc-line block lqd-overlay flex">
						<span class="lqd-scrl-indc-el block lqd-overlay flex" style="background-image: linear-gradient(90deg, rgb(233, 164, 194) 0%, rgb(164, 104, 252) 50%, #74c6e5 100%);"></span>
					</span>
				</span>
			</div>

			<script>
document.addEventListener('DOMContentLoaded', function () {
    console.log('Script is running!');
    var attractions = <?php echo json_encode($attractions); ?>;
    
    var attractionDropdown = document.querySelector('[name="attraction"]');
    console.log('Attraction dropdown:', attractionDropdown);

    attractionDropdown.addEventListener('change', function () {
        console.log('Attraction dropdown changed');
        
        var attractionId = this.value;
        var ticketTypeSelect = document.querySelector('[name="ticket_type"]');
        
        // Find the selected attraction data in the JSON response
        var selectedAttraction = attractions.find(function(attraction) {
            return attraction.attractionId == attractionId;
        });

        // Clear existing options
        ticketTypeSelect.innerHTML = "";

        // Populate ticket types based on the selected attraction
        console.log('Attractions:', attractions);
        console.log('Attraction ID:', attractionId);
        console.log('Selected Attraction:', selectedAttraction);

        if (selectedAttraction) {
            selectedAttraction.ticketTypeList.forEach(function(ticketType) {
                if (ticketType.apiTicket) {
                    var option = document.createElement("option");
                    option.value = ticketType.ticketTypeId;
                    option.text = ticketType.ticketTypeName;
                    ticketTypeSelect.add(option);
                }
            });
        }
    });
});

</script>
            <?php include "include/footer.php" ?>