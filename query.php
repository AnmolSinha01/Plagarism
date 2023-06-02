<?php
//index.php

?>
<!DOCTYPE html>
<html>
 <head>
  <title>Our Query</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="querystyle.css">
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" /> -->
  <link rel="icon" href="iconfinder_text.png" type="image/png">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
 </head>
 <body>
 <header>
                <a href="home.html" class="logo">
                    <img src="logo4.png">
                </a>
                <ul>
                    <li><a href="home.html">Home</a></li>
                    <li><a href="faq.php">FAQ</a></li>
					<li><a href="query.php" class="active">Our Query</a></li>
                    <li><a href="team.html">Team</a></li>
                    <li><a href="contact.php">Contact us</a></li>
                </ul>
            </header>
	<div class="box">
	    <div class="square" style="--i:0"></div>
        <div class="square" style="--i:1"></div>
        <div class="square" style="--i:2"></div>
        <div class="square" style="--i:3"></div>
        <div class="square" style="--i:4"></div>
		<div class="square" style="--i:5"></div>
        <div class="wrapper">
        	<form action="query.php" method="POST" class="form" id="comment_form">
        		<div class="row">
					<h3>Our Query</h3>
        			<div class="input-group">
        				<label for="name">Name</label>
        				<input type="text" name="comment_name" id="comment_name" placeholder="Enter your Name" required>
        			</div>
        			<div class="input-group">
        				<label for="email">Email</label>
        				<input type="email" name="comment_email" id="comment_email" placeholder="Enter your Email" required>
        			</div>
        		</div>
        		<div class="input-group textarea">
        			<label for="comment">Query</label>
        			<textarea id="comment_content" name="comment_content" placeholder="Enter your Query" required></textarea>
        		</div>
        		<div class="input-group">
                    <input type="hidden" name="comment_id" id="comment_id" value="0" />
        			<input type="submit" name="submit" id="submit" value="POST QUERY" class="btn" />
        		</div>
        	</form>
   <span id="comment_message"></span>
   <br />
   <div id="display_comment"></div>
  </div>
</div>
 </body>
</html>

<script>
$(document).ready(function(){
 
 $('#comment_form').on('submit', function(event){
  event.preventDefault();
  var form_data = $(this).serialize();
  $.ajax({
   url:"add_comment.php",
   method:"POST",
   data:form_data,
   dataType:"JSON",
   success:function(data)
   {
    if(data.error != '')
    {
     $('#comment_form')[0].reset();
     $('#comment_message').html(data.error);
     $('#comment_id').val('0');
     load_comment();
    }
   }
  })
 });

 load_comment();

 function load_comment()
 {
  $.ajax({
   url:"fetch_comment.php",
   method:"POST",
   success:function(data)
   {
    $('#display_comment').html(data);
   }
  })
 }

 $(document).on('click', '.reply', function(){
  var comment_id = $(this).attr("id");
  $('#comment_id').val(comment_id);
  $('#comment_name').focus();
 });
 
});
</script>


