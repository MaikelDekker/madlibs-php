<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<title>Madlibs</title>
</head>
<body>
<header>
<h1>Madlibs</h1>
</header>
<div id="page">
<nav><a href="paniekFormulier.php">Er heerst paniek...</a><a href="onkundeFormulier.php">Onkunde</a></nav>
<h2>Er heerst paniek...</h2>
	<form action="paniek.php" method="post" = id="questions">
		<p>Welk dier zou je nooit als huisdier willen hebben?
		<input id="textField" type="text" name="question1" value=""><br></p>
		<p>Wie is de belangrijkste persoon in je leven?
		<input id="textField" type="text" name="question2" value=""><br></p>
		<p>In welk land zou  zou je graag willen wonen?
		<input id="textField" type="text" name="question3" value=""><br></p>
		<p>Wat doe je als je je verveelt?
		<input id="textField" type="text" name="question4" value=""><br></p>
		<p>Met welk speelgoed speelde je als kind het meest?
		<input id="textField" type="text" name="question5" value=""><br></p>
		<p>Bij welke docent spijbel je het liefst?
		<input id="textField" type="text" name="question6" value=""><br></p>
		<p>Als je € 100.000,- had, wat zou je dan kopen?
		<input id="textField" type="text" name="question7" value=""><br></p>
		<p>Wat is je favoriete bezigheid?
		<input id="textField" type="text" name="question8" value=""><br></p>
		<input type="submit" id="submitButton" name="submit" onsubmit="">
	</form>
	<footer>Deze pagina is gemaakt door Maikel</footer>
</div>

</body>
</html>

<?php
?>