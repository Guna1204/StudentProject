<html>
<head>
<title>Get User List</title>
</head>
<body>
	<div style="margin:0 auto;min-height:350px;border:1px solid #ccc;">
		<form action="" method="post" id="get-user">
			<label for="id">Search</label>
			<input type="text" name="id" id="id" required/>
			<input type="submit" name="search" id="search" value="Search"/>
		</form>
		<div class="result">

			<table border=1>
			<tr>
				<th>Name of Student</th>
				<th>Reg No</th>	
				<th>Course of Study</th>
				<th>Date of Birth</th>	
				<th>Year of Study</th>
				<th>Status</th>				
			</tr>
			
			<tr>
				<td id="stuname"></td>
				<td id="regno"></td>
				<td id="coursename"></td>
				<td id="dob"></td>
				<td id="yearstudy"></td>
				<td id="status"></td>
			</tr>
				
			
			</table>
		
			
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
</body>
</html>