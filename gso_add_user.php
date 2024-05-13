<div class="wrapper">
<form action="gso_add_user_confirm.php" method="post">
    <h1>New User Account</h1>
    <h4>Account Type:</h4>
        <select name="accttype">
        <option value="Student">Student</option>
        <option value="Faculty/Staff">Faculty / Staff</option>
            <id="accttype" name="accttype">
    </select>
    <h3>Personal Details</h3>
    <p>Please refer to the form that the user has submitted for registration</p>
    <label for="firstname"><b>First Name </b></label>
    <input type="text" name="firstname" id="firstname" /><br />
    <label for="lastname"><b>Last Name</b></label>
    <input type="text" name="lastname" id="lastname" /><br /><br />
    <label for="acctid"><b>Account ID</b></label>
    <input type="text" name="acctid" id="acctid" /><br />
        <form method="post">
        <label for="birthday">Select Your Birthday:</label>
        <input type="date" id="birthday" name="birthday"><br><br>
    <label for="username"><b>Username</b></label>
    <input type="text" name="username" id="username" /><br /><br />
    <label for="password"><b>User Password</b></label>
    <input type="text" name="password" id="password" /><br />
    <i>For password, default format is: First Initial + Last Initial + University ID (TD00000)</i><br />
    <input type="submit" name="submit" value="Submit" id="btn" />

</form>
</div>
