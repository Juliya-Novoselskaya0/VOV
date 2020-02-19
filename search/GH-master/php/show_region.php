<?php 
	include_once('connection.php');
	$res = mysqli_query($connection,'SELECT coords,region_bigMap,animation,anim_coords FROM places WHERE id_place='.$_POST['i_id']);
	$row = mysqli_fetch_array($res);
	$coords_array = explode(';', $row['anim_coords']);
	echo '
	<div class="b-popup" id="popup1">
    <div class="b-popup-content">
    <div clas="contentReg">
    <img src='.$row["region_bigMap"].' class="icon" style="right:0px; bottom:0px; top:0px; left:400px">
	<img src='.$row["animation"].' class="icon_anim" style="width:15%; right:0px; bottom:0px; top:'.$coords_array[1].'px; left:'.$coords_array[0].'px">
	<a class="close-btn" href="#" onclick="PopUpHide()">
					<img src="images/close.png" onclick="PopUpHide()"/>			
				</a>		
	</div>
	</div>
	</div>';
	/*echo '
	<img src="images\events_border\GrodnoRegion.png" class="icon" style="right:0px; bottom:0px; top:443px; left:-5px">
	<img src="images\events_border\ShuchinRegion.png" class="icon" style="right:0px; bottom:0px; top:425px; left:200px">
	<img src="images\events_border\BerestovicaRegion.png" class="icon" style="right:0px; bottom:0px; top:669px; left:53px">
	<img src="images\events_border\MostyRegion.png" class="icon" style="right:0px; bottom:0px; top:617px; left:133px">
	';*/
	mysqli_free_result($res);
	mysqli_close($connection);
?>