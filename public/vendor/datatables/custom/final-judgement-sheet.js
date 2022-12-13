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
            url: '/admin/jugdement-sheet',
             data:function(data){
                var activity = $('#activity').val();
                var round = $('#round').val();
                var age_group = $('#age_group').val();
                data.activity_id = activity;
                data.round_id = round;
                data.age_group_id = age_group;
            }
        },
        columns: [{
                render: function(data, type, row, meta) {
                    return meta.row + meta.settings._iDisplayStart + 1;
                }
            },
            {
                data: 'registration_no',
                name: 'registration_no'
            },
            {
                data:'name',
                name:'name'
            },
            {
                data:'district',
                name:'district'
            },
            {
                data:'state_name',
                name:'state_name'
            },
            {
                data:'country',
                name:'country'
            },
            {
                data:'judge_one',
                name:'judge_one'
            },{
                data:'judge_two',
                name:'judge_two'
            },{
                data:'judge_three',
                name:'judge_three'
            },{
                data:'judge_four',
                name:'judge_four'
            },
            {
                data:'total_marks',
                name:'total_marks'
            },
            {
                data:'avg_marks',
                name:'avg_marks'
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
    $("#batch-filter").submit(function(e){
        console.log('hello')
        e.preventDefault()
        dTable.draw();
    });

});