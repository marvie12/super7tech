let employeeDataTable;

$(document).ready(function () {
    $("#frm-signin").on("submit", function () {
        let data = $(this).serialize();

        $.ajax({
            type: "POST",
            url: "/login",
            data: data,
            success: function (res) {
                if (res.success) {
                    window.location.href = "/";
                } else {
                    Swal.fire(
                        'Login failed!',
                        'Please check your username or password.',
                        'error'
                    );
                }
            },
        });
        return false;
    });
    
    $('#btn-reg').on('click', function() {
        let data = $('#frm-register').serialize();

        $.ajax({
            type: "POST",
            url: "/employee/store",
            data: data,
            success: function(res) {
                if (res.success) {
                    window.location.href = "/";
                } else {
                    Swal.fire(
                        'Registration failed!',
                        '',
                        'error'
                    );
                }
            }
        });
        return false;
    });

    $('#btn-update').on('click', function() {
        let data = $('#frm-update').serialize();
        const id = $('input[name="_id"]').val();

        $.ajax({
            type: "PUT",
            url: "/employee/"+id,
            data: data,
            success: function(res) {
                if (res.success) {
                    window.location.href = "/";
                } else {
                    Swal.fire(
                        'Update failed!',
                        '',
                        'error'
                    );
                }
            }
        });
        return false;
    });
    
    $(document).on('click', '.btn-delete-emp', function() {

        var itemId = $(this).data('id');
        
        // Show SweetAlert confirmation dialog
        Swal.fire({
           title: 'Are you sure?',
           text: '',
           icon: 'warning',
           showCancelButton: true,
           confirmButtonColor: '#3085d6',
           cancelButtonColor: '#d33',
           confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
           if (result.isConfirmed) {        
              $.ajax({
                 type: "DELETE",
                 url: "/employee/"+itemId,
                 data: {
                    _token: _token,
                 },
                 success: function(res) {
                    console.log(res);
                    employeeDataTable.ajax.reload();
                    //  if (res.success) {
                    //      window.location.href = "/";
                    //  } else {
                    //  }
                 }
              });
              
              // Show success message
              Swal.fire(
                 'Deleted!',
                 'Your item has been deleted.',
                 'success'
              );
           }
        });
     });
});
