<?php

$conn = mysqli_connect("localhost", "root", "", "gso") or die(mysqli_error($conn));

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "select * from student_acc where Email ='$email' and Password = '$password'";
$qry = mysqli_query($conn, $sql) or die(mysqli_error($conn));
$r = mysqli_fetch_assoc($qry);

if ($qry) {
    if (mysqli_num_rows($qry) == 1) {
        session_start();
        $_SESSION['ID'] = $r['AcctID'];
        if (!empty($_SESSION['ID'])) {
            header("location:gso_add_user.php");
        } else {
            header("location:gso_login_error.php");
        }
    } elseif (mysqli_num_rows($qry) <= 0) {
        $sql = "select * from student_acc where Email ='$email' and Password = '$password'";
        $qry = mysqli_query($conn, $sql) or die(mysqli_error($conn));
        $r = mysqli_fetch_assoc($qry);
        if ($qry) {
            if (mysqli_num_rows($qry) == 1) {
                session_start();
                $_SESSION['ID'] = $r['AcctID'];
                if (!empty($_SESSION['ID'])) {
                    header("location:gso_add_user.php");
                } else {
                    header("location:gso_login_error.php");
                }
            } elseif (mysqli_num_rows($qry) <= 0) {
                $sql = "select * from student_acc where Email ='$email' and Password = '$password'";
                $qry = mysqli_query($conn, $sql) or die(mysqli_error($conn));
                $r = mysqli_fetch_assoc($qry);
                if ($qry) {
                    if (mysqli_num_rows($qry) == 1) {
                        session_start();
                        $_SESSION['ID'] = $r['AcctID'];
                        if (!empty($_SESSION['ID'])) {
                            header("location:gso_add_user.php");
                        } else {
                            header("location:gso_login_error.php");
                        }
                    } else {
                        header("location:gso_login_error.php");
                    }

                }

            } else {
                header("location:gso_login_error.php");
            }
        } else {
            header("location:gso_login_error.php");
        }
    } else {
        header("location:gso_login_error.php");
    }
} else {
    header("location:gso_login_error.php");
}