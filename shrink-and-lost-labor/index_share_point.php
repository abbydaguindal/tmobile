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
        /* font-weight: bold; */
        }
        th{
            font-size: 13px;
           
        }
        .mtdHeaders{
            font-size: 7px;
           
        }
      
      
    </style>
</head>

<body>

               
                   
                       
                  <div>              
                                    <!--category-->
                                    <div id="accordion">
                                            <div class="card-body">
                                                            <div class="row">
                                                                <div class="col-lg-3 col-md-3">
                                                                        <label class="text-sm font-weight-bold text-primary">SR Manager</label>
                                                                            <select class="form-control text-sm">
                                                                                <option>Multiple Items</option>
                                                                                <option>Bote, Katrina </option>
                                                                                <option></option>
                                                                            </select>
                                                                </div>
                                                            </div>
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-3">
                                                            <label for="billing type" class="text-sm font-weight-bold text-primary">TEX Manager</label>
                                                            <select class="form-control text-sm">
                                                                <option>All</option>
                                                                <option>Abriol Stephen M</option>
                                                                <option>Abriol Stephen M</option>
                                                                <option>Abriol Stephen M</option>
                                                            </select>                       
                                                        </div>
                                                         <div class="col-lg-9 col-md-9">
                                                            <div class="ccmsident float-right">
                                                                <label for="search" class="text-sm text-dark ">Search: </label>
                                                                <input type="text" id="search" placeholder="CCMS Ident"></input>              
                                                            </div>
                                                        </div>
                                                    </div>
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3">
                                                            <label for="KPI" class="text-sm font-weight-bold text-primary">Supervisor</label>
                                                            <select class="form-control text-sm">
                                                                <option>All</option>
                                                                <option>Abengoza IV, Bernardo S</option>
                                                                <option>Abengoza IV, Bernardo S</option>
                                                                <option>Abengoza IV, Bernardo S</option>
                                                                <table id="shareTable" class="display table-sm">
                                                                    <thead class="text-light">
                                                                        <th> 12348930 </th>
                                                                        <th> MTD Sched Hrs </th>
                                                                        <th> MTD Worked Hrs </th>
                                                                        <th> MTD Productivity </th>
                                                                        <th> Hours to Goal </th>
                                                                        <th> % to Goal </th>
                                                                        <th> Remarks </th>
                                                                    </thead>
                                                                </table>
                                                            </select>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 ">
                                                                    <table id="#" class="display table-sm float-right " >
                                                                        <thead class="mtdHeaders text-light text-sm ">
                                                                            <tr>
                                                                                    <th style="background-color: #0C5A80;">MTD Sched Hrs</th>
                                                                                    <th style="background-color: #0C5A80;">MTD Worked Hrs</th>
                                                                                    <th style="background-color: #0C5A80;">MTD Productivity</th>
                                                                                    <th style="background-color: #0C5A80;">Hours to Goal</th>
                                                                                    <th style="background-color: #0C5A80;">% to Goal</th>
                                                                                    <th style="background-color: #0C5A80;">Remarks</th>
                                                                                    
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody class="TableBody">
                                                                            <tr>
                                                                                <td>120.0</td>
                                                                                <td>41.5</td>
                                                                                <td>35%</td>
                                                                                <td>20.92%</td>
                                                                                <td>50%</td>
                                                                                <td>Fill % to Goal</td>
                                                                            
                                                                        
                                                                            </tr>
                                                                        </tbody>
                                                    
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                            </div>
                                    </div>
                                    <!--table-->
                                    <div class="table-responsive">
                                        <table id="MTDtable" class="table table-sm table-striped display nowrap" >
                                                <thead class="text-light text-sm ">
                                                    <tr>
                                                            <th style="background-color: #0C5A80;">Expert</th>
                                                            <th style="background-color: #0C5A80;">Name</th>
                                                            <th style="background-color: #0C5A80;">Emp ID</th>
                                                            <th style="background-color: #0C5A80;">10/02/2020</th>
                                                            <th style="background-color: #0C5A80;">10/03/2020</th>
                                                            <th style="background-color: #0C5A80;">10/04/2020</th>
                                                            <th style="background-color: #0C5A80;">10/05/2020</th>
                                                            <th style="background-color: #0C5A80;">10/06/2020</th>
                                                            <th style="background-color: #0C5A80;">10/07/2020</th>
                                                            <th style="background-color: #0C5A80;">10/08/2020</th>
                                                            <th style="background-color: #0C5A80;">10/09/2020</th>
                                                            <th style="background-color: #0C5A80;">10/10/2020</th>
                                                            
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
                                                        <td>6.6%</td>
                                                        <td>6.6%</td>
                                                        <td>6.6%</td>
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
                                                        <td>6.6%</td>
                                                        <td>6.6%</td>
                                                        <td>6.6%</td>
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
                                                        <td>6.6%</td>
                                                        <td>6.6%</td>
                                                        <td>6.6%</td>
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
                                                        <td>6.6%</td>
                                                        <td>6.6%</td>
                                                        <td>6.6%</td>
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
                                                        <td>6.6%</td>
                                                        <td>6.6%</td>
                                                        <td>6.6%</td>
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
                                                        <td>6.6%</td>
                                                        <td>6.6%</td>
                                                        <td>6.6%</td>
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
                                                        <td>6.6%</td>
                                                        <td>6.6%</td>
                                                        <td>6.6%</td>
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
                                                        <td>6.6%</td>
                                                        <td>6.6%</td>
                                                        <td>6.6%</td>
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
                                                        <td>6.6%</td>
                                                        <td>6.6%</td>
                                                        <td>6.6%</td>
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
                                                        <td>6.6%</td>
                                                        <td>6.6%</td>
                                                        <td>6.6%</td>
                                                        <td>6.6%</td>
                                                        <td>6.6%</td>
                                                   
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
</body>
</html>