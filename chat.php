       
                  <div class="card-body" style="max-height: 100vh; overflow: auto;">
                    <div class="row">
                        <div class="col-sm-3 pb-3"   >
                             <div class="card-body" id="counters" style="height:91.5vh;overflow:auto; box-shadow:0px 0px 3px gray;border-radius:3px; padding-bottom:10px;">
                                    <!-- DERI ANG CONTENT  Na ng-repeat -->
                             </div>
                         </div>
                        <div class="col-sm-9" style="">
                          <div class="card" style="border:none; margin-left:-13px; ">
                                <div class="card-header catheader"> 
                                    <h5>Chat Box ni deri bai <span class="pull-right"></span></h5>
                              </div>
                               <div class="card">
                                  <div class="card-body" id="messagebody">
                                    <h5 > <i class="fa fa-user"></i>  {{chatname}}</h5>
                                <div class="conversation-panel" style="background: #ccc;">
                                     <div class="reverse">
                                        <ul class="batch-message-panel" >   
                                            <li ng-repeat="m in adminmessages">
                                                <div  id="message-box" ng-if="m.sender_role !='admin'">
                                                    <div class="messagecontainer">
                                                    <p style="font-size:15px;"><b ng-init="getsenderid(m.sender_uuid)">{{chatname}}:</b>{{m.content}}
                                                    <img ng-show="m.attachFile !='' && m.sender_role !='admin' " ng-src="https://hpchannelpartner.com/images/{{m.attachFile}}" style="width:100%;">
                                                    </p>
                                                    <label style="background:transparent;">{{m.date}}</label>
                                                    </div>
                                                </div>
                                                <div id="message-box2" ng-if="m.sender_role =='admin' ">
                                                    <div class="mcontainer">
                                                    <p><b ng-init="bodyOnLoad()">Admin {{fname}}: </b>{{m.content}} 
                                                    <img ng-show="m.attachFile !='' " ng-src="../images/{{m.attachFile}}" style="width:100%;">
                                                    </p>
                                                    
                                                    <label style="background:transparent;">{{m.date}}</label>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                
                            </div>
                            <input type='file' id="attachment" ng-model="file" file-model="file" file-input="files" onchange="angular.element(this).scope().attachFile(this)" class="pl-4-5" style="border:none; display:none;margin-left:10px;">
                            <center class="pb-3">
                            <div class="card-footer" style="background: #ccc; width: 94%;">
                                <div class="form-group" style="height:60px;">
                                <textarea class="form-control pull-left" id="adminsend" ng-model="adminsendmessage" style="width:88%; height:55px;"></textarea>
                                <button    id="adminsendbtn" style=" width:10%;height:55px; border:none; color: dodgerblue; margin-top:3px; "><i class="fa fa-paper-plane menu-icon" ng-click="adminsendMessage()" id="sendicon" style="transform:scale(1.3);"></i> <center><img  ng-src="../images/sending.gif" id="sendgif" style="width:30px; height:30px;display:none;"></center> </button>
                                </div>
                            </div>
                          </center>
                               </div>
                            

                   
                       
                        </div>
                      </div>
                        </div> 
                        </div> 
              



































