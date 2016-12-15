<?php include("db.php"); ?>
<div id="post_body">

<?php 
 
 $query = mysqli_query($con,"select * from post order by 1 desc limit 0,4");
 
 while($row = mysqli_fetch_array($query)){
	$title = $row['post_title']; 
	$author = $row['post_author'];
    $datee = $row['post_date'];
    $dec = $row['post_cont'];
    $images = $row['post_img'];	
	$post_id = $row['post_id'];
 ?>
 <h3><a href="pages.php?id=<?php echo $post_id; ?>"> <?php echo $title; ?></a></h3>
 <p>Published on:&nbsp;&nbsp;<b><?php echo $datee; ?></b></p>
 <p align="right" >Posted By:&nbsp;&nbsp;<b><?php echo $author;  ?></b></p>
 
 <img src="upload/<?php echo $images; ?>" alt="<?php echo $images; ?>" width="60%" height="30%" />
 <p><?php echo $dec; ?></p>
 <p align="right" ><a href="pages.php?id=<?php echo $post_id; ?>">Read More</a></p>
 <?php } ?>
 
</div>