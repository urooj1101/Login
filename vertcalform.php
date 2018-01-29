<!DOCTYPE html> 
<html lang="en">  
<head>    
	<title>My first Bootstrap page </title>    
	<meta name="viewport" content="width=device-width, initialscale=1">      
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">    
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> 
 </head> 
 <body>
	 <h2 align="center">Login Form </h2>
	 <div class="container" style="max-width:600px;margin:60px auto;">
		<form id="myform" data-toggle="validator" role="form">
		   <div class="form-group">
		      <label for="name">Name</label>
		      <input type="name" class="form-control" id="name" placeholder="Enter name">
		   </div>
		   <div class="form-group">
	         	<input type="radio" id="male" name="gender" value="male"> Male
	         	<input type="radio" id="female" name="gender" value="female"> Female
	        </div>

		   <div class="form-group">
		      <label for="email">Email</label>
		      <input type="email" class="form-control" id="email" placeholder="Enter email">
		   </div>
		  <div class="form-group">
	    		<label for="inputPassword" class="control-label">Password</label>
	      			<div class="form-group">
	        			<input type="password" data-minlength="6" class="form-control" id="inputPassword" placeholder="Password" required>
	        		<div class="help-block">Minimum of 6 characters</div>
	      			</div>
	      			<div class="form-group">
	        			<input type="password" class="form-control" id="inputPasswordConfirm" data-match="#inputPassword" data-match-error="Whoops, these don't match" placeholder="Confirm" required>
	      			</div>
	  		</div>
		     <button id="submit" type="submit" onclick="$(myfunction)" class="btn btn-info">Login</button>
		</form>
	</div>

	<script> 

	/*$('#submit').on('click', function(){ 

	// Case 2:
	  /* var value = $("#name").val(); 
	    if ($("#male").is(":checked")) {
	        alert("Hi Mr. " + value);
	    }else{
	        alert("Hi Miss. " + value);
	    }*/
	//case 1: 
	/*
	 	var value = $("#name").val(); 
		alert('Hi ' + value);*/
		
//	})
   *

	(function $(myfunction){
		var value = $("#name").val(); 
		if (value==""){
			alert("Hi " + value);
		}
  		//some code
    });       
    </script>

</body>
</html>