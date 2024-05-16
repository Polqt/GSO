<?php
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
    
    if ($q) {
        echo "User added successfully.";
    } else {
        echo "Error adding user: " . mysqli_error($conn);
    }
}
?>
