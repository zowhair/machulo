<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale= 1, shrink-to-fit= no">
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="author" content="Gilgit-Baltistan Trek & Tours">
	<meta name="description" content="">
	<meta charset="UTF-8">
	<meta  name="keywords" content="">
	<title>Machulo Trek & Tours</title>

	<!-- <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css.map">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-grid.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-reboot.min.css">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/carousel.css">
	<link rel="stylesheet" type="text/css" href="css/cover.css"> -->


	<link rel="stylesheet" href="css/linearicons.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/main.css">
	<!-- <link rel="stylesheet" type="text/css" href="css/all.css"> -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

	

</head>
<body>

		<!-- Start Header Area -->
			<?php include'include/header.php'; ?>	
		<!-- End Header Area -->

			



			<br /><br />
			<br /><br />
			<br /><br />
			<br /><br />

		
		

			
				




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
			
			<!-- Start Contact Area -->
			<section class="contact-area" id="contact">

				<div class="container-fluid">
					<div class="row align-items-center d-flex justify-content-start">
						<div class="col-lg-6 col-md-12 contact-left no-padding">
	      					<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3255.91005415101!2d75.61132431473523!3d35.3082163579471!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1553410703759" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
						</div>
						<div class="col-lg-4 col-md-12 pt-100 pb-100">
	<?php 
		use PHPMailer\PHPMailer\PHPMailer;
	 	include_once "PHPMailer/PHPMailer.php"; 
	 	include_once "PHPMailer/Exception.php"; 
	 	if(isset($_POST['send'])){
	 	

	 		$name=trim($_POST['name']); 
	 		$email=trim($_POST['email']); 
	 		$subject=trim($_POST['subject']); 
	 		$body=trim($_POST['message']); 
	 		$mail = new PHPMailer(); 
	 		$mail->addAddress('bilawalawan747@gmail.com' , 'Bilawal Gul'); 
	 		$mail->setFrom($email); $mail->subject=$subject; 
	 		$mail->isHTML(true); $mail->Body='<b>Name'.$name.'</b><br><b>Email: '.$email.'</b><br>'.$body; 
	 		if($mail->send()){ 
	 			$message='<div class="alert alert-info">
	                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	                <strong>Email Successfully Send</strong>
	              </div>';
	 		}else{ 
	 			$message= '<div class="alert alert-danger">
	                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	                <strong>Error in Sending Email</strong>
	              </div>'; 
	 		} 
	 	
	 	} else{
	 		$message="";
	 	}
	 ?>

							<form class="form-area" id="myForm"  method="POST" class="contact-form text-right">
								<h3 class="">Any Queries?</h3>
								<?php echo $message;?>
								<input name="name" placeholder="Enter your name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" class="common-input mt-10" required="" type="text">
								<input name="email" placeholder="Enter email address" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" class="common-input mt-10" required="" type="email">
								<input name="subject" placeholder="Enter Subject" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" class="common-input mt-10" required="" type="text">
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



	<!-- <script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/bootstrap.js.map"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.bundle.js"></script>
	<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js.map"></script>
 -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

	<script src="js/vendor/jquery-2.2.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
	<!-- <script src="js/vendor/bootstrap.min.jxs"></script> -->
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="js/jquery.sticky.js"></script>
	<script src="js/parallax.min.js"></script>
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<!-- <script src="js/main.js"></script> -->
	<script type="text/javascript">
    (function () {
        var options = {
            facebook: "407290259428366", // Facebook page ID
            whatsapp: "+923555180479", // WhatsApp number
            call_to_action: "Message us", // Call to action
            button_color: "#129BF4", // Color of button
            position: "right", // Position may be 'right' or 'left'
            order: "facebook,whatsapp", // Order of buttons
        };
        var proto = document.location.protocol, host = "whatshelp.io", url = proto + "//static." + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
</script>
<!-- /WhatsHelp.io widget -->

<script type="text/javascript">
	$(function () {
  $(document).scroll(function () {
    var $nav = $(".navbar");
    $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
  });
});
</script>

	
</body>
</html>