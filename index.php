<!DOCTYPE html>
<html lang="ru">
<head>
	<meta http-equiv="Content-Type" content="text/html" charset="utf-8"/><meta charset="UTF-8"/>
	<script type='text/javascript' src='js/jquery.js'></script>
	<script type='text/javascript' src='get_element_id.js'></script>
	<script type='text/javascript' src='get_year.js'></script>
	<link rel="stylesheet" type="text/css" href="style/style.css"/>
	<title>Заголовок</title>
</head>

<body class="font">
	<div id="left-menu">
		<center><font style="font-size: 24px;">Выберите год:</font></center> <br /> <br />
		<p value="1941" name="year" class="years">1941</p> <br />
		<div id="1941" class="item-list"></div>
		<p value="1942" name="year" class="years">1942</p> <br />
		<div id="1942" class="item-list"></div>
		<p value="1943" name="year" class="years">1943</p> <br />
		<div id="1943" class="item-list"></div>
		<p value="1944" name="year" class="years">1944</p> <br />
		<div id="1944" class="item-list"></div>
	</div>
	<div id="msg" style="float: right"></div>
	<div id='map-container'>
		<img id='map-container' class="map"/>
	</div>
</body>
</html>