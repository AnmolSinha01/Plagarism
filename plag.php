<?php

$result="";
if(isset($_POST['save']))
{	 
   $assignment1 = $_POST['assignment1'];
   $assignment2 = $_POST['assignment2'];
$new_str1 = str_replace(' ', '', $assignment1);
$new_str2 = str_replace(' ', '', $assignment2);


similar_text($new_str1,$new_str2,$percent);
if ($percent > 70) {
   $result = "THE TWO ASSIGNMENTS ARE " . $percent . "% SIMILAR THUS THE TWO ASSIGNMENTS ARE LIKELY TO BE UNAUTHENTIC";
    }if ($percent < 70) {
    $result = "THE TWO ASSIGNMENTS ARE " . $percent . "% SIMILAR THUS THE TWO ASSIGNMENTS ARE LIKELY TO BE AUTHENTIC";
    } 


}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Percentage Checker</title>
    <link rel="stylesheet" href="plagstyle.css">
    <link rel="icon" href="iconfinder_text.png" type="image/png">
</head>
<body>
    <section>
        <div class="cont">
                <header>
                    <a href="home.html" class="logo">
                    <img src="logo4.png">
                    </a>
                    <ul>
                        <li><a href="home.html" class="active">Home</a></li>
                        <li><a href="faq.php">FAQ</a></li>
                        <li><a href="query.php">Our Query</a></li>
                        <li><a href="team.html">Team</a></li>
                        <li><a href="contact.php">Contact us</a></li>
                        
                    </ul>
                </header>
            <form action="plag.php" method="POST" enctype="multipart/form-data"> 
                <div class="a">
                    <h2><u>Percentage Checker</u></h2>
                    <p>Percentage Checker is another kind of plagiarism checker where you can enter two documents and receive the result as a percentage between those two documents. Our plagiarism detection software will calculate the plagiarism as an approximate percentage for two assignments and give an approximate result as a percentage here. </p>
                </div>

                <div class="content"> 
                        <div class="b">
                           <label for="b">Assignment 1:</label>
                           <textarea name="assignment1" id="assignment1" cols="35" rows="15" placeholder="Assignment 1" required></textarea>
                        </div> 
                       
                      <div class="c">
                           <label for="c">Assignment 2:</label>
                           <textarea name="assignment2" id="assignment1" placeholder="Assignment 2" cols="35" rows="15" required></textarea>
                       </div>
                       
                    
                       <div class="btn">
                       <input type="submit" name="save">
                       </div>
    
                       <div class="result">
                           <h3>RESULT:  <?php
                           echo$result;
                           ?>
                           </h3>
                    </div>
                    
                </div>
                 
            </form>
            <div class="imgBx">
                        <img src="chact2.png">
            </div>
        </div>
<section>
</body>
</html>