<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset= "UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.8">
    <title> OCT Dashboard </title>
      
    <link rel="stylesheet" href="../dependencies/bootstrap-4.5.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../dependencies/bootstrap-4.5.0/css/bootstrap-select.css">

    <link rel="stylesheet" href="../dependencies/fontawesome/css/font-awesome.min.css">

    <!-- <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css"> -->
    <!-- <link rel="stylesheet" href="../dependencies/DataTables/css/datatables.css"> -->

    <style>
        td{
        font-size: 11px;
        }
        th{
            font-size: 10px;
           
        }
      
        /* .TableBody{
            
        /* }  */
    </style>
</head>

<body>

                                
                                    <!--category-->
                                    <div id="accordion">
                                        <div class="card shadow">
                                            <div id="collapseOne" class="collapse show" data-parent="#accordion">
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
                                                                <option name="checkbox" name="GY" value="GY" >GY</option>
                                                                <option name="checkbox" name="24x7" value="24x7" >24x7</option>
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
                                        </div>
                                
                            

                                    <!--table-->
                                    <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="levelTable" class="display table-sm table-striped display nowrap" >
                                        <thead class="text-light">
                                                    <tr>
                                                            <th style="background-color: #000000;">SR MANAGER V2</th>
                                                            <th style="background-color: #000000;">TEX Manager V2</th>
                                                            <th style="background-color: #000000;">SUP V2</th>
                                                            <th style="background-color: #000000;">Name</th>
                                                            <th style="background-color: #000000;">Emp ID</th>
                                                            <th style="background-color: #000000;">Scheduled Headcount</th>
                                                            <th style="background-color: #000000;">Total Infraction</th>
                                                            <th style="background-color: #000000;">Miss Shift</th>
                                                            <th style="background-color: #000000;">Late Arrival</th>
                                                            <th style="background-color: #000000;">Missing Intra-Shift</th>
                                                            <th style="background-color: #000000;">Early Departure</th>
                                                            <th style="background-color: #000000;">Total Aux</th>
                                                            <th style="background-color: #000000;">Default</th>
                                                            <th style="background-color: #000000;">Stread</th>
                                                            <th style="background-color: #000000;">Coaching</th>
                                                            <th style="background-color: #000000;">Training</th>
                                                            <th style="background-color: #000000;">Meeting</th>
                                                            <th style="background-color: #000000;">Break</th>
                                                            <th style="background-color: #000000;">Project</th>
                                                            <th style="background-color: #000000;">System Aux</th>
                                                            <th style="background-color: #000000;">Aux 8</th>
                                                            <th style="background-color: #000000;">TPUSA Meeting</th>
                                                            <th style="background-color: #000000;">Missed Shift (Hours)</th>
                                                            <th style="background-color: #000000;">Late Arrival (Hours)</th>
                                                            <th style="background-color: #000000;">Missing Intra-Shift (Hours)</th>
                                                            <th style="background-color: #000000;">Early Dep (Hours)</th>
                                                            
                                                            
                                                    </tr>
                                                </thead>
                                                <tbody class="TableBody">
                                                        <tr  data-toggle="toggle">  
                                                                <td>  
                                                                    <span>+</span>    
                                                                    <span lang="EN-IN">Gabriel, Juan Paulo M</span>     
                                                                </td>
                                                                <td>
                                                                        <span>+</span>
                                                                        <span lang="EN-IN">Alusitian, Idol R</span>  
                                                                </td>
                                                                <td>
                                                                        <span>+</span>
                                                                        <span lang="EN-IN">Josef, Rodel D</span>  
                                                                </td>
                                                                <td>
                                                                        <span>+</span>
                                                                        <span lang="EN-IN">Betis, Irene V</span>  
                                                                </td>
                                                             
                                                               <td>937827</td>
                                                               <td>20</td>
                                                               <td>0.0%</td>
                                                               <td>0.1%</td>
                                                               <td>13.2%</td>
                                                               <td>0.5%</td>
                                                               <td>14.9%</td>
                                                               <td>5.7%</td>
                                                               <td>2.4%</td>
                                                               <td>1.0%</td>
                                                               <td>1.6%</td>
                                                               <td>3.9%</td>
                                                               <td>5.9%</td>
                                                               <td>0.0%</td>
                                                               <td>0.0%</td>
                                                               <td>0.0%</td>
                                                               <td>0.0%</td>
                                                               <td>0</td>
                                                               <td>0</td>
                                                               <td>0</td>
                                                               <td>0</td>
                                                               <td>1</td>
                                                               

                                                        </tr>
                                                        <tr  data-toggle="toggle">  
                                                                <td>  
                                                                    <span>+</span>    
                                                                    <span lang="EN-IN">Hibo, Loreto P</span>     
                                                                </td>
                                                                <td>
                                                                        <span>+</span>
                                                                        <span lang="EN-IN">Alusitian, Idol R</span>  
                                                                </td>
                                                                <td>
                                                                        <span>+</span>
                                                                        <span lang="EN-IN">Josef, Rodel D</span>  
                                                                </td>
                                                                <td>
                                                                        <span>+</span>
                                                                        <span lang="EN-IN">Betis, Irene V</span>  
                                                                </td>
                                                             
                                                               <td>937827</td>
                                                               <td>20</td>
                                                               <td>0.0%</td>
                                                               <td>0.1%</td>
                                                               <td>13.2%</td>
                                                               <td>0.5%</td>
                                                               <td>14.9%</td>
                                                               <td>5.7%</td>
                                                               <td>2.4%</td>
                                                               <td>1.0%</td>
                                                               <td>1.6%</td>
                                                               <td>3.9%</td>
                                                               <td>5.9%</td>
                                                               <td>0.0%</td>
                                                               <td>0.0%</td>
                                                               <td>0.0%</td>
                                                               <td>0.0%</td>
                                                               <td>0</td>
                                                               <td>0</td>
                                                               <td>0</td>
                                                               <td>0</td>
                                                               <td>1</td>
                                                               

                                                        </tr>
                                                </tbody>
                                                <tbody class="hideTr TableBody">  
                                                <tr> 
                                                                <td>Gabriel, Juan Paulo M</td>
                                                                <td>Alusitian, Idol R</td>
                                                                <td>Alusitian, Idol R</td>
                                                                <td>Betis, Irene V</td>
                                                             
                                                               <td>937827</td>
                                                               <td>20</td>
                                                               <td>0.0%</td>
                                                               <td>0.1%</td>
                                                               <td>13.2%</td>
                                                               <td>0.5%</td>
                                                               <td>14.9%</td>
                                                               <td>5.7%</td>
                                                               <td>2.4%</td>
                                                               <td>1.0%</td>
                                                               <td>1.6%</td>
                                                               <td>3.9%</td>
                                                               <td>5.9%</td>
                                                               <td>0.0%</td>
                                                               <td>0.0%</td>
                                                               <td>0.0%</td>
                                                               <td>0.0%</td>
                                                               <td>0</td>
                                                               <td>0</td>
                                                               <td>0</td>
                                                               <td>0</td>
                                                               <td>1</td>
                                                               

                                                </tr>
                                                <tr> 
                                                                <td>Gabriel, Juan Paulo M</td>
                                                                <td>Alusitian, Idol R</td>
                                                                <td>Alusitian, Idol R</td>
                                                                <td>Betis, Irene V</td>
                                                             
                                                               <td>937827</td>
                                                               <td>20</td>
                                                               <td>0.0%</td>
                                                               <td>0.1%</td>
                                                               <td>13.2%</td>
                                                               <td>0.5%</td>
                                                               <td>14.9%</td>
                                                               <td>5.7%</td>
                                                               <td>2.4%</td>
                                                               <td>1.0%</td>
                                                               <td>1.6%</td>
                                                               <td>3.9%</td>
                                                               <td>5.9%</td>
                                                               <td>0.0%</td>
                                                               <td>0.0%</td>
                                                               <td>0.0%</td>
                                                               <td>0.0%</td>
                                                               <td>0</td>
                                                               <td>0</td>
                                                               <td>0</td>
                                                               <td>0</td>
                                                               <td>1</td>
                                                               
                                                </tr>
                                            </tbody>
                                            
                                        </table>
                                    </div>
                                    </div>

   

  
    <script src="../dependencies/jquery/jquery-3.5.1.js"></script>
    <script src="../dependencies/popper/popper.min.js"></script>
    <script src="../dependencies/bootstrap-4.5.0/dist/js/bootstrap.min.js"></script>
    <script src="../dependencies/DataTables/js/datatables.min.js"></script>
    <script src="dataTable/dataTable.js" ></script>
    <script type="text/javascript">  
    $(document).ready(function () {  
        debugger;  
        $('.hideTr').slideUp(600);  
     $('[data-toggle="toggle"]').click(function () {  
        if ($(this).parents().next(".hideTr").is(':visible')) {  
            $(this).parents().next('.hideTr').slideUp(600);  
            $(".plusminus" + $(this).children().children().attr("id")).text('+');  
          
            }  
        else {  
            $(this).parents().next('.hideTr').slideDown(600);  
            $(".plusminus" + $(this).children().children().attr("id")).text('- ');  
          
        }  
    });  
    });  
    </script>  
</body>
</html>