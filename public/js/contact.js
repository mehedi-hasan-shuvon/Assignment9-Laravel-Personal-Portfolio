function validateForm(event) {
    event.preventDefault(); // Prevents form submission if validation fails

    // Get form elements
    var name = document.getElementById('from_name').value;
    var email = document.getElementById('user_email').value;
	var subject = document.getElementById('subject').value;
	var message = document.getElementById('message').value;

    // Simple validation: check if the name and email fields are not empty
    if (name.trim() === '' || email.trim() === '') {
	  sendNotification('Please check the name and email', 'Name and email are required!');
      return false; // Stops form submission
    }

	if(subject.trim() === ''){
		sendNotification('Please check the subject', 'Subject is required!');
		return false;
	}

	if(message.trim() === ''){
		sendNotification('Please check the message', 'Message is required!');
		return false;
	}

    var formData = {
		from_name: name,
		user_email: email,
		subject: subject,
		message: message
	  };




	 emailjs.send( serviceId,templateId, formData)
      .then(function(response) {
		sendNotification('Thank you!', 'Your message has been sent!');
		document.getElementById('from_name').value = '';
		document.getElementById('user_email').value = '';
		document.getElementById('subject').value = '';
		document.getElementById('message').value = '';
      }, function(error) {
        console.error('There was an error sending the email:', error);
      });

    return false; // Prevent form from submitting
  }



function sendNotification(title, message) {
	const toastTrigger = document.getElementById('liveToastBtn');
	const toastLiveExample = document.getElementById('liveToast');

	const toastTitle = document.getElementById('toastTitle');
	toastTitle.innerText = title

	const toastBody = document.getElementById('toastBody');
	toastBody.innerText = message

	if (toastTrigger) {
		const toastBootstrap = bootstrap.Toast.getOrCreateInstance(toastLiveExample);
		toastBootstrap.show()
	}
}



  // Add event listener for form submission
  document.getElementById('contactForm').addEventListener('submit', validateForm);