<div id="slide_bar">

 <table>
 
    <tr>
      <td align="center"> Subscribe Us </td>
    </tr>
	
	<tr>
	  <td align="center" width="50%"><input type="text" name="text"></td>
	</tr>
	
	<tr>
	  <td align="center"><input type="submit" name="mail" value="Subscribe"></td>
	</tr>
	
	<tr>
	  <td align="center">Social Media</td>
	</tr>
 </table>
 
  <center><h2 style="font-family:comic sans MS; color:yellow">More Mews Post</h2></center>
<?php 
include("db.php");
$query = mysqli_query($con,"select * from post order by rand() limit 0,3");
 
 while($row = mysqli_fetch_array($query)){ 
     $images = $row['post_img'];
     $title = $row['post_title'];
     $id = $row['post_id'];	 
 ?>
  
  <a href="pages.php?id=<?php echo $id; ?>"><img src="upload/<?php echo $images; ?>" width="50%" height="20%" style="margin:0 1%;" /></a>
  <center><a href="pages.php?id=<?php echo $id; ?>"> <h4 style="color:white;text-decoration:none;"><?php echo $title; ?></h4></a></center>
 <?php } ?>
</div>