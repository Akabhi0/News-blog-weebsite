<html>
<head>
 <title> Malala yousatzai News </title>
 <link href="costom.css" rel="stylesheet">
 <link href="css/bootstrap.css" rel="stylesheet">
</head>

<body>
<?php include("db.php"); ?>
<div id="top">top bar</div>

<!--this is the part foe ads and logos-->
<div><?php include("H.php"); ?></div>

<!--this is the part for menus-->
<div><?php include("M.php"); ?></div>

<!--this is for post body-->
<div id="post_body">
<?php
 
 $page_id = $_GET['id'];
 
 $query = mysqli_query($con ,"select * from post where post_id = '$page_id' ");
 
 while($row = mysqli_fetch_array($query)){
    $title = $row['post_title']; 
	$author = $row['post_author'];
    $date = $row['post_date'];
    $dec = $row['post_cont'];
    $images = $row['post_img'];	
 ?>
 <h3><?php echo $title; ?></h3>
 <p>Published on:&nbsp;&nbsp;<b><?php echo $date; ?></b></p>
 <p align="right" >Posted By:&nbsp;&nbsp;<b><?php echo $author;  ?></b></p>
 
 <img src="upload/<?php echo $images; ?>" alt="<?php echo $images; ?>" width="60%" height="30%" />
 <p><?php echo $dec;  } ?></p>
 
</div>


</div>

<!--this is for slide bar-->
<div><?php include("sidebar.php"); ?></div>

<!--this is for footer-->
<div id="foot">this is footer</div>


<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>

</body>
</html>