<?php
session_start();
ob_start();
require('connect.php');
//session_start();
extract($_REQUEST);
$user=$_SESSION['user'];
$name=$_SESSION['name'];
if($user=="")
header("location:index.html");
$f=mysql_fetch_array(mysql_query("select * from students where user='$user'"));
?>

<!DOCTYPE HTML>
<html>
<head>
<title>Student Recommender System | Questionaire </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Learn Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="css/jquery.countdown.css" />
<link href='//fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700' rel='stylesheet' type='text/css'>
<!----font-Awesome----->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!----font-Awesome----->
<script>
$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');       
        }
    );
});
</script>
<script>
var loadFile=function(event)
{
	var preview=document.getElementById('preview');
	preview.src=URL.createObjectURL(event.target.files[0]);
};
</script>
</head>
<body>
<nav class="navbar navbar-default" role="navigation">
	<div class="container">
	    <div class="navbar-header">
	        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
	        </button>
	         <a class="navbar-brand" href="index.html">Guidance</a>
	    </div>
	    <!--/.navbar-header-->
	    <div class="navbar-collapse collapse" id="bs-example-navbar-collapse-1" style="height: 1px;">
	        <ul class="nav navbar-nav">
		        <li class="dropdown">
		            <a href="logout.php"><i class="fa fa-user"></i><span>Logout</span></a>
		        </li>
		        <li class="dropdown">
		        	<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-list"></i><span>Courses</span></a>
		        	   <ul class="dropdown-menu">
			            <li><a href="courses.html">Courses Categories</a></li>
			            <li><a href="courses.html">Courses list</a></li>
			            <li><a href="courses.html">Courses detail</a></li>
		              </ul>
		        </li>
		        <li class="dropdown">
		            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-calendar"></i><span>Events</span></a>
		             <ul class="dropdown-menu">
			            <li><a href="events.html">Event1</a></li>
			            <li><a href="events.html">Event2</a></li>
			            <li><a href="events.html">Event3</a></li>
		             </ul>
		        </li>
		        <li class="dropdown">
		            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-globe"></i><span>English</span></a>
		            <ul class="dropdown-menu">
			            <li><a href="#"><span><i class="flags us"></i><span>English</span></span></a></li>
			            <li><a href="#"><span><i class="flags newzland"></i><span>Newzland</span></span></a></li>
			        </ul>
		        </li>
		        <li class="dropdown">
		            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-search"></i><span>Search</span></a>
		            <ul class="dropdown-menu search-form">
			           <form>        
                            <input type="text" class="search-text" name="s" placeholder="Search...">    
                            <button type="submit" class="search-submit"><i class="fa fa-search"></i></button>
                       </form>
			        </ul>
		        </li>
		     </ul>
	    </div>
	    <div class="clearfix"> </div>
	  </div>
	    <!--/.navbar-collapse-->
</nav>
<nav class="navbar nav_bottom" role="navigation">
 <div class="container">
  <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header nav_2">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"></a>
    </div> 
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
        <ul class="nav navbar-nav nav_1">
            <li><a href="index.html">Home</a></li>
            <li><a href="about.html">About</a></li>
    		<li class="dropdown mega-dropdown active">
			    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Admissions<span class="caret"></span></a>				
				<div class="dropdown-menu mega-dropdown-menu">
                    <div class="container-fluid">
    				    <!-- Tab panes -->
                        <div class="tab-content">
                          <div class="tab-pane active" id="men">
                            <ul class="nav-list list-inline">
                                <li><a href="admission.php"><img src="images/t7.jpg" class="img-responsive" alt=""/></a></li>
                                <li><a href="admission.php"><img src="images/t8.jpg" class="img-responsive" alt=""/></a></li>
                                <li><a href="admission.php"><img src="images/t9.jpg" class="img-responsive" alt=""/></a></li>
                                <li><a href="admission.php"><img src="images/t1.jpg" class="img-responsive" alt=""/></a></li>
                            </ul>
                          </div>
                          <div class="tab-pane" id="women">
                            <ul class="nav-list list-inline">
                                <li><a href="admission.php"><img src="images/t1.jpg" class="img-responsive" alt=""/></a></li>
                                <li><a href="admission.php"><img src="images/t2.jpg" class="img-responsive" alt=""/></a></li>
                                <li><a href="admission.php"><img src="images/t3.jpg" class="img-responsive" alt=""/></a></li>
                                <li><a href="admission.php"><img src="images/t4.jpg" class="img-responsive" alt=""/></a></li>
                                <li><a href="admission.php"><img src="images/t5.jpg" class="img-responsive" alt=""/></a></li>
                                <li><a href="admission.php"><img src="images/t6.jpg" class="img-responsive" alt=""/></a></li>
                            </ul>
                          </div>
                        </div>
                    </div>
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                       <li class="active"><a href="#men" role="tab" data-toggle="tab">School</a></li>
                       <li><a href="#women" role="tab" data-toggle="tab">College</a></li>
                    </ul>                    
				</div>				
			</li>
			<li><a href="faculty.html">Faculty</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Programs<span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="terms.html">Terms of use</a></li>
                <li><a href="shortcodes.html">Shortcodes</a></li>
                <li><a href="faq.html">Faq</a></li>
              </ul>
            </li>
            <li><a href="services.html">Services</a></li>
            <li><a href="features.html">Features</a></li>
            <li><a href="blog.html">Blog</a></li>
            <li><a href="career.html">Career</a></li>
            <li class="last"><a href="contact.html">Contacts</a></li>
        </ul>
      </div><!-- /.navbar-collapse -->
   </div>
</nav>
<!-- banner -->
  <div class="courses_banner">
  	<div class="container">
  		<h3>Admissions</h3>
  		<p class="description">
             Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam, adipiscing condimentum tristique vel, eleifend sed turpis. Pellentesque cursus arcu id magna euismod in elementum purus molestie.
        </p>
        <div class="breadcrumb1">
            <ul>
                <li class="icon6"><a href="index.html">Home</a></li>
                <li class="icon6"><a href="admission.php">Admissions</a></li>
                <li class="current-page">Questionaire</li>
            </ul>
        </div>
  	</div>
  </div>
    <!-- //banner -->
	<div class="admission">
	   <div class="container">
	   	  <h1>Questionaire (Area of Interest)</h1>
	 
	   	  <div class="col-md admission_left">
	   	  	
	   	  	<form name="form" method="post" enctype="multipart/form-data" onSubmit="return(validate());">
             


			<table id="myTable" class="table table-striped" >  
				<thead>  
				  <tr>  
					<th>Subject</th>
					<th>Interested</th>
					<th>Not-Interested</th>
					<th>Not-Sure</th>
				  </tr>  
				</thead>  
				
				<tbody>  
					
					<tr>
						<td>Arts</td>
						<div class="radios" style="position: absolute">
						   <td><label for="radio-01" class="label_radio">
								<input type="radio" name="ART" value="1" required>
							</label></td>
							<td><label for="radio-02" class="label_radio">
								<input type="radio" name="ART"value="0">
							</label></td>
							<td><label for="radio-03" class="label_radio">
								<input type="radio" name="ART" value="0" checked> 
							</label></td>
						</div>
					</tr>
					
					<tr>
						<td>Hindi</td>
						<div class="radios" style="position: absolute">
						   <td><label for="radio-01" class="label_radio">
								<input type="radio" name="HIN" value="1" required>
							</label></td>
							<td><label for="radio-02" class="label_radio">
								<input type="radio" name="HIN"value="0">
							</label></td>
							<td><label for="radio-03" class="label_radio">
								<input type="radio" name="HIN" value="0" checked> 
							</label></td>
						</div>
					</tr>
					
					<tr>
						<td>Geology</td>
						<div class="radios" style="position: absolute">
						   <td><label for="radio-01" class="label_radio">
								<input type="radio" name="GEO" value="1" required>
							</label></td>
							<td><label for="radio-02" class="label_radio">
								<input type="radio" name="GEO"value="0">
							</label></td>
							<td><label for="radio-03" class="label_radio">
								<input type="radio" name="GEO" value="0" checked> 
							</label></td>
						</div>
					</tr>
					
					<tr>
						<td>Electrical Engineering</td>
						<div class="radios" style="position: absolute">
						   <td><label for="radio-01" class="label_radio">
								<input type="radio" name="ELE" value="1" required>
							</label></td>
							<td><label for="radio-02" class="label_radio">
								<input type="radio" name="ELE"value="0">
							</label></td>
							<td><label for="radio-03" class="label_radio">
								<input type="radio" name="ELE" value="0" checked> 
							</label></td>
						</div>
					</tr>
					
					<tr>
						<td>Accountancy</td>
						<div class="radios" style="position: absolute">
						   <td><label for="radio-01" class="label_radio">
								<input type="radio" name="ACC" value="1" required>
							</label></td>
							<td><label for="radio-02" class="label_radio">
								<input type="radio" name="ACC"value="0">
							</label></td>
							<td><label for="radio-03" class="label_radio">
								<input type="radio" name="ACC" value="0" checked> 
							</label></td>
						</div>
					</tr>
					
					<tr>
						<td>Banking</td>
						<div class="radios" style="position: absolute">
						   <td><label for="radio-01" class="label_radio">
								<input type="radio" name="BAN" value="1" required>
							</label></td>
							<td><label for="radio-02" class="label_radio">
								<input type="radio" name="BAN"value="0">
							</label></td>
							<td><label for="radio-03" class="label_radio">
								<input type="radio" name="BAN" value="0" checked> 
							</label></td>
						</div>
					</tr>
					
					<tr>
						<td>Painting</td>
						<div class="radios" style="position: absolute">
						   <td><label for="radio-01" class="label_radio">
								<input type="radio" name="PTG1" value="1" required>
							</label></td>
							<td><label for="radio-02" class="label_radio">
								<input type="radio" name="PTG1"value="0">
							</label></td>
							<td><label for="radio-03" class="label_radio">
								<input type="radio" name="PTG1" value="0" checked> 
							</label></td>
						</div>
					</tr>
					
					<tr>
						<td>Principles Of Commerce</td>
						<div class="radios" style="position: absolute">
						   <td><label for="radio-01" class="label_radio">
								<input type="radio" name="POC" value="1" required>
							</label></td>
							<td><label for="radio-02" class="label_radio">
								<input type="radio" name="POC"value="0">
							</label></td>
							<td><label for="radio-03" class="label_radio">
								<input type="radio" name="POC" value="0" checked> 
							</label></td>
						</div>
					</tr>
					
					<tr>
						<td>Sale-Purchase Business</td>
						<div class="radios" style="position: absolute">
						   <td><label for="radio-01" class="label_radio">
								<input type="radio" name="SPB" value="1" required>
							</label></td>
							<td><label for="radio-02" class="label_radio">
								<input type="radio" name="SPB"value="0">
							</label></td>
							<td><label for="radio-03" class="label_radio">
								<input type="radio" name="SPB" value="0" checked> 
							</label></td>
						</div>
					</tr>
					
					<tr>
						<td>Psychology</td>
						<div class="radios" style="position: absolute">
						   <td><label for="radio-01" class="label_radio">
								<input type="radio" name="PYY" value="1" required>
							</label></td>
							<td><label for="radio-02" class="label_radio">
								<input type="radio" name="PYY"value="0">
							</label></td>
							<td><label for="radio-03" class="label_radio">
								<input type="radio" name="PYY" value="0" checked> 
							</label></td>
						</div>
					</tr>
					
					<tr>
						<td>Shop Management</td>
						<div class="radios" style="position: absolute">
						   <td><label for="radio-01" class="label_radio">
								<input type="radio" name="SPM" value="1" required>
							</label></td>
							<td><label for="radio-02" class="label_radio">
								<input type="radio" name="SPM"value="0">
							</label></td>
							<td><label for="radio-03" class="label_radio">
								<input type="radio" name="SPM" value="0" checked> 
							</label></td>
						</div>
					</tr>
					
					<tr>
						<td>Chemistry</td>
						<div class="radios" style="position: absolute">
						   <td><label for="radio-01" class="label_radio">
								<input type="radio" name="CHE" value="1" required>
							</label></td>
							<td><label for="radio-02" class="label_radio">
								<input type="radio" name="CHE"value="0">
							</label></td>
							<td><label for="radio-03" class="label_radio">
								<input type="radio" name="CHE" value="0" checked> 
							</label></td>
						</div>
					</tr>
					
					<tr>
						<td>Modern Transport</td>
						<div class="radios" style="position: absolute">
						   <td><label for="radio-01" class="label_radio">
								<input type="radio" name="MTT" value="1" required>
							</label></td>
							<td><label for="radio-02" class="label_radio">
								<input type="radio" name="MTT"value="0">
							</label></td>
							<td><label for="radio-03" class="label_radio">
								<input type="radio" name="MTT" value="0" checked> 
							</label></td>
						</div>
					</tr>
					
					<tr>
						<td>Fitter Work</td>
						<div class="radios" style="position: absolute">
						   <td><label for="radio-01" class="label_radio">
								<input type="radio" name="FTW" value="1" required>
							</label></td>
							<td><label for="radio-02" class="label_radio">
								<input type="radio" name="FTW"value="0">
							</label></td>
							<td><label for="radio-03" class="label_radio">
								<input type="radio" name="FTW" value="0" checked> 
							</label></td>
						</div>
					</tr>
					
					<tr>
						<td>Insurance</td>
						<div class="radios" style="position: absolute">
						   <td><label for="radio-01" class="label_radio">
								<input type="radio" name="ISE" value="1" required>
							</label></td>
							<td><label for="radio-02" class="label_radio">
								<input type="radio" name="ISE"value="0">
							</label></td>
							<td><label for="radio-03" class="label_radio">
								<input type="radio" name="ISE" value="0" checked> 
							</label></td>
						</div>
					</tr>
					
					<tr>
						<td>Art of Decoration</td>
						<div class="radios" style="position: absolute">
						   <td><label for="radio-01" class="label_radio">
								<input type="radio" name="AOD" value="1" required>
							</label></td>
							<td><label for="radio-02" class="label_radio">
								<input type="radio" name="AOD"value="0">
							</label></td>
							<td><label for="radio-03" class="label_radio">
								<input type="radio" name="AOD" value="0" checked> 
							</label></td>
						</div>
					</tr>
					
					<tr>
						<td>History</td>
						<div class="radios" style="position: absolute">
						   <td><label for="radio-01" class="label_radio">
								<input type="radio" name="HIS" value="1" required>
							</label></td>
							<td><label for="radio-02" class="label_radio">
								<input type="radio" name="HIS"value="0">
							</label></td>
							<td><label for="radio-03" class="label_radio">
								<input type="radio" name="HIS" value="0" checked> 
							</label></td>
						</div>
					</tr>
					
					<tr>
						<td>Zoology</td>
						<div class="radios" style="position: absolute">
						   <td><label for="radio-01" class="label_radio">
								<input type="radio" name="ZLG" value="1" required>
							</label></td>
							<td><label for="radio-02" class="label_radio">
								<input type="radio" name="ZLG"value="0">
							</label></td>
							<td><label for="radio-03" class="label_radio">
								<input type="radio" name="ZLG" value="0" checked> 
							</label></td>
						</div>
					</tr>
					
					<tr>
						<td>Welding</td>
						<div class="radios" style="position: absolute">
						   <td><label for="radio-01" class="label_radio">
								<input type="radio" name="WDG" value="1" required>
							</label></td>
							<td><label for="radio-02" class="label_radio">
								<input type="radio" name="WDG"value="0">
							</label></td>
							<td><label for="radio-03" class="label_radio">
								<input type="radio" name="WDG" value="0" checked> 
							</label></td>
						</div>
					</tr>
					
					<tr>
						<td>Textile Designing</td>
						<div class="radios" style="position: absolute">
						   <td><label for="radio-01" class="label_radio">
								<input type="radio" name="TDG" value="1" required>
							</label></td>
							<td><label for="radio-02" class="label_radio">
								<input type="radio" name="TDG"value="0">
							</label></td>
							<td><label for="radio-03" class="label_radio">
								<input type="radio" name="TDG" value="0" checked>  
							</label></td>
						</div>
					</tr>
					
					<tr>
						<td>Geography</td>
						<div class="radios" style="position: absolute">
						   <td><label for="radio-01" class="label_radio">
								<input type="radio" name="GPY" value="1" required>
							</label></td>
							<td><label for="radio-02" class="label_radio">
								<input type="radio" name="GPY"value="0">
							</label></td>
							<td><label for="radio-03" class="label_radio">
								<input type="radio" name="GPY" value="0" checked> 
							</label></td>
						</div>
					</tr>
					
					<tr>
						<td>Botany</td>
						<div class="radios" style="position: absolute">
						   <td><label for="radio-01" class="label_radio">
								<input type="radio" name="BTY" value="1" required>
							</label></td>
							<td><label for="radio-02" class="label_radio">
								<input type="radio" name="BTY"value="0">
							</label></td>
							<td><label for="radio-03" class="label_radio">
								<input type="radio" name="BTY" value="0" checked> 
							</label></td>
						</div>
					</tr>
					
					<tr>
						<td>Engineering Drawing</td>
						<div class="radios" style="position: absolute">
						   <td><label for="radio-01" class="label_radio">
								<input type="radio" name="EDG" value="1" required>
							</label></td>
							<td><label for="radio-02" class="label_radio">
								<input type="radio" name="EDG"value="0">
							</label></td>
							<td><label for="radio-03" class="label_radio">
								<input type="radio" name="EDG" value="0" checked> 
							</label></td>
						</div>
					</tr>
					
					<tr>
						<td>Architecture</td>
						<div class="radios" style="position: absolute">
						   <td><label for="radio-01" class="label_radio">
								<input type="radio" name="ACT" value="1" required>
							</label></td>
							<td><label for="radio-02" class="label_radio">
								<input type="radio" name="ACT"value="0">
							</label></td>
							<td><label for="radio-03" class="label_radio">
								<input type="radio" name="ACT" value="0" checked> 
							</label></td>
						</div>
					</tr>
					
					<tr>
						<td>Economics</td>
						<div class="radios" style="position: absolute">
						   <td><label for="radio-01" class="label_radio">
								<input type="radio" name="ECO" value="1" required>
							</label></td>
							<td><label for="radio-02" class="label_radio">
								<input type="radio" name="ECO"value="0">
							</label></td>
							<td><label for="radio-03" class="label_radio">
								<input type="radio" name="ECO" value="0" checked> 
							</label></td>
						</div>
					</tr>
					
					<tr>
						<td>Meteriology</td>
						<div class="radios" style="position: absolute">
						   <td><label for="radio-01" class="label_radio">
								<input type="radio" name="MET" value="1" required>
							</label></td>
							<td><label for="radio-02" class="label_radio">
								<input type="radio" name="MET"value="0">
							</label></td>
							<td><label for="radio-03" class="label_radio">
								<input type="radio" name="MET" value="0" checked> 
							</label></td>
						</div>
					</tr>
					
					<tr>
						<td>Disease & Bacteriology</td>
						<div class="radios" style="position: absolute">
						   <td><label for="radio-01" class="label_radio">
								<input type="radio" name="DAB" value="1" required>
							</label></td>
							<td><label for="radio-02" class="label_radio">
								<input type="radio" name="DAB"value="0">
							</label></td>
							<td><label for="radio-03" class="label_radio">
								<input type="radio" name="DAB" value="0" checked> 
							</label></td>
						</div>
					</tr>
					
					<tr>
						<td>Surgery</td>
						<div class="radios" style="position: absolute">
						   <td><label for="radio-01" class="label_radio">
								<input type="radio" name="SUR" value="1" required>
							</label></td>
							<td><label for="radio-02" class="label_radio">
								<input type="radio" name="SUR"value="0">
							</label></td>
							<td><label for="radio-03" class="label_radio">
								<input type="radio" name="SUR" value="0" checked> 
							</label></td>
						</div>
					</tr>
					
					<tr>
						<td>Philosophy</td>
						<div class="radios" style="position: absolute">
						   <td><label for="radio-01" class="label_radio">
								<input type="radio" name="PHY" value="1" required>
							</label></td>
							<td><label for="radio-02" class="label_radio">
								<input type="radio" name="PHY"value="0">
							</label></td>
							<td><label for="radio-03" class="label_radio">
								<input type="radio" name="PHY" value="0" checked> 
							</label></td>
						</div>
					</tr>
					
					<tr>
						<td>Science of Health</td>
						<div class="radios" style="position: absolute">
						   <td><label for="radio-01" class="label_radio">
								<input type="radio" name="SOH" value="1" required>
							</label></td>
							<td><label for="radio-02" class="label_radio">
								<input type="radio" name="SOH"value="0">
							</label></td>
							<td><label for="radio-03" class="label_radio">
								<input type="radio" name="SOH" value="0" checked> 
							</label></td>
						</div>
					</tr>
					
					<tr>
						<td>Anthropology</td>
						<div class="radios" style="position: absolute">
						   <td><label for="radio-01" class="label_radio">
								<input type="radio" name="APY" value="1" required>
							</label></td>
							<td><label for="radio-02" class="label_radio">
								<input type="radio" name="APY"value="0">
							</label></td>
							<td><label for="radio-03" class="label_radio">
								<input type="radio" name="APY" value="0" checked> 
							</label></td>
						</div>
					</tr>
					
					<tr>
						<td>English Literature</td>
						<div class="radios" style="position: absolute">
						   <td><label for="radio-01" class="label_radio">
								<input type="radio" name="EGL" value="1" required>
							</label></td>
							<td><label for="radio-02" class="label_radio">
								<input type="radio" name="EGL"value="0">
							</label></td>
							<td><label for="radio-03" class="label_radio">
								<input type="radio" name="EGL" value="0" checked> 
							</label></td>
						</div>
					</tr>
					
					<tr>
						<td>General Science</td>
						<div class="radios" style="position: absolute">
						   <td><label for="radio-01" class="label_radio">
								<input type="radio" name="GSC" value="1" required>
							</label></td>
							<td><label for="radio-02" class="label_radio">
								<input type="radio" name="GSC"value="0">
							</label></td>
							<td><label for="radio-03" class="label_radio">
								<input type="radio" name="GSC" value="0" checked> 
							</label></td>
						</div>
					</tr>
					
					<tr>
						<td>Science of Atoms</td>
						<div class="radios" style="position: absolute">
						   <td><label for="radio-01" class="label_radio">
								<input type="radio" name="SOA" value="1" required>
							</label></td>
							<td><label for="radio-02" class="label_radio">
								<input type="radio" name="SOA"value="0">
							</label></td>
							<td><label for="radio-03" class="label_radio">
								<input type="radio" name="SOA" value="0" checked> 
							</label></td>
						</div>
					</tr>
					
					<tr>
						<td>Physics</td>
						<div class="radios" style="position: absolute">
						   <td><label for="radio-01" class="label_radio">
								<input type="radio" name="PHS1" value="1" required>
							</label></td>
							<td><label for="radio-02" class="label_radio">
								<input type="radio" name="PHS1"value="0">
							</label></td>
							<td><label for="radio-03" class="label_radio">
								<input type="radio" name="PHS1" value="0" checked> 
							</label></td>
						</div>
					</tr>
					
					<tr>
						<td>Applied Mathematics</td>
						<div class="radios" style="position: absolute">
						   <td><label for="radio-01" class="label_radio">
								<input type="radio" name="AMS" value="1" required>
							</label></td>
							<td><label for="radio-02" class="label_radio">
								<input type="radio" name="AMS"value="0">
							</label></td>
							<td><label for="radio-03" class="label_radio">
								<input type="radio" name="AMS" value="0" checked> 
							</label></td>
						</div>
					</tr>
					
					<tr>
						<td>Veterinary Science</td>
						<div class="radios" style="position: absolute">
						   <td><label for="radio-01" class="label_radio">
								<input type="radio" name="VTS" value="1" required>
							</label></td>
							<td><label for="radio-02" class="label_radio">
								<input type="radio" name="VTS"value="0">
							</label></td>
							<td><label for="radio-03" class="label_radio">
								<input type="radio" name="VTS" value="0" checked> 
							</label></td>
						</div>
					</tr>
					
					<tr>
						<td>Civil Engineering</td>
						<div class="radios" style="position: absolute">
						   <td><label for="radio-01" class="label_radio">
								<input type="radio" name="CEG" value="1" required>
							</label></td>
							<td><label for="radio-02" class="label_radio">
								<input type="radio" name="CEG"value="0">
							</label></td>
							<td><label for="radio-03" class="label_radio">
								<input type="radio" name="CEG" value="0" checked> 
							</label></td>
						</div>
					</tr>
					
					<tr>
						<td>Mechanical Engineering</td>
						<div class="radios" style="position: absolute">
						   <td><label for="radio-01" class="label_radio">
								<input type="radio" name="MEG" value="1" required>
							</label></td>
							<td><label for="radio-02" class="label_radio">
								<input type="radio" name="MEG"value="0">
							</label></td>
							<td><label for="radio-03" class="label_radio">
								<input type="radio" name="MEG" value="0" checked> 
							</label></td>
						</div>
					</tr>
					
					<tr>
						<td>Modern Art</td>
						<div class="radios" style="position: absolute">
						   <td><label for="radio-01" class="label_radio">
								<input type="radio" name="MAT" value="1" required>
							</label></td>
							<td><label for="radio-02" class="label_radio">
								<input type="radio" name="MAT"value="0">
							</label></td>
							<td><label for="radio-03" class="label_radio">
								<input type="radio" name="MAT" value="0" checked> 
							</label></td>
						</div>
					</tr>
					
					<tr>
						<td>Science of Metals</td>
						<div class="radios" style="position: absolute">
						   <td><label for="radio-01" class="label_radio">
								<input type="radio" name="SOM" value="1" required>
							</label></td>
							<td><label for="radio-02" class="label_radio">
								<input type="radio" name="SOM"value="0">
							</label></td>
							<td><label for="radio-03" class="label_radio">
								<input type="radio" name="SOM" value="0" checked> 
							</label></td>
						</div>
					</tr>
					
					<tr>
						<td>Physics</td>
						<div class="radios" style="position: absolute">
						   <td><label for="radio-01" class="label_radio">
								<input type="radio" name="PHS2" value="1" required>
							</label></td>
							<td><label for="radio-02" class="label_radio">
								<input type="radio" name="PHS2"value="0">
							</label></td>
							<td><label for="radio-03" class="label_radio">
								<input type="radio" name="PHS2" value="0" checked> 
							</label></td>
						</div>
					</tr>
					
					
					<tr>
						<td>Human Science</td>
						<div class="radios" style="position: absolute">
						   <td><label for="radio-01" class="label_radio">
								<input type="radio" name="HSC" value="1" required>
							</label></td>
							<td><label for="radio-02" class="label_radio">
								<input type="radio" name="HSC"value="0">
							</label></td>
							<td><label for="radio-03" class="label_radio">
								<input type="radio" name="HSC" value="0" checked> 
							</label></td>
						</div>
					</tr>
					
					<tr>
						<td>General Technology</td>
						<div class="radios" style="position: absolute">
						   <td><label for="radio-01" class="label_radio">
								<input type="radio" name="GTY" value="1" required>
							</label></td>
							<td><label for="radio-02" class="label_radio">
								<input type="radio" name="GTY"value="0">
							</label></td>
							<td><label for="radio-03" class="label_radio">
								<input type="radio" name="GTY" value="0" checked> 
							</label></td>
						</div>
					</tr>
					
					<tr>
						<td>Mathematics</td>
						<div class="radios" style="position: absolute">
						   <td><label for="radio-01" class="label_radio">
								<input type="radio" name="MTS" value="1" required>
							</label></td>
							<td><label for="radio-02" class="label_radio">
								<input type="radio" name="MTS"value="0">
							</label></td>
							<td><label for="radio-03" class="label_radio">
								<input type="radio" name="MTS" value="0" checked> 
							</label></td>
						</div>
					</tr>
					
					
					<tr>
						<td>Engineering Trade</td>
						<div class="radios" style="position: absolute">
						   <td><label for="radio-01" class="label_radio">
								<input type="radio" name="ETR" value="1" required>
							</label></td>
							<td><label for="radio-02" class="label_radio">
								<input type="radio" name="ETR"value="0">
							</label></td>
							<td><label for="radio-03" class="label_radio">
								<input type="radio" name="ETR" value="0" checked> 
							</label></td>
						</div>
					</tr>
					
					
					<tr>
						<td>Main Elements of Indian Technology</td>
						<div class="radios" style="position: absolute">
						   <td><label for="radio-01" class="label_radio">
								<input type="radio" name="MIT" value="1" required>
							</label></td>
							<td><label for="radio-02" class="label_radio">
								<input type="radio" name="MIT"value="0">
							</label></td>
							<td><label for="radio-03" class="label_radio">
								<input type="radio" name="MIT" value="0" checked> 
							</label></td>
						</div>
					</tr>
					
					<tr>
						<td>Radio/TV Engineering</td>
						<div class="radios" style="position: absolute">
						   <td><label for="radio-01" class="label_radio">
								<input type="radio" name="RTE" value="1" required>
							</label></td>
							<td><label for="radio-02" class="label_radio">
								<input type="radio" name="RTE"value="0">
							</label></td>
							<td><label for="radio-03" class="label_radio">
								<input type="radio" name="RTE" value="0" checked> 
							</label></td>
						</div>
					</tr>
					
					<tr>
						<td>Computer Programming</td>
						<div class="radios" style="position: absolute">
						   <td><label for="radio-01" class="label_radio">
								<input type="radio" name="CPM" value="1" required>
							</label></td>
							<td><label for="radio-02" class="label_radio">
								<input type="radio" name="CPM"value="0">
							</label></td>
							<td><label for="radio-03" class="label_radio">
								<input type="radio" name="CPM" value="0" checked> 
							</label></td>
						</div>
					</tr>
					
				</tbody>
			</table>  

			<script>
			$(document).ready(function(){
			$('#myTable').dataTable();
			});
			</script>
			 
                 
                 
                 <script>
				 function validate()
				 {
					 var a=document.form.go.value;
					 
					  if(a!=""||a!=null)
					 {
						 alert("Successfully Registered.");
						 return true;
					 }
					 
					 return true;
					 
				 }
				 </script>
	            <input type="submit" value="Apply Now" name="go" class="course-submit">		                            
             
	   	   </div>
            </form>				
		   <div class="clearfix"> </div>
	   </div>
	</div>
    <div class="footer">
    	<div class="container">
    		<div class="col-md-3 grid_4">
    		   <h3>About Us</h3>	
    		   <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.."</p>
    		      <ul class="social-nav icons_2 clearfix">
                    <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#" class="facebook"> <i class="fa fa-facebook"></i></a></li>
                    <li><a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a></li>
                 </ul>
    		</div>
    		<div class="col-md-3 grid_4">
    		   <h3>Quick Links</h3>
    			<ul class="footer_list">
    				<li><a href="#">-  PRIOR LEARNING ASSESSMENT </a></li>
    				<li><a href="#">-  INTERNATIONAL STUDENTS</a></li>
    				<li><a href="#">-  CAREER OPPORTUNITIES</a></li>
    				<li><a href="#">-   NEW STUDENT ORIENTATION</a></li>
    				<li><a href="#">-   NEW CLASSROOM TECHNOLOGY</a></li>
    			</ul>
    		</div>
    		<div class="col-md-3 grid_4">
    		   <h3>Contact Us</h3>
    			<address>
                    <strong>Contrary to popular belief</strong>
                    <br>
                    <span>4877 It is a long established</span>
                    <br><br>
                    <span>Contrary to popular , 15089</span>
                    <br>
                    <abbr>Telephone : </abbr> +1 (734) 123-4567
                    <br>
                    <abbr>Email : </abbr> <a href="mailto@example.com">info(at)Learn.com</a>
               </address>
    		</div>
    		<div class="col-md-3 grid_4">
    		   <h3>Working Hours</h3>
    			 <table class="table_working_hours">
		        	<tbody>
		        		<tr class="opened_1">
							<td class="day_label">monday</td>
							<td class="day_value">9:30 am - 6.00 pm</td>
						</tr>
					    <tr class="opened">
							<td class="day_label">tuesday</td>
							<td class="day_value">9:30 am - 6.00 pm</td>
						</tr>
					    <tr class="opened">
							<td class="day_label">wednesday</td>
							<td class="day_value">9:30 am - 6.00 pm</td>
						</tr>
					    <tr class="opened">
							<td class="day_label">thursday</td>
							<td class="day_value">9:30 am - 6.00 pm</td>
						</tr>
					    <tr class="opened">
							<td class="day_label">friday</td>
							<td class="day_value">9:30 am - 3.00 pm</td>
						</tr>
					    <tr class="closed">
							<td class="day_label">saturday</td>
							<td class="day_value closed"><span>Closed</span></td>
						</tr>
					    <tr class="closed">
							<td class="day_label">sunday</td>
							<td class="day_value closed"><span>Closed</span></td>
						</tr>
				    </tbody>
				</table>
            </div>
    		<div class="clearfix"> </div>
    		<div class="copy">
		       <p>Copyright © 2015 Learn . All Rights Reserved  | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
	        </div>
    	</div>
    </div>
</body>
</html>	

<?php
extract($_POST);
$user=$_SESSION['user'];

 if(isset($_POST['go']))
 {	 
		extract($_POST);
		
		$qry1=mysql_query("insert into question (user,ART,HIN,GEO,ELE,ACC,BAN,PTG1,POC,SPB,PYY,SPM,CHE,MTT,FTW,
		ISE,AOD,HIS,ZLG,WDG,TDG,GPY,BTY,EDG,ACT,ECO,MET,DAB,SUR,PHY,SOH,APY,EGL,GSC,SOA,PHS1,AMS,VTS,CEG,MEG,MAT,SOM,PHS2,HSC,GTY,MTS,ETR,MIT,RTE,CPM) 
		
		values ('$user','$ART','$HIN','$GEO','$ELE','$ACC','$BAN','$PTG1','$POC','$SPB','$PYY','$SPM','$CHE','$MTT','$FTW',
		'$ISE','$AOD','$HIS','$ZLG','$WDG','$TDG','$GPY','$BTY','$EDG','$ACT','$ECO','$MET','$DAB','$SUR','$PHY','$SOH','$APY','$EGL','$GSC','$SOA','$PHS1','$AMS','$VTS','$CEG','$MEG','$MAT',
		'$SOM','$PHS2','$HSC','$GTY','$MTS','$ETR','$MIT','$RTE','$CPM' )");
		
		$MI = $ELE + $FTW + $WDG + $EDG + $AMS + $CEG + $MEG + $SOM + $GTY + $MTS + $ETR + $MIT + $RTE + $CPM;
		
		$BI = $GEO + $CHE + $ZLG + $BTY + $MET + $DAB + $SUR + $SOH + $ARY + $GSC + $SOA + $PHS1 + $VTS + $PHS2;
		
		$CI = 2*($ACC + $BAN + $POC + $SPB + $SPM + $MTT + $ISE);
		
		$HI = $ART + $HIN + $PTG1 + $PYY + $AOD + $HIS + $TDG + $GPY + $ACT + $ECO + $PHY + $EGL + $MAT + $HSC;
		
		$qry2=mysql_query("insert into score (user, MI, BI, CI, HI) values ('$user','$MI','$BI','$CI','HI')");
	
	 if($qry1 && $qry2)
	 {
		 header("location:personality.php");
	 }	
 }
 ob_end_flush();
?>