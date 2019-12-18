<?php
// mengaktifkan session
session_start();

// cek apakah user telah login, jika belum login maka di alihkan ke halaman login
if($_SESSION['status'] !="login"){
header("location:login.php");
}
// program pencetakan
// meng-include program fpdf
require "../asset/fpdf181/fpdf.php";
// jalankan perintah untuk membuat file pdf
// membuat object
// tampilkan data yang ada di database
// koneksi database
// $kode=$_REQUEST['kode'];
include '../config/config.php';
// select database

class PDF extends FPDF
{
// Page header
function Header()
{
    // Logo
    $this->Image('../img/logo_full.png',10,6,30);
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Move to the right
    $this->Cell(80);
    // Title
    $this->Cell(45,10,'Data Smartphone',1,0,'C');
    // Line break
    $this->Ln(40);
}

// Page footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
// Load data
function LoadData($file)
{
    // Read file lines
    $lines = file($file);
    $data = array();
    foreach($lines as $line)
        $data[] = explode(';',trim($line));
    return $data;
}

// Colored table
function FancyTable($header, $data)
{
    // Colors, line width and bold font
    $this->SetFillColor(255,0,0);
    $this->SetTextColor(255);
    $this->SetDrawColor(128,0,0);
    $this->SetLineWidth(.3);
    $this->SetFont('','B');
    // Header
    $w = array(38, 38, 38, 38, 38);
    for($i=0;$i<count($header);$i++)
        $this->Cell($w[$i],7,$header[$i],1,0,'C',true);
    $this->Ln();
    // Color and font restoration
    $this->SetFillColor(224,235,255);
    $this->SetTextColor(0);
    $this->SetFont('');
    // Data
    $fill = false;
    foreach($data as $row)
    {
        $this->Cell($w[0],6,$row[0],'LR',0,'L',$fill);
        $this->Cell($w[1],6,$row[1],'LR',0,'L',$fill);
        $this->Cell($w[2],6,$row[2],'LR',0,'L',$fill);
		$this->Cell($w[3],6,number_format($row[3]),'LR',0,'R',$fill);
		$this->Cell($w[4],6,number_format($row[4]),'LR',0,'R',$fill);
        $this->Ln();
        $fill = !$fill;
    }
    // Closing line
    $this->Cell(array_sum($w),0,'','T');
}
}



// penggunaan class fpdf
$p = new PDF();
// sediakan halaman
$header = array('Merek', 'Nama', 'Warna', 'Stok', 'Harga');

	$result=mysqli_query($koneksi,"SELECT * FROM data_hp");
	$i = 0;
	while($data_hp = mysqli_fetch_array($result)) {
		$i++;
		$data[$i] = array($data_hp['merek'],$data_hp['nama'],$data_hp['warna'],$data_hp['stok'],$data_hp['harga']);
	}
$p->SetFont('Arial','B',16);
$p->SetFillColor(0 , 0, 255);
$p->AddPage();
$p->FancyTable($header,$data);

// while($row=mysqli_fetch_assoc($result))
// {
// 	$p->Cell(38,8,$row['merek'],1,0);
// 	$p->Cell(38,8,$row['nama'],1,0);
// 	$p->Cell(38,8,$row['warna'],1,0);
// 	$p->Cell(38,8,$row['stok'],1,0);
// 	$p->Cell(38,8,$row['harga'],1,0);
// 	$posisiX = $p->GetX();
// 	$posisiY = $p->GetY();
// 	$panjang_logo=40;
// 	$padding_logo=intval(($kolom_logo-$panjang_logo)/2);
// 	//$p->Image("logo/".$row['logo'],$posisiX+$padding_logo,$posisiY,$panjang_logo,30); 
// }
// close connection
$p->Output();
?>






