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
            if (response.status === "OK") {
                switch (response.type){
                    case 'administrador(a)':
                        window.location = 'http://localhost/Cantinho-do-Ceu/index.php/home/administrator';
                        break;
                    case 'médico(a)':
                        window.location = 'http://localhost/Cantinho-do-Ceu/index.php/home/administrator';
                        break;
                    case 'enfermeiro(a)':
                        window.location = 'http://localhost/Cantinho-do-Ceu/index.php/home/administrator';
                        break;
                    case 'farmacêutico(a)':
                        window.location = 'http://localhost/Cantinho-do-Ceu/index.php/home/farmaceutico';
                        break;
                    case 'fisioterapeuta':
                        window.location = 'http://localhost/Cantinho-do-Ceu/index.php/home/administrator';
                        break;
                    case 'recursos humanos':
                        window.location = 'http://localhost/Cantinho-do-Ceu/index.php/home/rh';
                        break;
                    case 'serviço social':
                        window.location = 'http://localhost/Cantinho-do-Ceu/index.php/home/servico_social';
                        break;
                    default:
                        $('#alert-user2').fadeIn("slow");
                        return false;
                }
            } else {
                $('#alert-user').fadeIn("slow");
                return false;
            }
        }
    });
}