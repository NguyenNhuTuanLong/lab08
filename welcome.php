<?php

session_start();


if (!isset($_SESSION['user'])) {
    header('Location: login.php'); 
    exit();
}


$pageTitle = "Secured Welcome Area"; 
$loggedInUser = $_SESSION['user'];


include 'header.inc'; 
?>

    <h1>Welcome to the Secured Home Page, <?php echo $loggedInUser; ?>!</h1>
    
    <p class="success">You have successfully authenticated. Your session is active.</p>

    <p><a href="logout.php">Click here to Logout</a></p>

<?php

include 'footer.inc'; 
?>