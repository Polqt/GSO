<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();
$conn = mysqli_connect("localhost", "root", "", "gso") or die(mysqli_error($conn));

if (isset($_POST['submit'])) {
    $AcctID = $_POST['acctid'];
    $AcctType = $_POST['accttype'];
    $FirstName = $_POST['firstname'];
    $LastName = $_POST['lastname'];
    $Username = $_POST['username'];
    $Password = $_POST['password'];
    $Birthday = $_POST['birthday'];

    $sql = "INSERT INTO student_acc (acctId, accttype, firstname, lastname, username, password, birthday) VALUES ('$AcctID','$AcctType','$FirstName', '$LastName', '$Username', '$Password', '$Birthday')";
    $q = mysqli_query($conn, $sql) or die(mysqli_error($conn));

    if($q){
        header("Location: index.php");
        exit;
    }
}
?>
