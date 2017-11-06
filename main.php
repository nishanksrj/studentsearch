<html>
<head>
<meta charset="en">
<title>Student Search</title>
<style>
body{
	background-color:rgb(240,240,240);
position:relative;
}
.whole{
display:none;
z-index:1;
background-color:rgba(0,0,0,0.5);
position:absolute;
top:0px;
left:0px;
position:fixed;
width:100%;
height:100%;
}
input[type="text"]{
  background:transparent;
  border:none;
  border-bottom:solid 2px lightgreen;
  width:300px;
  height:30px;
  font-size:14px;
  outline:none;
  position:relative;
  margin:0px 0px 0px 30vw;
  -webkit-animation-name:reduce;
  -webkit-animation-duration:0.4s;
  animation-name:reduce;
  animation-duration:0.4s;
 }
#input:focus{
  border:none;
  border-bottom:solid 3px lightgreen; 
  width:40vw;
  -webkit-animation-name:length;
  -webkit-animation-duration:0.4s;
  animation-name:length;
  animation-duration:0.4s;
}
input[type="submit"]{
	font-size:24px;
	background-color:blue;
	border-radius:5px;
	border:none;
	color:white;
	box-shadow:2px 2px 2px rgba(0,0,0,0.5);
	user-select:none;
	outline:none;
}
input[type="submit"]:hover{
	box-shadow:4px 4px 4px rgba(0,0,0,0.5);
}
@-webkit-keyframes length{
	from{width:300px;}
	to{width:40vw;}
}
@keyframes length{
	from{width:300px;}
	to{width:40vw;}
}
@-webkit-keyframes reduce{
	from{width:40vw;}
	to{width:300px;}
}
@keyframes reduce{
	from{width:40vw;}
	to{width:300px;}
}
.modam{
background-color:white;
width:670px;
height:280px;
}
td#intro{
font-family:cursive;
margin:5px 5px;
text-align:left;
width:150px;
user-select:none;
outline:none;
}
table{
	width:380px;
}
td#info{
font-family:cursive;
margin:5px 5px;
text-align:right;
width:250px;
user-select:none;
outline:none;
}
option{
	width:200px;
	height:30px;
	font-size:16px;
}
select{
	width:13vw;
	height:5vh;
	font-size:16px;
	margin:10px;
	font-family:verdana sans-serif;
	color:rgb(100,100,100);
	outline:none;
	border:none;
	box-shadow:rgba(0,0,0,0.17) 0px 2px 3px;
}
form{
	box-shadow:3px 3px 3px rgba(0,0,0,0.5);
}
.modam{
-webkit-animation-name:zoom;
-webkit-animation-duration:0.4s;
animation-name:zoom;
animation-duration:0.8s;
}
@-webkit-keyframes down{
from{top:0px;}
to{top:150px;}
}
@keyframes down{
from{top:0px;}
to{top:150px;}
}
.outer{
position:absolute;
left:340px;
top:150px;
width:650px;
height:280px;
-webkit-animation-name:down;
-webkit-animation-duration:0.4s;
animation-name:down;
animation-duration:0.4s;
}
@-webkit-keyframes zoom{
	from{-webkit-transform:scale(0);}
	to{-webkit-transform:scale(1);}
}
@keyframes zoom{
	from{transform:scale(0);}
	to{transform:scale(1);}
}
.std{
	background-color:white;
	float:left;
	width:300px;
	margin:10px 15px;
	height:100px;
	box-shadow:3px 3px 3px rgba(0,0,0,0.5);
	position:relative;
	cursor:pointer;
    user-select:none;
	-webkit-animation-name:fading;
	-webkit-animation-duration:1s;
	animation-name:fading;
	animation-duration:1s;
}
@-webkit-keyframes fading{
	from{opacity:0;}
	to{opacity:1;}
}
@keyframes fading{
	from {opacity:0;}
	to{opacity:1;}
}
#img{
width:100px;
height:100px;
float:left;
user-select:none;
outline:none;
}
#text{
	font-size:14px;
	width:180px;
	position:absolute;
	left:110px;
	top:20px;
	user-select:none;
    outline:none;
}
#form{
	background-color:white;
	height:150px;
	left:10px;
	width:97vw;
	position:relative;
}
#symbol{
position:absolute;
width:2.2vw;
height:4.5vw;
background:transparent;
color:white;
cursor:pointer;
user-select:none;
font-size:5vw;
display:none;
}
#symbol:hover{
	color:black;
}
.one{
top:18vw;
left:3.7vw;
}
.two{
top:18vw;
left:92vw;
}
</style>
</head>
<body>
<form  name="form" id="form" >
<select name="Hall"  onchange="working(this.value)" id="hall"><option value="none">HALL</option><option value="HALL1" <?php if(isset($_POST['Hall']) && $_POST['Hall']=='HALL1') echo "selected='true'";?> >HALL1</option><option value="HALL2" <?php if(isset($_POST['Hall']) && $_POST['Hall']=='HALL2') echo "selected='true'";?>>HALL2</option><option value="HALL3" <?php if(isset($_POST['Hall']) && $_POST['Hall']=='HALL3') echo "selected='true'";?>>HALL3</option><option value="HALL4" <?php if(isset($_POST['Hall']) && $_POST['Hall']=='HALL4') echo "selected='true'";?> >HALL4</option><option value="HALL5" <?php if(isset($_POST['Hall']) && $_POST['Hall']=='HALL5') echo "selected='true'";?>>HALL5</option><option value="HALL6" <?php if(isset($_POST['Hall']) && $_POST['Hall']=='HALL6') echo "selected='true'";?> >HALL6</option><option value="HALL7" <?php if(isset($_POST['Hall']) && $_POST['Hall']=='HALL7') echo "selected='true'";?> >HALL7</option><option value="HALL8" <?php if(isset($_POST['Hall']) && $_POST['Hall']=='HALL8') echo "selected='true'";?> >HALL8</option><option value="HALL9" <?php if(isset($_POST['Hall']) && $_POST['Hall']=='HALL9') echo "selected='true'";?> >HALL9</option><option value="HALLX" <?php if(isset($_POST['Hall']) && $_POST['Hall']=='HALLX') echo "selected='true'";?>>HALL10</option><option value="HALL11" <?php if(isset($_POST['Hall']) && $_POST['Hall']=='HALL11') echo "selected='true'";?> >HALL11</option><option value="HALL12" <?php if(isset($_POST['Hall']) && $_POST['Hall']=='HALL12') echo "selected='true'";?> >HALL12</option></select>
<select name="Batch" onchange="working(this.value)"><option value="none" <?php if(isset($_POST['Batch']) && $_POST['Batch']=='none') echo "selected='true'";?>>Batch</option><option value="170" <?php if(isset($_POST['Batch']) && $_POST['Batch']=='170') echo "selected='true'";?>>Y17</option><option value="160" <?php if(isset($_POST['Batch']) && $_POST['Batch']=='160') echo "selected='true'";?>>Y16</option><option value="150" <?php if(isset($_POST['Batch']) && $_POST['Batch']=='150') echo "selected='true'";?>>Y15</option><option value="14" <?php if(isset($_POST['Batch']) && $_POST['Batch']=='14') echo "selected='true'";?>>Y14</option><option value="13" <?php if(isset($_POST['Batch']) && $_POST['Batch']=='13') echo "selected='true'";?>>Y13</option><option value="12" <?php if(isset($_POST['Batch']) && $_POST['Batch']=='12') echo "selected='true'";?>>Y12</option></select>
<select name="Program" onchange="working(this.value)"><option value="none" <?php if(isset($_POST['Program']) && $_POST['Program']=='none') echo "selected='true'";?>>Program</option><option value="BTech" <?php if(isset($_POST['Program']) && $_POST['Program']=='BTech') echo "selected='true'";?>>B.Tech.</option><option value="BS" <?php if(isset($_POST['Program']) && $_POST['Program']=='BS') echo "selected='true'";?>>B.S.</option><select>
<select name="Department" onchange="working(this.value)"><option value="none" <?php if(isset($_POST['Department']) && $_POST['Department']=='none') echo "selected='true'";?>>Department</option><option value="AE" <?php if(isset($_POST['Department']) && $_POST['Department']=='AE') echo "selected='true'";?>>AEROSPACE</option><option value="BSBE" title="BIOLOGICAL SCIENCE AND BIO ENGEERING" <?php if(isset($_POST['Department']) && $_POST['Department']=='BSBE') echo "selected='true'";?>>BSBE</option><option value="CE" <?php if(isset($_POST['Department']) && $_POST['Department']=='CE') echo "selected='true'";?>>CIVIL</option><option value="CHE" <?php if(isset($_POST['Department']) && $_POST['Department']=='CHE') echo "selected='true'";?>>CHEMICAL</option><option value="CHY" <?php if(isset($_POST['Department']) && $_POST['Department']=='CHY') echo "selected='true'";?>>CHEMISTRY</option><option value="CSE" title="COMPUTER SCIENCE AND ENGINEERING" <?php if(isset($_POST['Department']) && $_POST['Department']=='CSE') echo "selected='true'";?>>CSE</option><option value="ECO" <?php if(isset($_POST['Department']) && $_POST['Department']=='ECO') echo "selected='true'";?>>ECONOMICS</option><option value="ES" <?php if(isset($_POST['Department']) && $_POST['Department']=='ES') echo "selected='true'";?>>EARTH SCIENCES</option><option value="EE" <?php if(isset($_POST['Department']) && $_POST['Department']=='EE') echo "selected='true'";?>>ELECTRICAL</option><option value="MTH" <?php if(isset($_POST['Department']) && $_POST['Department']=='MTH') echo "selected='true'";?>>MATHEMATICS</option><option value="ME" <?php if(isset($_POST['Department']) && $_POST['Department']=='ME') echo "selected='true'";?>>MECHANICAL</option><option value="MSE" <?php if(isset($_POST['Department']) && $_POST['Department']=='MSE') echo "selected='true'";?>>MATERIAL SCIENCE</option><option value="PHY" <?php if(isset($_POST['Department']) && $_POST['Department']=='PHY') echo "selected='true'";?>>PHYSICS</option></select>
<select name="gender" onchange="working(this.value)"><option value="none" <?php if(isset($_POST['gender']) && $_POST['gender']=='none') echo "selected='true'";?>>Gender</option><option value="M" <?php if(isset($_POST['gender']) && $_POST['gender']=='M') echo "selected='true'";?>>Male</option><option value="F" <?php if(isset($_POST['gender']) && $_POST['gender']=='F') echo "selected='true'";?>>Female</option></select>
<select name="bg" onchange="working(this.value)"><option value="none" <?php if(isset($_POST['bg'])&& $_POST['bg']=='none') echo "selected='true'";?>>Blood group</option><option value="A+" <?php if(isset($_POST['bg'])&& $_POST['bg']=='A+') echo "selected='true'";?>>A+</option><option value="A-" <?php if(isset($_POST['bg'])&& $_POST['bg']=='A-') echo "selected='true'";?>>A-</option><option value="B+" <?php if(isset($_POST['bg'])&& $_POST['bg']=='B+') echo "selected='true'";?>>B+</option><option value="B-" <?php if(isset($_POST['bg'])&& $_POST['bg']=='B-') echo "selected='true'";?>>B-</option><option value="AB+" <?php if(isset($_POST['bg'])&& $_POST['bg']=='AB+') echo "selected='true'";?>>AB+</option><option value="AB-" <?php if(isset($_POST['bg'])&& $_POST['bg']=='AB-') echo "selected='true'";?>>AB-</option><option value="O+" <?php if(isset($_POST['bg'])&& $_POST['bg']=='O+') echo "selected='true'";?>>O+</option><option value="O-" <?php if(isset($_POST['bg'])&& $_POST['bg']=='O-') echo "selected='true'";?>>O-</option></select>
<br><br><hr width="800px" align="center" width="4px" color="lightgrey"><br><input type="text" name="searchterm" onchange="textvalue(this.value)" value="<?php echo (isset($_POST['searchterm']))?$_POST['searchterm']:''?>" align="center" id="input" autocomplete="off" placeholder="Enter Name,Roll No or Email">
</form>
<div id="block"></div>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript" src="jsfile.js"></script>
</body>
</html>
