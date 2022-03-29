<?php

// CONNECT DATABASE
$servername = "db.luddy.indiana.edu";
$username = "i494f21_team21";
$password = "my+sql=i494f21_team21";
$dbname = "i494f21_team21"; 
$conn = mysqli_connect($servername,$username,$password,$dbname);
if ($conn->connect_error) {
    die("Connection failed: " .$conn->connect_error);
}
$search_name = $_POST['name'];
$sql = "SELECT name,email,phone FROM organizations WHERE name LIKE '%$search_name%'";
$result = mysqli_query($conn, $sql);
if(!$result) {
    echo $sql;
} else{
    while($data = mysqli_fetch_assoc($result)) {
        $data_search[] = $data;
    }
}
if (empty($data_search[0])){
  $data_search = 'no data';
}
$data_json = json_encode($data_search);

echo $data_json;
?>