<?php
  session_start();
  if(!isset($_SESSION['user'])){
	  header("location:login.php");
  }else{
	 // header("location:index_admin.php");
    
?>
<?php
include("db.php");
?>

<html>
 <head>
    <title>Insert Post</title>
 </head>

 <body>
    <form method="post" action="post.php" enctype="multipart/form-data">
    <table border="2px" align="center" width="600px">
	
	  <tr>
	    <td align="center" colspan="5" bgcolor="yellow">
		<h1>Insert Post</h1></td>
	  </tr>
	  
      <tr>
	    <td align="right">Post Title</td>
	    <td><input type="text" name="title"></input></td>
	  </tr>
	  
	  <tr>
	    <td align="right">Post Author</td>
	    <td><input type="text" name="author"></input></td>
	  </tr>
	  
	 <tr>
	    <td align="right">Post File</td>
	    <td><input type="file" name="image"></input></td>
	  </tr>
	  
	 <tr>
	    <td align="right">Post Context</td>
	    <td><textarea name="area" rows="20" col="30"></textarea></td>
	  </tr>
	  
	   <tr>
	    <td align="right">POST</td>
	    <td><input type="submit" name="submit"></input></td>
	  </tr>
    </table>
    </form>
	
	<?php
	  if(isset($_POST['submit'])){
	   
             $title = $_POST['title'];
	         $datee = date("d, F Y");
             $author_name = $_POST['author'];
             $area = $_POST['area'];
		
             $image_name = $_FILES['image']['name'];
             $image_tmp = $_FILES['image']['tmp_name'];
             $image_size = $_FILES['image']['size'];
             $image_type = $_FILES['image']['type'];			 
		
       $upload = "upload/".$image_name;

        if($title =='' or $author_name ==''){
			echo "<script> alert('enter the empty box'); </script>";
			exit();
		}
		
		if($image_size>50000){
				move_uploaded_file($image_tmp,$upload);
		}
		
        $query = mysqli_query($con,"insert into post (post_title,post_date,post_author,post_img,post_cont) values
		('$title','$datee','$author_name','$image_name','$area')");
		
       if(isset($query)){
		   echo "data is enter";
	   }		
	    header("location:index_admin.php?intt=<p>the data has been enter into the row </p> ");
      	  
	  }
	?>
	
 </body>
</html>
<?php } ?>