<?php

error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);

require_once '../includes/PHPExcel.php';

if(!$_GET['o_id']){
    echo "please input right URL";
    die;
}

$id = intval($_GET['o_id']);

$servername = "db.luddy.indiana.edu";
$username = "i494f21_team21";
$password = "my+sql=i494f21_team21";
$dbname = "i494f21_team21";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if ($conn->connect_error) {
    die("Connection failed: " .$conn->connect_error);
}
$sql_select = "SELECT * FROM organizations where o_id=".$id;
$select = mysqli_query($conn, $sql_select);


$data = mysqli_fetch_assoc($select);

if(!$data){
    echo 'no data selected';
}else{
   
    $filename="organization_".$id.".xls";
    // Create new PHPExcel object
    $objPHPExcel = new PHPExcel();
    // Set document properties
    $objPHPExcel->getProperties()->setTitle("Organization");
    
   
    $objPHPExcel->setActiveSheetIndex(0)
                ->setCellValue('A1', 'o_id')
                ->setCellValue('B1', 'name')
                ->setCellValue('C1', 'phone')
                ->setCellValue('D1', 'bio')
                ->setCellValue('D1', 'picProfile');

    $objPHPExcel->setActiveSheetIndex(0)
                ->setCellValue('A2', $data['o_id']) 
                ->setCellValue('B2', $data['name'])
                ->setCellValue('C2', $data['phone'])
                ->setCellValue('D2', $data['bio'])
                ->setCellValue('D2', $data['picProfile']);

    
    header('Content-Type: application/vnd.ms-excel');
    header('Content-Disposition: attachment;filename="'.$filename.'"');
    header('Cache-Control: max-age=0');
    header('Cache-Control: max-age=1');
    header ('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
    header ('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT'); // always modified
    header ('Cache-Control: cache, must-revalidate'); 
    header ('Pragma: public');
    $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
    $objWriter->save('php://output');
    exit;
}
?>