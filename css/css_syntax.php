<?php //session_start(); ?> 
<!DOCTYPE html>
<!-- saved from url=(0043)http://getbootstrap.com/examples/dashboard/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
   
    <title>css syntax</title>
<link href="../nivo-slider.css" rel="stylesheet" type="text/css">
<link href="css.css" rel="stylesheet" type="text/css" />

    <!-- Bootstrap core CSS -->
    <link href="../index_files/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../index_files/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../index_files/dashboard.css" rel="stylesheet">




    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../index_files/ie-emulation-modes-warning.js.download"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
	.tale{
		width:100%;
		max-height:230px;
		}
		.carousel_inner{
			width:100%;
			max-height:20px !important;}
			body{
background-color:
  #b3c6ff !important;				}
	</style>
  </head>


  <body>
 

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="../index.php"><b>KnowledgeWorld.com</b></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
        
        
        <ul class="nav navbar-nav ">
         <li><a href="../html/home.php">HTML</a></li>
          <li><a href="home.php">CSS</a></li>
           <li><a href="../js/home.php">JAVASCRIPT</a></li>
            <li><a href="../php/home.php">PHP</a></li>
             <li><a href="../sql/home.php">SQL</a></li>
              <li><a href="../bootstrap/home.php">BOOTSTRAP</a></li>
              <li><a href="../jquery/home.php">JQUERY</a></li>
        
        
        </ul>
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="../index.php" >Home</a></li>
            <li><a href="../about.php">About</a></li>
            <li><a href="../contactus.php">Contact Us</a></li>
           <!-- <li><a href="../sinup.php">SignUp</a></li>  --->
            
             <li class="dropdown">
  <a class="dropdown-toggle" data-toggle="dropdown" href="#">Courses<span class="caret"></span></a>
  
  <ul class="dropdown-menu" >
  <?php
 // include("../db.php");
 // $row=mysql_query("select * from courses");
 // while($result=mysql_fetch_array($row))
   // echo" <li><a href='coursecontent.php?a=$result[0]'>$result[1]</a></li>";
   
	?>
     <li><a href="../html/home.php">HTML</a></li>
          <li><a href="home.php">CSS</a></li>
           <li><a href="../js/home.php">JAVASCRIPT</a></li>
            <li><a href="../php/home.php">PHP</a></li>
             <li><a href="../sql/home.php">SQL</a></li>
              <li><a href="../bootstrap/home.php">BOOTSTRAP</a></li>
              <li><a href="../jquery/home.php">JQUERY</a></li>
        
  </ul>

</li>
             <?php
// if (isset($_SESSION["name"]))
//{   echo " <li><a href='logout.php'>Logout</a></li>";
// }
	?>
          </ul>
        
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li  style="color:#C00;"><a href="#"><h4 align="center">CSS Tutorial </h4><span class="sr-only">(current)</span></a></li>
       <li  style='text-align:center; font-size:100%;'><a href='home.php'>CSS Home</a></li>
        <li  style='text-align:center; font-size:100%;'><a href='css_intro.php'>CSS Introduction</a></li>
       <li class="active" style='text-align:center; font-size:100%;'><a href='css_syntax.php'>CSS Syntax</a></li>
       <li  style='text-align:center; font-size:100%;'><a href='css_howto.php'>CSS How to</a></li>
       <li style='text-align:center; font-size:100%;'><a href='css_colors.php'>CSS Colors</a></li>
         <li style='text-align:center; font-size:100%;'><a href='css_backgrounds.php'>CSS Backgrounds</a></li>
       <li   style='text-align:center; font-size:100%;'><a href='css_border.php'>CSS Border</a></li>
       <li style='text-align:center; font-size:100%;'><a href='css_margins.php'>CSS Margin</a></li>
       
       
       
       
            
         <?php
		 // include("../db.php");
		//  $row=mysql_query("select * from courses");
		 // while($result=mysql_fetch_array($row))
		 // {
        //  echo " <li style='text-align:center; font-size:200%;'><a href='coursecontent1.php?b=$result[0]'>$result[1]</a></li>";
		  
		//  }
           
			?>
            
          </ul>
         
         </div>
         </div>
        </div>
       
        
        <div class="row">
        <div class="col-sm-12 col-sm-offset-1 col-md-12 col-md-offset-1 ">
        <div id="my-slider" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
        <li data-target="#my-slider" data-slide-to="0" class="active"></li> 
        <li data-target="#my-slider" data-slide-to="1"></li> 
        <li data-target="#my-slider" data-slide-to="2"></li>        </ol>
        <div class="carousel-inner" role="listbox">
        <div class="item active">
        <img src="../images/a.jpg" alt="language" class="tale"/>
        <div class="carousel-caption">
         <h2 style="text-align:left; color:#FFF;">Get best experience of Learning</h2>
         </div>
        </div>
        <div class="item ">
        <img src="../images/s.jpg" alt="language" class="tale"/>
        <div class="carousel-caption">
         <h1 style="text-align:left; color:#003;" >Let's Start Now </h1>
         </div>
        </div>
       <div class="item ">
        <img src="../images/p.jpg" alt="language" class="tale" />
        <div class="carousel-caption">
         <h2 style="text-align:left; color: #FFF;">Create Your Own Website with Php </h2>
         </div>
        </div>
        </div>
        <a class="left carousel-control" href="#my-slider" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"> </span> 
        <span class="sr-only">Previous</span>     </a>
         <a class="right carousel-control" href="#my-slider" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"> </span> 
        <span class="sr-only">Next</span>     </a>
        
        </div>
        </div>
        </div>
         <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header" style="color:#005A31;">CSS Tutorial</h1>
<div class="container-fluid"  style="background-color:white !important;">
                  <div class="alert-info" style="padding:10px 10px 10px 10px; margin:10px 15px 15px 10px;">
<h3>CSS Syntax and Selectors</h3>
<hr>
<img src="../images/example15.png">





In the following example all <p> elements will be center-aligned, with a red text color:
<p>The selector points to the HTML element you want to style.</p>

<p>The declaration block contains one or more declarations separated by semicolons.</p>
<p>A CSS declaration always ends with a semicolon, and declaration blocks are surrounded by curly braces.
</p>





      
       
       
       
                </div>
        
        <!-------code goes here------>
        <img src="../images/example16.png">
        <h3>External Style Sheet</h3>
             <br>
      <p> With an external style sheet, you can change the look of an entire website by changing just one file!</p>
      
     <p> Each page must include a reference to the external style sheet file inside the <xmp><link> element.The <link> element goes inside the <head> section:</xmp></p>
     <br>
      <img src="../images/example9.png">
       <p> It's Output is:</p>
       
       <img src="../images/example8.png">
       <br>
       <p> An external style sheet can be written in any text editor. The file should not contain any html tags. The style sheet file must be saved with a .css extension.</p>
        <div class="container" >
        
       
        <p>
        
        
        
        
        
        </div>
       <!----------------------> 
        </div>     <!------------------container fluid ends here----------->
        </br>
        
        
        <div>
        
        
        
        <div>
       <?php include("../html/footer.php"); ?>
      
       </div>
    

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../index_files/jquery.min.js.download"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../index_files/bootstrap.min.js.download"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../index_files/holder.min.js.download"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../index_files/ie10-viewport-bug-workaround.js.download"></script>
  

</body></html>