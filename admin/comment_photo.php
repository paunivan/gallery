<?php include("includes/header.php"); ?>
<?php
//$comments = Comment::find_all();
if(empty($_GET['id'])){
  redirect("photos.php");
}

$comments = Comment::find_the_comments($_GET['id']);



?>

        <!-- Navigation -->
        
            <!-- Top Menu Items -->
            <?php include("includes/top_nav.php"); ?>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
           <?php include("includes/side_nav.php"); ?>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">
        <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Users
                            <small>Subheading</small>
                        </h1>
                        
                        <div class="col-md-12">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>Id</th>
                          <th>Author</th>
                          <th>Body</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach ($comments as $comment) : ?>
                        <tr>
                          <td><?php echo $comment->id; ?></td>
                          
                          <td><?php echo $comment->author; ?>
                          <div class="actions_links">
                
                <a href="delete_comment_photo.php?id=<?php echo $comment->id; ?>">Delete</a>
                
                            
                          </div>
                          </td>
                            
                          <td><?php echo $comment->body; ?></td>
                             
                        </tr>
                    <?php endforeach; ?>
                      </tbody>
                    </table>
                        </div>
                        
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->     

        </div>
        <!-- /#page-wrapper -->

  <?php include("includes/footer.php"); ?>