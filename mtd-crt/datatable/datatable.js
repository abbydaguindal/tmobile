$('#tableOne').DataTable( {
    responsive: true,
    "searching": false,
    "ordering": true,
    "info":     false,  
    "bLengthChange": false ,
    "paging": false
  });
  
$('#tableTwo').DataTable( {
    responsive: true,
    "searching": false,
    "ordering": true,
    "info":     false,  
    "bLengthChange": false ,
    "paging": false
  });

$('#tableManagerLevel').DataTable( {
    responsive: true,
    "searching": false,
    "ordering": true,
    "info":     false,  
    "bLengthChange": false ,
    "paging": false
  });
  
 /* Formatting function for row details - modify as you need */
function format ( d ) {
    // `d` is the original data object for the row
    return '<table class="table table-sm table-condensed table-striped" style="width: 100%; margin-left:1px; table-layout:fixed;">'+
        // '<thead class="d-none">'+
        //     '<tr>'+  
        //     '<th class="text-center"  style="width:13%;">Sr. Manager Level</th>'+
        //     '<th class="text-center" >Productivity</th>'+
        //     '<th class="text-center" >Occupancy</th>'+
        //     '<th class="text-center" >Aux Use</th>'+
        //     '<th class="text-center" >Handled Calls</th>'+
        //     '<th class="text-center" >OB Calls</th>'+
        //     '<th class="text-center" >CRT</th>'+
        //     '<th class="text-center" >Talk Time</th>'+
        //     '<th class="text-center" >Total ACW</th>'+
        //     '<th class="text-center" >ACW Idle</th>'+
        //     '<th class="text-center" >Hold</th>'+
        //     '<th class="text-center" >ACW Out</th>'+
        //     '<th class="text-center" >Outbound</th>'+
        //     '<th class="text-center" >OB %</th>'+
        //     '</tr>'+
        // '</thead>'+
        '<tbody>'+
       
        '<tr>'+  
            '<td class="text-center" style="width:13%;">10/1/2020</td>'+
            '<td class="text-left">86.6%</td>'+
            '<td class="text-center">97.5%</td>'+
            '<td class="text-right">28.9%</td>'+
            '<td class="text-right">9810</td>'+
            '<td class="text-right">3297</td>'+
            '<td class="text-right">964</td>'+
            '<td class="text-center">702</td>'+
            '<td class="text-center">136</td>'+
            '<td class="text-center">45</td>'+
            '<td class="text-center">99</td>'+
            '<td class="text-center">91</td>'+
            '<td class="text-center">26</td>'+
            '<td class="text-center">33.6%</td>'+
        '</tr>'+      
             
        '<tr>'+  
            '<td class="text-center" style="width:13%;">10/1/2020</td>'+
            '<td class="text-left">86.6%</td>'+
            '<td class="text-center">97.5%</td>'+
            '<td class="text-right">28.9%</td>'+
            '<td class="text-right">9810</td>'+
            '<td class="text-right">3297</td>'+
            '<td class="text-right">964</td>'+
            '<td class="text-center">702</td>'+
            '<td class="text-center">136</td>'+
            '<td class="text-center">45</td>'+
            '<td class="text-center">99</td>'+
            '<td class="text-center">91</td>'+
            '<td class="text-center">26</td>'+
            '<td class="text-center">33.6%</td>'+
        '</tr>'+      
             
        '<tr>'+  
            '<td class="text-center" style="width:13%;">10/1/2020</td>'+
            '<td class="text-left">86.6%</td>'+
            '<td class="text-center">97.5%</td>'+
            '<td class="text-right">28.9%</td>'+
            '<td class="text-right">9810</td>'+
            '<td class="text-right">3297</td>'+
            '<td class="text-right">964</td>'+
            '<td class="text-center">702</td>'+
            '<td class="text-center">136</td>'+
            '<td class="text-center">45</td>'+
            '<td class="text-center">99</td>'+
            '<td class="text-center">91</td>'+
            '<td class="text-center">26</td>'+
            '<td class="text-center">33.6%</td>'+
        '</tr>'+      
             
        '</tbody>'+      
    '</table>';
}
 
$(document).ready(function() {
    var table = $('#example').DataTable( {
        "ajax": "ajax/data.txt",
        "columns": [
            {
                "className":      'details-control',
                "orderable":      false,
                "data":           null,
                "defaultContent": ''
            },
            { "data": "manager" },
            { "data": "productivity" },
            { "data": "occupancy" },
            { "data": "aux_use" },
            { "data": "handled_calls" },
            { "data": "ob_calls" },
            { "data": "crt" },
            { "data": "talk_time" },
            { "data": "total_acw" },
            { "data": "acw_idle" },
            { "data": "hold" },
            { "data": "acw_out" },
            { "data": "outbound" },
            { "data": "ob" }
        ],
        // "order": [[1, 'asc']],
         responsive: true,
        "searching": false,
        "ordering": true,
        "info":     false,  
        "bLengthChange": false ,
        "paging": false
    } );
     
    // Add event listener for opening and closing details
    $('#example tbody').on('click', 'td.details-control', function () {
        var tr = $(this).closest('tr');
        var row = table.row( tr );
 
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

