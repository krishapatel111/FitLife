
<!DOCTYPE html>
<html>
<head>
<title>FitLife Login</title>
<link rel="stylesheet" href="css1/login.css">

</head>
<body>
<?php include "header.php"?>

<section class="auth-section">

    <div class="auth-box">

        <h2>Welcome Back</h2>
        <p>Login to continue your fitness journey</p>

<form id="loginForm" novalidate>

<input type="email" id="loginEmail" autocomplete="off" placeholder="Email Address">

<span class="error"></span>

<input type="password" id="loginPassword" placeholder="Password">

<span class="error"></span>

<button type="submit">Login</button>

<div class="auth-links">
    <a href="forgot.php">Forgot Password?</a>
    <a href="register.php">Create Account</a>
</div>

</form>


    </div>

</section>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="js/validate.js"></script>


</body>
</html>
<?php include "footer.php"?>