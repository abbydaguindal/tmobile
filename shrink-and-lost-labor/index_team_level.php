<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset= "UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.8">
    <title> OCT Dashboard </title>
      
    <link rel="stylesheet" href="../dependencies/bootstrap-4.5.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../dependencies/css/bootstrap-select.css">

    <link href="../dependencies/fontawesome/css/font-awesome.min.css" rel="stylesheet">

    <!-- <link rel="stylesheet" href="../dependencies/DataTables/css/datatables.min.css">
    <link rel="stylesheet" href="../dependencies/DataTables/css/datatables.css"> -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="css/table.css">
    <style>
        td{
        font-size: 11px;
        }
        th{
            font-size: 10px;
            background-color: #000000;
           
        }
      
        td.details-control {background: url('../assets/images/plus.png') no-repeat center center; cursor: pointer; background-size: 17px; margin:auto;  }
        tr.shown td.details-control { background: url('../assets/images/minus.png') no-repeat center center; background-size: 17px; margin:auto;}

   
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
                                    <!--category-->
                                <div class="container-fluid" style="margin-top: 5em;">  
                                        <div class="card shadow">
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
                                                            <label for="KPI" class="text-sm font-weight-bold text-primary">SR MANAGER V2</label>
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
                                                        <label for="KPI" class="text-sm font-weight-bold text-primary">TEX MANAGER V2</label>
                                                        <select class="form-control text-sm" >
                                                            <option>Abriol, Stphen M</option>
                                                            <option>Abriol, Stphen M</option>
                                                            <option>Abriol, Stphen M</option>
                                                        </select>                            
                                                    </div>

                                                        <div class="col-xl-3 col-lg-3">
                                                            <label for="KPI" class="text-sm font-weight-bold text-primary">SUP V2</label>
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
                                                </div>
                                        </div>
                                
                            

                                    <!--table-->
                                    <div class="card-body">
                                        <table id="teamLvlTbl" class="table table-sm table-striped table-bordered display nowrap">
                                        <thead class="text-light">
                                                    <tr>
                                                            <th style="padding:1%"></th>
                                                            <th>SR MANAGER V2</th>
                                                            <th>TEX Manager V2</th>
                                                            <th>SUP V2</th>
                                                            <th>Name</th>
                                                            <th>Emp ID</th>
                                                            <th>Scheduled Headcount</th>
                                                            <th>Total Infraction</th>
                                                            <th>Miss Shift</th>
                                                            <th>Late Arrival</th>
                                                            <th>Missing Intra-Shift</th>
                                                            <th>Early Departure</th>
                                                            <th>Total Aux</th>
                                                            <th>Default</th>
                                                            <th>Stread</th>
                                                            <th>Coaching</th>
                                                            <th>Training</th>
                                                            <th>Meeting</th>
                                                            <th>Break</th>
                                                            <th>Project</th>
                                                            <th>System Aux</th>
                                                            <th>Aux 8</th>
                                                            <th>TPUSA Meeting</th>
                                                            <th>Missed Shift (Hours)</th>
                                                            <th>Late Arrival (Hours)</th>
                                                            <th>Missing Intra-Shift (Hours)</th>
                                                            <th>Early Dep (Hours)</th>
                                                            
                                                            
                                                    </tr>
                                                </thead>
                                                <tfoot class="text-light">
                                                    <tr >
                                                            <th style="padding:1%"></th>
                                                            <th>SR MANAGER V2</th>
                                                            <th>TEX Manager V2</th>
                                                            <th>SUP V2</th>
                                                            <th>Name</th>
                                                            <th>Emp ID</th>
                                                            <th>Scheduled Headcount</th>
                                                            <th>Total Infraction</th>
                                                            <th>Miss Shift</th>
                                                            <th>Late Arrival</th>
                                                            <th>Missing Intra-Shift</th>
                                                            <th>Early Departure</th>
                                                            <th>Total Aux</th>
                                                            <th>Default</th>
                                                            <th>Stread</th>
                                                            <th>Coaching</th>
                                                            <th>Training</th>
                                                            <th>Meeting</th>
                                                            <th>Break</th>
                                                            <th>Project</th>
                                                            <th>System Aux</th>
                                                            <th>Aux 8</th>
                                                            <th>TPUSA Meeting</th>
                                                            <th>Missed Shift (Hours)</th>
                                                            <th>Late Arrival (Hours)</th>
                                                            <th>Missing Intra-Shift (Hours)</th>
                                                            <th>Early Dep (Hours)</th>
                                                    </tr>
                                                </tfoot>
                                        </table>
                                    </div>
                                </div>    

   

  
        <script src="../dependencies/jquery/jquery-3.5.1.js"></script>
        <script src="../dependencies/popper/popper.min.js"></script>
        <script src="../dependencies/bootstrap-4.5.0/dist/js/bootstrap.min.js"></script>

        <script src="js/table.js"></script>
        <script>
                function format ( d ) {
                    // `d` is the original data object for the row
                    return '<div><table class="table table-sm table-striped table-bordered display nowrap">'+
                       
                        '<tr>'+            
                            '<td>Gabriel, Juan Paulo M</td>'+
                            '<td>Alusitian, Idol R</td>'+
                            '<td>Josef, Rodel D </td>'+
                            '<td>Betis, Irene V </td>'+
                            '<td>937827</td>'+
                            '<td>20</td>'+
                            '<td>0.0%</td>'+
                            '<td>0.1%</td>'+
                            '<td>13.2%</td>'+
                            '<td>0.5%</td>'+
                            '<td>14.9%</td>'+
                            '<td>5.7%</td>'+
                            '<td>2.4%</td>'+
                            '<td>1.0%</td>'+
                            '<td>1.6%</td>'+
                            '<td>3.9%</td>'+
                            '<td>5.9%</td>'+
                            '<td>0.0%</td>'+
                            '<td>0.0%</td>'+
                            '<td>0.0%</td>'+
                            '<td>0.0%</td>'+
                            '<td>0</td>'+
                            '<td>0</td>'+
                            '<td>0</td>'+
                            '<td>0</td>'+
                            '<td>1</td>'+
                        '</tr>'+
                        '<tr >'+            
                            '<td>Lantin, Victor E</td>'+
                            '<td>Alusitian, Idol R</td>'+
                            '<td>Josef, Rodel D </td>'+
                            '<td>Betis, Irene V </td>'+
                            '<td>937827</td>'+
                            '<td>20</td>'+
                            '<td>0.0%</td>'+
                            '<td>0.1%</td>'+
                            '<td>13.2%</td>'+
                            '<td>0.5%</td>'+
                            '<td>14.9%</td>'+
                            '<td>5.7%</td>'+
                            '<td>2.4%</td>'+
                            '<td>1.0%</td>'+
                            '<td>1.6%</td>'+
                            '<td>3.9%</td>'+
                            '<td>5.9%</td>'+
                            '<td>0.0%</td>'+
                            '<td>0.0%</td>'+
                            '<td>0.0%</td>'+
                            '<td>0.0%</td>'+
                            '<td>0</td>'+
                            '<td>0</td>'+
                            '<td>0</td>'+
                            '<td>0</td>'+
                            '<td>1</td>'+
                        '</tr>'+
                        '<tr>'+            
                            '<td>Gabriel, Juan Paulo M</td>'+
                            '<td>Alusitian, Idol R</td>'+
                            '<td>Josef, Rodel D </td>'+
                            '<td>Betis, Irene V </td>'+
                            '<td>937827</td>'+
                            '<td>20</td>'+
                            '<td>0.0%</td>'+
                            '<td>0.1%</td>'+
                            '<td>13.2%</td>'+
                            '<td>0.5%</td>'+
                            '<td>14.9%</td>'+
                            '<td>5.7%</td>'+
                            '<td>2.4%</td>'+
                            '<td>1.0%</td>'+
                            '<td>1.6%</td>'+
                            '<td>3.9%</td>'+
                            '<td>5.9%</td>'+
                            '<td>0.0%</td>'+
                            '<td>0.0%</td>'+
                            '<td>0.0%</td>'+
                            '<td>0.0%</td>'+
                            '<td>0</td>'+
                            '<td>0</td>'+
                            '<td>0</td>'+
                            '<td>0</td>'+
                            '<td>1</td>'+
                        '</tr>'+
                        '<tr>'+            
                            '<td>Mangahas, Arnel D</td>'+
                            '<td>Alusitian, Idol R</td>'+
                            '<td>Josef, Rodel D </td>'+
                            '<td>Betis, Irene V </td>'+
                            '<td>937827</td>'+
                            '<td>20</td>'+
                            '<td>0.0%</td>'+
                            '<td>0.1%</td>'+
                            '<td>13.2%</td>'+
                            '<td>0.5%</td>'+
                            '<td>14.9%</td>'+
                            '<td>5.7%</td>'+
                            '<td>2.4%</td>'+
                            '<td>1.0%</td>'+
                            '<td>1.6%</td>'+
                            '<td>3.9%</td>'+
                            '<td>5.9%</td>'+
                            '<td>0.0%</td>'+
                            '<td>0.0%</td>'+
                            '<td>0.0%</td>'+
                            '<td>0.0%</td>'+
                            '<td>0</td>'+
                            '<td>0</td>'+
                            '<td>0</td>'+
                            '<td>0</td>'+
                            '<td>1</td>'+
                        '</tr>'+    
                        '<tr>'+            
                            '<td>Hibo, Loreto P</td>'+
                            '<td>Alusitian, Idol R</td>'+
                            '<td>Josef, Rodel D </td>'+
                            '<td>Betis, Irene V </td>'+
                            '<td>937827</td>'+
                            '<td>20</td>'+
                            '<td>0.0%</td>'+
                            '<td>0.1%</td>'+
                            '<td>13.2%</td>'+
                            '<td>0.5%</td>'+
                            '<td>14.9%</td>'+
                            '<td>5.7%</td>'+
                            '<td>2.4%</td>'+
                            '<td>1.0%</td>'+
                            '<td>1.6%</td>'+
                            '<td>3.9%</td>'+
                            '<td>5.9%</td>'+
                            '<td>0.0%</td>'+
                            '<td>0.0%</td>'+
                            '<td>0.0%</td>'+
                            '<td>0.0%</td>'+
                            '<td>0</td>'+
                            '<td>0</td>'+
                            '<td>0</td>'+
                            '<td>0</td>'+
                            '<td>1</td>'+
                        '</tr>'+ 
                    '</table></div>';
                }
                
                $(document).ready(function() {
                    var tbl = $('#teamLvlTbl').DataTable( {
                        "ajax": "file/teamLevel.txt",
                        "columns": [
                            {
                                "className":      'details-control',
                                "orderable":      false,
                                "data":           null,
                                "defaultContent": ''
                            },
                            { "data": "srmanager" },
                            { "data": "texmanager" },
                            { "data": "sup" },
                            { "data": "empname" },
                            { "data": "empid" },
                            { "data": "scheduled" },
                            { "data": "totalinfraction" },
                            { "data": "missshift" },
                            { "data": "latearrival" },
                            { "data": "missingintrashift" },
                            { "data": "earlydeparture" },
                            { "data": "totalaux" },
                            { "data": "defaults" },
                            { "data": "stread" },
                            { "data": "coaching" },
                            { "data": "training" },
                            { "data": "meeting" },
                            { "data": "breaks" },
                            { "data": "projects" },
                            { "data": "systemaux" },
                            { "data": "aux" },
                            { "data": "tpusameeting" },
                            { "data": "missedshift" },
                            { "data": "latearrival" },
                            { "data": "missingintrashift" },
                            { "data": "earlydep" }
                        ],
                        "fnInitComplete": function(){
                                // Disable TBODY scoll bars
                                $('.dataTables_scrollBody').css({
                                    'overflow': 'hidden',
                                    'border': '0'
                                });

                                // Enable TFOOT scoll bars
                                $('.dataTables_scrollFoot').css('overflow', 'auto');

                                // Sync TFOOT scrolling with TBODY
                                $('.dataTables_scrollFoot').on('scroll', function () {
                                    $('.dataTables_scrollBody').scrollLeft($(this).scrollLeft());
                                });                    
                            },
                        "order": [[1, 'asc']],
                        responsive: true,
                        "searching": false,
                        "ordering": true,
                        "info":     false,  
                        "bLengthChange": false ,
                        "paging": false,
                        "autoWidth": false,
                        "scrollX": "150px"
                    } );
                    
                    // Add event listener for opening and closing details
                    $('#teamLvlTbl tbody').on('click', 'td.details-control', function () {
                        var tr = $(this).closest('tr');
                        var row = tbl.row( tr );
                
                        if ( row.child.isShown() ) {
                            // This row is already open - close it
                            row.child.hide();
                            tr.removeClass('shown');
                        }
                        else {
                            // Open this row
                            row.child( format(row.data()) ).show();
                            tr.addClass('shown');
                        }
                    } );

                
                });
        </script>
    </body>
</html>