<?php
?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
    <meta charset="utf-8" />
    <title>Kalkulator kredytowy</title>
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
</head>
<body>

<div style="width:90%; margin: 2em auto;">
    <a href="<?php print(_APP_ROOT); ?>/app/security/logout.php" class="pure-button pure-button-active">Wyloguj</a>
</div>

<div style="width:90%; margin: 2em auto;">

    <form action="<?php print(_APP_URL);?>/app/calc.php" method="post" class="pure-form pure-form-stacked">
        <legend>Kalkulator Kredytowy</legend>
        <fieldset>
            <label for="id_amount">Kwota kredytu:</label>
            <input id="id_amount" type="text" name="amount" value="<?php out($amount); ?>" /><br/>

            <label for="id_years">Okres spłaty (lat):</label>
            <input id="id_years" type="text" name="years" value="<?php out($years); ?>" /><br/>

            <label for="id_apr">Wprowadź oprocentowanie kredytu w %</label>
            <input id="id_apr" type="text" name="apr" value="<?php out($apr); ?>" /><br/>

            <input type="submit" value="Oblicz" />
        </fieldset>
    </form>

    <?php
    if (isset($messages)) {
        if (count ( $messages ) > 0) {
            echo '<ol style="margin-top: 1em; padding: 1em 1em 1em 2em; border-radius: 0.5em; background-color: #f88; width:25em;">';
            foreach ( $messages as $key => $msg ) {
                echo '<li>'.$msg.'</li>';
            }
            echo '</ol>';
        }
    }
    ?>

    <?php if (isset($result)){ ?>
        <div style="margin-top: 1em; padding: 1em; border-radius: 0.5em; background-color: #ff0; width:25em;">
            <?php echo 'Wynik: '.$result.' zł'; ?>
        </div>
    <?php } ?>

</div>

</body>
</html>