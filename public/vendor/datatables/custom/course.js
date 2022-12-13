$(function() {

    var dTable = $('#course').DataTable({
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
            url: 'course/',
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
                data: 'name',
                name: 'name'
            },
            {
                data:'academic',
                name:'academic'
            },
            {
                data:'level',
                name:'level'
            },
            {
                data:'duration',
                name:'duration'
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