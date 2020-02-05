<?php 
	include_once('connection.php');
	$res = mysqli_query($connection,'SELECT coords,map_image FROM places WHERE id_place='.$_POST['i_id']);
	$row = mysqli_fetch_array($res);
	$coords_array = explode(';', $row['coords']);
	echo '
	<img src='.$row["map_image"].' class="icon" style="right:0px; bottom:0px; top:'.$coords_array[1].'px; left:'.$coords_array[0].'px">
	';
	mysqli_free_result($res);
	mysqli_close($connection);
?>