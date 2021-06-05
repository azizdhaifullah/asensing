
$("#generate-fingerprint").click(function(){
    $.ajax({
        type: "POST",
        url: window.location.origin + "/employee/generate",
        data: {"employee_id": $("#employee-id").val()},
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        dataType: "json",
        beforeSend: function(){
            $('#loadingDiv').show();
        },
        success: function (res) {
            console.log(res);
            $('#loadingDiv').hide();
        }
    })
});
