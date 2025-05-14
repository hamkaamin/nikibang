var loading = `<div class="text-center"> 
                    <div class="pace-demo">
                        <div class="theme_squares"><div class="pace-progress" data-progress-text="60%" data-progress="60"></div><div class="pace_activity"></div></div>
                    </div> 
                </div>`;

function tambah_modal_indeks(token, modal) {
    $(modal).modal('show');
    $(modal + 'Label').html('Tambah Master Data Indeks');
    $(modal + 'Isi').html(loading);
    var act = '/admin/indeks/tambah_modal_indeks';
    $.post(act, {
        _token: token
    },
    function (data) {
        $(modal + 'Isi').html(data);
    });
}

function edit_modal_indeks(token,id,modal) {
    $(modal).modal('show');
    $(modal + 'Label').html('Edit Indeks'); 
    var act = '/admin/indeks/ubah';
     $.post(act, {
            _token: token,
            id:id
        },
        function (data) { 
             // alert(data);
            $(modal + 'Isi').html(data);
        });
}   

function hapus_data_indeks(token, id) 
{ 
    swal({
            title: "Yakin Untuk Menghapus Data Indeks?",
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
        function (isConfirm) {
            if (isConfirm) {
                var act = '/indeks/' + id + '/hapus';
                $.post(act, {
                        _token: token
                    },
                    function (data) {
                        swal({
                                title: "Data Terhapus!",
                                text: "",
                                confirmButtonColor: "#4CAF50",
                                type: "success"
                            },
                            function (isConfirm) {
                                if (isConfirm) {
                                    location.reload();
                                }
                            }); 
                    });
            }
        });
}

function tambah_modal_pemilik(token, modal) {
    $(modal).modal('show');
    $(modal + 'Label').html('Tambah Master Data Divisi / Bidang');
    $(modal + 'Isi').html(loading);
    var act = '/admin/pemilik/tambah_modal_pemilik';
    $.post(act, {
        _token: token
    },
    function (data) {
        $(modal + 'Isi').html(data);
    });
} 
 
function edit_modal_pemilik(token,id,modal) {
    $(modal).modal('show');
    $(modal + 'Label').html('Edit Divisi / Bidang'); 
    var act = '/admin/pemilik/ubah';
     $.post(act, {
            _token: token,
            id:id
        },
        function (data) { 
             // alert(data);
            $(modal + 'Isi').html(data);
        });
}   

function hapus_data_pemilik(token, id) 
{ 
    swal({
            title: "Yakin Untuk Menghapus Data Divisi / Bidang?",
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
        function (isConfirm) {
            if (isConfirm) {
                var act = '/pemilik/' + id + '/hapus';
                $.post(act, {
                        _token: token
                    },
                    function (data) {
                        swal({
                                title: "Data Terhapus!",
                                text: "",
                                confirmButtonColor: "#4CAF50",
                                type: "success"
                            },
                            function (isConfirm) {
                                if (isConfirm) {
                                    location.reload();
                                }
                            }); 
                    });
            }
        });
}


function tambah_modal_jenis(token, modal) {
    $(modal).modal('show');
    $(modal + 'Label').html('Tambah Master Data Jenis Divisi / Bidang');
    $(modal + 'Isi').html(loading);
    var act = '/admin/jenis/tambah_modal_jenis';
    $.post(act, {
        _token: token
    },
    function (data) {
        $(modal + 'Isi').html(data);
    });
}
 
function edit_modal_jenis(token,id,modal) {
    $(modal).modal('show');
    $(modal + 'Label').html('Edit Jenis Divisi / Bidang'); 
    var act = '/admin/jenis/ubah';
     $.post(act, {
            _token: token,
            id:id
        },
        function (data) { 
             // alert(data);
            $(modal + 'Isi').html(data);
        });
}

function hapus_data_jenis(token, id) 
{ 
    swal({
            title: "Yakin Untuk Menghapus Data Jenis Divisi / Bidang?",
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
        function (isConfirm) {
            if (isConfirm) {
                var act = '/jenis/' + id + '/hapus';
                $.post(act, {
                        _token: token
                    },
                    function (data) {
                        swal({
                                title: "Data Terhapus!",
                                text: "",
                                confirmButtonColor: "#4CAF50",
                                type: "success"
                            },
                            function (isConfirm) {
                                if (isConfirm) {
                                    location.reload();
                                }
                            }); 
                    });
            }
        });
}

function tambah_modal_lokasi(token, modal) {
    $(modal).modal('show');
    $(modal + 'Label').html('Tambah Master Data Lokasi Arsip');
    $(modal + 'Isi').html(loading);
    var act = '/admin/lokasi/tambah_modal_lokasi';
    $.post(act, {
        _token: token
    },
    function (data) {
        $(modal + 'Isi').html(data);
    });
}
 
function edit_modal_lokasi(token,id,modal) {
    $(modal).modal('show');
    $(modal + 'Label').html('Edit Lokasi Arsip'); 
    var act = '/admin/lokasi/ubah';
     $.post(act, {
            _token: token,
            id:id
        },
        function (data) { 
             // alert(data);
            $(modal + 'Isi').html(data);
        });
}

function hapus_data_lokasi(token, id) 
{ 
    swal({
            title: "Yakin Untuk Menghapus Data Lokasi Arsip?",
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
        function (isConfirm) {
            if (isConfirm) {
                var act = '/lokasi/' + id + '/hapus';
                $.post(act, {
                        _token: token
                    },
                    function (data) {
                        swal({
                                title: "Data Terhapus!",
                                text: "",
                                confirmButtonColor: "#4CAF50",
                                type: "success"
                            },
                            function (isConfirm) {
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
    $(modal + 'Label').html('Tambah Master Data Kondisi Arsip');
    $(modal + 'Isi').html(loading);
    var act = '/admin/kondisi/tambah_modal_kondisi';
    $.post(act, {
        _token: token
    },
    function (data) {
        $(modal + 'Isi').html(data);
    });
}
 
function edit_modal_kondisi(token,id,modal) {
    $(modal).modal('show');
    $(modal + 'Label').html('Edit Kondisi Arsip'); 
    var act = '/admin/kondisi/ubah';
     $.post(act, {
            _token: token,
            id:id
        },
        function (data) { 
             // alert(data);
            $(modal + 'Isi').html(data);
        });
}

function hapus_data_kondisi(token, id) 
{ 
    swal({
            title: "Yakin Untuk Menghapus Data Kondisi Arsip?",
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
        function (isConfirm) {
            if (isConfirm) {
                var act = '/kondisi/' + id + '/hapus';
                $.post(act, {
                        _token: token
                    },
                    function (data) {
                        swal({
                                title: "Data Terhapus!",
                                text: "",
                                confirmButtonColor: "#4CAF50",
                                type: "success"
                            },
                            function (isConfirm) {
                                if (isConfirm) {
                                    location.reload();
                                }
                            }); 
                    });
            }
        });
}

 
function div_tabel_data_arsip(token, target) {   

    var data_indeks = $('#data_indeks').val(); 
    var data_lokasi = $('#data_lokasi').val(); 
    var data_kondisi = $('#data_kondisi').val(); 

    $(target).html(loading);
    var act = '/admin/div_tabel_data_arsip';
    $.post(act, {
        _token: token
        , data_indeks : data_indeks,
          data_lokasi : data_lokasi,
          data_kondisi : data_kondisi
    },
    function (data) {
            // alert(data);
            $(target).html(data);
        })
}

function tambah_modal_kategori(token, modal) {
    $(modal).modal('show');
    $(modal + 'Label').html('Tambah Master Data Kategori');
    $(modal + 'Isi').html(loading);
    var act = '/admin/kategori/tambah_modal_kategori';
    $.post(act, {
        _token: token
    },
    function (data) {
        $(modal + 'Isi').html(data);
    });
}

function edit_modal_kategori(token,id,modal) {
    $(modal).modal('show');
    $(modal + 'Label').html('Edit Kategori'); 
    var act = '/admin/kategori/ubah';
     $.post(act, {
            _token: token,
            id:id
        },
        function (data) { 
             // alert(data);
            $(modal + 'Isi').html(data);
        });
}   

function hapus_data_kategori(token, id) 
{ 
    swal({
            title: "Yakin Untuk Menghapus Data Kategori?",
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
        function (isConfirm) {
            if (isConfirm) {
                var act = '/kategori/' + id + '/hapus';
                $.post(act, {
                        _token: token
                    },
                    function (data) {
                        swal({
                                title: "Data Terhapus!",
                                text: "",
                                confirmButtonColor: "#4CAF50",
                                type: "success"
                            },
                            function (isConfirm) {
                                if (isConfirm) {
                                    location.reload();
                                }
                            }); 
                    });
            }
        });
}
 
function tambah_data_arsip_inactive(token, modal) {
    $(modal).modal('show');
    $(modal + 'Label').html('Tambah Master Data Divisi / Bidang');
    $(modal + 'Isi').html(loading);
    var act = '/admin/data_arsip_inactive/tambah_modal_data_arsip_inactive';
    $.post(act, {
        _token: token
    },
    function (data) {
        $(modal + 'Isi').html(data);
    });
}
 
function div_tabel_data_arsip_inactive(token, target,id) {   

    var data_indeks = $('#data_indeks').val(); 
    var data_pemilik = $('#data_pemilik').val(); 
    var tahun_mulai = $('#tahun_mulai').val(); 
    var tahun_selesai = $('#tahun_selesai').val(); 
    var uraian_masalah = $('#uraian_masalah').val(); 
    var data_lokasi = $('#data_lokasi').val(); 
    var data_kondisi = $('#data_kondisi').val(); 

    $(target).html(loading);
    var act = '/admin/div_tabel_data_arsip_inactive';
    $.post(act, {
        _token: token
        , data_indeks : data_indeks
        , uraian_masalah : uraian_masalah
        , data_pemilik : data_pemilik
        , tahun_mulai : tahun_mulai
        , tahun_selesai : tahun_selesai,
          data_lokasi : data_lokasi,
          data_kondisi : data_kondisi
    },
    function (data) {
            // alert(data);
            $(target).html(data);
        })
} 

function delete_data_arsip_inactive_tabel(token, target) {   

    var data_indeks = $('#data_indeks').val(); 
    var data_pemilik = $('#data_pemilik').val(); 
    var tahun_mulai = $('#tahun_mulai').val(); 
    var tahun_selesai = $('#tahun_selesai').val(); 
    var uraian_masalah = $('#uraian_masalah').val(); 
    var data_lokasi = $('#data_lokasi').val(); 
    var data_kondisi = $('#data_kondisi').val(); 

    $(target).html(loading);

    swal({
            title: "Anda yakin menghapus data ini ?",
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
        function (isConfirm) {
            if (isConfirm) {
                var act = '/admin/delete_data_arsip_inactive_tabel';
                $.post(act, {
                        _token: token
                        , data_indeks : data_indeks
                        , uraian_masalah : uraian_masalah
                        , data_pemilik : data_pemilik
                        , tahun_mulai : tahun_mulai
                        , tahun_selesai : tahun_selesai,
                          data_lokasi : data_lokasi,
                          data_kondisi : data_kondisi
                    },
                    function (data) {
                        swal({
                                title: "Data Terhapus!",
                                text: "",
                                confirmButtonColor: "#4CAF50",
                                type: "success"
                            },
                            function (isConfirm) {
                                if (isConfirm) {
                                    div_tabel_data_arsip_inactive(token, target);
                                    $('#div_tabel_data_arsip').html(data);
                                }
                            });
                    });
            }
        }) 
}

function modal_upload_data_arsip_inactive(token, id,modal) { 
    $(modal).modal('show');
    $(modal + 'Label').html('Upload Artikel');  
    var act = '/admin/data_arsip_inactive/modal_upload_data_arsip_inactive';
    // var act = '/beli_keu/' + id + '/verif';
    $.post(act, {
            _token: token
            , id: id
        },
        function (data) {
            //alert(data);
            $(modal + 'Isi').html(data);
        });
}

function modal_upload_data_arsip_inactive_isi(token, id, target) { 
    $(target).html(loading);
    var act = '/modal_upload_data_arsip_inactive_isi';
    // var act = '/beli_keu/' + id + '/verif';
    $.post(act, {
            _token: token
            , id: id
        },
        function (data) {
            //alert(data);
            $(target).html(data);
        });
}
function hapus_upload_data_arsip_inactive(token, id,id_data_arsip_inactive,target) 
{
    swal({
            title: "Anda yakin menghapus data ini ?",
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
        function (isConfirm) {
            if (isConfirm) {
                var act = '/admin/data_arsip_inactive_upload/hapus';
                $.post(act, {
                        _token: token,
                        id:id
                    },
                    function (data) {
                        swal({
                                title: "Data Terhapus!",
                                text: "",
                                confirmButtonColor: "#4CAF50",
                                type: "success"
                            },
                            function (isConfirm) {
                                if (isConfirm) {
                                    modal_upload_data_arsip_inactive_isi(token, id_data_arsip_inactive, target);
                                }
                            });
                    });
            }
        })
}

function edit_modal_data_arsip_inactive(token,id,modal) {
    $(modal).modal('show');
    $(modal + 'Label').html('Edit Arsip Inactive'); 
    var act = '/admin/data_arsip_inactive/ubah';
     $.post(act, {
            _token: token,
            id:id
        },
        function (data) { 
             // alert(data);
            $(modal + 'Isi').html(data);
        });
}

function import_excel(token)
{
    swal({
        title: "COMING SOON",
        text: "",
        confirmButtonColor: "#4CAF50",
        type: "warning"
    });
}   

function hapus_data_arsip_inactive(token, id) 
{ 
    swal({
            title: "Yakin Untuk Menghapus Data Arsip Inaktif?",
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
        function (isConfirm) {
            if (isConfirm) {
                var act = '/data_arsip_inactive/' + id + '/hapus';
                $.post(act, {
                        _token: token
                    },
                    function (data) {
                        swal({
                                title: "Data Terhapus!",
                                text: "",
                                confirmButtonColor: "#4CAF50",
                                type: "success"
                            },
                            function (isConfirm) {
                                if (isConfirm) {
                                $('.btn_tampilkan').click();
                                }
                            }); 
                    });
            }
        });
}


function div_tabel_laporan_arsip(token, target) {   

    var data_pemilik = $('#data_pemilik').val(); 
    var tahun_mulai = $('#tahun_mulai').val(); 
    var tahun_selesai = $('#tahun_selesai').val(); 

    $(target).html(loading);
    var act = '/admin/div_tabel_laporan_arsip';
    $.post(act, {
        _token: token
        , data_pemilik : data_pemilik,
          tahun_mulai : tahun_mulai,
          tahun_selesai : tahun_selesai
    },
    function (data) {
            // alert(data);
            $(target).html(data);
        })
}

function div_grafik_barang_masuk(token, target){ 
    $(target).html(loading);
    var act = '/admin/grafik_kondisi';
    $.post(act, {
        _token: token 
    },
    function (data1) {
        //alert(data1);
        $(target).html(data1);
    });  
} 

function div_grafik_media(token, target){ 
    $(target).html(loading);
    var act = '/admin/div_grafik_media';
    $.post(act, {
        _token: token 
    },
    function (data1) {
        //alert(data1);
        $(target).html(data1);
    });  
}
// -- START HERE -- 
function tambah_modal_tipe(token, modal) {
    $(modal).modal('show');
    $(modal + 'Label').html('Tambah Master Data Tipe');
    $(modal + 'Isi').html(loading);
    var act = '/admin/tipe/tambah_modal_tipe';
    $.post(act, {
        _token: token
    },
    function (data) {
        $(modal + 'Isi').html(data);
    });
}

function edit_modal_tipe(token,id,modal) {
    $(modal).modal('show');
    $(modal + 'Label').html('Edit Tipe'); 
    var act = '/admin/tipe/ubah';
     $.post(act, {
            _token: token,
            id:id
        },
        function (data) { 
             // alert(data);
            $(modal + 'Isi').html(data);
        });
}   

function hapus_data_tipe(token, id) 
{ 
    swal({
            title: "Yakin Untuk Menghapus Data Tipe?",
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
        function (isConfirm) {
            if (isConfirm) {
                var act = '/tipe/' + id + '/hapus';
                $.post(act, {
                        _token: token
                    },
                    function (data) {
                        swal({
                                title: "Data Terhapus!",
                                text: "",
                                confirmButtonColor: "#4CAF50",
                                type: "success"
                            },
                            function (isConfirm) {
                                if (isConfirm) {
                                    location.reload();
                                }
                            }); 
                    });
            }
        });
}

function tambah_modal_kelas(token, modal) {
    $(modal).modal('show');
    $(modal + 'Label').html('Tambah Master Data Kelas');
    $(modal + 'Isi').html(loading);
    var act = '/admin/kelas/tambah_modal_kelas';
    $.post(act, {
        _token: token
    },
    function (data) {
        $(modal + 'Isi').html(data);
    });
}

function edit_modal_kelas(token,id,modal) {
    $(modal).modal('show');
    $(modal + 'Label').html('Edit Kelas'); 
    var act = '/admin/kelas/ubah';
     $.post(act, {
            _token: token,
            id:id
        },
        function (data) { 
             // alert(data);
            $(modal + 'Isi').html(data);
        });
}   

function hapus_data_kelas(token, id,idKelas) 
{ 
    swal({
            title: "Yakin Untuk Menghapus Data Kelas?",
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
        function (isConfirm) {
            if (isConfirm) {
                var act = '/kelas/' + id + '/hapus';
                $.post(act, {
                        _token: token
                    },
                    function (data) {
                        swal({
                                title: "Data Terhapus!",
                                text: "",
                                confirmButtonColor: "#4CAF50",
                                type: "success"
                            },
                            function (isConfirm) {
                                if (isConfirm) {
                                div_tabel_data_kelas(token, '#div_tabel_data_kelas', idKelas);
                                }
                            }); 
                    });
            }
        });
}

function tambah_modal_prioritas_merek(token, modal) {
    $(modal).modal('show');
    $(modal + 'Label').html('Tambah Master Data Prioritas (Merek)');
    $(modal + 'Isi').html(loading);
    var act = '/admin/prioritas_merek/tambah_modal_prioritas_merek';
    $.post(act, {
        _token: token
    },
    function (data) {
        $(modal + 'Isi').html(data);
    });
}

function edit_modal_prioritas_merek(token,id,modal) {
    $(modal).modal('show');
    $(modal + 'Label').html('Edit Prioritas (Merek)'); 
    var act = '/admin/prioritas_merek/ubah';
     $.post(act, {
            _token: token,
            id:id
        },
        function (data) { 
             // alert(data);
            $(modal + 'Isi').html(data);
        });
}   

function hapus_data_prioritas_merek(token, id,idMerek) 
{ 
    swal({
            title: "Yakin Untuk Menghapus Data Prioritas (Merek)?",
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
        function (isConfirm) {
            if (isConfirm) {
                var act = '/prioritas_merek/' + id + '/hapus';
                $.post(act, {
                        _token: token
                    },
                    function (data) {
                        swal({
                                title: "Data Terhapus!",
                                text: "",
                                confirmButtonColor: "#4CAF50",
                                type: "success"
                            },
                            function (isConfirm) {
                                if (isConfirm) {
                                div_tabel_data_prioritas_merek(token, '#div_tabel_data_prioritas_merek', idMerek);
                                }
                            }); 
                    });
            }
        });
}
function tambah_modal_prioritas_paten(token, modal) {
    $(modal).modal('show');
    $(modal + 'Label').html('Tambah Master Data Prioritas (Paten)');
    $(modal + 'Isi').html(loading);
    var act = '/admin/prioritas_paten/tambah_modal_prioritas_paten';
    $.post(act, {
        _token: token
    },
    function (data) {
        $(modal + 'Isi').html(data); 
    });
}

function edit_modal_prioritas_paten(token,id,modal) {
    $(modal).modal('show');
    $(modal + 'Label').html('Edit Prioritas (Paten)'); 
    var act = '/admin/prioritas_paten/ubah';
     $.post(act, {
            _token: token,
            id:id
        },
        function (data) { 
             // alert(data);
            $(modal + 'Isi').html(data);
        });
}   

function hapus_data_prioritas_paten(token, id,idPaten) 
{ 
    swal({
            title: "Yakin Untuk Menghapus Data Prioritas (Paten)?",
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
        function (isConfirm) {
            if (isConfirm) {
                var act = '/prioritas_paten/' + id + '/hapus';
                $.post(act, {
                        _token: token
                    },
                    function (data) {
                        swal({
                                title: "Data Terhapus!",
                                text: "",
                                confirmButtonColor: "#4CAF50",
                                type: "success"
                            },
                            function (isConfirm) {
                                if (isConfirm) { 
                                div_tabel_data_prioritas_paten(token, '#div_tabel_data_prioritas_paten', idPaten);
                                }
                            }); 
                    });
            }
        });
}

function tambah_modal_prioritas_desain(token, modal) {
    $(modal).modal('show');
    $(modal + 'Label').html('Tambah Master Data Prioritas (Desain)');
    $(modal + 'Isi').html(loading);
    var act = '/admin/prioritas_desain/tambah_modal_prioritas_desain';
    $.post(act, {
        _token: token
    },
    function (data) {
        $(modal + 'Isi').html(data);
    });
}

function edit_modal_prioritas_desain(token,id,modal) {
    $(modal).modal('show');
    $(modal + 'Label').html('Edit Prioritas (Desain)'); 
    var act = '/admin/prioritas_desain/ubah';
     $.post(act, {
            _token: token,
            id:id
        },
        function (data) { 
             // alert(data);
            $(modal + 'Isi').html(data);
        });
}   

function hapus_data_prioritas_desain(token, id,idDesain) 
{ 
    swal({
            title: "Yakin Untuk Menghapus Data Prioritas (Desain)?",
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
        function (isConfirm) {
            if (isConfirm) {
                var act = '/prioritas_desain/' + id + '/hapus';
                $.post(act, {
                        _token: token
                    },
                    function (data) {
                        swal({
                                title: "Data Terhapus!",
                                text: "",
                                confirmButtonColor: "#4CAF50",
                                type: "success"
                            },
                            function (isConfirm) {
                                if (isConfirm) {
                                div_tabel_data_prioritas_desain(token, '#div_tabel_data_prioritas_desain', idDesain);
                                }
                            }); 
                    });
            }
        });
}

function tambah_modal_inventor(token, modal) {
    $(modal).modal('show');
    $(modal + 'Label').html('Tambah Master Data Inventor ');
    $(modal + 'Isi').html(loading);
    var act = '/admin/inventor/tambah_modal_inventor';
    $.post(act, {
        _token: token
    },
    function (data) {
        $(modal + 'Isi').html(data);
    });
}

function edit_modal_inventor(token,id,modal) {
    $(modal).modal('show');
    $(modal + 'Label').html('Edit Inventor '); 
    var act = '/admin/inventor/ubah';
     $.post(act, {
            _token: token,
            id:id
        },
        function (data) { 
             // alert(data);
            $(modal + 'Isi').html(data);
        });
}   

function hapus_data_inventor(token, id,idInventor) 
{ 
    swal({
            title: "Yakin Untuk Menghapus Data Inventor ?",
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
        function (isConfirm) {
            if (isConfirm) {
                var act = '/inventor/' + id + '/hapus';
                $.post(act, {
                        _token: token
                    },
                    function (data) {
                        swal({
                                title: "Data Terhapus!",
                                text: "",
                                confirmButtonColor: "#4CAF50",
                                type: "success"
                            },
                            function (isConfirm) {
                                if (isConfirm) { 
                                div_tabel_data_inventor(token, '#div_tabel_data_inventor', idInventor);
                                }
                            }); 
                    });
            }
        });
}

function tambah_modal_pemegang_paten(token, modal) {
    $(modal).modal('show');
    $(modal + 'Label').html('Tambah Master Data Pemegang Paten ');
    $(modal + 'Isi').html(loading);
    var act = '/admin/pemegang_paten/tambah_modal_pemegang_paten';
    $.post(act, {
        _token: token
    },
    function (data) {
        $(modal + 'Isi').html(data);
    });
}

function edit_modal_pemegang_paten(token,id,modal) {
    $(modal).modal('show');
    $(modal + 'Label').html('Edit Pemegang Paten '); 
    var act = '/admin/pemegang_paten/ubah';
     $.post(act, {
            _token: token,
            id:id
        },
        function (data) { 
             // alert(data);
            $(modal + 'Isi').html(data);
        });
}   

function hapus_data_pemegang_paten(token, id,idPemegang) 
{ 
    swal({
            title: "Yakin Untuk Menghapus Data Pemegang Paten ?",
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
        function (isConfirm) {
            if (isConfirm) {
                var act = '/pemegang_paten/' + id + '/hapus';
                $.post(act, {
                        _token: token
                    },
                    function (data) {
                        swal({
                                title: "Data Terhapus!",
                                text: "",
                                confirmButtonColor: "#4CAF50",
                                type: "success"
                            },
                            function (isConfirm) {
                                if (isConfirm) { 
                                div_tabel_data_pemegang_paten(token, '#div_tabel_data_pemegang_paten', idPemegang);
                                }
                            }); 
                    });
            }
        });
}


function tambah_modal_pemegang_cipta(token, modal) {
    $(modal).modal('show');
    $(modal + 'Label').html('Tambah Master Data Pemegang Cipta ');
    $(modal + 'Isi').html(loading);
    var act = '/admin/pemegang_cipta/tambah_modal_pemegang_cipta';
    $.post(act, {
        _token: token
    },
    function (data) {
        $(modal + 'Isi').html(data);
    });
}

function edit_modal_pemegang_cipta(token,id,modal) {
    $(modal).modal('show');
    $(modal + 'Label').html('Edit Pemegang Cipta '); 
    var act = '/admin/pemegang_cipta/ubah';
     $.post(act, {
            _token: token,
            id:id
        },
        function (data) { 
             // alert(data);
            $(modal + 'Isi').html(data);
        });
}   

function hapus_data_pemegang_cipta(token, id,idPemegang) 
{ 
    swal({
            title: "Yakin Untuk Menghapus Data Pemegang Cipta ?",
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
        function (isConfirm) {
            if (isConfirm) {
                var act = '/pemegang_cipta/' + id + '/hapus';
                $.post(act, {
                        _token: token
                    },
                    function (data) {
                        swal({
                                title: "Data Terhapus!",
                                text: "",
                                confirmButtonColor: "#4CAF50",
                                type: "success"
                            },
                            function (isConfirm) {
                                if (isConfirm) {
                                div_tabel_data_pemegang_cipta(token, '#div_tabel_data_pemegang_cipta', idPemegang);
                                }
                            }); 
                    });
            }
        });
}

function tambah_modal_pemegang_desain(token, modal) {
    $(modal).modal('show');
    $(modal + 'Label').html('Tambah Master Data Pemegang Desain Industri ');
    $(modal + 'Isi').html(loading);
    var act = '/admin/pemegang_desain/tambah_modal_pemegang_desain';
    $.post(act, {
        _token: token
    },
    function (data) {
        $(modal + 'Isi').html(data);
    });
}

function edit_modal_pemegang_desain(token,id,modal) {
    $(modal).modal('show');
    $(modal + 'Label').html('Edit Pemegang Desain Industri '); 
    var act = '/admin/pemegang_desain/ubah';
     $.post(act, {
            _token: token,
            id:id
        },
        function (data) { 
             // alert(data);
            $(modal + 'Isi').html(data);
        });
}   

function hapus_data_pemegang_desain(token, id,idPemegang) 
{ 
    swal({
            title: "Yakin Untuk Menghapus Data Pemegang Desain Industri ?",
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
        function (isConfirm) {
            if (isConfirm) {
                var act = '/pemegang_desain/' + id + '/hapus';
                $.post(act, {
                        _token: token
                    },
                    function (data) {
                        swal({
                                title: "Data Terhapus!",
                                text: "",
                                confirmButtonColor: "#4CAF50",
                                type: "success"
                            },
                            function (isConfirm) {
                                if (isConfirm) {
                                div_tabel_data_pemegang_desain(token, '#div_tabel_data_pemegang_desain', idPemegang);
                                }
                            }); 
                    });
            }
        });
}


function tambah_modal_pencipta(token, modal) {
    $(modal).modal('show');
    $(modal + 'Label').html('Tambah Master Data Pencipta ');
    $(modal + 'Isi').html(loading);
    var act = '/admin/pencipta/tambah_modal_pencipta';
    $.post(act, {
        _token: token
    },
    function (data) {
        $(modal + 'Isi').html(data);
    });
}

function edit_modal_pencipta(token,id,modal) {
    $(modal).modal('show');
    $(modal + 'Label').html('Edit Pencipta '); 
    var act = '/admin/pencipta/ubah';
     $.post(act, {
            _token: token,
            id:id
        },
        function (data) { 
             // alert(data);
            $(modal + 'Isi').html(data);
        });
}   

function hapus_data_pencipta(token, id, idPencipta) 
{ 
    swal({
            title: "Yakin Untuk Menghapus Data Pencipta ?",
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
        function (isConfirm) {
            if (isConfirm) {
                var act = '/pencipta/' + id + '/hapus';
                $.post(act, {
                        _token: token
                    },
                    function (data) {
                        swal({
                                title: "Data Terhapus!",
                                text: "",
                                confirmButtonColor: "#4CAF50",
                                type: "success"
                            },
                            function (isConfirm) {
                                if (isConfirm) {
                                    div_tabel_data_pencipta(token, '#div_tabel_data_pencipta', idPencipta);
                                }
                            }); 
                    });
            }
        });
}


function tambah_modal_konsultan_paten(token, modal) {
    $(modal).modal('show');
    $(modal + 'Label').html('Tambah Master Data Konsultan Paten ');
    $(modal + 'Isi').html(loading);
    var act = '/admin/konsultan_paten/tambah_modal_konsultan_paten';
    $.post(act, {
        _token: token
    },
    function (data) {
        $(modal + 'Isi').html(data);
    });
}

function edit_modal_konsultan_paten(token,id,modal) {
    $(modal).modal('show');
    $(modal + 'Label').html('Edit Konsultan Paten '); 
    var act = '/admin/konsultan_paten/ubah';
     $.post(act, {
            _token: token,
            id:id
        },
        function (data) { 
             // alert(data);
            $(modal + 'Isi').html(data);
        });
}   

function hapus_data_konsultan_paten(token, id,idKonsultan) 
{ 
    swal({
            title: "Yakin Untuk Menghapus Data Konsultan Paten ?",
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
        function (isConfirm) {
            if (isConfirm) {
                var act = '/konsultan_paten/' + id + '/hapus';
                $.post(act, {
                        _token: token
                    },
                    function (data) {
                        swal({
                                title: "Data Terhapus!",
                                text: "",
                                confirmButtonColor: "#4CAF50",
                                type: "success"
                            },
                            function (isConfirm) {
                                if (isConfirm) {
                                div_tabel_data_konsultan_paten(token, '#div_tabel_data_konsultan_paten', idKonsultan);
                                }
                            }); 
                    });
            }
        });
} 

function tambah_modal_konsultan_merek(token, modal) {
    $(modal).modal('show');
    $(modal + 'Label').html('Tambah Master Data Konsultan Merek ');
    $(modal + 'Isi').html(loading);
    var act = '/admin/konsultan_merek/tambah_modal_konsultan_merek';
    $.post(act, {
        _token: token
    },
    function (data) {
        $(modal + 'Isi').html(data);
    });
}

function edit_modal_konsultan_merek(token,id,modal) {
    $(modal).modal('show');
    $(modal + 'Label').html('Edit Konsultan Merek '); 
    var act = '/admin/konsultan_merek/ubah';
     $.post(act, {
            _token: token,
            id:id
        },
        function (data) { 
             // alert(data);
            $(modal + 'Isi').html(data);
        });
}   

function hapus_data_konsultan_merek(token, id,idKonsultan) 
{ 
    swal({
            title: "Yakin Untuk Menghapus Data Konsultan Merek ?",
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
        function (isConfirm) {
            if (isConfirm) {
                var act = '/konsultan_merek/' + id + '/hapus';
                $.post(act, {
                        _token: token
                    },
                    function (data) {
                        swal({
                                title: "Data Terhapus!",
                                text: "",
                                confirmButtonColor: "#4CAF50",
                                type: "success"
                            },
                            function (isConfirm) {
                                if (isConfirm) {
                                div_tabel_data_konsultan_merek(token, '#div_tabel_data_konsultan_merek', idKonsultan);
                                }
                            }); 
                    });
            }
        });
}

function tambah_modal_konsultan_desain(token, modal) {
    $(modal).modal('show');
    $(modal + 'Label').html('Tambah Master Data Konsultan Desain Industri ');
    $(modal + 'Isi').html(loading);
    var act = '/admin/konsultan_desain/tambah_modal_konsultan_desain';
    $.post(act, {
        _token: token
    },
    function (data) {
        $(modal + 'Isi').html(data);
    });
}

function edit_modal_konsultan_desain(token,id,modal) {
    $(modal).modal('show');
    $(modal + 'Label').html('Edit Konsultan Desain Industri '); 
    var act = '/admin/konsultan_desain/ubah';
     $.post(act, {
            _token: token,
            id:id
        },
        function (data) { 
             // alert(data);
            $(modal + 'Isi').html(data);
        });
}   

function hapus_data_konsultan_desain(token, id,idKonsultan) 
{ 
    swal({
            title: "Yakin Untuk Menghapus Data Konsultan Desain Industri ?",
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
        function (isConfirm) {
            if (isConfirm) {
                var act = '/konsultan_desain/' + id + '/hapus';
                $.post(act, {
                        _token: token
                    },
                    function (data) {
                        swal({
                                title: "Data Terhapus!",
                                text: "",
                                confirmButtonColor: "#4CAF50",
                                type: "success"
                            },
                            function (isConfirm) {
                                if (isConfirm) {
                                div_tabel_data_konsultan_desain(token, '#div_tabel_data_konsultan_desain', idKonsultan);
                                }
                            }); 
                    });
            }
        });
}


function tambah_modal_konsultan_cipta(token, modal) {
    $(modal).modal('show');
    $(modal + 'Label').html('Tambah Master Data Konsultan Cipta ');
    $(modal + 'Isi').html(loading);
    var act = '/admin/konsultan_cipta/tambah_modal_konsultan_cipta';
    $.post(act, {
        _token: token
    },
    function (data) {
        $(modal + 'Isi').html(data);
    });
}

function edit_modal_konsultan_cipta(token,id,modal) {
    $(modal).modal('show');
    $(modal + 'Label').html('Edit Konsultan Cipta '); 
    var act = '/admin/konsultan_cipta/ubah';
     $.post(act, {
            _token: token,
            id:id
        },
        function (data) { 
             // alert(data);
            $(modal + 'Isi').html(data);
        });
}   

function hapus_data_konsultan_cipta(token, id, idKonsultan) 
{ 
    swal({
            title: "Yakin Untuk Menghapus Data Konsultan Cipta ?",
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
        function (isConfirm) {
            if (isConfirm) {
                var act = '/konsultan_cipta/' + id + '/hapus';
                $.post(act, {
                        _token: token
                    },
                    function (data) {
                        swal({
                                title: "Data Terhapus!",
                                text: "",
                                confirmButtonColor: "#4CAF50",
                                type: "success"
                            },
                            function (isConfirm) {
                                if (isConfirm) {
                                div_tabel_data_konsultan_cipta(token, '#div_tabel_data_konsultan_cipta', idKonsultan);
                                }
                            }); 
                    });
            }
        });
}

function tambah_modal_pendesain(token, modal) {
    $(modal).modal('show');
    $(modal + 'Label').html('Tambah Master Data Pendesain ');
    $(modal + 'Isi').html(loading);
    var act = '/admin/pendesain/tambah_modal_pendesain';
    $.post(act, {
        _token: token
    },
    function (data) {
        $(modal + 'Isi').html(data);
    });
}

function edit_modal_pendesain(token,id,modal) {
    $(modal).modal('show');
    $(modal + 'Label').html('Edit Pendesain '); 
    var act = '/admin/pendesain/ubah';
     $.post(act, {
            _token: token,
            id:id
        },
        function (data) { 
             // alert(data);
            $(modal + 'Isi').html(data);
        });
}   

function hapus_data_pendesain(token, id,idPendesain) 
{ 
    swal({
            title: "Yakin Untuk Menghapus Data Pendesain ?",
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
        function (isConfirm) {
            if (isConfirm) {
                var act = '/pendesain/' + id + '/hapus';
                $.post(act, {
                        _token: token
                    },
                    function (data) {
                        swal({
                                title: "Data Terhapus!",
                                text: "",
                                confirmButtonColor: "#4CAF50",
                                type: "success"
                            },
                            function (isConfirm) {
                                if (isConfirm) {
                                    div_tabel_data_pendesain(token, '#div_tabel_data_pendesain', idPendesain);
                                }
                            }); 
                    });
            }
        });
}

function tambah_modal_kelas_locarno(token, modal) {
    $(modal).modal('show');
    $(modal + 'Label').html('Tambah Master Data Kelas Locarno ');
    $(modal + 'Isi').html(loading);
    var act = '/admin/kelas_locarno/tambah_modal_kelas_locarno';
    $.post(act, {
        _token: token
    },
    function (data) {
        $(modal + 'Isi').html(data);
    });
}

function edit_modal_kelas_locarno(token,id,modal) {
    $(modal).modal('show');
    $(modal + 'Label').html('Edit Kelas Locarno '); 
    var act = '/admin/kelas_locarno/ubah';
     $.post(act, {
            _token: token,
            id:id
        },
        function (data) { 
             // alert(data);
            $(modal + 'Isi').html(data);
        });
}   

function hapus_data_kelas_locarno(token, id,idKelas_locarno) 
{ 
    swal({
            title: "Yakin Untuk Menghapus Data Kelas Locarno ?",
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
        function (isConfirm) {
            if (isConfirm) {
                var act = '/kelas_locarno/' + id + '/hapus';
                $.post(act, {
                        _token: token
                    },
                    function (data) {
                        swal({
                                title: "Data Terhapus!",
                                text: "",
                                confirmButtonColor: "#4CAF50",
                                type: "success"
                            },
                            function (isConfirm) {
                                if (isConfirm) {
                                div_tabel_data_kelas_locarno(token, '#div_tabel_data_kelas_locarno', idKelas_locarno);
                                }
                            }); 
                    });
            }
        });
}


function tambah_modal_jenis_ciptaan(token, modal) {
    $(modal).modal('show');
    $(modal + 'Label').html('Tambah Master Data Jenis Ciptaan ');
    $(modal + 'Isi').html(loading);
    var act = '/admin/jenis_ciptaan/tambah_modal_jenis_ciptaan';
    $.post(act, {
        _token: token
    },
    function (data) {
        $(modal + 'Isi').html(data);
    });
}

function edit_modal_jenis_ciptaan(token,id,modal) {
    $(modal).modal('show');
    $(modal + 'Label').html('Edit Jenis Ciptaan '); 
    var act = '/admin/jenis_ciptaan/ubah';
     $.post(act, {
            _token: token,
            id:id
        },
        function (data) { 
             // alert(data);
            $(modal + 'Isi').html(data);
        });
}   

function hapus_data_jenis_ciptaan(token, id,idJenis_ciptaan) 
{ 
    swal({
            title: "Yakin Untuk Menghapus Data Jenis Ciptaan ?",
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
        function (isConfirm) {
            if (isConfirm) {
                var act = '/jenis_ciptaan/' + id + '/hapus';
                $.post(act, {
                        _token: token
                    },
                    function (data) {
                        swal({
                                title: "Data Terhapus!",
                                text: "",
                                confirmButtonColor: "#4CAF50",
                                type: "success"
                            },
                            function (isConfirm) {
                                if (isConfirm) {
                                div_tabel_data_jenis_ciptaan(token, '#div_tabel_data_jenis_ciptaan', idJenis_ciptaan);
                                }
                            }); 
                    });
            }
        });
}


function tambah_modal_pemilik(token, modal) {
    $(modal).modal('show');
    $(modal + 'Label').html('Tambah Master Data Pemilik ');
    $(modal + 'Isi').html(loading);
    var act = '/admin/pemilik/tambah_modal_pemilik';
    $.post(act, {
        _token: token
    },
    function (data) {
        $(modal + 'Isi').html(data);
    });
}

function edit_modal_pemilik(token,id,modal) {
    $(modal).modal('show');
    $(modal + 'Label').html('Edit Pemilik '); 
    var act = '/admin/pemilik/ubah';
     $.post(act, {
            _token: token,
            id:id
        },
        function (data) { 
             // alert(data);
            $(modal + 'Isi').html(data);
        });
}   

function hapus_data_pemilik(token, id,idPemilik) 
{ 
    swal({
            title: "Yakin Untuk Menghapus Data Pemilik ?",
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
        function (isConfirm) {
            if (isConfirm) {
                var act = '/pemilik/' + id + '/hapus';
                $.post(act, {
                        _token: token
                    },
                    function (data) {
                        swal({
                                title: "Data Terhapus!",
                                text: "",
                                confirmButtonColor: "#4CAF50",
                                type: "success"
                            },
                            function (isConfirm) {
                                if (isConfirm) {
                                div_tabel_data_pemilik(token, '#div_tabel_data_pemilik', idPemilik);
                                }
                            }); 
                    });
            }
        });
}

function tambah_modal_paten(token, modal) { 
    $(modal).modal('show');
    $(modal + 'Label').html('Tambah Data Paten ');
    $(modal + 'Isi').html(loading);
    var act = '/admin/paten/tambah_modal_paten';
    $.post(act, {
        _token: token
    },
    function (data) {
        $(modal + 'Isi').html(data);
    });
}

function modal_isi_paten(token,id,modal) {
    $(modal).modal('show');
    $(modal + 'Label').html('Isi Data Paten'); 
    var act = '/admin/modal_isi_paten';
     $.post(act, {
            _token: token,
            id:id
        },
        function (data) { 
             // alert(data);
            $(modal + 'Isi').html(data);
        });
}   

function div_tabel_data_prioritas_paten(token, div1, id) { 
    $(div1).html(loading);
    var act = '/admin/' + id + '/div_tabel_data_prioritas_paten';
    $.post(act, {
        _token: token
    },
    function (data) {
        $(div1).html(data);
    });
}

function simpan_div_data_prioritas_paten(token, id, idBtn) {  
    var l = Ladda.create( document.querySelector(idBtn) );
    l.start(); 
    var act = '/admin/prioritas_paten/simpan_prioritas_paten';
    var id_form = $('#frmPrioritas_paten');
    $.post(act, {
        _token: token,
        nomor: id_form.find('input[name="nomor"]').val(),
        tanggal: id_form.find('input[name="tanggal"]').val(),
        countries_id: id_form.find('select[name="countries_id"]').val(),
        id:id
    },
    function (data) { 
        swal({
            title: data,
            text: "Data Berhasil Ditambahkan",
            confirmButtonColor: "#4CAF50",
            type: "success"
        },
        function (isConfirm) {
            if (isConfirm) {  
                l.stop();
                div_tabel_data_prioritas_paten(token, '#div_tabel_data_prioritas_paten', id);
            }
        });
    });
}

function hapus_data_paten(token, id) 
{ 
    swal({
            title: "Yakin Untuk Menghapus Data Paten?",
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
        function (isConfirm) {
            if (isConfirm) {
                var act = '/paten/' + id + '/hapus';
                $.post(act, {
                        _token: token
                    },
                    function (data) {
                        swal({
                                title: "Data Terhapus!",
                                text: "",
                                confirmButtonColor: "#4CAF50",
                                type: "success"
                            },
                            function (isConfirm) {
                                if (isConfirm) {
                                    location.reload();
                                }
                            }); 
                    });
            }
        });
}

function div_tabel_data_pemegang_paten(token, div1, id) { 
    $(div1).html(loading);
    var act = '/admin/' + id + '/div_tabel_data_pemegang_paten';
    $.post(act, {
        _token: token
    },
    function (data) {
        $(div1).html(data);
    });
}


function simpan_div_data_pemegang_paten(token, id, idBtn) {  
    var l = Ladda.create( document.querySelector(idBtn) );
    l.start(); 
    var act = '/admin/pemegang_paten/simpan_pemegang_paten';
    var id_form = $('#frmPemegang_paten');
    $.post(act, {
        _token: token,
        nama: id_form.find('input[name="nama"]').val(),
        alamat: id_form.find('textarea[name="alamat"]').val(),
        countries_id: id_form.find('select[name="countries_id"]').val(),
        id:id
    },
    function (data) { 
        swal({
            title: data,
            text: "Data Berhasil Ditambahkan",
            confirmButtonColor: "#4CAF50",
            type: "success"
        },
        function (isConfirm) {
            if (isConfirm) {  
                l.stop();
                div_tabel_data_pemegang_paten(token, '#div_tabel_data_pemegang_paten', id);
            }
        });
    });
}

function div_tabel_data_inventor(token, div1, id) { 
    $(div1).html(loading);
    var act = '/admin/' + id + '/div_tabel_data_inventor';
    $.post(act, {
        _token: token
    },
    function (data) {
        $(div1).html(data);
    });
}


function simpan_div_data_inventor(token, id, idBtn) {  
    var l = Ladda.create( document.querySelector(idBtn) );
    l.start(); 
    var act = '/admin/inventor/simpan_inventor';
    var id_form = $('#frmInventor');
    $.post(act, {
        _token: token,
        nama: id_form.find('input[name="nama"]').val(),
        nomor_telepon: id_form.find('input[name="nomor_telepon"]').val(),
        email: id_form.find('input[name="email"]').val(),
        alamat_inventor: id_form.find('textarea[name="alamat_inventor"]').val(),
        countries_id: id_form.find('select[name="countries_id"]').val(),
        id:id
    },
    function (data) { 
        swal({
            title: data,
            text: "Data Berhasil Ditambahkan",
            confirmButtonColor: "#4CAF50",
            type: "success"
        },
        function (isConfirm) {
            if (isConfirm) {  
                l.stop();
                div_tabel_data_inventor(token, '#div_tabel_data_inventor', id);
            }
        });
    });
}

function div_tabel_data_konsultan_paten(token, div1, id) { 
    $(div1).html(loading);
    var act = '/admin/' + id + '/div_tabel_data_konsultan_paten';
    $.post(act, {
        _token: token
    },
    function (data) {
        $(div1).html(data);
    });
}


function simpan_div_data_konsultan_paten(token, id, idBtn) { 
    var l = Ladda.create( document.querySelector(idBtn) ); 
    l.start(); 
    var act = '/admin/konsultan_paten/simpan_konsultan_paten';
    var id_form = $('#frmKonsultan_paten');
    $.post(act, {
        _token: token,
        nama: id_form.find('input[name="nama"]').val(),
        alamat: id_form.find('textarea[name="alamat"]').val(),
        countries_id: id_form.find('select[name="countries_id"]').val(),
        id:id
    },
    function (data) { 
        swal({
            title: data,
            text: "Data Berhasil Ditambahkan",
            confirmButtonColor: "#4CAF50",
            type: "success"
        },
        function (isConfirm) {
            if (isConfirm) {  
                l.stop();
                div_tabel_data_konsultan_paten(token, '#div_tabel_data_konsultan_paten', id);
            }
        });
    });
}
function div_tabel_data_ipc_paten(token, div1, id) { 
    $(div1).html(loading);
    var act = '/admin/' + id + '/div_tabel_data_ipc_paten';
    $.post(act, {
        _token: token
    },
    function (data) {
        $(div1).html(data);
    });
}


function simpan_div_data_ipc_paten(token, id, idBtn) {  
    var l = Ladda.create( document.querySelector(idBtn) );
    l.start(); 
    var act = '/admin/ipc_paten/simpan_ipc_paten';
    var id_form = $('#frmIpc_paten');
    $.post(act, {
        _token: token,
        kode: id_form.find('input[name="kode"]').val(),
        nama: id_form.find('input[name="nama"]').val(), 
        id:id
    },
    function (data) { 
        swal({
            title: data,
            text: "Data Berhasil Ditambahkan",
            confirmButtonColor: "#4CAF50",
            type: "success"
        },
        function (isConfirm) {
            if (isConfirm) {  
                l.stop();
                div_tabel_data_ipc_paten(token, '#div_tabel_data_ipc_paten', id);
            }
        });
    });
}

function hapus_data_ipc_paten(token, id,idIpc) 
{ 
    swal({
            title: "Yakin Untuk Menghapus Data Konsultan Paten ?",
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
        function (isConfirm) {
            if (isConfirm) {
                var act = '/ipc_paten/' + id + '/hapus';
                $.post(act, {
                        _token: token
                    },
                    function (data) {
                        swal({
                                title: "Data Terhapus!",
                                text: "",
                                confirmButtonColor: "#4CAF50",
                                type: "success"
                            },
                            function (isConfirm) {
                                if (isConfirm) {
                                div_tabel_data_ipc_paten(token, '#div_tabel_data_ipc_paten', idIpc);
                                }
                            }); 
                    });
            }
        });
}

function edit_modal_paten(token,id,modal) {
    $(modal).modal('show');
    $(modal + 'Label').html('Edit Paten '); 
    var act = '/admin/paten/ubah';
     $.post(act, {
            _token: token,
            id:id
        },
        function (data) { 
             // alert(data);
            $(modal + 'Isi').html(data);
        });
}   

function detail_modal_paten(token,id,modal) {
    $(modal).modal('show');
    $(modal + 'Label').html('Detail Paten '); 
    var act = '/admin/paten/detail';
     $.post(act, {
            _token: token,
            id:id
        },
        function (data) { 
             // alert(data);
            $(modal + 'Isi').html(data);
        });
}   

function tambah_modal_merek(token, modal) {
    $(modal).modal('show');
    $(modal + 'Label').html('Tambah Data Merek ');
    $(modal + 'Isi').html(loading);
    var act = '/admin/merek/tambah_modal_merek';
    $.post(act, {
        _token: token
    },
    function (data) {
        $(modal + 'Isi').html(data);
    });
}

function modal_isi_merek(token,id,modal) {
    $(modal).modal('show');
    $(modal + 'Label').html('Isi Data Merek'); 
    var act = '/admin/modal_isi_merek';
     $.post(act, {
            _token: token,
            id:id
        },
        function (data) { 
             // alert(data);
            $(modal + 'Isi').html(data);
        });
} 

function edit_modal_merek(token,id,modal) {
    $(modal).modal('show');
    $(modal + 'Label').html('Edit Merek '); 
    var act = '/admin/merek/ubah';
     $.post(act, {
            _token: token,
            id:id
        },
        function (data) { 
             // alert(data);
            $(modal + 'Isi').html(data);
        });
} 
function hapus_data_merek(token, id) 
{ 
    swal({
            title: "Yakin Untuk Menghapus Data Merek?",
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
        function (isConfirm) {
            if (isConfirm) {
                var act = '/merek/' + id + '/hapus';
                $.post(act, {
                        _token: token
                    },
                    function (data) {
                        swal({
                                title: "Data Terhapus!",
                                text: "",
                                confirmButtonColor: "#4CAF50",
                                type: "success"
                            },
                            function (isConfirm) {
                                if (isConfirm) {
                                    location.reload();
                                }
                            }); 
                    });
            }
        });
}

function div_tabel_data_prioritas_merek(token, div1, id) { 
    $(div1).html(loading);
    var act = '/admin/' + id + '/div_tabel_data_prioritas_merek';
    $.post(act, {
        _token: token
    },
    function (data) {
        $(div1).html(data);
    });
}

function simpan_div_data_prioritas_merek(token, id, idBtn) {  
    var l = Ladda.create( document.querySelector(idBtn) );
    l.start(); 
    var act = '/admin/prioritas_merek/simpan_prioritas_merek';
    var id_form = $('#frmPrioritas_merek');
    $.post(act, {
        _token: token,
        nomor: id_form.find('input[name="nomor"]').val(),
        tanggal: id_form.find('input[name="tanggal"]').val(),
        countries_id: id_form.find('select[name="countries_id"]').val(),
        id:id
    },
    function (data) { 
        swal({
            title: data,
            text: "Data Berhasil Ditambahkan",
            confirmButtonColor: "#4CAF50",
            type: "success"
        },
        function (isConfirm) {
            if (isConfirm) {  
                l.stop();
                div_tabel_data_prioritas_merek(token, '#div_tabel_data_prioritas_merek', id);
            }
        });
    });
}
function div_tabel_data_kelas(token, div1, id) { 
    $(div1).html(loading);
    var act = '/admin/' + id + '/div_tabel_data_kelas';
    $.post(act, {
        _token: token
    },
    function (data) {
        $(div1).html(data);
    });
}

function simpan_div_data_kelas(token, id, idBtn) {  
    var l = Ladda.create( document.querySelector(idBtn) );
    l.start(); 
    var act = '/admin/kelas/simpan_kelas';
    var id_form = $('#frmKelas');
    $.post(act, {
        _token: token,
        kode: id_form.find('input[name="kode"]').val(),
        jenis: id_form.find('textarea[name="jenis"]').val(),
        id:id
    },
    function (data) { 
        swal({
            title: data,
            text: "Data Berhasil Ditambahkan",
            confirmButtonColor: "#4CAF50",
            type: "success"
        },
        function (isConfirm) {
            if (isConfirm) {  
                l.stop();
                div_tabel_data_kelas(token, '#div_tabel_data_kelas', id);
            }
        });
    });
}


function div_tabel_data_pemilik(token, div1, id) { 
    $(div1).html(loading);
    var act = '/admin/' + id + '/div_tabel_data_pemilik';
    $.post(act, {
        _token: token
    },
    function (data) {
        $(div1).html(data);
    });
}

function simpan_div_data_pemilik(token, id, idBtn) {  
    var l = Ladda.create( document.querySelector(idBtn) );
    l.start(); 
    var act = '/admin/pemilik/simpan_pemilik';
    var id_form = $('#frmPemilik');
    $.post(act, {
        _token: token,
        nama: id_form.find('input[name="nama"]').val(),
        alamat: id_form.find('textarea[name="alamat"]').val(),
        countries_id: id_form.find('select[name="countries_id"]').val(),
        id:id
    },
    function (data) { 
        swal({
            title: data,
            text: "Data Berhasil Ditambahkan",
            confirmButtonColor: "#4CAF50",
            type: "success"
        },
        function (isConfirm) {
            if (isConfirm) {  
                l.stop();
                div_tabel_data_pemilik(token, '#div_tabel_data_pemilik', id);
            }
        });
    });
}
function div_tabel_data_konsultan_merek(token, div1, id) { 
    $(div1).html(loading);
    var act = '/admin/' + id + '/div_tabel_data_konsultan_merek';
    $.post(act, {
        _token: token
    },
    function (data) {
        $(div1).html(data);
    });
}


function simpan_div_data_konsultan_merek(token, id, idBtn) { 
    var l = Ladda.create( document.querySelector(idBtn) ); 
    l.start(); 
    var act = '/admin/konsultan_merek/simpan_konsultan_merek';
    var id_form = $('#frmKonsultan_merek');
    $.post(act, {
        _token: token,
        nama: id_form.find('input[name="nama"]').val(),
        alamat: id_form.find('textarea[name="alamat"]').val(),
        countries_id: id_form.find('select[name="countries_id"]').val(),
        id:id
    },
    function (data) { 
        swal({
            title: data,
            text: "Data Berhasil Ditambahkan",
            confirmButtonColor: "#4CAF50",
            type: "success"
        },
        function (isConfirm) {
            if (isConfirm) {  
                l.stop();
                div_tabel_data_konsultan_merek(token, '#div_tabel_data_konsultan_merek', id);
            }
        });
    });
}


function tambah_modal_cipta(token, modal) {
    $(modal).modal('show');
    $(modal + 'Label').html('Tambah Data Hak Cipta ');
    $(modal + 'Isi').html(loading);
    var act = '/admin/cipta/tambah_modal_cipta';
    $.post(act, {
        _token: token
    },
    function (data) {
        $(modal + 'Isi').html(data);
    });
}

function modal_isi_cipta(token,id,modal) {
    $(modal).modal('show');
    $(modal + 'Label').html('Isi Data Hak Cipta'); 
    var act = '/admin/modal_isi_cipta';
     $.post(act, {
            _token: token,
            id:id
        },
        function (data) { 
             // alert(data);
            $(modal + 'Isi').html(data);
        });
} 

function edit_modal_cipta(token,id,modal) {
    $(modal).modal('show');
    $(modal + 'Label').html('Edit Hak Cipta '); 
    var act = '/admin/cipta/ubah';
     $.post(act, {
            _token: token,
            id:id
        },
        function (data) { 
             // alert(data);
            $(modal + 'Isi').html(data);
        });
} 
function hapus_data_cipta(token, id) 
{ 
    swal({
            title: "Yakin Untuk Menghapus Data Hak Cipta?",
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
        function (isConfirm) {
            if (isConfirm) {
                var act = '/cipta/' + id + '/hapus';
                $.post(act, {
                        _token: token
                    },
                    function (data) {
                        swal({
                                title: "Data Terhapus!",
                                text: "",
                                confirmButtonColor: "#4CAF50",
                                type: "success"
                            },
                            function (isConfirm) {
                                if (isConfirm) {
                                    location.reload();
                                }
                            }); 
                    });
            }
        });
}

function div_tabel_data_pemegang_cipta(token, div1, id) { 
    $(div1).html(loading);
    var act = '/admin/' + id + '/div_tabel_data_pemegang_cipta';
    $.post(act, {
        _token: token
    },
    function (data) {
        $(div1).html(data);
    });
}


function simpan_div_data_pemegang_cipta(token, id, idBtn) {  
    var l = Ladda.create( document.querySelector(idBtn) );
    l.start(); 
    var act = '/admin/pemegang_cipta/simpan_pemegang_cipta';
    var id_form = $('#frmPemegang_cipta');
    $.post(act, {
        _token: token,
        nama: id_form.find('input[name="nama"]').val(),
        alamat: id_form.find('textarea[name="alamat"]').val(),
        countries_id: id_form.find('select[name="countries_id"]').val(),
        id:id
    },
    function (data) { 
        swal({
            title: data,
            text: "Data Berhasil Ditambahkan",
            confirmButtonColor: "#4CAF50",
            type: "success"
        },
        function (isConfirm) {
            if (isConfirm) {  
                l.stop();
                div_tabel_data_pemegang_cipta(token, '#div_tabel_data_pemegang_cipta', id);
            }
        });
    });
}


function div_tabel_data_jenis_ciptaan(token, div1, id) { 
    $(div1).html(loading);
    var act = '/admin/' + id + '/div_tabel_data_jenis_ciptaan';
    $.post(act, {
        _token: token
    },
    function (data) {
        $(div1).html(data);
    });
}


function simpan_div_data_jenis_ciptaan(token, id, idBtn) {  
    var l = Ladda.create( document.querySelector(idBtn) );
    l.start(); 
    var act = '/admin/jenis_ciptaan/simpan_jenis_ciptaan';
    var id_form = $('#frmJenis_ciptaan');
    $.post(act, {
        _token: token,
        kode: id_form.find('input[name="kode"]').val(),
        keterangan: id_form.find('textarea[name="keterangan"]').val(),
        id:id
    },
    function (data) { 
        swal({
            title: data,
            text: "Data Berhasil Ditambahkan",
            confirmButtonColor: "#4CAF50",
            type: "success"
        },
        function (isConfirm) {
            if (isConfirm) {  
                l.stop();
                div_tabel_data_jenis_ciptaan(token, '#div_tabel_data_jenis_ciptaan', id);
            }
        });
    });
}

function div_tabel_data_pencipta(token, div1, id) { 
    $(div1).html(loading);
    var act = '/admin/' + id + '/div_tabel_data_pencipta';
    $.post(act, {
        _token: token
    },
    function (data) {
        $(div1).html(data);
    });
}

function simpan_div_data_pencipta(token, id, idBtn) {  
    var l = Ladda.create( document.querySelector(idBtn) );
    l.start(); 
    var act = '/admin/pencipta/simpan_pencipta';
    var id_form = $('#frmPencipta');
    $.post(act, {
        _token: token,
        nama: id_form.find('input[name="nama"]').val(),
        alamat: id_form.find('textarea[name="alamat"]').val(),
        countries_id: id_form.find('select[name="countries_id"]').val(),
        id:id
    },
    function (data) { 
        swal({
            title: data,
            text: "Data Berhasil Ditambahkan",
            confirmButtonColor: "#4CAF50",
            type: "success"
        },
        function (isConfirm) {
            if (isConfirm) {  
                l.stop();
                div_tabel_data_pencipta(token, '#div_tabel_data_pencipta', id);
            }
        });
    });
}

function div_tabel_data_konsultan_cipta(token, div1, id) { 
    $(div1).html(loading);
    var act = '/admin/' + id + '/div_tabel_data_konsultan_cipta';
    $.post(act, {
        _token: token
    },
    function (data) {
        $(div1).html(data);
    });
}


function simpan_div_data_konsultan_cipta(token, id, idBtn) { 
    var l = Ladda.create( document.querySelector(idBtn) ); 
    l.start(); 
    var act = '/admin/konsultan_cipta/simpan_konsultan_cipta';
    var id_form = $('#frmKonsultan_cipta');
    $.post(act, {
        _token: token,
        nama: id_form.find('input[name="nama"]').val(),
        alamat: id_form.find('textarea[name="alamat"]').val(),
        countries_id: id_form.find('select[name="countries_id"]').val(),
        id:id
    },
    function (data) { 
        swal({
            title: data,
            text: "Data Berhasil Ditambahkan",
            confirmButtonColor: "#4CAF50",
            type: "success"
        },
        function (isConfirm) {
            if (isConfirm) {  
                l.stop();
                div_tabel_data_konsultan_cipta(token, '#div_tabel_data_konsultan_cipta', id);
            }
        });
    });
}
function div_tabel_data_upload_paten(token, div1, id) { 
    $(div1).html(loading);
    var act = '/admin/' + id + '/div_tabel_data_upload_paten';
    $.post(act, {
        _token: token
    },
    function (data) {
        $(div1).html(data);
    });
}

function hapus_upload_data_paten(token, id,id_data_upload_paten,target) 
{
    swal({
            title: "Anda yakin menghapus data ini ?",
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
        function (isConfirm) {
            if (isConfirm) {
                var act = '/admin/data_upload_paten/hapus';
                $.post(act, {
                        _token: token,
                        id:id
                    },
                    function (data) {
                        swal({
                                title: "Data Terhapus!",
                                text: "",
                                confirmButtonColor: "#4CAF50",
                                type: "success"
                            },
                            function (isConfirm) {
                                if (isConfirm) {
                                    div_tabel_data_upload_paten(token,target,id_data_upload_paten);
                                }
                            });
                    });
            }
        })
}
function div_tabel_data_upload_merek(token, div1, id) { 
    $(div1).html(loading);
    var act = '/admin/' + id + '/div_tabel_data_upload_merek';
    $.post(act, {
        _token: token
    },
    function (data) {
        $(div1).html(data);
    });
}

function hapus_upload_data_merek(token, id,id_data_upload_merek,target) 
{
    swal({
            title: "Anda yakin menghapus data ini ?",
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
        function (isConfirm) {
            if (isConfirm) {
                var act = '/admin/data_upload_merek/hapus';
                $.post(act, {
                        _token: token,
                        id:id
                    },
                    function (data) {
                        swal({
                                title: "Data Terhapus!",
                                text: "",
                                confirmButtonColor: "#4CAF50",
                                type: "success"
                            },
                            function (isConfirm) {
                                if (isConfirm) {
                                    div_tabel_data_upload_merek(token,target,id_data_upload_merek);
                                }
                            });
                    });
            }
        })
}

function div_tabel_data_upload_cipta(token, div1, id) { 
    $(div1).html(loading);
    var act = '/admin/' + id + '/div_tabel_data_upload_cipta';
    $.post(act, {
        _token: token
    },
    function (data) {
        $(div1).html(data);
    });
}

function hapus_upload_data_cipta(token, id,id_data_upload_cipta,target) 
{
    swal({
            title: "Anda yakin menghapus data ini ?",
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
        function (isConfirm) {
            if (isConfirm) {
                var act = '/admin/data_upload_cipta/hapus';
                $.post(act, {
                        _token: token,
                        id:id
                    },
                    function (data) {
                        swal({
                                title: "Data Terhapus!",
                                text: "",
                                confirmButtonColor: "#4CAF50",
                                type: "success"
                            },
                            function (isConfirm) {
                                if (isConfirm) {
                                    div_tabel_data_upload_cipta(token,target,id_data_upload_cipta);
                                }
                            });
                    });
            }
        })
}

function tambah_modal_desain(token, modal) {
    $(modal).modal('show');
    $(modal + 'Label').html('Tambah Data Desain Industri ');
    $(modal + 'Isi').html(loading);
    var act = '/admin/desain/tambah_modal_desain';
    $.post(act, {
        _token: token
    },
    function (data) {
        $(modal + 'Isi').html(data);
    });
}

function modal_isi_desain(token,id,modal) {
    $(modal).modal('show');
    $(modal + 'Label').html('Isi Data Desain Industri'); 
    var act = '/admin/modal_isi_desain';
     $.post(act, {
            _token: token,
            id:id
        },
        function (data) { 
             // alert(data);
            $(modal + 'Isi').html(data);
        });
} 

function edit_modal_desain(token,id,modal) {
    $(modal).modal('show');
    $(modal + 'Label').html('Edit Desain Industri '); 
    var act = '/admin/desain/ubah';
     $.post(act, {
            _token: token,
            id:id
        },
        function (data) { 
             // alert(data);
            $(modal + 'Isi').html(data);
        });
} 
function hapus_data_desain(token, id) 
{ 
    swal({
            title: "Yakin Untuk Menghapus Data Desain Industri?",
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
        function (isConfirm) {
            if (isConfirm) {
                var act = '/desain/' + id + '/hapus';
                $.post(act, {
                        _token: token
                    },
                    function (data) {
                        swal({
                                title: "Data Terhapus!",
                                text: "",
                                confirmButtonColor: "#4CAF50",
                                type: "success"
                            },
                            function (isConfirm) {
                                if (isConfirm) {
                                    location.reload();
                                }
                            }); 
                    });
            }
        });
}

function detail_modal_desain(token,id,modal) {
    $(modal).modal('show');
    $(modal + 'Label').html('Detail Desain Industri '); 
    var act = '/admin/desain/detail';
     $.post(act, {
            _token: token,
            id:id
        },
        function (data) { 
             // alert(data);
            $(modal + 'Isi').html(data);
        });
} 

function modal_isi_desain(token,id,modal) {
    $(modal).modal('show');
    $(modal + 'Label').html('Isi Data Desain'); 
    var act = '/admin/modal_isi_desain';
     $.post(act, {
            _token: token,
            id:id
        },
        function (data) { 
             // alert(data);
            $(modal + 'Isi').html(data);
        });
}   

function div_tabel_data_kelas_locarno(token, div1, id) { 
    $(div1).html(loading);
    var act = '/admin/' + id + '/div_tabel_data_kelas_locarno';
    $.post(act, {
        _token: token
    },
    function (data) {
        $(div1).html(data);
    });
}

function simpan_div_data_kelas_locarno(token, id, idBtn) {  
    var l = Ladda.create( document.querySelector(idBtn) );
    l.start(); 
    var act = '/admin/kelas_locarno/simpan_kelas_locarno';
    var id_form = $('#frmKelas_locarno');
    $.post(act, {
        _token: token,
        kode: id_form.find('input[name="kode"]').val(),
        keterangan: id_form.find('input[name="keterangan"]').val(),
        id:id
    },
    function (data) { 
        swal({
            title: data,
            text: "Data Berhasil Ditambahkan",
            confirmButtonColor: "#4CAF50",
            type: "success"
        },
        function (isConfirm) {
            if (isConfirm) {  
                l.stop();
                div_tabel_data_kelas_locarno(token, '#div_tabel_data_kelas_locarno', id);
            }
        });
    });
}


function div_tabel_data_prioritas_desain(token, div1, id) { 
    $(div1).html(loading);
    var act = '/admin/' + id + '/div_tabel_data_prioritas_desain';
    $.post(act, {
        _token: token
    },
    function (data) {
        $(div1).html(data);
    });
}

function simpan_div_data_prioritas_desain(token, id, idBtn) {  
    var l = Ladda.create( document.querySelector(idBtn) );
    l.start(); 
    var act = '/admin/prioritas_desain/simpan_prioritas_desain';
    var id_form = $('#frmPrioritas_desain');
    $.post(act, {
        _token: token,
        nomor: id_form.find('input[name="nomor"]').val(),
        tanggal: id_form.find('input[name="tanggal"]').val(),
        countries_id: id_form.find('select[name="countries_id"]').val(),
        id:id
    },
    function (data) { 
        swal({
            title: data,
            text: "Data Berhasil Ditambahkan",
            confirmButtonColor: "#4CAF50",
            type: "success"
        },
        function (isConfirm) {
            if (isConfirm) {  
                l.stop();
                div_tabel_data_prioritas_desain(token, '#div_tabel_data_prioritas_desain', id);
            }
        });
    });
}
function div_tabel_data_pemegang_desain(token, div1, id) { 
    $(div1).html(loading);
    var act = '/admin/' + id + '/div_tabel_data_pemegang_desain';
    $.post(act, {
        _token: token
    },
    function (data) {
        $(div1).html(data);
    });
}


function simpan_div_data_pemegang_desain(token, id, idBtn) {  
    var l = Ladda.create( document.querySelector(idBtn) );
    l.start(); 
    var act = '/admin/pemegang_desain/simpan_pemegang_desain';
    var id_form = $('#frmPemegang_desain');
    $.post(act, {
        _token: token,
        nama: id_form.find('input[name="nama"]').val(),
        alamat: id_form.find('textarea[name="alamat"]').val(),
        countries_id: id_form.find('select[name="countries_id"]').val(),
        id:id
    },
    function (data) { 
        swal({
            title: data,
            text: "Data Berhasil Ditambahkan",
            confirmButtonColor: "#4CAF50",
            type: "success"
        },
        function (isConfirm) {
            if (isConfirm) {  
                l.stop();
                div_tabel_data_pemegang_desain(token, '#div_tabel_data_pemegang_desain', id);
            }
        });
    });
}
function div_tabel_data_pendesain(token, div1, id) { 
    $(div1).html(loading);
    var act = '/admin/' + id + '/div_tabel_data_pendesain';
    $.post(act, {
        _token: token
    },
    function (data) {
        $(div1).html(data);
    });
}

function simpan_div_data_pendesain(token, id, idBtn) {  
    var l = Ladda.create( document.querySelector(idBtn) );
    l.start(); 
    var act = '/admin/pendesain/simpan_pendesain';
    var id_form = $('#frmPendesain');
    $.post(act, {
        _token: token,
        nama: id_form.find('input[name="nama"]').val(),
        alamat: id_form.find('textarea[name="alamat"]').val(),
        countries_id: id_form.find('select[name="countries_id"]').val(),
        id:id
    },
    function (data) { 
        swal({
            title: data,
            text: "Data Berhasil Ditambahkan",
            confirmButtonColor: "#4CAF50",
            type: "success"
        },
        function (isConfirm) {
            if (isConfirm) {  
                l.stop();
                div_tabel_data_pendesain(token, '#div_tabel_data_pendesain', id);
            }
        });
    });
}

function div_tabel_data_konsultan_desain(token, div1, id) { 
    $(div1).html(loading);
    var act = '/admin/' + id + '/div_tabel_data_konsultan_desain';
    $.post(act, {
        _token: token
    },
    function (data) {
        $(div1).html(data);
    });
}


function simpan_div_data_konsultan_desain(token, id, idBtn) { 
    var l = Ladda.create( document.querySelector(idBtn) ); 
    l.start(); 
    var act = '/admin/konsultan_desain/simpan_konsultan_desain';
    var id_form = $('#frmKonsultan_desain');
    $.post(act, {
        _token: token,
        nama: id_form.find('input[name="nama"]').val(),
        alamat: id_form.find('textarea[name="alamat"]').val(),
        countries_id: id_form.find('select[name="countries_id"]').val(),
        id:id
    },
    function (data) { 
        swal({
            title: data,
            text: "Data Berhasil Ditambahkan",
            confirmButtonColor: "#4CAF50",
            type: "success"
        },
        function (isConfirm) {
            if (isConfirm) {  
                l.stop();
                div_tabel_data_konsultan_desain(token, '#div_tabel_data_konsultan_desain', id);
            }
        });
    });
}

function div_tabel_data_upload_desain(token, div1, id) { 
    $(div1).html(loading);
    var act = '/admin/' + id + '/div_tabel_data_upload_desain';
    $.post(act, {
        _token: token
    },
    function (data) {
        $(div1).html(data);
    });
}

function hapus_upload_data_desain(token, id,id_data_upload_desain,target) 
{
    swal({
            title: "Anda yakin menghapus data ini ?",
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
        function (isConfirm) {
            if (isConfirm) {
                var act = '/admin/data_upload_desain/hapus';
                $.post(act, {
                        _token: token,
                        id:id
                    },
                    function (data) {
                        swal({
                                title: "Data Terhapus!",
                                text: "",
                                confirmButtonColor: "#4CAF50",
                                type: "success"
                            },
                            function (isConfirm) {
                                if (isConfirm) {
                                    div_tabel_data_upload_desain(token,target,id_data_upload_desain);
                                }
                            });
                    });
            }
        })
}

function detail_modal_merek(token,id,modal) {
    $(modal).modal('show');
    $(modal + 'Label').html('Detail Merek '); 
    var act = '/admin/merek/detail';
     $.post(act, {
            _token: token,
            id:id
        },
        function (data) { 
             // alert(data);
            $(modal + 'Isi').html(data);
        });
}   

function detail_modal_cipta(token,id,modal) {
    $(modal).modal('show');
    $(modal + 'Label').html('Detail Cipta '); 
    var act = '/admin/cipta/detail';
     $.post(act, {
            _token: token,
            id:id
        },
        function (data) { 
             // alert(data);
            $(modal + 'Isi').html(data);
        });
}  

function stat_verif_tidak_dibiayai(token, id) {
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
    function (isConfirm) {
        if (isConfirm) {
            var public_path = $('#public_path').val(); /* di layouts */  
            var act = '/admin/verif_tidak_biayai/kirim';
            $.post(act, {
                _token: token,
                id: id
            },
            function (data) {
                if (data == 'success') {
                    swal({
                        title: "Data Berhasil Dibiayai!",
                        text: "",
                        confirmButtonColor: "#4CAF50",
                        type: "success"
                    },
                    function (isConfirm) {
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

function modal_verif_paten_belum_biaya(token,id,modal) {
    $(modal).modal('show');
    $(modal + 'Label').html('Verifikasi Pembiayaan '); 
    var act = '/admin/modal_verif_paten_belum_biaya';
     $.post(act, {
            _token: token,
            id:id
        },
        function (data) { 
             // alert(data);
            $(modal + 'Isi').html(data);
        });
}  


function stat_verif_tidak_dibiayai(token, id) {
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
    function (isConfirm) {
        if (isConfirm) {
            var public_path = $('#public_path').val(); /* di layouts */  
            var act = '/admin/verif_tidak_biayai/kirim';
            $.post(act, {
                _token: token,
                id: id
            },
            function (data) {
                if (data == 'success') {
                    swal({
                        title: "Data Berhasil Dibiayai!",
                        text: "",
                        confirmButtonColor: "#4CAF50",
                        type: "success"
                    },
                    function (isConfirm) {
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

function modal_verif_cipta_belum_biaya(token,id,modal) {
    $(modal).modal('show');
    $(modal + 'Label').html('Verifikasi Pembiayaan '); 
    var act = '/admin/modal_verif_cipta_belum_biaya';
     $.post(act, {
            _token: token,
            id:id
        },
        function (data) { 
             // alert(data);
            $(modal + 'Isi').html(data);
        });
}  

function div_grafik_paten(token, target){ 
    $(target).html(loading);
    var act = '/admin/grafik_paten';
    $.post(act, {
        _token: token 
    },
    function (data1) {
        //alert(data1);
        $(target).html(data1);
    });  
}

function div_grafik_cipta(token, target){ 
    $(target).html(loading);
    var act = '/admin/grafik_cipta';
    $.post(act, {
        _token: token 
    },
    function (data1) {
        //alert(data1);
        $(target).html(data1);
    });  
}

function modal_detail_user(token,id,modal) {
    $(modal).modal('show');
    $(modal + 'Label').html('Detail User '); 
    var act = '/admin/detail_user';
     $.post(act, {
            _token: token,
            id:id
        },
        function (data) { 
             // alert(data);
            $(modal + 'Isi').html(data);
        });
}

function edit_modal_sliders(token,id,modal) {
    $(modal).modal('show');
    $(modal + 'Label').html('Edit Sliders'); 
    var act = '/admin/sliders/ubah';
     $.post(act, {
            _token: token,
            id:id
        },
        function (data) { 
             // alert(data);
            $(modal + 'Isi').html(data);
        });
}   


function tambah_modal_user(token, modal) {
    $(modal).modal('show');
    $(modal + 'Label').html('Tambah Master Data User');
    $(modal + 'Isi').html(loading);
    var act = '/admin/master_user/tambah_modal_master_user';
    $.post(act, {
        _token: token
    },
    function (data) {
        $(modal + 'Isi').html(data);
    });
}

function hapus_data_user(token, id) 
{ 
    swal({
            title: "Yakin Untuk Menghapus Data User?",
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
        function (isConfirm) {
            if (isConfirm) {
                var act = '/master_user/' + id + '/hapus';
                $.post(act, {
                        _token: token
                    },
                    function (data) {
                        swal({
                                title: "Data Terhapus!",
                                text: "",
                                confirmButtonColor: "#4CAF50",
                                type: "success"
                            },
                            function (isConfirm) {
                                if (isConfirm) {
                                    location.reload();
                                }
                            }); 
                    });
            }
        });
}
// -- END HERE -- 

// NEW CODE REMAKE HAKI  31-05-2021
function div_jenis_ciptaan(token,target,form_id)
{ 
    var jenis_ciptaan_id = $(form_id).find('select[name="jenis_ciptaan_id"] option:selected').val(); 
    var act ='/landing_page/drafting_cipta/div_jenis_ciptaan';
    
    $(form_id).find('#sub_jenis_ciptaan_id').html('<option value="">Waiting Data ...</option>');
     $.post(act, {
            _token: token,
            jenis_ciptaan_id: jenis_ciptaan_id
        },
        function (data) {  
            $(form_id).find('#sub_jenis_ciptaan_id').html(data);
            $(form_id).find('#sub_jenis_ciptaan_id').trigger('change');
        });
}

function clickAddListPencipta(token, form_id){
var id_form = $(form_id);
    var nama_pencipta = id_form.find('input[name="nama_pencipta"]').val();
    var kewarganegaraan_pencipta = id_form.find('select[name="kewarganegaraan_pencipta"] option:selected').val();
    var alamat_pencipta = id_form.find('textarea[name="alamat_pencipta"]').val();
    var kota_pencipta = id_form.find('input[name="kota_pencipta"]').val();
    var kode_pos_pencipta = id_form.find('input[name="kode_pos_pencipta"]').val();
    var negara_pencipta = id_form.find('select[name="negara_pencipta"] option:selected').val(); 
    var provinsi_pencipta = id_form.find('select[name="provinsi_pencipta"] option:selected').val(); 
    if (nama_pencipta == '' || kewarganegaraan_pencipta == '' || alamat_pencipta == '') {
        alert('Gagal!!!', 'Data Produk Belum Lengkap.');
    } else {
        $.post('/click/add/list-pencipta', {
            _token: token,
            nama_pencipta: nama_pencipta,
            kewarganegaraan_pencipta: kewarganegaraan_pencipta,
            alamat_pencipta: alamat_pencipta,
            kota_pencipta: kota_pencipta,
            kode_pos_pencipta: kode_pos_pencipta,
            negara_pencipta: negara_pencipta,
            provinsi_pencipta: provinsi_pencipta,
            form_id: form_id, 
            arr_nama_pencipta: id_form.find('input[name="arr_nama_pencipta[]"]').serializeArray(),
            arr_kewarganegaraan_pencipta: id_form.find('input[name="arr_kewarganegaraan_pencipta[]"]').serializeArray(),
            arr_alamat_pencipta: id_form.find('input[name="arr_alamat_pencipta[]"]').serializeArray(),
            arr_kota_pencipta: id_form.find('input[name="arr_kota_pencipta[]"]').serializeArray(),
            arr_kode_pos_pencipta: id_form.find('input[name="arr_kode_pos_pencipta[]"]').serializeArray(),
            arr_negara_pencipta: id_form.find('input[name="arr_negara_pencipta[]"]').serializeArray(),
            arr_provinsi_pencipta: id_form.find('input[name="arr_provinsi_pencipta[]"]').serializeArray()
        },
        function (data) { 
            id_form.find('#tabelDetailPencipta').html(data);  
        });
    }
}

function clickAddListPemegangCipta(token, form_id){
var id_form = $(form_id);
    var nama_pemegang_cipta = id_form.find('input[name="nama_pemegang_cipta"]').val();
    var kewarganegaraan_pemegang_cipta = id_form.find('select[name="kewarganegaraan_pemegang_cipta"] option:selected').val();
    var alamat_pemegang_cipta = id_form.find('textarea[name="alamat_pemegang_cipta"]').val();
    var kota_pemegang_cipta = id_form.find('input[name="kota_pemegang_cipta"]').val();
    var kode_pos_pemegang_cipta = id_form.find('input[name="kode_pos_pemegang_cipta"]').val();
    var negara_pemegang_cipta = id_form.find('select[name="negara_pemegang_cipta"] option:selected').val(); 
    var provinsi_pemegang_cipta = id_form.find('select[name="provinsi_pemegang_cipta"] option:selected').val(); 
    var email_pemegang_cipta = id_form.find('input[name="email_pemegang_cipta"]').val(); 
    var telp_pemegang_cipta = id_form.find('input[name="telp_pemegang_cipta"]').val(); 
    if (nama_pemegang_cipta == '' || kewarganegaraan_pemegang_cipta == '' || alamat_pemegang_cipta == '') {
        alert('Gagal!!!', 'Data Produk Belum Lengkap.');
    } else {
        $.post('/click/add/list-pemegang_cipta', {
            _token: token,
            nama_pemegang_cipta: nama_pemegang_cipta,
            kewarganegaraan_pemegang_cipta: kewarganegaraan_pemegang_cipta,
            alamat_pemegang_cipta: alamat_pemegang_cipta,
            kota_pemegang_cipta: kota_pemegang_cipta,
            kode_pos_pemegang_cipta: kode_pos_pemegang_cipta,
            negara_pemegang_cipta: negara_pemegang_cipta,
            provinsi_pemegang_cipta: provinsi_pemegang_cipta,
            email_pemegang_cipta: email_pemegang_cipta, 
            telp_pemegang_cipta: telp_pemegang_cipta,
            form_id: form_id, 
            arr_nama_pemegang_cipta: id_form.find('input[name="arr_nama_pemegang_cipta[]"]').serializeArray(),
            arr_kewarganegaraan_pemegang_cipta: id_form.find('input[name="arr_kewarganegaraan_pemegang_cipta[]"]').serializeArray(),
            arr_alamat_pemegang_cipta: id_form.find('input[name="arr_alamat_pemegang_cipta[]"]').serializeArray(),
            arr_kota_pemegang_cipta: id_form.find('input[name="arr_kota_pemegang_cipta[]"]').serializeArray(),
            arr_kode_pos_pemegang_cipta: id_form.find('input[name="arr_kode_pos_pemegang_cipta[]"]').serializeArray(),
            arr_negara_pemegang_cipta: id_form.find('input[name="arr_negara_pemegang_cipta[]"]').serializeArray(),
            arr_provinsi_pemegang_cipta: id_form.find('input[name="arr_provinsi_pemegang_cipta[]"]').serializeArray(),
            arr_email_pemegang_cipta: id_form.find('input[name="arr_email_pemegang_cipta[]"]').serializeArray(),
            arr_telp_pemegang_cipta: id_form.find('input[name="arr_telp_pemegang_cipta[]"]').serializeArray()
        },
        function (data) { 
            id_form.find('#tabelDetailPemegangCipta').html(data);  
        });
    }
}


function clickAddListInventor(token, form_id){
var id_form = $(form_id);
    var nama_inventor = id_form.find('input[name="nama_inventor"]').val();
    var kewarganegaraan_inventor = id_form.find('select[name="kewarganegaraan_inventor"] option:selected').val();
    var alamat_inventor = id_form.find('textarea[name="alamat_inventor"]').val();
    var email_inventor = id_form.find('input[name="email_inventor"]').val();
    var telp_inventor = id_form.find('input[name="telp_inventor"]').val(); 
    if (nama_inventor == '' || kewarganegaraan_inventor == '' || alamat_inventor == '') {
        alert('Gagal!!!', 'Data Belum Lengkap.');
    } else {
        $.post('/click/add/list-inventor', {
            _token: token,
            nama_inventor: nama_inventor,
            kewarganegaraan_inventor: kewarganegaraan_inventor,
            alamat_inventor: alamat_inventor,
            email_inventor: email_inventor,
            telp_inventor: telp_inventor, 
            form_id: form_id, 
            arr_nama_inventor: id_form.find('input[name="arr_nama_inventor[]"]').serializeArray(),
            arr_kewarganegaraan_inventor: id_form.find('input[name="arr_kewarganegaraan_inventor[]"]').serializeArray(),
            arr_alamat_inventor: id_form.find('input[name="arr_alamat_inventor[]"]').serializeArray(),
            arr_email_inventor: id_form.find('input[name="arr_email_inventor[]"]').serializeArray(),
            arr_telp_inventor: id_form.find('input[name="arr_telp_inventor[]"]').serializeArray()
        },
        function (data) { 
            id_form.find('#tabelDetailInventor').html(data);  
        });
    }
}

function clickAddListPrioritas(token, form_id){
var id_form = $(form_id);
    var negara_prioritas = id_form.find('select[name="negara_prioritas"] option:selected').val();
    var tanggal_prioritas = id_form.find('input[name="tanggal_prioritas"]').val();
    var nomor_prioritas = id_form.find('input[name="nomor_prioritas"]').val(); 
    if (negara_prioritas == '' || tanggal_prioritas == '' || nomor_prioritas == '') {
        alert('Gagal!!!', 'Data Belum Lengkap.');
    } else {
        $.post('/click/add/list-prioritas', {
            _token: token,
            negara_prioritas: negara_prioritas,
            tanggal_prioritas: tanggal_prioritas,
            nomor_prioritas: nomor_prioritas, 
            form_id: form_id, 
            arr_negara_prioritas: id_form.find('input[name="arr_negara_prioritas[]"]').serializeArray(),
            arr_tanggal_prioritas: id_form.find('input[name="arr_tanggal_prioritas[]"]').serializeArray(),
            arr_nomor_prioritas: id_form.find('input[name="arr_nomor_prioritas[]"]').serializeArray()
        },
        function (data) { 
            id_form.find('#tabelDetailPrioritas').html(data);  
        });
    }
}
// END CODE REMAKE HAKI  31-05-2021

// START CODE BERITA 
function tambah_modal_berita(token, modal) {
    $(modal).modal('show');
    $(modal + 'Label').html('Tambah Master Data Berita');
    $(modal + 'Isi').html(loading);
    var act = '/admin/berita/tambah_modal_berita';
    $.post(act, {
        _token: token
    },
    function (data) {
        $(modal + 'Isi').html(data);
    });
}
function edit_modal_berita(token,id,modal) {
    $(modal).modal('show');
    $(modal + 'Label').html('Edit Berita'); 
    $(modal + 'Isi').html(loading);
    var act = '/admin/berita/ubah';
     $.post(act, {
            _token: token,
            id:id
        },
        function (data) { 
             // alert(data);
            $(modal + 'Isi').html(data);
        });
}   
function hapus_data_berita(token, id) 
{ 
    swal({
            title: "Yakin Untuk Menghapus Data Berita?",
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
        function (isConfirm) {
            if (isConfirm) {
                var act = '/berita/' + id + '/hapus';
                $.post(act, {
                        _token: token
                    },
                    function (data) {
                        swal({
                                title: "Data Terhapus!",
                                text: "",
                                confirmButtonColor: "#4CAF50",
                                type: "success"
                            },
                            function (isConfirm) {
                                if (isConfirm) {
                                    location.reload();
                                }
                            }); 
                    });
            }
        });
}

function like_content(token,id)
{
    alert(id);
}
// END CODE BERITA