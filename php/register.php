
<?php

// this page is to store the register data or information  into the mysqldb
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$username = $_POST['username'];

// Database connection
$conn = new mysqli('localhost','root','',' ajaxcrud');
if($conn->connect_error){
    echo "$conn->connect_error";
    die("Connection Failed : ". $conn->connect_error);
} else {
    $stmt = $conn->prepare("insert into inputformdata (name, username, email, password,) values(?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $name, $username,  $email, $password, );
    $execval = $stmt->execute();
    echo $execval;
    echo "Registration successfully...";
    $stmt->close();
    $conn->close();
}
?>

?>