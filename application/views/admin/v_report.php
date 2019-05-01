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

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__) . '/lang/eng.php')) {
	require_once(dirname(__FILE__) . '/lang/eng.php');
	$pdf->setLanguageArray($l);
}

// ---------------------------------------------------------

// set font
$pdf->SetFont('times', '', 12);

// add a page
$pdf->AddPage('L', 'A4');
// set cell padding
// $pdf->setCellPaddings(1, 1, 1, 1);

// set cell margins
$pdf->setCellMargins(1, 1, 1, 1);

// set color for background
$pdf->SetFillColor(255, 255, 127);

$title = <<<EOO
<h3>LPP RRI YOGYAKARTA</h3>
EOO;
$pdf->WriteHTMLCell(0, 0, '', '', $title, 0, 1, 0, true, 'C', true);

$head = <<<EOO
<h2>LAPORAN CAPAIAN KINERJA</h2>
EOO;
foreach ($data_user as $user) {
	$pdf->WriteHTMLCell(0, 0, '', '', $head, 0, 1, 0, true, 'C', true);
	$nama = 'Nama     :' . $user['nama'] . '';
	$pdf->WriteHTMLCell(0, 0, '', 30, $nama, 0, 1, 0, true, 'L', true);
	$jabatan = 'Jabatan/Grade	:' . $user['jabatan'] . '/' . $user['grade'] . '';
	$pdf->WriteHTMLCell(0, 0, '', 30, $jabatan, 0, 1, 0, true, 'R', true);
	$nip = 'NIP      :' . $user['nomor_induk'] . '';
	$pdf->WriteHTMLCell(0, 0, '', 40, $nip, 0, 1, 0, true, 'L', true);
}
foreach ($data_laporan as $laporan) {
	$hari = 'Hari/Tanggal:' . $laporan['hari'] . '/' . $laporan['tanggal'] . '';
	$pdf->WriteHTMLCell(0, 0, '', 40, $hari, 0, 1, 0, true, 'R', true);
}
$table = '<table style="border:1px solid #000;padding:3px">';
$table .= '<tr>
		<th style="border:1px solid #000;">No</th>
		<th style="border:1px solid #000;">Kegiatan Pekerjaan (Input)</th>
		<th style="border:1px solid #000;">Waktu (Durasi)</th>
		<th style="border:1px solid #000;">Waktu</th>
		<th style="border:1px solid #000;">Hasil Pekerjaan (Output)</th>
		</tr>';
$no = 1;
foreach ($data_laporan as $laporan) {
	$table .= '<tr>
		<th style="border:1px solid #000;">' . $no++ . '</th>
		<th style="border:1px solid #000;">' . $laporan['kegiatan'] . '</th>
		<th style="border:1px solid #000;">' . $laporan['durasi'] . '</th>
		<th style="border:1px solid #000;">' . $laporan['waktu'] . '</th>
		<th style="border:1px solid #000;">' . $laporan['hasil'] . '</th>
	 </tr>';
}
$table .= '</table>';
$pdf->WriteHTMLCell(0, 0, '', '', $table, 0, 1, 0, true, 'C', true);
// move pointer to last page
$pdf->lastPage();

// ---------------------------------------------------------

//Close and output PDF document
ob_clean();
$pdf->Output('Laporan_Harian.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+
