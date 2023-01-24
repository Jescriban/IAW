<!DOCTYPE html>
<html>
    <head>
        <title>F1_juegoCapitales</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <form action="F1_comprobarCapital.php" method="POST">
            <fieldset>
                <legend>SELECCIONA PAIS</legend>
                <select size="1" name="pais">
                    <?php
                    include './F1_relacionPaisesEU.php';
                    $paises8 = array_keys($EU);
                    shuffle($paises8);
                    foreach ($paises8 as $value) {
                        $html .= "<option value=" . $value . ">" . $value . "</option>";
                    }
                    echo $html
                    ?>
                </select>
            </fieldset> 
            <fieldset>
                <legend>SELECCIONA CAPITAL</legend>
                <select size="1" name="capital">
                    <?php
                    include './F1_relacionPaisesEU.php';
                    $capitales8 = array_values($EU);
                    shuffle($capitales8);
                    foreach ($capitales8 as $value) {
                        $html2 .= "<option value=" . $value . ">" . $value . "</option>";
                    }
                    echo $html2
                    ?>
                </select>
            </fieldset> 
            <input type="submit" value="COMPROBAR"/>
        </form>
    </body>
</html>
