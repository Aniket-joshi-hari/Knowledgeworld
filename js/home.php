<?php // session_start(); ?> 
<?php 
/* if(!isset($_SESSION['name']))
{	  

	header("location:../login.php"); 
	}
*/
 ?>

<!DOCTYPE html>
<!-- saved from url=(0043)http://getbootstrap.com/examples/dashboard/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
   
    <title>js tutorial</title>
<link href="../nivo-slider.css" rel="stylesheet" type="text/css">
<link href="../css/css.css" rel="stylesheet" type="text/css" />

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
          <li><a href="../css/home.php">CSS</a></li>
           <li><a href="home.php">JAVASCRIPT</a></li>
            <li><a href="../php/home.php">PHP</a></li>
             <li><a href="../sql/home.php">SQL</a></li>
              <li><a href="../bootstrap/home.php">BOOTSTRAP</a></li>
              <li><a href="../jquery/home.php">JQUERY</a></li>
        
        
        </ul>
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="../index.php" >Home</a></li>
            <li><a href="../about.php">About</a></li>
            <li><a href="../contactus.php">Contact Us</a></li>
          <!---  <li><a href="../sinup.php">SignUp</a></li> ---->
            
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
          <li><a href="../css/home.php">CSS</a></li>
           <li><a href="home.php">JAVASCRIPT</a></li>
            <li><a href="../php/home.php">PHP</a></li>
             <li><a href="../sql/home.php">SQL</a></li>
              <li><a href="../bootstrap/home.php">BOOTSTRAP</a></li>
              <li><a href="../jquery/home.php">JQUERY</a></li>
        
  </ul>

</li>
             <?php
/*if (isset($_SESSION["name"]))
{   echo " <li><a href='logout.php'>Logout</a></li>";
}
	*/ ?>
          </ul>
        
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li  style="color:#C00;"><a href="#"><h4 align="center">JAVASCRIPT Tutorial </h4><span class="sr-only">(current)</span></a></li>
       <li class="active" style='text-align:center; font-size:100%;'><a href='home.php'>Javascript Home</a></li>
        <li  style='text-align:center; font-size:100%;'><a href='js_intro.php'>Js Introduction</a></li>
       <li  style='text-align:center; font-size:100%;'><a href='../css/css_syntax.php'>Js Syntax</a></li>
       <li  style='text-align:center; font-size:100%;'><a href='../css/css_howto.php'>JS How to</a></li>
       <li style='text-align:center; font-size:100%;'><a href='../css/css_colors.php'>Js Colors</a></li>
         <li style='text-align:center; font-size:100%;'><a href='../css/css_backgrounds.php'>Js Backgrounds</a></li>
       <li   style='text-align:center; font-size:100%;'><a href='../css/css_border.php'>Js Border</a></li>
       <li style='text-align:center; font-size:100%;'><a href='../css/css_margins.php'>Js Margin</a></li>
       
       
       
       
            
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
          <h1 class="page-header" style="color:#005A31;">Javscript Tutorial</h1>
<div class="container-fluid"  style="background-color:white !important;">
                  <div class="alert-info" style="padding:10px 10px 10px 10px; margin:10px 15px 15px 10px;">
<h3>JavaScript Tutorial</h3>
<hr>
<img src="../images/example10.png">
<hr>

<h3>Examples in Each Chapter</h3>
<p>With our "Try it Yourself" editor, you can change all examples and view the results.</p>
<ul>
<img src="../images/example10.png">
<h3>Learn by Examples</h3>


<li>Examples are better than 1000 words. Examples are often easier to understand than text explanations.

</li>
<li>This tutorial supplements all explanations with clarifying "Try it Yourself" examples.
</li>
<li>Inline style.
</li>






</ul>






      
       
       
       
                </div>
        
        <!-------code goes here------>
        <img src="../images/example12.png">
        <h3>Why Study JavaScript?</h3>
             <br>
      <p> JavaScript is one of the 3 languages all web developers must learn:</p>
      <ol>
     <li> HTML to define the content of web pages</li>
     <li>CSS to specify the layout of web pages</li>
     <li> JavaScript to program the behavior of web pages</li>
     </ol>
     <br>
      <img src="../images/example13.png">
      
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