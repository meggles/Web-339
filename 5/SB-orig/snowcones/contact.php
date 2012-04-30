<?php $page="contact"; ?>
<?php include 'header.php';?>

<h1>Contact Us</h1>

<?php
//print_r($_REQUEST);//displays form data

 if(isset($_REQUEST['nickname'])) {
 //now we need to process the form

$submitted = true;

if(!$_REQUEST['nickname']) {
	$submitted = false;
	$name_error = true;
}

if(!$_REQUEST['email']) {
	$submitted = false;	
	$email_error = true;
}

}

if($submitted) {
 $name = $_REQUEST['nickname'];
 echo "Thank you for your submission, $name!";
 $body = '';
 $body .= "Name: $_REQUEST[fullname]\n";
 $body .= "Email: $_REQUEST[email]\n";
 $body .= "Flavor: $_REQUEST[flavor]\n";
 
 mail("megdbroughton@gmail.com", "Snowcone contact from $name", $body);
}

else {

?>

<form action="?" method="post">
<?php if($name_error) { echo "<em>Please enter your name.</em><br />"; } ?>

<label>Full name:</label> <input type="text" placeholder="Enter your first and last name" name="fullname" /> <br />
<label>Nickname:</label> <input type="text" name="nickname" /> <br />
<?php if($email_error) { echo "<em>Please enter your email address.</em><br />"; } ?>
<label>Email:</label> <input name="email" id="email" /><br />
<br />



What is your favorite snowcone flavor?<br />
	<select name="flavor">
		<option value="raspberry">Raspberry</option>
		<option value="cherry">Cherry</option>
		<option value="grape">Grape</option>
	</select>
<br />
<br />

What size snowcone do you usually order?<br />
<label id="small">Small</label>
<input type="radio" name="size" value="small" /><br />
</label>
<label id="large">Large</label>
<input type="radio" name="size" value="large" /><br />
<br />

Which is your least favorite flavor?<br />
<input type="checkbox" name="leastflavor" value="lime" /> Lime<br />
<input type="checkbox" name="leastflavor" value="lemon" /> Lemon<br />
<input type="checkbox" name="leastflavor" value="tomato" /> Tomato<br />
<br />
<input type="submit" value="Submit" />
</form>
<br />
<br />
<?php } ?>
<?php include 'footer.php';?>
