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
            url: route
        },
        columns: [{
                render: function (data, type, row, meta) {
                    return meta.row + meta.settings._iDisplayStart + 1;
                }
            },
            {
                data: 'name',
                name: 'name'
            },{
                data: 'registration_no',
                name: 'registration_no'
            },{
                data: 'round_status',
                name: 'round_status'
            },{
                data: 'total',
                name: 'total'
            },
           

        ],
        buttons: [
        ]
    });

    console.log(dTable)

});