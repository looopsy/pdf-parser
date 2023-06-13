<?php use setasign\Fpdi\Fpdi;
use setasign\Fpdi\PdfReader;

require('./fpdf185/fpdf.php');
require_once('./FPDI-2.3.7/src/autoload.php');

// $FIO = $_POST["FIO"];
$array = [
    [
        "key" => "NOMER",
        "coordinates" => [
            "x" => 120,
            "y" => 38
        ]
    ],
    [
        "key" => "BUKH_RANK",
        "coordinates" => [
            "x" => 68,
            "y" => 232
        ]
    ],
    [
        "key" => "BUKH_FIO",
        "coordinates" => [
            "x" => 120,
            "y" => 232
        ]
    ],

];
$NOMER = $_POST["NOMER"];


$pdf = new Fpdi();
$pageCount = $pdf->setSourceFile('./example-pdf.pdf');
$pageId = $pdf->importPage(1, PdfReader\PageBoundaries::MEDIA_BOX);

$pdf->addPage();
$pdf->SetFont('Arial', '', 12);

for ($i = 0; $i < count($array); $i++) {
    $item = $array[$i];
    $pdf->SetXY($item["coordinates"]["x"], $item["coordinates"]["y"]);
    $pdf->write(10, $_POST[$item["key"]]);
}



$pdf->ln(10);

$pdf->useImportedPage($pageId, 0, 0, 200);

$pdf->Output('I', 'generated.pdf');