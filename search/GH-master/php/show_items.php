<?php
	include_once ('connection.php');
	$years = htmlentities($_POST['year']);
	$res = mysqli_query($connection,'SELECT place_id,title FROM events WHERE year='.$years.' && place_id != "NULL"');
	while ($row = mysqli_fetch_array($res)) echo "<p class='sl' id=".$row['place_id'].">".$row['title']."</p><br>";	
	mysqli_free_result($res);
	mysqli_close($connection);
?>