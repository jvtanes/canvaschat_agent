 <div class="card-body">
                      <div class="card">
                        <div class="card-header catheader"> <h5><i class="fa fa-history menu-icon"></i> Chat History</h5></div>
                    </div>
                     
                    <div class="card">
                          <table class="table table-bordered table-reponsive" ng-init="display_ChatHistory()">
                        	<thead>
                			    <tr>
                                    <th class="w-10">No.</th>
                                     <th class="w-20">Chat ID</th>
                                    <th class="w-15">Client/Visitor</th>
                                    <th class="w-20">Time started</th>
                                    <th class="w-15">Attended By</th>
                                    <th class="w-10">Status</th>
                                    <th class="w-10" style="text-align:center;">Action</th>
                                </tr>
                			</thead>
                			<tbody>
                				<tr ng-repeat = "i in chatHistoryArray  ">
                					  <td>{{ $index+1 }}</td>
                					  <td>{{ i.chatid }}</td>
                                    <td>{{ i.firstname }}</td>
                                    <td>{{ i.timeframe }}</td>
                                    <td ng-if="i.role !== null && i.agentfirstname !== null && i.agentlastname !== null">{{ i.agentfirstname + " " + i.agentlastname + " " + "( " + i.role + " )"  }}</td>
                                    <td ng-if="i.role === null && i.agentfirstname === null && i.agentlastname === null">Not attended</td>
                                    <td>{{ (i.converted == '1') ? 'Lead' : 'Not a lead' }}</td>
                                    <td style="text-align:center;">
                                        <button class="btn btn-primary btn xs"  ng-click="reviewThread(i.chathistory, i.chatid, i.firstname)"><i class="fa fa-eye"></i> Review</button>
                				</tr>
                
                			
                			</tbody>
				    </table>
                    </div>
   
</div> 

<div class="modal fade" id="viewThread">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <label><strong>Chat ID: {{ reviewHeader }}</strong></label>
                <button class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <ul class="w-100">
    			    <li ng-repeat="i in reviewConvo" style="border:none;">
    			        <div ng-if="i.sender_uuid != 0">
    			            <div ng-if="i.agentname == 'undefined'" style="width: 100%; float: left; font-size:13px; display: block; margin-bottom: 10px">
        			            <p style="max-width: 80%; padding: 15px; background: #fff; border:1px solid rgba(0,0,0,.2); color: #000; float: left; border-radius: 8px;">
        			                <b>{{i.visitorname}}:&nbsp;</b>
        			                {{i.content}}
        			            </p>
        			        </div>
        			        
        			        <div ng-if="i.agentname != 'undefined'" style="width: 100%; float: right; font-size:13px; display: block; margin-bottom: 10px">
        			            <p style="max-width: 80%; padding: 15px; background: #F2FFED; border:1px solid rgba(0,0,0,.2); color: #000; float: right; border-radius: 8px;">
        			                <b>{{i.agentname}}:&nbsp;</b>
        			                {{i.content}}
        			            </p>
        			        </div>
    			        </div>
    			        
    			        <div ng-if="i.sender_uuid == 0">
        			        <div style="width: 100%; float: right; font-size:13px; display: block; margin-bottom: 10px">
        			            <p style="max-width: 80%; padding: 15px; background: #F2FFED; border:1px solid rgba(0,0,0,.2); color: #000; float: right; border-radius: 8px;">
        			                <b>CanvasChat:&nbsp;</b>
        			                {{i.content}}
        			            </p>
        			        </div>
    			        </div>
    			    </li>
    			</ul>
            </div>
            <div class="modal-footer">
             
            </div>
        </div>
    </div>
</div>

<!-- To avoid the error in initializing the placeholder -->
<input type="hidden" id="widgetHeader">
<input type="hidden" id="widgetIntro">
