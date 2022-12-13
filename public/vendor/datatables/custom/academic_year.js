$(function() {
    var sourceurl = 'academic_year';
    var dTable = $('#academic_year').DataTable({
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
            url: 'academic_year/',

        },
        columns: [{
                render: function(data, type, row, meta) {
                    return meta.row + meta.settings._iDisplayStart + 1;
                }
            },
            {
                data: 'academic_code',
                name: 'academic_code'
            },
            {
                data: 'academic_desc',
                name: 'academic_desc'
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