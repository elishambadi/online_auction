<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "keysian";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$item=$_POST['pname'];
$amount=$_POST['amount'];
$image=$_FILES['image']['name'];
$price=$_POST['price'];
$date_created=$_POST['date_created'];
$description=$_POST['description'];

    $sql = "INSERT INTO auctionsitems(pname,amount,image,price,date_created,description)
VALUES ('$pname', '$amount','$image','$price','$date_created','$description')";
        if ($conn->query($sql) === TRUE) {
    echo "Records entered successfully";
 header('Location:tester1.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$insert= $conn->query("SELECT item, amount, image ,price,date_created,status FROM Users");
?>