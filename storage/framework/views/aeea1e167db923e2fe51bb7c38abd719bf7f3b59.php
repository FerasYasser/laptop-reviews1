

<html>
<head>
<style>
}
body{
  margin: 0;
  width: 1000px;
}
            
.menu{
	background: black;
	padding: 10px;
    border-radius: 5px;
    height: 70px;
    width: 100%;
}
.menu button,.menu div{
  float: left;
  border: none;
  color: white;
  background: none;
  text-align: center;
  font-size: 120%;
  margin-left: 10%;
}

.menu a{
	color: white;
    text-decoration: none;
    
}
.topnav {
  height: 50px;
  margin-top: 10px;
  margin-left: 10px;
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
  margin-top: 10px;
	background: #e6e6e6;
	border: 5px ;
	position: relative;
  text-align: center;
}

.types button{  
  color: black;
  background: none;
  text-align: center;
  padding-left:80px; 
  font-size: 20px;
  border: none;
  position: relative;

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
.alllaps{
padding: 0px;
}
.laptop{
  float: right;
  width: 19%;
  position: relative;
  padding-bottom: 20px;
  margin-left : 2px;   
}
.laptop img{
  margin-left : 10%;  
  width: 10px;
  height: 200px;
  position: relative;
}
.laptop p{
  text-align:center;
  font-weight: bold;
  position: relative;
}
#rate{
  margin-left : 25%;  
  text-align:center;
  height: 10px;
  position: relative;
}

</style>
</head>
<body>
<div class="row">
  <div class="col-md-12">
    <br/>
    <h3 align="center"> laptop review</h3>
   
    <blockquote class="menu">
    	<button type="button" id="home"><a href="/">Home</a></button>
        <button type="button" id="laptops"><a href="laptops">laptops</a></button>
        <button type="button" id="news">news</button>
        <button type="button" id="info"><a href="info">info</a></button>
        <?php if(Route::has('login')): ?>
                
                    <?php if(auth()->guard()->check()): ?>
                    <form method="POST" action="<?php echo e(route('logout')); ?>">
                                        <?php echo csrf_field(); ?>

                                       <div>  <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.dropdown-link','data' => ['href' => ''.e(route('logout')).'','onclick' => 'event.preventDefault();
                                                                     this.closest(\'form\').submit();']]); ?>
<?php $component->withName('jet-dropdown-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['href' => ''.e(route('logout')).'','onclick' => 'event.preventDefault();
                                                                     this.closest(\'form\').submit();']); ?>
                                            <?php echo e(__('Logout')); ?>

                                         <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 
                                       </div>
                                    </form>
                    <?php else: ?>
                    <button type="button" id="info">   <a href="<?php echo e(route('login')); ?>" class="login">Login</a> </button>

                        <?php if(Route::has('register')): ?>
                        <button type="button" id="info">    <a href="<?php echo e(route('register')); ?>" class="reg">Register</a> </button>
                        <?php endif; ?>
                    <?php endif; ?>
                
            <?php endif; ?>
    </blockquote>

    

    <blockquote class="types">
      <button type="button">deal</button>
        <button type="button">hp</button>
        <button type="button">hawawi</button>
        <button type="button">asus</button>
        <button type="button">samsung</button>
        <button type="button">microsoft</button>
         <button style="color: blue;" type="button" id="More">More</button>
    </blockquote>

    <div class="topnav">
      <form method="GET" action="<?php echo e(route('searchyy')); ?>" role="searchyy">
<?php echo csrf_field(); ?>
<input type="text" placeholder="Search.." name="searchyy">
<!-- <button type="sumbit" id="btn"></button> -->
</form>

    </div>
<div class='alllaps'>
    
<?php  ;
foreach($laptops as $prod)  {?>
<div class="laptop">
  <a href="<?php echo e(url('product')); ?>?var=<?php echo $prod['id']?>">  <img src=<?php echo $prod['image1']?> style="width:75%"  ></a>
  <!-- <a href="<?php echo e(url('product')); ?>?var=2" class="text-sm text-gray-700 underline">produt</a>  -->
  <p> <?php echo e($prod['brand']); ?> <?php echo e($prod['model']); ?></p>
  <p> <?php echo e($prod['price']); ?></p>
  <?php if($prod['rate']==1): ?>
  <img id='rate' src='https://www.educationinsight.uk/gei/1star.svg' style="width:50%;height:10%; " </a>
  <?php endif; ?>
  <?php if($prod['rate']==2): ?>
  <img id='rate' src='https://www.educationinsight.uk/gei/2star.svg' style="width:50%;height:10%; " </a>
  <?php endif; ?>
  <?php if($prod['rate']==3): ?>
  <img id='rate' src='https://www.educationinsight.uk/gei/3star.svg' style="width:50%;height:10%; " </a>
  <?php endif; ?>
  <?php if($prod['rate']==4): ?>
  <img id='rate' src='https://www.educationinsight.uk/gei/4star.svg' style="width:50%;height:10%; " </a>
  <?php endif; ?>
  <?php if($prod['rate']==5): ?>
  <img id='rate' src='https://www.educationinsight.uk/gei/5star.svg' style="width:50%;height:10%; " </a>
  <?php endif; ?>
</div>
<?php  } ?>
</div>
<br />

</div>
</div>
</body>
</html>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\test1\resources\views/laptops/index.blade.php ENDPATH**/ ?>