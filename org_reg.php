  <?php include("includes/connection.php");?> 
  <?php include("includes/header.php");?>
 
            <div class="col-md-2"></div>
        <div class="col-md-10">
            <div class="panel panel-default">
                <div class="panel panel-body">

                <?php

                 if (isset($_POST["btnorg"])) 
                 {

                  $target="images/".basename($_FILES["image"]["name"]);

                     
                     
                  
                    $img=$_FILES["image"]["name"];
                      $org_id=$_POST["txtorg_id"];
                       $name=$_POST["txtname"];
                     $oplid=$_POST["txtlid"];
                  
                    $date=$_POST["txtdate"];
                     $address=$_POST["txtaddress"];
                     $phone=$_POST["txtcontact"];
                    $email=$_POST["email"];
                    $username=$_POST["txtusername"];
                    $password=$_POST["txtpass"];
                    $harshed_password=sha1($password);
                    $type="organisation";

                    $query="SELECT  organisation_id FROM organisation WHERE username='$username' OR email='$email'";
                    $result=mysql_query($query) or die(mysql_error());
                    if (mysql_num_rows($result)>0) {
                        
                         echo '<div class="alert alert-warning" style="width:600px;">Username or email address you have entered is already used please try another !</div>';
                        
                    }
                    else
                    {
 $sql="INSERT INTO organisation (organisation_id,organisation_name,operational_id,year_of_est,location,
   contact_no,email,username,password,photo,role) 

                   VALUES('$org_id',
                          '$name',
                          '$oplid',                           
                          '$date',                          
                          '$address',
                          '$phone',
                          '$email',                                          
                         '$username',
                         '$harshed_password',
                         '$img',
                         '$type')" or die(mysql_error());
                    $query=mysql_query($sql);
                    if(move_uploaded_file($_FILES["image"]["tmp_name"],$target))
                     {
                         echo '<div class="alert alert-success" style="width:600px;">Successfully Registred</div>';
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
                
                <div class="panel panel-heading">Register as an organization</div>
                <form role="form" method="post" enctype="multipart/form-data">
                <div style="margin-left:5px;">
                <div class="row">
                
                <div class="col-md-10">  
                <div style="width:100px; height:90px;">
                
                <img src="images/profile.png"  alt=""  style="width:100px; height:90px; border: 3px #ddd solid; ">
                
                </div>
                <label>Upload a picture</label>                
                
                <input type="file" name="image" required="">
                </div> 
                
                </div>
                 <br>
                  <div class="row">
                   <div class="col-md-10">                  
                
                <input type="text" name="txtorg_id"  class="form-control" placeholder="Organazation ID" required="">
                </div>
                        
                 </div>
                 <br>
                
                   <div class="row">
                   <div class="col-md-10">                  
                
                <input type="text" name="txtname"  class="form-control" placeholder="Organazation name" required="">
                </div>
                        
                 </div>
                
                
                 <br>
                 <div class="row">
                   <div class="col-md-10">                  
                
                <input type="text" name="txtlid"  class="form-control" placeholder="Operational Licence ID" required="">
                </div>
                        
                 </div>
                
                
                 <br>
                 <div class="row">
                   <div class="col-md-10">                  
                
                <input type="dateTime" name="txtdate"  class="form-control" placeholder=" Established Date" required="">
                </div>
                        
                 </div>
                
                
                 <br>
                
                 <div class="row">
                <div class="col-md-10">
                    
                     <input type="text" name="txtaddress"  class="form-control" placeholder="Address" required="">
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
                    
                     <input type="text" name="email"  class="form-control" placeholder="Email Address" required="">
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
                    
                     <input type="password" name="txtpass"  class="form-control" placeholder="password" required="">
                          </div>
                </div>
                
                    <br>                
                 <div class="row">
                 
                <div class="col-md-6">
                    
               <button class="btn btn-success" name="btnorg" id="btnorg">Submit</button>
                    
                </div>        
                        
                 
                <div class="col-md-6">
                    
                     <button class="btn btn-warning">Cancel</button>
                </div>
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
            
       
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    