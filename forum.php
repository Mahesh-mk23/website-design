<?php
session_start();



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
margin-top:10%;
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
	 <li><a type="button" name="Forum"href="forum.php"class="active">Forum</a></li>
	 <li><a type="button" name="requestsection"href="requestsection.php">Request Section</a></li>
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
<p style="margin-left:21%;margin-top:2%;font-size:20;font-weight:bold">Education</p>
<hr style="margin-left:21%">
<p style="margin-left:21%;margin-top:2%;font-size:20;font-weight:bold">Events</p>
<hr style="margin-left:21%">
<p style="margin-left:21%;margin-top:2%;font-size:20;font-weight:bold">Entertainment</p>
<hr style="margin-left:21%">
<p style="margin-left:21%;margin-top:2%;font-size:20;font-weight:bold">World</p>
<hr style="margin-left:21%">
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