<?php
include 'functions.php';
session_start();
?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Decorlane</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
     <link href="css/scrolling-nav.css" rel="stylesheet">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:100,400,600,700,300' rel='stylesheet' type='text/css'>
     <link rel="stylesheet" href="css/style.css">
     
 
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
<header>
   <div class="container">
   <div class="row"> 
     <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 icon_email">
        <ul class="email_icon">

          <li>Default Welcome msg!</li>
          <li>Call:+91-0000 000 000</li>
        
        </ul>
     </div>
     <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 icon_cart">
        <ul class="cart_icon pull-right">
         <li>
       
        <div class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Bangalore<i class="fa  fa-angle-down down_icon"></i></a>
              <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li><a href="#">Separated link</a></li>
                  <li><a href="#">Wishlist</a></li>
                </ul>
              </div>
        </li>
        <li>
        <a href="#"><img src="images/location.jpg" class="loc_img" alt=""/>Experience Center</a>
        </li>
          <li>
       <?php
       if(loggedin())
       {
        ?>
        <div class="dropdown">
             <img src="images/man.jpg" alt=""/> 
             <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['user_name']; ?><i class="fa  fa-angle-down down_icon"></i></a>
              <ul class="dropdown-menu">
                    <li><a href="logout.php">Logout</a></li>
                  
                </ul>
              
              </div>
        <?php
       }
       else
       {
        ?>
        <a href="#" data-toggle="modal" data-target="#account" role="button" aria-haspopup="true" aria-expanded="false">Account<i class="fa  fa-angle-down down_icon"></i></a>
        <?php
       }
       ?>
        
    
       
  
        </ul>
     </div>
   </div>
   </div>
   
   <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 solid_line"></div>
</header>
<div class="clear"></div>
<div class="menu_all">
  
   <nav class="navbar navbar-default  deful_decol"  id="rock_header_single_page" data-spy="affix">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><img src="images/logo.png"  alt=""/></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav home_menu">
                                                                         
         <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><p>Page 1</p>
        <i class="fa fa-angle-down"></i></a>
        <ul class="dropdown-menu">
          <?php
              $result=mysql_query("SELECT * from dc_subcategory where c_id=1 ");
              while($row=mysql_fetch_array($result))
              {
                ?>
                <li><a href="Living/<?php echo $row['title'] ?>/"><?php echo $row['title'] ?></a></li>
              <?php
            }
              ?>
             
            </ul>
          </li>
          <li class="dropdown">
         
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><p>Dining Rooms  </p> <i class="fa  fa-angle-down down_med"></i></a>
            <ul class="dropdown-menu">
              <?php
              $result=mysql_query("SELECT * from dc_subcategory where c_id=2 ");
              while($row=mysql_fetch_array($result))
              {
                ?>
                <li><a href="#"><?php echo $row['title'] ?></a></li>
              <?php
            }
              ?>
             
             
            </ul>
          </li>
          <li class="dropdown">
         
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><p>Kitchens </p> <i class="fa  fa-angle-down down_med"></i></a>
            <ul class="dropdown-menu">
              <?php
              $result=mysql_query("SELECT * from dc_subcategory where c_id=3 ");
              while($row=mysql_fetch_array($result))
              {
                ?>
                <li><a href="Kitchen/<?php echo $row['title'] ?>/"><?php echo $row['title'] ?></a></li>
              <?php
            }
              ?>
              
            </ul>
          </li>
          <li class=" dropdown">
         
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><p>bedrooms </p><i class="fa  fa-angle-down down_med"></i></a>
            <ul class="dropdown-menu">
              <?php
              $result=mysql_query("SELECT * from dc_subcategory where c_id=4 ");
              while($row=mysql_fetch_array($result))
              {
                ?>
                <li><a href="#"><?php echo $row['title'] ?></a></li>
              <?php
            }
              ?>
             
            </ul>
          </li>
          <li class="dropdown">
         
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><p>Products </p> <i class="fa  fa-angle-down down_med"></i></a>
            <ul class="dropdown-menu">
              <?php
              $result=mysql_query("SELECT * from dc_subcategory order by c_id");
              while($row=mysql_fetch_array($result))
              {
                ?>
                <li><a href="#"><?php echo $row['title'] ?></a></li>
              <?php
            }
              ?>
      </ul>
      </li>

      </ul>

     
     <ul class="cart_ser pull-right">
 <li><a href="javascript:check_cart('<?php echo loggedin()?>')"><img src="images/cart.jpg" alt=""/></a></li>
          <li><form action="" class="search-form">
                <div class="form-group has-feedback">
            		<label for="search" class="sr-only">Search</label>
            		<input type="text" class="form-control" name="search" id="search" placeholder="search">
              		<span class="glyphicon glyphicon-search form-control-feedback"></span>
            	</div>
            </form></li>
         
        
        </ul>
    </div><!-- /.navbar-collapse -->
  <!-- /.container-fluid -->
   </div>
</nav>
 
</div>
<!----End--->
 <section class="banner_img">
  <div class="container-fluid">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <img src="images/banner.jpg" class="img-responsive ban_img" alt=""/>
    <div class="col-lg-6 col-md-6 col-sm-6 expo_imsp"><span class="imp_txt">style your<br>
dining table </span>
    <button type="submit" class="form-control cont_explo">explore now</button></div>
    </div>
  </div>
</section>



     <!----END--->
 <section class="cont_add ">
    <div class="container">
      <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-8  all_contact">
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 all_typetxt">
        <input type="text" name="name" placeholder="NAME" class="form-control control_name">
        </div>
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
        <input type="text" name="email" placeholder="EMAIL" class="form-control control_name">
        </div>
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
        <input type="text" name="phone" placeholder="PHONE" class="form-control control_name">    
        </div>
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
         <input type="text" name="phone" placeholder="PROPERTY NAME" class="form-control control_name">
        </div>
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
        <button type="submit" class="form-control uplo_cont">UPLOAD FLOOR PLAN </button>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
        <button type="submit" class="form-control contro_submit">SUBMIT</button>
        </div>
      </div>
      </div>
    </div>
  </section> 
    
 

    <!-- Wrapper for slides -->
    <section class="build_txt">
      <div class="container">
       <div class="col-lg-12 col-md-12 col-sm-12 col-lg-12">
       <h4 class="build_your">Build your exclusive design</h4>
       </div>
       <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
         <ul class="kechen_home">
           <li><img src="images/cloth.png"  alt=""/>
           <p class="ward_txt">Wardrobes</p>
           </li>
             <li><img src="images/techo.png"  alt=""/>
           <p class="ward_txt">kitchen</p>
           </li>
           <li><img src="images/sofa.png"  alt=""/>
           <p class="ward_txt">Sofas</p>
           </li>
             <li><img src="images/technology.png"  alt=""/>
           <p class="ward_txt">TV unit</p>
           </li>
             <li><img src="images/doorscreen.png"  alt=""/>
           <p class="ward_txt">Curtains</p>
           </li>
         </ul>
       </div>
       </div>
    
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 solid_line"></div>
        <div class="solid_black">
        </div>
     
    </section>
    
    <!-- Left and right controls -->
    
<section class="new_txt">
 <div class="container">
 <div class="col-lg-12 col-md-12 col-sm-12 col-lg-12">
       <h4 class="new_look">New Looks</h4>
       </div>
       <div class="row">
        <div class="img1">
        <span class="info_cat">kitchen</span>
         <img src="images/img1.jpg" class="img-responsive img_kich" alt=""/>
         
          </div>
        <div class="img2">
        <span class="info_cat">Living room</span>
          <img src="images/img2.jpg"  class="img-responsive img_kich" alt=""/>
         
           </div>
          <div class="img3">
          <span class="info_cat">dining</span>
          <img src="images/img3.jpg" class="img-responsive img_kich"  alt=""/>
        
           </div>
          <div class="img4">
           <span class="info_catb">study</span>
          <img src="images/img4.jpg" class="img-responsive img_kich" alt=""/>
        
           </div>
          <div class="img5">
           <span class="info_catb">Bedroom</span>
          <img src="images/img5.jpg" class="img-responsive img_kich"  alt=""/>
          
           </div>
        </div>
       </div>
 </div>
</section>

     <!---END--->
     <section class="why_do">
       <div class="container">
       <div class="col-lg-12 col-md-12 col-sm-12 col-lg-12">
       <h4 class="why_text">why do business with us?</h4>
       </div>
        <div class="col-lg-10 col-lg-offset-1 col-md-12 col-sm-12 col-xs-12">
         <ul class="kechen_home">
           <li><img src="images/imeage1.png"  alt=""/>
           <p class="ward_year">5 Years <br>Warranty</p>
           </li>
             <li><img src="images/hour.png"  alt=""/>
           <p class="ward_year">45 Days <br>Delivery</p>
           </li>
           <li><img src="images/model.png"  alt=""/>
           <p class="ward_year">Premium <br>Quality</p>
           </li>
             <li><img src="images/icon.png"  alt=""/>
               <p class="ward_year">Free <br>Instalation</p>
           </li>
             <li><img src="images/transport.png" alt=""/>
           <p class="ward_year">Free<br> Delivery</p>
           </li>
         </ul>
       </div>>
       </div>
       
     </section>
     
     <!---End---->
     <section class="video_image">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 solid_line"></div>
        <div class="solid_black">
        </div>
       <div class="container">
       
        <div class="col-lg-12 col-md-12 col-sm-12 col-lg-12">
       <h4 class="why_video">Why people love us!</h4>
       </div>
       <div class="row play_video">
       <div class="col-lg-6  col-md-6 col-sm-12 col-xs-12 vedio_menu ">
       <div class="">
        <div align="center" >
   <object class="embed-responsive-item">
   
       <iframe width="95%" height="265px" src="http://www.youtube.com/embed/KgMt0dtr4Vc" frameborder="0" allowfullscreen="" style="padding-top: 15px;"></iframe>

   </object>
 </div>
 <div class="col-lg-11 col-md-12 col-sm-12 col-xs-12 all_mr">
   <h5 class="mr_mis">Mr. & Mrs. Khurana</h5>
   <p class="Lorem_txt">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut ...</p>
 </div>
 </div>
 </div>
 <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 vedio_menu">
 <div class="">
        <div align="center">
   <object class="embed-responsive-item">
   
       <iframe width="95%" height="265px" src="http://www.youtube.com/embed/KgMt0dtr4Vc" frameborder="0" allowfullscreen="" style="padding-top: 15px;"></iframe>

   </object>
 </div>
 <div class="col-lg-11 col-md-12 col-sm-12 col-xs-12 all_mr">
   <h5 class="mr_mis">Mr. & Mrs. Khurana</h5>
   <p class="Lorem_txt">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut ...</p>
 </div>
 </div>
 </div>
       </div>
       </div>
     </section>
     
     <!----end---->
     <section class="slider_line">
     <div class="container">
     <div class="col-lg-10 col-lg-offset-1 col-md-12 col-sm-12 col-xs-12">
  <br>
  <div id="myCarousel1" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel1" data-slide-to="0" class=""></li>
      <li data-target="#myCarousel1" data-slide-to="1" class=""></li>
      <li data-target="#myCarousel1" data-slide-to="2" class="active"></li>
      <li data-target="#myCarousel1" data-slide-to="3" class=""></li>
      <li data-target="#myCarousel1" data-slide-to="3" class=""></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner image1" role="listbox">
      <div class="item">

<div class="row">
         <div class="col-lg-3 hidden-sm hidden-xs"><img src="images/circle_img.png" class="img_circle" alt=""/></div>
         <div class="col-lg-8 col-xs-12 lorem_slide">
       
        
        
           
            <div class="col-lg-11 col-xs-11"><p class="Lorem_txt">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt
             Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut ...</p>
            <p class="Lorem_txt">&nbsp;- Shalini, Bangalore</p></div>
            </div>
            
       
       </div>
      </div>
	  
	   <div class="item">

<div class="row">
         <div class="col-lg-3 hidden-sm hidden-xs"><img src="images/circle_img.png" class="img_circle" alt=""/></div>
         <div class="col-lg-8 col-xs-12 lorem_slide">
       
        
           
            <div class="col-lg-11 col-xs-11"><p class="Lorem_txt">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt
             Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut ...</p>
            <p class="Lorem_txt">&nbsp;- Shalini, Bangalore</p></div>
            </div>
            
      
       </div>
      </div>
	  
	  	   <div class="item active">

<div class="row">
         <div class="col-lg-3 hidden-sm hidden-xs"><img src="images/circle_img.png" class="img_circle" alt=""/></div>
         <div class="col-lg-8 col-xs-12 lorem_slide">
        
        
           
            <div class="col-lg-11 col-xs-11"><p class="Lorem_txt">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt
             Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut ...</p>
            <p class="Lorem_txt">&nbsp;- Shalini, Bangalore</p></div>
            </div>
            
         </div>
       </div>
     
	  
	  	   <div class="item">

<div class="row">
         <div class="col-lg-3 hidden-sm hidden-xs"><img src="images/circle_img.png" class="img_circle" alt=""/></div>
         <div class="col-lg-8 col-xs-12 lorem_slide">
         
      
           
            <div class="col-lg-11 col-xs-11"><p class="Lorem_txt">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt
             Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut ...</p>
            <p class="Lorem_txt">&nbsp;- Shalini, Bangalore</p></div>
            </div>
            
    
       </div>
       
      </div>
	     <div class="item">

<div class="row">
         <div class="col-lg-3 hidden-sm hidden-xs"><img src="images/circle_img.png" class="img_circle" alt=""/></div>
         <div class="col-lg-8 col-xs-12 lorem_slide">
        
        
           
            <div class="col-lg-11 col-xs-11"><p class="Lorem_txt">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt
             Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut ...</p>
            <p class="Lorem_txt">&nbsp;- Shalini, Bangalore</p></div>
            </div>
            
         </div>
   
       
      </div>
	  
      </div>

      
    </div>

    <!-- Left and right controls -->
    
  </div>
     </div>
     </section>
<!-----End---->
<section class="footer">
   <div class="container">
  <div class="row all_our">
    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 res_menu">
    <h3 class="our_txt">Decorlane</h3>
    <ul>
    <li><a href="#">About Us</a></li>
    <li><a href="#">Contact Us</a></li>
    <li><a href="#">Stories</a></li>
    <li><a href="#">Decorelane  Difference</a></li>
    <li><a href="#">INFORMATION</a></li>
    
</ul>
    </div>
   <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 res_menu">
   <h3 class="our_txt">Careers</h3>



   <ul>
    <li><a href="#">FAQs</a></li>
    <li><a href="#">Privacy Policy</a></li>


    <li><a href="#">Terms & Conditions</a></li>
  
    
</ul>

   </div>
    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 res_menu">
    <h3 class="our_txt">Need Help?</h3>
    <ul>
    <li><a href="#">+91 0000 000 000</a></li>
    <li><a href="#">abc office</a></li>
    <li><a href="#">#000, kasturinagar</a></li>
    
    
</ul>
    </div>
     <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 res_menu">
    <h3 class="our_txt">KEEP IN TOUCH</h3>

    <ul>
    <li><a href="#">Subscribe to our Newsletter</a></li>
   
     
    <li class="input-group">
  <input type="text" class="form-control email_contr" placeholder="abc@example.com">
  <span class="input-group-btn">
        <button class="btn btn-default btn_go" type="button">go</button>
      </span>
</li>
</ul>
<ul class="social_icon">
    <li><a href="#"><img src="images/facebook.png" alt=""/></a></li>
    <li><a href="#"><img src="images/tweet.png"  alt=""/></a></li>
    <li><a href="#"><img src="images/linkdeen.png" alt=""/></a></li>
    
</ul>
    </div> 
 

  </div>
  
  </div>
</section>
<!----End---->
<section class="last_fotter">
  <div class="container">
   <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 copy_right">Copyright @ decorelane 2016.</div>

  </div>
  

           
        
</section>
  
       
     
     
     
     <div class="modal fade" id="account" role="dialog">
    <div class="modal-dialog">

      <style type="text/css">hr.fancy-line { 
    border: 0; 
    height: 1px;
    position: relative;
    margin: 0.5em 0; /* Keep other elements away from pseudo elements*/
}
hr.fancy-line:before {
    top: -0.5em;
    height: 1em;
}
hr.fancy-line:after {
    content:'';
    height: 0.5em;   /* half the height of :before */
    top: 1px;        /* height of hr*/
}

hr.fancy-line:before, hr.fancy-line:after {
    content: '';
    position: absolute;
    width: 100%;
}

hr.fancy-line, hr.fancy-line:before {
    background: -moz-radial-gradient(center, ellipse cover, rgba(0,0,0,0.1) 0%, rgba(0,0,0,0) 75%);
    background: -webkit-gradient(radial, center center, 0px, center center, 75%, color-stop(0%,rgba(0,0,0,0.1)), color-stop(75%,rgba(0,0,0,0)));
    background: -webkit-radial-gradient(center, ellipse cover, rgba(0,0,0,0.1) 0%,rgba(0,0,0,0) 75%);
    background: -o-radial-gradient(center, ellipse cover, rgba(0,0,0,0.1) 0%,rgba(0,0,0,0) 75%);
    background: -ms-radial-gradient(center, ellipse cover, rgba(0,0,0,0.1) 0%,rgba(0,0,0,0) 75%);
    background: radial-gradient(ellipse at center, rgba(0,0,0,0.1) 0%,rgba(0,0,0,0) 75%);
}</style>
      <div class="modal-content">
       
        <div class="modal-body">
        <div id="login_div">
        <h4 class="modal-title" >Login to your Account</h4>

        <button class="btn fbbtn"><i class="fa fa-google-plus"></i> Contiune with Google+</button>
          <button class="btn gplus"><i class="fa fa-facebook-f"></i>Contiune with facbook</button>
          <hr class="fancy-line">
          <form id="login_form">
          <input class="form-control" placeholder="Email" type="email" name="email" id="email" >
          <input class="form-control" placeholder="Password" type="password" name="password" id="password">
          </form>
         <div class="signin"> <button class="btn btn-purple" onclick="javascript:login_function('login_form')">Sign In</button><a href="">Forgot your password?</a></div>
          <hr class="fancy-line">
          <h4 class="modal-title">Not a member?</h4>
          <button class="btn btn-lpurple" onclick="javascript:signup_div()">Sign Up</button>
          </div>

          <div id="signup_div" style="display:none;">
        <h4 class="modal-title" >Sign up</h4>

        <button class="btn fbbtn"><i class="fa fa-google-plus"></i> Contiune with Google+</button>
          <button class="btn gplus"><i class="fa fa-facebook-f"></i>Contiune with facbook</button>
          <hr class="fancy-line">
          <form id="signup_form">
          <input class="form-control" placeholder="User_name" type="text" name="uname" id="uname">
          <span id="error_span_User_name"></span>
          
          <input class="form-control" placeholder="Email" type="email" name="uemail" id="uemail">
          <span id="error_span_Email"></span>
          <input class="form-control" placeholder="Password" type="password" name="password" id="password">
          <span id="error_span_Password"></span><input class="form-control" placeholder="Phone" type="text" name="uphone" id="uphone">
          <span id="error_span_Phone"></span></form>
         <div class="signin"> <button class="btn btn-purple" onclick="javascript:signed_up('signup_form')" >Sign In</button><a href="javascript:login_div()">Alreday have an account?</a></div>
          
          
          </div>
        </div>
        
      </div>
      
    </div>
  </div>     
     
 <script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>


    <!-- Scrolling Nav JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/scrolling-nav.js"></script>
     
 

 <script type="text/javascript">
  function signup_div()
  {
    $("#login_div").hide();
    $("#signup_div").show();
  }
  function login_div()
  {
    $("#signup_div").hide();
    $("#login_div").show();
  }

 

  function login_function(get_form_id){
          $.ajax
           ({
            type: "POST",
            url: "login_submit.php",
            data: $('#'+get_form_id).serialize(),
            cache: false,
            dataType:'json',
            
            success: function(html)
            {
              
              
              if (html.token == "1") 
              {
                window.location.href="index.php";
              }
              
              else
              {
                alert(html.msg);

              }
            }


            
          });


      }
      function signed_up(get_form_id){


        var register_error=0;

        $('#'+get_form_id+' .form-control:visible').each(function(i)
    {
      placeholder=$(this).attr('placeholder');
      if($(this).val()=='')
      {
        register_error=1;
        
        $("#error_span_"+placeholder).html("*"+ placeholder +" should be non empty");
        

        
      }
      else
      {
        $("#error_span_"+placeholder).html("");
      }
      
    });

        if(register_error==0)
        {
          alert("in");




          $('#'+get_form_id+' .form-control:visible').each(function(i)
    {
           placeholder=$(this).attr('placeholder');

           $("#error_span_"+placeholder).html("");

           if($(this).attr('id')=='uname')
        {
           $("#error_span_"+placeholder).html("");
        }

          if($(this).attr('id')=='uemail')
        {
          var inputVal = $("#"+$(this).attr('id')).val();
          var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
          if(!emailReg.test(inputVal))
          {
            
            register_error=2;
            
        $("#error_span_"+placeholder).html("* Invalid "+ placeholder);
           
            
          }
        }

        if($(this).attr('id')=='password')
        { 
          
          var inputVal = $("#"+$(this).attr('id')).val();
          if(inputVal.length<5)
          {
            $("#error_span_"+placeholder).html("* Password should be of min 5 characters" );
            register_error=2;
            
          }
        }

         if($(this).attr('id')=='uphone')
        {
        
          var inputVal = $("#"+$(this).attr('id')).val();
          var numericReg = /^[0-9]+$/;
          if(!numericReg.test(inputVal))
          {
             $("#error_span_"+placeholder).html("* Phone Number should consist of 10 digit only." );
            register_error=2;

          }
          else if(inputVal.length<10)
          {
            $("#error_span_"+placeholder).html("* Phone Number should be of 10 digit.");
            register_error=2;
            
          }
        }
      


      });

}

          if(register_error==0)
          {

            alert("in");

          $.ajax
           ({
            type: "POST",
            url: "signup_submit.php",
            data: $('#'+get_form_id).serialize(),
            cache: false,
            dataType:'json',
            
            success: function(html)
            {
              
              
              if (html.token == "10") 
              {
                window.location.href="index.php";
              }
              
              else
              {
                alert(html.msg);

              }
            }


            
          });
         }

           }

           function check_cart(get_status)
      {
        if(get_status==1)
        {
          window.location.href=cart.php;
        }
        else
          {
            alert("Please login..")
          }
      }


      


    </script>
<script>
$(window).bind('scroll', function () {
    if ($(window).scrollTop() > 50) {
        $('.deful_decol').addClass('fixed');
		 $("#rock_header_single_page").css("top", "0px");
    } else {
        $('.deful_decol').removeClass('fixed');
		 $("#rock_header_single_page").css("top", "9%");
    }
});

</script>
</body>
</html>

