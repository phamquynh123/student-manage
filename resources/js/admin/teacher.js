$(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('#teacher-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: $('#teacher-table').data('id'),
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
$('.submit-add-teacher').on('click', function(e) {
    e.preventDefault();
    var formData1 = new FormData();
    formData1.append('name', $('#add-name').val());
    formData1.append('email', $('#add-email').val());
    $.ajax({
        type: 'post', 
        url: $('#addTeacher').data('url'),
        processData: false,
        contentType: false,
        data:formData1,
        dataType: 'JSON', 
        success: function (response) {
            toastr.success(response.success);
            $('#teacher-table').DataTable().ajax.reload(null, false);
            $('#addNewTeacher').modal('hide');
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
        url: $('#teacher-table').attr('data-status'),
        processData: false,
        contentType: false,
        data:formData,
        dataType: 'JSON', 
        success: function (response) {
            $('#teacher-table').DataTable().ajax.reload(null, false);
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
