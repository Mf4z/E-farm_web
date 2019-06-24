<?php 

include("includes/connection.php");
?>
<?php 

include("includes/header2.php");
?>
            
            
        <div class="col-md-12">
                
                        <div class="panel panel-info">
        <div class="panel panel-body">
        <h1>Welcome to your store</h1><br>

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
                                 
             //rpeated
             echo" <div class='row'>   
               
              
              
            <div class='col-md-6'>
  
    <ul>
      <li class='list-group-item'>Organisation Name:<span class='badge'>$orgname</span></li><br>
      <li class='list-group-item'>Address:<span class='badge'> $address</span></li><br>
      <li class='list-group-item'>Email:<span class='badge'> $Email</span></li><br>
       <li class='list-group-item'>Contact: <span class='badge'>$phone</span></li><br>
        <li class='list-group-item'>Product Name: <span class='badge'>$pro_name</span></li><br>
     
     
        
    
     
     
    </ul></div>
    <div class='col-md-6'>
        <ul>
         <li class='list-group-item'>Product type: <span class='badge'>$pro_typ</span></li><br>
        <li class='list-group-item'>Product Quantity: <span class='badge'>$pro_qty kg</span></li><br>
          <li class='list-group-item'>Storage space: <span class='badge'>$strspace</span></li><br>
         <li class='list-group-item'>Duration: <span class='badge'>$dur  $strduration</span></li><br>
      <li class='list-group-item'>Transport fee:<span class='badge'> $tranop</span></li><br>
    <br>     
        
        </ul>
                  
                  </div>
                  
                  
  

               </div>         
            <hr>";
          }
            ?>
            <!----end of the loop---->
                    
            
                    
            

            </div>
            </div>
            </div>
                  
                  
                    
                    
                            
                    
                    
                
        <?php include("includes/footer.php");
?>
           
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    