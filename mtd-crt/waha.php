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
        <link rel="stylesheet" href="../dependencies/DataTables/css/datatables.min.css">
        <link rel="stylesheet" href="../dependencies/DataTables/css/datatables.css">

       <style>
        label {font-weight:600; font-size: 12px;}
        select[multiple] { font-size: 12px;}
        .primary_table {background-color: rgb(255,29,104); color:white}
        table thead th, tfoot th{font-weight:600; font-size: 14px; }
        table thead  tr, td{font-size: 14px;}
       
        td.details-control {
            background: url('../assets/images/plus.png') no-repeat center center;
            cursor: pointer;
            background-size: 17px;
            margin:auto;           
        }
        tr.shown td.details-control {
            background: url('../assets/images/minus.png') no-repeat center center;
            background-size: 17px;
            margin:auto;
        }
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
       
            <!-- table -->          

            <div class="wrap  mt-3">
              <table id="tableWAHA" class="table table-sm table-stripped" style="width:100%">
                <thead class="primary_table">
                    <tr>
                            <th>Handled Calls</th>
                            <th>CRT</th>
                            <th>Talk</th>
                            <th>ACW</th>
                            <th>Hold</th>
                            <th>ACW Out</th>
                            <th>OB %</th>
                            <th>Occupancy</th>
                            <th>Total Aux %</th>
                            <th>Default</th>
                            <th>Stread</th>
                            <th>Coaching</th>
                            <th>Training</th>
                            <th>Meeting</th>
                            <th>Break</th>
                            <th>Project</th>
                            <th>System</th>
                            <th>Aux 8</th>
                            <th>TPUSA Meeting</th>
                            <th>Productivity</th>
                            <th>Support Staff Time</th>
                            <th>Support Occupancy</th>
                            <th>Ratio</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>4940</td>
                        <td>958</td>
                        <td>678</td>
                        <td>151</td>
                        <td>96</td>
                        <td>101</td>
                        <td>33%</td>
                        <td>96.4%</td>
                        <td>29.2%</td>
                        <td>6.5%</td>
                        <td>2.9%</td>
                        <td>3.8%</td>
                        <td>1.5%</td>
                        <td>5.4%</td>
                        <td>6.7%</td>
                        <td>0.0%</td>
                        <td>2.3%</td>
                        <td>0.0%</td>
                        <td>0.0%</td>
                        <td>84%</td>
                        <td>433</td>
                        <td>14.8%</td>
                        <td>1.4</td>
                    </tr>
                   
                    <tr>
                        <td>5008</td>
                        <td>887</td>
                        <td>660</td>
                        <td>125</td>
                        <td>71</td>
                        <td>78</td>
                        <td>29%</td>
                        <td>96.4%</td>
                        <td>29.2%</td>
                        <td>6.5%</td>
                        <td>2.9%</td>
                        <td>3.8%</td>
                        <td>1.5%</td>
                        <td>5.4%</td>
                        <td>6.7%</td>
                        <td>0.0%</td>
                        <td>2.3%</td>
                        <td>0.0%</td>
                        <td>0.0%</td>
                        <td>84%</td>
                        <td>433</td>
                        <td>14.8%</td>
                        <td>1.4</td>
                    </tr>
                   
                    <tr>
                        <td>3807</td>
                        <td>915</td>
                        <td>692</td>
                        <td>111</td>
                        <td>79</td>
                        <td>68</td>
                        <td>26%</td>
                        <td>96.4%</td>
                        <td>29.2%</td>
                        <td>6.5%</td>
                        <td>2.9%</td>
                        <td>3.8%</td>
                        <td>1.5%</td>
                        <td>5.4%</td>
                        <td>6.7%</td>
                        <td>0.0%</td>
                        <td>2.3%</td>
                        <td>0.0%</td>
                        <td>0.0%</td>
                        <td>84%</td>
                        <td>433</td>
                        <td>14.8%</td>
                        <td>1.4</td>
                    </tr>
                   
                    <tr>
                        <td>2443</td>
                        <td>903</td>
                        <td>700</td>
                        <td>96</td>
                        <td>75</td>
                        <td>60</td>
                        <td>24%</td>
                        <td>96.4%</td>
                        <td>29.2%</td>
                        <td>6.5%</td>
                        <td>2.9%</td>
                        <td>3.8%</td>
                        <td>1.5%</td>
                        <td>5.4%</td>
                        <td>6.7%</td>
                        <td>0.0%</td>
                        <td>2.3%</td>
                        <td>0.0%</td>
                        <td>0.0%</td>
                        <td>84%</td>
                        <td>433</td>
                        <td>14.8%</td>
                        <td>1.4</td>
                    </tr>
                    
                    <tr>
                        <td>4684</td>
                        <td>903</td>
                        <td>700</td>
                        <td>96</td>
                        <td>75</td>
                        <td>60</td>
                        <td>24%</td>
                        <td>96.4%</td>
                        <td>29.2%</td>
                        <td>6.5%</td>
                        <td>2.9%</td>
                        <td>3.8%</td>
                        <td>1.5%</td>
                        <td>5.4%</td>
                        <td>6.7%</td>
                        <td>0.0%</td>
                        <td>2.3%</td>
                        <td>0.0%</td>
                        <td>0.0%</td>
                        <td>84%</td>
                        <td>433</td>
                        <td>14.8%</td>
                        <td>1.4</td>
                    </tr>
                   
                    <tr>
                        <td>5024</td>
                        <td>903</td>
                        <td>700</td>
                        <td>96</td>
                        <td>75</td>
                        <td>60</td>
                        <td>24%</td>
                        <td>96.4%</td>
                        <td>29.2%</td>
                        <td>6.5%</td>
                        <td>2.9%</td>
                        <td>3.8%</td>
                        <td>1.5%</td>
                        <td>5.4%</td>
                        <td>6.7%</td>
                        <td>0.0%</td>
                        <td>2.3%</td>
                        <td>0.0%</td>
                        <td>0.0%</td>
                        <td>84%</td>
                        <td>433</td>
                        <td>14.8%</td>
                        <td>1.4</td>
                    </tr>
                    
                    <tr>
                        <td>4302</td>
                        <td>903</td>
                        <td>700</td>
                        <td>96</td>
                        <td>75</td>
                        <td>60</td>
                        <td>24%</td>
                        <td>96.4%</td>
                        <td>29.2%</td>
                        <td>6.5%</td>
                        <td>2.9%</td>
                        <td>3.8%</td>
                        <td>1.5%</td>
                        <td>5.4%</td>
                        <td>6.7%</td>
                        <td>0.0%</td>
                        <td>2.3%</td>
                        <td>0.0%</td>
                        <td>0.0%</td>
                        <td>84%</td>
                        <td>433</td>
                        <td>14.8%</td>
                        <td>1.4</td>
                    </tr>
                 
                    <tr>
                        <td>4835</td>
                        <td>903</td>
                        <td>700</td>
                        <td>96</td>
                        <td>75</td>
                        <td>60</td>
                        <td>24%</td>
                        <td>96.4%</td>
                        <td>29.2%</td>
                        <td>6.5%</td>
                        <td>2.9%</td>
                        <td>3.8%</td>
                        <td>1.5%</td>
                        <td>5.4%</td>
                        <td>6.7%</td>
                        <td>0.0%</td>
                        <td>2.3%</td>
                        <td>0.0%</td>
                        <td>0.0%</td>
                        <td>84%</td>
                        <td>433</td>
                        <td>14.8%</td>
                        <td>1.4</td>
                    </tr>
               
                    <tr>
                        <td>4815</td>
                        <td>903</td>
                        <td>700</td>
                        <td>96</td>
                        <td>75</td>
                        <td>60</td>
                        <td>24%</td>
                        <td>96.4%</td>
                        <td>29.2%</td>
                        <td>6.5%</td>
                        <td>2.9%</td>
                        <td>3.8%</td>
                        <td>1.5%</td>
                        <td>5.4%</td>
                        <td>6.7%</td>
                        <td>0.0%</td>
                        <td>2.3%</td>
                        <td>0.0%</td>
                        <td>0.0%</td>
                        <td>84%</td>
                        <td>433</td>
                        <td>14.8%</td>
                        <td>1.4</td>
                    </tr>
                 
                    <tr>
                        <td>4139</td>
                        <td>903</td>
                        <td>700</td>
                        <td>96</td>
                        <td>75</td>
                        <td>60</td>
                        <td>24%</td>
                        <td>96.4%</td>
                        <td>29.2%</td>
                        <td>6.5%</td>
                        <td>2.9%</td>
                        <td>3.8%</td>
                        <td>1.5%</td>
                        <td>5.4%</td>
                        <td>6.7%</td>
                        <td>0.0%</td>
                        <td>2.3%</td>
                        <td>0.0%</td>
                        <td>0.0%</td>
                        <td>84%</td>
                        <td>433</td>
                        <td>14.8%</td>
                        <td>1.4</td>
                    </tr>
                   
                    <tr>
                        <td>2576</td>
                        <td>903</td>
                        <td>700</td>
                        <td>96</td>
                        <td>75</td>
                        <td>60</td>
                        <td>24%</td>
                        <td>96.4%</td>
                        <td>29.2%</td>
                        <td>6.5%</td>
                        <td>2.9%</td>
                        <td>3.8%</td>
                        <td>1.5%</td>
                        <td>5.4%</td>
                        <td>6.7%</td>
                        <td>0.0%</td>
                        <td>2.3%</td>
                        <td>0.0%</td>
                        <td>0.0%</td>
                        <td>84%</td>
                        <td>433</td>
                        <td>14.8%</td>
                        <td>1.4</td>
                    </tr>

                </tbody>
              </table>
            </div>
        
        
        </div>

        <!-- scripts -->
        <script src="../dependencies/jquery/jquery-3.5.1.js"></script>
        <script src="../dependencies/popper/popper.min.js"></script>
        <script src="../dependencies/bootstrap-4.5.0/dist/js/bootstrap.min.js"></script>

       <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
        <!-- <script src="../dependencies/DataTables/js/datatables.min.js"></script> -->
        <script>
        $('#tableWAHA').DataTable( {
        responsive: true,
        "searching": false,
        "ordering": true,
        "info":     false,  
        "bLengthChange": false ,
        "paging": false,
        "scrollX": "350px"
         });


        </script>
    </body>
</html>