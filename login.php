<?php
include 'header.inc'; 
?>

<h1>User Login Form</h1>

<form method="post" action="process.php">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required><br><br>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required><br><br>

    <input type="hidden" name="token" value="JD1234567">

    <input type="submit" value="Login">
</form>

<?php
include 'footer.inc'; 
?>