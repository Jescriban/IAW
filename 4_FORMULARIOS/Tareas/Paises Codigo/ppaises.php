<html>
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
<?php
include "./paises.php"
?>
<p>Seleccione un pais del siguiente menú:</p>
<form>
<div>
<label for="paises">Paises:</label>
<select class="form-control" >
	<!-- ES-España -->
	<option value="0">Seleccione</option>
<?php
foreach ($paises as $valores => $cod):
echo '<option value="'.$valores .'">'. $valores . " - ". $cod .'</option>';
endforeach;
?>


</select>
</div>
</form>

</body>
</html>