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
    $("#add_acht").click(function () {
        $.ajax({
            data: $("#add_user").serialize(),
            type: "post",
            url: "./Controlleurs/add_acht.php",
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
    $("#add_seg").click(function () {
        $.ajax({
            data: $("#add_seg_form").serialize(),
            type: "post",
            url: "./Controlleurs/add_seg.php",
            success: function (data) {
                data = jQuery.parseJSON(data);
                if (data.error === 'false') {
                    $("#add_seg_form")[0].reset();
                }
                $("#notif_").html(data.msg);
            }
        });
    });
    $("#add_rec").click(function () {
        $.ajax({
            data: $("#add_rec_form").serialize(),
            type: "post",
            url: "./Controlleurs/add_rec.php",
            success: function (data) {
                data = jQuery.parseJSON(data);
                if (data.error === 'false') {
                    $("#add_rec_form")[0].reset();
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