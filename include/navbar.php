<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
           
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Home</a>
            </div>
           
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">

                    <?php
                    
                    $query = "SELECT * FROM categories";
                    $select_all = mysqli_query($connection, $query);

                    while($row = mysqli_fetch_assoc($select_all)){

                       $title = $row['title'];
                       echo "<li><a href='#'>{$title}</a></li>";

                    }
                    
                    ?>              
                   <?php
                      if($_SESSION['user_role']=='admin' || $_SESSION['user_role']=='author'){
                       echo '<li>';
                       echo '<a href="admin/admin.php">Admin</a>';
                       echo '</li>';
                      }
                    ?>
                    <!-- <li>
                        <a href="logout.php">Home</a>
                    </li> -->
        
                  
                    <li>
                        <a href="logout.php">Logout</a>
                    </li>
                    
                </ul>
            </div>
            
        </div>
  
    </nav>
