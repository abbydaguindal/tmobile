<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset= "UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.8">
    <title> OCT Dashboard </title>
        
    <link rel="stylesheet" href="../dependencies/bootstrap-4.5.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../dependencies/bootstrap-4.5.0/css/bootstrap-select.css">

    <link rel="stylesheet" href="../dependencies/fontawesome/css/font-awesome.min.css">

    <!-- <link rel="stylesheet" href="../dependencies/DataTables/css/datatables.min.css">
    <link rel="stylesheet" href="../dependencies/DataTables/css/datatables.css"> -->
    <link rel="stylesheet" href="css/table.css">

    <style>
        td{
        font-size: 11px;
        }
        th{
            font-size: 13px;
           
        }
      
        .TableBody{
                background-color: #CCFFE6;
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
                                <a class="dropdown-item text-md" href="#">Carlo Buenaventura</a>
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
                                    <!--category-->
                                        <div class="card shadow">
                                                <div class="card-body">
                                                    <div class="row">
                                                    <div class="col-lg-3 col-md-3">
                                                            <label for="vertical" class="text-sm font-weight-bold text-primary">SR MANAGER V2</label>
                                                                <select class="form-control text-sm">
                                                                    <option>Multiple Items</option>
                                                                    <option>Bote, Katrina </option>
                                                                    <option></option>
                                                                </select>
                                                    </div>

                                                        <div class="col-lg-3 col-md-3">
                                                            <label for="billing type" class="text-sm font-weight-bold text-primary">ACCM</label>
                                                            <select class="form-control text-sm">
                                                                <option>All</option>
                                                                <option>Abriol Stephen M</option>
                                                                <option>Abriol Stephen M</option>
                                                                <option>Abriol Stephen M</option>
                                                            </select>                            
                                                        </div>

                                                        <div class="col-lg-3 col-md-3">
                                                            <label for="KPI" class="text-sm font-weight-bold text-primary">Supervisor</label>
                                                            <select class="form-control text-sm">
                                                                <option>All</option>
                                                                <option>Abengoza IV, Bernardo S</option>
                                                                <option>Abengoza IV, Bernardo S</option>
                                                                <option>Abengoza IV, Bernardo S</option>
                                                               
                                                            </select>                            
                                                        </div>

                                                    
                                                    </div>
                                                    
                                                    
                                                </div>
                                            </div>
                                        </div>
                                
                            

                                    <!--table-->
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="MTDtable" class="display table" >
                                                <thead class="text-light">
                                                    <tr>
                                                            <th style="background-color: #0C5A80;">Expert</th>
                                                            <th style="background-color: #0C5A80;">Name</th>
                                                            <th style="background-color: #0C5A80;">Emp ID</th>
                                                            <th style="background-color: #0C5A80;">Productivity</th>
                                                            <th style="background-color: #0C5A80;">Worked Hours</th>
                                                            <th style="background-color: #0C5A80;">Sched Hours</th>
                                                            <th style="background-color: #0C5A80;">Hours To Target</th>
                                                            
                                                    </tr>
                                                </thead>
                                                <tbody class="TableBody">
                                                    <tr>
                                                        <td>Abengoza IV, Bernardo S</td>
                                                        <td>14500</td>
                                                        <td>21.3%</td>
                                                        <td>9.0%</td>
                                                        <td>2.0%</td>
                                                        <td>6.6%</td>
                                                        <td>6.6%</td>
                                                   
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>14500</td>
                                                        <td>21.3%</td>
                                                        <td>9.0%</td>
                                                        <td>2.0%</td>
                                                        <td>6.6%</td>
                                                        <td>6.6%</td>
                                                   
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>14500</td>
                                                        <td>21.3%</td>
                                                        <td>9.0%</td>
                                                        <td>2.0%</td>
                                                        <td>6.6%</td>
                                                        <td>6.6%</td>
                                                   
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>14500</td>
                                                        <td>21.3%</td>
                                                        <td>9.0%</td>
                                                        <td>2.0%</td>
                                                        <td>6.6%</td>
                                                        <td>6.6%</td>
                                                   
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>14500</td>
                                                        <td>21.3%</td>
                                                        <td>9.0%</td>
                                                        <td>2.0%</td>
                                                        <td>6.6%</td>
                                                        <td>6.6%</td>
                                                   
                                                    </tr>
                                                    <tr>
                                                        <td>Abengoza IV, Bernardo S</td>
                                                        <td>14500</td>
                                                        <td>21.3%</td>
                                                        <td>9.0%</td>
                                                        <td>2.0%</td>
                                                        <td>6.6%</td>
                                                        <td>6.6%</td>
                                                   
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>14500</td>
                                                        <td>21.3%</td>
                                                        <td>9.0%</td>
                                                        <td>2.0%</td>
                                                        <td>6.6%</td>
                                                        <td>6.6%</td>
                                                   
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>14500</td>
                                                        <td>21.3%</td>
                                                        <td>9.0%</td>
                                                        <td>2.0%</td>
                                                        <td>6.6%</td>
                                                        <td>6.6%</td>
                                                   
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>14500</td>
                                                        <td>21.3%</td>
                                                        <td>9.0%</td>
                                                        <td>2.0%</td>
                                                        <td>6.6%</td>
                                                        <td>6.6%</td>
                                                   
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>14500</td>
                                                        <td>21.3%</td>
                                                        <td>9.0%</td>
                                                        <td>2.0%</td>
                                                        <td>6.6%</td>
                                                        <td>6.6%</td>
                                                   
                                                    </tr>
                                                </tbody>
                                                <tfoot class="text-light">
                                                    <tr>
                                                        <th style="background-color: #0C5A80;">Grand Total</th>
                                                        <th style="background-color: #0C5A80;">14500</th>
                                                        <th style="background-color: #0C5A80;">21.3%</th>
                                                        <th style="background-color: #0C5A80;">9.0%</th>
                                                        <th style="background-color: #0C5A80;">2.0%</th>
                                                        <th style="background-color: #0C5A80;">6.6%</th>
                                                        <th style="background-color: #0C5A80;">6.6%</th>
                                                      
                                                    </tr>
                                            </tfoot>
                                        </table>
                                </div>
                  
                 </div>

  
    <script src="../dependencies/jquery/jquery-3.5.1.js"></script>
    <script src="../dependencies/popper/popper.min.js"></script>
    <script src="../dependencies/bootstrap-4.5.0/dist/js/bootstrap.min.js"></script>
    <script src="../dependencies/DataTables/js/datatables.min.js"></script>
    <script src="dataTable/dataTable.js" ></script>

</body>
</html>