
  <?php include("includes/connection.php");?> 
 <?php include("includes/functions.php");?> 
 <?php include("includes/header4.php");?>
 
  
      
            <div class="row">


       <div class="col-md-12"></div>
        <?php

if(isset($_GET["orgaid"]))

{
  $org_id=$_GET["orgid"];

  $query="DELETE FROM organisation WHERE organisation_id=$org_id";
  $result=mysql_query($query) or die(mysql_error());
  if ($result) {
    echo'<div class="alert alert-default" style=width:250px; padding:5px;>Product is deleted</div>';
    redirect_to("myproducts.php");
     

  }
  else
  {
    echo "Error";
  }

}
 ?>

                                


           </div>
        <div class="col-md-6">
            <div class="panel panel-default">
           
                
                <div class="panel-heading">All Organisations</div>
                <div class="panel-body">
                 <div class="row">
                 <div class="col-md-12">
                 <div class="dataTable_wrapper">
                    
                   <table class="table table-striped table-bordered table-hover table-condensed">
                     <thead class="alert alert-warning">
                      <tr >
                                            <th>Image</th>
                                            <th>Organisation Name</th>
                                            <th>Operational ID</th>
                                            <th>Year of stablished</th>
                                             <th>Address</th>
                                            <th>Phone Number</th> 
                                             <th>Email</th>  
                                             <th>Price per kg perishable</th>  
                                             <th>Price per kg non-perishable</th>  
                                             <th>Minimum weight</th> 
                                             <th>Maxmimum weight</th> 
                                             
                                             <th>Mimimum space</th> 
                                               <th>Maxmimum space</th> 
                                                 <th>Transport Fee</th>                     
                                        
                                            <th>Delete</th>
                                             
                                            
                                             
                                             </tr>
                  
                     </thead>
                    <?php

                    
                      $sql="SELECT storage_service.organisation_id,organisation_name,operational_id,year_of_est,location, contact_no, email,photo,
price_per_kg_perishable,
price_per_kg_nonperishable,
min_weight_accepted,
max_weight_accepted,
tp_price,
min_space_available,
max_space_available,
location,
contact_no,
email 
FROM storage_service
JOIN
(SELECT organisation_id,organisation_name,operational_id,year_of_est,location,contact_no,email,photo FROM organisation) AS info 
ON storage_service.organisation_id = info.organisation_id";
                      $result=mysql_query($sql) or die("Error! ".mysql_error());
                      while($row=mysql_fetch_array($result,MYSQL_ASSOC))
                      {
                                

                                $orgaid=$row["organisation_id"];

                                $img=$row["photo"];
                                
                                $org_name=$row["organisation_name"];
                                 $opid=$row["operational_id"];
                                
                                $yrofst=$row["year_of_est"];
                                 $address=$row["location"];
                                  $phone=$row["contact_no"];
                                  $email=$row["email"];
                                 $ppkp=$row["price_per_kg_perishable"];
                                 $ppknp=$row["price_per_kg_nonperishable"];
                                 $minwa=$row["min_weight_accepted"];
                                 $maxwa=$row["max_weight_accepted"];
                                 
                                 $minspace=$row["min_space_available"];
                                $maxsapace=$row["max_space_available"];
                                $trans=$row["tp_price"];
                                

                       echo"<tbody>

                      <tr  class='odd-gradex'>
                      
                        <td><img src='images/$img' style width=100px height=100px></td>
                        <td> $org_name</td>
                         <td>$opid</td>
                        <td>$yrofst</td>
                        <td>$address</td>
                         <td>$phone</td> 
                        <td>$email</td>
                         <td>$ppkp</td>
                         <td>$ppknp</td>
                         <td>$minwa</td>
                         <td>$maxwa</td>
                         <td>$minspace</td>
                         <td>$maxsapace</td>
                           <td>$trans</td>
                       
                      

                       
                        
                        <td><a href='veiworg.php?orgid=$orgaid'><span class='fa fa-trash-o'> Delete</span></a></td>
                        
                        
                        
                                                

                        
                        
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
     