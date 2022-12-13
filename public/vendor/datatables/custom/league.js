$(function() {

    var sourceurl = '/admin/league';
    var dTable = $('#event').DataTable({
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
                data: 'league_name',
                name: 'league_name'
            },
            {
                data: 'league_description',
                name: 'league_description'
            },
            {
                data: 'start_date',
                name: 'start_date'
            },
            {
                data: 'end_date',
                name: 'end_date'
            },{
                data:'status',
                name:'status'
            },{
                data:'action',
                name:'action'
            }

        ],
        buttons: [{
                extend: "excel",
                className: "btn-sm btn-success",
                titleAttr: 'Export as Excel',
                text: 'Excel',
                init: function(api, node, config) {
                    $(node).removeClass('btn-light')
                }
            },
            {
                extend: "pdf",
                className: "btn-sm btn-danger",
                titleAttr: 'Export as PDF',
                text: 'PDF',
                init: function(api, node, config) {
                    $(node).removeClass('btn-light')
                }
            }
        ]
    });

});