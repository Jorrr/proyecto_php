<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, ">
<meta charset="utf-8">

<a href="Ejercicio1.php">ejercicio 1</a>
<a href="Ejercicio2.php">ejercicio 2</a>

<?php
if(!isset($_POST["Enviado"])){
echo"<p><form action='' method='post'><p>Ingrese las horas trabajadas</p>";
for($i=1;$i<=6;$i++){
	echo "<label for='dia$i'>Dia $i</label><input type='number' min='1' max='8'name='dia$i' id='dia$i'/>";
 }
 echo "<input type='submit' name='Enviado' value='Calcular' id='envio'></form>";
}
else{
	$i=1;
	$TotalHoras=0;
	$Salario=0;
	while($i<=6)
	{
		$TotalHoras+=$_POST["dia$i"];
		$i++;
	}
	$Salario=$TotalHoras*10;
	echo "<p>Total de horas trabajadas $TotalHoras</p><p>Pago por hora 10</p><p>El salario devengado es: $Salario</p>
	<p><a href='Ejercicio2.php'>Ir al inicio</a></p>";
}
?>
</body>
</html>

