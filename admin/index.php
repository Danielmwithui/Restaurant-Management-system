<?php include('partials/menu.php');?>

             <!-----Main-content section  Start------->
     <div class="main-content">
       <div class="wrapper">
              <h1>Dashboard</h1>
<br><br>
                      <?php
                            if(isset($_SESSION['login']))
                                          {
                                                 echo $_SESSION['login'];
                                                 unset( $_SESSION['login']);
                                          }
                      ?>
<br><br>
              <div class="col-4 txt-centre">
                     <h1>5</h1>
              </br>
                     Categories
              </div>
              <div class="col-4 txt-centre">
                     <h1>5</h1>
              </br>
                     Categories
              </div>
              <div class="col-4 txt-centre">
                     <h1>5</h1>
              </br>
                     Categories
              </div>
              <div class="col-4 txt-centre">
                     <h1>5</h1>
              </br>
                     Categories
              </div>
              <div class="clearfix"></div>
       </div>
     </div>
            <!-----Main-content section  End------->
<?php include('partials/footer.php');?>
            
           