<!DOCTYPE html> 
<html lang="en">  
<head>    
	<title>Login page </title>    
	<meta name="viewport" content="width=device-width, initialscale=1">      
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">    
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> 
 </head> 
 <body>
	 <h2 align="center">Login Form </h2>
	 <div class="container" style="max-width:600px;margin:60px auto;">
		<form id="myform" action="server.php" data-toggle="validator" role="form" method="GET">
		   <div class="form-group">
		      <label for="name">Name</label>
		      <input type="name" class="form-control" id="name" name="uname" placeholder="Enter name">
		   </div>
		   <div class="form-group">
	         	<input type="radio" id="male" name="gender" value="male"> Male
	         	<input type="radio" id="female" name="gender" value="female"> Female
	        </div>

		   <div class="form-group">
		      <label for="email">Email</label>
		      <input type="email" class="form-control" id="email" name="uemail" placeholder="Enter email">
		   </div>
		  <div class="form-group">
	    		<label for="inputPassword" class="control-label">Password</label>
	      			<div class="form-group">
	        			<input type="password" data-minlength="6" class="form-control" id="inputPassword" placeholder="Password" required>
	      			</div>
	      			<div class="form-group">
	        			<input type="password" class="form-control" id="inputPasswordConfirm" data-match="#inputPassword" data-match-error="Whoops, these don't match" placeholder="Confirm" required>
	      			</div>
	  		</div>
		     <button id="submit" type="submit" class="btn btn-info">Login</button>
		</form>
	</div>

	<script> 

	//Case 3:
	 	$('#submit').on('click', function(){
	        checkformValidation();
	    });

 	    function checkformValidation() {
	        var value = $("#name").val(); 
	        var sEmail = $('#email').val();
	        var inputPassword = $('#inputPassword').val();
	        var inputPasswordConfirm = $('#inputPasswordConfirm').val();
	        var m="";
			var filter = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;

			if (value=="" || sEmail==""){        
	        	alert("Please Fill Details...");
	        }
	        else{
				if ($("#male").is(":checked")) {
				    m=m+"Hi Mr " + value + "!! ";
				}else{
				    if ($("#female").is(":checked")) {
				    	m=m+"Hi Miss " + value + "!! ";
				    }else{
				    	m=m+"Please Select gender and ";
				    }
				}
			
			    if (filter.test(sEmail)) {
			    	if (inputPassword=="" || inputPasswordConfirm==""){
			    		alert(m+' Your Email is valid but Please enter Password');
			    	}else{
				    	if (inputPassword!=inputPasswordConfirm){
				   		alert(m+' Your Email is valid but Password not matched');
				   		}else{
							alert(m+'Your Email is valid and Password also matched');
				   		}
			   		}	        
			    }
			    else {
			    	if (inputPassword=="" || inputPasswordConfirm==""){
			    		alert(m+'  Please enter Password and a valid email');
			    	}else{
				    	if (inputPassword!=inputPasswordConfirm){
				   		alert(m+' Please enter valid Email Address and Please check your Password');
				   		} else{
				   			alert(m+'Password matched but Please fill valid Email Address');
				   		}
			   		}
			    }
			   	
			}
	    }

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
	//})


	 /*

	        if (value==""){        
	        	alert("Please enter your name.");

	        	return;
	        }

	       
	        if (sEmail==""){        
	        	alert("Please enter your email.");

	        	return;
	        }

*/
   
    </script>

</body>
</html>