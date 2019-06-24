  <?php include("includes/connection.php");?> 
  <?php include("includes/header4.php");?>
 
            <div class="col-md-2"></div>
        <div class="col-md-10">
            <div class="panel panel-default">
                <div class="panel panel-body">
                 <?php

                 if (isset($_POST["btnadmin"])) 
                 {

                

                     
                     
                     $fname=$_POST["txtname"];
                
                     $lname=$_POST["txtlname"];
                   
                     $address=$_POST["txtlocation"];
                     $phone=$_POST["txtcontact"];
                    $email=$_POST["txtemail"];
                    $username=$_POST["txtusername"];
                    $password=$_POST["txtpass"];
                    $hashed_password=sha1($password);
                    $usertyp="Admin";


                    $query="SELECT  username FROM admin WHERE username='$username' OR email='$email'";
                    $result=mysql_query($query) or die(mysql_error());
                    if (mysql_num_rows($result)>0) {
                        
                         echo '<div class="alert alert-warning" style="width:600px;">Username or email address you have entered is already used please try another !</div>';
                        
                    }
                    else
                    {

 $sql="INSERT INTO admin (first_name,last_name,location,contact_no,email,username,password,role)   
                     VALUES(
                           '$fname',
                           '$lname',                           
                         '$address',
                         '$phone',
                        '$email',                      
                        '$username',
                        '$hashed_password',                         
                        '$usertyp')" or die(mysql_error());
                    $query=mysql_query($sql);
                    if($query)
                     {
                     
                      echo '<div class="alert alert-seccess">Account created successfully</div>';
                        }
                   else{
                       $msg="Faild";
                      } 
                        
                    
                
  
                 }
             }

                ?>
               
                    
                    
                    
                    <div class="row">
                        
                    <div class="col-md-10">
                        <!----Personel Registration-->
                        
            <div class="panel panel-default">
                
                <div class="panel panel-heading"> Register Admin</div>



                <form method="POST" enctype="multipart/form-data">
                <div style="margin-left:5px;">
               
                <div class="row">
                
                <div class="col-md-10">                  
                
                <input type="text" name="txtname"  class="form-control" placeholder="First Name" required="">
                </div> 
                
                </div>
                 <br>
                 <div class="row">
                <div class="col-md-10">
                    
                     <input type="text" name="txtlname"  class="form-control" placeholder="Last Name" required="">
                </div>
                
                
                </div>
                    <br>
                
                     <div class="row">
               
                <div class="col-md-10">
                    
                     <input type="text" name="txtlocation"  class="form-control" placeholder="Address" required="">
                </div>
                    </div>
                        <br>
                <div class="row">
                  
                <div class="col-md-10">
                    
                     <input type="text" name="txtcontact"  class="form-control" placeholder="Contact" required="">
                </div>
                         
                </div>
                    <br>
                
                    
                
                     <div class="row">
               
                <div class="col-md-10">
                    
                     <input type="text" name="txtemail"  class="form-control" placeholder="Email Address" required="">
                         </div>
                </div>
                    <br>
                <div class="row">   
                <div class="col-md-10">
                    
                     <input type="text" name="txtusername"  class="form-control" placeholder="Username" required="">
                          </div>
                </div>
                
                    <br>
               
                
                     <div class="row">
               
                <div class="col-md-10">
                    
                     <input type="password" name="txtpass"  class="form-control" placeholder="Password" required="">
                         </div>
                </div>
                        <br>
                
                </div>
                 
                <div class="row">
                 
                <div class="col-md-6">
                    
               <button class="btn btn-success" id="btnuser" name="btnadmin">Submit</button>
                    
                </div>
                <div class="col-md-6">
                    
                     <button class="btn btn-warning">Cancel</button>
                </div>
                
                      </div>
                      </form>
    </div>
    </div>
    </div>
              
                
            </div>
                </div>
                <div class="col-md-2"></div>
            </div>
             
<?php include("includes/footer.php");?>
            
       
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    