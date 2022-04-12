<?php

//must have, for export excel;
//set code
header('Content-type: text/html; charset=utf-8');
//set Excel
header("Content-type:application/vnd.ms-excel");
//set Excel filename
header("Content-Disposition:filename=PHP_est.xls");
$servername = "db.luddy.indiana.edu";
$username = "i494f21_team21";
$password = "my+sql=i494f21_team21";
$dbname = "i494f21_team21";
$conn = mysqli_connect("$servername", "$username", "$password", "$dbname");
//determine data work or not
if (mysqli_connect_error($conn)) {
die("connection failed :".mysqli_connect_error());
}

//get data from sql database, set code 
mysqli_query($conn, "SET NAMES utf8");

$e_id = $_GET['e_id'];
// search from member database
$sql = "SELECT first_name,last_name,email,e_id FROM members where e_id=$e_id";
//$id = $_GET['id'];
//$sql = "SELECT first_name,last_name,email FROM members WHERE id=$id";

$result = $conn->query($sql);
//add header in excel
$filename = array("first name","last name","email");
foreach ($filename as $key => $value) {
//make sure excel has no error
$name = mb_convert_encoding($value, "gb2312" , "utf-8" );
echo $name."\t";
}
//Excel next row
echo "\n";

if ($result->num_rows > 0) {
    //related sets of data
    while($row = mysqli_fetch_array($result,MYSQLI_NUM)) {
// var_dump($row);exit;

    echo $row[0]."\t".$row[1]."\t".$row[2]."\t"."\t\n";
    }
    
    }else{
    echo "No query data!";
    }
    
    $conn->close();