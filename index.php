<? 
    include("header.php");
?>

<!DOCTYPE html>
<html>
<head>
<title>OG Travel</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="headerfooter.css">
<link rel="ICON" href="favicon.ico" type="image/ico" />
</head>
<body>
<div class="topnav">
  <a href="index.html" class="active">Home</a>
  <a href="destinations.html">Destinations</a>
  <a href="deals.html">Deals</a>
  <a href="about.html" style="float:right">About us</a>
  <a href="contacts.html" style="float:right">Contacts</a>
</div>


<div class="row">
  <div class="side">
  <h1>Deals</h1>
  <img src="blackfriday.png" height="20%" width="100%">
  <p class="und"> Up to 30% Discount on flights and hotels<br> Limited Black Friday Offer</p>
  <img src="christmas.jpg" height="20%" width="100%">
  <p class="und"> Up to 35% Discount on flights and hotels<br> Limited Christmas Offer</p>
  <img src="newyear.jpg" height="20%" width="100%">
  <p class="und"> Up to 40% Discount on flights and hotels<br> Limited New Year's Offer</p>
  </div>
  <div class="main">

<h1> &nbsp&nbsp&nbsp Top Destinations</h1>
 <!-- Slideshow container -->
<div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <img src="rome.jpg" height="auto" width="100%">
    <div class="text">Rome</div>
  </div>

  <div class="mySlides fade">
    <img src="tokyo.jpg" height="auto" width="100%" >
    <div class="text">Tokyo</div>
  </div>

  <div class="mySlides fade">
    <img src="paris.jpg"  height="auto" width="100%" >
    <div class="text">Paris</div>
  </div>

  <div class="mySlides fade">
    <img src="istanbul.jpg"  height="auto" width="100%">
    <div class="text">Istanbul</div>
  </div>

  <div class="mySlides fade">
    <img src="reykjavik.jpg"  height="auto" width="100%">
    <div class="text">Reykjavik</div>
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
  <span class="dot" onclick="currentSlide(4)"></span>
  <span class="dot" onclick="currentSlide(5)"></span>
</div> 

</div>
</div>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>

</body>
</html>


<?
    include("footer.php")
?>
