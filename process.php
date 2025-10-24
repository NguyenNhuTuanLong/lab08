<?php
session_start();


if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: login.php'); 
    exit(); 
}


$submitted_username = isset($_POST['username']) ? htmlspecialchars($_POST['username']) : 'Not provided';
$submitted_password = isset($_POST['password']) ? htmlspecialchars($_POST['password']) : 'Not provided';
$submitted_token    = isset($_POST['token'])    ? htmlspecialchars($_POST['token'])    : 'Not provided';


$correct_username = 'TuanLong';    
$correct_password = '13112007';   
$login_status = "Login failed! Invalid credentials."; 

if ($submitted_username === $correct_username && $submitted_password === $correct_password) {
    
    $_SESSION['user'] = $submitted_username; 
    $login_status = "Login successful! Session set.";
    
    
    header('Location: welcome.php'); 
    exit();

} else {
    unset($_SESSION['user']);
}


include 'header.inc'; 
?>

    <h2>Login Processing Successful! (Data Received)</h2>
    <p>Authentication Status: <strong style="color: red;"><?php echo $login_status; ?></strong></p>
    <?php
include 'footer.inc'; 
?>