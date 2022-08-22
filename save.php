<?php
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$passward = $_POST['passward'];
$cell = $_POST['cell'];

$conn = mysqli_connect("localhost", "root", "", "crud");

if ($conn==true){

    $query = "INSERT INTO user_reg(firstName, lastName, gender, email, passward, cell) VALUES ('$firstName','$lastName','$gender','$email','$passward','$cell')";

    mysqli_query($conn, $query);
    header("location: index.html");
 
}else{
    echo "connection not done";
}

?>