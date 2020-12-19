<!-- navbar -->
        <!-- ============================================================== -->
        <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <a class="navbar-brand" href="../pages/index.php">Admin</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">
                      
                        <li class="nav-item dropdown notification">
                            <a class="nav-link nav-icons" href="#" id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-fw fa-bell"></i> <span class="indicator"></span></a>
                            <ul class="dropdown-menu dropdown-menu-right notification-dropdown">
                                <li>
                                    <div class="notification-title"> Notification</div>
                                    <div class="notification-list">
                                        <?php  
                                                $statment = $pdo->prepare ("SELECT * FROM `notification` ORDER BY `creation` DESC");                                               
                                                $statment->execute();
                                                $i=0;
                                               while($row = $statment->fetch(PDO::FETCH_ASSOC)):
                                                ?>
                                            <a href="#" class="list-group-item list-group-item-action">
                                                <div class="notification-info">
                                                
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name"><?php
                                                    if(empty($row["username"])){
                                                        echo "Someone";
                                                    }else if($row["username"] ="d"){
                                                        echo $_SESSION["userName"];
                                                    }
                                                    
                                                    
                                                    else{
                                                        echo $row["username"];
                                                    }
                                                    ?></span><?php 
                                                    
                                                    if($row["notification"] == '0'){
                                                        echo "A new Racer has been registerd";
                                                    }else if($row["notification"] == '1'){
                                                        echo "A new member has registerd for the workshop";
                                                    }else if($row["notification"] == '2'){
                                                        echo "updated a member's info"; 
                                                    }else if($row["notification"] == '3'){
                                                        echo "deletd a member"; 
                                                    }else if($row["notification"] == '6'){
                                                        echo "A new comitee member has been added"; 
                                                    }else if($row["notification"] == '7'){
                                                        echo "deletd a commitee member"; 
                                                    }

                                                    
                                                    
                                                    ?>
                                                        
                                                    </div>
                                                </div>
                                            </a>
                                               <?php $i++;
                                                if($i == 5){
                                                    break;
                                                }
                                                     endwhile; ?>
                                        </div>
                                        
                                </li>
                                <li>
                                    <div class="list-footer"> <a href="notification.php">View all notifications</a></div>
                                </li>
                            </ul>
                        </li>
                    
                        <li class="nav-item dropdown nav-user">
                            <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="../assets/images/avatar-1.jpg" alt="" class="user-avatar-md rounded-circle"></a>
                            <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                                <div class="nav-user-info">
                                    <h5 class="mb-0 text-white nav-user-name"><?php  echo $_SESSION["userName"];?></h5>
                                    <span class="status"></span><span class="ml-2">Available</span>
                                </div>
                               
                                <a class="dropdown-item" href="../pages/php/logout.php"><i class="fas fa-power-off mr-2"></i>Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>

        <!-- ============================================================== -->
        <!-- end navbar -->