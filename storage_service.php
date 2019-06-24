  <?php include("includes/functions.php");?>
 <?php include("includes/connection.php");?>
  <?php include("includes/header3.php");?>
 
     
            
        <div class="col-md-12">
            <div class="panel panel-default">
                
                <div class="panel-heading"></div>
                <div class="panel-body">
                    <div class="row">
                      <div class="col-md-4"></div>
                    <div class="col-md-6">

                 <?php 

                 if(isset($_POST["btnservice"]))
 {  

    //get all submitted data from the form
    
  
  $orgn_id=$_SESSION['org_id'];
  $priceperkgp=$_POST["txtperkgp"];  
    $priceperkgn=$_POST["txtperkgnp"];    
    $mwa=$_POST["txtmin"];
    $maxwa=$_POST["txtmax"];
    $tp_p=$_POST["txttransport"];
    $minsp=$_POST["txtminspace"];
    $maxsp=$_POST["txtmaxspace"];
   
    
    $sql="INSERT INTO storage_service (organisation_id,price_per_kg_perishable,price_per_kg_nonperishable,  min_weight_accepted,max_weight_accepted,tp_price,min_space_available,max_space_available)
     VALUES('$orgn_id',
       '$priceperkgp',
       '$priceperkgn',
      '$mwa',
    '$maxwa',
    '$tp_p',
    '$minsp',
    '$maxsp')";
    $query=mysql_query($sql);
    confirm_query($query);
     if($query)
    {
        echo '<div class="alert alert-success" style=width:250px; padding:5px;>Successfully Uploaded</div>';

        redirect_to("myservice.php");
    }
    else{
       echo '<div class="alert alert-warning">Faild ! please try again</div>';
       
    }

  }
 ?>

                    
                        
                        <form method="POST">
                             <div class="row">
                
                <div class="col-md-10">                  
                
                <input type="text" name="txtperkgp"  class="form-control" placeholder="Price per kg perishibale" required="">
                </div> 
                
                </div>
                 <br>
                 <div class="row">
                <div class="col-md-10">
                    
                     <input type="text" name="txtperkgnp"  class="form-control" placeholder="Price per kg no-perishibale" required="">
                </div>
                
                
                </div>
                    <br>
                    <div class="row">
                <div class="col-md-10">
                    
                     <input type="text" name="txtmin"  class="form-control" placeholder="Minimum weight accepted" required="">
                </div>
                
                
                </div>
                    <br>
                    <div class="row">
                <div class="col-md-10">
                    
                     <input type="text" name="txtmax"  class="form-control" placeholder="Maximun weight accepted" required="">
                </div>
                
                
                </div>
                    <br>
    
                <div class="row">
                <div class="col-md-10">
                    
                     <input type="text" name="txttransport"  class="form-control" placeholder="Transport price" required="">
                </div>
                
                
                </div>
                    <br>
                    <div class="row">
                <div class="col-md-10">
                    
                     <input type="text" name="txtminspace"  class="form-control" placeholder="Minimum space available" required="">
                </div>
                
                
                </div>
                    <br>
                     <div class="row">
                <div class="col-md-10">
                    
                     <input type="text" name="txtmaxspace"  class="form-control" placeholder="Maxmimum space available" required="">
                </div>
                
                
                </div>
                    <br>
                     <div class="row">
                 
                <div class="col-md-6">
                    
               <button class="btn btn-success" id="btnservice" name="btnservice">Submit</button>
                    
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
        
 <?php include("includes/footer.php");?>
     