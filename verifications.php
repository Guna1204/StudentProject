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
                        <li><a href="index.html">Home</a></li>
						
						<li><a href="#">About Us</a></li>
                         <li><a href="courses.html">Courses</a></li> 
                         <li><a href="examinations.html">Examinations</a></li> 
						 <li><a href="#">Verifications</a></li>
						
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
                        <li><a href="contact-us.html">Contact</a></li>
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
                    <h1>Verification</h1>
                </div>
                <div class="span6">
                    <ul class="breadcrumb pull-right">
                        <li><a href="index.html">Home</a> <span class="divider">/</span></li>
                        <li class="active">Verification</li>
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
                        <div > <label for="id"><h4>Please Enter Student Reg No </h4></label>
			<input type="text" name="id" id="id" required/>
			<input type="submit" name="search" id="search" value="Search" class="btn btn-primary btn-large "/> </div>
		</form>
		
		<br />
		<br/>
		<div class="result" style="font-family:sand serif; font-size:22px;">

			<table border=1 align="center" >
			
			<tr>
			<td colspan="2" align="center"> <b>Student Information</b> </td>
			
			</tr>
			
			<tr >
				<td width="300px">Name of Student</td>
				<td width="400px" id="stuname"></td>
			</tr>
			
			<tr>
				<td>Reg No</td>	
				<td id="regno"></td>			
			</tr>
			
			<tr>
				<td>Course of Study</td>
				<td id="coursename"></td>		
			</tr>
			
			<tr>
				<td>Date of Birth</td>	
				<td id="dob"></td>	
			</tr>
			
			<tr>
				<td>Year of Study</td>
				<td id="yearstudy"></td>
			</tr>
			
			<tr >
				<td>Status</td>		
				<td id="status"></td>
			</tr>
			
			</table>
		
		<br>
			<p style="font-size:20px" >For Detail Report Mail to : saharaopenuniversity@gmail.com</p>
			
		</div>
		<p class="no-result"><p>
	</div>
	<script type="text/javascript" src="js/jquery-3.4.0.min.js"></script>
	<script>
		$(document).ready(function(){
			$('.result').hide();
			$("#get-user").submit(function(e) {
				$('.result').hide();
				$('.no-result').hide();
			e.preventDefault();
			var form = $(this);
			var url = form.attr('action');
			$.ajax({
				   type: "POST",
				   url: "get.php",
				   data: form.serialize(), // serializes the form's elements.
				   success: function(res)
				   {
					   if(res != 0) {
						   var data = jQuery.parseJSON(res);
						   $('.result').show();
						   $('#stuname').html(data.studentname);
						   $('#regno').html(data.regno);
						   $('#coursename').html(data.coursename);
						   $('#dob').html(data.dob);
						   $('#yearstudy').html(data.yearstudy);
						   $('#status').html(data.status);
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
				<hr>

				
                <!-- <div class="span4"> -->
                    <!-- <div class="center"> -->
                        <!-- <i style="font-size: 48px" class="icon-food icon-large"></i> -->
                        <!-- <p> </p> -->
                        <!-- <h4>Duis Rhoncus Felis Dui</h4> -->
                        <!-- <p>Praesent viverra vulputate augue, hendrerit volutpat nisi tempus id. Duis vitae laoreet lacus. Vivamus semper nisi sem, accumsan tristique felis facilisis non. Vivamus egestas lacus sed bibendum aliquam. Vivamus imperdiet risus eget lacinia rhoncus. Duis rhoncus felis dui. Interdum et malesuada fames.</p> -->
                    <!-- </div> -->
                <!-- </div> -->
                <!-- <div class="span4"> -->
                    <!-- <div class="center"> -->
                        <!-- <i style="font-size: 48px" class="icon-gamepad icon-large"></i> -->
                        <!-- <p> </p> -->
                        <!-- <h4>Nunc Varius Nisi</h4> -->
                        <!-- <p>Cras ac felis vehicula, mattis diam eu, placerat ex. Donec mauris ante, feugiat in massa et, rhoncus iaculis tellus. Nunc varius nisi et risus blandit placerat. Cras ac aliquet elit, vitae faucibus mi. Donec pharetra nulla eget luctus tristique. In hac habitasse platea dictumst. Donec posuere diam turpis.</p> -->
                    <!-- </div> -->
                <!-- </div> -->
            </div>
            <hr>
            <!-- <div class="row-fluid"> -->
                <!-- <div class="span4"> -->
                    <!-- <div class="center"> -->
                        <!-- <i style="font-size: 48px" class="icon-magic icon-large"></i> -->
                        <!-- <p> </p> -->
                        <!-- <h4>Vestibulum Ultrices</h4> -->
                        <!-- <p>Nulla in metus vitae neque venenatis pharetra nec eu velit. Proin elit nulla, iaculis a tortor at, gravida ultricies orci. Vestibulum ultrices nunc eget scelerisque tincidunt. Integer pulvinar iaculis est eget dapibus, at dignissim ipsum fermentum. Mauris eu iaculis lacus. Etiam nec congue lectus. </p> -->
                    <!-- </div> -->
                <!-- </div> -->
                <!-- <div class="span4"> -->
                    <!-- <div class="center"> -->
                        <!-- <i style="font-size: 48px" class="icon-puzzle-piece icon-large"></i> -->
                        <!-- <p> </p> -->
                        <!-- <h4>Suspendisse Semper</h4> -->
                        <!-- <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Integer ultrices sem eu iaculis commodo. Suspendisse semper porta magna at faucibus. Donec aliquam, nisi ac faucibus laoreet.</p> -->
                    <!-- </div> -->
                <!-- </div> -->
                <!-- <div class="span4"> -->
                    <!-- <div class="center"> -->
                        <!-- <i style="font-size: 48px" class="icon-shopping-cart icon-large"></i> -->
                        <!-- <p> </p> -->
                        <!-- <h4>Mauris Arcu Tellus</h4> -->
                        <!-- <p>Donec nec massa ornare, volutpat diam eu, eleifend lorem. Cras laoreet nulla elit, quis bibendum lectus lacinia sit amet. Praesent nec quam nunc. Mauris arcu tellus, aliquet non rhoncus non, ornare id dui. Sed ac porta ante, id aliquam lectus. Proin malesuada eu arcu at tempor. Nulla a tellus lorem.</p> -->
                    <!-- </div> -->
                <!-- </div> -->
            <!-- </div> -->
            <hr>
            <!-- <div class="center"> -->
                <!-- <a class="btn btn-primary btn-large" href="#">Aenean quis mauris efficitur justo gravida accumsan vitae sed neque</a> -->
            <!-- </div> -->
            <p>&nbsp;</p>
        </div>
    </section>

    <!--Bottom-->
    <section id="bottom" class="main">
        <!--Container-->
        <div class="container">
            <!--row-fluids-->
            <div class="row-fluid">
                <!--Contact Info-->
                <div class="span3">
                    <h4>CONTACT US</h4>
                     <ul class="unstyled address">
                        <li>
                            <i class="icon-home"></i><strong>Address:</strong>Administrative officer<br>Sahara Open University<br>Puducherry<br>India
                        </li>
                        <li>
                            <i class="icon-envelope"></i>
                            <strong>Email: </strong> <a href="mailto:company@domain.com">info@saharaopenuniversity.in</a>
                        </li>
                        <li>
                            <i class="icon-globe"></i>
                            <strong>Website:</strong> <a href="http://www.saharaopenuniversity.in">www.saharaopenuniversity.in</a>
                        </li>
                        <li>
                            <i class="icon-phone"></i>
                            <strong>Telephone:</strong> 0413 - 2200379
                        </li>
                    </ul>
                </div>
                <!--End Contact Info-->
                <!--Important Links-->
                <div id="tweets" class="span3">
                   <h4>Sahara Open University</h4>
                    <div>
                        <ul class="arrow">
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Courses</a></li>
                            <li><a href="#">Examinations</a></li>
                            <li><a href="#">Verifications</a></li>                            
                            <li><a href="#">Contact Us</a></li>
                        </ul>
                    </div>    
                </div>
                <!--Important Links-->
                <div id="archives" class="span2">
                    <!-- <h4>ARCHIVES</h4> -->
                    <!-- <div> -->
                        <!-- <ul class="arrow"> -->
                            <!-- <li><a href="#">Link No. 1</a></li> -->
                            <!-- <li><a href="#">Link No. 2</a></li> -->
                            <!-- <li><a href="#">Link No. 3</a></li> -->
                            <!-- <li><a href="#">Link No. 4</a></li> -->
                            <!-- <li><a href="#">Link No. 5</a></li> -->
                            <!-- <li><a href="#">Link No. 6</a></li> -->
                        <!-- </ul> -->
                    <!-- </div> -->
                </div>
                <!--End Links-->
                <!-- <div class="span4"> -->
                    <!-- <h4>FACEBOOK</h4> -->
                    <!-- <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Ffacebook&tabs=timeline&width=340&height=130&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=false&appId" width="340" height="130" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe> -->
                <!-- </div> -->
            </div>
            <!--/row-fluid-->
        </div>
        <!--/container-->
    </section>
    <!--/bottom-->

    <!--Footer-->
    <footer id="footer">
        <div class="container">
            <div class="row-fluid">
                <div class="span5 cp">
                    &copy; 2019 <a target="_blank" href="http://www.saharaopenuniversity.in/">Sahara Univeristy</a>. All Rights Reserved.
                </div>
                <div class="span6">
                    <ul class="social pull-right">
                        <li><a href="#"><i class="icon-facebook"></i></a></li>
                        <li><a href="#"><i class="icon-twitter"></i></a></li>
                        <li><a href="#"><i class="icon-pinterest"></i></a></li>
                        <li><a href="#"><i class="icon-linkedin"></i></a></li>
                        <li><a href="#"><i class="icon-google-plus"></i></a></li>                       
                        <li><a href="#"><i class="icon-youtube"></i></a></li>
                        <li><a href="#"><i class="icon-instagram"></i></a></li>                   
                    </ul>
                </div>
                <div class="span1">
                    <a id="gototop" class="gototop pull-right" href="#"><i class="icon-angle-up"></i></a>
                </div>
            </div>
        </div>
    </footer>
    <!--/Footer-->

    <script src="js/vendor/jquery-1.9.1.min.js"></script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
