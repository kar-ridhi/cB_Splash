<?php
session_start();
include'hackdb.php';

if(isset($_POST['submit'])){
    print_r($_FILES);
 $email=$_SESSION['email'];

    $caption=$_POST['caption'];
    $city=$_POST['city'];
    
    $pic=$_FILES['upload']['name'];

    $query=mysql_query("SELECT * from hackimage where email='$email'");

  

      $temp=$_FILES['upload']['tmp_name'];

     $q=mysql_query("INSERT into hackimage(email,city,pic,caption) VALUES('$email','$city','$pic','$caption')");  

     if($q)

     {

      $dir="./profile/$email/images/";

      mkdir($dir,0777,true);

      move_uploaded_file($temp,"./profile/$email/images/$pic");

      echo "<img src='profile/$email/images/$pic'>";
      

     }

     else

     echo "fail"; 

}?>
<html>
    <head>
</head>
<body>
<form class="text" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" enctype="multipart/form-data">
    <h2>Enter your city</h2><input type="txt" name="currentcity"><br><br>
<h2>choose the file to be uploaded</h2>
    <input type="file" name="upload"><br><br>
    <h2>choose suitable caption</h2><input type="txt" name="caption"><br><br>
    <input type="submit" name="submit">

</form>

</body>
</html>