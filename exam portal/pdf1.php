<?php
session_start();
require_once __DIR__ . '/vendor/autoload.php';
$html = $_SESSION['data'];
$data1=$_SESSION['data1'];
$data2=$_SESSION['data2'];
$data3=$_SESSION['data3'];

$mpdf = new \Mpdf\Mpdf();
$mpdf->imageVars['anits'] = file_get_contents('pics/anitsbanner.png');
$html = '<img src="var:anits" />';
$mpdf->WriteHTML($html);
$mpdf->setcolumns(3,'J',3);
$mpdf->WriteHTML($data1);
$mpdf->addcolumn();
$mpdf->WriteHTML($data2);
$mpdf->addcolumn();
$mpdf->WriteHTML($data3);
#$homepage = file_get_contents('https://www.google.com/search?q=gmail&oq=gmail&aqs=chrome..69i57j0l4j69i60l2j69i61.936j0j7&sourceid=chrome&ie=UTF-8');
#echo $homepage;
$mpdf->Output();
?>