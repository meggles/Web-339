<?php include 'header.php';?>


			<h1>Sign &nbsp;Up &nbsp;Form</h1>
			<p>Sign up for a trip with the form below. Once submitted, you will be contacted by the captain with further instructions.</p>	
		</article>
	</div>
	<article class="article-1">
	<?php
	if(isset($_REQUEST['firstname'])) {
		$submitted = true;
	if(!$_REQUEST['firstname']) {
		$submitted = false;
		$name_error = true;
	}
	if(!$_REQUEST['lastname']) {
		$submitted = false;	
		$name_error = true;
	}
	if(!$_REQUEST['email']) {
		$submitted = false;	
		$email_error = true;
	}
	}
	if($submitted) {
	 $name = $_REQUEST['firstname'];
	?>
		<article id="submission">
			<p>Thank you for your submission!</p>
			<p>You will be contacted by Captain Graham shortly.</p>
		</article>
		<?php	
		 $body = '';
		 $body .= "First name: $_REQUEST[firstname]\n";
		 $body .= "Last name: $_REQUEST[lastname]\n";
		 $body .= "Email: $_REQUEST[email]\n";
		 $body .= "Quantity: $_REQUEST[quantity]\n";
		 $body .= "Resident: $_REQUEST[resident]\n";	 
		 mail("megdbroughton@gmail.com", "Sailing Trip signup form submission from $name.", $body);
		}
		
		else {	
		?>
			<form action="?" method="post">
				<div id="form-col1">
				<?php if($name_error) { echo "<em>Please enter your first and last name.</em><br /><br />"; } ?>
				<input type="text" name="firstname" placeholder="First Name" class="text-input" /><br />
				<input type="text" name="lastname" placeholder="Last Name" class="text-input" /><br />
				<?php if($email_error) { echo "<em>Please enter your email address.</em><br /><br />"; } ?>
				<input name="email" id="email" placeholder="Email" class="text-input" /><br />		
				<input name="phone" id="phone" placeholder="Phone" class="text-input" /><br />		
				<input name="school" id="school" placeholder="School" class="text-input" /><br />		
				<input name="trip" id="trip" placeholder="Which trip would you like to sign up for?" class="text-input" /><br />		
				</div>
				<div class="clear"></div>
				<input type="submit" value="Submit" id="submit" />
			</form>
		<?php } ?>
	</article>

</section>
<div class="clear"></div>






<?php include 'footer.php';?>