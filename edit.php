<html>
<body>
<?php include("index_admin.php");
      include("db.php");
?>
<?php

 if(isset($_GET["edit"])){
	 
	$edit = $_GET["edit"];
	 
    $query = mysqli_query($con," select * from post where post_id = '$edit' ");
  
    while($row = mysqli_fetch_array($query)){
	$id = $row["post_id"];
	$title = $row["post_title"];
	$img = $row["post_img"];
	$author = $row["post_author"];
	$dec = $row['post_cont'];
	 
?>

<form method="post" action="edit.php?edit_var=<?php echo $id; ?>" enctype="multipart/form-data">
    <table border="2px" align="center" width="600px">
	
	  <tr>
	    <td align="center" colspan="5" bgcolor="yellow">
		<h1>Insert Post</h1></td>
	  </tr>
	  
      <tr>
	    <td align="right">Post Title</td>
	    <td><input type="text" name="title" value="<?php  echo $title; ?>"> </input></td>
	  </tr>
	  
	  <tr>
	    <td align="right">Post Author</td>
	    <td><input type="text" name="author" value="<?php  echo $author; ?>"></input></td>
	  </tr>
	  
	 <tr>
	    <td align="right">Post File</td>
	    <td><input type="file" name="image" ></input>
		<img src="upload/<?php echo $img; ?>" width="50" height="50">
		</td>
	  </tr>
	  
	 <tr>
	    <td align="right">Post Context</td>
	    <td><textarea name="area" rows="20" col="30"><?php  echo $dec; ?></textarea></td>
	  </tr>
	  
	   <tr>
	    <td align="right">POST</td>
	    <td><input type="submit" name="Update" value="Upadte" ></input></td>
	  </tr>
 <?php } }?>
    </table>
    </form>
	
</body>
</html>

 <?php 
     
	if(isset($_POST['Update'])){
     
	  $geet = $_GET['edit_var']; 
	  
	  $title = $_POST['title'];
	  $date = date('d-m-y');
	  $author = $_POST['author'];
	  $img = $_FILES['image']['name'];
	  $img_tmp = $_FILES['image']['tmp_name'];
	  $dec = $_POST['area'];
	  
	  $img_move = "upload/".$img;
	  move_uploaded_file($img_tmp,$img_move);
	  
     $query = mysqli_query($con ,"UPDATE post SET post_title='$title',
	                             post_author='$author',post_img='$img',post_cont='$dec' WHERE post_id='$geet' ");

	 if(isset($query)){
		echo "data have been uploaded";
	}
	
	}
?> 

