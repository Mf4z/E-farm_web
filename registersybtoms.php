  <?php include("includes/connection.php");?> 
  <?php include("includes/header4.php");?>
 
            <div class="col-md-2"></div>
        <div class="col-md-10">
            <div class="panel panel-default">
                <div class="panel panel-body">
                 <?php

                 if (isset($_POST["btnsym"])) 
                 {

                

                     
                     
                     $deasid=$_POST["deasesid"];
                
                     $affecrop=$_POST["affcrop"];
                   
                     $defsh=$_POST["defshape"];
                     $defcol=$_POST["defcolor"];
                    $defloc=$_POST["deflocatio"];
                    $defna=$_POST["defnature"];
                    $affearea=$_POST["affectedarea"];
                     $defarrang=$_POST["defarrangment"];
            

 $sql="INSERT INTO symptom (disease_id, affected_crop,defect_shape,defect_color,defect_location,defect_nature,affected_part_of_plant,defect_arrangement)   
                     VALUES(
                           '$deasid',
                           '$affecrop',                           
                         '$defsh',
                         '$defcol',
                        '$defloc',                      
                        '$defna',
                        '$affearea',                         
                        '$defarrang')" or die(mysql_error());
                    $query=mysql_query($sql) or die(mysql_error());
                    if($query)
                     {
                     
                      echo '<div class="alert alert-seccess">Symptoms inserted</div>';
                        }
                   else{
                       echo"Faild";
                      } 
                        
                    
                
  
                 
             }

                ?>
               
                    
                    
                    
                    <div class="row">
                        
                    <div class="col-md-10">
                        <!----Personel Registration-->
                        
            <div class="panel panel-default">
                
                <div class="panel panel-heading"> Register Symptoms</div>



                <form method="POST" enctype="multipart/form-data">
                <div style="margin-left:5px;">
               
                <div class="row">
                
                <div class="col-md-10">                  
                
                <input type="text" name="deasesid"  class="form-control" placeholder="Deases ID" required="">
                </div> 
                
                </div>
                 <br>
                 <div class="row">
                <div class="col-md-10">
                    
                     <input type="text" name="affcrop"  class="form-control" placeholder="Affected crop" required="">
                </div>
                
                
                </div>
                    <br>
                
                     <div class="row">
               
                <div class="col-md-10">
                    
                     <input type="text" name="defshape"  class="form-control" placeholder="Defect shape" required="">
                </div>
                    </div>
                        <br>
                <div class="row">
                  
                <div class="col-md-10">
                    
                     <input type="text" name="defcolor"  class="form-control" placeholder="Defect color" required="">
                </div>
                         
                </div>
                    <br>
                
                    
                
                     <div class="row">
               
                <div class="col-md-10">
                    
                     <input type="text" name="deflocatio"  class="form-control" placeholder="Defect location" required="">
                         </div>
                </div>
                    <br>
                <div class="row">   
                <div class="col-md-10">
                    
                     <input type="text" name="defnature"  class="form-control" placeholder="Defect nature" required="">
                          </div>
                </div>
                
                    <br>
               
                
                     <div class="row">
               
                <div class="col-md-10">
                    
                     <input type="text" name="affectedarea"  class="form-control" placeholder="Affected area" required="">
                         </div>
                </div>
                        <br>

                <div class="row">   
                <div class="col-md-10">
                    
                     <input type="text" name="defarrangment"  class="form-control" placeholder="Defect arrangment" required="">
                          </div>
                </div>
                
                    <br>

                
                </div>
                 
                <div class="row">
                 
                <div class="col-md-6">
                    
               <button class="btn btn-success" id="btnsym" name="btnsym">Submit</button>
                    
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
                <div class="col-md-2"></div>
            </div>
             
<?php include("includes/footer.php");?>
            
       
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    