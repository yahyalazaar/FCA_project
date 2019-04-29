function notation(str) {
    $("#note_" + str).val(parseInt($("#ponderation_" + str).val()) * parseInt($("#notation_" + str).val()));
}
function amont(str) {
    if ($("#importance_" + str).val() === "Extrême importance") {
        $("#ponderation_" + str).val(4);
        $("#note_" + str).val(4 * parseInt($("#notation_" + str).val()));
    } else if ($("#importance_" + str).val() === "Grande importance") {
        $("#ponderation_" + str).val(3);
        $("#note_" + str).val(3 * parseInt($("#notation_" + str).val()));
    } else if ($("#importance_" + str).val() === "Moyenne importance") {
        $("#ponderation_" + str).val(2);
        $("#note_" + str).val(2 * parseInt($("#notation_" + str).val()));
    } else if ($("#importance_" + str).val() === "Faible importance") {
        $("#ponderation_" + str).val(1);
        $("#note_" + str).val(1 * parseInt($("#notation_" + str).val()));
    }
}
function gener_pwd() {
    var ok = 'azertyupqsdfghjkmwxcvbn23456789AZERTYUPQSDFGHJKMWXCVBN';
    var pass = '';
    longueur = 8;
    for (i = 0; i < longueur; i++) {
        var wpos = Math.round(Math.random() * ok.length);
        pass += ok.substring(wpos, wpos + 1);
    }
    return pass;
}

$("#gener_pwd").click(function () {
    document.getElementById("mot_de_passe").value = gener_pwd();
});
$(document).ready(function () {
    $("#bl").attr('disabled', 'disabled');
    $("#autreObj").attr('disabled', 'disabled');
    $("#photo").attr('disabled', 'disabled');
    $("#emailf").attr('disabled', 'disabled');
    $("#bc").attr('disabled', 'disabled');
    $("#ri").attr('disabled', 'disabled');
    $("#autrepj").attr('disabled', 'disabled');


    $('#autreObjc').on('change', function (event) {
        if ($("#autreObjc").is(':checked')) {
            $("#autreObj").removeAttr('disabled');
        } else {
            $("#autreObj").attr('disabled', 'disabled');
        }

    });
    $('#blc').on('change', function (event) {
        if ($("#blc").is(':checked')) {
            $("#bl").removeAttr('disabled');
        } else {
            $("#bl").attr('disabled', 'disabled');
        }

    });
    $('#photoc').on('change', function (event) {
        if ($("#photoc").is(':checked')) {
            $("#photo").removeAttr('disabled');
        } else {
            $("#photo").attr('disabled', 'disabled');
        }

    });
    $('#emailc').on('change', function (event) {
        if ($("#emailc").is(':checked')) {
            $("#emailf").removeAttr('disabled');
        } else {
            $("#emailf").attr('disabled', 'disabled');
        }

    });
    $('#bcc').on('change', function (event) {
        if ($("#bcc").is(':checked')) {
            $("#bc").removeAttr('disabled');
        } else {
            $("#bc").attr('disabled', 'disabled');
        }

    });
    $('#ric').on('change', function (event) {
        if ($("#ric").is(':checked')) {
            $("#ri").removeAttr('disabled');
        } else {
            $("#ri").attr('disabled', 'disabled');
        }

    });
    $('#autrepjc').on('change', function (event) {
        if ($("#autrepjc").is(':checked')) {
            $("#autrepj").removeAttr('disabled');
        } else {
            $("#autrepj").attr('disabled', 'disabled');
        }

    });
    $("#datatable-buttons").DataTable({
        "bDestroy": true,
        dom: "<'row'<'col-sm-4'l><'col-sm-3 text-center'B><'col-sm-3'f>>tp",
        "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "Tous"]],
        buttons: [
            {extend: 'copy', className: 'btn-sm'},
            {extend: 'csv', title: 'ExampleFile', className: 'btn-sm'},
            {extend: 'excel', title: 'ExampleFile', className: 'btn-sm'},
            {extend: 'pdf', title: 'ExampleFile', className: 'btn-sm'},
            {extend: 'print', className: 'btn-sm'}
        ],
        language: {
            "sProcessing": "Traitement en cours...",
            "sSearch": "Rechercher&nbsp;:",
            "sLengthMenu": "Afficher _MENU_ &eacute;l&eacute;ments",
            "sInfo": "Affichage de l'&eacute;l&eacute;ment _START_ &agrave; _END_ sur _TOTAL_ &eacute;l&eacute;ments",
            "sInfoEmpty": "Affichage de l'&eacute;l&eacute;ment 0 &agrave; 0 sur 0 &eacute;l&eacute;ment",
            "sInfoFiltered": "(filtr&eacute; de _MAX_ &eacute;l&eacute;ments au total)",
            "sInfoPostFix": "",
            "sLoadingRecords": "Chargement en cours...",
            "sZeroRecords": "Aucun &eacute;l&eacute;ment &agrave; afficher",
            "sEmptyTable": "Aucune donn&eacute;e disponible dans le tableau",
            "oPaginate": {
                "sFirst": "Premier",
                "sPrevious": "Pr&eacute;c&eacute;dent",
                "sNext": "Suivant",
                "sLast": "Dernier"
            },
            "oAria": {
                "sSortAscending": ": activer pour trier la colonne par ordre croissant",
                "sSortDescending": ": activer pour trier la colonne par ordre d&eacute;croissant"
            },
            "select": {
                "rows": {
                    _: "%d lignes séléctionnées",
                    0: "Aucune ligne séléctionnée",
                    1: "1 ligne séléctionnée"
                }
            }
        }
    });

});