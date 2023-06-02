<?php
session_start();
if (!isset($_SESSION['user'])){
    header('location:adminlogin.php');
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Main Page</title>
    <link rel ="stylesheet" type = "text/css" href = "adminmainstyle.css">
    <link rel="icon" href="iconfinder_text.png" type="image/png">
    <?php  include 'links.php' ?>
</head>
<body>
<div class ="container" id="cont">
    <div class = " heading text-center text-uppercase text-black mb-5 "> WElCOME TO MY ADMIN PAGE. 
        <?php echo $_SESSION['user']?>
    </div>
    <a href ="logout.php" id="btn2" class = "btn btn-danger">Logout</a>
</div>
<div class="content">
    <div class="box">
        <h3>YOUR QUERY</h3>
        <p>From here, admins can help user queries by replying to them.</p>
        <a href="comment.php">Your Query</a>
    </div>
    <div class="box">
        <h3>HOME</h3>
        <p>This interface allows administrators to access their website and browse through it.</p>
        <a href="home.html">Home</a>
    </div>
</div>    
</body>
</html>