 <div class="card-body">
     <div id="contentPDF" class="left" style="width: 47%; position: absolute; top: 0; left: 25%; z-index: -6; opacity: 0; background: #fff;">
    <div class="full-width-container left">
        <div class="left" style="width: 120px; height: 50px;">
            <img class="cover-img" src="images/canvasChatLogo.png">
        </div>
    </div>
    
    <div class="full-width-container left break-30">
        <p class="w-100 c-black c-center fs-13" id="reportDataTitle"></p>
        <p class="w-100 c-black c-center fs-11" id="reportDataDate"></p>
    </div>
    
    <div class="full-width-container left break">
        <p class="w-100 c-black fs-12 indent-10">Property: &nbsp;&nbsp;<b id="adminPropertyReport"></b></p>
        <p class="w-100 c-black fs-12 indent-10">Default price per Lead: &nbsp;&nbsp;<b id="defaultLeadPrice"></b></p>
        <p class="w-100 c-black fs-12 indent-10">No. of Leads: &nbsp;&nbsp;<b id="numberOfLeads"></b></p>
        <p class="w-100 c-black fs-12 indent-10">Payable amount: &nbsp;&nbsp;<b id="totalLeadPrice"></b></p>
    </div>
    
    <div class="full-width-container left break" >
        <table class="full-width-container">
            <tbody class="c-black" id="tableBody"></tbody>
        </table>
    </div>
</div>

<div id="contentPDFchats" class="left" style="width: 47%; position: absolute; top: 0; left: 0; z-index: -6; opacity: 0; background: #fff;">
    <div class="full-width-container left">
        <div class="left" style="width: 120px; height: 50px;">
            <img class="cover-img" src="images/canvasChatLogo.png">
        </div>
    </div>
    
    <div class="full-width-container left break-30">
        <p class="w-100 c-black c-center fs-13" id="reportDataTitleChat"></p>
        <p class="w-100 c-black c-center fs-11" id="reportDataDateChat"></p>
    </div>
    
    <div class="full-width-container left break">
        <p class="w-100 c-black fs-12 indent-10">Property: &nbsp;&nbsp;<b id="adminPropertyReportChat"></b></p>
        <p class="w-100 c-black fs-12 indent-10">No. of Chats: &nbsp;&nbsp;<b id="numberOfChats"></b></p>
    </div>
    
    <div class="full-width-container left break" >
        <table class="full-width-container">
            <tbody class="c-black" id="tableBodyChat"></tbody>
        </table>
    </div>
</div>

<div id="contentPDFmissed" class="left" style="width: 47%; position: absolute; top: 0; left: 0; z-index: -7; opacity: 0; background: #fff;">
    <div class="full-width-container left">
        <div class="left" style="width: 120px; height: 50px;">
            <img class="cover-img" src="images/canvasChatLogo.png">
        </div>
    </div>
    
    <div class="full-width-container left break-30">
        <p class="w-100 c-black c-center fs-13" id="reportDataTitleMissed"></p>
        <p class="w-100 c-black c-center fs-11" id="reportDataDateMissed"></p>
    </div>
    
    <div class="full-width-container left break">
        <p class="w-100 c-black fs-12 indent-10">Property: &nbsp;&nbsp;<b id="adminPropertyReportMissed"></b></p>
        <p class="w-100 c-black fs-12 indent-10">No. of Missed Chats: &nbsp;&nbsp;<b id="numberOfMissed"></b></p>
    </div>
    
    <div class="full-width-container left break" >
        <table class="full-width-container">
            <tbody class="c-black" id="tableBodyMissed"></tbody>
        </table>
    </div>
</div>
     
     
                      <div class="card" >
                        <div class="card-header catheader">
                            <h5><i class="fa fa-list"></i> Reports 
                                <span class="pull-right">
                                    Select Property:&nbsp;
                                    <select style="width: 220px;; height:30px; font-size:13px;border: 1px solid rgba(0,0,0,.2); outline: none; padding: 5px; color: rgba(0,0,0,.7);" ng-init="display_all_websites()"  ng-model="adminProperty" ng-change="changePropertyReports()">
                                        <option ng-repeat="i in beforeModalDisplay">{{ i.businessurl }}</option>
                                    </select>
                                </span>
                            </h5>
                            </div>
                    </div>
            <div class="card">
                <div class="row mt-3 pl-4 pr-5">
                    <div class="col-xl-2 col-md-6 mb-4  bhoechie-tab-menu">
                        <div class="list-group sample">
                            <input type="hidden" ng-model="dataReportsFilter">
                            <a class="list-group-item in active" data-toggle="tab" data-target="#A1" role="tab" aria-selected="true" ng-click="dataReports('leads')">
                                <h3 class="glyphicon glyphicon-envelope"></h3> Leads
                            </a>
                            <a  class="list-group-item " data-toggle="tab" data-target="#A1" role="tab"  aria-selected="true" ng-click="dataReports('chats')">
                                <h3 class="glyphicon glyphicon-eye-open"></h3>  Chats
                            </a>
                            <a  class="list-group-item "  data-toggle="tab" data-target="#A1" role="tab"  aria-selected="true" ng-click="dataReports('missedChats')">
                                <h3 class="glyphicon glyphicon-exclamation-sign"></h3> Missed Chats
                            </a>
                         
                        </div>
                    </div>
            
                            <div class="col-xl-10 col-md-6 mb-4  bhoechie-tab">
                                 <div class="tab-pane active" id="A1" role="tabpanel" aria-labelledby="Flight-tab" >
                                        <div class="tab-pane-container">
                        					<div class="card  mb-4 border-0">
                                                <!-- Card Header - Dropdown -->
                                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between" style="background:none;">
                                                    <!--<h6 class="m-0 font-weight-bold text-default"> <button class="btn btn-primary pull-right"> Download as PDF</button></h6>-->
                                                    <div class="fs-12" ng-init="filterDate()">
                                                        From:&nbsp;<input type="date" ng-model="fromDate"/>&nbsp;
                                                        To:&nbsp;<input type="date" ng-model="toDate"/>
                                                        <button ng-click="filterReports('')">Filter by Date</button>
                                                        <!--<button id="btn-Convert-Html2Image" ng-click="html_to_PDF()">Export reports to PDF</button>-->
                                                        <!--<button ng-click="savePDF()">Print/Save PDF</button>-->
                                                        <button ng-click="html_to_PDF()">Print/Save PDF</button>
                                                    </div>
                                                    <div class="dropdown no-arrow">
                                                        <a class="dropdown-toggle"  role="button" id="dropdownMenuLink" data-toggle="dropdown" data-target="dropdown-menu" aria-haspopup="true" aria-expanded="false">
                                                          <i class="fa fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" id="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                            <div class="dropdown-header"><u>Option</u></div>
                                                            <a class="dropdown-item" id="filterReport" ng-click="filterReports('daily')">Daily</a>
                                                            <a class="dropdown-item" id="filterReport" ng-click="filterReports('weekly')">Weekly</a>
                                                            <a class="dropdown-item" id="filterReport" ng-click="filterReports('monthly')">Monthly</a>
                                                            <a class="dropdown-item" id="filterReport" ng-click="filterReports('anually')">Anually</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Card Body -->
                                                <div class="card-body">
                                                  	<div class="w-95 margin-l-2point5p left break pos-rel-z1 mh-350" ng-init="filterReports('daily')">
                                                  	      <div zingchart id="chart-1" zc-json="myJson" zc-height="350"></div>
                                					</div>
                                                </div>
                                                <!--<div id="previewPDF"></div>-->
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
   
</div> 
<!-- To avoid the error in initializing the placeholder -->
<input type="hidden" id="widgetHeader">
<input type="hidden" id="widgetIntro">

