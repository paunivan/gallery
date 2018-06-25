<div class="container-fluid">
    <?php //require_once("init.php"); ?>
                <!-- Page Heading -->

                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Admin
                            <small>Dashboard</small>
                        </h1>
                        <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-users fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php echo $session->count; ?></div>
                                        <div>New Views</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                     
                                  <span class="pull-left">View Details</span> 
                               <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span> 
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>

                     <div class="col-lg-3 col-md-6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-photo fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php echo Photo::count_all(); ?></div>
                                        <div>Photos</div>
                                    </div>
                                </div>
                            </div>
                            <a href="photos.php">
                                <div class="panel-footer">
                                    <span class="pull-left">Total Photos in Gallery</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>


                     <div class="col-lg-3 col-md-6">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-user fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">
                                <?php echo User::count_all(); ?>
                                        </div>

                                        <div>Users</div>
                                    </div>
                                </div>
                            </div>
                            <a href="users.php">
                                <div class="panel-footer">
                                    <span class="pull-left">Total Users</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>

                      <div class="col-lg-3 col-md-6">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-support fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"> 
                                <?php echo Comment::count_all(); ?>
                                        </div>
                                        <div>Comments</div>
                                    </div>
                                </div>
                            </div>
                            <a href="comments.php">
                                <div class="panel-footer">
                                    <span class="pull-left">Total Comments</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>


                        </div> <!--First Row-->

                        <div class="row">
                        <div id="piechart_3d" style="width: 900px; height: 500px;"></div>
                        </div>
                        <?php
                        // $user = new User();
                        // $user->username = "username";
                        // $user->password = "password";
                        // $user->first_name = "Jelisaveta";
                        // $user->last_name = "Sosa";

                        // $user->create();

                        // $user = User::find_user_by_id(6);
                        // $user->username = "msyellena";
                        // $user->password = "password";
                        // $user->first_name = "Jelisaveta";
                        // $user->last_name = "Sosa";
                        // $user->create();

                        // $user = User::find_user_by_id(5);
                        // $user->username = "Dragan";
                        // $user->delete();

                        // $user = User::find_user_by_id(2);
                        // $user->password = "password";
                        // $user->save();

                        // $user = new User;
                        // $user->username = "t-800";
                        // $user->save();

                        
                        // $result_set = User::find_all_users();
                        
                        // while($row = mysqli_fetch_array($result_set)){
                        
                        // echo $row['username'] . "<br>";
                        // }
                        
                        // $found_user = User::find_user_by_id(2);
                        // $user = User::instantiation($found_user);
 
                        // echo $user->username;
                        // echo "<br>";
                        

                        //if($database->connection){
                        // echo "true";
                        // } else {
                        //    echo "false";}
                        //$sql = "SELECT * FROM users WHERE id = 1";
                        //$result = $database->query($sql);
                        //$user_found = mysqli_fetch_array($result);
                        //echo $user_found['username'];
                
                // $users = User::find_all();
                // foreach ($users as $user) {
                //     echo $user->username . "<br>";
                // }
                        // $found_user = User::find_user_by_id(2);
                        // echo $found_user->username;
                       // $photos = Photo::find_all();
                       // foreach ($photos as $photo) {
                       // echo $photo->title;
                       // }
                        
                        // $photo = new Photo();
                        // $photo->title = "PROGRAMER";
                        // $photo->size = "101";
                    
                        // $photo->create();
                        //echo INCLUDES_PATH;
                        ?>
                        
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->