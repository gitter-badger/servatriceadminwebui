<!DOCTYPE html>
<head>
<title>Servatrice Administrator</title>
</head>
<html>
	<body>
		<?php
			require '.config_commonfunctions';
			global $configfile;
		?>	
		<form action="createaccount.php" method="post">
			<table align="center" border="1" cellpadding="5">
				<tr><td align="center" colspan="2"><a href="index.php">Home</a></td></tr>
				<tr><td>Username:</td><td><input type="text" name="nametoregister" maxlength="35" value="" size="35" /></td></tr>
				<tr><td>Password:</td><td><input type="password" name="passwordtouse" maxlength="120" value="" size="35" /></td></tr>
				<tr><td>Email:</td><td><input type=text" name="emailtouse" maxlength="35" value="" size="35" /></tdd></tr>
				<tr><td colspan="2" align="center"><input type="submit" value="Create Account" /></td></tr>
			<table>
		</form>
	</body>
</html>
