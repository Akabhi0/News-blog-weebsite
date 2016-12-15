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
<div><?php include("post_body.php"); ?></div>

<!--this is for slide bar-->
<div><?php include("sidebar.php"); ?></div>

<!--this is for footer-->
<div id="foot">this is footer</div>



<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/new2.js"></script>

</body>
</html>