<?php $page="orderpass"; ?>
<?php include 'header.php'; ?>

<article id="form-content">
<h1>Season Pass Reservation Form</h1>
<hr class="form-hr">

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
 echo "Thank you for your submission, $name!";
 $body = '';
 $body .= "First name: $_REQUEST[firstname]\n";
 $body .= "Last name: $_REQUEST[lastname]\n";
 $body .= "Email: $_REQUEST[email]\n";
 $body .= "Quantity: $_REQUEST[quantity]\n";
 $body .= "Resident: $_REQUEST[resident]\n";
 
 mail("megdbroughton@gmail.com", "Season pass reservation from $name.", $body);
}

else {

?>

<form id="order-form" action="?" method="post">

<?php if($name_error) { echo "<em>Please enter your first and last name.</em><br />"; } ?>
<input type="text" name="firstname" placeholder="First Name" class="text-input" /><br /><br />
<input type="text" name="lastname" placeholder="Last Name" class="text-input" /><br /><br />
<?php if($email_error) { echo "<em>Please enter your email address.</em><br />"; } ?>
<input name="email" id="email" placeholder="Email" class="text-input" /><br />
				
<label id="form-select">How many passes would you like to reserve?</label>
<select name="quantity">
	<option value="1">1</option>
	<option value="2">2</option>
	<option value="4">4</option>
	<option value="5">5</option>
	<option value="6">6</option>
	<option value="7">7</option>							
</select>

<br /><br /><br />

<label>Are you a resident of Manchester?</label><br /><br />
	<label id="yes">Yes</label>
	<input type="radio-input" name="resident" value="yes" />
	<label id="no">No</label>
	<input type="radio-input" name="resident" value="no" />
	
<br /><br />

<input type="submit" value="Submit" id="submit">
</input>		

</form>	
</article>
</section>
<?php } ?>
<?php include 'footer.php';?>