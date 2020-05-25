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
			<h3>Sign In</h3>
			<span>to continue to MyFlix</span>
		</div>
		<form action="/users/register" method="post">
			<input type="text" name="username" placeholder="Username" value="<?= $_POST['username'] ?? '' ?>" required>
			<input type="password" name="password" placeholder="Password" value="<?= $_POST['password'] ?? '' ?>" required>
			<input type="submit" name="submit" value="SUBMIT">
		</form>

		<p  class="sign-in-message">Need an account? <a href="/register">Sign up</a> here!</p>
	</div>
</div>
</body>
</html>
