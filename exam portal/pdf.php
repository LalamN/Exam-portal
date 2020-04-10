<?php
session_start();
require_once __DIR__ . '/vendor/autoload.php';
$html = $_SESSION['data'];
$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML($html);
$mpdf->Output();
?>