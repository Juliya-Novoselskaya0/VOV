<?php
	include_once ('connection.php');
	$years = htmlentities($_POST['year']);
	$res = mysqli_query($connection,'SELECT id,place_id,title FROM events WHERE year='.$years.' && place_id != "NULL"');
	while ($row = mysqli_fetch_array($res)) echo "<p class='sl' id=".$row['id'].">".$row['title']."</p><br>";	
	mysqli_free_result($res);
	mysqli_close($connection);
?>