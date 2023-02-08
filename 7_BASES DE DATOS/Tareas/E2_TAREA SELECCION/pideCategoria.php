<!DOCTYPE html>
<!--
3. Selecciona una Categoría y aparece la lista de productos (idProducto, Nombre, bonus: nombre del proveedor)
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        //Nos conectamos a la base de datos
        //data source name (nombre del origen de datos)
        $dsn = "mysql:host=localhost;dbname=bendetto"; //;charset=utf8
        $usuario = "alumno";
        $contraseña = "alumno";
        // intentamos crear un objeto  do conexion, con try, si no se lanza una 
        //PDOException
        try {
            //new PDO(<parametros>)
            $conexion = new PDO($dsn, $usuario, $contraseña);
        } catch (PDOException $e) {
            //mostramos el mensaje de error
            echo 'Falló la conexión: ' . $e->getMessage();
            exit();
        }
        //Generamos un formulario con las categorías
        $consulta = "SELECT * FROM categorias;";
        $resultado = $conexion->query($consulta);
        //CON LA FUNCION (no FUNCIONa jaja)
        function formulario($resultado) {
            $form = '<form action="listaProductos.php" method="post">'
                    . '<label for="categoria">Selecciona la categoría: </label>'
                    . '<select name="categoria" id="categoria>"';
            // <option value="audi">Audi</option>
            while ($categoria = $resultado->fetch()) {
                $form .= '<option value="' . $categoria['Nombre'] . '">'
                        . $categoria['Nombre'] . "</option>";
            }
            $form .= '</select><br><br><input type="submit" value="CONSULTAR"></form>';
            return $form;
        }
        //SIN LA FUNCION
        $form = '<form action="listaProductos.php" method="post">'
                . '<label for="categoria">Selecciona la categoría: </label>'
                . '<select name="categoria" id="categoria>"';
        // <option value="audi">Audi</option>
        while ($categoria = $resultado->fetch()) {
            $form .= '<option value="' . $categoria['Nombre'] . '">'
                    . $categoria['Nombre'] . "</option>";
        }
        $form .= '</select><br><br><input type="submit" value="CONSULTAR"></form>';
        echo $form;
        ?>
    </body>
</html>
