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
  echo $session->message("The comment with {$comment->id} has been deleted");
  redirect("comment_photo.php?id={$comment->photo_id}");
} 
else {
  redirect("comment_photo.php?id={$comment->photo_id}");
}
?>
