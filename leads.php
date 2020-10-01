<div class="card-body">
                      <div class="card" id="category">
                        <div class="card-header catheader"> <h5><i class="fa fa-newspaper-o"></i> Leads <span class="pull-right"><input type="text" style="border:1px solid #ccc" class="pt-1 pb-1 pl-2" placeholder="Search.." ng-model="searchfilter"><i class="fa fa-search" style="margin-left:5px;"></i></span></h5> </div>
                    </div>
                     
                        
                   
                    <div class="card">
                    <table class="table table-bordered table-reponsive" ng-init="display_leads()">
                    <thead>
                        <tr>
                            <th class="w-20"> Chat ID:</th>
                            <th class="w-20">Agent Name:</th>
                            <th class="w-15"> Client Name:</th>
                           <th class="w-15"> Property:</th>
                           <th class="w-15">Date</th>
                           <th class="w-10">Status</th>
                            <th class="w-15"  style="text-align:center;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr ng-repeat="l in leadResponse | filter:searchfilter">
                            <td>{{l.chat_id}}</td>
                            <td>{{l.agent}}</td>
                            <td>{{l.visitor}}</td>
                           <td>{{l.website}}</td>
                           <td>{{l.date}}</td>
                           <td ng-if="l.mark == 'lead'" style="color:red;">{{l.status}}</td>
                           <td ng-if="l.mark == 'waiting' " style="color:blue;">Sending Dispute</td>
                            <td style="text-align:center;">
                                    <button class=" btn btn-primary" ng-click="reviewlead(l.thread, l.chat_id, l.visitor,l.mark,l.status)" >
                                        Review
                                    </button>
                            </td>
                        </tr>
                    </tbody>
				</table>
			
                    </div>
   
</div> 

<input type="hidden" id="widgetHeader">
<input type="hidden" id="widgetIntro">

	<div class="modal fade" id="viewlead">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <label><strong>Chat ID: {{ChatID}}</strong></label>
                <button class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <ul class="w-100">
    			    <li ng-repeat="i in leadConvo" style="border:none;">
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
                <input type="hidden" ng-model="ChatID">
                <input type="hidden" ng-model="mark">
                <input type="hidden" ng-model="leadstatus">
                <span  ng-if = "mark =='waiting' "><label style="color:red;">" Dispute request already sent! Waiting for approval."</label></span>
                <span  ng-if = "leadstatus =='Paid' "><label style="color:blue;">"This Lead Already paid"</label></span>
                <span ng-if = "mark =='lead' && leadstatus=='Unpaid' "><button  class= "btn btn-sm btn-danger" ng-click="dispute(ChatID)">Dispute</button></span>
             
            </div>
        </div>
    </div>
</div>



