<?php

	$conexion = new mysqli("localhost","root","123","aerolineas");
	

	$nombre    = $_POST ['nombre'];
	$correo    = $_POST ['correo'];
	$numero    = $_POST ['numero'];
	$noTarjeta = $_POST ['noTarjeta'];
	$cv        = $_POST ['cv'];

	$query="Insert into ventras(nombre,correo,numero,noTarjeta,cv)  
			  values ('$nombre','$correo','$numero','$noTarjeta','$cv')";

	$resul=$conexion->query($query);
	

	require 'pdf/fpdf/fpdf.php';
		$pdf = new FPDF();
		$pdf ->AddPage();
		$pdf ->SetFont('Arial','B',15);

		$pdf -> setx(50);
		$pdf ->Cell(100, 10, "COMPROBANTE DE COMPRA", 1 , 1, 'C');

		$pdf ->SetFont('Arial','B',10);
		$pdf -> setx(50);
		$pdf ->Cell(100, 10, $_POST ['nombre'] . ", usted compro" 
				. " n " . " Boletos ", 1 , 1, 'C');

		$pdf ->SetFont('Arial','B',15);
		$pdf -> setx(50);
		$pdf ->Cell(50, 10, "Origen: Torreón" , 1 , 0, 'C');
		$pdf ->Cell(50, 10, "Destino: " , 1 , 1, 'C');

		$pdf -> setx(50);
		$pdf ->Cell(100, 10, "DATOS: ", 1 , 1, 'C');

		$pdf ->SetFont('Arial','B',10);
		$pdf -> setx(50);
		$pdf -> MultiCell(100, 10, 
							   " Correo: " . $_POST ['correo']  ."\n".
							   " Telefono: " . $_POST ['numero']."\n".
							   " NoTarjeta: " . $_POST ['noTarjeta']	
									, 1 , 'C', 0);


	// to get random number 
	
		$d=rand(1,30000000);

	$pdf -> setx(50);
	$pdf ->Cell(100, 10, "Numero referencia: " . $d, 1 , 1, 'C');


	$pdf ->Output();
?>