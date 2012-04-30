<?php $page="orderpass"; ?>
<?php include 'header.php'; ?>

<section class="content">
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
 
?>

<article id="submission">
<p>Thank you for your submission!</p>
<p>You can pick up your pass at the Singing Beach Snack Bar in 2 days.</p>
</article>
<?php

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
    <div id="form-col1">
	<?php if($name_error) { echo "<em>Please enter your first and last name.</em><br /><br />"; } ?>
	<input type="text" name="firstname" placeholder="First Name" class="text-input" /><br /><br />
	<input type="text" name="lastname" placeholder="Last Name" class="text-input" /><br /><br />
	<?php if($email_error) { echo "<em>Please enter your email address.</em><br /><br />"; } ?>
	<input name="email" id="email" placeholder="Email" class="text-input" /><br />		
    </div>
    <div id="form-col2">
	<!--<?php if($quantity_error) { echo "<em>Please select the number of passes you would like to reserve.</em><br />"; } ?>-->
	<ul>
	<li><span id="form-select">How many passes would you like to reserve?</span><br /><br />
	  <select name="quantity">
	  <option value="1">1</option>
	  <option value="2">2</option>
	  <option value="4">4</option>
	  <option value="5">5</option>
	  <option value="6">6</option>
	  <option value="7">7</option>							
	  <option value="8">8</option>							
	  <option value="9">9</option>							
	  <option value="10">10</option>							
	  </select>
	</li>
	<br /><br /><br />
	<?php if($resident_error) { echo "<em>Please select yes or no.</em><br />"; } ?>
	<li>Are you a resident of Manchester?<br /><br />
		<span class="radio-input"><label id="yes">Yes</label>
		<input type="radio" name="resident" value="yes" /></span>
		<span class="radio-input"><label id="no">No</label>
		<input type="radio" name="resident" value="no" /></span><br /><br />
	</li>
	</ul>
</div>
<div class="clear"></div>
<hr class="form-hr"><br /><br />
<input type="submit" value="Submit" id="submit" />
</div>
</form>	
<?php } ?>
</article>
</section>
<?php include 'footer.php';?>