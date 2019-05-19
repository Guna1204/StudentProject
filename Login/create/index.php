<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Courses - Sahara Open University</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-responsive.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/sl-slide.css">
    <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    <link rel="shortcut icon" href="images/favicon.png">
	
	<style>
.header {
  background-color: tomato;
  color: white;
  padding: 10px;
} 

.main {
  text-align: center;
}
</style>
</head>

<body>
    <!--Header-->
    <header class="navbar navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container">
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <a id="logo" class="pull-left" href="index.html"></a>
                <div class="nav-collapse collapse pull-right">
                    <ul class="nav">
                        <!--<li><a href="index.html">Home</a></li>
						
						<li><a href="#">About Us</a></li>
                         <li><a href="courses.html">Courses</a></li> 
                         <li><a href="examinations.html">Examinations</a></li> 
						 <li><a href="#">Verifications</a></li>-->
						
                        <!-- <li><a href="about-us.html">About Us</a></li> -->
                        <!-- <li class="active"><a href="services.html">Services</a></li> -->
                        <!-- <li><a href="portfolio.html">Portfolio</a></li> -->
                        <!-- <li class="dropdown"> -->
                            <!-- <a href="#" class="dropdown-toggle" data-toggle="dropdown">Additional <i class="icon-angle-down"></i></a> -->
                            <!-- <ul class="dropdown-menu"> -->
                                <!-- <li><a href="404.html">Error 404</a></li> -->
                                <!-- <li><a href="privacy.html">Privacy Policy</a></li> -->
                            <!-- </ul> -->
                        <!-- </li> -->
                        <!--<li><a href="contact-us.html">Contact</a></li>-->
                    </ul>        
                </div>
            </div>
        </div>
    </header>
    <!-- /header -->

    <section class="title">
        <div class="container">
            <div class="row-fluid">
                <div class="span6">
                    <h1>Student List</h1>
                </div>
                <div class="span6">
                    <ul class="breadcrumb pull-right">
                       <!-- <li><a href="index.html">Home</a> <span class="divider">/</span></li>
                        <li class="active">Verification</li> -->
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- / .title -->       

    <section class="services">
        <div class="container">
            <div class="row-fluid">
                <!-- <div class="span4"> -->
                    <!-- <div class="center"> -->
                        <!-- <i style="font-size: 48px" class="icon-facetime-video icon-large"></i> -->
                        <!-- <p> </p> -->
                        <!-- <h4>Nunc Ante Magna</h4> -->
                        <!-- <p>Duis non tincidunt ex. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec sit amet dui turpis. Sed luctus, leo ac ornare vulputate, metus neque feugiat massa, a porttitor est sem at metus. Nunc ante magna, aliquet vel tincidunt ut, feugiat id lorem.</p> -->
                    <!-- </div> -->
                <!-- </div> -->
				<div >
					<div style="margin:0 auto;min-height:350px;border:0px solid #ccc;">
		<form action="" method="post" id="get-user">
			<div class="row-fluid">
                    <div > 
						<!--<label for="id"><h4>Please Enter Student Reg No </h4></label>
						<input type="text" name="id" id="id" required/>
						<input type="submit" name="search" id="search" value="Search" class="btn btn-primary btn-large "/> -->
						
						<a href="create.php" style="float:right;"><h4>Add New</h4></a>
					</div>
		</form>
		
		<br />
		<br/>
		<div class="result" style="font-family:sand serif; font-size:22px;">

			<table border=1 align="center">
				<tr class="header">
					<th style="width:80px"> S.No </th>
					<th style="width:200px"> Student Name</th>
					<th style="width:200px"> Reg No</th>					
					<th style="width:200px">Course of Study</th>
					<th style="width:150px">Date of Birth</th>
					<th style="width:150px">Year of Study</th>
					<th style="width:150px">Status</th>	
					<th style="width:150px">Action </th>
				</tr>
				
				<tbody id ="data">
				
				
				</tbody>
				
			<table>
	</div>	
				
				<p class="no-result"><p>
	</div>				
	</div>
			
	<script type="text/javascript" src="js/jquery-3.4.0.min.js"></script>
	<script>
		$(document).ready(function(){
			$('.result').hide();
			$(window).load(function(e) {
				$('.result').hide();
				$('.no-result').hide();
			e.preventDefault();
			var form = $(this);
			var url = form.attr('action');
			$.ajax({
				   type: "POST",
				   url: "getallstudent.php",
				   data: form.serialize(), // serializes the form's elements.
				   success: function(res)
				   {
					   if(res != 0) {
						   var data = jQuery.parseJSON(res);
						   $('.result').show();
						   
						   var html ="";
						   
						   for (var i=0; i<data.length; i++)
						   {
								var stuinfo = data[i];
								var row_id = stuinfo[0];
								var stuname = stuinfo[2];
								var regno = stuinfo[1];
								var coursename = stuinfo[3];
								var dob = stuinfo[4];
								var yearstudy = stuinfo[5];
								var status = stuinfo[6];
													
								html += "<tr>";
								html +="<td>" + stuinfo[0] + "</td>" ;
								html +="<td>" + stuname + "</td>" ;
								html +="<td>" + regno + "</td>" ;
								html +="<td>" + coursename + "</td>" ;
								html +="<td>" + dob + "</td>" ;
								html +="<td>" + yearstudy + "</td>" ;
								html +="<td>" + status + "</td>" ;
								
								
								html +="<td><span > <a href=\"update.php?id=1\" alt=\"Edit\"   row_id="+row_id+" > Edit</a> </span> &nbsp; &nbsp; <span > <a href=\"delete.php\"   row_id="+row_id+" > Delete</a> </span> </td>" ;
								
								
								
								html += "</tr>";
						   }
						   
						   document.getElementById("data").innerHTML =html; 
						   
					   }
					   else {
						   $('.no-result').show();
						   $('.no-result').html('Oops No Data....');
					   }
					   
				   }
				});
			});
		});
	</script>

        </div>
    </section>

    
    <script src="js/vendor/jquery-1.9.1.min.js"></script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
