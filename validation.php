<?php
session_start();
$server='localhost';
$username='root';
$password='';
$db='loginskcet';
$connect=mysqli_connect($server,$username,$password,$db);


mysqli_select_db($connect,$db);
if(isset($_POST['username']))
{
	$uname=$_POST['username'];
	$password=$_POST['password'];
	$sql="Select * from loginform where username='".$uname."' AND password='".$password."' limit 1";
	$result=mysqli_query($connect,$sql);
	if(mysqli_num_rows($result)==1){
		header("Location:home.php");
		exit();
	}
	else{
		header("Location:validation.php");
		exit();
	}
}
?>
<html>
<title>
SKCET Students Login
</title>
<style>
div.background{
background-size:1630px 345px;
}
div.text{
text-align:left;
font-weight:bold;
color:white;
background-color:#0074D9;
}
#skcet{
float: left;
}
form{
margin-left:30%;
margin-top:2%;
height:450px;
width:500px;
border:3px solid #0074D9;
border-radius:25px;
}
div.avatar{
margin-left:42%;
margin-top:5%;
}
div.username{
margin-left:5%;
margin-top:0%;
font-size:25;
font-family:serif;
}
div.password{
margin-left:5%;
margin-top:6%;
font-size:25;
font-family:serif;
}
button{
text-align:center;
color:white;
background-color:#0074D9;
margin-left:44%;
margin-top:6%;
font-size:15;
font-family:serif;
border-radius:10px;
height:8%;
width:15%;
}
marquee{
font-size:20;
color:red;
}
</style>
<div class="text" id="text">
   <img id="skcet" src="http://localhost/skcetlogo.jpeg" height="75" width="75" style="margin-left: 25%;margin-top: 0.2%;margin-right: 0.2%"/>
   <h1>Sri Krishna College of Engineering And Technology</h1>
   <h3>An Autonomous Institution,Accredited by NAAC with 'A' Grade</h3>
</div>
<div class="background" id="bg">
   <img id="bg" src="http://localhost/skcet11.jpg" height="300" width="1517">
</div>
<marquee behavior="scroll" direction="left" scrollamount="15">Students are only allowed to Login!</marquee>
<form action="#" method="POST">
  <div class="avatar">
     <img src="http://localhost/login.png" height="85" width="85" />
  </div>
  <p style="margin-left:19%">Enter email</p>
  <div class="username">
     <input type="text" placeholder="enter email" style="width:60%;height:10%;margin-left:14%;border-radius:4px" name="username" required>
  </div>
   <p style="margin-left:19%;margin-top:5%">Password</p>
  <div class="password">
     <input type="password" placeholder="enter password"  style="width:60%;height:10%;margin-left:14%;border-radius:4px;margin-top:0%" name="password" required>
  </div>
  <br><font color="#FF0000" style="margin-left:18%">Invalid username or password</font><br>
  <div class="login">
	 <button type="submit">Login</button>
  </div>
</form>  


 
</html>