<?php 
  session_start();
?>
<html>
  <head>
    <title> Login Page </title>
  </head>
  
  <body>
  
    <form method="post" action="login.php">
     <table align="center" border="2" bgcolor="grey">
	    
		<tr>
		    <th> Admin Login </th>
	    </tr>
		
        <tr> 
		   <td>User name</td>
		   <td><input type="text" name="user"></input></td>
		</tr>
     
	    <tr> 
		   <td>Password</td>
		   <td><input type="text" name="pass"></input></td>
		</tr>
		
		<tr>
		   <td><input type="submit" name="login" value="Login"></input></td>
		</tr>
     </table>
	 </form>
  
     <?php 
	 include("db.php");
	 
	    if(isset($_POST['login'])){
		  $user = mysqli_real_escape_string($con,$_POST['user']);
          $pass = mysqli_real_escape_string($con,$_POST['pass']);
		  
		  $encrpt = md5($pass);

          $query = mysqli_query($con," select * from admin where admin_user='$user' AND admin_pass='$pass' ");
		
        if(mysqli_num_rows($query) > 0){
			$_SESSION['user'] = $user;
			header("location:index_admin.php");
		}else{
			echo "invalid";
	    }
	    }
	 ?>
  
  
  <body>
</html>