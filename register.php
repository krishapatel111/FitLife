<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FitLife | Register</title>
        <link rel="stylesheet" href="css1/register.css">
        

</head>
<body>
<?php include "header.php"; ?>

<div class="register-container">

<h2>Create Your Account</h2>

<form id="registerForm" novalidate>

<input type="text" id="fullName" placeholder="Full Name">
<span class="error"></span>

<input type="text" id="regEmail" placeholder="Email Address">
<span class="error"></span>

<input type="text" id="username" placeholder="Username">
<span class="error"></span>

<input type="text" id="mobile" placeholder="Mobile Number">
<span class="error"></span>

<select id="gender">
<option value="">Select Gender</option>
<option>Male</option>
<option>Female</option>
<option>Other</option>
</select>
<span class="error"></span>

<input type="number" id="age" placeholder="Age">
<span class="error"></span>

<input type="number" id="height" placeholder="Height (cm)">
<span class="error"></span>

<input type="number" id="weight" placeholder="Weight (kg)">
<span class="error"></span>

<select id="goal">
<option value="">Fitness Goal</option>
<option>Weight Loss</option>
<option>Muscle Gain</option>
<option>General Fitness</option>
<option>Endurance</option>
</select>
<span class="error"></span>

<input type="password" id="regPassword" placeholder="Password">
<span class="error"></span>

<input type="password" id="confirmPassword" placeholder="Confirm Password">
<span class="error"></span>

<button type="submit">Register</button>

<p>
Already have an account?
<a href="login.php">Login</a>
</p>

</form>

</div>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="js/validate.js"></script>

<?php include "footer.php"; ?>

</body>
</html>