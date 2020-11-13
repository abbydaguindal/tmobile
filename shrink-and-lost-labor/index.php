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

                                        
                                        
                             
   

  
    
    <script src="../dependencies/jquery/jquery-3.5.1.js"></script>
    <script src="../dependencies/popper/popper.min.js"></script>
    <script src="../dependencies/bootstrap-4.5.0/dist/js/bootstrap.min.js"></script>
    <script src="../dependencies/DataTables/js/datatables.min.js"></script>
    <script src="dataTable/dataTable.js" ></script>
</body>
</html>