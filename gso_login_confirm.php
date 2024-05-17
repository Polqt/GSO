<?php

$conn = mysqli_connect("localhost", "root", "", "gso") or die(mysqli_error($conn));

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "select * from student_acc where Username ='$username' and Password = '$password'";
$qry = mysqli_query($conn, $sql) or die(mysqli_error($conn));
$r = mysqli_fetch_assoc($qry);

if ($qry) {
    if (mysqli_num_rows($qry) == 1) {
        session_start();
        $_SESSION['ID'] = $r['AcctID'];
        echo $r['accttype'];  // Add this line to debug
        if (!empty($_SESSION['ID'])) {
            // Check the account type and redirect accordingly
            if (strtolower($r['accttype']) == 'student') {
                header("location:student-dashboard.html");
            } else {
                header("location:admin-dashboard.html");
            }
        } else {
            header("location:gso_login_error.php");
        }
    } else {
        header("location:gso_login_error.php");
    }
} else {
    header("location:index.php");
}

?>
