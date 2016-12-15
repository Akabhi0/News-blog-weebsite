<html>
<body>
<?php 
    include("index_admin.php");
    include("db.php");
?>

<?php
 
  if(isset($_GET['del'])){
	  
  $del_id = $_GET['del'];
  $query = mysqli_query($con," delete from post where post_id = '$del_id' ");
  
  if(isset($query)){
	  //header('location:index_admin.php');
	  echo "<script>window.open('index_admin.php?data=the data has been deleted','_self')</script>";
  }}
?>
	
</body>
</html>
	
	
	
	
	
	