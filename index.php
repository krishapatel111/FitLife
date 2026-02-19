
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FitLife</title>
</head>
<?php include "header.php"?>

<!-- Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Google Font -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css1/style.css">
<body>




<!-- ===== HERO CAROUSEL ===== -->

<div id="heroCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000">

<div class="carousel-inner">

<div class="carousel-item active">
<img src="image/image1.jpg" class="d-block w-100">
</div>

<div class="carousel-item">
<img src="image/image2.jpg" class="d-block w-100">
</div>

<div class="carousel-item">
<img src="image/image3.jpg" class="d-block w-100">
</div>

</div>
</div>

<!-- HERO TEXT -->
<div class="hero-text">
<h1>Build Your Perfect Body</h1>
<p>Workout Plans • Diet Plans • Trainers • Healthy Life</p>
<a href="login.php" class="hero-btn">Get Started</a>
</div>
<!-- ===== FEATURES SECTION ===== -->
<section class="features">

<h2 class="section-title">Our Smart Features</h2>

<div class="card-container">

<!-- ===== ROW 1 CLICKABLE CARDS ===== -->

<div class="feature-card clickable">
    <h3>AI Fitness Planner</h3>
    <p>Create personalized workout routines using AI.</p>
    <a href="ai_planner.php">Explore</a>
</div>

<div class="feature-card clickable">
    <h3>Smart Nutrition Guide</h3>
    <p>Customized meal plans based on your goals.</p>
    <a href="nutrition.php">Explore</a>
</div>

<div class="feature-card clickable">
    <h3>Virtual Trainer</h3>
    <p>Train with real-time AI guidance.</p>
    <a href="virtual-trainer.php">Explore</a>
</div>

<!-- ===== ROW 2 HOVER CARDS ===== -->

<div class="feature-card hover-card">
    <h3>Progress Tracking</h3>
    <p>Track your fitness journey visually.</p>
</div>

<div class="feature-card hover-card">
    <h3>Workout Library</h3>
    <p>Access hundreds of workouts.</p>
</div>

<div class="feature-card hover-card">
    <h3>Community Support</h3>
    <p>Connect with fitness lovers.</p>
</div>

</div>
</section>

<!-- ===== TESTIMONIALS SECTION ===== -->

<section class="testimonials">

<h2 class="section-title">What Our Members Say</h2>

<div class="testimonial-container">

<div class="testimonial-card">
    <p>"FitLife completely changed my lifestyle. I feel stronger than ever!"</p>
    <h4>Rahul Sharma</h4>
    <span>⭐⭐⭐⭐⭐</span>
</div>

<div class="testimonial-card">
    <p>"The AI planner gives perfect workouts for my body type."</p>
    <h4>Ananya Patel</h4>
    <span>⭐⭐⭐⭐⭐</span>
</div>

<div class="testimonial-card">
    <p>"Nutrition plans are simple and effective. Love it!"</p>
    <h4>Aman Verma</h4>
    <span>⭐⭐⭐⭐</span>
</div>

</div>

</section>
<!-- ===== BMI CALCULATOR ===== -->

<section class="bmi-section">

<h2 class="section-title">Check Your BMI</h2>

<div class="bmi-box">

    <input type="number" id="weight" placeholder="Enter Weight (kg)">
    <input type="number" id="height" placeholder="Enter Height (cm)">

    <button onclick="calculateBMI()">Calculate BMI</button>

    <p id="bmiResult"></p>

</div>

</section>

<script>
function calculateBMI(){
    let w = document.getElementById("weight").value;
    let h = document.getElementById("height").value;

    if(w=="" || h==""){
        alert("Please enter weight and height");
        return;
    }

    h = h/100;
    let bmi = (w/(h*h)).toFixed(2);

    let msg = "";

    if(bmi < 18.5){
        msg = "Underweight";
    }
    else if(bmi < 25){
        msg = "Normal Weight";
    }
    else if(bmi < 30){
        msg = "Overweight";
    }
    else{
        msg = "Obese";
    }

    document.getElementById("bmiResult").innerHTML =
    "Your BMI: " + bmi + " (" + msg + ")";
}
</script>




<!-- ===== FOOTER ===== -->

<footer>
<div class="container footer-grid">

<div class="footer-box">
<h2>FitLife</h2>
<p>Transform your body and lifestyle with expert guidance.</p>
</div>

<div class="footer-box">
<h4>Quick Links</h4>
<a href="index.php">Home</a>
<a href="workout-plans.php">Workouts</a>
<a href="diet-plans.php">Diet</a>
<a href="trainer.php">Trainers</a>
</div>

<div class="footer-box">
<h4>Services</h4>
<a href="workout-plans.php">Personal Training</a>
<a href="diet-plans.php">Nutrition Plans</a>
<a href="online-coaching.php">Online Coaching</a>
</div>

<div class="footer-box">
<h4>Contact</h4>
<p>📩Email: fitlife@gmail.com</p>
<p>📞Phone: +91 9876543210</p>
<p>📍India</p>
</div>

</div>

<div class="footer-bottom">
© 2026 FitLife. All Rights Reserved.
</div>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<script>
const hamburger = document.querySelector(".hamburger");
const navMenu = document.querySelector(".nav-menu");

hamburger.addEventListener("click", () => {
    navMenu.classList.toggle("active");
});
</script>


</body>
</html>