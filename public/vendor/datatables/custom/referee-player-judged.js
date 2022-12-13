$(function() {

    var dTable = $('#batch').DataTable({
        order: [],
        lengthMenu: [
            [25, 50, 100, 250, 500, -1],
            [25, 50, 100, 250, 500, "All"]
        ],
        processing: true,
        responsive: true,
        serverSide: true,
        pagingType: "full_numbers",
        dom: "<'row'<'col-sm-2'l><'col-sm-7 text-center'B><'col-sm-3'f>>tipr",
        ajax: {
            url: referee.routes.index,

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
                data:'activity',
                name:'activity'
            },{
                data:'age_group',
                name:'age_group'
            },{
                data:'round',
                name:'round'
            },{
                data:'status',
                name:'status'
            },{
                data:'my_judge',
                name:'my_judge'
            },{
                data:'action',
                name:'action'
            }

        ],
        buttons: [
        ]
    });


});