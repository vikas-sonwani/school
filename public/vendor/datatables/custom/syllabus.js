$(function() {

    var dTable = $('#syllabus').DataTable({
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
            url: '/admin/syllabus',

        },
        columns: [{
                render: function(data, type, row, meta) {
                    return meta.row + meta.settings._iDisplayStart + 1;
                }
            },
            {
                data: 'round_id',
                name: 'round_id'
            },
            {
                data:'activity_id',
                name:'activity_id'
            },
            {
                data:'age_group_id',
                name:'age_group_id'
            },
            {
                data:'syllabus',
                name:'syllabus'
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

    console.log(dTable)

});