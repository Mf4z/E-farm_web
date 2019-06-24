<?php include("includes/session.php");?> 
<?php include("includes/connection.php");?> 
<?php include("includes/functions.php");?> 

<?php include("includes/header.php");?>

            <div class="col-md-1"></div>
        <div class="col-md-10">
            <div class="panel panel-default">
               
                <div class="panel panel-body">
              
                    
                <div class="center">
                <img src="images/lock.png" class="img-circle" style="width:200px; height:100px;">
                    
                </div>
                    
                <br>


                    <?php

                     //if the user press loginbtn submit the date in the fields
                     if (isset($_POST["btnlogin"])) {

                         $usernm=$_POST['txtusername'];
                        $pass=$_POST['txtpass'];
                        $harshed_password=sha1($pass);
                        $type="farmer";

                        $sql= "SELECT username FROM farmer WHERE username='$usernm' AND password='$harshed_password' AND role='$type' LIMIT 1";
                        $result= mysql_query($sql);
                        confirm_query( $result);

                         if (mysql_num_rows( $result)==1) {
                            
                            $founder_user=mysql_fetch_array($result);
                             $_SESSION['username']=$founder_user['username'];
                            redirect_to ("trade.php");
                           


                        }
                       
                     elseif(isset($_POST["btnlogin"])) {

                         $usernm=$_POST['txtusername'];
                        $pass=$_POST['txtpass'];
                        $harshed_password=sha1($pass);
                        $type="organisation";

            $sql= "SELECT organisation_id,username FROM organisation  WHERE username='$usernm' AND password='$harshed_password' AND role='$type' LIMIT 1";
                        $result= mysql_query($sql);
                        confirm_query( $result);

                        if (mysql_num_rows( $result)==1) {
                            
                            $founder_user=mysql_fetch_array($result);
                            $_SESSION['org_id']=$founder_user['organisation_id'];
                             $_SESSION['username']=$founder_user['username'];
                            redirect_to ("org_page.php");
                           


                        }


                        /**********Admin part*************/

                     elseif(isset($_POST["btnlogin"])) {

                         $usernm=$_POST['txtusername'];
                        $pass=$_POST['txtpass'];
                       // $harshed_password=sha1($pass);
                        $type="Admin";

            $sql= "SELECT username FROM admin  WHERE username='$usernm' AND password='$pass' AND role='$type' LIMIT 1";
                        $result= mysql_query($sql);
                        confirm_query( $result);

                        if (mysql_num_rows( $result)==1) {
                            
                            $founder_user=mysql_fetch_array($result);
                           
                             $_SESSION['username']=$founder_user['username'];
                            redirect_to ("admin.php");
                           


                        }
                       
                     else
                     {
                 echo"<div class='alert alert-warning'>invalid user name or password please try again !</div>
                ";
                       
                     }
                        
                     }

                    }
                 }


                 ?>


                 <?php

   
               if(isset($_GET["logout"]) && $_GET["logout"]==1)
               {

                
                   echo"<div class='alert alert-warning'>You are now loged out !</div>";
               }


                 ?>
               
                
                <div class="panel panel-default">
               <div class="panel panel-heading">Login</div>
                <div class="panel panel-body">
                <form  method="post">
                
                <div class="row">
              
              
         
                
                
             <div class="col-md-3"></div>
            <div class="col-md-6">
            
              <input type="text" name="txtusername"  class="form-control" placeholder="Username">
                    
            </div>           
                    </div>
                    
            
                    
                    <br>
                 
                <div class="row">
                    <div class="col-md-3"></div>
                <div class="col-md-6">
              <input type="password" name="txtpass"  class="form-control" placeholder="Password">
                    
            </div>
                    
             </div>    
              
            <br>
            <div class="row">
                 <div class="col-md-3"></div>
                <div class="col-md-4">
                    
                     <button class="btn btn-success" name="btnlogin">Login</button>
                    
                </div>
                
                 
                <div class="col-md-3">
                    
                     <button class="btn btn-warning">Cancel</button>
                </div>
                
                    </div>
                    <br>
                    <div class="row">
                    <div class="col-md-5"></div>
                    <div class="col-md-3"><a href="">Forgot password ?</a></div>
                    </div>
                    <br>    
            </form>
                    
                    </div>
                </div>
            
              
                
            </div>
                </div>
            </div>
            
<?php include("includes/footer.php");?>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    