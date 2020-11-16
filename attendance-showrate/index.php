<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../dependencies/bootstrap-4.5.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-primary-theme shadow">
        <a class="navbar-brand" href="#">TMobile</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">           
            <ul class="navbar-nav ml-auto">                      
                <li class="nav-item active">
                    <a class="nav-link" href="dashboard.php">Dashboard <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="attendance.php">Attendance</a>
                </li>
               
            </ul>      
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container-fluid my-4 py---5">
        <div id="accordion">
            <div class="card">
                <div class="card-header p-2" id="headingOne" style="cursor:pointer">
                    <h6 class="mb-0" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Category </h6>
                </div>

                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body p-2">
                        <div class="row">                            
                            <div class="col-sm-4 form-group">
                                <label for="locationLabel">Location</label>
                                <select multiple  class="form-control" id="location">
                                    <option value="StayIn">Stay In</option>
                                    <option value="StayOut">Stay Out</option>
                                    <option value="StayOutTwo">Stay Out</option>
                                    <option value="Unable">Unable To Work</option>
                                    <option value="WAHA">WAHA</option>                                       
                                </select>
                            </div>  
                            <div class="col-sm-4 form-group">
                                <label for="weekstartLabel">Weekstart</label>
                                <select multiple  class="form-control" id="weekstart">
                                    <option value="">9/27/2020</option>                                   
                                    <option value="">10/4/2020</option>
                                    <option value="">10/11/2020</option>
                                    <option value="">10/18/2020</option>
                                    <option value="">10/25/2020</option>                                      
                                </select>
                            </div>
                            <div class="col-sm-4 form-group">
                                <label for="srManagerLabel">Sr. Manager</label>
                                <select multiple  class="form-control" id="srManager">
                                    <option value="">Tolentino Robertson</option>                                     
                                    <option value="">Mangahas, Arnel D</option>
                                    <option value="">Lorete, Christian Ronel L</option>
                                    <option value="">Lantin, Victor E</option>
                                    <option value="">Hibo, Lorete P</option>
                                    <option value="">Green, Angela N.</option>
                                    <option value="">Gabriel, Juan Paolo M</option>
                                    <option value="">de Leon, Carlo Magno M</option>
                                </select>
                            </div>                         
                        </div>
                        <div class="row">
                            <div class="col-sm-4 form-group">
                                <label for="supervisorLabel">Supervisor</label>
                                    <select multiple  class="form-control" id="supervisor">
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
                            <div class="col-sm-4 form-group">
                                <label for="accmLabel">ACCM</label>
                                <select multiple  class="form-control" id="accm">
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
                            <div class="col-sm-4 form-group">
                                <label for="phasesLabel">Phases</label>
                                <select multiple  class="form-control" id="phases">
                                   <option value="tccWK2">TCC WK2</option>    
                                   <option value="tccWK1">TCC WK1</option> 
                                   <option value="supervisor">Supervisor</option>                                   
                                   <option value="pst6">PST 6</option>
                                   <option value="pst5">PST 5</option>
                                   <option value="pst4">PST 4</option>
                                   <option value="pst3">PST 3</option>
                                   <option value="pst2">PST 2</option>
                                   <option value="pst1">PST 1</option>
                                   <option value="project">Project</option>
                                   <option value="production">Production</option>
                                   <option value="pre-tcc">Pre-TCC</option>
                                   <option value="Pre-Prod-2">Pre Prod 2</option>
                                   <option value="Pre-Prod-1">Pre Prod 1</option>
                                   <option value="mtcc">MTCC</option>
                                   <option value="mentor">Mentor</option>
                                   <option value="ft">FT</option>
                                </select>
                            </div>
                        </div>
                    </div>                    
                </div>
                </div>                   
        </div>
        <div class="card">
            <div class="card-header">
                <h3 class="card-title text-center mb-0">T-MOBILE VERTIS NORTH CONSOLIDATED ATTENDANCE</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div id="container">
                                    <canvas id="daily_Attendance"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
            <div class="col-6">
                <div class="card">                    
                    <div class="card-body">
                        <div id="container">
                            <canvas id="day_Of_Week"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card">                    
                    <div class="card-body">
                        <div id="container">
                            <canvas id="week_Of_Week"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            </div>
        </div>
        
      

    </div>



    
    <script src="../dependencies/jquery/jquery-3.5.1.js"></script>
    <script src="../dependencies/popper/popper.min.js"></script>
    <script src="../dependencies/bootstrap-4.5.0/dist/js/bootstrap.min.js"></script>
    <!-- chart js -->
    <script src="../dependencies/chartjs/Chart.min.js"></script>
    <script src="../dependencies/chartjs/utils.js"></script>
    <script src="chartjs/chart.js"></script>
</body>
</html>