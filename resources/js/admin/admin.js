$(document).ready(function() {
    $(document).on('click', '.logout', function(e){
        e.preventDefault();
        $('#logout-form').submit();
    });
});

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$('#form-profile').on('submit', function(e) {
    e.preventDefault();
    $.ajax({
        dataType: 'JSON',
        method: 'post',
        cache: false,
        contentType: false,
        processData: false,
        data: new FormData(this),
        url: route('editprofile'),
        success: function(response){
            toastr.info(response.success);
            location.reload();
        }
    })
})

$('#changePassword').on('submit', function(e){
    e.preventDefault();
    $.ajax({
        dataType: 'JSON',
        method: 'post',
        cache: false,
        contentType: false,
        processData: false,
        data: new FormData(this),
        url: route('changePassword'),
        success: function(response){
            if (response.error == true) {
                toastr.error(response.success);
            } else {
                toastr.success(response.success);
                $('#changePassword').reset();
            }
        },
        error:function(jqXHR, textStatus, errorThrown){
            if (jqXHR.responseJSON.errors.pass !== undefined){
                toastr.error(jqXHR.responseJSON.errors.pass[0]);
            }
            if (jqXHR.responseJSON.errors.repass !== undefined){
                toastr.error(jqXHR.responseJSON.errors.repass[0]);
            }
            if (jqXHR.responseJSON.errors.confirmpass !== undefined){
                toastr.error(jqXHR.responseJSON.errors.confirmpass[0]);
            }
        }
    })
})
