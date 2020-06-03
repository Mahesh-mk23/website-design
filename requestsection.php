<?php
session_start();

$server='localhost';
$username='root';
$password='';
$db='request';
$connect=mysqli_connect($server,$username,$password,$db);

if(isset($_POST['name']))
{

    mysqli_select_db($connect,$db);
    $name=$_POST['name'];
	$request=$_POST['request'];
	$name=stripcslashes("$name");
	$request=stripcslashes("$request");
	$name=mysqli_real_escape_string($connect,$name);
	$request=mysqli_real_escape_string($connect,$request);
	$requestlength=strlen($request);
	if($requestlength>200)
	{
		header("location:requestsection.php?error=1");
	}
	else
	{
		$sql="Insert into requestform VALUES('','$name','$request')";
		$result=mysqli_query($connect,$sql);
	}
    $sql="SELECT * FROM requestform";
    $result=mysqli_query($connect,$sql);
    if($result){
    while($row=mysqli_fetch_assoc($result))
    {
	$request_name=$row['name'];
	$request =$row['request'];
    }
    }
    else{
	echo"failure";
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
ul{
top=0;
width:100.12%;
list-style-type:none;
margin:0;
padding:0;
overflow:hidden;
background-color:#0074D9;

}
li{
float:left;
display:inline;
border-right:1px solid white;
}
li:last-child{
border-right:none;
}
a{
display:block;
padding:8px;
color:white;
text-align:center;
text-decoration:none;
}
li a:hover:not(.active){
background-color:#0074D9;
}
.active{
background-color:#FF6600;
}
div.left{
	margin-top:2%;
	float:left;
	border:2px solid blue;
	height:50%;
	width:20%;
	
}
#tip{
	text-align:center;
}
div.bottom{
height:60%;
border:2px solid blue;
text-align:left;
font-weight:bold;
color:white;
background-color:#0074D9;
}
</style>
<div class="text" id="text">
   <img id="skcet" src="http://localhost/skcetlogo.jpeg" height="75" width="75" style="margin-left: 25%;margin-top: 0.2%;margin-right: 0.2%"/>
   <h1>Sri Krishna College of Engineering And Technology</h1>
   <h3>An Autonomous Institution,Accredited by NAAC with 'A' Grade</h3>
</div>
<div class="background" id="bg">
   <img id="bg" src="http://localhost/skcet11.jpg" height="300" width="1505">
</div>
<div class="list">
<ul>
     <li>
	 <a type="button" name="Home" href="home.php" >Home</a></li>
	 <li><a type="button" name="Forum"href="forum.php">Forum</a></li>
	 <li><a type="button" name="requestsection"href="requestsection.php"class="active">Request Section</a></li>
	 <li><a type="button" name="contactus"href="contactus.php">Contact us</a></li>
	 <li style="float:right;background-color:#FF6600"><a type="button" href="studentslogin.php" class="active" >Logout</a></li>		 
	 </ul>
</div>
<div class="left">
     <h3 id="tip">Tips For Life</h3>
	 <p style="margin-left: 3%;margin-right: 1%;line-height:1.6"><q style="color:red">Focus on Commitment,not Motivation</q><br><br>
	 Just how committed are you to your goal? How important is it for you, and what are you willing to sacrifice in order to 
	 achieve it? If you find yourself fully committed, motivation will follow.</p>
</div>
<form class="#" method="POST">
  
     <label  style="margin-left:5%"><b>Name</b></label>
     <input name="name" type="text" placeholder="enter your name" style="width:15%;height:5%;margin-left:3%;margin-top:5%" required><br>
   
	 <textarea name="request" cols="50" rows="5"placeholder="Enter your request here"style="width:30%;height:20%;margin-left:5%;margin-top:5%"></textarea>
	 <input type="submit" value="Post" style="margin-left:3%;width:5%;height:5%;background-color:#0074D9;color:white">
	 <br>
	 <br>
	 <br>
	 <br>
	 <p style="margin-left:25%;font-size:20;font-weight:bold">Requests:</p>
	 <p style="margin-left:30%">
	 <?php
	 if(isset($_POST['name'])){
	 echo $request_name;
	 }?></p>
	 <p style="margin-left:35%">
	 <?php
	 if(isset($_POST['name'])){
	 echo $request;
	 }?></p><br>
	 <hr style="margin-left:25%">
	 
	 
</form> 
<div class="bottom">
   <img id="skcet" src="http://localhost/skcetlogo.jpeg" height="75" width="75" style="margin-left: 15%;margin-top: 5%;margin-right: 0.2%"/>
   <h2 style="margin-top: 5%">Sri Krishna College of Engineering And Technology</h2>
   <h5>An Autonomous Institution,Accredited by NAAC with 'A' Grade</h5>
   <p style="margin-top: 3%;margin-left: 15%">Kuniamuthur</p>
   <p style="margin-left: 15%">Coimbatore</p>
   <p style="margin-left: 15%">TamilNadu</p>
   <p style="margin-left: 15%">Phone:0422-2678001</p>
   <p style="margin-left: 15%">FAX:0422-2678012</p>
   <p style="margin-left: 15%">MAIL:info@skcet.ac.in,placement@skcet.ac.in</p>
</div> 
</html>