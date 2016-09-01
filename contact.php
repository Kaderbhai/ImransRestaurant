<?php 
	define ('TITLE', 'Contact - Imrans Restaurant');
	include('include/header.php'); 
	
	
?>

	<div id="contact">
	
		<hr>
		
		<h1>Get in Touch with us!</h1>
		
		<?php 
		
			//Check for header injection
			function has_header_injection($str) {	
				return preg_match( "/[\r\n]/", $str );
			}
			
			if (isset ($_POST['contact_submit'])) {
				
				$name 		= trim( $_POST['name'] );
				$email 		= trim( $_POST['email'] );
				$message 	= $_POST['message'];
				
				// Check to see if name or email have header injections
				
				if (has_header_injection($name)|| has_header_injection($email)) {
					die (); // If true kill the script
				} 
				
				if (!$name || !$email || !$message ) {
					
					echo "<h4 class='error'>All fields required</h4><a href='contact.php' class='button block'>Go back and try again</a>";
					exit;
				}
				
				//Add the recipient email to the variable
				$to = "imrankaderbhai@gmail.com";
				
				//Create a subject
				$subject = "$name sent you a message via your contact form"; 
				
				//Construct the actual message
				$message  = "Name: $name\r\n";
				$message .= "Email : $email\r\n";
				$message .= "Message:\r\n$message";
				
				//If the subscribe check box was checed
				if (isset($_POST['subscribe']) && $_POST['subscribe'] == 'Subscribe'  ) {
					
					//Add a new line to the message variable
					$message .= "\r\n\r\n\r\nPlease add 4email to the mailing list\r\n";
					
				}
				
				$message = wordwrap($message, 72);
				
				//Set the mail headers into the variable
				$headers  = "MIME-Version: 1.0\r\n";
				$headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
				$headers .= "From: $name <$email> \r\n";
				$headers .= "X-Priority:1\r\n"; 
				$headers .= "X-MSMail-Priority: High\r\n\r\n";

				//Send that email
				mail($to, $subject, $message, $header);
		?>
		
		<!-- Show success message after email is sent -->
		
		<h5>Got your message</h5>
		<p>Well message you back maybe</p>
		<p><a href="/final" class="button block">&laquo; Go to home page</a></p>
		
		<?php } else { ?>
		
		
		<form method="post" action="" id="contact-form">
			
			<label for="name">Your Name</label>
			<input type="text" id="name" name="name">		

			<label for="email">Your Email</label>
			<input type="email" id="email" name="email">

			<label for="message">Your Message</label>
			<textarea id="message" name="message"></textarea>

			<input type="checkbox" id="subscribe" name="subscribe" value="Subscribe">
			<label for="subscribe">Subscribe to Newsletter</label>
			
			<input type="submit" class="button next" name="contact_submit" value="Send Message">
		</form>
		
		<?php } ?>
	<hr>
	</div>


<?php	
	include('include/footer.php');	
?>