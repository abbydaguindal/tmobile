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
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">
    <style>
        td{
        font-size: 11px;
        }
        th{
            font-size: 11px;
           
        }
      
        /* .TableBody{
                background-color: #CCFFE6;
        } */
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
                                        <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-xl-3 col-lg-3">
                                                            <label for="vertical" class="text-sm font-weight-bold text-primary">MONTH</label>
                                                                <select class="form-control text-sm">
                                                                    <option>Oct</option>
                                                                </select>
                                                        </div>

                                                        <div class="col-xl-3 col-lg-3">
                                                            <label for="billing type" class="text-sm font-weight-bold text-primary">WSET</label>
                                                            <select class="form-control text-sm">
                                                                <option>9/27/2020</option>
                                                                <option>9/28/2020</option>
                                                                <option>9/29/2020</option>
                                                                <option>9/30/2020</option>
                                                            </select>                            
                                                        </div>

                                                        <div class="col-xl-3 col-lg-3">
                                                            <label for="KPI" class="text-sm font-weight-bold text-primary">Date 2</label>
                                                            <select class="form-control text-sm">
                                                                <option>10/01/2020</option>
                                                                <option>10/02/2020</option>
                                                                <option>10/03/2020</option>
                                                               
                                                            </select>                            
                                                        </div>

                                                        <div class="col-xl-3 col-lg-3">
                                                            <label for="KPI" class="text-sm font-weight-bold text-primary">SR MANAGER</label>
                                                            <select class="form-control text-sm">
                                                                <option>Grabriel, Juan Paulo M</option>
                                                                <option>Grabriel, Juan Paulo M</option>
                                                                <option>Grabriel, Juan Paulo M</option>
                                                                <option>Grabriel, Juan Paulo M</option>
                                                            </select>                            
                                                        </div>
                                                    </div>
                                                    
                                                  
                                                    <div class="row mt-3">
                                                    <div class="col-xl-3 col-lg-3">
                                                        <label for="KPI" class="text-sm font-weight-bold text-primary">TEX MANAGER</label>
                                                        <select class="form-control text-sm" >
                                                            <option>Abriol, Stphen M</option>
                                                            <option>Abriol, Stphen M</option>
                                                            <option>Abriol, Stphen M</option>
                                                        </select>                            
                                                    </div>

                                                        <div class="col-xl-3 col-lg-3">
                                                            <label for="KPI" class="text-sm font-weight-bold text-primary">SUP</label>
                                                            <select class="form-control text-sm" >
                                                            <option>Abengoza IV, Bernardo S</option>
                                                            <option>Abriol, Stphen M</option>
                                                            <option>Abriol, Stphen M</option>
                                                            </select>                            
                                                        </div>

                                                        <div class="col-xl-3 col-lg-3">
                                                            <label for="KPI" class="text-sm font-weight-bold text-primary">Community</label>
                                                            <select class="form-control text-sm" >
                                                                <option>Charleston_01</option>
                                                                <option>Charleston_02</option>
                                                                <option>Charleston_03</option>
                                                                <option>Charleston_04</option>
                                                                <option>Charleston_05</option>
                                                               
                                                            </select>                            
                                                        </div>

                                                        <div class="col-xl-3 col-lg-3">
                                                                    <div class="row">
                                                                        <div class="col-xl-6 col-lg-6">
                                                                            <label for="KPI" class="text-sm font-weight-bold text-primary">LOB</label>
                                                                            <select class="form-control text-sm" >
                                                                                    <option>Account Expert</option>
                                                                                    <option>Account Non-Market</option>
                                                                                    <option>Tech Expert</option>
                                                                                    
                                                                                </select>       
                                                                        </div>          

                                                                        <div class="col-xl-6 col-lg-6">
                                                                            <label for="KPI" class="text-sm font-weight-bold text-primary">Covid Status</label>
                                                                            <select class="form-control text-sm" >
                                                                                    <option>ONSITE</option>
                                                                                    <option>WAHA</option>
                                                                                </select>       
                                                                        </div>                                  
                                                                    </div>
                                                   
                                                </div>
                                        </div>
                                        <br>
                                        <!--Table -->
                                            <div class="table-responsive">
                                                <table id="MTDtable" class="table table-sm table-striped display nowrap " style="width:100%" >
                                                        <thead class="text-light">
                                                            <tr>
                                                                    <th style="background-color: #616161;">MTD</th>
                                                                    <th style="background-color: #616161;">Scheduled Headcourt</th>
                                                                    <th style="background-color: #616161;">Total Infractions</th>
                                                                    <th style="background-color: #616161;">Missed Shift</th>
                                                                    <th style="background-color: #616161;">Late Arrival</th>
                                                                    <th style="background-color: #616161;">Early Departure</th>
                                                                    <th style="background-color: #0C5A80;">Total Aux</th>
                                                                    <th style="background-color: #0C5A80;">Default</th>
                                                                    <th style="background-color: #0C5A80;">STREAD</th>
                                                                    <th style="background-color: #0C5A80;">Coaching</th>
                                                                    <th style="background-color: #0C5A80;">Training</th>
                                                                    <th style="background-color: #0C5A80;">Meeting</th>
                                                                    <th style="background-color: #0C5A80;">Break</th>
                                                                    <th style="background-color: #0C5A80;">Project</th>
                                                                    <th style="background-color: #0C5A80;">System Aux</th>
                                                                    <th style="background-color: #0C5A80;">AUX 8</th>
                                                                    <th style="background-color: #0C5A80;">TPUSA Meeting</th>
                                                                    <th style="background-color: #616161;">AUX 8</th>
                                                                    <th style="background-color: #616161;">Missed Shift(Hours)</th>
                                                                    <th style="background-color: #616161;">Late Arrival(Hours)</th>
                                                                    <th style="background-color: #616161;">Missing Intra-Shift</th>
                                                                    <th style="background-color: #616161;">Early Dep(Hours)</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody class="TableBody">
                                                            <tr>
                                                                <td>Oct</td>
                                                                <td>14500</td>
                                                                <td>21.3%</td>
                                                                <td>9.0%</td>
                                                                <td>2.0%</td>
                                                                <td>6.6%</td>
                                                                <td>3.7%</td>
                                                                <td>19.4%</td>
                                                                <td>3.6%</td>
                                                                <td>2.2%</td>
                                                                <td>3.1%</td>
                                                                <td>2.9%</td>
                                                                <td>4.2%</td>
                                                                <td>5.4%</td>
                                                                <td>0.4%</td>
                                                                <td>1.3%</td>
                                                                <td>0.0%</td>
                                                                <td>0.0%</td>
                                                                <td>11728</td>
                                                                <td>2568</td>
                                                                <td>8649</td>
                                                                <td>4811</td>
                                                            </tr>
                                                        </tbody>
                                                        <tfoot class="text-light">
                                                            <tr>
                                                                <th style="background-color: #616161;">Grand Total</th>
                                                                <th style="background-color: #616161;">14500</th>
                                                                <th style="background-color: #616161;">21.3%</th>
                                                                <th style="background-color: #616161;">9.0%</th>
                                                                <th style="background-color: #616161;">2.0%</th>
                                                                <th style="background-color: #616161;">6.6%</th>
                                                                <th style="background-color: #0C5A80;">3.7%</th>
                                                                <th style="background-color: #0C5A80;">19.4%</th>
                                                                <th style="background-color: #0C5A80;">3.6%</th>
                                                                <th style="background-color: #0C5A80;">2.2%</th>
                                                                <th style="background-color: #0C5A80;">3.1%</th>
                                                                <th style="background-color: #0C5A80;">2.9%</th>
                                                                <th style="background-color: #0C5A80;">4.2%</th>
                                                                <th style="background-color: #0C5A80;">5.4%</th>
                                                                <th style="background-color: #0C5A80;">0.4%</th>
                                                                <th style="background-color: #0C5A80;">1.3%</th>
                                                                <th style="background-color: #0C5A80;">0.0%</th>
                                                                <th style="background-color: #616161;">0.0%</th>
                                                                <th style="background-color: #616161;">11728</th>
                                                                <th style="background-color: #616161;">2568</th>
                                                                <th style="background-color: #616161;">8649</th>
                                                                <th style="background-color: #616161;">4811</th>
                                                            </tr>
                                                    </tfoot>
                                                </table>
                                            </div>
                                            <div class="table-responsive">
                                            <table id="DateTable" class="table table-sm table-striped display nowrap" style="width:100%">
                                                        <thead class="text-light">
                                                            <tr>
                                                                    <th style="background-color: #616161;">DATE</th>
                                                                    <th style="background-color: #616161;">Scheduled Headcourt</th>
                                                                    <th style="background-color: #616161;">Total Infractions</th>
                                                                    <th style="background-color: #616161;">Missed Shift</th>
                                                                    <th style="background-color: #616161;">Late Arrival</th>
                                                                    <th style="background-color: #616161;">Early Departure</th>
                                                                    <th style="background-color: #0C5A80;">Total Aux</th>
                                                                    <th style="background-color: #0C5A80;">Default</th>
                                                                    <th style="background-color: #0C5A80;">STREAD</th>
                                                                    <th style="background-color: #0C5A80;">Coaching</th>
                                                                    <th style="background-color: #0C5A80;">Training</th>
                                                                    <th style="background-color: #0C5A80;">Meeting</th>
                                                                    <th style="background-color: #0C5A80;">Break</th>
                                                                    <th style="background-color: #0C5A80;">Project</th>
                                                                    <th style="background-color: #0C5A80;">System Aux</th>
                                                                    <th style="background-color: #0C5A80;">AUX 8</th>
                                                                    <th style="background-color: #0C5A80;">TPUSA Meeting</th>
                                                                    <th style="background-color: #616161;">AUX 8</th>
                                                                    <th style="background-color: #616161;">Missed Shift(Hours)</th>
                                                                    <th style="background-color: #616161;">Late Arrival(Hours)</th>
                                                                    <th style="background-color: #616161;">Missing Intra-Shift</th>
                                                                    <th style="background-color: #616161;">Early Dep(Hours)</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody class="TableBody">
                                                            <tr>
                                                                <td>Oct</td>
                                                                <td>14500</td>
                                                                <td>21.3%</td>
                                                                <td>9.0%</td>
                                                                <td>2.0%</td>
                                                                <td>6.6%</td>
                                                                <td>3.7%</td>
                                                                <td>19.4%</td>
                                                                <td>3.6%</td>
                                                                <td>2.2%</td>
                                                                <td>3.1%</td>
                                                                <td>2.9%</td>
                                                                <td>4.2%</td>
                                                                <td>5.4%</td>
                                                                <td>0.4%</td>
                                                                <td>1.3%</td>
                                                                <td>0.0%</td>
                                                                <td>0.0%</td>
                                                                <td>11728</td>
                                                                <td>2568</td>
                                                                <td>8649</td>
                                                                <td>4811</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Oct</td>
                                                                <td>14500</td>
                                                                <td>21.3%</td>
                                                                <td>9.0%</td>
                                                                <td>2.0%</td>
                                                                <td>6.6%</td>
                                                                <td>3.7%</td>
                                                                <td>19.4%</td>
                                                                <td>3.6%</td>
                                                                <td>2.2%</td>
                                                                <td>3.1%</td>
                                                                <td>2.9%</td>
                                                                <td>4.2%</td>
                                                                <td>5.4%</td>
                                                                <td>0.4%</td>
                                                                <td>1.3%</td>
                                                                <td>0.0%</td>
                                                                <td>0.0%</td>
                                                                <td>11728</td>
                                                                <td>2568</td>
                                                                <td>8649</td>
                                                                <td>4811</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Oct</td>
                                                                <td>14500</td>
                                                                <td>21.3%</td>
                                                                <td>9.0%</td>
                                                                <td>2.0%</td>
                                                                <td>6.6%</td>
                                                                <td>3.7%</td>
                                                                <td>19.4%</td>
                                                                <td>3.6%</td>
                                                                <td>2.2%</td>
                                                                <td>3.1%</td>
                                                                <td>2.9%</td>
                                                                <td>4.2%</td>
                                                                <td>5.4%</td>
                                                                <td>0.4%</td>
                                                                <td>1.3%</td>
                                                                <td>0.0%</td>
                                                                <td>0.0%</td>
                                                                <td>11728</td>
                                                                <td>2568</td>
                                                                <td>8649</td>
                                                                <td>4811</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Oct</td>
                                                                <td>14500</td>
                                                                <td>21.3%</td>
                                                                <td>9.0%</td>
                                                                <td>2.0%</td>
                                                                <td>6.6%</td>
                                                                <td>3.7%</td>
                                                                <td>19.4%</td>
                                                                <td>3.6%</td>
                                                                <td>2.2%</td>
                                                                <td>3.1%</td>
                                                                <td>2.9%</td>
                                                                <td>4.2%</td>
                                                                <td>5.4%</td>
                                                                <td>0.4%</td>
                                                                <td>1.3%</td>
                                                                <td>0.0%</td>
                                                                <td>0.0%</td>
                                                                <td>11728</td>
                                                                <td>2568</td>
                                                                <td>8649</td>
                                                                <td>4811</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Oct</td>
                                                                <td>14500</td>
                                                                <td>21.3%</td>
                                                                <td>9.0%</td>
                                                                <td>2.0%</td>
                                                                <td>6.6%</td>
                                                                <td>3.7%</td>
                                                                <td>19.4%</td>
                                                                <td>3.6%</td>
                                                                <td>2.2%</td>
                                                                <td>3.1%</td>
                                                                <td>2.9%</td>
                                                                <td>4.2%</td>
                                                                <td>5.4%</td>
                                                                <td>0.4%</td>
                                                                <td>1.3%</td>
                                                                <td>0.0%</td>
                                                                <td>0.0%</td>
                                                                <td>11728</td>
                                                                <td>2568</td>
                                                                <td>8649</td>
                                                                <td>4811</td>
                                                            </tr>
                                                        </tbody>
                                                        <tfoot class="text-light">
                                                            <tr>
                                                                <th style="background-color: #616161;">Grand Total</th>
                                                                <th style="background-color: #616161;">14500</th>
                                                                <th style="background-color: #616161;">21.3%</th>
                                                                <th style="background-color: #616161;">9.0%</th>
                                                                <th style="background-color: #616161;">2.0%</th>
                                                                <th style="background-color: #616161;">6.6%</th>
                                                                <th style="background-color: #0C5A80;">3.7%</th>
                                                                <th style="background-color: #0C5A80;">19.4%</th>
                                                                <th style="background-color: #0C5A80;">3.6%</th>
                                                                <th style="background-color: #0C5A80;">2.2%</th>
                                                                <th style="background-color: #0C5A80;">3.1%</th>
                                                                <th style="background-color: #0C5A80;">2.9%</th>
                                                                <th style="background-color: #0C5A80;">4.2%</th>
                                                                <th style="background-color: #0C5A80;">5.4%</th>
                                                                <th style="background-color: #0C5A80;">0.4%</th>
                                                                <th style="background-color: #0C5A80;">1.3%</th>
                                                                <th style="background-color: #0C5A80;">0.0%</th>
                                                                <th style="background-color: #616161;">0.0%</th>
                                                                <th style="background-color: #616161;">11728</th>
                                                                <th style="background-color: #616161;">2568</th>
                                                                <th style="background-color: #616161;">8649</th>
                                                                <th style="background-color: #616161;">4811</th>
                                                            </tr>
                                                    </tfoot>
                                                </table>
                                            </div>
                                            <div class="table-responsive">
                                            <table id="TeamTable" class="table table-sm table-striped display nowrap" style="width:100%" >
                                                        <thead class="text-light">
                                                            <tr>
                                                                    <th style="background-color: #616161;">Team Level</th>
                                                                    <th style="background-color: #616161;">Scheduled Headcourt</th>
                                                                    <th style="background-color: #616161;">Total Infractions</th>
                                                                    <th style="background-color: #616161;">Missed Shift</th>
                                                                    <th style="background-color: #616161;">Late Arrival</th>
                                                                    <th style="background-color: #616161;">Early Departure</th>
                                                                    <th style="background-color: #0C5A80;">Total Aux</th>
                                                                    <th style="background-color: #0C5A80;">Default</th>
                                                                    <th style="background-color: #0C5A80;">STREAD</th>
                                                                    <th style="background-color: #0C5A80;">Coaching</th>
                                                                    <th style="background-color: #0C5A80;">Training</th>
                                                                    <th style="background-color: #0C5A80;">Meeting</th>
                                                                    <th style="background-color: #0C5A80;">Break</th>
                                                                    <th style="background-color: #0C5A80;">Project</th>
                                                                    <th style="background-color: #0C5A80;">System Aux</th>
                                                                    <th style="background-color: #0C5A80;">AUX 8</th>
                                                                    <th style="background-color: #0C5A80;">TPUSA Meeting</th>
                                                                    <th style="background-color: #616161;">AUX 8</th>
                                                                    <th style="background-color: #616161;">Missed Shift(Hours)</th>
                                                                    <th style="background-color: #616161;">Late Arrival(Hours)</th>
                                                                    <th style="background-color: #616161;">Missing Intra-Shift</th>
                                                                    <th style="background-color: #616161;">Early Dep(Hours)</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody class="TableBody">
                                                            <tr>
                                                                <td>Oct</td>
                                                                <td>14500</td>
                                                                <td>21.3%</td>
                                                                <td>9.0%</td>
                                                                <td>2.0%</td>
                                                                <td>6.6%</td>
                                                                <td>3.7%</td>
                                                                <td>19.4%</td>
                                                                <td>3.6%</td>
                                                                <td>2.2%</td>
                                                                <td>3.1%</td>
                                                                <td>2.9%</td>
                                                                <td>4.2%</td>
                                                                <td>5.4%</td>
                                                                <td>0.4%</td>
                                                                <td>1.3%</td>
                                                                <td>0.0%</td>
                                                                <td>0.0%</td>
                                                                <td>11728</td>
                                                                <td>2568</td>
                                                                <td>8649</td>
                                                                <td>4811</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Oct</td>
                                                                <td>14500</td>
                                                                <td>21.3%</td>
                                                                <td>9.0%</td>
                                                                <td>2.0%</td>
                                                                <td>6.6%</td>
                                                                <td>3.7%</td>
                                                                <td>19.4%</td>
                                                                <td>3.6%</td>
                                                                <td>2.2%</td>
                                                                <td>3.1%</td>
                                                                <td>2.9%</td>
                                                                <td>4.2%</td>
                                                                <td>5.4%</td>
                                                                <td>0.4%</td>
                                                                <td>1.3%</td>
                                                                <td>0.0%</td>
                                                                <td>0.0%</td>
                                                                <td>11728</td>
                                                                <td>2568</td>
                                                                <td>8649</td>
                                                                <td>4811</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Oct</td>
                                                                <td>14500</td>
                                                                <td>21.3%</td>
                                                                <td>9.0%</td>
                                                                <td>2.0%</td>
                                                                <td>6.6%</td>
                                                                <td>3.7%</td>
                                                                <td>19.4%</td>
                                                                <td>3.6%</td>
                                                                <td>2.2%</td>
                                                                <td>3.1%</td>
                                                                <td>2.9%</td>
                                                                <td>4.2%</td>
                                                                <td>5.4%</td>
                                                                <td>0.4%</td>
                                                                <td>1.3%</td>
                                                                <td>0.0%</td>
                                                                <td>0.0%</td>
                                                                <td>11728</td>
                                                                <td>2568</td>
                                                                <td>8649</td>
                                                                <td>4811</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Oct</td>
                                                                <td>14500</td>
                                                                <td>21.3%</td>
                                                                <td>9.0%</td>
                                                                <td>2.0%</td>
                                                                <td>6.6%</td>
                                                                <td>3.7%</td>
                                                                <td>19.4%</td>
                                                                <td>3.6%</td>
                                                                <td>2.2%</td>
                                                                <td>3.1%</td>
                                                                <td>2.9%</td>
                                                                <td>4.2%</td>
                                                                <td>5.4%</td>
                                                                <td>0.4%</td>
                                                                <td>1.3%</td>
                                                                <td>0.0%</td>
                                                                <td>0.0%</td>
                                                                <td>11728</td>
                                                                <td>2568</td>
                                                                <td>8649</td>
                                                                <td>4811</td>
                                                            </tr>
                                                        </tbody>
                                                        <tfoot class="text-light">
                                                            <tr>
                                                                <th style="background-color: #616161;">Grand Total</th>
                                                                <th style="background-color: #616161;">14500</th>
                                                                <th style="background-color: #616161;">21.3%</th>
                                                                <th style="background-color: #616161;">9.0%</th>
                                                                <th style="background-color: #616161;">2.0%</th>
                                                                <th style="background-color: #616161;">6.6%</th>
                                                                <th style="background-color: #0C5A80;">3.7%</th>
                                                                <th style="background-color: #0C5A80;">19.4%</th>
                                                                <th style="background-color: #0C5A80;">3.6%</th>
                                                                <th style="background-color: #0C5A80;">2.2%</th>
                                                                <th style="background-color: #0C5A80;">3.1%</th>
                                                                <th style="background-color: #0C5A80;">2.9%</th>
                                                                <th style="background-color: #0C5A80;">4.2%</th>
                                                                <th style="background-color: #0C5A80;">5.4%</th>
                                                                <th style="background-color: #0C5A80;">0.4%</th>
                                                                <th style="background-color: #0C5A80;">1.3%</th>
                                                                <th style="background-color: #0C5A80;">0.0%</th>
                                                                <th style="background-color: #616161;">0.0%</th>
                                                                <th style="background-color: #616161;">11728</th>
                                                                <th style="background-color: #616161;">2568</th>
                                                                <th style="background-color: #616161;">8649</th>
                                                                <th style="background-color: #616161;">4811</th>
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