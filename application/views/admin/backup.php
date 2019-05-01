<?php
//============================================================+
// File name   : example_005.php
// Begin       : 2008-03-04
// Last Update : 2013-05-14
//
// Description : Example 005 for TCPDF class
//               Multicell
//
// Author: Nicola Asuni
//
// (c) Copyright:
//               Nicola Asuni
//               Tecnick.com LTD
//               www.tecnick.com
//               info@tecnick.com
//============================================================+

/**
 * Creates an example PDF TEST document using TCPDF
 * @package com.tecnick.tcpdf
 * @abstract TCPDF - Example: Multicell
 * @author Nicola Asuni
 * @since 2008-03-04
 */

// Include the main TCPDF library (search for installation path).
// require_once('tcpdf_include.php');

// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Nicola Asuni');
$pdf->SetTitle('TCPDF Example 005');
$pdf->SetSubject('TCPDF Tutorial');
$pdf->SetKeywords('TCPDF, PDF, example, test, guide');

// set default header data
$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.' 005', PDF_HEADER_STRING);

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
	require_once(dirname(__FILE__).'/lang/eng.php');
	$pdf->setLanguageArray($l);
}

// ---------------------------------------------------------

// set font
$pdf->SetFont('times', '', 10);

// add a page
$pdf->AddPage('L', 'A4');
// set cell padding
$pdf->setCellPaddings(1, 1, 1, 1);

// set cell margins
$pdf->setCellMargins(1, 1, 1, 1);

// set color for background
$pdf->SetFillColor(255, 255, 127);

$title = <<<EOO
<h3>LPP RRI YOGYAKARTA</h3>
EOO;
$pdf->WriteHTMLCell(0,0,'','',$title,0,1,0,true,'C',true);

$head = <<<EOO
<h2>LAPORAN CAPAIAN KINERJA</h2>
EOO;
$pdf->WriteHTMLCell(0,0,'','',$head,0,1,0,true,'C',true);

$table='<table style="border:1px solid #000;padding:6px">';
$table .='<tr>
		<th style="border:1px solid #000;">No</th>
		<th style="border:1px solid #000;">Kegiatan Pekerjaan (Input)</th>
		<th style="border:1px solid #000;">Waktu (Durasi)</th>
		<th style="border:1px solid #000;">Waktu</th>
		<th style="border:1px solid #000;">Hasil Pekerjaan (Output)</th>
		</tr>';
$no=1;
foreach ($data_laporan as $laporan) {
$table .='<tr>
		<th style="border:1px solid #000;">'.$no++.'</th>
		<th style="border:1px solid #000;">'.$laporan['kegiatan'].'</th>
		<th style="border:1px solid #000;">'.$laporan['durasi'].'</th>
		<th style="border:1px solid #000;">'.$laporan['waktu'].'</th>
		<th style="border:1px solid #000;">'.$laporan['hasil'].'</th>
	 </tr>';
}
$table .='</table>';
$pdf->WriteHTMLCell(0,0,'','',$table,0,1,0,true,'C',true);		
// move pointer to last page
$pdf->lastPage();

// ---------------------------------------------------------

//Close and output PDF document
ob_clean();
$pdf->Output('Laporan_Harian.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+
