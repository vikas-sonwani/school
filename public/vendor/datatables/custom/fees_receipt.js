$(function() {

    var dTable = $('#fees_receipt').DataTable({
        order: [],
        lengthMenu: [
            [25, 50, 100, -1],
            [25, 50, 100, "All"]
        ],
        processing: true,
        responsive: true,
        serverSide: true,
        pagingType: "full_numbers",
        dom: "<'row'<'col-sm-2'l><'col-sm-7 text-center'B><'col-sm-3'f>>tipr",
        ajax: {
            url: '/fees_receipt',
            data:function(data){
                var status = $('#status').val();
                data.status = status;
            }
        },
        columns: [{
                render: function(data, type, row, meta) {
                    return meta.row + meta.settings._iDisplayStart + 1;
                }
            },
            {
                data: 'student',
                name: 'student'
            },
            {
                data:'course',
                name:'course'
            },
            {
                data:'duration',
                name:'duration'
            },{
                data:'total_fees',
                name:'total_fees'
            },{
                data:'submitted_fees',
                name:'submitted_fees'
            },{
                data:'pending_fees',
                name:'pending_fees'
            },
            {
                data:'status',
                name:'status'
            },{
                data:'action',
                name:'action'
            }

        ],
        buttons: [
        ]
    });

    $("#course-filter").submit(function(e){
        e.preventDefault()
        dTable.draw();
    });

});