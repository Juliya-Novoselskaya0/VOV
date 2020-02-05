<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="windows-1251">
	<script type='text/javascript' src='js/jquery.js'></script>
	<script type='text/javascript' src='get_element_id.js'></script>
	<script type='text/javascript' src='get_year.js'></script>
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
	<title>Заголовок</title>
</head>

<body class="font">
			<div class="title">
				<p>ИНТЕРАКТИВНЫЙ КАЛЕНДАРЬ</p>
			</div>
	<div id="left-menu">
		<div class="search">
				<input id='search_text' placeholder="Поиск" type="search"/>
				<button type="submit" id="search">Поиск</button>						
			</div>
			
		<div id="years">			
			<center><font style="font-size: 24px;">Выберите год:</font></center> <br /> <br />
			<p value="1941" name="year" class="years">1941</p> <br />
			<div id="1941" class="item-list"></div>
			<p value="1942" name="year" class="years">1942</p> <br />
			<div id="1942" class="item-list"></div>
			<p value="1943" name="year" class="years">1943</p> <br />
			<div id="1943" class="item-list"></div>
			<p value="1944" name="year" class="years">1944</p> <br />
			<div id="1944" class="item-list"></div>
			<p value="1945" name="year" class="years">1945</p> <br />
			<div id="1945" class="item-list"></div>
		</div>
		<div id="events"></div>
		</div>
		
	<div id='map-container'>
		<img id="map" style="position:absolute;" src="images/mapN.png"/>
		<?php include_once 'php/show_monuments.php'; ?>
		<?php include_once 'php/search.php'; ?>
	</div>
	
</body>
</html>