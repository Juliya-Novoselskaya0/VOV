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
background-size: 100%; background-image: url("../images/fon.png")
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
	.fullName{
		position: fixed;
		width:450px;
		height: 100px;
		font-size: 30px;
		color: white;
		top:30px;
		right:0px;
		padding: 15px; /* Поля вокруг текста */
   /* margin: 10px; */
		background-color: rgba(183,36,27,0.6); 
	}
#img{
	position: absolute;
	top:100px;
	left: 50px;
	-moz-box-shadow:0 0 20px #000; 
	-webkit-box-shadow:0 0 20px #000; 
	box-shadow:0 0 20px #000;
}
.description{
	font-size:18px;
	position: absolute;
	width: 550px;
	height: 250px;
	top:200px;
	right: 50px;
text-shadow:#b7241b 0 0 2px;
	color: white;
}
</style>
	<div class="fullName">'.$result['short_description'].'
	</div>
	<img id="img" src=../'.$result['tooltip_image'].'>
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