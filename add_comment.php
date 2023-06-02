<?php

//add_comment.php

$connect = new PDO('mysql:host=localhost;dbname=comment_system', 'root', '');

$error = '';
$comment_name = '';
$comment_content = '';
$comment_email = '';

if(empty($_POST["comment_name"]))
{
 $error .= '<p class="text-danger">Name is required</p>';
}
else
{
 $comment_name = $_POST["comment_name"];
}

if(empty($_POST["comment_email"]))
{
 $error .= '<p class="text-danger">Email is required</p>';
}
else
{
 $comment_email = $_POST["comment_email"];
}

if(empty($_POST["comment_content"]))
{
 $error .= '<p class="text-danger">Comment is required</p>';
}
else
{
 $comment_content = $_POST["comment_content"];
}

if($error == '')
{
 $query = "
 INSERT INTO comments_tb 
 (parent_comment_id, comment, comment_sender_name, comment_sender_email) 
 VALUES (:parent_comment_id, :comment, :comment_sender_name, :comment_sender_email)
 ";
 $statement = $connect->prepare($query);
 $statement->execute(
  array(
   ':parent_comment_id' => $_POST["comment_id"],
   ':comment'    => $comment_content,
   ':comment_sender_name' => $comment_name,
   ':comment_sender_email' => $comment_email
  )
 );
 $error = '<label class="text-success" style="border-radius: 10px;
 color: #8a2435;
 font-weight: bold;
 backdrop-filter: blur(10px);
 box-shadow: 0 35px 50px rgb(0,0,0,0.1);
 border: 1px solid rgb(255,255,255,0.5);
 border-top: 1px solid rgba(255,255,255,0.5);
 border-left: 1px solid rgba(255,255,255,0.5);
 border-right: 1px solid rgb(255,255,255,0.2);
 border-bottom: 1px solid rgb(255,255,255,0.2);
 background: rgb(255,255,255,0.5);
 padding: 15px;
 text-align: center;
 display: block;
 margin-bottom: 30px;">Comment Added</label>';
}

$data = array(
 'error'  => $error
);

echo json_encode($data);

?>

