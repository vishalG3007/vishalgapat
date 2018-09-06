<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
</head>
<body>


<?php

if (isset($_POST["submit"])) {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "contact_form";

    $Name=$_POST["name"];
    $Mail=$_POST["mail"];
    $Message=$_POST["message"];
    echo "".$Name." ".$Mail." ".$Message;

    $conn = new mysqli($servername,$username,$password,$dbname);

    if($conn->connect_error){
        die("connection failed:" . $conn->connect_error);
    }

    $sql = "INSERT INTO contact(name,mail,message) VALUES ('".$_POST["name"]."','".$_POST["mail"]."','".$_POST["message"]."')";

    if (mysqli_query($conn, $sql)) { 
        echo "New record created successfully"; 
     } else { 
        echo "Error: " . $sql . "" . mysqli_error($conn); 
     } 
     $conn->close(); 
}

?>
</body>
</html>
