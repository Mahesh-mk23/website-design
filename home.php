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
#news{
	font-weight:bold;
	font-size:25;
	margin-top:2%;
	margin-right:20%;
	margin-left:23%;
}
#info{
	margin-left:22%;
	font-size:20;
	line-height:1.6;
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
	 <a type="button" name="Home" href="home.php" class="active">Home</a></li>
	 <li><a type="button" href="forum.php">Forum</a></li>
	 <li><a type="button" href="requestsection.php">Request Section</a></li>
	 <li><a type="button" href="contactus.php">Contact us</a></li>
	 <li style="float:right;background-color:#FF6600"><a type="button" href="studentslogin.php" class="active" >Logout</a></li>	
	 </ul>
</div>
<div class="left">
     <h3 id="tip">Tips For Life</h3>
	 <p style="margin-left: 3%;margin-right: 1%;line-height:1.6"><q style="color:red">Focus on Commitment,not Motivation</q><br><br>
	 Just how committed are you to your goal? How important is it for you, and what are you willing to sacrifice in order 
	 to achieve it? If you find yourself fully committed, motivation will follow.</p>
</div>
<h2 style="text-align:center">Welcome to SKCET</h2>
<p id="info">Sri Krishna College of Engineering and Technology is the most sought after Institution among the premier 
technical Institutions in South India. With a decade of establishment in 1998, the Institution has marched towards the 
pinnacle of glory through its remarkable achievements in the field of Engineering Education.It is an autonomous Institution, 
accredited by NBA and has been offered ‘A’ Grade (3.42 out of 4 scale) by NAAC for its academic excellence. It offers 8 UG 
programmes, 9 PG programmes, 1 integrated programme and 7 research programs. The Institution offers an exciting academic
 environment with well qualified 354 dedicated faculty members to inspire and nurture the student fraternity. With industry 
 drafted Choice Based Credit System (CBCS) curriculum and syllabi, the Institution takes every effort to bring its students 
 to the forefront of the society as skillful and responsible engineers
<br><br><br>Hello guys,this is an official website for skcet 
students.All updates including events will be posted here.</p>
<div class="right">
    <p id="news" >News and Events</p>
    <marquee behavior="scroll" direction="up" scrollamount="10" style="float:center;border:1px solid gray;height:30%;width:50%;
	top=0;margin-right:2%;margin-left:23%"><p style="margin-left:2%;color:#FF6600"><q>No updates until the current situation dies</q></p>
	</marquee>
</div>
<br><br>
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