<?php include("includes/init.php"); ?>
<?php include("includes/header.php"); ?>

<?php //if(!$session->is_signed_in()) {redirect("login.php");} ?>

<?php
if(empty($_GET['id'])){
  //$comment_id = $_GET['user_id'];
  redirect("comments.php");
}
$comment = Comment::find_by_id(($_GET['id']));
if($comment){
  $comment->delete();
  redirect("comments.php");
} 
else {
  redirect("comments.php");
}
?>
