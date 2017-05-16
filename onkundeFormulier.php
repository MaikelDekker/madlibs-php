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
<h2>Onkunde</h2>
	<form action="Onkunde.php" method="post" = id="questions">
		<p>Wat zou je graag willen kunnen?
		<input id="textField" type="text" name="question1"><br></p>
		<p>Met welke persoon kun je goed opschieten?
		<input id="textField" type="text" name="question2"><br></p>
		<p>Wat is je favoriete getal?
		<input id="textField" type="text" name="question3"><br></p>
		<p>Wat heb je altijd bij je als je op vakantie gaat?
		<input id="textField" type="text" name="question4"><br></p>
		<p>Wat is je beste persoonlijke eigenschap?
		<input id="textField" type="text" name="question5"><br></p>
		<p>Wat is je slechtste persoonlijke eigenschap?
		<input id="textField" type="text" name="question6"><br></p>
		<p>Wat is het ergste dat je kan overkomen
		<input id="textField" type="text" name="question7"><br></p>
		<input type="submit" id="submitButton" name="submit" onsubmit="">
	</form>
	<footer>Deze pagina is gemaakt door Maikel</footer>
</div>

</body>
</html>

<?php
?>