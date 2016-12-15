<?php
  session_start();
  if(!isset($_SESSION['user'])){
	  header("location:login.php");
  }else{
	 // header("location:index_admin.php");
  }
  
?>
<html>
  <head>
    <title> Admin Pannel </title>
	<link href="admin.css" rel="stylesheet">
  </head>

  <body>
    <?php include("db.php"); ?>
    
	
	<div id="head1"><h2><a href="index_admin.php" style="text-decoration:none;">  Welcome to Admin Pannel! </a></h2></div>
	
	<aside><center><h2> Manage Pannel </h2></center>
           <center><a href="logout.php">Logout Admin</a></center>
		   <center><a href="index_admin.php?view=view">View Post</a></center>
		   <center><a href="index_admin.php?insert=insert">Insert New Post</a></center>
    </aside>
	<?php if(isset($_GET['view'])) { ?>
	<table  align="center" border="2" >
	
	   <tr>
	    <td align="center" colspan="9" bgcolor="orange">
		<h1>All Post View Here</h1>
		</td>
	   <tr>
     
	   <tr>
	       <th>Post Id</th>
		   <th>Post Title</th>
		   <th>Post Date</th>
		   <th>Post Author</th>
		   <th>Post Image</th>
		   <th>Post Content</th>
		   <th>Edit</th>
		   <th>Delete</th>
	   </tr>
         <?php
			 
	     if(isset($_GET['view'])){
		 $i = 1;
		 $query = mysqli_query($con ,"select * from post order by 1 desc" );
         while($row = mysqli_fetch_array($query)){
			
			$id = $row['post_id'];
			$title = $row['post_title'];
			$date = $row['post_date'];
			$author = $row['post_author'];
			$img = $row['post_img'];
			$dec = substr($row['post_cont'],0,50);
	     ?>	   
	   <tr>
	     <td><?php echo $i++; ?></td>
	     <td align="center" width="15%" style="padding:0%; margin:0%;"><h5><i><?php echo $title; ?></i><h5></td>
	     <td><?php echo $date; ?></td>
		 <td align="center" width="20%" style="padding:0%; margin:0%;"><h5>Published By:<br><?php echo $author; ?></h5></td>
		 <td align="center" width="20%" style="padding:0%; margin:0%;"><img  src="upload/<?php echo $img; ?>" width="95%" height="2%" style="padding:0%; margin:0%;"></td>
		 <td align="center" width="50%" ><h5><?php echo $dec; ?><h5></td>
		 <td><a href="edit.php?edit=<?php echo $id; ?>" > Edit</a></td>
		 <td><a href="delete.php?del=<?php echo $id; ?>">Delete</a></td>
	   </tr>
	   
	<?php } } }?>
	</table>
	<?php
	  if(isset($_GET['insert'])){
		include("post.php");
	  }
	?>
	
	<p align="center"><?php echo @$_GET['data']; ?></p>
	<p align="center"><?php echo @$_GET['intt']; ?></p>
	  
  </body>
</html>
 