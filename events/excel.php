<?php

error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);

// require_once '../includes/PHPExcel.php';

$servername = "db.luddy.indiana.edu";
$username = "i494f21_team21";
$password = "my+sql=i494f21_team21";
$dbname = "i494f21_team21";
// Create connection
$conn = mysqli_connect($servername,$username,$password,$dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " .$conn->connect_error);
}
$sql_select = "SELECT * FROM members";
$select = mysqli_query($conn, $sql_select);


$filename="members.xls";
// Create new PHPExcel object
$objPHPExcel = new PHPExcel();
// Set document properties
$objPHPExcel->getProperties()->setTitle("members");


$objPHPExcel->setActiveSheetIndex(0)
            ->setCellValue('A1', 'username') 
            ->setCellValue('B1', 'first_name')
            ->setCellValue('C1', 'last_name')
            ->setCellValue('D1', 'dob')
            ->setCellValue('E1', 'email');


$i = 1;
while ($data = mysqli_fetch_assoc($select)) { 
    $i++;
    $objPHPExcel->setActiveSheetIndex(0)
                ->setCellValue('A'.$i, $data['username']) 
                ->setCellValue('B'.$i, $data['first_name'])
                ->setCellValue('C'.$i, $data['last_name'])
                ->setCellValue('D'.$i, $data['dob'])
                ->setCellValue('E'.$i, $data['email']);
}

if($i==1){
    echo "no member in database";
    die;
}else{
    header('Content-Type: application/vnd.ms-excel');
    header('Content-Disposition: attachment;filename="'.$filename.'"');
    header('Cache-Control: max-age=0');
    header('Cache-Control: max-age=1');
    header ('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
    header ('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT'); 
    header ('Cache-Control: cache, must-revalidate'); 
    header ('Pragma: public'); 
    $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
    $objWriter->save('php://output');
    exit;
}
?>