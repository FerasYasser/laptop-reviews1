

<?php $__env->startSection('content'); ?>
<html>
<head>
<style>
}
body{
  margin: 0;
}
.menu{
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


/* Style the search box inside the navigation bar */
.topnav input[type=text] {
  float: right;
  padding: 6px;
  border: none;
  margin-top: 8px;
  margin-right: 800px;
  font-size: 17px;
  position: relative;
  }

.topnav p  {
  color: blue;
  text-transform: uppercase;
  position: relative;
  left: 800px;
  bottom: 150px;
  }
 
.topnav img{
  width: 150px;
  position: relative;
  margin-left: -200px;
  right:  600px;
  bottom: 50px;
  left: 350px;
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

.types{
  background: #e6e6e6;
  border: 5px ;
  position: relative;
  bottom: 150;
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
.name {
  position:relative;
  float:left;
  width: 49%;
  height: 100px;
  border: 1px solid;
  text-align:center;
  vertical-align:middle;
}
.picture {
  width: 80%;
  height: 10%;
  display: table;
  margin: 0 auto;
  border: 1px solid;
}
.laptop{
  float: left;
  width: 20%;
  bottom: 100px;
  position: relative;
}
.laptop img{
  height: 100px;
  position: relative;
  left: 50px;
}
.laptop p{
  font-weight: bold;
  position: relative;
  left: 50px;
}
#rate{
  height: 20px;
  position: relative;
  left: 50px;
}

</style>
</head>

<div class="row">
  <div class="col-md-12">
    <br />
    <h3 align="center"> laptop review</h3>
    <body>
   <blockquote class="menu">
      <button type="button" id="home"><a href="home.html">Home</a></button>
        <button type="button" id="laptops"><a href="laptops">laptops</a></button>
        <button type="button" id="news">news</button>
        <button type="button" id="info"><a href="index.html">info</a></button>
        <button type="button" id="sign in">sign in</button>
        <button type="button" id="sign up">sign up</button>
    </blockquote>
    <div class="topnav">
      <img src="logo.jpeg"/>
       <input type="text" placeholder="Search..">
       <p>the best place you can find a review</p>
    </div>
    <blockquote class="types">
      <button type="button">deal</button>
        <button type="button">hp</button>
        <button type="button">hawawi</button>
        <button type="button">asus</button>
        <button type="button">samsung</button>
        <button type="button">microsoft</button>
         <button style="color: blue;" type="button" id="More">More</button>
    </blockquote>
    
<?php  ;
foreach($laptops as $prod)  {?>
<div class="laptop">
  <a href="<?php echo e(url('product')); ?>?var=<?php echo $prod['id']?>">  <img src=<?php echo $prod['image1']?> style="width:75%"  ></a>
  <!-- <a href="<?php echo e(url('product')); ?>?var=2" class="text-sm text-gray-700 underline">produt</a>  -->
  <p> <?php echo e($prod['price']); ?></p>
  <!-- <img id="rate" src="rate4.jpeg" /> -->
  <p>rate <?php echo e($prod['rate']); ?></p>
</div>
<?php  } ?>
</body>
<br />

</div>
</div>
</html>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\test1\resources\views/laptops/index.blade.php ENDPATH**/ ?>