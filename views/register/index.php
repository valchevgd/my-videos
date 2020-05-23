<!DOCTYPE html>
<html lang="en">
<head>
    <title>Welcome To MyFlix</title>
    <link rel="stylesheet" type="text/css" href="../../assets/style/style.css"/>
</head>
<body>
<div class="sign-in-container">
    <div class="column">
        <div class="header">
            <h3>Sign Up</h3>
            <span>to continue to MyFlix</span>
        </div>
        <form action="/users/register" method="post">
            <input type="text" name="first_name" placeholder="First Name" required>
            <input type="text" name="last_name" placeholder="Last Name" required>
            <input type="text" name="username" placeholder="Username" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="email" name="confirm_email" placeholder="Confirm Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="password" name="confirm_password" placeholder="Confirm Password" required>
            <input type="submit" name="submit" value="SUBMIT">
        </form>
    </div>
</div>
</body>
</html>
