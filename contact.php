
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FitLife-contact</title>
    <link rel="stylesheet" href="css1/contact.css">
</head>
<body>
<?php include "header.php"; ?>

<section class="contact-hero">
<h1>Contact Us☎️</h1>
<p>We’d love to hear from you</p>
</section>

<section class="contact-section">

<div class="contact-grid">

<!-- Left Info -->
<div class="contact-info">
<h3>Get In Touch</h3>
<p>📍 India</p>
<p>📞 +91 9876543210</p>
<p>📧 fitlife@gmail.com</p>
</div>

<!-- Right Form -->
<div class="contact-form">
<form id="contactForm" novalidate>

<input type="text" name="name" placeholder="Your Name">
<small class="error"></small>

<input type="email" name="email" placeholder="Your Email">
<small class="error"></small>

<textarea name="message" placeholder="Your Message"></textarea>
<small class="error"></small>

<button type="submit">Send Message</button>

</form>
</div>

</div>

</section>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="js/validate.js"></script>


</body>
</html>
<?php include "footer.php"; ?>