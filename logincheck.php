<!-- SESSION IS FOR THE MULTIPLE USER -->

<!-- TO CONNECT MYSQL DATA BASE ANDD CHECK ITS CONNECTED OR NOT  -->
<!-- METHOD 1 -->
<!-- <?php
mysqli_connect("localhost","root","","admincreate");

if (mysqli_connect_error())
{
    echo "Cannot Connect";
}
// else
// // {
// //     echo "connected";
// // }
// ?> -->

<!-- METHOD 2  -->
<!-- WITH SESSION -->
   <?php 
   session_start();
   $con = mysqli_connect('localhost', 'root');
   if($con){
       // echo "connention successfull";
   }else{
       echo "no connection"; 
   }

// TO CONNECT DB

$db = mysqli_select_db($con, 'anmol');

if(isset($_POST['submit']))
{
    $username = $_POST['user'];
    $password = $_POST['pass'];

    $sql = "select * from admintry where user = '$username' && pass = '$password' ";
    $query = mysqli_query($con,$sql);
    $row = mysqli_num_rows($query);

        if($row == 1){
            echo "login succesfull";
            $_SESSION['user'] = $username;
            header ('location:adminmainpage.php');
        }
        else{
            echo "login failed";
            header('location:adminlogin.php');
        }
}
?>