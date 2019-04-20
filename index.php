<?php 
ob_start();
use PHPMailer\PHPMailer\PHPMailer;
include_once "PHPMailer/PHPMailer.php"; 
include_once "PHPMailer/Exception.php"; 
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]> <!--> <html class="no-js" lang=""> <!--[endif]-->
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale= 1, shrink-to-fit= no">
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="author" content="Gilgit-Baltistan Trek & Tours">
	<meta name="description" content="">
	<meta charset="UTF-8">
	<meta  name="keywords" content="">
	<title>Machulo Treks & Tours | Baltistan</title>



	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">



	<link rel="stylesheet" href="css/linearicons.css">
	<link rel="stylesheet" href="owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="owl-carousel/owl.theme.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/all.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript">
     $(document).ready(function() {
 
  $("#owl-demo").owlCarousel({
 
      autoPlay: 5000, //Set AutoPlay to 3 seconds
 		autoplay:false,
	autoplayTimeout:5000,
	autoplayHoverPause:true,
      items : 4,
      itemsDesktop : [1199,3],
      itemsDesktopSmall : [979,3]
 
  });
 
});
    </script>
    <script type="text/javascript">
$(document).ready(function() {
 
  $("#owl-demo_front").owlCarousel({
    autoPlay : 3000,
    stopOnHover : true,

    paginationSpeed : 1000,
    goToFirstSpeed : 2000,
    singleItem : true,
    transitionStyle:"fade"
  });
 
});



    </script>

</head>
<body>

		<!-- Start Header Area -->
			<?php include'include/header.php'; ?>	
		<!-- End Header Area -->

			<!-- start banner Area -->
			<section class="banner-area relative" id="home">
				<div class="overlay overlay-bg"></div>
				<div class="containe">
						<div class="fullscreen align-items-center justify-content-start">

						<div class="bd-example">
							  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
							  
							    <div class="carousel-inner">
							      <div class="carousel-item active">
							        <img src="images/images1/paaye.jpg" class="d-block w-100" alt="..." width="100%">
							        <div class="carousel-caption d-none d-md-block">
							     
							          
							        </div>
							      </div>
							      <div class="carousel-item">
							        <img src="images/images1/paaye.jpg" class="d-block w-100" alt="...">
							        <!-- <div class="carousel-caption d-none d-md-block">
							          <h5>Second slide label</h5>
							          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
							        </div> -->
							      </div>
							      <div class="carousel-item">
							        <img src="images/images1/paaye.jpg" class="d-block w-100" alt="...">
							       
							      </div>
							      
							    </div>
							    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
							      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
							      <span class="sr-only">Previous</span>
							    </a>
							    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
							      <span class="carousel-control-next-icon" aria-hidden="true"></span>
							      <span class="sr-only">Next</span>
							    </a>
							  </div>
							</div>
						</div>
				</div>
			</section>
			<!-- End banner Area -->

			<!-- Start booking Area -->
			<section class="booking-area " id="booking">

				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="col-lg-8">
							<ul class="nav nav-tabs" role="tablist">
								  <li class="nav-item">
								    <a class="nav-link" href="#flights" role="tab" data-toggle="tab">flights</a>
								  </li>
								  <li class="nav-item">
								    <a class="nav-link" href="#hotels" role="tab" data-toggle="tab">hotels</a>
								  </li>
								  <li class="nav-item">
								    <a class="nav-link" href="#flights-hotels" role="tab" data-toggle="tab">flights+hotels</a>
								  </li>
								  <li class="nav-item">
								    <a class="nav-link" href="#holidays" role="tab" data-toggle="tab">Holidays</a>
								  </li>
							</ul>

							<!-- Tab panes -->
							<div class="tab-content">
							  <div role="tabpanel" class="tab-pane fade in active" id="flights">
							  	<h4>Book Your Flights</h4>
							  	<?php 
		
	 	if(isset($_POST['flights'])){
	 	

	 	
	 		$name=trim($_POST['name']); 
	 		$email=trim($_POST['email']);
	 		$number=trim($_POST['number']);  
	 		$subject='This is Booking of Flights'; 
	 		$body=trim($_POST['country']); 
	 		$mail = new PHPMailer(); 
	 		$mail->addAddress('dongdongpamachulo@gmail.com' , 'Bilawal Gul'); 
	 		$mail->setFrom($email); $mail->subject=$subject; 
	 		$mail->isHTML(true); $mail->Body='
	 		<div class="text-center" style="background:silver;">
					<b>Name: '.$name.'</b><br>
					<b>Email: '.$email.'</b><br>
					<b>Number: '.$number.'</b>
					<b>Country: '.$body.'</b>
	 		</div>';
	 		
	 		if($mail->send()){ 
	 			echo "
	               <script>alert(' Email Successfully Send ( we will Shortly contact You));</script>
	              ";
	 		}else{ 
	 			echo "<script>alert('Error in Sending Email');</script>"; 
	 		} 
	 	
	 	} else{
	 		$message='';
	 	}
	 ?>
							  		<form class="booking-form" id="booking" method="POST" action="#flights">
										 <div class="row">
										 	
										    <div class="col-md-6" id="flights">
										      <input type="text" name="name" class="single-in form-control" placeholder="Your Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'From'" required="">
										    </div>
										    <div class="col-md-6">
										      <input type="email" name="email" class="single-in form-control" placeholder="Your Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'To'" required="">
										    </div>
										    <div class="col-md-6">
										      <input type="text" name="number" class="single-in form-control" placeholder="Cell number / Phone number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'From'" required="">
										    </div>
										    <div class="col-md-6">
										      <input type="text" name="country" class="single-in form-control" placeholder="Country Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'To'" required="">
										    </div>
										    
										    <div class="col-lg-12 d-flex justify-content-end">
												<button class="primary-btn mt-20" type="submit" name="flights">Send Message<span class="lnr lnr-arrow-right"></span></button>
											</div>
											<div class="alert-msg"></div>
										  </div>
							  		</form>
							  </div>
							  <div role="tabpanel" class="tab-pane fade in" id="hotels">
							  	<h4>Book Your Hotels</h4>
							  	<?php 
		
	 	if(isset($_POST['hotels'])){
	 	

	 	
	 		$name=trim($_POST['name']); 
	 		$email=trim($_POST['email']);
	 		$number=trim($_POST['number']);  
	 		$subject='This is Booking of HOtels'; 
	 		$body=trim($_POST['country']); 
	 		$mail = new PHPMailer(); 
	 		$mail->addAddress('dongdongpamachulo@gmail.com' , 'Bilawal Gul'); 
	 		$mail->setFrom($email); $mail->subject=$subject; 
	 		$mail->isHTML(true); $mail->Body='
	 		<div class="text-center" style="background:silver;">
					<b>Name: '.$name.'</b><br>
					<b>Email: '.$email.'</b><br>
					<b>Number: '.$number.'</b>
					<b>Country: '.$body.'</b>
	 		</div>';
	 		
	 		if($mail->send()){ 
	 			echo "
	               <script>alert(' Email Successfully Send ( we will Shortly contact You));</script>
	              ";
	 		}else{ 
	 			echo "<script>alert('Error in Sending Email');</script>"; 
	 		} 
	 	
	 	} else{
	 		$message='';
	 	}
	 ?>
							  		<form class="booking-form" id="booking" method="POST" action="#hotels">
										 <div class="row">
										 	
										    <div class="col-md-6" id="hotels">
										      <input type="text" name="name" class="single-in form-control" placeholder="Your Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'From'" required="">
										    </div>
										    <div class="col-md-6">
										      <input type="email" name="email" class="single-in form-control" placeholder="Your Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'To'" required="">
										    </div>
										    <div class="col-md-6">
										      <input type="text" name="number" class="single-in form-control" placeholder="Cell number / Phone number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'From'" required="">
										    </div>
										    <div class="col-md-6">
										      <input type="text" name="country" class="single-in form-control" placeholder="Country Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'To'" required="">
										    </div>
										    
										    <div class="col-lg-12 d-flex justify-content-end">
												<button class="primary-btn mt-20" type="submit" name="hotels">Send Message<span class="lnr lnr-arrow-right"></span></button>
											</div>
											<div class="alert-msg"></div>
										  </div>
							  		</form>
							  </div>
							  <div role="tabpanel" class="tab-pane fade" id="flights-hotels">
							  	<h4>Book Your Flights & Hotels</h4>
							  	<?php 
		
	 	if(isset($_POST['fhotels'])){
	 	

	 	
	 		$name=trim($_POST['name']); 
	 		$email=trim($_POST['email']);
	 		$number=trim($_POST['number']);  
	 		$subject='This is Booking of Flights AND HOtels'; 
	 		$body=trim($_POST['country']); 
	 		$mail = new PHPMailer(); 
	 		$mail->addAddress('dongdongpamachulo@gmail.com' , 'Bilawal Gul'); 
	 		$mail->setFrom($email); $mail->subject=$subject; 
	 		$mail->isHTML(true); $mail->Body='
	 		<div class="text-center" style="background:silver;">
					<b>Name: '.$name.'</b><br>
					<b>Email: '.$email.'</b><br>
					<b>Number: '.$number.'</b>
					<b>Country: '.$body.'</b>
	 		</div>';
	 		
	 		if($mail->send()){ 
	 			echo "
	               <script>alert(' Email Successfully Send ( we will Shortly contact You));</script>
	              ";
	 		}else{ 
	 			echo "<script>alert('Error in Sending Email');</script>"; 
	 		} 
	 	
	 	} else{
	 		$message='';
	 	}
	 ?>
							  		<form class="booking-form" id="booking" method="POST" action="#fhotels">
										 <div class="row">
										 	
										    <div class="col-md-6" id="hotels">
										      <input type="text" name="name" class="single-in form-control" placeholder="Your Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'From'" required="">
										    </div>
										    <div class="col-md-6">
										      <input type="email" name="email" class="single-in form-control" placeholder="Your Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'To'" required="">
										    </div>
										    <div class="col-md-6">
										      <input type="text" name="number" class="single-in form-control" placeholder="Cell number / Phone number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'From'" required="">
										    </div>
										    <div class="col-md-6">
										      <input type="text" name="country" class="single-in form-control" placeholder="Country Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'To'" required="">
										    </div>
										    
										    <div class="col-lg-12 d-flex justify-content-end">
												<button class="primary-btn mt-20" type="submit" name="fhotels">Send Message<span class="lnr lnr-arrow-right"></span></button>
											</div>
											<div class="alert-msg"></div>
										  </div>
							  		</form>
							  </div>
							  <div role="tabpanel" class="tab-pane fade" id="holidays">
							  	<h4>Book Your Holidays</h4>
							  	<?php 
		
	 	if(isset($_POST['holidays'])){
	 	

	 	
	 		$name=trim($_POST['name']); 
	 		$email=trim($_POST['email']);
	 		$number=trim($_POST['number']);  
	 		$subject='This is Booking of Holidays'; 
	 		$body=trim($_POST['country']); 
	 		$mail = new PHPMailer(); 
	 		$mail->addAddress('dongdongpamachulo@gmail.com' , 'Bilawal Gul'); 
	 		$mail->setFrom($email); $mail->subject=$subject; 
	 		$mail->isHTML(true); $mail->Body='
	 		<div class="text-center" style="background:silver;">
					<b>Name: '.$name.'</b><br>
					<b>Email: '.$email.'</b><br>
					<b>Number: '.$number.'</b>
					<b>Country: '.$body.'</b>
	 		</div>';
	 		
	 		if($mail->send()){ 
	 			echo "
	               <script>alert(' Email Successfully Send ( we will Shortly contact You));</script>
	              ";
	 		}else{ 
	 			echo "<script>alert('Error in Sending Email');</script>"; 
	 		} 
	 	
	 	} else{
	 		$message='';
	 	}
	 ?>
							  		<form class="booking-form" id="booking" method="POST" action="#holidays">
										 <div class="row">
										 	
										    <div class="col-md-6" id="holidays">
										      <input type="text" name="name" class="single-in form-control" placeholder="Your Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'From'" required="">
										    </div>
										    <div class="col-md-6">
										      <input type="email" name="email" class="single-in form-control" placeholder="Your Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'To'" required="">
										    </div>
										    <div class="col-md-6">
										      <input type="text" name="number" class="single-in form-control" placeholder="Cell number / Phone number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'From'" required="">
										    </div>
										    <div class="col-md-6">
										      <input type="text" name="country" class="single-in form-control" placeholder="Country Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'To'" required="">
										    </div>
										    
										    <div class="col-lg-12 d-flex justify-content-end">
												<button class="primary-btn mt-20" type="submit" name="holidays">Send Message<span class="lnr lnr-arrow-right"></span></button>
											</div>
											<div class="alert-msg"></div>
										  </div>
							  		</form>
							  </div>
							</div>
						</div>
					</div>
				</div>
			</section>
			


			<!--  End booking Area -->
			<!--  Start Popular Packages -->
			<div class="packages_carousel_bg" >
				<br /><br /><br />

				<div class="packages_carousel_title text-center" style="margin-top: -25px;">
						<h2 style="color:white">Popular Packages</h2>
					</div>
				<br /><br /><br /><br /><br /><br /><br /><br />

					
				<!-- coursal here start -->
				<div class="container ">
						
					<div id="owl-demo" style="background: none;margin-top: -180px;">

						  <div class="item" width="100%" style="padding: 20px;">
						  	<div id="coursel_image">
						  		<img src="images/images1/k2machulola.JPG" alt="Owl Image" style="width:100%;height: 150px;" >
								  <div class="main_overy">
								  	<div class="overay">
									  	<h2>K2 Gondhogoro Trek</h2>
									  	<div class="text">
									  		<p>
									  			K-2 Gondogoro la trek gives one of the greatest and loveliest mountain panorama on earth. In a small are there are four peaks above 8000  meters are nestled beside..
									  		</p>
									  	</div>
					                </div>
					                <div class="button">
					                	<a href="packages/trek/trek_k2gond.php" class="btn btn-info">Details</a>
					                </div>
								  </div>
			                   </div>
						  	</div>

						  	<div class="item" width="100%" style="padding: 20px;">
						  	<div id="coursel_image">
						  		<img src="images/images1/nangaparbat.jpg" alt="Owl Image" style="width:100%;height: 150px;" >
								  <div class="main_overy">
								  	<div class="overay">
									  	<h2>Nangaparbet Trek</h2>
									  	<div class="text">
									  		<p>
									  			Nanga Parbat, locally known as Diamer, is the ninth highest mountain in the world at 8,126 metres above sea level.Located in the Diamer District of Pakistan’s Gilgit Baltistan region, Nanga  
									  		</p>
									  	</div>
					                </div>
					                <div class="button">
					                	<a href="packages/trek/trek_nangaparbet.php" class="btn btn-info">Details</a>
					                </div>
								  </div>
			                   </div>
						  	</div>

						  	<div class="item" width="100%" style="padding: 20px;">
						  	<div id="coursel_image">
						  		<img src="images/images1/maherbrum2.jpg" alt="Owl Image" style="width:100%;height: 150px;" >
								  <div class="main_overy">
								  	<div class="overay">
									  	<h2>K7 & Masherbrum Trek</h2>
									  	<div class="text">
									  		<p>
									  			Hushe valley is situated at the south of the great-glaciated region of Baltoro. Hushe is the approach route to the south faces of the Karakurum wall. The area offers 
									  		</p>
									  	</div>
					                </div>
					                <div class="button">
					                	<a href="packages/trek/trek_k7mashabrum.php" class="btn btn-info">Details</a>
					                </div>
								  </div>
			                   </div>
						  	</div>

						  	<div class="item" width="100%" style="padding: 20px;">
						  	<div id="coursel_image">
						  		<img src="images/images1/Diran-peak.jpg" alt="Owl Image" style="width:100%;height: 150px;" >
								  <div class="main_overy">
								  	<div class="overay">
									  	<h2>Rakaposhi & Diran Base Camp</h2>
									  	<div class="text">
									  		<p>
									  			Rakaposhi peak 7788meters high above sea level located in the Karakoram range,is one of the most beautiful.....Diranis a mountain in the Karakoram range in Nagar Valley, GB 
									  		</p>
									  	</div>
					                </div>
					                <div class="button">
					                	<a href="packages/trek/trek_rakadiran.php" class="btn btn-info">Details</a>
					                </div>
								  </div>
			                   </div>
						  	</div>

						  	<div class="item" width="100%" style="padding: 20px;">
						  	<div id="coursel_image">
						  		<img src="images/images1/k2a.jpeg" alt="Owl Image" style="width:100%;height: 150px;" >
								  <div class="main_overy">
								  	<div class="overay">
									  	<h2>K2</h2>
									  	<div class="text">
									  		<p>
									  			K2, also known as Mount Godwin-Austen or Chhogori, at 8,611 metres above sea level, is the second highest mountain in the world, after Mount Everest at 8,848 metres.It has the second-highest fatality rate 
									  		</p>
									  	</div>
					                </div>
					                <div class="button">
					                	<a href="packages/climb/package_k2.php" class="btn btn-info">Details</a>
					                </div>
								  </div>
			                   </div>
						  	</div>

						  	<div class="item" width="100%" style="padding: 20px;">
						  	<div id="coursel_image">
						  		<img src="images/images1/Nanga-Parbat.jpg" alt="Owl Image" style="width:100%;height: 150px;" >
								  <div class="main_overy">
								  	<div class="overay">
									  	<h2>Nangaparbet</h2>
									  	<div class="text">
									  		<p>
									  			Nanga Parbat massif is the western corner pillar of the Himalayas. It is an isolated range of peaks just springing up from nothing and is surrounded by the and ice as western
									  		</p>
									  	</div>
					                </div>
					                <div class="button">
					                	<a href="packages/climb/package_nangaparbat.php" class="btn btn-info">Details</a>
					                </div>
								  </div>
			                   </div>
						  	</div>

						  	<div class="item" width="100%" style="padding: 20px;">
						  	<div id="coursel_image">
						  		<img src="images/images1/gasherbrum1.jpg" alt="Owl Image" style="width:100%;height: 150px;" >
								  <div class="main_overy">
								  	<div class="overay">
									  	<h2>Gasherbrum</h2>
									  	<div class="text">
									  		<p>
									  			Gasherbrum is a remote group of peaks located at the northeastern end of the Baltoro Glacier in the Karakoram range of the Himalaya on the border of the Chinese-administered Shaksgam Valley and 
									  		</p>
									  	</div>
					                </div>
					                <div class="button">
					                	<a href="packages/climb/package_gasherbrum.php" class="btn btn-info">Details</a>
					                </div>
								  </div>
			                   </div>
						  	</div>

						  	<div class="item" width="100%" style="padding: 20px;">
						  	<div id="coursel_image">
						  		<img src="images/images1/Broadpeak.jpg" alt="Owl Image" style="width:100%;height: 150px;" >
								  <div class="main_overy">
								  	<div class="overay">
									  	<h2>Broad Peak</h2>
									  	<div class="text">
									  		<p>
									  			Broad Peak is the 12th highest mountain in the world at 8,047 metres above sea level. The literal translation of "Broad Peak" to Falchan Kangri is not used among the Balti people.The English name was
									  		</p>
									  	</div>
					                </div>
					                <div class="button">
					                	<a href="packages/climb/package_broadpeak.php" class="btn btn-info">Details</a>
					                </div>
								  </div>
			                   </div>
						  	</div>

						  	<div class="item" width="100%" style="padding: 20px;">
						  	<div id="coursel_image">
						  		<img src="images/cards/11.jpg" alt="Owl Image" style="width:100%;height: 150px;" >
								  <div class="main_overy">
								  	<div class="overay">
									  	<h2>15 Days Safari</h2>
									  	<div class="text">
									  		<p>
									  			Skardu is a city in Gilgit-Baltistan region of Pakistan, and serves as the capital of Skardu District. Skardu is located in the 10 kilometres wide by 40 kilometres long Skardu Valley, at 
									  		</p>
									  	</div>
					                </div>
					                <div class="button">
					                	<a href="packages/adventure/safari15d.php" class="btn btn-info">Details</a>
					                </div>
								  </div>
			                   </div>
						  	</div>

						  	<div class="item" width="100%" style="padding: 20px;">
						  	<div id="coursel_image">
						  		<img src="images/cards/7.jpg" alt="Owl Image" style="width:100%;height: 150px;" >
								  <div class="main_overy">
								  	<div class="overay">
									  	<h2>21 Days Safari</h2>
									  	<div class="text">
									  		<p>
									  			Many types of sports are in currency, throughout the region, but most popular of them is Polo.[133][134] Almost every bigger valley has a polo ground, polo matches in such grounds attract locals as 
									  		</p>
									  	</div>
					                </div>
					                <div class="button">
					                	<a href="packages/adventure/safari21d.php" class="btn btn-info">Details</a>
					                </div>
								  </div>
			                   </div>
						  	</div>


						</div>		
					

				</div>


		<br /><br /><br /><br /><br /><br /><br /><br />
		</div>




			
			
			<!-- End packages Area -->

		
			
			

			
			<!-- Start about Area -->
			<section class="about-area package_not">
				<div class="container-fluid">
					<div class="row d-flex justify-content-end align-items-center">
						<div class="col-lg-6 col-md-12 about-left">
							<br /><br /><br /><br />
							<br /><br /><br /><br />
							<h1>Did not find your Package? <br>
							Feel free to ask us. <br>
							We‘ll make it for you</h1>
							<p>
								We are local based tour operators in Pakistan. The way back to establish Machulo Treks & Tours, stand our whole career experience in the field of adventure and cultural tourism in our country. We have experience of summiting K2, Broad Peak, Nanga Parbat, K7, Gashabrum etc., many times in all seasons.
							</p>
							<a href="packages/climb/climbing.php"><button class="btn btn-black">FIND OUT MORE PACKAGES</button></a>
						</div>
						<div class="col-lg-6 col-md-12 about-right no-padding">
							<img class="img-fluid" src="images/designedpictures/2.png" alt="">
						</div>
					</div>
				</div>
				<br /><br /><br /><br />
							<br /><br /><br /><br />
			</section>
			<!-- End about Area -->

				<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="images/nelum.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/nelum.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/nelum.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


			

			



			

				
			<br /><br /><br />
			<br /><br /><br />


			<!-- Start Tour Area -->
				
			<!-- End Tour Area -->


			<!-- Start contact-info Area -->
			<section class="contact-info-area section-gap">
				<div class="container">
					<h3 class="text-center">STAY CONNECTED</h3>
					<br /><br /><br />
					<div class="row">
						<div class="single-info  col-lg-4 col-md-6">
							<span class="lnr fas fa-building fa-5x"></span><br /><br /><br />
							 <h4>Visit Our Office</h4>
							 <p>
							 	Shaheed Colony Sukemedan Ganche Store, Skardu

							 </p>
						</div>
						<div class="single-info col-lg-4 col-md-6">
							<span class="lnr fas fa-mobile-alt fa-5x"></span><br /><br /><br />
							 <h4>Let’s call us</h4>
							 <p>
								Phone 01: +92 583-152984 <br>
								Phone 02: +92 344 5401175 <br>
								Phone 03: +92 355-5250691
							 </p>
						</div>
						
						<div class="single-info col-lg-4 col-md-6">
							<span class="lnr fas fa-envelope fa-5x"></span><br /><br /><br />
							 <h4>Customer Support</h4>
							 <p>
							 	info@machulo.com <br>
								dongdongpamachulo@gmail.com <br>
								maqeelm388@gmail.com
							 </p>
						</div>
					</div>
				</div>
			</section>

			<!-- End contact-info Area -->
			<br /><br />
			<br /><br />
			<br /><br />
			<br /><br />
			<!-- Start Contact Area -->
			<section class="contact-area" id="contact">
				<div class="container-fluid">
					<div class="row align-items-center d-flex justify-content-start">
						<div class="col-lg-6 col-md-12 contact-left no-padding">
	      					<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3255.91005415101!2d75.61132431473523!3d35.3082163579471!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1553410703759" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
						</div>
						<?php 
		
	 	if(isset($_POST['send'])){
	 	

	 	
	 		$name=trim($_POST['fname']); 
	 		$email=trim($_POST['email']);
	 		$number=trim($_POST['number']);  
	 		$subject=trim($_POST['subject']); 
	 		$body=trim($_POST['message']); 
	 		$mail = new PHPMailer(); 
	 		$mail->addAddress('bilawalawan747@gmail.com' , 'Bilawal Gul'); 
	 		$mail->setFrom($email); $mail->subject=$subject; 
	 		$mail->isHTML(true); $mail->Body=$body;
	 		$mail->AltBody ='<b>Name</b>'.$name.' <br><b>Number</b>'.$number; 
	 		if($mail->send()){ 
	 			$message='<div class="alert alert-info">
	                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	                <strong>Email Successfully Send</strong>
	              </div>';
	 		}else{ 
	 			$message='<div class="alert alert-danger">
	                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	                <strong>Error in Sending Email</strong>
	              </div>'; 
	 		} 
	 	
	 	} else{

	 	}
	 ?>
						<div class="col-lg-4 col-md-12 pt-100 pb-100">
							<form class="form-area" id="myForm" action="#contact" method="POST" class="contact-form text-right">
								<h3>Stay Connected</h3>
								<?php echo $message;?>
								<input name="fname" placeholder="Enter your name" id="contact" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" class="common-input mt-10" required="" type="text">
								<input name="number" placeholder="Enter your Number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your Number'" class="common-input mt-10" required="" type="text">
								<input name="email" placeholder="Enter email address" type="email" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" class="common-input mt-10" required="" type="email">
								<input name="subject" placeholder="Enter subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter  Subject'" class="common-input mt-10" required="" type="email">
								<textarea class="common-textarea mt-10" name="message" placeholder="Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'" required=""></textarea>
								<button class="primary-btn mt-20" type="submit" name="send">Send Message<span class="lnr lnr-arrow-right"></span></button>
								<div class="alert-msg">
								</div>
							</form>
						</div>
					</div>
				</div>
			</section>
			<!-- End Contact Area -->
			<br /><br />
			<br /><br />
			<br /><br />
			<br /><br />

			<!-- start footer Area -->
			<footer class="footer-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col-lg-3  col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>About Us</h6>
								<p>
									"Machulo" is a big reference among the great mountain ranges of Karakorams, Himalayas and Hindukush. We take you on the tops of the K-2(Godwin Austin), Nanga Parbat, Broad peak and Gashabrums.
								</p>
							</div>
						</div>
						<div class="col-lg-3  col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>Newsletter</h6>
								<p>Stay update with our latest</p>
								<div class="d-flex flex-row" id="mc_embed_signup">
									<!-- <form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscription relative">
										<input name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '" required="" type="email">
										<div style="position: absolute; left: -5000px;">
											<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
										</div>
										<button class="btn bb-btn" id="ftr_btn">
											<span class="lnr lnr-arrow-right"></span>
											<i class="fas fa-arrow-right"  style="margin-top:28%;" ></i>
											</button>
										<div class="info"></div>
									</form> -->
								</div>
							</div>
						</div>
						<div class="col-lg-3  col-md-6 col-sm-6">
							<div class="single-footer-widget mail-chimp">
								<h6 class="mb-20">Instragram Feed</h6>
								<ul class="instafeed d-flex flex-wrap">
									<li><img src="images/i4.jpg" alt=""></li>
									<li><img src="images/i5.jpg" alt=""></li>
									<li><img src="images/i6.jpg" alt=""></li>
									<li><img src="images/i8.jpg" alt=""></li>
									<li><img src="images/i4.jpg" alt=""></li>
									<li><img src="images/i5.jpg" alt=""></li>
									<li><img src="images/i6.jpg" alt=""></li>
									<li><img src="images/i8.jpg" alt=""></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>Follow Us</h6>
								<p>Let us be social</p>
								<div class="footer-social d-flex align-items-center">
									<a href="https://www.facebook.com/Machulotrek/"  target="_blank"><i class="fab fa-facebook fa-2x"></i></a>
									<a href="https://twitter.com/MachuloP" target="_blank"><i class="fab fa-twitter fa-2x"></i></a>
									<a href="https://www.instagram.com/treks_tours_pakistan/" target="_blank"><i class="fab fa-instagram fa-2x"></i></a>					
									<a href="#" target="_blank"><i class="fab fa-youtube fa-2x"></i></a>
								</div>
							</div>
						</div>
					</div>
					<div class="footer-bottom d-flex justify-content-center align-items-center flex-wrap">
						<p class="footer-text m-0">
						Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | made with <i class="far fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a> & <a href="https://www.ridaakh.com">ridaakh</a>
						</p>
					</div>
				</div>
			</footer>
			<!-- End footer Area -->




	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

	<script src="js/vendor/jquery-2.2.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
	<!-- <script src="js/vendor/bootstrap.min.jxs"></script> -->
	<!-- <script src="js/jquery.js"></script> -->
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="js/jquery.sticky.js"></script>
	<script src="js/parallax.min.js"></script>
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<!-- <script src="js/main.js"></script> -->
	<script type="text/javascript" src="owl-carousel/owl.carousel.js"></script>

</body>
</html>