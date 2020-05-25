<?php /** @var \App\DTO\Errors\RegisterFormErrorsDTO $model */ ?>
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
        <?php if (isset($model) && !empty($model->getFirstNameRequired())) echo "<p class='error-message'>" . $model->getFirstNameRequired() . "</p>"; ?>
        <?php if (isset($model) && !empty($model->getFirstNameLength())) echo "<p class='error-message'>" . $model->getFirstNameLength() . "</p>"; ?>
			<input type="text" name="first_name" placeholder="First Name" required>

        <?php if (isset($model) && !empty($model->getLastNameRequired())) echo "<p class='error-message'>" . $model->getLastNameRequired() . "</p>"; ?>
        <?php if (isset($model) && !empty($model->getLastNameLength())) echo "<p class='error-message'>" . $model->getLastNameLength() . "</p>"; ?>
			<input type="text" name="last_name" placeholder="Last Name" required>

        <?php if (isset($model) && !empty($model->getUsernameRequired())) echo "<p class='error-message'>" . $model->getUsernameRequired() . "</p>"; ?>
        <?php if (isset($model) && !empty($model->getUsernameLength())) echo "<p class='error-message'>" . $model->getUsernameLength() . "</p>"; ?>
			<input type="text" name="username" placeholder="Username" required>

        <?php if (isset($model) && !empty($model->getEmailRequired())) echo "<p class='error-message'>" . $model->getEmailRequired() . "</p>"; ?>
        <?php if (isset($model) && !empty($model->getEmailValid())) echo "<p class='error-message'>" . $model->getEmailValid() . "</p>"; ?>
        <?php if (isset($model) && !empty($model->getEmailLength())) echo "<p class='error-message'>" . $model->getEmailLength() . "</p>"; ?>
        <?php if (isset($model) && !empty($model->getEmailsMissMatch())) echo "<p class='error-message'>" . $model->getEmailsMissMatch() . "</p>"; ?>
			<input type="email" name="email" placeholder="Email" required>

        <?php if (isset($model) && !empty($model->getConfirmEmailRequired())) echo "<p class='error-message'>" . $model->getConfirmEmailRequired() . "</p>"; ?>
			<input type="email" name="confirm_email" placeholder="Confirm Email" required>

        <?php if (isset($model) && !empty($model->getPasswordRequired())) echo "<p class='error-message'>" . $model->getPasswordRequired() . "</p>"; ?>
        <?php if (isset($model) && !empty($model->getPasswordLength())) echo "<p class='error-message'>" . $model->getPasswordLength() . "</p>"; ?>
        <?php if (isset($model) && !empty($model->getPasswordsMissMatch())) echo "<p class='error-message'>" . $model->getPasswordsMissMatch() . "</p>"; ?>
			<input type="password" name="password" placeholder="Password" required>

        <?php if (isset($model) && !empty($model->getConfirmPasswordRequired())) echo "<p class='error-message'>" . $model->getConfirmPasswordRequired() . "</p>"; ?>
			<input type="password" name="confirm_password" placeholder="Confirm Password" required>
			<input type="submit" name="submit" value="SUBMIT">
		</form>

		<p class="sign-in-message">Already have an account? <a href="/login">Sign in</a> here!</p>
	</div>
</div>
</body>
</html>
