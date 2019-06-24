
  <?php include("includes/connection.php");?> 
 <?php include("includes/functions.php");?> 
 <?php include("includes/header4.php");?>
 
  
      
            <div class="row">


       <div class="col-md-12"></div>
       
                                


           </div>
        <div class="col-md-12">
            <div class="panel panel-default">
            <?php

if(isset($_GET["farmerid"]))

{
  $farmer_id=$_GET["farmerid"];

  $query="DELETE FROM farmer WHERE username='$farmer_id'";
  $result=mysql_query($query) or die(mysql_error());
  if ($result) {
    echo'<div class="alert alert-warning" style=width:250px; padding:5px;>Farmer is deleted</div>';
    
     

  }
  else
  {
    echo "Error";
  }

}
 ?>

                
                <div class="panel-heading">All Products</div>
                <div class="panel-body">
                 <div class="row">
                    
                   <table class="table table-striped table-bordered table-hover">
                     <thead class="alert alert-warning">
                      <tr >
                                            <th>Image</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Address</th>
                                             <th>Email(s)</th>
                                            <th>Username</th> 
                                             <th>Phone Number</th>  
                                                       
                                          
                                        
                                            <th>Delete</th>
                                             
                                            
                                             
                                             </tr>
                  
                     </thead>
                    <?php

                
                      $sql="SELECT *FROM farmer ORDER BY RAND() LIMIT 0,9";
                      $result=mysql_query($sql) or die("Error! ".mysql_error());
                      while($row=mysql_fetch_array($result,MYSQL_ASSOC))
                      {
                                $img=$row["photo"];
                                
                                $f_name=$row["first_name"];
                                 $l_name=$row["last_name"];
                                
                                $address=$row["location"];
                                 $email=$row["email"];
                                  $username=$row["username"];
                                  $phone=$row["contact_no"];
                                

                       echo"<tbody>

                      <tr  class='odd-gradex'>
                      
                        <td><img src='images/$img' style width=100px height=100px></td>
                        <td> $f_name</td>
                         <td>$l_name</td>
                        <td>$address</td>
                        <td>$email</td>
                         <td>$username</td> 
                        <td>$phone</td>
                      
                       
                      

                       
                        
                   <td><a href='veiwfarmers.php?farmerid=$username'><span class='fa fa-trash-o'> Delete</span></a></td>
                        
                        
                        
                                                

                        
                        
                        </tr>
                    </tbody>";
                      }



                    ?>
                    

                   </table>
                        
                </div>
            
            
            
        </div>           
        </div>     
        
 <?php include("includes/footer.php");?>
     