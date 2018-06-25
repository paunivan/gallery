<?php include("includes/init.php"); ?>
<?php include("includes/header.php"); ?>

<?php //if(!$session->is_signed_in()) {redirect("login.php");} ?>

<?php
if(empty($_GET['id'])){
  //$user_id = $_GET['user_id'];
  redirect("users.php");
}
$user = User::find_by_id(($_GET['id']));
if($user){
  $user->delete();
  redirect("users.php");
} 
else {
  redirect("users.php");
}
?>
