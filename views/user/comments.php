<?php include_once(ROOT . '/views/layouts/header.php');?>
<!--==============================content================================-->
<section>
  <form method='post' onsubmit="return post();" id="container" class="form-comments"  style="padding:10px;" >
    <h2>Отзывы</h2>
  <input type="text" name="name" id="username" placeholder="Имя" value="<?php echo $user['name']?>" style="border:1px solid silver; border-radius:10px;"><br><br>
  <textarea id="comment" name="message" placeholder="Сообщение" cols="50" rows="10" style="border-radius:10px; border:1px solid silver;"></textarea><br>
  <input type="submit" class="search_button" style="height:50px; color:lightgreen;" value="Оставить отзыв" id="submit" <?php if (!$userId) echo "disabled"; ?>>
  <p style="color:red; margin-top:5px;"><?php echo array_shift($errors);?></p>
</form>
<div id="all_comments">
  <?php
  $host="localhost";
  $username="root";
  $password="";
  $databasename="fit";

  $connect = mysqli_connect($host,$username,$password);
  $db = mysqli_select_db($connect, $databasename);
  $comm = mysqli_query($connect, "select name,message,date_time from comments order by id DESC");
  while($row = mysqli_fetch_array($comm))
  {
  $name=$row['name'];
  $comment=$row['message'];
  $time=$row['date_time'];
    ?>
    <style>
    .comment_div {
    	background-color: #fff;
    	border: 3px solid #fff;
    	padding: 15px;
    	text-align: justify;
      border: 1px solid lightgray;
    	border-radius: 11px;
    }
    </style>
  <div class="comment_div" style="margin:10px;">
 <p class="name"><strong>Оставил отзыв:</strong> <?php echo $name;?></p>
<span><strong>Дата публикации:</strong> <?php echo date("j-M-Y g:ia", strtotime($time)) ?></span><br>
 <p class="comments"><strong>Сообщение:</strong> <?php echo $comment;?></p>
</div>
<?php
}
?>
</div>
</section>
<!--==============================footer=================================-->
<?php include_once(ROOT . '/views/layouts/footer.php');?>
<script>
function post()
{
  var comment = document.getElementById("comment").value;
  var name = document.getElementById("username").value;
  if(comment && name)
  {
    $.ajax
    ({
      type: 'post',
      url: '/views/user/check.php',
      data:
      {
      message:comment,
      name:name
      },
      success: function (response)
      {
      document.getElementById("all_comments").innerHTML=response+document.getElementById("all_comments").innerHTML;
      document.getElementById("comment").value="";
        document.getElementById("username").value="";

      }
    });
  }

  return false;
}
</script>
