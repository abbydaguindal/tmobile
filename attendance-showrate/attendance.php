<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendance</title>

        <!--Boostrap-->
        <link rel="stylesheet" href="../dependencies/bootstrap-4.5.0/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="../dependencies/css/bootstrap-select.css">
        <link rel="stylesheet" href="main.css">
                   
        <!--Fontawesome-->        
        <link href="../dependencies/fontawesome-new/css/all.css" rel="stylesheet">
          
        <!--Data Table-->
        <!-- <link rel="stylesheet" href="../dependencies/DataTables/css/datatables.min.css">
        <link rel="stylesheet" href="../dependencies/DataTables/css/datatables.css"> -->
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">

    <!-- datatable -->
    
   


</head>
<body>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-primary-theme shadow">
        <a class="navbar-brand" href="#">TMobile</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">                      
                <li class="nav-item">
                    <a class="nav-link" href="dashboard.php">Dashboard <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="attendance.php">Attendance</a>
                </li>
               
            </ul>       
        </div>
    </nav>

    <div class="container-fluid  my-4 py---5">
        
            <div id="accordion">
                <div class="card">
                    <div class="card-header p-2" id="headingOne" style="cursor:pointer">
                        <h6 class="mb-0" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Category </h6>
                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="card-body p-2">
                            <div class="row">
                                <div class="col-sm-3 form-group">
                                    <label for="locationLabel">Location</label>
                                    <select   class="form-control" id="location">
                                        <option value="StayIn">Stay In</option>
                                        <option value="StayOut">Stay Out</option>
                                        <option value="StayOutTwo">Stay Out</option>
                                        <option value="Unable">Unable To Work</option>
                                        <option value="WAHA">WAHA</option>
                                        <option value="">Blank</option>
                                    </select>
                                </div>

                                <div class="col-sm-3 form-group">
                                    <label for="LOBLabel">SOM</label>
                                    <select   class="form-control" id="som">
                                        <option value="">Bote, Katrina D</option>
                                        <option value="">de Leon, Carlo Magno</option>
                                        <option value="">Gabriel, Juan Paolo M</option>
                                        <option value="">Green, Angela N</option>
                                        <option value="">Hibo, Loreta P</option>
                                        <option value="">Lantin, Victor E</option>
                                        <option value="">Lorete, Christian Ronel L</option>
                                        <option value="">Mangahas, Arnel D</option>
                                        <option value="">Timbas, Sheryl O</option>
                                        <option value="">Tolentino Robertson</option>
                                        
                                    </select>
                                </div>

                                <div class="col-sm-3 form-group">
                                    <label for="accmLabel">ACCM</label>
                                    <select   class="form-control" id="accm">
                                        <option value="">Abriol Stephen M</option>
                                        <option value="">Alhambra Anna Milagrosa</option>
                                        <option value="">Alivar Damsel B</option>
                                        <option value="">Alusitain Idol R</option>
                                        <option value="">Apin Lloyd Christopher G</option>
                                        <option value="">Bote Katrina Ana D</option>
                                        <option value="">Bustria Joseph Vincent S</option>
                                        <option value="">Cando Anothony D</option>
                                        <option value="">Catapang Nhovie Victor D</option>
                                        <option value="">Chavez, Riza A</option>
                                        <option value="">De Ocampo Allie Jane C</option>
                                        <option value="">Dela Cruz John Jaypee S</option>
                                       
                                    </select>
                                </div>
                                <div class="col-sm-3 form-group">
                                    <label for="wsetLabel">WSET</label>
                                    <select   class="form-control" id="wset">
                                    <option value="">--</option>
                                    <option value="">9/27/2020</option>                                   
                                    <option value="">10/4/2020</option>
                                    <option value="">10/11/2020</option>
                                    <option value="">10/18/2020</option>
                                    <option value="">10/25/2020</option>                                  
                                    </select>
                                </div>
                            </div>

                            <div class="row">
                            

                                <div class="col-sm-4 form-group">
                                    <label for="communityLabel">Community</label>
                                    <select   class="form-control" id="community">
                                        <option value="charleston_01">Charleston_01</option>
                                        <option value="charleston_02">Charleston_02</option>
                                        <option value="charleston_03">Charleston_03</option>
                                        <option value="charleston_04">Charleston_04</option>
                                        <option value="charleston_05">Charleston_05</option>
                                        <option value="charleston_06">Charleston_06</option>
                                        <option value="charleston_07">Charleston_07</option>
                                        <option value="charleston_08">Charleston_08</option>
                                        <option value="charleston_09">Charleston_09</option>
                                        <option value="charleston_10">Charleston_10</option>
                                        <option value="charleston_11">Charleston_11</option>
                                        <option value="charleston_12">Charleston_12</option>
                                        <option value="charleston_13">Charleston_13</option>
                                        <option value="charleston_14">Charleston_14</option>
                                        <option value="charleston_15">Charleston_15</option>
                                        <option value="charleston_16">Charleston_16</option>
                                        <option value="deployment">Deployment</option>
                                        <option value="leap">LEAP</option>
                                        <option value="menaul_01">Menaul_01</option>
                                        <option value="menaul_02">Menaul_02</option>
                                        <option value="menaul_03">Menaul_03</option>
                                        <option value="menaul_04">Menaul_04</option>
                                        <option value="menaul_05">Menaul_05</option>
                                        <option value="menaul_06">Menaul_06</option>
                                        <option value="menaul_07">Menaul_07</option>
                                        <option value="mentor">Mentor</option>
                                        <option value="pr">PR</option>
                                        <option value="pre-prod">Pre-Prod</option>
                                        <option value="pt">PT</option>
                                        <option value="teamOfMentors">Team of Mentors</option>
                                        <option value="winchita_01">Winchita_01</option>
                                        <option value="winchita_02">Winchita_02</option>
                                        <option value="winchita_03">Winchita_03</option>
                                        <option value="winchita_04">Winchita_04</option>
                                        <option value="winchita_05">Winchita_05</option>
                                        <option value="winchita_06">Winchita_06</option>
                                        <option value="winchita_07">Winchita_07</option>
                                        <option value="winchita_08">Winchita_08</option>
                                        <option value="winchita_09">Winchita_09</option>
                                        <option value="winchita_10">Winchita_10</option>
                                        <option value="winchita_11">Winchita_11</option>
                                        <option value="winchita_12">Winchita_12</option>
                                        <option value="winchita_13">Winchita_13</option>
                                        <option value="winchita_14">Winchita_14</option>
                                    </select>
                                </div>

                                <div class="col-sm-4 form-group">
                                    <label for="updatedLOBLabel">Updated LOB</label>
                                    <select   class="form-control" id="updateLOB">
                                        <option value="accountExpert">Account Expert</option>
                                        <option value="accountNonMarket">Account Non-Market</option>
                                        <option value="techExpert">Tech Expert</option>
                                        <option value="black">(Blank)</option>
                                    </select>
                                </div>
                                <div class="col-sm-4 form-group">
                                    <label for="supervisorLabel">Supervisor</label>
                                    <select   class="form-control" id="supervisor">
                                        <option value="">Abengoza IV, Bernardo S</option>
                                        <option value="">Acopicop, Janin E</option>
                                        <option value="">Acopicop, John Patrick Y</option>
                                        <option value="">Aldaba, Joy Therese A</option>
                                        <option value="">Allones, Jennifer C</option>
                                        <option value="">Almarines, Faye Angelita M</option>
                                        <option value="">Almodovar, John Aie Paul D</option>
                                        <option value="">Alulod Daryl M</option>
                                        <option value="">Apuya II, Florencio N</option>
                                        <option value="">Aquino, Jennielyn D</option>
                                        <option value="">Aquisay, Djhonna D</option>
                                        <option value="">Asid, Carl Robert A</option>
                                        <option value="">Atomar, Anuar A</option>
                                        <option value="">Bajandi, Jego Francisco C</option>
                                        <option value="">Baldeo, Mary Grace P</option>                                                                               
                                    </select>
                                </div>

                                
                            </div>
                        </div>                    
                    </div>
                 </div>                   
            </div>
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title text-center mb-0">TEAM LEVEL ATTENDANCE SHOWRATE - OCTOBER MTD</h3>
                </div>
                <div class="card-body">
                    <table id="example" class="table table-sm" style="width:100%;width:1px;white-space:nowrap; ">
                        <thead class="bg-pink-head">
                            <tr>
                                <th style="width: 50px;"></th>
                                <th>Agent Level | Showrate</th>
                                <th>Emp ID</th>
                                <th>Name</th>
                                <th>10/1/2020</th>
                                <th>10/2/2020</th>
                                <th>10/3/2020</th>
                                <th>10/4/2020</th>
                                <th>10/5/2020</th>
                                <th>10/6/2020</th>
                                <th>10/7/2020</th>
                                <th>10/8/2020</th>
                                <th>10/9/2020</th>
                                <th>10/10/2020</th>
                                <th>10/11/2020</th>
                                <th>10/12/2020</th>
                                <th>10/13/2020</th>
                                <th>10/14/2020</th>
                                <th>10/15/2020</th>
                                <th>Grand Total</th>                        
                            </tr>
                        </thead>
                        <tbody>
                           
                            <tr>
                                <td><button type="button" class="btn btn-sm btn-success" id="btn1"><i class="fas fa-plus-circle"></i></button></td>
                                <td>Acopicop John Patrick Y</td>
                                <td data-number="row1-1"></td>
                                <td data-number="row1-1"></td>
                                <td data-number="row1-1">100%</td>
                                <td data-number="row1-1">100%</td>
                                <td data-number="row1-1">50%</td>
                                <td data-number="row1-1"></td>
                                <td data-number="row1-1"></td>
                                <td data-number="row1-1"></td>
                                <td data-number="row1-1"></td>
                                <td data-number="row1-1"></td>
                                <td data-number="row1-1"></td>
                                <td data-number="row1-1"></td>
                                <td data-number="row1-1"></td>
                                <td data-number="row1-1"></td>
                                <td data-number="row1-1"></td>
                                <td data-number="row1-1"></td>
                                <td data-number="row1-1"></td>
                                <td data-number="row1-1"></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td data-number="row1">3500391</td>
                                <td data-number="row1">Mendoza, Judy Ann M</td>
                                <td data-number="row1">100.0%</td>
                                <td data-number="row1">100.0%</td>
                                <td data-number="row1">100.0%</td>
                                <td data-number="row1">100.0%</td>
                                <td data-number="row1">100.0%</td>
                                <td data-number="row1">100.0%</td>
                                <td data-number="row1">100.0%</td>
                                <td data-number="row1">100.0%</td>
                                <td data-number="row1">100.0%</td>
                                <td data-number="row1">100.0%</td>
                                <td data-number="row1">100.0%</td>
                                <td data-number="row1">100.0%</td>
                                <td data-number="row1">100.0%</td>
                                <td data-number="row1">100.0%</td>
                                <td data-number="row1">100.0%</td>
                                <td data-number="row1">100.0%</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td data-number="row1">3500391</td>
                                <td data-number="row1">Abuda, Angela Marie J.</td>
                                <td data-number="row1">100.0%</td>
                                <td data-number="row1">100.0%</td>
                                <td data-number="row1">100.0%</td>
                                <td data-number="row1">100.0%</td>
                                <td data-number="row1">100.0%</td>
                                <td data-number="row1">100.0%</td>
                                <td data-number="row1">100.0%</td>
                                <td data-number="row1">100.0%</td>
                                <td data-number="row1">100.0%</td>
                                <td data-number="row1">100.0%</td>
                                <td data-number="row1">100.0%</td>
                                <td data-number="row1">100.0%</td>
                                <td data-number="row1">100.0%</td>
                                <td data-number="row1">100.0%</td>
                                <td data-number="row1">100.0%</td>
                                <td data-number="row1">100.0%</td>
                            </tr>
                            <tr>
                                <td><button type="button" class="btn btn-sm btn-success" id="btn2"><i class="fas fa-plus-circle"></i></button></td>
                                <td>Aldaba, Joy Therese</td>
                                <td data-number="row2">3500391</td>
                                <td data-number="row2">Cabajar, Lhenard</td>
                                <td data-number="row2">100.0%</td>
                                <td data-number="row2">100.0%</td>
                                <td data-number="row2">100.0%</td>
                                <td data-number="row2">100.0%</td>
                                <td data-number="row2">100.0%</td>
                                <td data-number="row2">100.0%</td>
                                <td data-number="row2">100.0%</td>
                                <td data-number="row2">100.0%</td>
                                <td data-number="row2">100.0%</td>
                                <td data-number="row2">100.0%</td>
                                <td data-number="row2">100.0%</td>
                                <td data-number="row2">100.0%</td>
                                <td data-number="row2">100.0%</td>
                                <td data-number="row2">100.0%</td>
                                <td data-number="row2">100.0%</td>
                                <td data-number="row2">100.0%</td>
                            </tr>
                        </tbody>
                        <tfoot class="bg-footer">
                            <tr>
                                <th style="width: 50px;"></th>
                                <th>Grand Total</th>
                                <th>87.4%</th>
                                <th>87.2%</th>
                                <th>89.6%</th>
                                <th>88.3</th>
                                <th>87.4%</th>
                                <th>87.2%</th>
                                <th>89.6%</th>
                                <th>88.3</th>
                                <th>87.4%</th>
                                <th>87.2%</th>
                                <th>89.6%</th>
                                <th>88.3</th>
                                <th>87.4%</th>
                                <th>87.2%</th>
                                <th>89.6%</th>
                                <th>88.3</th>                                
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>        
        
    </div>




    <script src="../dependencies/jquery/jquery-3.5.1.js"></script>
    <script src="../dependencies/popper/popper.min.js"></script>
    <script src="../dependencies/bootstrap-4.5.0/dist/js/bootstrap.min.js"></script>
    <!--datatable  -->
    <script src="../dependencies/DataTables/DataTables-1.10.22/js/jquery.dataTables.min.js"></script>
    
    <script>
         $(document).ready(function() {
                var table = $('#example').DataTable( {                  
                    "order": [[1, 'asc']],
                     responsive: true,
                    "searching": false,
                    "ordering": false,
                    "info":     false,  
                    "bLengthChange": false ,
                    "paging": false,
                    "scrollY":        "40vh",
                    "scrollCollapse": true,
                    "scrollX": true    
                });               
        });

    
        $('#btn1').click(function(){    
            $(this).toggleClass('btn-success btn-danger');   
            $(this).find('i').toggleClass('fa-plus-circle fa-minus-circle')                                  
            $("[data-number='row1']").toggle()
            
        });

        $('#btn2').click(function(){    
            $(this).toggleClass('btn-success btn-danger');   
            $(this).find('i').toggleClass('fa-plus-circle fa-minus-circle')
            $("[data-number='row2']").toggle();          
        });
    </script>
</body>
</html>