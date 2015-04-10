<!DOCTYPE html>
<html>
  <head>
    <title>Sign-Up</title>
    <style>
	#Sign-Up 
	{
    	margin-top: 10%;
		margin-left: 30%;
        width: 40%;
    }
    input[type=password] {
        width: 100%;
    }
    input[type=text] {
        width: 100%;
    }
	</style>
  </head>
  
     <body id="body-color"> 
     <div id="Sign-Up">
     	<fieldset>
        <legend>Registration Form</legend> 
        <table border="0" style="width: 100%">
          <tr>
              <td colspan="2">
                  <?php
                    if($message != '')
                    {
                        echo $message;
                    }
                  ?>
              </td>
          </tr>
        <tr> 
        	<form method="POST" action="">
        	<td>Name</td>
        	<td> <input type="text" size="28" name="name"></td> 
        </tr> 
        <tr> 
        	<td>Email</td>
            <td> <input type="text"size="28" name="email"></td> 
        </tr> 
        <tr> 
        	<td>Password</td>
            <td> <input type="password" size="28" name="pass"></td> 
        </tr> 
        <tr> 
        	<td>Confirm Password </td>
        	<td><input type="password" size="28" name="cpass"></td> 
        </tr>
         <tr>
            <td><a style="text-decoration:none;" href="index.php">For Login click here </a></td>
         	<td><input style="float: right" id="button" type="submit" name="action" value="signup"></td>
         </tr> </form> 
         </table> </fieldset> 
      </div> 
      </body> 
</html>