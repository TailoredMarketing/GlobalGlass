<?php 
	$title = 'Contact Us';
	include( 'inc/header.php' ); 
?>
    <!-- Full Page Image Background Carousel Header -->
	<section class="blue ">
    	<div class="container">
        	<h1>Get In Touch</h1>
			<p>Use the contact details or form below to get in touch.</p>
            <div class="row contact">
            	<div class="col-md-11">
                	<h3>General Enquiries</h3>
                    <p><a href="mailto:enquiries@globalglassworks.co.uk">enquiries@globalglassworks.co.uk</a></p>
                    <h3>Sales</h3>
                    <p><a href="mailto:sales@globalglassworks.co.uk">advertising@globalglassworks.co.uk</a></p>
                </div>
                <div class="col-md-11 col-md-offset-2">
                	<form id="contact_form">
                      <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Full Name">
                      </div>
                      <div class="form-group">
                        <label>Email address*</label>
                        <input type="email" name="email" required class="form-control" placeholder="Email Address">
                      </div>
                      <div class="form-group">
                        <label>Telephone*</label>
                        <input type="tel" name="tel" required class="form-control" placeholder="Telephone Number">
                      </div>
                      <div class="form-group">
                        <label>Enquiry</label>
                        <textarea name="enquiry" class="form-control" placeholder="Your Enquiry"></textarea>
                      </div>
                      <button type="submit" class="btn btn-primary">Send</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section id="newsletter">
    	<div id="newsletter-body" class="container">
        <h1>Get News & Updates</h1>
        	<form>
            	<div class="input-group input-group-lg">
                  <input type="email" name="email" class="form-control" placeholder="Enter your email address to recieve updates">

                  <span class="input-group-btn">
                    <button class="btn btn-primary" type="button">Sign Up!</button>
                  </span>
                </div><!-- /input-group -->
            </form>
        </div>
    </section>
<?php include( 'inc/footer.php' ); ?>    