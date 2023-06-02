<!-- <?php
    require("logincheck.php")
?> -->

<!DOCTYPE html>
<html>
    <head>
        <title>Admin Login Page</title>
        <link rel="stylesheet" type="text/css" href="adminstyle.css">
        <link rel="icon" href="iconfinder_text.png" type="image/png">
        <?php  include 'links.php' ?>
    </head>
    <body>
        <header>
           <div class="form-box">
                <div class="box">
	            <div class="square" style="--i:0"></div>
                <div class="square" style="--i:1"></div>
                <div class="square" style="--i:2"></div>
                <div class="square" style="--i:3"></div>
                <div class="square" style="--i:4"></div>
		        <div class="square" style="--i:5"></div>
                    <h1>ADMIN LOGIN HERE</h1>
                    <form action ="logincheck.php" method = "POST">
                       <div class="input-box">
                           <i class="fa fa-envelope-o"></i>
                           <input type="text" name="user" value="" autocomplete="off" placeholder="USER ID" required>
                       </div>
                       <div class="input-box">
                           <i class="fa fa-lock"></i>
                           <input type="password" name="pass" value="" autocomplete="off" placeholder="Password" id="myInput" required>
                           <span class="eye" onclick="myFuntion()">
                               <i id="hide1" class="fa fa-eye"></i>
                               <i id="hide2" class="fa fa-eye-slash"></i>
                           </span>
                         </div>
                     <button type="submit" id="btn1" class="btn btn-success" name="submit">LOGIN</button>
            
                    </form>         
                </div> 
            </div>
           <script>
               function myFuntion(){
                   var x = document.getElementById("myInput");
                   var y = document.getElementById("hide1");
                   var z = document.getElementById("hide2");

                   if(x.type === 'password'){
                       x.type = "text";
                       y.style.display = "block";
                       z.style.display = "none";
                   }
                   else{
                       x.type = "password";
                       y.style.display = "none";
                       z.style.display = "block";
                   }
               }
            </script>
        </header>
</body>
</html>

