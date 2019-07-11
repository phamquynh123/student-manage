$(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('#user-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: $('#user-table').attr('data-url'),
        columns: [
            { data: 'id', name: 'id' },
            { data: 'name', name: 'name' },
            { data: 'email', name: 'email' },
            { data: 'avatar', name: 'avatar' },
            { data: 'status', name: 'status' },
            { data: 'created_at', name: 'created_at' },
            { data: 'action', name: 'action' },
        ],
    });
});

$('.submit-add').on('click', function(e) {
    e.preventDefault();
    var formData1 = new FormData();
    formData1.append('name', $('#add-name').val());
    formData1.append('email', $('#add-email').val());
    $.ajax({
        type: 'post', 
        url: $('#addUser').attr('data-url'),
        processData: false,
        contentType: false,
        data:formData1,
        dataType: 'JSON', 
        success: function (response) {
            $('#user-table').DataTable().ajax.reload(null, false);
            $('#addNewUser').modal('hide');
            if (response.error == true) {
                toastr.error(response.success);
            } else {
                toastr.success(response.success);
            }
        },  
        error:function(jqXHR, textStatus, errorThrown){
            if (jqXHR.responseJSON.errors.name !== undefined){
                toastr.error(jqXHR.responseJSON.errors.name[0]);
            }
            if (jqXHR.responseJSON.errors.email !== undefined){
                toastr.error(jqXHR.responseJSON.errors.email[0]);
            }
        }
    })
})

$(document).on('click', '.switch-indicator', function(e){
    var formData = new FormData();
    formData.append('id', $(this).attr('user-id'));
    formData.append('status', $(this).attr('data-status'))
    $.ajax({
        type: 'post', 
        url: $('#user-table').attr('data-status'),
        processData: false,
        contentType: false,
        data:formData,
        dataType: 'JSON', 
        success: function (response) {
            $('#user-table').DataTable().ajax.reload(null, false);
            if (response.error == true) {
                toastr.error(response.success);
            } else {
                toastr.success(response.success);
            }
        },  
        error:function(jqXHR, textStatus, errorThrown){
           
        }
    })
})
