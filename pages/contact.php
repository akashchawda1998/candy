<?php
$title = "Contact Us | Candylake";
$page = "contact";
include 'head.php';
?>
<body class="page-contact">

	<?php include 'header.php'; ?>

		<div id="main-content" class="main-content">
			<div class="page-header">
				<figure class="post-thumbnail">
					<img alt="" src="images/contact-banner.jpeg">
				</figure>
				<h1 class="title">
					<span class="line-title">Contacts<i class="fa">&#xf111;</i></span>
				</h1>
			</div>
			<div class="page-content">
				<div class="container">

					<div class="row">

						<div class="col-md-3 col-md-push-9">
							<div class="sidebar">
								<div class="widget">
									<div class="widget-inner">
										<h3 class="title">Contacts Info</h3>
										<div class="widget-text">
											<p>
											Email: <a href="mailto:hello@candylake.in">hello@candylake.in</a><br>
											Phone: <a href="tel:+919425059795">+91 9425059795</a>
											</p>
											<p>360/1, SDA Compound, Nemawar Rd, Indore, Madhya Pradesh 452001</p>
										</div>
									</div>
								</div>

								<!-- <div class="widget">
									<div class="widget-inner">
										<h3 class="title">Store Hours</h3>
										<div class="widget-text">
											<div class="row">
												<div class="col-xs-8 col-sm-7">Monday - Thursday</div>
												<div class="col-xs-4 col-sm-5">8 am - 5 pm</div>

												<div class="col-xs-8 col-sm-7">Friday</div>
												<div class="col-xs-4 col-sm-5">8 am - 6 pm</div>

												<div class="col-xs-8 col-sm-7">Saturday</div>
												<div class="col-xs-4 col-sm-5">9 am - 5 pm</div>

												<div class="col-xs-8 col-sm-7">Sunday &amp; Holidays</div>
												<div class="col-xs-4 col-sm-5">Closed</div>
											</div>

										</div>
									</div>
								</div> -->
							</div>
						</div>

						<div class="col-md-9  col-md-pull-3">
							<div class="contact-content">
								<h3 class="title contact-title">Contact Form</h3>
								<p class="contact-desc">We are committed to delivering high quality, healthy and delicious products to you. We welcome your comments on our products, if you have any queries & comments, write to us and we’ll contact you as soon!!</p>
								<form action="#" method="post" id="contactform" class="contact-form">
									<div class="row">
										<div class="col-sm-4">
											<p class="contact-form-author">
												<input type="text" required="required" size="30" value=""
													name="author" id="author" placeholder="Name">
											</p>
										</div>
										<div class="col-sm-4">
											<p class="contact-form-email">
												<input type="email" required="required" size="30" value=""
													name="email" id="email" placeholder="Email">
											</p>
										</div>
										<div class="col-sm-4">
											<p class="contact-form-subject">
												<input type="text" required="required" size="30" value=""
													name="subject" id="subject" placeholder="Subject">
											</p>
										</div>
									</div>

									<p class="contact-form-message">
										<textarea required="required" rows="3" cols="45"
											name="message" id="message" placeholder="Your message"></textarea>
									</p>
									<p class="form-submit button">
										<button class="hvr-rectangle-out" type="submit" id="submit"
											name="submit">Send Message</button>
									</p>
								</form>
							</div>
						</div>

					</div>
				</div>

				<div class="maps">
					<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14724.45235196874!2d75.9111219!3d22.6868337!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x65005cee69aa937f!2sParas%20Food%20Products!5e0!3m2!1sen!2sin!4v1614168991787!5m2!1sen!2sin" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
				</div>

			</div>

		</div>

		<?php include 'footer.php'; ?>
