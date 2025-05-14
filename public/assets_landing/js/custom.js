var loading = 'Sedang Memuat Data ....';

function info_project(modal, id) {
    $(modal).modal('show');
    $(modal + 'Label').html('Detail Project');
    $(modal + 'Isi').html(loading);
    var act = '/info_project';
    $.get(act, {
            id
    },
    function (data) { 
        $(modal + 'Isi').html(data);
    });
}