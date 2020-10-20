


<?php $__env->startSection('content'); ?>
<html>
<head>
<style>
body {
font-family: vernada;
  margin: 0;
}
.menu{
	margin-top: -1px;
	background: black;
	padding: 10px;
    border-radius: 5px;
}
.menu button{
  border: none;
  color: white;
  background: none;
  text-align: center;
  font-size: 16px;
  margin: 4px 80px;
}

.menu a{
	color: white;
	text-decoration: none;
}
.topnav {
  overflow: hidden;
  background-color: white;
}
.topnav input[type=text] {
  float: right;
  padding: 6px;
  border: none;
  margin-top: 8px;
  margin-right: 800px;
  font-size: 17px;
  position: relative;
  }
/* When the screen is less than 600px wide, stack the links and the search field vertically instead of horizontally */
@media  screen and (max-width: 600px) {
  .topnav a, .topnav input[type=text] {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;
  }
}

.topnav p  {
	color: blue;
	text-transform: uppercase;
	position: relative;
	left: 800px;
	bottom: 150px;
	}
.topnav input{
	position: relative;
	
}

.topnav img{
  width: 150px;
  position: relative;
  margin-left: -200px;
  right:  600px;
  bottom: 50px;
  left: 350px;
} 

.types{
	background-color: #e6e6e6;
	border-radius: 5px ;
	margin-top: -100px;
}

.types button{
	color: black;
  background: none;
  text-align: center;
  font-size: 16px;
  border: none;
  position: relative;
  left: 1000px;
  
 }

* {
  box-sizing: border-box;
}

img {
  vertical-align: middle;
}

/* Position the image container (needed to position the left and right arrows) */
.container {
  position: relative;

}
.container h2{
	margin-left: 50px;
}
/* Hide the images by default */
.mySlides {
  display: none;
  float: left;
  margin-left: 50px;
}

/* Add a pointer when hovering over the thumbnail images */
.cursor {
  cursor: pointer;
}



/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}



.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Six columns side by side */
.column {
  float: left;
  width: 5%;
  margin-left: 30px;
}

/* Add a transparency effect for thumnbail images */
.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}

.center{
	display: block;
}
.info{
	margin-left: 760px;
	margin-right: 40px;
}

.details button{
	background-color: blue;
	border: none;
	color: white;
	padding: 15px 32px;
	text-align: center;
	text-decoration: none;
	display: inline-block;
	font-size: 16px;
	margin: 4px 2px;
	cursor: pointer;
}
.details{
	background-color: blue;
	border-radius: 5px;
	margin-left: 30px;
	margin-right: 30px;
}

.description{
	margin-left: 75px;
}
.column1{
	float: left;

}
.column2{
	margin-left: 1000px;
	width: 400px;
}
.row1:after{
	content: "";
	display: table;
	clear: both;
}
.column2 button{
	background-color: white;
	border: none;
	width: 400px;
}
.desInfo{
	word-wrap:break-word;
	width: 900px;
}

.table{
	border-collapse: collapse;
	width: 100%;

}
td,th{
	border-radius: 1px solid #dddddd;
	text-align: left;
	padding: 8px;
}

tr:nth-child(odd){
	background-color: #dddddd;
}
.addInfo{
	margin-left: 75px;
}
.addInfo hr{
	margin-right: 30px;
}
.rev{
	margin-left: 75px;
}
.rev button{
	background-color: blue;
	border: none;
	color: white;
	padding: 15px 32px;
	text-align: center;
	text-decoration: none;
	display: inline-block;
	font-size: 16px;
	margin: 4px 2px;
	cursor: pointer;
	border-radius: 30px;
}

.Techrev{
	margin-left: 75px;
}
.Techrev button{
	background-color: blue;
	border: none;
	color: white;
	padding: 15px 32px;
	text-align: center;
	text-decoration: none;
	display: inline-block;
	font-size: 16px;
	margin: 4px 2px;
	cursor: pointer;
	border-radius: 30px;
}


 .fotter{
	background: black;
	padding: 50px;
    border-radius: 5px;
    position: relative;
    bottom: 300px;
}
 
 .fotter button{
 	border: none;
  color: white;
  background: none;
  text-align: center;
  font-size: 16px;
  margin: 4px 120px;
 }

.fotter img{
 	height: 50px;
 	border: none;
 	background: none;
 	position: relative;
 	left: 550px;
 	top: 30px;
 }
</style>
</head>
<body>


<div class="row">
<blockquote class="menu">
    	<button type="button" id="home"><a href="home.html">Home</a></button>
        <button type="button" id="laptops"><a href="laptops">laptops</a></button>
        <button type="button" id="news">news</button>
        <button type="button" id="info"><a href="index.html">info</a></button>
        <button type="button" id="sign in">Sign In</button>
        <button type="button" id="sign up">Sign Up</button>
    </blockquote>

    <div class="topnav">
       <img src="logo.jpeg"/>
       <input type="text" placeholder="Search..">
       <p>The best place you can find a review.</p>
    </div>
    <blockquote class="types">
    	<button type="button" id="DELL">Dell</button>
        <button type="button" id="HP">HP</button>
        <button type="button" id="HUAWEI">Huawei</button>
        <button type="button" id="ASUS">Asus</button>
        <button type="button" id="SAMSUNG">Samsung</button>
        <button type="button" id="MICROSOFT">Microsoft</button>
        <button style="color: blue;" type="button" id="More">More</button>
    </blockquote>


    <?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $prod): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 

<div class="container">
	<h2><?php echo e($prod['brand']); ?> <?php echo e($prod['model']); ?></h2>
  <div class="mySlides">
    <div class="numbertext"></div>
    <img src=<?php echo $prod['image1']?> alt="W3Schools.com">
  </div>

  <div class="mySlides">
    <div class="numbertext"></div>
    <img src=<?php echo $prod['image2']?> alt="W3Schools.com">
  </div>

  <div class="mySlides">
    <div class="numbertext"></div>
    <img src=<?php echo $prod['image3']?> alt="W3Schools.com">
  </div>
    
  <div class="mySlides">
    <div class="numbertext"></div>
    <img src=<?php echo $prod['image4']?> alt="W3Schools.com">
  </div>
    


  <div class="caption-container">
    <p id="caption"></p>
  </div>

  <div class="column">
    <div class="row">
      <img class="demo cursor" src=<?php echo $prod['image1']?> style="width:50%" onclick="currentSlide(1)" >
    </div>
    <div class="row">
      <img class="demo cursor" src=<?php echo $prod['image2']?> style="width:50%" onclick="currentSlide(2)" >
    </div>
    <div class="row">
      <img class="demo cursor" src=<?php echo $prod['image3']?> style="width:50%" onclick="currentSlide(3)" >
    </div>
    <div class="row">
      <img class="demo cursor" src=<?php echo $prod['image4']?> style="width:50%" onclick="currentSlide(4)" >
    </div>
  </div>

  <div class="info">
	
	<p style="font-size: 30px; color: blue"><?php echo e($prod['price']); ?></p>
	<hr>
	<p style="font-size: 20px;">
  Hard Disk Capacity: <?php echo e($prod['hard_disk_capacity']); ?><br>
  RAM: <?php echo e($prod['ram']); ?> </p>
</div>

</div>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<div class="description">
<div class="row1">
	<div class="column1">
	<br>
	<h3>Description</h3>
<div class="desInfo">
	<p><?php echo e($prod['discreption']); ?></p>
  <img src=<?php echo $prod['image1']?> style="width:75%"  >
</div>
	</div>
	

</div>
</div>

<div class="addInfo">
	<h3>Additional Information</h3>
	<table>
		<tr>
			<td>Brand</td>
			<th><?php echo e($prod['brand']); ?></th>
		</tr>		
		<tr>
			<td>Model</td>
			<th><?php echo e($prod['model']); ?></th>
		</tr>		
		<tr>
			<td>OS</td>
			<th><?php echo e($prod['os']); ?></th>
		</tr>
		<tr>
			<td>Hard Disk Capacity</td>
			<th><?php echo e($prod['hard_disk_capacity']); ?></th>
		</tr>
		
		<tr>
			<td>Processor Type</td>
			<th>intel 9th Gen core i7-9750H</th>
		</tr>	
		<tr>
			<td><?php echo e($prod['processor_speed']); ?></td>
			<th></th>
		</tr>	
			
		<tr>
			<td>Hard Disk Interface</td>
			<th><?php echo e($prod['hard_disk_interface']); ?></th>
		</tr>		
		<tr>
			<td>RAM</td>
			<th><?php echo e($prod['ram']); ?></th>
		</tr>		
		<tr>
			<td>Screen Size Range</td>
			<th><?php echo e($prod['screen_size_range']); ?></th>
		</tr>		
	</table>
</div>
<h3>User Reviews</h3>
	<!-- <textarea placeholder="Add Review.." rows="4" cols="50" name = "username" id="myTextarea"></textarea> -->
  <form action="" method="post">
<label>Additional Comments:</label><br>
<textarea cols="35" rows="12" name="comments" id="para1">
<php echo $comments; ?>
</textarea><br>
<input type="submit" name="button" value="Submit"/></form>



	<!-- <button class="review"type="submit" onclick="myFunction()"> Add Review</button> -->
 


</div>

<div class="Techrev">
	<br>
	
	<h3>Tech Reviews</h3>
	<textarea placeholder="Add Review.." rows="4" cols="50">
</textarea>
	<br><br>
	<button class="review">Add Review</button>
	
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<blockquote class="fotter">
        <button type="button" id="terms">Terms of service</button>
        <button type="button" id="privacy">Privacy policy</button>
        <button type="button" id="help">Help</button>
        <button type="button" id="contact">Contact</button>
        <img src="C:\xampp\htdocs\test1\resources\views\product\img1.png"/>
        <img src="img2.png"/>
        <img src="img3.png"/>
        <img src="img4.png"/>
    </blockquote>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
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
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>
    
</div>
</div>
</body>
</html>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\test1\resources\views/product/index.blade.php ENDPATH**/ ?>