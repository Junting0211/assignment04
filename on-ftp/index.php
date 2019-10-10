<?php 
$currentPage = "Assignment 04: Odd Student Out";
include "inc/html-top.inc";
?>

<body class="z-pattern">
<header class="persistent">
	<div class="container">
	<section>
		<!-- Primary Optical Area -->
		<h1>"Odd" Student "Out"</h1>
	</section>
	<section class="follow">
		<!-- Strong Follow Area -->				
		<h1>Team Seattle</h1>
	</section>
	</div>
</header>

<main>
<div class="big-message">
	
	<section>
	<div class="slideshow">

  <img class= "Slides" src="images/bell-harbor.jpg" alt="BellHarbor">
  <img class= "Slides" src="images/locals-seattle.jpg" alt="locals_Seattle">
  <img class= "Slides" src="images/Aerial-looking.jpg" alt="Aerial-Looking">


<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
	</section><!--.slider-->


	<section class="intro">
		<p>These three students, Islomzhan, Dewey and Xueying are University of Rochester seniors who are currently enrolling in CSC174 and having strong interests in web page designs. Two of them, Islomzhan and Dewey, have chosen Computer Science as their major. And Xueying, is very special among them since she is a Business Entrepreneurship major. </p>
	</section>
	</div>
</main>

<footer class="persistent">
	<div class="container">
	<section>
		<!-- Weak Visual Area -->
		CSC 174: Advanced Front-end Web Design and Development
	</section>
	<section class="subpage">
		<!-- Terminal Area -->
		<a href="subpage.php">Click Here to Learn More</a>
	</section>
	</div>
</footer>

<script src="js/menu-highlighter.js"></script>
 
      <script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
      <script>
        $('.slider').sss();
      </script>

      <script>
        $( "#accordion" ).accordion({
          heightStyle: "content"
        });
      </script>
</body>
</html>
