<!DOCTYPE html>
<html lang="en">
<head>
	<title>Welcome To MyFlix</title>
	<link rel="stylesheet" type="text/css" href="../../assets/style/style.css"/>
</head>
<body>
<div class="sign-up-container">
	<div class="column">
		<div class="header">
			<a href="/"><img id="site-logo" src="/assets/images/logo.png" title="myflix" alt="logo"></a>
			<h3>Sign Up</h3>
			<span>to continue to MyFlix</span>
		</div>
		<form action="/users/register" method="post">
			<input type="text" name="first_name" placeholder="First Name" required>
			<input type="text" name="last_name" placeholder="Last Name" required>
			<input type="text" name="username" placeholder="Username" required>
			<?php if (isset($data['emails_miss_match'])) echo $data['emails_miss_match'];?>
			<input type="email" name="email" placeholder="Email" required>
			<input type="email" name="confirm_email" placeholder="Confirm Email" required>
			<input type="password" name="password" placeholder="Password" required>
			<input type="password" name="confirm_password" placeholder="Confirm Password" required>
			<input type="submit" name="submit" value="SUBMIT">
		</form>

		<p  class="sign-in-message">Already have an account? <a href="/login">Sign in</a> here!</p>
	</div>
</div>
</body>
</html>
