<?php 
	include_once('connection.php');
	$res = mysqli_query($connection,'SELECT coords,map_image FROM places WHERE id_place='.$_POST['i_id']);
	$row = mysqli_fetch_array($res);
	$coords_array = explode(';', $row['coords']);
	echo '
	<img src='.$row["map_image"].' class="icon" style="right:0px; bottom:0px; top:'.$coords_array[1].'px; left:'.$coords_array[0].'px">
	';
	/*echo '
	<img src="images\events_border\GrodnoRegion.png" class="icon" style="right:0px; bottom:0px; top:443px; left:-5px">
	<img src="images\events_border\ShuchinRegion.png" class="icon" style="right:0px; bottom:0px; top:425px; left:200px">
	<img src="images\events_border\BerestovicaRegion.png" class="icon" style="right:0px; bottom:0px; top:669px; left:53px">
	<img src="images\events_border\MostyRegion.png" class="icon" style="right:0px; bottom:0px; top:617px; left:133px">
	<img src="images\events_border\VolkovyskRegion.png" class="icon" style="right:0px; bottom:0px; top:680px; left:140px">
	<img src="images\events_border\SvislochRegion.png" class="icon" style="right:0px; bottom:0px; top:812px; left:100px">
	';*/
	mysqli_free_result($res);
	mysqli_close($connection);
?>