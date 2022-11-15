var formContacts = document.getElementsByClassName("contactForm");
var fileArray = [];

Array.from(formContacts).forEach((contactForm) => {

	contactForm.addEventListener("submit", function(event) {
		event.preventDefault();

		var formData = new FormData();
		var elements = Array.from(contactForm.elements);
		for (const element of elements) {
			const valueOfInput = formData.append(element.getAttribute("name"), element.value);
		}

		grecaptcha.ready(function() {
			grecaptcha.execute('6LdMLa4cAAAAALe3fZb0afV_C_TMjLxsMwqDqD_l', {action:'submit'}).then(function(token) {

				formData.append('wa-recaptcha', token);

				var req = new XMLHttpRequest();
				req.open('POST', 'https://mailer.apps.webarray.com/post/HOvoMpaz5gZPEKZ5e2Zfapn6AcJ6l9yk', false);
				
				req.onreadystatechange = function() {
					if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
						Swal.fire({
							icon: 'success',
							title: 'Thank You for Contacting Us!',
							text: 'Your message has been submitted. A member of our team will be in touch!',
							confirmButtonColor: '#000',
						})					
					}	
					else {
						Swal.fire({
							icon: 'error',
							title: 'Oops...',
							text: 'Something went wrong!',
							confirmButtonColor: '#000',
						})
					}
				}
				
				req.send(formData);
							

			});
		});
	});
});