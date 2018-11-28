<?php



 // return $output;

  // require("fpdf/fpdf.php");
  //   $pdf=new FPDF();
  //   $pdf->Addpage();
  //   $pdf->Setfont("Arial","B",16);
  // $pdf->Cell(0,10,"welcome",1,1,"C");
  // $pdf->Cell(50,10,"name:",1,0);
  // $pdf->Cell(50,10,"name:",1,0);
  // $pdf->Cell(50,10,"name:",1,0);

 // $pdf->Cell(50,10,$row['name'],1,1);
 
    
// if(isset($_POST['submityear'])){
// 	echo "kjsbfkjbf";
// }
 // if(isset($_POST["submityea"])){
	require_once('../tcpdf/Tcpdf.php');
	
	 $obj_pdf= new TCPDF('p', PDF_UNIT, PDF_PAGE_FORMAT,true,'UTF-8',false);
	 $obj_pdf->SetCreator(PDF_CREATOR);
	 $obj_pdf->SetTitle("Report");
	 $obj_pdf->SetHeaderData(",",PDF_HEADER_TITLE, PDF_HEADER_STRING);
 $obj_pdf->SetHeaderFont(Array(PDF_FONT_NAME_MAIN,'',PDF_FONT_SIZE_MAIN));
	 // $obj_pdf->SetFooterFont(Array(PDF_FONT_NAME_DATÁ,'',PDF_FONT_SIZE_DATA));
	 $obj_pdf->SetDefaultMonospacedFont('helvetica');
	 $obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
	 $obj_pdf->SetMargins(PDF_MARGIN_LEFT,'10',PDF_MARGIN_RIGHT);
	 $obj_pdf->SetPrintHeader(false);
	$obj_pdf->SetPrintFooter(false);
	 $obj_pdf->SetAutoPageBreak(TRUE,10);
	 $obj_pdf->SetFont('helvetica','',11);
	 $obj_pdf->AddPage();
	$content='';
	$content .='<h4 align="center">Genarate Reports</h4><br /><table border="1" cellingspacing="0" cellpadding="3">
	<tr>
	  <th >Name</th>
	  <th >manager_id</th>
	  <th >Web Url</th>
	  <th >status</th>

	</tr>';


function fetch_date(){
	include('../includes/connection.php') ;
$output='';
$month=$_POST['month'];
$year=$_POST['year'];
  $startdate="$year-01-01";
  $enddate="$year-12-31";
  $sql="SELECT * FROM events WHERE date between '$startdate' and '$enddate'"  ;
  $query=mysqli_query($connection,$sql);
 
  while($row=mysqli_fetch_assoc($query)){
  	 // $row["name"];
 	$output.= '<tr>

 	            <td>'.$row["name"].'</td>
 	              <td>'.$row["manager_id"].'</td>
 	              <td>'.$row["web_url"].'</td>
 	               <td>'.$row["status"].'</td>
 	              


 	          </tr> ';
 	

 }
  return $output;
}
fetch_date();
	 $content.=fetch_date();
	 $content.='</table>';
	 $obj_pdf->writeHTML($content);
	 $obj_pdf->output('file.pdf','I');







 ?>