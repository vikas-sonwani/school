$(function() {

    var sourceurl = '/admin/candidate/my-league';
    var dTable = $('#candidate-event').DataTable({
        order: [],
        lengthMenu: [
            [25, 50, -1],
            [25, 50, "All"]
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
                data: 'round',
                name: 'round'
            },{
                data:'activity',
                name:'activity'
            },{
                data:'age_group',
                name:'age_group'
            },{
                data:'round_status',
                name:'round_status'
            },{
                data:'action',
                name:'action'
            }

        ],
        buttons: [
        ]
    });

});