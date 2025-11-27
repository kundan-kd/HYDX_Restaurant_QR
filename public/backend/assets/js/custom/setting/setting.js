
$('#hotlr_setting_form').on('submit', function(e) {
    e.preventDefault();
    
    let name = $('#setting_hotlr_name').val();
    let gst = $('#setting_hotlr_gst').val();
    
    if (name == '' || gst == '') {
        $('needs-validation').addClass('was-validated');
    } else {
        let logo = $('#hotlr-upload-logo').prop('files')[0];

        var formData = new FormData(this);
        formData.append('name', $('#setting_hotlr_name').val());
        formData.append('email', $('#setting_hotlr_email').val());
        formData.append('contact', $('#setting_hotlr_contact').val());
        formData.append('address', $('#setting_hotlr_address').val());
        formData.append('state', $('#setting_hotlr_state').val());
        formData.append('city', $('#setting_hotlr_city').val());
        formData.append('zipcode', $('#setting_hotlr_zipcode').val());
        formData.append('country', $('#setting_hotlr_country').val());
        formData.append('gst', $('#setting_hotlr_gst').val());
        formData.append('website', $('#setting_hotlr_website').val());
        formData.append('logo', logo);

        $.ajax({
            url: settingAdd, // PHP script to handle the upload
            type: 'POST',
            data: formData,
            contentType: false, // Important: Don't set content type
            processData: false, // Important: Don't process the data
            success: function(response) {
                toastSuccessAlert(response.success);
            },
            error: function(xhr, status, error) {
                console.error(xhr.responseText);
                alert("An error occurred: " + error);
            }
        });
    }
});

$('#hotlr_einvoice_form').on('submit', function(e) {
    e.preventDefault();
    
    let einvoice_url = $('#hotlr_einvoice_url').val();
    let einvoice_email = $('#hotlr_einvoice_email').val();
    let einvoice_username = $('#hotlr_einvoice_username').val();
    let einvoice_password = $('#hotlr_einvoice_password').val();
    let einvoice_ipaddress = $('#hotlr_einvoice_ipaddress').val();
    let einvoice_clientid = $('#hotlr_einvoice_clientid').val();
    let einvoice_clientsecret = $('#hotlr_einvoice_clientsecret').val();
    let einvoice_gst = $('#hotlr_einvoice_gst').val();

    if (einvoice_url == '' || einvoice_email == '' || einvoice_username == '' || einvoice_password == '' || einvoice_ipaddress == '' || einvoice_clientid == '' || einvoice_clientsecret == '' || einvoice_gst == '') {
        $('needs-validation').addClass('was-validated');
    } else {
        if ($('.tariffUpdate').is(':visible')) {
        tariffUpdate(id); // Trigger update function when update btn is active
        } else {
            $.ajax({
                url: settingAddEinvoice,
                type: "POST",
                data: {einvoice_url:einvoice_url,einvoice_email:einvoice_email,einvoice_username:einvoice_username,einvoice_password:einvoice_password,einvoice_ipaddress:einvoice_ipaddress,einvoice_clientid:einvoice_clientid,einvoice_clientsecret:einvoice_clientsecret,einvoice_gst:einvoice_gst},
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    toastSuccessAlert(response.success);
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                    alert("An error occurred: " + error);
                }
            });
        }
    }
});