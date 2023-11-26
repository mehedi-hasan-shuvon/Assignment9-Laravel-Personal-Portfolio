<div id = "contact" class="col-12 d-flex py-5 flex-column text-center">
	<h2>CONTACT</h2>

  </div>

   <div class="container contact-container ">
	<div class="contact-left"><img class="contact_photo" src="{{asset('images/contact.png')}}" alt="">
	  <p>Want to get in Touch, Contact me on any of the platform</p>
	</div>
	<div class="download1">
	  <div>
		<p class="say">Say Something...</p>
		<form id="contactForm">
		  <div><label>Name: </label><br><input type="text" id="from_name" name="from_name" required=""></div>
		  <div><label>Email: </label><br><input type="email" id="user_email" name="user_email" required=""></div>
		  <div><label>subject: </label><input type="text" id="subject" name="subject"></div>
		  <div><label>Message: </label><textarea id=message name="message" rows="5"></textarea></div>
		  <div><input class="sending" type="submit" value="Send Email"></div>
		</form>
	  </div>
	</div>
  </div>