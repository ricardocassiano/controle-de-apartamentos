<?php
	session_start();
	$numero = $_SESSION['numero'];
	$bloco = $_SESSION['bloco'];
	$dependencias = $_SESSION['dependencias'];
	$aquisicao = $_SESSION['aquisicao'];
	$status = $_SESSION['status'];
	$preco = $_SESSION['preco'];
	//echo $numero;
	
	
	require('fpdf/fpdf.php');
	
	
	$pdf = new FPDF();
	$pdf->AddPage();
	$pdf->SetFont('Arial','B', 16);
	$pdf->Cell(40,10,'Resultado:');
	$pdf->ln(7);
	$pdf->SetFont('Arial','B',13);
	$pdf->Cell(40,10,'Apartamento: '.$numero);
	$pdf->ln(5);
	$pdf->SetFont('Arial','B',13);
	$pdf->Cell(40,10,'Bloco: '.$bloco);
	$pdf->ln(5);
	$pdf->SetFont('Arial','B',13);
	$pdf->Cell(40,10,utf8_decode('Dependências: ').$dependencias);
	$pdf->ln(5);
	$pdf->SetFont('Arial','B',13);
	$pdf->Cell(40,10, $aquisicao);
	$pdf->ln(5);
	$pdf->SetFont('Arial','B',13);
	$pdf->Cell(40,10,utf8_decode($status));
	$pdf->ln(5);
	$pdf->SetFont('Arial','B',13);
	$pdf->Cell(40,10,utf8_decode('Preço: R$ ').$preco.',00');
	$pdf->Output();
	
?>