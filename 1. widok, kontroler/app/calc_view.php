<?php require_once dirname(__FILE__) .'/../config.php';?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
    <head>
        <meta charset="utf-8" />
        <title>Kalkulator kredytowy</title>
    </head>
<body>

<form action="<?php print(_APP_URL);?>/app/calc.php" method="post">
	<label for="id_x">Kwota kredytu:</label><br/>
	<input id="id_x" type="text" name="kwota" value="<?php print($kwota); ?>" /><br/><br/>

    <label for="id_y">Okres spłaty:</label><br/>
    <input id="id_y" type="text" name="lat" value="<?php print($lat); ?>" /><br/><br/>

    <label for="id_z">Wprowadź oprocentowanie kredytu w %</label><br/>
    <input id="id_z" type="text" name="oprocentowanie" value="<?php print($oprocentowanie); ?>" /><br/><br/>

    <input type="submit" value="Oblicz" />
</form>	

<?php
if (isset($messages)) {
	if (count ( $messages ) > 0) {
		echo '<ol style="margin: 20px; padding: 10px 10px 10px 30px; border-radius: 5px; background-color: #f88; width:300px;">';
		foreach ( $messages as $key => $msg ) {
			echo '<li>'.$msg.'</li>';
		}
		echo '</ol>';
	}
}
?>

<?php if (isset($result)){ ?>
<div style="margin: 20px; padding: 10px; border-radius: 5px; background-color: #ff0; width:300px;">
<?php echo 'Miesięczna rata kredytu wynosi: '.$result. ' zł'; ?>
</div>
<?php } ?>

</body>
</html>