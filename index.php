<?php  
	session_start();
	include 'config/config.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Variedades 10 y 15</title>
	<link rel="stylesheet" href="css/styles.css">
</head>
<body>
	<?php 
		if($pdo){
			$sql = "SELECT * FROM productos WHERE codigo_producto = '284'";

			$stmt = $pdo->prepare($sql);


			$stmt->execute();                                                                                                                                                     

			$res = $stmt->fetchall(PDO::FETCH_ASSOC);

			foreach ($res as $fila) {
	    		echo "<p>nombre producto: " . htmlspecialchars($fila['nombre_producto']) . "</p>";

			}
		}

	 ?>
</body>
</html>