<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width">
<link rel="stylesheet" href="style.css">

</head>
<body>
	
<form action="">
	<a href="index.php">inicio</a>
<a href="Ejercicio1.php">ejercicio 1</a>
<a href="Ejercicio2.php">ejercicio 2</a>
</form>

<?PHP
 if(isset($_REQUEST["Envio2"])){
	$aves=[];
	$contador=1;
	$total=$_REQUEST["cantidad"];
	  while($contador <= $total){
		$aves[$contador-1]=$_REQUEST["Ave".$contador];
		$contador++;
	  }
	  sort($aves);
   
	for($i=1;$i<=$_REQUEST["cantidad"];$i++){
		$nombre=$aves[$i-1];
		 echo "<p>$nombre</p>";
	 }
	 echo "<p><a href='index.php'>Ir al inicio</a></p>";
 }
 else{
 if(isset($_REQUEST["Enviado"])){
	 $cantidad=$_REQUEST["CantidadAves"];
	 echo "<form action='' method='post'>";
	 for($i=1;$i<=$cantidad;$i++){
		 echo "<label for='Ave$i'>Ave $i</label><input type='text' id='Ave$i' name='Ave$i' />";
	 }
	 echo "<input type='submit' name='Envio2' value='Ordenar aves' id='Envio'/>
	 <input type='hidden' value='$cantidad' name='cantidad'/>
	 </form>";
 }
  else{
	 echo '<form action="" method="post">
           <label >Cantidad de aves:</label>
			<input type="text" name="CantidadAves" id="CantidadAves"/>
            <input type="submit" value="Registrar aves" name="Enviado" id="Envio"/>
            </form>';
  }
 }
?>
</body>
</html>