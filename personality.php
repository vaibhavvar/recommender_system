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
	   	  <h1>Personality Index</h1>
	   	  <p>Here are some questions regarding the way you feel and act. Yes or No represent your usual way of acting or feeling. Don't know - If you find it absolutely impossible to decide.</p>
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
						<td>Are you happiest when you get involved in some project that calls for rapid action?</td>
						<div class="radios" style="position: absolute">
						   <td><label for="radio-01" class="label_radio">
								<input type="radio" name="q1" value="2" required>
							</label></td>
							<td><label for="radio-02" class="label_radio">
								<input type="radio" name="q1"value="0">
							</label></td>
							<td><label for="radio-03" class="label_radio">
								<input type="radio" name="q1" value="1" checked> 
							</label></td>
						</div>
					</tr>
					
					<tr>
						<td>Do you sometimes feel happy, sometimes depressed without any apparent reason?</td>
						<div class="radios" style="position: absolute">
						   <td><label for="radio-01" class="label_radio">
								<input type="radio" name="q2" value="2" required>
							</label></td>
							<td><label for="radio-02" class="label_radio">
								<input type="radio" name="q2" value="0">
							</label></td>
							<td><label for="radio-03" class="label_radio">
								<input type="radio" name="q2" value="1" checked> 
							</label></td>
						</div>
					</tr>
					
					<tr>
						<td>Does your mind often wander while you are trying to concentrate on some topic?</td>
						<div class="radios" style="position: absolute">
						   <td><label for="radio-01" class="label_radio">
								<input type="radio" name="q3" value="2" required>
							</label></td>
							<td><label for="radio-02" class="label_radio">
								<input type="radio" name="q3" value="0">
							</label></td>
							<td><label for="radio-03" class="label_radio">
								<input type="radio" name="q3" value="1" checked> 
							</label></td>
						</div>
					</tr>
					
					<tr>
						<td>Do you usually take the initiative in making new friends?</td>
						<div class="radios" style="position: absolute">
						   <td><label for="radio-01" class="label_radio">
								<input type="radio" name="q4" value="2" required>
							</label></td>
							<td><label for="radio-02" class="label_radio">
								<input type="radio" name="q4" value="0">
							</label></td>
							<td><label for="radio-03" class="label_radio">
								<input type="radio" name="q4" value="1" checked> 
							</label></td>
						</div>
					</tr>
					
					<tr>
						<td>Are you quick and sure in your actions?</td>
						<div class="radios" style="position: absolute">
						   <td><label for="radio-01" class="label_radio">
								<input type="radio" name="q5" value="2" required>
							</label></td>
							<td><label for="radio-02" class="label_radio">
								<input type="radio" name="q5" value="0">
							</label></td>
							<td><label for="radio-03" class="label_radio">
								<input type="radio" name="q5" value="1" checked> 
							</label></td>
						</div>
					</tr>
					
					<tr>
						<td>Are you frequently lost in thoughts even when you are conversion?</td>
						<div class="radios" style="position: absolute">
						   <td><label for="radio-01" class="label_radio">
								<input type="radio" name="q6" value="2" required>
							</label></td>
							<td><label for="radio-02" class="label_radio">
								<input type="radio" name="q6" value="0">
							</label></td>
							<td><label for="radio-03" class="label_radio">
								<input type="radio" name="q6" value="1" checked> 
							</label></td>
						</div>
					</tr>
					
					<tr>
						<td>Are you sometimes bubbling over with energy and sometimes very sluggish?</td>
						<div class="radios" style="position: absolute">
						   <td><label for="radio-01" class="label_radio">
								<input type="radio" name="q7" value="2" required>
							</label></td>
							<td><label for="radio-02" class="label_radio">
								<input type="radio" name="q7" value="0">
							</label></td>
							<td><label for="radio-03" class="label_radio">
								<input type="radio" name="q7" value="1" checked> 
							</label></td>
						</div>
					</tr>
					
					<tr>
						<td>Would you rate yourself as a lively individual?</td>
						<div class="radios" style="position: absolute">
						   <td><label for="radio-01" class="label_radio">
								<input type="radio" name="q8" value="2" required>
							</label></td>
							<td><label for="radio-02" class="label_radio">
								<input type="radio" name="q8" value="0">
							</label></td>
							<td><label for="radio-03" class="label_radio">
								<input type="radio" name="q8" value="1" checked> 
							</label></td>
						</div>
					</tr>
					
					<tr>
						<td>Would you be unhappy if you were prevented from making social contacts?</td>
						<div class="radios" style="position: absolute">
						   <td><label for="radio-01" class="label_radio">
								<input type="radio" name="q9" value="2" required>
							</label></td>
							<td><label for="radio-02" class="label_radio">
								<input type="radio" name="q9" value="0">
							</label></td>
							<td><label for="radio-03" class="label_radio">
								<input type="radio" name="q9" value="1" checked> 
							</label></td>
						</div>
					</tr>
					
					<tr>
						<td>Do you have frequent ups and downs in your mood?</td>
						<div class="radios" style="position: absolute">
						   <td><label for="radio-01" class="label_radio">
								<input type="radio" name="q10" value="2" required>
							</label></td>
							<td><label for="radio-02" class="label_radio">
								<input type="radio" name="q10" value="0">
							</label></td>
							<td><label for="radio-03" class="label_radio">
								<input type="radio" name="q10" value="1" checked> 
							</label></td>
						</div>
					</tr>
					
					<tr>
						<td>Does your behaviour keeps on changing without any apparent cause?</td>
						<div class="radios" style="position: absolute">
						   <td><label for="radio-01" class="label_radio">
								<input type="radio" name="q11" value="2" required>
							</label></td>
							<td><label for="radio-02" class="label_radio">
								<input type="radio" name="q11" value="0">
							</label></td>
							<td><label for="radio-03" class="label_radio">
								<input type="radio" name="q11" value="1" checked> 
							</label></td>
						</div>
					</tr>
					
					<tr>
						<td>Do you prefer action to planning for action?</td>
						<div class="radios" style="position: absolute">
						   <td><label for="radio-01" class="label_radio">
								<input type="radio" name="q12" value="2" required>
							</label></td>
							<td><label for="radio-02" class="label_radio">
								<input type="radio" name="q12" value="0">
							</label></td>
							<td><label for="radio-03" class="label_radio">
								<input type="radio" name="q12" value="1" checked> 
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
		
		$qry1 = mysql_query("insert into personality (user,q1,q2,q3,q4,q5,q6,q7,q8,q9,q10,q11,q12) 
		values ('$user','$q1','$q2','$q3','$q4','$q5','$q6','$q7','$q8','$q9','$q10','$q11','$q12' )");
		
		$Neuro = ($q1 + $q2 + $q3 + $q4 + $q5 + $q6 + $q7 + $q8 + $q9 + $q10 + $q11 + $q12) + 27;
		
		$Extra = 2*($q1 + $q2 + $q3 + $q4 + $q5 + $q6 + $q7 + $q8 + $q9 + $q10 + $q11 + $q12) + 4;
		
		$qry2 = mysql_query("update score set Neuro='$Neuro',Extra='$Extra' where user ='$user'");
		
		$arg=$user;
		$command = 'C:\Program Files\R\R-3.3.1\bin\Rscript.exe C:\xampp\htdocs\recommend3\r_script.r' ;
		$pCom = new COM('WScript.Shell');
		$pShell = $pCom->Exec($command." ".$arg);
		$sStdOut = $pShell->StdOut->ReadAll;    # Standard output
		$sStdErr = $pShell->StdErr->ReadAll;    # Error
		//echo "<pre>$sStdOut</pre>";
	
	 if($qry1 && $qry2)
	 {
		 
		 header("location:result.php");
	 }	
 }
 ob_end_flush();
?>