<?php
	include_once('connection.php');
	$query  = mysqli_query($connection,'SELECT * FROM monuments WHERE monument_id='.$_GET['id']);
	$result = mysqli_fetch_array($query);
/*	echo '<title>'.$result['title'].'</title>';*/
	$fd = fopen("".$result['link']."", 'r');
	while (!feof($fd)) 
	{
		echo fgets($fd);
	}
	echo '<style>
	html, body{	height: 100%; min-height: 100%; margin: 0px; padding: 0px; font-family: "Courier New";
background-size: 100%; background-image: url("images/fon.png")
	}
	.type{
		position: absolute;
		height: 250px;
		width: 250px;
		top:0px;
		right: 0px;
	background-color:rgba(255,255,255,0.5);
	}
	#title{
		position: absolute;
		height: 50px;
		width: 300px;
		top:-30px;
		right: 100px;
		color: white;
		font-size: 55px;
		text-transform: uppercase;
		letter-spacing:0.2em;
	}
	.monument_icon{
		position: absolute;
		width: 100px;
		height: 120px;
		top:90px;
		right: 70px;
	}
	.monument_icon img{
		position: relative;
		width: 100px;
		height: 120px;
		text-align: center;
	}
	.fullName{
		position: fixed;
		width:450px;
		height: 100px;
		font-size: 30px;
		color: white;
		top:30px;
		left:0px;
		padding: 15px; /* Поля вокруг текста */
   /* margin: 10px; */
		background-color: rgba(183,36,27,0.6); 
	}
#img{
	position: absolute;
	top:350px;
	left: 50px;
	-moz-box-shadow:0 0 20px #000; 
	-webkit-box-shadow:0 0 20px #000; 
	box-shadow:0 0 20px #000;
}
.description{
	position: absolute;
	width: 550px;
	height: 250px;
	top:350px;
	right: 150px;
text-shadow:black 0 0 2px;
	color: white;
}
</style>';
if ($result['type_id']==1){
		echo "<div class="type">
		<div class="monument_icon">
			<img src="../images/monument_1.png">
		</div>
	</div>";			
	}	
	else if($result['type_id']==2){
		echo "<div class="type">
		<div class="monument_icon">
			<img src="../images/monument_2.png">
		</div>
	</div>";			
	}	
	else {
		echo "<div class="type">
		<div class="monument_icon">
			<img src="../images/monument_3.png">
		</div>
	</div>";			
	}	
};
	echo '
	<h3 id="title"><center>'.$result['title'].'</center></h3>
	<div class="fullName">'.$result['short_description'].'
	</div>
	<img id="img" src='../.$result['tooltip_image'].'>
	<div class="description">
		'.$result['full_description'].'
	</div>';
	fclose($fd);
	mysqli_close($connection);
?>











<!--


	<style>
	html, body{	height: 100%; min-height: 100%; margin: 0px; padding: 0px; font-family: "Courier New";
background-size: 100% background-image: url("../images/fon.png")
	}
	</style>
	<h3 id="title"><center>'.$result['title'].'</center></h3>
	<img id="img" src='.$result['tooltip_image'].'>
	<div class="description">'.$result['full_description'].'</div>