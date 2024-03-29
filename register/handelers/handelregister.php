<?php
session_start();
include ("../core/function.php");
include ("../core/Validation.php");
$errors = [];

// check if request is post or not POST

if(checkRequestMethod('POST') && checkPostInput('name')) {
    foreach($_POST as $key => $value){
        $$key = sanitizeinput($value);
        // echo $key .": ". $value ."<br>";
    }
    // $name = sanitizeinput($_POST['name']). "<br>";
    // $email = sanitizeinput($_POST['email']). "<br>";
    // $pass = $_POST['pass']. "<br>";
    
    // echo $name;

        // validation password

    if (!requireval($name)){
        $errors[] = "name is required" ;
    }elseif (!minval($name , 3))
    {
        $errors[] = "name must be at least 3 characters";
    }elseif (!maxval($name , 25))
        $errors[] = "name must be at most 25 characters" ;

        // 

    if (!requireval($email)){
        $errors[] = "email is required" ;
    }elseif (!emailval($email))
        $errors[] = "email must be email" ;

        // validation password

    if (!requireval($pass)){
        $errors[] = "password is required" ;
    }elseif (!minval($pass , 7))
    {
        $errors[] = "password must be at least 7 characters and @$#%";
    }elseif (!maxval($pass , 25))
        $errors[] = "password must be at most 25 characters and @$#%" ;

    if (empty($errors)){
        // علشان نفتح الملف وتقراه و نعدل فيه اضافة او حذف 
        // fopen =>> https://youtu.be/CSMyqMHm0Hs?si=qkKifDS8eNClAgwd
        $data = array(
            "name" => "ahmed",
            "email" => "ahmed@gmail.com",
            "pass" => "2222222222222"
        ); 
        $users_file = json_encode($data);
        file_get_contents("/data/users.json");
        // لتخزين الداتا جوا الملف 
        // fputcsv($users_file, $data);
        //  redirection
        $_SESSION['auth'] = $data;
        redirect("../index.php");
        die;
    }else{
        $_SESSION['errors'] = $errors;
        redirect("../register.php");
        die;
    }

}else {
echo "=>> NO Request method :)";
}