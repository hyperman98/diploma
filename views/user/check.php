<?php
$host="localhost";
$username="root";
$password="";
$databasename="fit";

$connect=mysqli_connect($host,$username,$password);
$db=mysqli_select_db($connect, $databasename);
$errors = false;
if(isset($_POST['message']) && isset($_POST['name']))
{
  $errors = '';
  $comment=$_POST['message'];
  $name=$_POST['name'];
  $insert = mysqli_query($connect, "INSERT INTO comments (name,message,date_time) values('$name','$comment',CURRENT_TIMESTAMP)");

  $id = mysqli_insert_id($connect);
  // if ($userId == true) {
  $select = mysqli_query($connect, "SELECT name,message,date_time from comments where name='$name' and message='$comment'");
  if($row = mysqli_fetch_array($select))
  {
	  $name = $row['name'];
	  $comment = $row['message'];
    $time = $row['date_time'];
  ?>
  <div class="comment_div" style="margin:10px;">
 <p class="name"><strong>Оставил отзыв:</strong> <?php echo $name;?></p>
<span><strong>Дата публикации:</strong> <?php echo date("j-M-Y g:ia", strtotime($time)) ?></span><br>
 <p class="comments"><strong>Сообщение:</strong> <?php echo $comment;?></p>
</div>
  <?php
  }
exit;
// }
}

?>
