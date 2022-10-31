<?php

include "vendor/autoload.php";

use PhpOffice\PhpSpreadsheet\IOFactory;

$inputFileName = 'contoh.xls';
$spreadsheet = IOFactory::load($inputFileName);
$sheetData = $spreadsheet->getActiveSheet()->toArray(null, true, true, true);
var_dump($sheetData);