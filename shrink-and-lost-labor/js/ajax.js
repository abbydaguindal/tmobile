function format ( d ) {
    // `d` is the original data object for the row
    return '<div class="pb-3 pt-1"><table class="table table-sm table-bordered" style="width:100%;margin-left:1px">'+
        '<thead>'+
            '<tr>'+    
                '<th>SR MANAGER V2</th>'+
                '<th>TEX Manager V2</th>'+
                '<th>SUP V2</th>'+
                '<th>Name</th>'+
                '<th>Emp ID</th>'+
                '<th>Scheduled Headcount</th>'+
                '<th>Total Infraction</th>'+
                '<th>Miss Shift</th>'+
                '<th>Late Arrival</th>'+
                '<th>Missing Intra-Shift</th>'+
                '<th>Early Departure</th>'+
                '<th>Total Aux</th>'+
                '<th>Default</th>'+
                '<th>Stread</th>'+
                '<th>Training</th>'+
                '<th>Project</th>'+
                '<th>System Aux</th>'+
                '<th>Aux 8</th>'+
                '<th>TPUSA Meeting</th>'+
                '<th>Missed Shift (Hours)</th>'+
                '<th>Late Arrival (Hours)</th>'+
                '<th>Missing Intra-Shift (Hours)</th>'+
                '<th>Early Dep (Hours)</th>'+
            '</tr>'+
        '</thead>'+
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
            '<td>Hibo, Loreto P</td>'+
            '<td>Alusitian, Idol R</td>'+
            '<td>Josef, Rodel D</td>'+
            '<td>Betis, Irene V</td>'+
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
    var table = $('#levelTable').DataTable( {
        "ajax": "../file/teamLevel.txt",
        "columns": [
            {
                "className":      'details-control',
                "orderable":      false,
                "data":           null,
                "defaultContent": ''
            },
            { "data": "SR_MANAGER_V2" },
            { "data": "TEX_Manager_V2" },
            { "data": "SUP_V2" },
            { "data": "Name" },
            { "data": "Emp_ID" },
            { "data": "Scheduled_Headcount" },
            { "data": "Total_Infraction" },
            { "data": "Miss_Shift" },
            { "data": "Late_Arrival" },
            { "data": "Missing_Intra_Shift" },
            { "data": "Early_Departure" },
            { "data": "Total_Aux" },
            { "data": "Default" },
            { "data": "Stread" },
            { "data": "Coaching" },
            { "data": "Training" },
            { "data": "training" },
            { "data": "Break" },
            { "data": "Project" },
            { "data": "System_Aux" },
            { "data": "Aux_8" },
            { "data": "TPUSA_Meeting" },
            { "data": "Missed_Shift" },
            { "data": "Late_Arrival" },
            { "data": "Missing_Intra_Shift" },
            { "data": "Early_Dep" }
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
        "scrollX": "350px"
    } );
     
    // Add event listener for opening and closing details
    $('#levelTable tbody').on('click', 'td.details-control', function () {
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