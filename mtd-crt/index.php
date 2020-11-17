<!DOCTYPE html>
<html>
    <head>
        <title>Summary</title>

        <!--Boostrap-->
        <link rel="stylesheet" href="../dependencies/bootstrap-4.5.0/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="../dependencies/css/bootstrap-select.css">
                   
        <!--Fontawesome-->        
        <link href="../dependencies/fontawesome/css/font-awesome.min.css" rel="stylesheet">
          
        <!--Data Table-->
        <!-- <link rel="stylesheet" href="../dependencies/DataTables/css/datatables.min.css">
        <link rel="stylesheet" href="../dependencies/DataTables/css/datatables.css"> -->
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">

       <style>
        label {font-weight:600; font-size: 12px;}
        select[multiple] { font-size: 12px;}
        .primary_table {background-color: rgb(31,78,120); color:white}
        .primary_table_color {background-color: rgb(221,235,247);}
        table thead th, tfoot th{font-weight:600; font-size: 14px;}    
        .table-child {width:1px;white-space:nowrap; text-align:center;}

       
        td.details-control {background: url('../assets/images/plus.png') no-repeat center center; cursor: pointer; background-size: 17px; margin:auto;  }
        tr.shown td.details-control { background: url('../assets/images/minus.png') no-repeat center center; background-size: 17px; margin:auto;}

        /* width */
        ::-webkit-scrollbar { width: 10px; }

        /* Track */
        ::-webkit-scrollbar-track { background: #f7f7f7; }
 
        /* Handle */
        ::-webkit-scrollbar-thumb {background: #888; }

        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {background: #555;}
       </style>
    </head>
    <body>
        <nav id="navbar" class="navbar navbar-expand-lg navbar-light bg-light shadow fixed-top">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                        <a class="navbar-brand" href="/hawk/dashboard/">
                            <img src="../assets/clients/CDS UK/media/cur-logo.png" width="30" height="35" class="d-inline-block align-top" alt="">
                            CDS UK                    </a>
                        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                            <li class="nav-item">
                                <a class="nav-link " id="dashboard" href="../dashboard/">Dashboard </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="historical" href="../historical/">Historical</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="auxes" href="../auxes/" tabindex="-1" aria-disabled="true">Auxes</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="performance" href="../performance/" tabindex="-1" aria-disabled="true">Performance</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="roster" href="../roster/" tabindex="-1" aria-disabled="true">Roster</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="staffing" href="../staffing/" tabindex="-1" aria-disabled="true">Staffing</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="mappings" href="../mappings/" tabindex="-1" aria-disabled="true">Mapping</a>
                            </li>
                            <li class="nav-item dropdown" id="custom-table">
                                <a class="nav-link dropdown-toggle" id="custom" href="../custom-table/" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Custom Table</a>                            
                                <div class="dropdown-menu pages" aria-labelledby="custom"><a class="dropdown-item" href="../custom-table/index.php?page_id=324043642" onclick="return loadPage(this);" id="page_324043642">Forecast</a></div>
                                
                            </li>
                            <li class="nav-item dropdown active">
                                <a class="nav-link dropdown-toggle" id="settings" href="../settings/" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Settings</a>                            
                                <div class="dropdown-menu" aria-labelledby="settings">                                
                                    <a class="dropdown-item" href="../settings/kpi-calculation.php">Calculations</a>                                
                                    <a class="dropdown-item" href="../settings/pages.php">Pages</a> 
                                    <a class="dropdown-item" href="../settings/automation.php">Automation</a> 
                                    <a class="dropdown-item" href="../kpi-target-maintenance/index.php">KPI Target</a>                                
                                </div>
                            </li>                       
                            <li class="nav-item">
                                <a class="nav-link" id="users" href="../users/" tabindex="-1" aria-disabled="true">Users</a>
                            </li>                                              
                        </ul>
                        <form class="form-inline my-2 my-lg-0 border-left pl-3">
                            <div class="btn-group">
                                <div class="icon-circle bg-light" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                <font size="5"><i class="fa fa-user-circle-o" aria-hidden="true"></i></font>
                                </div>
                                <div class="dropdown-menu dropdown-menu-right">
                                <h6 class="dropdown-header text-uppercase text-xs">User</h6>
                                <a class="dropdown-item text-md" href="#">Maria Mae Avegail Daguindal</a>
                                <p class="dropdown-item text-sm">Developer</p>
                                <div class="dropdown-divider"></div>
                                <h6 class="dropdown-header text-uppercase text-xs" id="project">Project(s)</h6> 
                                <div id="projectList"><button class="dropdown-item text-sm" onclick="return switchClient(this.id, this.innerText);" id="65753">CDS UK</button><button class="dropdown-item text-sm" onclick="return switchClient(this.id, this.innerText);" id="32433">T-Mobile</button><button class="dropdown-item text-sm" onclick="return switchClient(this.id, this.innerText);" id="56652">CDS US</button></div>                              
                                            
                                    <div class="dropdown-divider"></div> 
                                    <a class="dropdown-item text-sm" href="#" data-toggle="modal" data-target="#timezoneModal">Set Timezone <span id="current-timezone"></span></a>                                                               
                                    <div class="dropdown-divider"></div> 
                                    <a class="dropdown-item text-sm" href="javascript:void(0);" onclick="return Logout();">Logout</a>                                                               
                                                                                                
                                </div>
                            </div> 
                        </form>
                </div>
        </nav>

        <div class="container-fluid" style="margin-top: 5em;">
           
            <!-- category -->
            <div id="accordion">
                <div class="card">
                    <div class="card-header p-2" id="headingOne" style="cursor:pointer">
                        <h6 class="mb-0" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Category </h6>
                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="card-body p-2">
                            <div class="row">

                                <div class="col-sm-2 form-group">
                                    <label for="covidStatusLabel">Covid Status</label>
                                    <select multiple  class="form-control" id="covidStatus">
                                        <option value="Onsite">Onsite</option>
                                        <option value="WAHA">WAHA</option>
                                    </select>
                                </div>

                                <div class="col-sm-2 form-group">
                                    <label for="LOBLabel">LOB</label>
                                    <select multiple  class="form-control" id="LOB">
                                        <option value="AccountExpert">Account Expert</option>
                                        <option value="AccountNonMarket">Account Non-Market</option>
                                        <option value="TechExpert">Tech Expert</option>
                                    </select>
                                </div>

                                <div class="col-sm-2 form-group">
                                    <label for="PhaseLabel">Phase</label>
                                    <select multiple  class="form-control" id="Phase">
                                        <option value="Production">Production</option>
                                        <option value="Project">Project</option>
                                        <option value="Supervisor">Supervisor</option>
                                        <option value="TCC WK1">TCC WK1</option>
                                        <option value="TCC WK2">TCC WK2</option>
                                        <option value="T-Voice">T-Voice</option>
                                    </select>
                                </div>

                                <div class="col-sm-2 form-group">
                                    <label for="CommunityLabel">Community</label>
                                    <select multiple  class="form-control" id="Community">
                                    <option value="">--</option>
                                    <option value="Charleston_01">Charleston_01</option>
                                    <option value="Charleston_02">Charleston_02</option>
                                    <option value="Charleston_03">Charleston_03</option>
                                    <option value="Charleston_04">Charleston_04</option>
                                    <option value="Charleston_05">Charleston_05</option>
                                    <option value="Charleston_06">Charleston_06</option>
                                    <option value="Charleston_07">Charleston_07</option>
                                    <option value="Charleston_08">Charleston_08</option>
                                    <option value="Charleston_09">Charleston_09</option>
                                    <option value="Charleston_10">Charleston_10</option>
                                    <option value="Charleston_11">Charleston_11</option>
                                    <option value="Charleston_12">Charleston_12</option>
                                    <option value="Charleston_13">Charleston_13</option>
                                    <option value="Charleston_14">Charleston_14</option>
                                    <option value="Charleston_15">Charleston_15</option>
                                    <option value="Charleston_16">Charleston_16</option>
                                    <option value="Menaul_01">Menaul_01</option>
                                    <option value="Menaul_02">Menaul_02</option>
                                    <option value="Menaul_03">Menaul_03</option>
                                    <option value="Menaul_04">Menaul_04</option>
                                    <option value="Menaul_07">Menaul_07</option>
                                    <option value="TeamOfMentors">Team of Mentors</option>
                                    <option value="Whichita_01">Whichita_01</option>
                                    <option value="Whichita_02">Whichita_02</option>
                                    <option value="Whichita_03">Whichita_03</option>
                                    <option value="Whichita_04">Whichita_04</option>
                                    <option value="Whichita_05">Whichita_05</option>
                                    <option value="Whichita_06">Whichita_06</option>
                                    <option value="Whichita_07">Whichita_07</option>
                                    <option value="Whichita_08">Whichita_08</option>
                                    <option value="Whichita_09">Whichita_09</option>
                                    <option value="Whichita_10">Whichita_10</option>
                                    <option value="Whichita_11">Whichita_11</option>
                                    <option value="Whichita_12">Whichita_12</option>
                                    <option value="Whichita_13">Whichita_13</option>
                                    <option value="Whichita_14">Whichita_14</option>
                                    </select>
                                </div>

                                <div class="col-sm-2 form-group">
                                    <label for="SOMLabel">SOM</label>
                                    <select multiple  class="form-control" id="SOM">
                                        <option value="">Bote, Katrina Ana D.</option>
                                        <option value="">Gabriel, Juan Paulo M.</option>
                                        <option value="">Green, Angela N.</option>
                                        <option value="">Hibo, Loreto P.</option>
                                        <option value="">Lantin, Victor E.</option>
                                    </select>
                                </div>

                                <div class="col-sm-2 form-group">
                                    <label for="TenurityLabel">Tenurity</label>
                                    <select multiple  class="form-control" id="Tenurity">
                                        <option value="">+ 360 Days</option>
                                        <option value="">181-360 Days</option>
                                    </select>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-sm-3 form-group">
                                    <label for="WSETLabel">WSET</label>
                                    <select multiple  class="form-control" id="WSET">
                                        <option value="">25-Oct</option>
                                        <option value="">>10/26/2020</option>
                                        <option value="">10-Apr</option>
                                        <option value="">10-Aug</option>
                                        <option value="">10-Dec</option>
                                    </select>
                                </div>

                                <div class="col-sm-3 form-group">
                                    <label for="DateLabel">Date</label>
                                    <select multiple  class="form-control" id="Date">
                                        <option value="">10/25/2020</option>
                                        <option value="">10/26/2020</option>
                                        <option value="">10/27/2020</option>
                                        <option value="">10/28/2020</option>
                                    </select>
                                </div>

                                <div class="col-sm-3 form-group">
                                    <label for="SupervisorLabel">Supervisor</label>
                                    <select multiple  class="form-control" id="Supervisor">
                                        <option value="">Aldaba, Joy Therese A.</option>
                                        <option value="">Almarines, Faye</option>
                                        <option value="">Apuya II, Florencio</option>
                                        <option value="">Aquino, Jenielyn</option>
                                    </select>
                                </div>

                                <div class="col-sm-3 form-group">
                                    <label for="TEXManagerLabel">TEX Manager</label>
                                    <select multiple  class="form-control" id="TEXManager">
                                        <option value="">Manapsal, Emerson Rei</option>
                                        <option value="">Ocampo, Josefa</option>
                                        <option value="">Viloria, Jancelzor</option>
                                        <option value="">Abriol, Stephen M</option>
                                        <option value="">Agsaway, Micaela</option>
                                    </select>
                                </div>
                            </div>
                        </div>                    
                    </div>
                 </div>                   
            </div>

            <!-- table -->

          

            <div class="mt-3">
                <table id="tableOne" class="table table-sm table-hover" style="width:100%">
                    <thead class="primary_table">
                        <th>Sr. Manager Level</th>
                        <th>Productivity</th>
                        <th>Occupancy</th>
                        <th>Aux Use V. Staff Time</th>
                        <th>Handled Calls</th>
                        <th>OB Calls</th>
                        <th>CRT</th>
                        <th>Talk Time</th>
                        <th>Total ACW</th>
                        <th>ACW Idle</th>
                        <th>Hold</th>
                        <th>ACWOUT</th>
                        <th>Outbound</th>
                        <th>OB %</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Hibo, Loreto</td>
                            <td>72.1%</td>
                            <td>97.4%</td>
                            <td>36.5%</td>
                            <td>559</td>
                            <td>157</td>
                            <td>937</td>
                            <td>633</td>
                            <td>143</td>
                            <td>64</td>
                            <td>129</td>
                            <td>79</td>
                            <td>32</td>
                            <td>28.1%</td>
                        </tr>
                        <tr>
                            <td>Mangahas, Arnel</td>
                            <td>72.1%</td>
                            <td>97.4%</td>
                            <td>36.5%</td>
                            <td>559</td>
                            <td>157</td>
                            <td>937</td>
                            <td>633</td>
                            <td>143</td>
                            <td>64</td>
                            <td>129</td>
                            <td>79</td>
                            <td>32</td>
                            <td>28.1%</td>
                        </tr>
                    </tbody>
                    <tfoot class="primary_table_color">
                        <tr>
                            <th>Grand Total</th>
                            <th>73.7%</th>
                            <th>97.6%</th>
                            <th>34.4%</th>
                            <th>716</th>
                            <th>207</th>
                            <th>957</th>
                            <th>661</th>
                            <th>144</th>
                            <th>59</th>
                            <th>123</th>
                            <th>85</th>
                            <th>29</th>
                            <th>28.9%</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
          
            <div class="mt-4">
                <table id="tableTwo" class="table table-sm table-hover" style="width:100%">
                    <thead class="primary_table">
                        <th>Sr. Manager Level</th>
                        <th>Productivity</th>
                        <th>Occupancy</th>
                        <th>Aux Use V. Staff Time</th>
                        <th>Handled Calls</th>
                        <th>OB Calls</th>
                        <th>CRT</th>
                        <th>Talk Time</th>
                        <th>Total ACW</th>
                        <th>ACW Idle</th>
                        <th>Hold</th>
                        <th>ACWOUT</th>
                        <th>Outbound</th>
                        <th>OB %</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Hibo, Loreto</td>
                            <td>72.1%</td>
                            <td>97.4%</td>
                            <td>36.5%</td>
                            <td>559</td>
                            <td>157</td>
                            <td>937</td>
                            <td>633</td>
                            <td>143</td>
                            <td>64</td>
                            <td>129</td>
                            <td>79</td>
                            <td>32</td>
                            <td>28.1%</td>
                        </tr>
                        <tr>
                            <td>Mangahas, Arnel</td>
                            <td>72.1%</td>
                            <td>97.4%</td>
                            <td>36.5%</td>
                            <td>559</td>
                            <td>157</td>
                            <td>937</td>
                            <td>633</td>
                            <td>143</td>
                            <td>64</td>
                            <td>129</td>
                            <td>79</td>
                            <td>32</td>
                            <td>28.1%</td>
                        </tr>
                    </tbody>
                    <tfoot class="primary_table_color">
                        <tr>
                            <th>Grand Total</th>
                            <th>73.7%</th>
                            <th>97.6%</th>
                            <th>34.4%</th>
                            <th>716</th>
                            <th>207</th>
                            <th>957</th>
                            <th>661</th>
                            <th>144</th>
                            <th>59</th>
                            <th>123</th>
                            <th>85</th>
                            <th>29</th>
                            <th>28.9%</th>
                        </tr>
                    </tfoot>
                </table>
            </div>

            <div class="mt-4">
                <table id="example" class="table table-sm table-condensed" style="width:100%">
                    <thead class="primary_table">
                        <tr>
                            <th></th>
                            <th>Sr. Manager Level</th>
                            <th>Productivity</th>
                            <th>Occupancy</th>
                            <th>Aux Use</th>
                            <th>Handled Calls</th>
                            <th>OB Calls</th>
                            <th>CRT</th>
                            <th>Talk Time</th>
                            <th>Total ACW</th>
                            <th>ACW Idle</th>
                            <th>Hold</th>
                            <th>ACW Out</th>
                            <th>Outbound</th>
                            <th>OB %</th>
                        </tr>
                    </thead>
                    <tfoot class="primary_table_color">
                        <tr>
                            <th style="width: 50px;"></th>
                            <th>Grand Total</th>
                            <th>73.7%</th>
                            <th>97.6%</th>
                            <th>34.4%</th>
                            <th>716</th>
                            <th>207</th>
                            <th>957</th>
                            <th>661</th>
                            <th>144</th>
                            <th>59</th>
                            <th>123</th>
                            <th>85</th>
                            <th>29</th>
                            <th>28.9%</th>
                        </tr>
                    </tfoot>
                </table>
            </div>    
        </div>

        <!-- scripts -->
        <script src="../dependencies/jquery/jquery-3.5.1.js"></script>
        <script src="../dependencies/popper/popper.min.js"></script>
        <script src="../dependencies/bootstrap-4.5.0/dist/js/bootstrap.min.js"></script>

       <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
        <!-- <script src="../dependencies/DataTables/js/datatables.min.js"></script> -->
        <script src="datatable/datatable.js"></script>
    </body>
</html>