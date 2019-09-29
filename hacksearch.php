<?php
session_start();
include'hackdb.php';

if(isset($_POST['submit'])){
    $search=$_POST['search'];
    if($search=="hometown")
{ 
    $hometown=$_SESSION['hometown'];
    

    $query=mysql_query("SELECT * from hackimage where city='$hometown'");
    $row=mysql_fetch_assoc($query);
    $img=$row['pic'];
    echo  "<img src='profile/$email/images/$img'>"."<br>".$row['caption'];
}}?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Title</title>
		<link rel="stylesheet" href="form2style.css" type="text/css" />
		<meta name="viewport" content="width=device-width" initial-scale="1.0" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<script src="js/jquery.min.js" type="text/javascript"></script>		
		<script src="js/script.js" type="text/javascript"></script>
	</head>
	<body>
            
            
            <form class="text"action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                <input type="text" name="search">
</textarea>
                <input type="submit" value="search" name="submit">
		</form>
		
	</body>
</html>