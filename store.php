<?php 
include("includes/connection.php");?>
<?php 
include("includes/functions.php");?>
<?php 
include("includes/header2.php");?>
 

             
            <div class="col-md-2">
               
            </div>
            <?php

            if(isset($_GET["orgid"]))

              {
              $org_id=$_GET["orgid"];
              }
?>
        <div class="col-md-10">

            <div class="panel panel-default">
               <div class="panel panel-heading">Store your Product</div>
                <div class="panel panel-body">
              <div class="row">
              <div class="col-md-1"></div>
              <div class="col-md-10">
               <form role="form" method="post">
               <?php

               if(isset($_POST["btnorgreg"]))
           {  

    
 
                   $pro_name=$_POST["txtproductnm"];
                 
                   $location=$_POST["txtlocation"];  
                   $contact=$_POST["txtcontact"];                     
                  $pro_type=$_POST["txtprducttype"];
                  $quantity=$_POST["txtqty"];
                  $stspace=$_POST["txtstoragespace"];
                   $duration=$_POST["txtduration"];

                    $dur=$_POST["txtdur"];
                   $tr_price=$_POST["txttransport"];
                  $userid=$_SESSION['username'];
                  $org="$org_id";

    
    $sql="INSERT INTO farmer_storage (organisation_id,product_name,location,contact_no,product_type,product_qty,storage_duration,duration,storage_space,transport_opt,username)
     VALUES(
           '$org',
       '$pro_name',
      '$location',
      '$contact',
       '$pro_type',
       '$quantity',     
      '$duration',
       '$dur',
      '$stspace',
      '$tr_price',
      '$userid')";
       $query=mysql_query($sql);
       confirm_query($query);
        if ($query) {
    echo'<div class="alert alert-default" style=width:250px; padding:5px;>Thank you for registering with us </div>';
       
       }

         }




               ?>
               
                
                     <div class="row">
                
                <div class="col-md-10">                  
                
                <input type="text" name="txtproductnm"  class="form-control" placeholder="Product name" required="">
                </div> 
                
                </div>
                 <br>
                
                   
                
                     <div class="row">
               
                <div class="col-md-10">
                    
                     <input type="text" name="txtlocation"  class="form-control" placeholder="Your address" required="">
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
                    
                     <input type="number" name="txtqty"  class="form-control" placeholder="Product quantity" required="">
                         </div>
                </div>
                    
                    <br>
                    
                        <div class="row">
               
                <div class="col-md-10">
                <div class="control-group">
                <label class="control-label">Product type</label>
                    <select name="txtprducttype" class="control"  style="width:200px  height:200px;padding:5px;" required=""><br>
                   <option>Select...</option>
                  <option>Perishable</option>
                  <option>Non-perishable</option>
                                  
                 </select></div>
                 
                </div>
                    </div>
                        <br>
                        <div class="row">
               
                <div class="col-md-10">
                <div class="control-group">
                <label class="control-label">Storage Space</label>
                
                    <select name="txtstoragespace" class="control"  style="width:200px  height:200px;padding:5px;" required=""><br>
                   <option>Select...</option>
                   <option>Specify</option>
                  <option>20 X 20 meters</option>
                  <option>40 x 20 meters</option>
                                  
                 </select>
                  <input type="text" name="txtstoragespace"  class="control" placeholder="e.g 10 X 5">

                 </div>
                 
                </div>
                    </div>
                        <br>
                
                <div class="row">
               
                <div class="col-md-10">
                <div class="control-group">
                <label class="control-label">Storage Duration</label>

                  
                    <select name="txtduration" class="control"  style="width:200px  height:200px;padding:5px;" required=""><br>
                   <option>Select...</option>
                    <option>Days</option>

                  <option>Weeks</option>
                  <option>Month</option>
                   <option>Year</option>

                                  
                 </select>
                  <input type="number" name="txtdur"  class="control" placeholder="Number of days Example (16)" required="">
                         </div>
                         </div>
                 
                </div>
                <br>
                 <div class="row">
               
                <div class="col-md-10">
                <div class="control-group">
                <label class="control-label">Transport Fee</label>
                    <select name="txttransport" class="control"  style="width:200px  height:200px;padding:5px;" required=""><br>
                   <option>Select...</option>
                  <option>Yes</option>
                  <option>No</option>
                                  
                 </select></div>
                 
                </div>
                    </div>
                        <br>
                       
                    </div>
                        <br>
                
                     
                </div>
                 
                <div class="row">
                 
                <div class="col-md-6">
                    
               <button class="btn btn-success" id="btnuser" name="btnorgreg" style="margin-left:80px;">Submit</button>
                    
                </div>
                <div class="col-md-6">
                    
                     <button class="btn btn-warning">Cancel</button>
                </div>
                
                      </div>
                      </form></div>
                      <div class="col-md-1"></div>
                
                
                  




  

               </div>
                    

                      </div>
                  
                  
                    
                    
                    </div>              
                    </div>
                    </div>
                </div>
        <?php include("includes/footer.php");
?>
           
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    