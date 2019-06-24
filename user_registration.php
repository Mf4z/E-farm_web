 <?php include("includes/header.php");?>
 
            
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel panel-body">
                    
                    
                    
                    <div class="row">
                        
                    <div class="col-md-6">
                        <!----Personel Registration-->
                        
            <div class="panel panel-default">
                
                <div class="panel panel-heading"> Register as a user </div>
                <form role="form" method="post">
                <div style="margin-left:5px;">
                
                     <div class="row">
                
                <div class="col-md-10">                  
                
                <input type="text" name="txtname"  class="form-control" placeholder="First Name">
                </div> 
                
                </div>
                 <br>
                 <div class="row">
                <div class="col-md-10">
                    
                     <input type="text" name="txtlname"  class="form-control" placeholder="Last Name">
                </div>
                
                
                </div>
                    <br>
                    <div class="row">
               
                <div class="col-md-10">
                <div class="control-group">
                <label class="control-label">City</label>
                    <select class="control" style="width:200px  height:200px;padding:5px;"><br>
                   <option>Select...</option>
                  <option>Kampala</option>
                  <option>Mbale</option>
                  <option>Iganga</option>
                  <option>Jinja</option>
                 </select></div>
                 
                </div>
                    </div>
                        <br>
                
                     <div class="row">
               
                <div class="col-md-10">
                    
                     <input type="text" name="txtlocation"  class="form-control" placeholder="Address">
                </div>
                    </div>
                        <br>
                <div class="row">
                  
                <div class="col-md-10">
                    
                     <input type="text" name="txtcontact"  class="form-control" placeholder="Contact">
                </div>
                         
                </div>
                    <br>
                
                    
                
                     <div class="row">
               
                <div class="col-md-10">
                    
                     <input type="text" name="email"  class="form-control" placeholder="Email Address">
                         </div>
                </div>
                    <br>
                <div class="row">   
                <div class="col-md-10">
                    
                     <input type="text" name="txtusername"  class="form-control" placeholder="Username">
                          </div>
                </div>
                
                    <br>
               
                
                     <div class="row">
               
                <div class="col-md-10">
                    
                     <input type="text" name="txtpass"  class="form-control" placeholder="Password">
                         </div>
                </div>
                        <br>
                <div class="row">
                     
                <div class="col-md-10">
                    
                     <input type="text" name="txtretype"  class="form-control" placeholder="Re-type password">
                </div>
                </div>
                <br>
                <div class="row">
                
                <div class="col-md-10">  
                <label>Upload you profile picture</label>                
                
                <input type="file" name="image">
                </div> 
                
                </div>
                 <br></div>
                 
                <div class="row">
                 
                <div class="col-md-6">
                    
               <button class="btn btn-success">Submit</button>
                    
                </div>
                
                        
                 
                <div class="col-md-6">
                    
                     <button class="btn btn-warning" id="btnuser" name="btnuser">Cancel</button>
                </div>
                </div>
                    <br>
                  
                </form>
                        
                        </div>
                </div>
                
                        
                    
                    <div class="col-md-6">             
                        
                         
                   <div class="panel panel-default">
                       
                       <div class="panel panel-heading">Register as an organization</div>
                       <form role="form" method="post">
                      <div style="margin-left:25px;">
                      <div class="row">
                   <div class="col-md-10">                  
                
                <input type="text" name="txtname"  class="form-control" placeholder="Organazation name">
                </div>
                        
                 </div>
                
                
                 <br>
                 <div class="row">
                   <div class="col-md-10">                  
                
                <input type="text" name="txtlid"  class="form-control" placeholder="Operational Licence ID">
                </div>
                        
                 </div>
                
                
                 <br>
                 <div class="row">
                   <div class="col-md-10">                  
                
                <input type="dateTime" name="txtdate"  class="form-control" placeholder="Date">
                </div>
                        
                 </div>
                
                
                 <br>
                 <div class="row">
                <div class="col-md-10">
                    
                     <input type="text" name="txtlname"  class="form-control" placeholder="location">
                </div>
                
                
                </div>
                    <br>
                     <div class="row">
                  
                <div class="col-md-10">
                    
                     <input type="text" name="txtcontact"  class="form-control" placeholder="Contact">
                </div>
                         
                </div>
                    <br>
                
                    
                
                     <div class="row">
               
                <div class="col-md-10">
                    
                     <input type="text" name="email"  class="form-control" placeholder="Email Address">
                         </div>
                </div>
                    <br>
                <div class="row">   
                <div class="col-md-10">
                    
                     <input type="text" name="txtusername"  class="form-control" placeholder="Username">
                          </div>
                </div>
                
                    <br>
               
                
                     <div class="row">
               
                <div class="col-md-10">
                    
                     <input type="text" name="txtpass"  class="form-control" placeholder="Password">
                         </div>
                </div>
                        <br>
                <div class="row">
                     
                <div class="col-md-10">
                    
                     <input type="text" name="txtretype"  class="form-control" placeholder="Re-type password">
                </div>
                </div>
                <br>

                 

                      <div class="row">
                
                <div class="col-md-10">  
                <label>Upload a picture</label>                
                
                <input type="file" name="image">
                </div> 
                
                </div>
                 <br>
                 <div class="row">
                 
                <div class="col-md-6">
                    
               <button class="btn btn-success">Submit</button>
                    
                </div>        
                        
                 
                <div class="col-md-6">
                    
                     <button class="btn btn-warning">Cancel</button>
                </div>
                </div>
                          
                           
                      </div>
                   
                        
                           
                       </form>
                        </div>
                        </div>
                    
                    
                    </div>
                    <!--validation side---->
                   <!-- <div class="alert alert-danger">Registration faild</div>-->
                
              
                
            </div>
                </div>
            </div>
             
<?php include("includes/footer.php");?>
            
       
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    