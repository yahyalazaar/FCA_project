$(document).ready(function () {
    $("#add_admin").click(function () {
        $.ajax({
            data: $("#add_user").serialize(),
            type: "post",
            url: "./Controlleurs/add_admin.php",
            success: function (data) {
                data = jQuery.parseJSON(data);
                if (data.error === 'false') {
                    $("#add_user")[0].reset();
                }
                $("#notif_").html(data.msg);
            }
        });
    });
    $("#add_frn").click(function () {
        $.ajax({
            data: $("#add_user").serialize(),
            type: "post",
            url: "./Controlleurs/add_frn.php",
            success: function (data) {
                data = jQuery.parseJSON(data);
                if (data.error === 'false') {
                    $("#add_user")[0].reset();
                }
                $("#notif_").html(data.msg);
            }
        });
    });
    $("#add_admin").click(function () {
        $.ajax({
            data: $("#add_user").serialize(),
            type: "post",
            url: "./Controlleurs/add_admin.php",
            success: function (data) {
                data = jQuery.parseJSON(data);
                if (data.error === 'false') {
                    $("#add_user")[0].reset();
                }
                $("#notif_").html(data.msg);
            }
        });
    });
    $("#add_wm").click(function () {
        $.ajax({
            data: $("#add_user").serialize(),
            type: "post",
            url: "./Controlleurs/add_wm.php",
            success: function (data) {
                data = jQuery.parseJSON(data);
                if (data.error === 'false') {
                    $("#add_user")[0].reset();
                }
                $("#notif_").html(data.msg);
            }
        });
    });
    $("#add_wm").click(function () {
        $.ajax({
            data: $("#add_user").serialize(),
            type: "post",
            url: "./Controlleurs/add_wm.php",
            success: function (data) {
                data = jQuery.parseJSON(data);
                if (data.error === 'false') {
                    $("#add_user")[0].reset();
                }
                $("#notif_").html(data.msg);
            }
        });
    });
    $("#add_fa").click(function () {
        $.ajax({
            data: $("#add_fa_form").serialize(),
            type: "post",
            url: "./Controlleurs/add_fa.php",
            success: function (data) {
                data = jQuery.parseJSON(data);
                if (data.error === 'false') {
                    $("#add_fa_form")[0].reset();
                }
                $("#notif_").html(data.msg);
            }
        });
    });
    $("#login_btn").click(function () {
        $.ajax({
            data: $("#login_form").serialize(),
            type: "post",
            url: "./Controlleurs/login.php",
            success: function (data) {
                data = jQuery.parseJSON(data);
                if (data.error === 'false') {
                    window.location.href = "./index.php";
                }
                $("#notif_").html(data.msg);
            }
        });
    });
});