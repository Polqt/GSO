<?php
if (isset($_POST['retry']))
    header("location:index.php");
?>


<div class="wrapper">
    <h1>Login Error!</h1>

    <h3>Wrong User or Password! Please retry again.</h3>
    <form method="post">
        <input type="submit" name="retry" value="Return to Login" id="btn" />
    </form>
    <br />
    <i>Remember: If you have forgotten your credentials, please contact GSO or IT.</i>
</div>