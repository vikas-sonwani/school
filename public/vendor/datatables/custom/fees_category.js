$(function() {
    var sourceurl = 'fees_category/';
    var dTable = $('#fees_category').DataTable({
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
            url: sourceurl,

        },
        columns: [{
                render: function(data, type, row, meta) {
                    return meta.row + meta.settings._iDisplayStart + 1;
                }
            },
            {
                data: 'level',
                name: 'level'
            },
            {
                data: 'fees_category',
                name: 'fees_category'
            },
            {
                data: 'amount',
                name: 'amount'
            },{
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

});