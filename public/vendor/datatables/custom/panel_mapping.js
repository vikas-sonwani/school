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
            url: '/admin/get-panel-candidate',
            data:function(data){
                var age_group = $('#age_group').val();
                var round = $('#round').val();
                var activity = $('#activity').val();
                data.age_group = age_group;
                data.round = round;
                data.activity = activity;
            }
        },
        columns: [{
                render: function(data, type, row, meta) {
                    last_serial = meta.row + meta.settings._iDisplayStart + 1
                    let index = added.indexOf(row.id);
                    let check = '';
                    if(index>-1){
                        check = 'checked';
                    }
                    let str = '<span class="feepay"><input type="checkbox" '+check+' value="'+row.id+'" name="selected'+row.id+'" class="selected" id="selected'+(meta.row + meta.settings._iDisplayStart + 1)+'" onchange="addApplicant('+(meta.row + meta.settings._iDisplayStart + 1)+')" /></span>&nbsp;&nbsp;'+(meta.row + meta.settings._iDisplayStart + 1);
                    return str;
                    //return meta.row + meta.settings._iDisplayStart + 1;
                }
            },
            {
                data: 'name',
                name: 'name'
            },{
                data: 'registration_no',
                name: 'registration_no'
            },{
                data: 'age',
                name: 'age'
            },
           

        ],
        buttons: [
        ]
    });

    console.log(dTable)

});