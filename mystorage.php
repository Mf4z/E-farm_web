 
 <?php include("includes/connection.php");?>
  <?php include("includes/functions.php");?>
 <?php include("includes/header2.php");?>
 
     
            
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel panel-heading">My Storage</div>
                <div class="panel-heading"></div>
                <div class="panel-body">
                    <div class="row">
                    <div class="col-md-12">
                        
                    <table class="table table-striped table-bordered table-hover table-condensed">
                            
                      <thead class="alert alert-warning">
                          
                          <tr class="alert alert-default">
                        <th>Organisation Name</th>
                        

                        <th>Address</th>       
                        <th>Contact</th>
                        <th>Email(s)</th>
                        <th>Product Name</th>
                        <th>Product type</th>
                        <th>Product quantity</th>
                        <th>Storage Space</th>
                        <th>Storage Duration</th>
                        <th>Transportation</th>
                       


                          </tr>
                      </thead>

                      <?php

                      $userid=$_SESSION['username'];
                      $sql=" SELECT organisation_name, location, contact_no, email,product_name,product_type,product_qty,storage_space,storage_duration,duration,transport_opt FROM organisation JOIN (SELECT organisation_id,product_name,product_type,product_qty,storage_space,storage_duration,duration,transport_opt FROM farmer_storage WHERE username='$userid') AS info ON organisation.organisation_id = info.organisation_id";
                      $result=mysql_query($sql) or die("Error! ".mysql_error());
                      while($row=mysql_fetch_array($result,MYSQL_ASSOC))
                      {
                                
                                $orgname=$row["organisation_name"];

                                $address=$row["location"];
                                $phone=$row["contact_no"];
                                  $Email=$row["email"];
                                
                                $pro_name=$row["product_name"];
                                 $pro_typ=$row["product_type"];
                                $pro_qty=$row["product_qty"];
                                
                                
                                 $strspace=$row["storage_space"];
                                  $dur=$row["duration"];
                                 $strduration=$row["storage_duration"];
                                 $tranop=$row["transport_opt"];
                                 


                          echo"  <tbody>
                                
                                <tr>
                                     <td>$orgname</td>
                                    <td>$address</td>
                                    <td>$phone</td>
                                    <td>$Email</td>
                                    <td>$pro_name</td>
                                    <td>$pro_typ</td>
                                    <td>$pro_qty Kg </td>
                                    <td>$strspace</td>
                                    <td>$dur $strduration</td>
                                    <td>$tranop</td>

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
     