<?php
	/*
	Template name: About
	*/ 
	get_header();
?>
	<section class="contact">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
					<div class="category-title">
						<h1>Contact Us.</h1>
						<p>
							Duis ex ad cupidatat tempor Excepteur cillum cupidatat fugiat nostrud cupidatat dolor
							sunt sint sit nisi est eu exercitation incididunt adipisicing veniam velit id fugiat enim
							mollit amet anim veniam dolor dolor irure velit commodo.
						</p>
					</div>
					<div class="about-content">
						<picture><source srcset="<?php bloginfo( 'template_url' ); ?>/assets/img/thumbs/contact/contact-1000.webp" type="image/webp"><img src="<?php bloginfo( 'template_url' ); ?>/assets/img/thumbs/contact/contact-1000.jpg" alt=""></picture>
						<div class="about-content-text">
							<h2>Say Hello</h2>
							<p>
								Odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti
								dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique
								sunt in culpa. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis
							</p>
							<div class="col-xl-5 text-item">
								<h4>Where to Find Us</h4>
								<p>1600 Amphitheatre Parkway</p>
								<p>Mountain View, CA</p>
								<p>94043 US</p>
							</div>
							<div class="col-xl-5 text-item">
								<h4>Contact Info</h4>
								<p>sayhello@wordsmith.com</p>
								<p>info@wordsmith.com</p>
								<p>Phone: (+1) 123 456</p>
							</div>
							<h4>Get In Toch</h4>
							<form action="">
								<input type="text" name="cName" id="cName" class="cName" placeholder="Your Name*">
								<input type="email" name="cEmail" id="cEmail" class="cEmail" placeholder="Your Email*">
								<input type="text" name="cWebsite" id="cWebsite" class="cWebsite" placeholder="Website">
								<textarea name="cMessage" id="cMessage" class="cMessage" placeholder="Your Message*"></textarea>
								<button type="submit" class="cButton">Send Message</button>
							</form>
				</div>
			</div>
		</div>
	</section>
<?php 
	get_footer();
?>