<ul>
	<li><a href="?message=Hi&qui=world">En anglais</a></li>
	<li><a href="?message=Salut&qui=à tous">En français</a></li>
	<li><a href="?">Par défaut</a></li>
</ul>

<?php
$message=$_GET['message']??"Bonjour";
$qui=$_GET['qui']??'Tout le monde !';
$color=#'000000';
$bgcolor=#'ffffff';
$fontSize='14px'
?>	

<form method="get" action="pagephp.php">
	<fieldset>
		<legend>Message :</legend>
		<input type="text" name="message" value="<?=$message?>" placeholder="Saisir un message">
		<input type="text" name="qui" value="<?=$qui?>" placeholder="Saisir à qui ?">
	</fieldset>
	<fieldset>
		<legend>Styles :</legend>
		<input type="color" name="color" value="<?color?>">
		<input type="color" name="bgcolor" value="<?bgcolor?>">
	</fieldset>
	<button type="submit">Valider</button>
</form>

<h1><?=$message?></h1>
<p style="color: <?$color?>;background-color:<?=bgColor?>;font-size: <?$fontSize?>"><?=$qui?></p>