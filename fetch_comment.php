<?php

//fetch_comment.php

$connect = new PDO('mysql:host=localhost;dbname=comment_system', 'root', '');

$query = "
SELECT * FROM comments_tb 
WHERE parent_comment_id = '0' 
ORDER BY comment_id DESC
";

$statement = $connect->prepare($query);

$statement->execute();

$result = $statement->fetchAll();
$output = '';
foreach($result as $row)
{
    $output .= '
    <div class="panel panel-default" style="background: #FFF;
    box-shadow: 0 5px 10px rgba(0,0,0,0.2);
    padding: 10px 20px;
    text-align: left;
    margin-bottom: 25px;">
     <div class="panel-heading">By <b>'.$row["comment_sender_name"].'</b> on <i>'.$row["date"].'</i><br> <b><u>'.$row["comment_sender_email"].'</b></u> </div>
     <div class="panel-body">'.$row["comment"].'</div>
     <div class="panel-footer" align="right"><button type="button" class="btn btn-default reply" style="padding: 12px;
     border: black;
     outline: none;
     border-radius: 5px;
     cursor: pointer;
     font-size: 1rem;
     background: #grey;
     color: #8a2435;
     max-width: 500px;
     margin-top: 10px;
     margin-bottom: 20px;
     margin-left: 200px;
     font-weight: 700;" id="'.$row["comment_id"].'">Reply</button></div>
    </div>
    ';
 $output .= get_reply_comment($connect, $row["comment_id"]);
}

echo $output;

function get_reply_comment($connect, $parent_id = 0, $marginleft = 0)
{
 $query = "
 SELECT * FROM comments_tb WHERE parent_comment_id = '".$parent_id."'
 ";
 $output = '';
 $statement = $connect->prepare($query);
 $statement->execute();
 $result = $statement->fetchAll();
 $count = $statement->rowCount();
 if($parent_id == 0)
 {
  $marginleft = 0;
 }
 else
 {
  $marginleft = $marginleft + 48;
 }
 if($count > 0)
 {
  foreach($result as $row)
  {
   $output .= '
   <div class="panel panel-default" style="background: #FFF;
    box-shadow: 0 5px 10px rgba(0,0,0,0.2);
    padding: 10px 20px;
    text-align: left;
    margin-bottom: 25px;margin-left:'.$marginleft.'px;">
    <div class="panel-heading">By <b>'.$row["comment_sender_name"].'</b> on <i>'.$row["date"].'</i> <br> <b><u>'.$row["comment_sender_email"].'</b></u> </div>
    <div class="panel-body">'.$row["comment"].'</div>
    <div class="panel-footer" align="right"><button type="button" class="btn btn-default reply" style="padding: 12px;
    border: black;
    outline: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 1rem;
    background: #grey;
    color: #8a2435;
    max-width: 500px;
    margin-top: 10px;
    margin-bottom: 20px;
    margin-left: 200px;
    font-weight: 700;" id="'.$row["comment_id"].'">Reply</button></div>
   </div>
   ';
   $output .= get_reply_comment($connect, $row["comment_id"], $marginleft);
  }
 }
 return $output;
}

?>

