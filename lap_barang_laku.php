<?php

$kode = "TRx-12344";
$nama_pembeli = "kivlan";
$tanggal = "25-02-2019";
$total_harga = "35000";
$alamat = "yeye";
$bayar = "akakak";
 
require('assets/pdf/fpdf.php');
$pdf = new FPDF("L","in",array(2.36,3.54));
$pdf->SetMargins(0,0,0,0);
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','B', 23);
$pdf->SetX(8);
$pdf->Cell(5,0.2,'Kepada Yth, '.$nama_pembeli,'R');
$pdf->Image('foto/SH.png',0.1,0.01,1.8,1.2);
$pdf->SetX(2);            
$pdf->MultiCell(19.5,0.2,'SUMBER HIDAYAH',0,'L');
$pdf->SetFont('times','',17);
$pdf->SetX(8);
$pdf->Cell(19.5,0.3,$alamat,0,'L');

$pdf->SetX(2);
$pdf->MultiCell(19.5,0.3,'Telp. : 081332363987',0,'L');    


$pdf->SetFont('Times','I',17);
$pdf->SetX(5.7);
$pdf->Cell(19.5,0.3,$kode,0,'C');
$pdf->SetX(2);
$pdf->MultiCell(19.5,0.2,'Tgl :'.$tanggal,0,'L');


$pdf->SetX(2);
$pdf->Cell(19.5,0.2,'Pembayaran : '.$bayar,0,'R');

$pdf->Line(0,1.2,12.5,1.2);
$pdf->SetLineWidth(0.05);      
$pdf->Line(0,1.3,12.5,1.3);   
$pdf->SetLineWidth(0);
$pdf->ln(0.5);

$pdf->SetFont('Times','',20);

$pdf->Cell(0.4, 0.4, 'NO', 1, 0, 'C');
$pdf->Cell(5, 0.4, 'Nama Barang', 1, 0, 'C');
$pdf->Cell(0.6, 0.4, 'Qty', 1, 0, 'C');
$pdf->Cell(1.01, 0.4, 'Jumlah', 1, 0, 'C');
$pdf->Cell(2.02, 0.4, 'harga', 1, 0, 'C');
$pdf->Cell(2.8, 0.4, 'Total harga', 1, 1, 'C');


$no=1;

while($no < 5){
	$pdf->Cell(0.4, 0.4, $no , 0, 'C');
	$pdf->Cell(0.01, 0.4,"",1, 0, 'R');
	$pdf->Cell(3.9, 0.4,"Toples cantik",0, 0, 'L');
	$pdf->Cell(1.09, 0.4,"@1pcs",0, 0, 'L');
	$pdf->Cell(0.01, 0.4,"",1, 0, 'R');
	$pdf->Cell(0.58, 0.4,"1",0, 0, 'C');
	$pdf->Cell(0.01, 0.4,"",1, 0, 'R');
	$pdf->Cell(1, 0.4,"1-1", 0, 0,'C');
	$pdf->Cell(0.01, 0.4,"",1, 0, 'R'); 
	$pdf->Cell(2.01, 0.4, "Rp. 50000 ,-", 0, 0,'C');
	$pdf->Cell(0.01, 0.4,"",1, 0, 'R');
	$pdf->Cell(3, 0.4, "Rp. 40000,-",0, 1, 'C');
	
	
	$no++;
}
$pdf->SetFont('Times','B', 19);

$pdf->ln(0.6);
$pdf->Cell(5,0.3,'Tanda Terima, ',0,'L');
$pdf->SetX(8.3);
$pdf->Cell(5,0.3,'Hormat kami, ',0,'R');
$pdf->SetX(3.5);
$pdf->Cell(5,0.8,' [ Terima Kasih! Sukses selalu :) ]',0,'R');
$pdf->Output($tanggal."_".$nama_pembeli.".pdf","I");

?>

