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
	<p id="storyText">Er zijn veel mensen die niet kunnen <?=$_POST["question1"]?>. Neem nou <?=$_POST["question2"]?>. Zelfs met de hulp van een <?=$_POST["question4"]?> of zelfs <?=$_POST["question3"]?> kan <?=$_POST["question2"]?> niet <?=$_POST["question1"]?>. Dat heeft niet te maken met een gebrek aan <?=$_POST["question5"]?>, maar met een te veel aan <?=$_POST["question6"]?>. Te veel <?=$_POST["question6"]?> leidt tot verveling en dat is niet goed als je wilt <?=$_POST["question1"]?>. Helaas voor <?=$_POST["question2"]?>.</p>
	<footer>Deze pagina is gemaakt door Maikel</footer>
</div>

</body>
</html>