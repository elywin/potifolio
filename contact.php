<?php

$servername = "localhost";
$user = "root";
$pass = "";
$db = "subscription";

$conn = new mysqli($servername,$user,$pass,$db);

if($conn->error){
    echo "DB error ".$conn->error."";
}
else{
    echo "Connection successful";
}

if(isset($_POST['subscribe'])){
    echo "<br>";
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $sql = "insert into subscriptions (name,email,message) values ('$name','$email','$message')";

    if($conn->query($sql)){
        echo "message sent SUCCESSFULLY!!!";
    }
    else{
        echo "Error: ".$conn->error;
    }

}

?>
