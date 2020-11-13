<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset= "UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.8">
    <title> OCT Dashboard </title>
    
    <link rel="stylesheet" href="../dependencies/bootstrap-4.5.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../dependencies/bootstrap-4.5.0/css/bootstrap-select.css">

    <link rel="stylesheet" href="../dependencies/fontawesome/css/font-awesome.min.css">

    <link rel="stylesheet" href="../dependencies/DataTables/css/datatables.min.css">
            <link rel="stylesheet" href="../dependencies/DataTables/css/datatables.css">
    <style>
        td{
        font-size: 11px;
        }
        th{
            font-size: 11px;
            background-color: rgb(226,0,116);
        }
      
        .primary_table {background-color: rgb(226,0,116); color:white}
            .primary_table_footer {background-color: rgb(221,235,247);}
    </style>
</head>

<body>

                              
                                    <!--category-->
                                
                            

                                    <!--table-->
                                    <div class="container-fluid">
                                        <div class="wrap mb-3">
                                            <table id="combinedTable" class="table-sm table-bordered display" style="width:100%">                                           
                                                <tr>
                                                        <td class="primary_table text-center"  rowspan="2">COMBINED</td>
                                                        <td class="primary_table text-center" >FORECASTED</td>
                                                        <td class="primary_table text-center" >OFFERED</td>
                                                        <td class="primary_table text-center" >HANDLLED</td>
                                                        <td class="primary_table text-center" >ABANDONED</td>
                                                        <td class="primary_table text-center" >PTF</td>
                                                        <td class="primary_table text-center" >HTF</td>
                                                        <td class="primary_table text-center" >ANSWER RATE</td>
                                                        <td class="primary_table text-center" >ABN RATE</td>
                                                        <td class="primary_table text-center" >CRT</td>
                                                        <td class="primary_table text-center" >TALK</td>
                                                        <td class="primary_table text-center" >HOLD</td>
                                                        <td class="primary_table text-center" >TOTAL ACW</td>
                                                        <td class="primary_table text-center" >OUTBOUND</td>
                                                        <td class="primary_table text-center" >OB%</td>
                                                        <td class="primary_table text-center" >OCCUPANCY</td>
                                                        <td class="primary_table text-center" >ASA</td>
                                                        <td class="primary_table text-center" >AUX%</td>                                                   
                                                </tr>
                                                <tr>                    
                                                    <td>3051</td>
                                                    <td>2346</td>
                                                    <td>2341</td>
                                                    <td>5</td>
                                                    <td>76.90%</td>
                                                    <td>76.73%</td>
                                                    <td>99.79%</td>
                                                    <td>0.21%</td>
                                                    <td>878</td>
                                                    <td>698</td>
                                                    <td>59</td>
                                                    <td>108</td>
                                                    <td>14</td>
                                                    <td>22.68%</td>
                                                    <td>84.44%</td>
                                                    <td>3</td>
                                                    <td>30.72</td>
                                                </tr>
                                            </table>
                                        </div>

                                        <div class="wrap">
                                            <table id="combinedTable" class="table-sm table-bordered display" style="width:100%">                                           
                                                <tr>
                                                        <td class="primary_table text-center"  rowspan="2">VERTIS</td>
                                                        <td class="primary_table text-center" >FORECASTED</td>
                                                        <td class="primary_table text-center" >OFFERED</td>
                                                        <td class="primary_table text-center" >HANDLLED</td>
                                                        <td class="primary_table text-center" >ABANDONED</td>
                                                        <td class="primary_table text-center" >PTF</td>
                                                        <td class="primary_table text-center" >HTF</td>
                                                        <td class="primary_table text-center" >ANSWER RATE</td>
                                                        <td class="primary_table text-center" >ABN RATE</td>
                                                        <td class="primary_table text-center" >CRT</td>
                                                        <td class="primary_table text-center" >TALK</td>
                                                        <td class="primary_table text-center" >HOLD</td>
                                                        <td class="primary_table text-center" >TOTAL ACW</td>
                                                        <td class="primary_table text-center" >OUTBOUND</td>
                                                        <td class="primary_table text-center" >OB%</td>
                                                        <td class="primary_table text-center" >OCCUPANCY</td>
                                                        <td class="primary_table text-center" >ASA</td>
                                                        <td class="primary_table text-center" >AUX%</td>                                                   
                                                </tr>

                                                <tr>                    
                                                    <td>3051</td>
                                                    <td>2346</td>
                                                    <td>2341</td>
                                                    <td>5</td>
                                                    <td>76.90%</td>
                                                    <td>76.73%</td>
                                                    <td>99.79%</td>
                                                    <td>0.21%</td>
                                                    <td>878</td>
                                                    <td>698</td>
                                                    <td>59</td>
                                                    <td>108</td>
                                                    <td>14</td>
                                                    <td>22.68%</td>
                                                    <td>84.44%</td>
                                                    <td>3</td>
                                                    <td>30.72</td>
                                                </tr>

                                                <tr>                    
                                                    <td>WAHA</td>
                                                    <td>3051</td>
                                                    <td>2346</td>
                                                    <td>2341</td>
                                                    <td>5</td>
                                                    <td>76.90%</td>
                                                    <td>76.73%</td>
                                                    <td>99.79%</td>
                                                    <td>0.21%</td>
                                                    <td>878</td>
                                                    <td>698</td>
                                                    <td>59</td>
                                                    <td>108</td>
                                                    <td>14</td>
                                                    <td>22.68%</td>
                                                    <td>84.44%</td>
                                                    <td>3</td>
                                                    <td>30.72</td>
                                                </tr>
                                                
                                                <tr>                    
                                                    <td>ON-SITE</td>
                                                    <td>3051</td>
                                                    <td>2346</td>
                                                    <td>2341</td>
                                                    <td>5</td>
                                                    <td>76.90%</td>
                                                    <td>76.73%</td>
                                                    <td>99.79%</td>
                                                    <td>0.21%</td>
                                                    <td>878</td>
                                                    <td>698</td>
                                                    <td>59</td>
                                                    <td>108</td>
                                                    <td>14</td>
                                                    <td>22.68%</td>
                                                    <td>84.44%</td>
                                                    <td>3</td>
                                                    <td>30.72</td>
                                                </tr>

                                            </table>
                                        </div> 
                                        <br>
                                        <div class="wrap">
                                            <table id="combinedTable" class="table-sm table-bordered display" style="width:100%">                                           
                                                <tr>
                                                        <td class="primary_table text-center"  rowspan="2">CDO</td>
                                                        <td class="primary_table text-center" >FORECASTED</td>
                                                        <td class="primary_table text-center" >OFFERED</td>
                                                        <td class="primary_table text-center" >HANDLLED</td>
                                                        <td class="primary_table text-center" >ABANDONED</td>
                                                        <td class="primary_table text-center" >PTF</td>
                                                        <td class="primary_table text-center" >HTF</td>
                                                        <td class="primary_table text-center" >ANSWER RATE</td>
                                                        <td class="primary_table text-center" >ABN RATE</td>
                                                        <td class="primary_table text-center" >CRT</td>
                                                        <td class="primary_table text-center" >TALK</td>
                                                        <td class="primary_table text-center" >HOLD</td>
                                                        <td class="primary_table text-center" >TOTAL ACW</td>
                                                        <td class="primary_table text-center" >OUTBOUND</td>
                                                        <td class="primary_table text-center" >OB%</td>
                                                        <td class="primary_table text-center" >OCCUPANCY</td>
                                                        <td class="primary_table text-center" >ASA</td>
                                                        <td class="primary_table text-center" >AUX%</td>                                                   
                                                </tr>

                                                <tr>                    
                                                    <td>3051</td>
                                                    <td>2346</td>
                                                    <td>2341</td>
                                                    <td>5</td>
                                                    <td>76.90%</td>
                                                    <td>76.73%</td>
                                                    <td>99.79%</td>
                                                    <td>0.21%</td>
                                                    <td>878</td>
                                                    <td>698</td>
                                                    <td>59</td>
                                                    <td>108</td>
                                                    <td>14</td>
                                                    <td>22.68%</td>
                                                    <td>84.44%</td>
                                                    <td>3</td>
                                                    <td>30.72</td>
                                                </tr>

                                                <tr>                    
                                                    <td>WAHA</td>
                                                    <td>3051</td>
                                                    <td>2346</td>
                                                    <td>2341</td>
                                                    <td>5</td>
                                                    <td>76.90%</td>
                                                    <td>76.73%</td>
                                                    <td>99.79%</td>
                                                    <td>0.21%</td>
                                                    <td>878</td>
                                                    <td>698</td>
                                                    <td>59</td>
                                                    <td>108</td>
                                                    <td>14</td>
                                                    <td>22.68%</td>
                                                    <td>84.44%</td>
                                                    <td>3</td>
                                                    <td>30.72</td>
                                                </tr>
                                                
                                                <tr>                    
                                                    <td>ON-SITE</td>
                                                    <td>3051</td>
                                                    <td>2346</td>
                                                    <td>2341</td>
                                                    <td>5</td>
                                                    <td>76.90%</td>
                                                    <td>76.73%</td>
                                                    <td>99.79%</td>
                                                    <td>0.21%</td>
                                                    <td>878</td>
                                                    <td>698</td>
                                                    <td>59</td>
                                                    <td>108</td>
                                                    <td>14</td>
                                                    <td>22.68%</td>
                                                    <td>84.44%</td>
                                                    <td>3</td>
                                                    <td>30.72</td>
                                                </tr>

                                            </table>
                                        </div>   
                                        <br>
                                        <div class ="select">
                                                    <select class="text-sm">
                                                        <option>CDO</option>
                                                        <option>Combined</option>
                                                        <option>Vertis</option>
                                                        <option>CDO</option>
                                                    </select> 
                                        </div>                                
                                     
                              
                                    
                                        <table id="hoursTable" class="table table-sm table-striped display nowrap" >
                                                <thead class="text-light">
                                                    <tr>
                                                            <th>MNL INTERVAL</th>
                                                            <th>FORECASTED</th>
                                                            <th>OFFERED</th>
                                                            <th>HANDLLED</th>
                                                            <th>ABANDONED</th>
                                                            <th>PTF</th>
                                                            <th>HTF</th>
                                                            <th>ANSWER RATE</th>
                                                            <th>ABN RATE</th>
                                                            <th>CRT</th>
                                                            <th>TALK</th>
                                                            <th>HOLD</th>
                                                            <th>TOTAL ACW</th>
                                                            <th>OUTBOUND</th>
                                                            <th>OB%</th>
                                                            <th>OCCUPANCY</th>
                                                            <th>ASA</th>
                                                            <th>AUX%</th>
                                                            
                                                    </tr>
                                                </thead>
                                                <tbody class="TableBody">
                                                    <tr>
                                                        <td style="background-color: #BABABA;" class="font-weight-bold">19:00</td>
                                                        <td>61</td>
                                                        <td>73</td>
                                                        <td>73</td>
                                                        <td>0</td>
                                                        <td>120.03%</td>
                                                        <td>120.03%</td>
                                                        <td>100.00%</td>
                                                        <td>0.00%</td>
                                                        <td>925</td>
                                                        <td>816</td>
                                                        <td>30</td>
                                                        <td>69</td>
                                                        <td>11</td>
                                                        <td>6.85%</td>
                                                        <td>68.52%</td>
                                                        <td>--</td>
                                                        <td>34.44%</td>
                                                        
                                                    </tr>
                                                    <tr>
                                                        <td style="background-color: #BABABA;" class="font-weight-bold">19:00</td>
                                                        <td>61</td>
                                                        <td>73</td>
                                                        <td>73</td>
                                                        <td>0</td>
                                                        <td>120.03%</td>
                                                        <td>120.03%</td>
                                                        <td>100.00%</td>
                                                        <td>0.00%</td>
                                                        <td>925</td>
                                                        <td>816</td>
                                                        <td>30</td>
                                                        <td>69</td>
                                                        <td>11</td>
                                                        <td>6.85%</td>
                                                        <td>68.52%</td>
                                                        <td>--</td>
                                                        <td>34.44%</td>
                                                        
                                                    </tr>
                                                    <tr>
                                                        <td style="background-color: #BABABA;" class="font-weight-bold">19:00</td>
                                                        <td>61</td>
                                                        <td>73</td>
                                                        <td>73</td>
                                                        <td>0</td>
                                                        <td>120.03%</td>
                                                        <td>120.03%</td>
                                                        <td>100.00%</td>
                                                        <td>0.00%</td>
                                                        <td>925</td>
                                                        <td>816</td>
                                                        <td>30</td>
                                                        <td>69</td>
                                                        <td>11</td>
                                                        <td>6.85%</td>
                                                        <td>68.52%</td>
                                                        <td>--</td>
                                                        <td>34.44%</td>
                                                        
                                                    </tr>
                                                    <tr>
                                                        <td style="background-color: #BABABA;" class="font-weight-bold">19:00</td>
                                                        <td>61</td>
                                                        <td>73</td>
                                                        <td>73</td>
                                                        <td>0</td>
                                                        <td>120.03%</td>
                                                        <td>120.03%</td>
                                                        <td>100.00%</td>
                                                        <td>0.00%</td>
                                                        <td>925</td>
                                                        <td>816</td>
                                                        <td>30</td>
                                                        <td>69</td>
                                                        <td>11</td>
                                                        <td>6.85%</td>
                                                        <td>68.52%</td>
                                                        <td>--</td>
                                                        <td>34.44%</td>
                                                        
                                                    </tr>
                                                </tbody>
                                                <tfoot class="text-light">
                                                    <tr>
                                                    
                                                        <th>Grand Total</th>
                                                        <th>14500</th>
                                                        <th>21.3%</th>
                                                        <th>9.0%</th>
                                                        <th>2.0%</th>
                                                        <th>6.6%</th>
                                                        <th>3.7%</th>
                                                        <th>19.4%</th>
                                                        <th>3.6%</th>
                                                        <th>2.2%</th>
                                                        <th>3.1%</th>
                                                        <th>2.9%</th>
                                                        <th>4.2%</th>
                                                        <th>5.4%</th>
                                                        <th>0.4%</th>
                                                        <th>1.3%</th>
                                                        <th>0.0%</th>
                                                        <th>0.0%</th>
                                                    </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                   
                                </div>
                            </div>

  
    
    <script src="../dependencies/jquery/jquery-3.5.1.js"></script>
    <script src="../dependencies/popper/popper.min.js"></script>
    <script src="../dependencies/bootstrap-4.5.0/dist/js/bootstrap.min.js"></script>
    <script src="../dependencies/DataTables/js/datatables.min.js"></script>
    <script src="dataTable/dataTable.js" ></script>
</body>
</html>