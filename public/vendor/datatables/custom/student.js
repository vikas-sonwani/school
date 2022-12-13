$(function() {

    var dTable = $('#student').DataTable({
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
            url: '/student',
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
                data: 'full_name',
                name: 'full_name'
            },
            {
                data:'father_name',
                name:'father_name'
            },
            {
                data:'roll_no',
                name:'roll_no'
            },{
                data:'course',
                name:'course'
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