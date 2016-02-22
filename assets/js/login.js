/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function login_enter(e) {
    if (e.keyCode == 13) {
        $('#alert-user').hide();
        login();
    }
}

function login() {
    $('#alert-user').hide();
    var check = false;

    if (jQuery("#checkbox").is(":checked")) {
        check = true;
    }

    jQuery.ajax({
        url: "http://localhost/Cantinho-do-Ceu/index.php/login/check_login",
        type: "post",
        dataType: 'json',
        data: {
            username: jQuery("#username").val(),
            password: jQuery("#password").val(),
            checkbox: check
        },
        success: function(response) {
            if (response.status == "OK") {
                window.location = 'http://localhost/Cantinho-do-Ceu/index.php/home/homepage';
            } else {
                $('#alert-user').fadeIn("slow");
                return false;
            }
        }
    });
}