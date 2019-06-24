 
 <?php include("includes/connection.php");?>
  <?php include("includes/functions.php");?>
 <?php include("includes/header3.php");?>
 
     
            
        <div class="col-md-12">
            <div class="panel panel-default">
                
                <div class="panel-heading"></div>
                <div class="panel-body">
                    <div class="row">
                    <div class="col-md-12">
                        <table class="table table-striped table-bordered table-hover table-condensed">
                            
                      <thead class="alert alert-warning">
                          
                          <tr>
                        <th>Organisation ID</th>
                        <th>Price per kg pershibale</th>
                        <th>Price per kg non-pershibale</th>
                        <th>Minimum Weight</th>
                        <th>Maxmimum Weight</th>
                        <th>Transport Price</th>
                       
                        <th>Minimum Space</th>
                        <th>Maxmimum Space</th>
                       


                          </tr>
                      </thead>

                       <?php

                      $orga_id=$_SESSION['org_id'];
                      $sql="SELECT *FROM storage_service WHERE organisation_id='$orga_id' ORDER BY RAND() LIMIT 0,9";
                      $result=mysql_query($sql) or die("Error! ".mysql_error());
                      while($row=mysql_fetch_array($result,MYSQL_ASSOC))
                      {
                       

                                $orgn_id=$row['organisation_id'];
                               $priceperkgp=$row["price_per_kg_perishable"];  
                               $priceperkgn=$row["price_per_kg_nonperishable"];    
                               $mwa=$row["min_weight_accepted"];
                                 $maxwa=$row["max_weight_accepted"];
                                $tp_p=$row["tp_price"];
                                 $minsp=$row["min_space_available"];
                                $maxsp=$row["max_space_available"];

                   

                          echo"  <tbody>
                                
                                <tr>
                                     
                                    <td>$orgn_id</td>
                                    <td>$priceperkgp</td>
                                    <td>$priceperkgn</td>
                                    <td>$mwa</td>
                                    <td>$maxwa</td>
                                    <td>$tp_p</td>
                                    <td>$minsp</td>
                                    <td>$maxsp</td>

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
     