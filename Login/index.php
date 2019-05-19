<html>
	<head>
	<link rel="stylesheet" href="css/main.css">
	</head>
	
<body>
<div class="login">
  <div class="heading">
    <h2>Sign in</h2>
    <form action="#" method="post" id="get-login">

      <div class="input-group input-group-lg">
        <span class="input-group-addon"><i class="fa fa-user"></i></span>
        <input type="text" name="username" id="username" required class="form-control" placeholder="Username">
          </div>

        <div class="input-group input-group-lg">
          <span class="input-group-addon"><i class="fa fa-lock"></i></span>
          <input type="password" name="password" id="password" required class="form-control" placeholder="Password">
        </div>

        <button type="submit" name="search" id="search" class="float">Login</button>
       </form>
	   
	   <p class="no-result"><p>
 		</div>
 </div>
 
 
 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
 <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script>

<script>
    $(document).ready(function() {
        function disableBack() { window.history.forward() }

        window.onload = disableBack();
        window.onpageshow = function(evt) { if (evt.persisted) disableBack() }
    });
</script>
 
 
 <script type="text/javascript" src="js/jquery-3.4.0.min.js"></script>
	<script>
		$(document).ready(function(){
			$('.result').hide();
			$("#get-login").submit(function(e) {
				$('.result').hide();
				$('.no-result').hide();
			e.preventDefault();
			var form = $(this);
			var url = form.attr('action');
			$.ajax({
				   type: "POST",
				   url: "get_login.php",
				   data: form.serialize(), // serializes the form's elements.
				   success: function(res)
				   {
					   if(res != 0) {
						   $('.result').show();
						   $('.result').html('Login Successfull');
							window.location = "create/index.php";
					   }
					   else {
						   $('.no-result').show();
						   $('.no-result').html('Incorrect Login Details');
					   }
					   
				   }
				});
			});
		});
	</script>
 
 </body>
 </html>