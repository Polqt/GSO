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
}
?>

<div class="wrapper">
    <form method="post" action="gso_add_user.php">
        <h3>New user added! Please inform the student or faculty that their account is ready.</h3>
        <input type="submit" name="return" value="Return to Add User" id="btn" />
    </form>
</div>