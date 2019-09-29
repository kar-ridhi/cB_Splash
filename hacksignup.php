<?php
session_start();
include 'hackdb.php';
if(isset($_POST['submit']))
{
    $email=$_POST['email'];
    $password=$_POST['password'];
    $cpassword=$_POST['cpassword'];
    $name=$_POST['name'];
    $dob=$_POST['dob'];
    $currentcity=$_POST['currentcity'];
    $hometown=$_POST['hometown'];
    $gender=$_POST['gender'];
    $_SESSION['currentcity']=$currentcity;
    $_SESSION['email']=$email;
    $_SESSION['hometown']=$hometown;

if($password==$cpassword)
{
    $query=mysql_query("SELECT email from hackdetails where email='$email'");
    $n= mysql_num_rows($query);
    if($n==0)
    {
        $q=mysql_query("INSERT into hackdetails(email,password,name,dob,currentcity,hometown,gender) VALUES('$email','$password','$name','$dob','$currentcity','$hometown','$gender')");
        if($q)
        {
            echo"success";

        }
        else echo"failed to insert";
    }
    else{
        echo "email already exists";
    }
    
}
    
    else echo"password does not match";
}
    ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Title</title>
		<link rel="stylesheet" href="projectstyle.css" type="text/css" />
		<meta name="viewport" content="width=device-width" initial-scale="1.0" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<script src="js/jquery.min.js" type="text/javascript"></script>		
		<script src="js/script.js" type="text/javascript"></script>
	</head>
	<body>
    <img src ="hacklogo.jpg" alt="logo" class="logo" style="display: block; margin-left:auto;margin-right: auto;"/>

            <h1 align="center" class="text" font-color="red"><i>CITYFEELZ</i></h1><br/>
            <h3 align="center"><b>SIGN UP</b></h3>
        <form class="text1" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
            
            
                
                <b>Name</b>&nbsp;&nbsp;<br>
                <input type="text" name="name">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br><br>
                <b> Date of Birth</b><br><input type="date" name="dob"> 
                <br><br>
                <label for="gender"><b>Gender</b></label><br>
      <input type="radio" name="gender" value="male" checked>Male&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="radio" name="gender" value="female" checked>Female&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="radio" name="gender" value="other" checked>other&nbsp;&nbsp;&nbsp;&nbsp;<br><br><br>
                <b>Email</b>&nbsp;&nbsp;&nbsp;&nbsp;<br>
                <input type="email" name="email">
                <br/><br/>
                <b>HOMETOWN</b>&nbsp;&nbsp;<br><br>
                
                <select name="hometown">
    <option value="none" name="hometown" selected disabled hidden><h3>Select your hometown</h3></option>
            
            <option value="kochi">KOCHI</option>
            <option value="newdelhi">NEW DELHI</option>
            <option value="patna">PATNA</option>
            <option value="kolkata">KOLKATA</option>
            <option value="jamshedpur">JAMSHEDPUR</option>
<br>
            <br/>
            <br/>
            </select>
<br>
<b>CURRENT CITY</b>&nbsp;&nbsp;<br><br>
            <select name="currentcity">
    <option value="none" name="currentcity" selected disabled hidden><h3>Select your Current City</h3></option>
            
            <option value="kochi">KOCHI</option>
            <option value="newdelhi">NEW DELHI</option>
            <option value="patna">PATNA</option>
            <option value="kolkata">KOLKATA</option>
            <option value="jamshedpur">JAMSHEDPUR</option>

            <br/>
            <br/>
            </select><br>
                <b>Password</b>&nbsp;&nbsp;<br><br>
                <input type="password" name="password">
                <br/><br/>
                <b>Confirm Password</b>&nbsp;&nbsp;<br><br>
                <input type="password" name="cpassword">
                <br/><br/>
                
                
                <button type="button"><a href="hackfront.php">submit</a></button>
                
                
                
                <br/><br/>
    
		</form>
        <style>
        .logo{
width:100px;
border-color:black;
border-width:5px;
border-style:solid;
border-radius:50%;
}
body{
    background-image:url("hacksignup.jpg");
    background-size:cover;


}
        </style>
		
	</body>
</html>