<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title >Registration Form</title>
</head>
<body>
	<h1>Registation Form</h1>
    <?php if (isset($_GET['error']))
        {?>
            <p class="error"><?php echo $_GET['error']; ?></p>
        <?php }?>
	<form id="form1" name="form1" action="RegistrationAction.php" method="post" novalidate enctype="application/x-www-form-urlencoded">

		<fieldset>
	<legend>Basic Information</legend>
	<label for="fname">First Name:</label>
			<input type="text" name="firstname" id="fname" placeholder="Please write your first name."required><br><br>

	<label for="lname">Last Name:</label>
			<input type="text" name="lastname" id="lname" placeholder="Please write your last name."required>
			<br><br>
	
	<br><br>
			

</fieldset> <br>

   
<fieldset>
	<legend>Login Informations</legend>
	<br>
	 <label for="username">Enter your Username:</label>
    <input type="text" id="username" name="username" placeholder="Max 5 characters."required>
<br><br>

    <label for="password">Enter your Password:</label>
    <input type="password" id="password" name="password" placeholder="*****"required>
    <br><br>

    <label for="password">Confirm your Password:</label>
    <input type="password" id="confirmpass" name="confirmpass" placeholder="*****"required>
    <br>

    <br>

<input type="submit" name="submit"> 

</fieldset><br>
	</form>



</body>
</html>