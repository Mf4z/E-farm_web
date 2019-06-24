 
 <?php include("includes/connection.php");?>
  <?php include("includes/functions.php");?>
 <?php include("includes/header3.php");?>
 
     
            
        <div class="col-md-12">
            <div class="panel panel-default">
                
                <div class="panel-heading"></div>
                <div class="panel-body">
                    <div class="row">
                    <div class="col-md-12">
                        
                    <table class="table table-striped table-bordered table-hover">
                            
                      <thead>
                          
                          <tr>
                        <th>Product Name</th>
                        <th>Product type</th>
                        <th>Product quantity</th>
                        <th>Storage Space</th>
                        <th>Storage Duration</th>
                        <th>Transportation</th>
                       
                        <th>Address</th>
                        <th>Username</th>
                        <th>Contact</th>


                          </tr>
                      </thead>

                      <?php

                      $orgid=$_SESSION['org_id'];
                      $sql=" SELECT product_name,product_type,product_qty,storage_space,storage_duration,transport_opt,location,contact_no,username FROM farmer_storage WHERE organisation_id='$orgid'";
                      $result=mysql_query($sql) or die("Error! ".mysql_error());
                      while($row=mysql_fetch_array($result,MYSQL_ASSOC))
                      {
                                
                            

                                $pro_name=$row["product_name"];
                                 $pro_typ=$row["product_type"];
                                $pro_qty=$row["product_qty"];

                                 $strspace=$row["storage_space"];
                                 $strduration=$row["storage_duration"];
                                 $tranop=$row["transport_opt"];
                                $address=$row["location"];
                                $user=$row["username"];
                                $phone=$row["contact_no"];
                                  
                                
                                
                                

                           echo" <tbody>
                                
                                <tr>   

                                    <td>$pro_name</td>
                                    <td>$pro_typ</td>
                                    <td>$pro_qty Kg </td>                                    
                                    <td>$strspace</td>
                                    <td>$strduration</td>
                                    <td>$tranop</td>
                                   <td>$address</td>
                                   <td>$user</td>
                                    <td>$phone</td>
                                    

                                </tr>
                            </tbody>";
                        }
                        ?>




                        </table>
                 
    
                        
                        
                        
                        
                        
                        
                        
                        </div>
              

                        
                        
            </div>
            </div>
            
            
            
        </div>           
        </div>     
        
 <?php include("includes/footer.php");?>
     