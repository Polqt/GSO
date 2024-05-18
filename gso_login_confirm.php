<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $conn = mysqli_connect("localhost", "root", "", "gso") or die(mysqli_error($conn));


    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $sql = "SELECT * FROM student_acc WHERE Username ='$username' AND Password = '$password'";
    $qry = mysqli_query($conn, $sql) or die(mysqli_error($conn));
    $r = mysqli_fetch_assoc($qry);

    print_r($r);

    if ($qry) {
        if (mysqli_num_rows($qry) == 1) {
            $_SESSION['AcctID'] = $r['AcctID']; 
            $_SESSION['AcctType'] = strtolower($r['AcctType']); 

            if ($_SESSION['AcctType'] == 'student') {
                header("location: student-dashboard.php");
                exit(); 
            } elseif ($_SESSION['AcctType'] == 'faculty') { 
                header("location: admin-dashboard.php");
                exit(); 
            } 
        } else {
            header("location: gso_login_error.php");
            exit(); 
        }
    } else {
        header("location: index.php");
        exit(); 
    }
}    
?>
