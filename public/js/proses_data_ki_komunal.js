var loading = `<div class="text-center"> 
                    <div class="pace-demo">
                        <div class="theme_squares"><div class="pace-progress" data-progress-text="60%" data-progress="60"></div><div class="pace_activity"></div></div>
                    </div> 
                </div>`;

function tambah_modal_jenis_barang(token, modal) {
    $(modal).modal('show');
    $(modal + 'Label').html('Tambah Master Data Jenis Barang');
    $(modal + 'Isi').html(loading);
    var act = '/admin/master_jenis_barang/create';
    $.post(act, {
            _token: token
        },
        function(data) {
            $(modal + 'Isi').html(data);
        });
}

function edit_modal_jenis_barang(token, id, modal) {
    $(modal).modal('show');
    $(modal + 'Label').html('Edit Jenis Barang');
    var act = '/admin/master_jenis_barang/edit';
    $.post(act, {
            _token: token,
            id: id
        },
        function(data) {
            // alert(data);
            $(modal + 'Isi').html(data);
        });
}

function hapus_data_jenis_barang(token, id) {
    swal({
            title: "Yakin Untuk Menghapus Data Jenis Barang?",
            text: "",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#FF5722",
            confirmButtonText: "Ya, Hapus!",
            cancelButtonText: "Tidak!",
            closeOnConfirm: false,
            closeOnCancel: true,
            showLoaderOnConfirm: true
        },
        function(isConfirm) {
            if (isConfirm) {
                var act = '/master_jenis_barang/' + id + '/hapus';
                $.post(act, {
                        _token: token
                    },
                    function(data) {
                        swal({
                                title: "Data Terhapus!",
                                text: "",
                                confirmButtonColor: "#4CAF50",
                                type: "success"
                            },
                            function(isConfirm) {
                                if (isConfirm) {
                                    location.reload();
                                }
                            });
                    });
            }
        });
}

function tambah_modal_jenis_dokumentasi(token, modal) {
    $(modal).modal('show');
    $(modal + 'Label').html('Tambah Master Data Jenis Dokumentasi');
    $(modal + 'Isi').html(loading);
    var act = '/admin/master_jenis_dokumentasi/create';
    $.post(act, {
            _token: token
        },
        function(data) {
            $(modal + 'Isi').html(data);
        });
}

function edit_modal_jenis_dokumentasi(token, id, modal) {
    $(modal).modal('show');
    $(modal + 'Label').html('Edit Jenis Dokumentasi');
    var act = '/admin/master_jenis_dokumentasi/edit';
    $.post(act, {
            _token: token,
            id: id
        },
        function(data) {
            // alert(data);
            $(modal + 'Isi').html(data);
        });
}

function hapus_data_jenis_dokumentasi(token, id) {
    swal({
            title: "Yakin Untuk Menghapus Data Jenis Dokumentasi?",
            text: "",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#FF5722",
            confirmButtonText: "Ya, Hapus!",
            cancelButtonText: "Tidak!",
            closeOnConfirm: false,
            closeOnCancel: true,
            showLoaderOnConfirm: true
        },
        function(isConfirm) {
            if (isConfirm) {
                var act = '/master_jenis_dokumentasi/' + id + '/hapus';
                $.post(act, {
                        _token: token
                    },
                    function(data) {
                        swal({
                                title: "Data Terhapus!",
                                text: "",
                                confirmButtonColor: "#4CAF50",
                                type: "success"
                            },
                            function(isConfirm) {
                                if (isConfirm) {
                                    location.reload();
                                }
                            });
                    });
            }
        });
}


function tambah_modal_upaya_pelestarian(token, modal) {
    $(modal).modal('show');
    $(modal + 'Label').html('Tambah Master Data Upaya Pelestarian');
    $(modal + 'Isi').html(loading);
    var act = '/admin/master_upaya_pelestarian/create';
    $.post(act, {
            _token: token
        },
        function(data) {
            $(modal + 'Isi').html(data);
        });
}

function edit_modal_upaya_pelestarian(token, id, modal) {
    $(modal).modal('show');
    $(modal + 'Label').html('Edit Upaya Pelestarian');
    var act = '/admin/master_upaya_pelestarian/edit';
    $.post(act, {
            _token: token,
            id: id
        },
        function(data) {
            // alert(data);
            $(modal + 'Isi').html(data);
        });
}

function hapus_data_upaya_pelestarian(token, id) {
    swal({
            title: "Yakin Untuk Menghapus Data Upaya Pelestarian?",
            text: "",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#FF5722",
            confirmButtonText: "Ya, Hapus!",
            cancelButtonText: "Tidak!",
            closeOnConfirm: false,
            closeOnCancel: true,
            showLoaderOnConfirm: true
        },
        function(isConfirm) {
            if (isConfirm) {
                var act = '/master_upaya_pelestarian/' + id + '/hapus';
                $.post(act, {
                        _token: token
                    },
                    function(data) {
                        swal({
                                title: "Data Terhapus!",
                                text: "",
                                confirmButtonColor: "#4CAF50",
                                type: "success"
                            },
                            function(isConfirm) {
                                if (isConfirm) {
                                    location.reload();
                                }
                            });
                    });
            }
        });
}

function tambah_modal_kondisi(token, modal) {
    $(modal).modal('show');
    $(modal + 'Label').html('Tambah Master Data Kondisi');
    $(modal + 'Isi').html(loading);
    var act = '/admin/master_kondisi/create';
    $.post(act, {
            _token: token
        },
        function(data) {
            $(modal + 'Isi').html(data);
        });
}

function edit_modal_kondisi(token, id, modal) {
    $(modal).modal('show');
    $(modal + 'Label').html('Edit Kondisi');
    var act = '/admin/master_kondisi/edit';
    $.post(act, {
            _token: token,
            id: id
        },
        function(data) {
            // alert(data);
            $(modal + 'Isi').html(data);
        });
}

function hapus_data_kondisi(token, id) {
    swal({
            title: "Yakin Untuk Menghapus Data Kondisi?",
            text: "",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#FF5722",
            confirmButtonText: "Ya, Hapus!",
            cancelButtonText: "Tidak!",
            closeOnConfirm: false,
            closeOnCancel: true,
            showLoaderOnConfirm: true
        },
        function(isConfirm) {
            if (isConfirm) {
                var act = '/master_kondisi/' + id + '/hapus';
                $.post(act, {
                        _token: token
                    },
                    function(data) {
                        swal({
                                title: "Data Terhapus!",
                                text: "",
                                confirmButtonColor: "#4CAF50",
                                type: "success"
                            },
                            function(isConfirm) {
                                if (isConfirm) {
                                    location.reload();
                                }
                            });
                    });
            }
        });
}

function modal_verif_ki_komunal_belum_biaya(token, id, modal) {
    $(modal).modal('show');
    $(modal + 'Label').html('Verifikasi Pembiayaan ');
    var act = '/admin/modal_verif_ki_komunal_belum_biaya';
    $.post(act, {
            _token: token,
            id: id
        },
        function(data) {
            // alert(data);
            $(modal + 'Isi').html(data);
        });
}


function stat_verif_ki_komunal_tidak_dibiayai(token, id) {
    swal({
            title: "Apakah Anda Yakin Ingin Memverifikasi?",
            text: "Ketika menekan tombol Iya, maka sistem akan berubah menjadi dibiayai",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#673AB7",
            confirmButtonText: "Iya",
            cancelButtonText: "Tidak",
            closeOnConfirm: false,
            closeOnCancel: true,
            showLoaderOnConfirm: true
        },
        function(isConfirm) {
            if (isConfirm) {
                var public_path = $('#public_path').val(); /* di layouts */
                var act = '/admin/ki_komunal/verif_tidak_biayai/kirim';
                $.post(act, {
                        _token: token,
                        id: id
                    },
                    function(data) {
                        if (data == 'success') {
                            swal({
                                    title: "Data Berhasil Dibiayai!",
                                    text: "",
                                    confirmButtonColor: "#4CAF50",
                                    type: "success"
                                },
                                function(isConfirm) {
                                    if (isConfirm) {
                                        location.reload();
                                    }
                                });
                        } else {
                            alertKu2('warning', data);
                        }
                    });
            }
        });
}


function detail_modal_ki_komunal(token, id, modal) {
    $(modal).modal('show');
    $(modal + 'Label').html('Detail Ki Komunal ');
    var act = '/admin/ki_komunal/detail';
    $.post(act, {
            _token: token,
            id: id
        },
        function(data) {
            // alert(data);
            $(modal + 'Isi').html(data);
        });
}

function hapus_data_ki_komunal(token, id) {
    swal({
            title: "Yakin Untuk Menghapus Data Ki Komunal?",
            text: "",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#FF5722",
            confirmButtonText: "Ya, Hapus!",
            cancelButtonText: "Tidak!",
            closeOnConfirm: false,
            closeOnCancel: true,
            showLoaderOnConfirm: true
        },
        function(isConfirm) {
            if (isConfirm) {
                var act = '/admin/ki_komunal/' + id + '/hapus';
                $.post(act, {
                        _token: token
                    },
                    function(data) {
                        swal({
                                title: "Data Terhapus!",
                                text: "",
                                confirmButtonColor: "#4CAF50",
                                type: "success"
                            },
                            function(isConfirm) {
                                if (isConfirm) {
                                    location.reload();
                                }
                            });
                    });
            }
        });
}