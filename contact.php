<?php
include('header.php');
?>
		<!-- header ends-->
		<div id="content">
		
<div><p></p></div>
			<div class="container">
				<section class="three-fourth">
				<form action="send.php" id="contact-form" class="simple-form " method="post">
					<div id="error-field">
					</div>
					<fieldset>
						<i class="icon-user tooltip left" title="Your Name"></i><input value="Your Name" title="Your Name" onblur="if(this.value=='')this.value='Your Name';" onfocus="if(this.value=='Your Name')this.value='';" type="text" class="text requiredField" name="name"/>
					</fieldset>
					<fieldset>
						<i class="icon-envelope tooltip left" title="Your Email"></i><input type="text" title="Your Email" value="Your Email" onblur="if(this.value=='')this.value='Your Email';" onfocus="if(this.value=='Your Email')this.value='';" class="email requiredField" name="email"/>
					</fieldset>
					<fieldset>
						<i class="icon-globe tooltip left" title="Your Website"></i><input type="text" title="Your Website" value="Your Website" onblur="if(this.value=='')this.value='Your Website';" onfocus="if(this.value=='Your Website')this.value='';" class="text" name="url"/>
					</fieldset>
					<fieldset>
						<div class="input-title">
							Your Message:
						</div>
						<textarea cols="30" rows="12" title="Your Message" class="text requiredField" name="message"></textarea>
					</fieldset>
					<div class="three-fourth">
						<input type="submit" value="Send message" class="button big grey round"/>
					</div>
				</form>
				</section>
				<section class="one-fourth sidebar right">
				<div class="widget">
					<h4 class="widget-title">Contact Info</h4>
					<ul class="simple-list">

						<li><a href="#">contact@casinocoin.org</a></li>
						<li><a href="#">Contact us via Social Media</a></li>
					</ul>
					<div class="pdf">
						<a href="#">Download our <br/> pdf Brochure</a>
					</div>
				</div>
				</section>
			</div>
		</div>
	<?php
include('footer.php');
?>