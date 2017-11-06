<?php
if(isset($_POST['Submit'])or isset($_POST['Hall']) or isset($_POST['Batch']) or isset($_POST['Program']) or isset($_POST['Department']) or isset($_POST['gender']) or isset($_POST['bg'])){
$flag=0;
$query="select * from students where ";
$middle="";
$name=trim($_POST['searchterm']);
$Hall=trim($_POST['Hall']);
$Batch=trim($_POST['Batch']);
$Program=trim($_POST['Program']);
$Department=trim($_POST['Department']);
$gender=trim($_POST['gender']);
$BG=trim($_POST['bg']);
if($Hall!='none'){
	$flag++;
	$middle=$middle." hall like '%".$Hall."%'";
}
if($Batch!='none'){
	$middle=($flag==0)?$middle." roll like '".$Batch."%' ":$middle." and roll like '".$Batch."%' ";
	$flag++;
}
if($Program!='none'){
	$middle=($flag==0)?$middle."program like '%".$Program."%'":$middle." and program like '%".$Program."%'";
	$flag++;
}
if($Department!='none'){
	$middle=($flag==0)?$middle." depart like '%".$Department."%'":$middle." and depart like '%".$Department."%'";
	$flag++;
}
if($gender!='none'){
	$middle=($flag==0)?$middle." gender like '%".$gender."%'":$middle." and gender like '%".$gender."%'";
	$flag++;
}
if($BG!='none'){
	$middle=($flag==0)?$middle." bg like '".$BG."%'":$middle." and bg like '".$BG."%'";
	$flag++;
}
$db=mysqli_connect(********,*******,********,*******);
if(!$db)
	echo 'Error';
if(mysqli_connect_error())
	echo mysqli_connect_error();
if(strlen($name)==0){
    if($flag==0)
		echo '<h2><p align="center">No result found.</p></h2>';
	else
		$query=$query.' '.$middle;
}
else{
if($flag==0){
	echo 'zero';
$query=$query." roll like '$name%' or name like '%$name%' or email like '%$name%' order by locate('".$name."',name),name";}
else
	$query=$query." (".$middle." and roll like '$name%') or ($middle and name like '%$name%') or ($middle and email like '%$name%') order by locate('".$name."',name),name";
}
//echo $query;
if($flag or strlen($name)){
$result=mysqli_query($db,$query);
if(!$result){
echo '<h2><p align="center">No result found.</p></h2>';
}
else{
$num=$result->num_rows;
if($num==0)
	echo '<h2><p align="center">No result found.</p></h2>';
else{
	echo '<h3><p align="center">Total results '.$num.'</p></h3>';
for($i=0;$i<$num;$i++){
	set_time_limit(30);
	$row=$result->fetch_assoc();
	$row['name']=strtoupper($row['name']);
	echo '<div class="std" onclick="mdm('.$i.')"><img id="img" src="https://oa.cc.iitk.ac.in/Oa/Jsp/Photo/'.$row['roll'].'_0.jpg" onerror="imgerror(this)"><div id="text">'. $row['name'].'<br>'.$row['roll'].'<br>'.$row['depart'].'</div></div>';
       echo '<div class="whole"><div class="one" id="symbol" onclick="prev('.$i.')">&#10096;</div><div class="two" id="symbol" onclick="next('.$i.')">&#10097;</div><div class="outer"><div class="modam"><img width="250" height="250" style="position:absolute;top:15px;left:15px;float:left;user-select:none;outline:none;" src="https://oa.cc.iitk.ac.in/Oa/Jsp/Photo/'.$row['roll'].'_0.jpg" onerror="imgerror(this)"><div style="float:right;position:absolute;left:280px;top:20px;" width="50px"><table><tr><td id="intro"><img src="https://cdn3.iconfinder.com/data/icons/black-easy/512/535106-user_512x512.png" width="20px"> Name:</td><td id="info">'.$row['name'].'</td></tr><tr><td id="intro"><img src="http://home.iitk.ac.in/~nishankm/id.png" width="20px">  Roll No:</td><td id="info">'.$row['roll'].'</td></tr><tr><td id="intro"><img src="http://home.iitk.ac.in/~nishankm/mail.png" width="20px"> Email:</td><td id="info">'.$row['email'].'@iitk.ac.in</td></tr><tr><td id="intro"><img src="https://maxcdn.icons8.com/Share/icon/Users//gender1600.png" width="20px" >Gender:</td><td id="info">'.$row['gender'].'</td></tr><tr><td id="intro"><img src="http://home.iitk.ac.in/~nishankm/degree.png" width="20px" > Branch:</td><td id="info">'.$row['depart'].'</td></tr><tr><td id="intro"><img src="http://home.iitk.ac.in/~nishankm/hat.jpg" width="20px">Program:</td><td id="info">'.$row['program'].'</td></tr><tr><td id="intro"><img src="http://home.iitk.ac.in/~nishankm/home.png" width="20px" >IITK Address:</td><td id="info">'.$row['hall'].'</td></tr><tr><td id="intro"><img src="http://home.iitk.ac.in/~nishankm/bg.png" width="20px"> Blood Group:</td><td id="info">'.$row['bg'].'</td></tr></table></div></div></div></div>';
}
}
}
mysqli_close($db);
}
}
?>
