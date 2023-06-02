<!-- <?php 

include 'config.php';

?> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact-Us</title>
    <link rel="stylesheet" href="contactstyle.css"> <!-- link the css file properly -->
    <link rel="icon" href="iconfinder_text.png" type="image/png">
</head>
<body>
    <section>
        <header>
            <a href="home.html" class="logo">
            <img src="logo4.png">
            </a>
            <ul>
                <li><a href="home.html">Home</a></li>
                <li><a href="faq.php">FAQ</a></li>
                <li><a href="query.php">Our Query</a></li>
                <li><a href="team.html">Team</a></li>
                <li><a href="contact.php" class="active">Contact us</a></li>
                
            </ul>
        </header>
        <div class="color"></div>
        <div class="color"></div>
        <div class="color"></div>
        <div class="box">
            <div class="square" style="--i:0"></div>
            <div class="square" style="--i:1"></div>
            <div class="square" style="--i:2"></div>
            <div class="square" style="--i:3"></div>
            <div class="square" style="--i:4"></div>
            <div class="container">
                <div class="form" id="blur">
                    <h2>Contact Us</h2>
                    <form action="mail.php" method="POST">
                        <div class="inputBx">
                            <input type="text" id="name" placeholder="Full Name" required>
                        </div>
                        <div class="inputBx">
                            <input type="email" id="email" placeholder="Email" required>
                        </div>
                        <div class="inputBx">
                            <textarea name="message" id="message" placeholder="Type Mesage Here..." required></textarea>
                        </div>
                        <div class="inputBx">
                            <input type="submit" href="mail.php" value="Submit">
                            <a href="mail.php"></a>
                        </div>
                        <p class="text">We would get back to you soon ....</p>
                    </form>
                </div>
            </div>
            <!-- <div id="popup">
                <h2>heyy its anmol</h2>
                <p>Suceesssss</p>
                <a href="#" onclick="toggle()">close</a>
            </div>
        </div> -->
        
            <!-- <script type="text/javascript">
                function toggle(){
                    var blur = document.getElementById('blur');
                    blur.classList.toggle('active')
                    var popup = document.getElementById('popup');
                    popup.classList.toggle('active')
                }
            </script> -->
    </section>
</body>
</html>