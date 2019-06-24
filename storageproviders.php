<?php 

include("includes/connection.php");
?>
<?php 

include("includes/header2.php");
?>
            
            
        <div class="col-md-12">
                
                        <div class="panel panel-info">
        <div class="panel panel-body">
        <h3>Please register with any storage provider of your choice</h3><br>

         <?php
                        
                                
                  $select_sql='SELECT storage_service.organisation_id,organisation_name,price_per_kg_perishable,price_per_kg_nonperishable,min_weight_accepted,max_weight_accepted,tp_price,min_space_available,
                  max_space_available,
                  location,
                  contact_no,
                  photo,
             email 
FROM storage_service
JOIN
(SELECT organisation_id,organisation_name,location,contact_no, photo,email FROM organisation) AS info 
ON storage_service.organisation_id = info.organisation_id';

                $display=@mysql_query($select_sql) or die("Error! ".mysql_error());
                            while($row=mysql_fetch_array($display,MYSQL_ASSOC))
                   {

                    $org_id=$row["organisation_id"];
                    $org_name=$row["organisation_name"];
                    $org_email=$row["email"];
                    $org_location=$row["location"];
                    $org_contact=$row["contact_no"];
                    $org_photo=$row["photo"];
                      $org_maxspa=$row["max_space_available"];
                        $org_minspa=$row["min_space_available"];
                          $org_minw=$row["min_weight_accepted"];
                            $org_maxw=$row["max_weight_accepted"];
                             $org_ppkp=$row["price_per_kg_perishable"];
                              $org_ppknp=$row["price_per_kg_nonperishable"];
                               
                   
             //rpeated
             echo" <div class='row'>   
               
              
              <div class='col-md-3'>
                
                <div class='panel panel-info'>
                  
  <img src='images/$org_photo' width='280px' height='300px' class='img-circle' >
  </div>
     
      
    

   
  </div>
   <div class='col-md-4'>
  
    <ul>
      <li class='list-group-item'>Name: <span class='badge'>$org_name</span></li><br>
      <li class='list-group-item'>Address:<span class='badge'> $org_location</span></li><br>
      <li class='list-group-item'>Email:<span class='badge'> $org_email</span></li><br>
     
      <li class='list-group-item'>Price per kg pershibale: <span class='badge'>$org_ppkp</span></li><br>
         <li class='list-group-item'>Contact: <span class='badge'>$org_contact</span></li><br>
    
     
     
    </ul></div>
    <div class='col-md-5'>
        <ul>
         <li class='list-group-item'>Price per kg non-pershibale: <span class='badge'>$org_ppknp</span></li><br>
      <li class='list-group-item'>Minimum weight accepted:<span class='badge'> $org_minw</span></li><br>
      <li class='list-group-item'>Maximum weight accepted:<span class='badge'> $org_maxw</span></li><br>
      <li class='list-group-item'>Minimum space available: <span class='badge'>$org_minspa</span></li><br>
       <li class='list-group-item'>Maxmimum space available:<span class='badge'> $org_maxspa</span></li><br>
    <a href='store.php?orgid=$org_id'><button class='btn btn-success btn-lg btn-block'>Register with us</button></a><br>     
        
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
           
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    