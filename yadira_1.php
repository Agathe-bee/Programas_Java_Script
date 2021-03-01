<!--Fecha: 12_01_2021-->
<!--Autor: Fatima Azucena MC-->
<!--Correo: fatimaazucenamartinez274@gmail.com-->

<!--Solicite la edad y calcule si es mayor o menor de edad-->

<!DOCTYPE html>
<html>
	<head>
		<title>Edad</title>
		<meta charset="UTF-8">
	</head>
	<body>
		<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
			Digite su edad: <input type="text" name="valor">
			<input type="submit">
		</form>
		<?php
			if ($_SERVER["REQUEST_METHOD"] == "POST"){
				$edad = $_POST["valor"];

				if ( $edad > 18){
					echo "Usted es mayor de edad:D";
				} else {
					echo "Usted es menor de edad :(";
				}
			}
		?>
	</body>
</html>
