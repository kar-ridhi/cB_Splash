<?php
session_start();
 include 'hackdb.php';
 if(isset($_POST['submit']))
   { $email=$_POST['email'];
    $password=$_POST['password'];
    $query=mysql_query("SELECT * from hackdetails where email='$email'");
    $n=mysql_num_rows($query);
    if($n==1)
    {$row=mysql_fetch_assoc($query);
        if ($password==$row['password'])
    {
   echo "Success";
    }
    else
    {
      echo "failure!";
    }
  }
  else {
    echo "email doesn't Exist!";
  }
}
 ?>    

<!DOCTYPE html>
<html>
<head>
<title>Login form</title>
</head>
<body>
<img src ="hacklogo.jpg" alt="logo" class="logo" style="display: block; margin-left:auto;margin-right: auto;"/>
<h1><font size=50><i><center>CITYFEELZ</center></i></font></h1>
<br/>
<br/>
<h2><center>LOG IN</center></h2>
<br/>
<form style="margin-left:600px;margin-right:300px;" action="<?php echo $_SERVER['PHP_SELF'];?>"" method="post">
<b>EMAIL</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;<input type="email" name="email">
<br/>
<br/>
<b>PASSWORD</b>:&nbsp;<input type="password" name="password">
<br/>
<br/>
<button type="button"><a href="hackfront.php">submit</a></button>
<br/>
<br/>
</form>
<a href="https://www.google.com"><h3><center>Forgot password?</center></h3></a>
<br/>
<br/>
<hr/>
<h3>Or connect with:</h3>
<a href=""><img src="fb.jpg" alt="facebook" class="size"/></a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href=""><img src="linkedin.jpg" alt="linkedin" class="size"/></a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href=""><img src="google.jpg" alt="google" class="size"/></a>
<hr/>
<h3>Don't have an account?</h3>
<a href=""><h3><a href="hacksignup.php">Sign Up</a></h3></a>
<style>
.logo{
width:100px;
border-color:black;
border-width:5px;
border-style:solid;
border-radius:50%;
}
.size{
width:50px;


}
body{
background-image: url("hackbackground2.jpg");
background-size: cover;
opacity: 1;
}
</style>








</body>
</html> 
