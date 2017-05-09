<?php
require('fpdf.php');
$d=date('d_m_Y');

class PDF extends FPDF
{

function Header()
{
	$this->Ln(15);
	//$this->Image('images/tuk.png',0,0,0);
    $this->SetFont('Helvetica','',25);
	$this->SetFontSize(25);
    //Move to the right
    //$this->Cell(80);
	$this->Cell(0,0,'TECHNICAL UNIVERSITY OF KENYA',0,0,'C');
    //Line break
    $this->Ln(20);
}

//Page footer
function Footer()
{
	$this->SetY(-25);
   $this->SetFont('Helvetica','',25);
   $this->SetFontSize(10);
    $this->Cell(0,10,'----------Online University LMS---------',0,0,'C');
}

//Load data
function LoadData($file)
{
	//Read file lines
	$lines=file($file);
	$data=array();
	foreach($lines as $line)
		$data[]=explode(';',chop($line));
	return $data;
}

//Simple table
function BasicTable($header,$data)
{ 

$this->SetFillColor(255,255,255);
//$this->SetDrawColor(255, 0, 0);
$w=array(15,45,25,70,15);
	
	
	//Header
	$this->SetFont('Arial','B',9);
	for($i=0;$i<count($header);$i++)
		$this->Cell($w[$i],7,$header[$i],1,0,'L',true);
	$this->Ln();
	
	//Data
	
	$this->SetFont('Arial','',10);
	foreach ($data as $eachResult) 
	{ //width
		$this->Cell(10);
		$this->Cell(15,6,$eachResult["number"],1);
		$this->Cell(45,6,$eachResult["fullname"],1);
		$this->Cell(25,6,$eachResult["regno"],1);
		$this->Cell(70,6,$eachResult["course"],1);
		$this->Cell(15,6,$eachResult["total"],1);
		$this->Ln();
		 	 	 	 	
	}
}

//Better table
}



$pdf=new PDF();

	

$header=array('RANK','FULL NAME','REG NO','COURSE','TOTAL');
//Data loading
//*** Load MySQL Data ***//
$objConnect = mysql_connect("localhost","root","") or die("Error:Please check your database username & password");
$objDB = mysql_select_db("university_lms");
$strSQL = "SELECT * FROM students ORDER BY score+quiz_score DESC LIMIT 20";
$objQuery = mysql_query($strSQL);
$rank = 1;
while ($q=mysql_fetch_array($objQuery)){
	$query="SELECT fullname FROM user WHERE user_id=$q[user_id]";
	$querys=mysql_query($query);
	$que=mysql_fetch_array($querys);
	
	$mydata=array(
	'number'=>$rank,
	'fullname'=>$que['fullname'],
	'regno'=>$q['regno'],
	'course'=>$q['course'],
	'total'=>$q['score']+$q['quiz_score']
	);
	
	$resultData[]=$mydata;			
	$rank++;
}
//************************//


//*** Table 1 ***//
$pdf->AddPage();

	$pdf->SetFont('Helvetica','',14);
	$pdf->Cell(68);
	$pdf->Write(5, 'Student LeaderBoard');
	$pdf->Ln();
	
	$pdf->Cell(22);
	$pdf->SetFontSize(8);
	$pdf->Cell(57);
	$result=mysql_query("select date_format(now(), '%W, %M %d, %Y') as date");
	while( $row=mysql_fetch_array($result) )
	{
		$pdf->Write(5,$row['date']);
	}
	$pdf->Ln();
	
	//count total numbers of visitors
	$result=mysql_query("SELECT * FROM students") or die ("Database query failed: $query" . mysql_error());
	
	$count = mysql_num_rows($result);
	$pdf->Cell(0);
	$pdf->Write(5, '             Total Students: '.$count.'');
	$pdf->Ln();

	$pdf->Ln(5);

$pdf->Ln(0);
$pdf->Cell(10);
$pdf->BasicTable($header,$resultData);
//forme();
//$pdf->Output("$d.pdf","F");
$pdf->Output();

?>