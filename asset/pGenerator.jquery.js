$("#calc_av").click(function () {
    var not = 0.2, qlt = 0.15, logs = 0.15, hst = 0.15, eco = 0.2, comm = 0.15;
    var notNote = 0, qltNote = 0, logsNote = 0, hstNote = 0, ecoNote = 0, commNote = 0;
    var notPond = 0, qltPond = 0, logsPond = 0, hstPond = 0, ecoPond = 0, commPond = 0;
    for (var i = 0; i < parseInt($('#indice').val()); i++) {

        if (i < 12) {
            if ($('#prise_cmpt_' + i).val() === 'Oui') {
                notPond = notPond + parseFloat($("#ponderation_" + i).val());
                notNote = notNote + parseFloat($("#note_" + i).val());
            }
        } else if (i >= 12 && i < 15) {
            if ($('#prise_cmpt_' + i).val() === 'Oui') {
                qltPond = qltPond + parseFloat($("#ponderation_" + i).val());
                qltNote = qltNote + parseFloat($("#note_" + i).val());
            }
        } else if (i >= 15 && i < 19) {
            if ($('#prise_cmpt_' + i).val() === 'Oui') {
                logsPond = logsPond + parseFloat($("#ponderation_" + i).val());
                logsNote = logsNote + parseFloat($("#note_" + i).val());
            }
        } else if (i >= 19 && i < 24) {
            if ($('#prise_cmpt_' + i).val() === 'Oui') {
                hstPond = hstPond + parseFloat($("#ponderation_" + i).val());
                hstNote = hstNote + parseFloat($("#note_" + i).val());
            }
        } else if (i >= 24 && i < 33) {
            if ($('#prise_cmpt_' + i).val() === 'Oui') {
                ecoPond = ecoPond + parseFloat($("#ponderation_" + i).val());
                ecoNote = ecoNote + parseFloat($("#note_" + i).val());
            }
        } else if (i >= 33) {
            if ($('#prise_cmpt_' + i).val() === 'Oui') {
                commPond = commPond + parseFloat($("#ponderation_" + i).val());
                commNote = commNote + parseFloat($("#note_" + i).val());
            }
        }
    }
    if (notPond != 0 && qltPond != 0 && logsPond != 0 && hstPond != 0 && ecoPond != 0 && commPond != 0) {
        var notSum = parseFloat((notNote / notPond));
        var qltSum = parseFloat((qltNote / qltPond));
        var logsSum = parseFloat((logsNote / logsPond));
        var hstSum = parseFloat((hstNote / hstPond));
        var ecoSum = parseFloat((ecoNote / ecoPond));
        var commSum = parseFloat((commNote / commPond));

        var sc_final = notSum * not + qltSum * qlt + logsSum * logs + hstSum * hst + ecoSum * eco + commSum * comm;
        var classe = '';
        if (sc_final >= 4 && ecoSum > 2 && hstSum > 2)
        {
            classe = 'A';
        } else if (sc_final >= 3 && sc_final < 4 && ecoSum > 2 && hstSum > 2)
        {
            classe = 'B';
        } else if (sc_final < 3 || ecoSum <= 2 || hstSum <= 2)
        {
            classe = 'C';
        }
        $('#score_finale').val(sc_final);
        $('#classe').val(classe);
        $("#save").removeAttr('disabled');
    }
});
$("#calc_am").click(function () {
    var not = 0.2, qlt = 0.15, logs = 0.15, hst = 0.15, eco = 0.2, comm = 0.15;
    var notNote = 0, qltNote = 0, logsNote = 0, hstNote = 0, ecoNote = 0, commNote = 0;
    var notPond = 0, qltPond = 0, logsPond = 0, hstPond = 0, ecoPond = 0, commPond = 0;
    for (var i = 0; i < parseInt($('#indice').val()); i++) {

        if (i < 12) {
            if ($('#prise_cmpt_' + i).val() === 'Oui') {
                notPond = notPond + parseFloat($("#ponderation_" + i).val());
                notNote = notNote + parseFloat($("#note_" + i).val());
            }
        } else if (i >= 12 && i < 14) {
            if ($('#prise_cmpt_' + i).val() === 'Oui') {
                qltPond = qltPond + parseFloat($("#ponderation_" + i).val());
                qltNote = qltNote + parseFloat($("#note_" + i).val());
            }
        } else if (i >= 14 && i < 15) {
            if ($('#prise_cmpt_' + i).val() === 'Oui') {
                logsPond = logsPond + parseFloat($("#ponderation_" + i).val());
                logsNote = logsNote + parseFloat($("#note_" + i).val());
            }
        } else if (i >= 15 && i < 20) {
            if ($('#prise_cmpt_' + i).val() === 'Oui') {
                hstPond = hstPond + parseFloat($("#ponderation_" + i).val());
                hstNote = hstNote + parseFloat($("#note_" + i).val());
            }
        } else if (i >= 20 && i < 26) {
            if ($('#prise_cmpt_' + i).val() === 'Oui') {
                ecoPond = ecoPond + parseFloat($("#ponderation_" + i).val());
                ecoNote = ecoNote + parseFloat($("#note_" + i).val());
            }
        } else if (i >= 26) {
            if ($('#prise_cmpt_' + i).val() === 'Oui') {
                commPond = commPond + parseFloat($("#ponderation_" + i).val());
                commNote = commNote + parseFloat($("#note_" + i).val());
            }
        }
    }
    if (notPond != 0 && qltPond != 0 && logsPond != 0 && hstPond != 0 && ecoPond != 0 && commPond != 0) {
        var notSum = parseFloat((notNote / notPond));
        var qltSum = parseFloat((qltNote / qltPond));
        var logsSum = parseFloat((logsNote / logsPond));
        var hstSum = parseFloat((hstNote / hstPond));
        var ecoSum = parseFloat((ecoNote / ecoPond));
        var commSum = parseFloat((commNote / commPond));

        var sc_final = notSum * not + qltSum * qlt + logsSum * logs + hstSum * hst + ecoSum * eco + commSum * comm;
        var classe = '';
        if (sc_final >= 4 && ecoSum > 2 && hstSum > 2)
        {
            classe = 'A';
        } else if (sc_final >= 3 && sc_final < 4 && ecoSum > 2 && hstSum > 2)
        {
            classe = 'B';
        } else if (sc_final < 3 || ecoSum <= 2 || hstSum <= 2)
        {
            classe = 'C';
        }

        $('#score_finale').val(sc_final);
        $('#classe').val(classe);
        $("#save").removeAttr('disabled');
    }
});
function notation(str) {
    if ($('#prise_cmpt_' + str).val() === 'Oui') {
        $("#note_" + str).val(parseInt($("#ponderation_" + str).val()) * parseInt($("#notation_" + str).val()));
    } else {
        $("#note_" + str).val(0);
    }
}
function amont(str) {

    if ($("#importance_" + str).val() === "Extrême importance") {
        $("#ponderation_" + str).val(4);
        if ($('#prise_cmpt_' + str).val() === 'Oui') {
            $("#note_" + str).val(4 * parseInt($("#notation_" + str).val()));
        }
    } else if ($("#importance_" + str).val() === "Grande importance") {
        $("#ponderation_" + str).val(3);
        if ($('#prise_cmpt_' + str).val() === 'Oui') {
            $("#note_" + str).val(3 * parseInt($("#notation_" + str).val()));
        }
    } else if ($("#importance_" + str).val() === "Moyenne importance") {
        $("#ponderation_" + str).val(2);
        if ($('#prise_cmpt_' + str).val() === 'Oui') {
            $("#note_" + str).val(2 * parseInt($("#notation_" + str).val()));
        }
    } else if ($("#importance_" + str).val() === "Faible importance") {
        $("#ponderation_" + str).val(1);
        if ($('#prise_cmpt_' + str).val() === 'Oui') {
            $("#note_" + str).val(1 * parseInt($("#notation_" + str).val()));
        }
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