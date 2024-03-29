<?php       

$data = array(
    "name" => $_POST("name"),
    "email" => $_POST("email"),
    "pass" => $_POST("pass")
); 
$users_file = json_encode($data);
file_get_contents("/data/users.json")
// لتخزين الداتا جوا الملف 
// fputcsv($users_file, $data);
//  redirection
$_SESSION['auth'] = $data;
redirect("../index.php");

