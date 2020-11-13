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
    return '<table class="table table-sm table-bordered" style="width:100%;margin-left:1px">'+
        '<thead>'+
            '<tr>'+        
            '    <th>Manager</th>'+
            '    <th>Productivity</th>'+
            '    <th>Occupancy</th>'+
            '    <th>Aux Use</th>'+
            '    <th>Handled Calls</th>'+
            '    <th>OB Calls</th>'+
            '    <th>CRT</th>'+
            '    <th>Talk Time</th>'+
            '    <th>Total ACW</th>'+
            '    <th>ACW Idle</th>'+
            '    <th>Hold</th>'+
            '    <th>ACW Out</th>'+
            '    <th>Outbound</th>'+
            '    <th>OB %</th>'+
            '</tr>'+
        '</thead>'+
        '<tr>'+            
            '<td>10/1/2020</td>'+
            '<td>86.6%</td>'+
            '<td>97.5%</td>'+
            '<td>28.9%</td>'+
            '<td>9810</td>'+
            '<td>3297</td>'+
            '<td>964</td>'+
            '<td>702</td>'+
            '<td>136</td>'+
            '<td>45</td>'+
            '<td>99</td>'+
            '<td>91</td>'+
            '<td>26</td>'+
            '<td>33.6%</td>'+
        '</tr>'+
        '<tr>'+            
            '<td>10/2/2020</td>'+
            '<td>86.6%</td>'+
            '<td>97.5%</td>'+
            '<td>28.9%</td>'+
            '<td>9810</td>'+
            '<td>3297</td>'+
            '<td>964</td>'+
            '<td>702</td>'+
            '<td>136</td>'+
            '<td>45</td>'+
            '<td>99</td>'+
            '<td>91</td>'+
            '<td>26</td>'+
            '<td>33.6%</td>'+
        '</tr>'+
        '<tr>'+            
            '<td>10/3/2020</td>'+
            '<td>86.6%</td>'+
            '<td>97.5%</td>'+
            '<td>28.9%</td>'+
            '<td>9810</td>'+
            '<td>3297</td>'+
            '<td>964</td>'+
            '<td>702</td>'+
            '<td>136</td>'+
            '<td>45</td>'+
            '<td>99</td>'+
            '<td>91</td>'+
            '<td>26</td>'+
            '<td>33.6%</td>'+
        '</tr>'+
       
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
        "order": [[1, 'asc']],
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

