<html>
<head>
 <title> Malala yousatzai News </title>
 <link href="costom.css" rel="stylesheet">
 <link href="css/bootstrap.css" rel="stylesheet">
</head>

<body>
<?php include("db.php"); ?>
<div id="top">
   <p  style="float:right; margin:1% 3%; font-size:180%; background:red; padding:.5%;" id="clockdisplay"></p>
   <p  style="float:left; margin:1% 3%; font-size:180%; " id="datedisplay"></p>
</div>
 
<!--this is the part foe ads and logos-->
<div><?php include("H.php"); ?></div>

<!--this is the part for menus-->
<div><?php include("M.php"); ?></div>

<!--this is for post body-->
<div id="post_body">

  <form action="contact.php" method="post" border="2">
    <table  id="contact" align="center" style="padding:5%">
        <tr>
		  <th align="center">Contact us<th>
		</tr>
		
		<tr align="center">
		  <td>Your Email</td>
		  <td><input type="email" name="email" /></td>
		</tr>
		
		<tr align="center">
		  <td>Subject</td>
		  <td><input type="text" name="subject" /></td>
		</tr>
		
		<tr align="center">
		  <td>Your Message</td>
		  <td><textarea  name="area"></textarea></td>
		</tr>
		
		<tr align="center">
		  <td><center><input type="submit" name="submit" value="submit"></center></td>
		</tr>
    </table>
  </form>
   <?php
  if(isset($_POST['submit'])){
	  
	  $sender = $_POST['email'];
	  $subject  = $_POST['subject'];
	  $message = $_POST['area'];
	  $to ='abhishekabhiabhi0@gmail.com';
	  
	 if($sender == '' or $subject == '' or $message == ''){
		  echo "<script>alert('enter the data field')</script>";
		  exit();
	  }
	  
	 mail($to,$subject,$message,$sender);
	  
	  $reciver = $_POST['email'];
	  $sub = "techtec.in<br/>";
	  $mes = "thanks for contacting us <br/>";
	  $from = "abhishekabhiabhi0@gmail";
	  
	  mail($reciver,$sub,$mes,$from);
	  
	  echo "<br> mail has been send";
	  
  }


?>  
</div>


<!--this is for slide bar-->
<div><?php include("sidebar.php"); ?></div>

<!--this is for footer-->
<div id="foot">this is footer</div>



<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/new2.js"></script>

</body>
</html>