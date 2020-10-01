  <div class="card-body" style="height:80vh; overflow:auto;">
                     
               
                        <div class="row">
                      <div class="col-sm-3">
                           <center class=" pt-5 mt-5">
                               <h5 class="pt-3"><b><u>Profile</u></b></h5>
                                  
                                      <div class="widget pt-2">
                                           <input type="hidden" ng-model="pid">
                                        <img class="menu-images" ng-src="{{profileimage}}" style="width:190px;  height:170px;border:2px solid lightgray; margin-top:5px;" data-toggle="tooltip" data-placement="top" title="You can also upload profile image later."><br>
                                         <button type="button" class="btn btn-default" style="margin-top:-50px;"  data-toggle="tooltip" data-placement="top" title="Upload Photo" onclick="document.getElementById('editprofileImage').click()"><span class="icon-camera" style= "text-shadow: 1px 1px 3px #000; color:#fff;"></span></button>
                                        <input type='file' id="editprofileImage" ng-model="file" file-model="file" file-input="files" onchange="angular.element(this).scope().editprofileImage(this)" style="display:none"> <br>
                                       <!--<button class="btn btn-default text-info"><i class="fa fa-save"></i> Save Image</button>-->
                                       <button type="button" class="btn btn-default text-info"  data-toggle="tooltip" data-placement="top" title="Upload Photo" onclick="document.getElementById('editprofileImage').click()"><i class="fa fa-save"></i> Upload Image</span></button>
                                      </div>
                          </center>
                      </div>
                      <div class="col-sm-8 " style=" box-shadow:1px 1px 3px #ccc; padding:15px; margin-left:-20px; margin-top:100px;">
                          <div class="row">
                            <div class="col-sm-6" id="profildiv">
                                <input type="hidden" ng-model="pid">
                                 <span class="form-control" style="border:none;"><b>Name:</b> {{fname}} {{lname}}</span>
                                 <span class="form-control" style="border:none;"><b>Role:</b> {{role}} </span>
                                 <span class="form-control" style="border:none;"><b>Email:</b> {{email}} </span>
                                 <span class="form-control" style="border:none;"><b>User Name:</b> {{username}} </span><br>
                                 <button class="btn btn-info btn-sm ml-4" ng-click="showupdatediv(pid)">Update Profile</button>
                                 <button class="btn btn-info btn-sm " ng-click="changepass(pid)">Change Password</button>
                            </div>
                            
                                <div class="col-sm-6" id="updatediv" style="display:none;">
                                    <h5><b>Enter New Details</b></h5>
                                    <input type="hidden" ng-model="fname" >
                                    <input type="hidden" ng-model="pid" >
                                     <input type="text" ng-model="updatefname" placeholder = "Enter new First name.." class="form-control">
                                    <input type="hidden" ng-model="lname" class="form-control">
                                    <input type="text" ng-model="updatelname" placeholder = "Enter new Last name.." class="form-control">
                                    <input type="hidden" ng-model="contact" class="form-control">
                                    <input type="text" ng-model="updatecontact" placeholder = "Enter new Contact.." class="form-control">
                                    <input type="hidden" ng-model="email" class="form-control">
                                    <input type="text" ng-model="updateemail" placeholder = "Enter new Email address.." class="form-control"><br>
                                     <button class="btn btn-danger btn-xs" ng-click="backprofile()">Back</button>
                                    <button class="btn btn-info btn-xs" ng-click="updateprofileinfo()" type="submit">Submit</button>
                                  
                                </div>  
                                <div class="col-sm-6" id="changepassdiv" style="display:none;">
                                    <h5><b>Update Login Account</b></h5>
                                    <input type="hidden" ng-model="username" class="form-control">
                                    <input type="hidden" ng-model="pid" >
                                   <input type="text" ng-model="updateusername" placeholder="Your Username is: ' {{username}} ' Enter new User (OPTIONAL)" class="form-control">
                                   <input type="hidden" ng-model="password" class="form-control">
                                   <input type="password" ng-model="yourpassword" placeholder = "Enter your current password.." class="form-control">
                                   <input type="password" ng-model="newpassword" placeholder = "Enter new  password.." class="form-control">
                                   <input type="password" ng-model="confirmnewpass" placeholder = "Confirm new password.." class="form-control"><br>
                                    <button class="btn btn-danger btn-xs" ng-click="backprofile()">Back</button>
                                    <button class="btn btn-info btn-xs" ng-click="changeaccount()">Submit</button>
                                </div> 
                           </div>               
                                         
                      </div>
                      </div>
                      <!--<div class="container pt-5 pl-5 pr-5 pb-2" style="height:100%;">-->
                          
                      <!--    <div  style=" height:100%; box-shadow:1px 1px 4px #ccc;">-->
                      <!--       <h5 class="pt-3"><b><u>Profile</u></b></h5>-->
                                  
                      <!--                <div class="widget pt-2">-->
                      <!--                  <img class="menu-images" ng-src="../images/jhannprofile.jpg" style="width:190px;  height:170px;border:2px solid lightgray; margin-top:5px;" data-toggle="tooltip" data-placement="top" title="You can also upload profile image later."><br>-->
                      <!--                   <button type="button" class="btn btn-default"  data-toggle="tooltip" data-placement="top" title="Upload Photo" onclick="document.getElementById('GeteditcategoryImage').click()"><span class="icon-camera"></span> Select Image</button>-->
                      <!--                  <input type='file' id="GeteditcategoryImage" ng-model="file" file-model="file" file-input="files" onchange="angular.element(this).scope().editcategoryImage(this)" style="display:none"> -->
                                       
                      <!--                </div>-->
                                    
                                   
                      <!--                <div class="pt-3" style="width:50%;">-->
                                           
                      <!--                     <input  type="text" placeholder="Name: {{fname}} {{lname}}" style="padding:10px;border:none;border-bottom:1px solid lightblue; font-size:bold;"><br>-->
                      <!--                     <input  type="text" placeholder="Email: {{email}}" style="padding:10px;border:none;border-bottom:1px solid lightblue; font-size:bold;">-->
                      <!--                </div>-->
                                   
                                          
                                      
                                        
                               
                      <!--    </div>-->
                      <!--</div>-->
                    
   
</div> 


