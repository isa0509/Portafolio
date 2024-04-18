!<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dias de la semana</title>
<head>
<body>
    <?php
$Diasdelasemana = array("Lunes", "Martes","Miércoles","Jueves","Viernes","Sábado","Domingo");
echo "<table border='1'>";
echo "<tr><th>Ciudad</th><th>";
echo "</table>";

for ($i=0;$i<count($Diasdelasemana);$i++) {
    echo $Diasdelasemana[$i]."<br>";
}

?>

</body>
</html>