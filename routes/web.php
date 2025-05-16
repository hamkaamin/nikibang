<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\{
	ConfirmPasswordController,
	ForgotPasswordController,
	LoginController,
	RegisterController,
	ResetPasswordController,
	VerificationController
};
use App\Http\Controllers\{
	BeritaController,
	CiptaController,
	Controller,
	DesainController,
	DraftingController,
	GrafikController,
	HomeController,
	InventorController,
	IpcController,
	JenisBarangController,
	JenisCiptaanController,
	JenisDokumentasiController,
	KelasController,
	KelasLocarnoController,
	KiKomunalController,
	KondisiController,
	KonselingController,
	KonsultanCiptaController,
	KonsultanDesainController,
	KonsultanMerekController,
	KonsultanPatenController,
	MerekController,
	PatenController,
	PemegangCiptaController,
	PemegangDesainController,
	PemegangPatenController,
	PemilikController,
	PenciptaController,
	PendesainController,
	PrioritasDesainController,
	PrioritasMerekController,
	PrioritasPatenController,
	ProfileController,
	PublicController,
	SlidersController,
	TentangKamiController,
	TipeController,
	UpayaPelestarianController
};

Auth::routes();
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', [PublicController::class, 'index']);

//Route::get('/', 'PublicController@index');
Route::get('/bankdata', [PublicController::class, 'home']);
Route::get('/beranda', [PublicController::class, 'index'])->name('beranda');
Route::get('/berandapage', [PublicController::class, 'berandapage'])->name('berandapage');
Route::get('/berita_page/{page}', [PublicController::class, 'berita_page'])->name('berita_page');
Route::get('/detail_berita', [PublicController::class, 'detail_berita'])->name('detail_berita');
Route::get('/logouted', [LoginController::class, 'logout']);
Route::get('/logout', [LoginController::class, 'logout']);
Route::post('connect_with_us', [PublicController::class, 'connect_with_us'])->name('connect_with_us');
Route::get('/s/{tipe}', [PublicController::class, 'search'])->name('search');
Route::get('/d/{tipe}', [PublicController::class, 'search_detail'])->name('search.detail');
Route::get('/tentang_kami', [PublicController::class, 'tentang_kami'])->name('tentang_kami');
Route::get('/register',[PublicController::class, 'register_akun'])->name('register_akun');
Route::post('/register/simpan_register', [PublicController::class, 'simpan_register'])->name('simpan_register');

Route::group(['middleware' => 'auth'], function () {

	Route::get('/home', [HomeController::class, 'index'])->name('home');  
	Route::get('/home_dashboard', [HomeController::class, 'dashboard'])->name('home_dashboard');  

	// START MY-PROFILE
	Route::get('admin/myprofile', [ProfileController::class, 'my_profile']);
	Route::post('/admin/myprofile/{id}/ganti_username_email_admin', [ProfileController::class, 'ganti_username_email_admin'])->name('simpan_ganti_username_email_admin');
	Route::post('/admin/myprofile/{id}/ganti_password_admin', [ProfileController::class, 'ganti_password_admin'])->name('simpan_ganti_password_admin');
	// END MY-PROFILE

	//START MASTER USER
	Route::get('/admin/master_user', [ProfileController::class, 'master_user'])->name('master_user');
	Route::post('/admin/detail_user', [ProfileController::class, 'detail_user'])->name('detail_user');
	Route::post('/admin/master_user/tambah_modal_master_user', [ProfileController::class, 'tambah_modal_master_user']);
	Route::post('/admin/master_user/simpan_master_user', [ProfileController::class, 'simpan_master_user'])->name('simpan_master_user');
	Route::post('master_user/{id}/hapus', [ProfileController::class, 'destroy']);
	// END MASTER USER

	//START GRAFIK
	Route::post('/admin/grafik_paten', [GrafikController::class, 'grafik_paten'])->name('grafik_paten');
	Route::post('/admin/grafik_cipta', [GrafikController::class, 'grafik_cipta'])->name('grafik_cipta'); 
	//END GRAFIK

	// START TIPE 
	Route::get('/admin/tipe', [TipeController::class, 'index'])->name('tipe');
	Route::post('/admin/tipe/tambah_modal_tipe', [TipeController::class, 'modal_tambah']);
	Route::post('/admin/tipe/simpan_tipe', [TipeController::class, 'simpan_tipe'])->name('simpan_tipe');
	Route::post('/admin/tipe/ubah', [TipeController::class, 'modal_ubah']);
	Route::post('/admin/tipe/simpan/ubah/{id}', [TipeController::class, 'simpan_tipe_ubah'])->name('simpan_tipe_ubah');
	Route::post('tipe/{id}/hapus', [TipeController::class, 'destroy']);
	// END TIPE

	// START KELAS 
	Route::get('/admin/kelas', [KelasController::class, 'index'])->name('kelas');
	Route::post('/admin/kelas/tambah_modal_kelas', [KelasController::class, 'modal_tambah']);
	Route::post('/admin/kelas/simpan_kelas', [KelasController::class, 'simpan_kelas'])->name('simpan_kelas');
	Route::post('/admin/kelas/ubah', [KelasController::class, 'modal_ubah']);
	Route::post('/admin/kelas/simpan/ubah/{id}', [KelasController::class, 'simpan_kelas_ubah'])->name('simpan_kelas_ubah');
	Route::post('kelas/{id}/hapus', [KelasController::class, 'destroy']);
	// END KELAS

	// START PRIORITAS MEREK 
	Route::get('/admin/prioritas_merek', [PrioritasMerekController::class, 'index'])->name('prioritas_merek');
	Route::post('/admin/prioritas_merek/tambah_modal_prioritas_merek', [PrioritasMerekController::class, 'modal_tambah']);
	Route::post('/admin/prioritas_merek/simpan_prioritas_merek', [PrioritasMerekController::class, 'simpan_prioritas_merek'])->name('simpan_prioritas_merek');
	Route::post('/admin/prioritas_merek/ubah', [PrioritasMerekController::class, 'modal_ubah']);
	Route::post('/admin/prioritas_merek/simpan/ubah/{id}', [PrioritasMerekController::class, 'simpan_prioritas_merek_ubah'])->name('simpan_prioritas_merek_ubah');
	Route::post('prioritas_merek/{id}/hapus', [PrioritasMerekController::class, 'destroy']);
	// END PRIORITAS MEREK
	

	// START PRIORITAS PATEN 
	Route::get('/admin/prioritas_paten', [PrioritasPatenController::class, 'index'])->name('prioritas_paten');
	Route::post('/admin/prioritas_paten/tambah_modal_prioritas_paten', [PrioritasPatenController::class, 'modal_tambah']);
	Route::post('/admin/prioritas_paten/simpan_prioritas_paten', [PrioritasPatenController::class, 'simpan_prioritas_paten'])->name('simpan_prioritas_paten');
	Route::post('/admin/prioritas_paten/ubah', [PrioritasPatenController::class, 'modal_ubah']);
	Route::post('/admin/prioritas_paten/simpan/ubah/{id}', [PrioritasPatenController::class, 'simpan_prioritas_paten_ubah'])->name('simpan_prioritas_paten_ubah');
	Route::post('prioritas_paten/{id}/hapus', [PrioritasPatenController::class, 'destroy']);
	// END PRIORITAS PATEN

	// START PRIORITAS DESAIN 
	Route::get('/admin/prioritas_desain', [PrioritasDesainController::class, 'index'])->name('prioritas_desain');
	Route::post('/admin/prioritas_desain/tambah_modal_prioritas_desain', [PrioritasDesainController::class, 'modal_tambah']);
	Route::post('/admin/prioritas_desain/simpan_prioritas_desain', [PrioritasDesainController::class, 'simpan_prioritas_desain'])->name('simpan_prioritas_desain');
	Route::post('/admin/prioritas_desain/ubah', [PrioritasDesainController::class, 'modal_ubah']);
	Route::post('/admin/prioritas_desain/simpan/ubah/{id}', [PrioritasDesainController::class, 'simpan_prioritas_desain_ubah'])->name('simpan_prioritas_desain_ubah');
	Route::post('prioritas_desain/{id}/hapus', [PrioritasDesainController::class, 'destroy']);
	// END PRIORITAS DESAIN

	// START INVENTOR 
	Route::get('/admin/inventor', [InventorController::class, 'index'])->name('inventor');
	Route::post('/admin/inventor/tambah_modal_inventor', [InventorController::class, 'modal_tambah']);
	Route::post('/admin/inventor/simpan_inventor', [InventorController::class, 'simpan_inventor'])->name('simpan_inventor');
	Route::post('/admin/inventor/ubah', [InventorController::class, 'modal_ubah']);
	Route::post('/admin/inventor/simpan/ubah/{id}', [InventorController::class, 'simpan_inventor_ubah'])->name('simpan_inventor_ubah');
	Route::post('inventor/{id}/hapus', [InventorController::class, 'destroy']);
	// END INVENTOR
	
	// START PEMEGANG PATEN 
	Route::get('/admin/pemegang_paten', [PemegangPatenController::class, 'index'])->name('pemegang_paten');
	Route::post('/admin/pemegang_paten/tambah_modal_pemegang_paten', [PemegangPatenController::class, 'modal_tambah']);
	Route::post('/admin/pemegang_paten/simpan_pemegang_paten', [PemegangPatenController::class, 'simpan_pemegang_paten'])->name('simpan_pemegang_paten');
	Route::post('/admin/pemegang_paten/ubah', [PemegangPatenController::class, 'modal_ubah']);
	Route::post('/admin/pemegang_paten/simpan/ubah/{id}', [PemegangPatenController::class, 'simpan_pemegang_paten_ubah'])->name('simpan_pemegang_paten_ubah');
	Route::post('pemegang_paten/{id}/hapus', [PemegangPatenController::class, 'destroy']);
	// END PEMEGANG PATEN

	// START PEMEGANG CIPTA 
	Route::get('/admin/pemegang_cipta', [PemegangCiptaController::class, 'index'])->name('pemegang_cipta');
	Route::post('/admin/pemegang_cipta/tambah_modal_pemegang_cipta', [PemegangCiptaController::class, 'modal_tambah']);
	Route::post('/admin/pemegang_cipta/simpan_pemegang_cipta', [PemegangCiptaController::class, 'simpan_pemegang_cipta'])->name('simpan_pemegang_cipta');
	Route::post('/admin/pemegang_cipta/ubah', [PemegangCiptaController::class, 'modal_ubah']);
	Route::post('/admin/pemegang_cipta/simpan/ubah/{id}', [PemegangCiptaController::class, 'simpan_pemegang_cipta_ubah'])->name('simpan_pemegang_cipta_ubah');
	Route::post('pemegang_cipta/{id}/hapus', [PemegangCiptaController::class, 'destroy']);
	// END PEMEGANG CIPTA


	// START PEMEGANG DESAIN INDUSTRI 
	Route::get('/admin/pemegang_desain', [PemegangDesainController::class, 'index'])->name('pemegang_desain');
	Route::post('/admin/pemegang_desain/tambah_modal_pemegang_desain', [PemegangDesainController::class, 'modal_tambah']);
	Route::post('/admin/pemegang_desain/simpan_pemegang_desain', [PemegangDesainController::class, 'simpan_pemegang_desain'])->name('simpan_pemegang_desain');
	Route::post('/admin/pemegang_desain/ubah', [PemegangDesainController::class, 'modal_ubah']);
	Route::post('/admin/pemegang_desain/simpan/ubah/{id}', [PemegangDesainController::class, 'simpan_pemegang_desain_ubah'])->name('simpan_pemegang_desain_ubah');
	Route::post('pemegang_desain/{id}/hapus', [PemegangDesainController::class, 'destroy']);
	// END PEMEGANG DESAIN INDUSTRI 

	// START PENCIPTA 
	Route::get('/admin/pencipta', [PenciptaController::class, 'index'])->name('pencipta');
	Route::post('/admin/pencipta/tambah_modal_pencipta', [PenciptaController::class, 'modal_tambah']);
	Route::post('/admin/pencipta/simpan_pencipta', [PenciptaController::class, 'simpan_pencipta'])->name('simpan_pencipta');
	Route::post('/admin/pencipta/ubah', [PenciptaController::class, 'modal_ubah']);
	Route::post('/admin/pencipta/simpan/ubah/{id}', [PenciptaController::class, 'simpan_pencipta_ubah'])->name('simpan_pencipta_ubah');
	Route::post('pencipta/{id}/hapus', [PenciptaController::class, 'destroy']);
	// END PENCIPTA

	// START KONSULTAN PATEN 
	Route::get('/admin/konsultan_paten', [KonsultanPatenController::class, 'index'])->name('konsultan_paten');
	Route::post('/admin/konsultan_paten/tambah_modal_konsultan_paten', [KonsultanPatenController::class, 'modal_tambah']);
	Route::post('/admin/konsultan_paten/simpan_konsultan_paten', [KonsultanPatenController::class, 'simpan_konsultan_paten'])->name('simpan_konsultan_paten');
	Route::post('/admin/konsultan_paten/ubah', [KonsultanPatenController::class, 'modal_ubah']);
	Route::post('/admin/konsultan_paten/simpan/ubah/{id}', [KonsultanPatenController::class, 'simpan_konsultan_paten_ubah'])->name('simpan_konsultan_paten_ubah');
	Route::post('konsultan_paten/{id}/hapus', [KonsultanPatenController::class, 'destroy']);
	// END KONSULTAN PATEN  

	// START KONSULTAN MEREK 
	Route::get('/admin/konsultan_merek', [KonsultanMerekController::class, 'index'])->name('konsultan_merek');
	Route::post('/admin/konsultan_merek/tambah_modal_konsultan_merek', [KonsultanMerekController::class, 'modal_tambah']);
	Route::post('/admin/konsultan_merek/simpan_konsultan_merek', [KonsultanMerekController::class, 'simpan_konsultan_merek'])->name('simpan_konsultan_merek');
	Route::post('/admin/konsultan_merek/ubah', [KonsultanMerekController::class, 'modal_ubah']);
	Route::post('/admin/konsultan_merek/simpan/ubah/{id}', [KonsultanMerekController::class, 'simpan_konsultan_merek_ubah'])->name('simpan_konsultan_merek_ubah');
	Route::post('konsultan_merek/{id}/hapus', [KonsultanMerekController::class, 'destroy']);
	// END KONSULTAN MEREK
	
	// START KONSULTAN DESAIN INDUSTRI 
	Route::get('/admin/konsultan_desain', [KonsultanDesainController::class, 'index'])->name('konsultan_desain');
	Route::post('/admin/konsultan_desain/tambah_modal_konsultan_desain', [KonsultanDesainController::class, 'modal_tambah']);
	Route::post('/admin/konsultan_desain/simpan_konsultan_desain', [KonsultanDesainController::class, 'simpan_konsultan_desain'])->name('simpan_konsultan_desain');
	Route::post('/admin/konsultan_desain/ubah', [KonsultanDesainController::class, 'modal_ubah']);
	Route::post('/admin/konsultan_desain/simpan/ubah/{id}', [KonsultanDesainController::class, 'simpan_konsultan_desain_ubah'])->name('simpan_konsultan_desain_ubah');
	Route::post('konsultan_desain/{id}/hapus', [KonsultanDesainController::class, 'destroy']);
	// END KONSULTAN DESAIN INDUSTRI
 
	// START KONSULTAN CIPTA 
	Route::get('/admin/konsultan_cipta', [KonsultanCiptaController::class, 'index'])->name('konsultan_cipta');
	Route::post('/admin/konsultan_cipta/tambah_modal_konsultan_cipta', [KonsultanCiptaController::class, 'modal_tambah']);
	Route::post('/admin/konsultan_cipta/simpan_konsultan_cipta', [KonsultanCiptaController::class, 'simpan_konsultan_cipta'])->name('simpan_konsultan_cipta');
	Route::post('/admin/konsultan_cipta/ubah', [KonsultanCiptaController::class, 'modal_ubah']);
	Route::post('/admin/konsultan_cipta/simpan/ubah/{id}', [KonsultanCiptaController::class, 'simpan_konsultan_cipta_ubah'])->name('simpan_konsultan_cipta_ubah');
	Route::post('konsultan_cipta/{id}/hapus', [KonsultanCiptaController::class, 'destroy']);
	// END KONSULTAN CIPTA

	// START PENDESAIN 
	Route::get('/admin/pendesain', [PendesainController::class, 'index'])->name('pendesain');
	Route::post('/admin/pendesain/tambah_modal_pendesain', [PendesainController::class, 'modal_tambah']);
	Route::post('/admin/pendesain/simpan_pendesain', [PendesainController::class, 'simpan_pendesain'])->name('simpan_pendesain');
	Route::post('/admin/pendesain/ubah', [PendesainController::class, 'modal_ubah']);
	Route::post('/admin/pendesain/simpan/ubah/{id}', [PendesainController::class, 'simpan_pendesain_ubah'])->name('simpan_pendesain_ubah');
	Route::post('pendesain/{id}/hapus', [PendesainController::class, 'destroy']);
	// END PENDESAIN
	
	// START KELAS LOCARNO 
	Route::get('/admin/kelas_locarno', [KelasLocarnoController::class, 'index'])->name('kelas_locarno');
	Route::post('/admin/kelas_locarno/tambah_modal_kelas_locarno', [KelasLocarnoController::class, 'modal_tambah']);
	Route::post('/admin/kelas_locarno/simpan_kelas_locarno', [KelasLocarnoController::class, 'simpan_kelas_locarno'])->name('simpan_kelas_locarno');
	Route::post('/admin/kelas_locarno/ubah', [KelasLocarnoController::class, 'modal_ubah']);
	Route::post('/admin/kelas_locarno/simpan/ubah/{id}', [KelasLocarnoController::class, 'simpan_kelas_locarno_ubah'])->name('simpan_kelas_locarno_ubah');
	Route::post('kelas_locarno/{id}/hapus', [KelasLocarnoController::class, 'destroy']);
	// END KELAS LOCARNO

	// START JENIS CIPTAAN 
	Route::get('/admin/jenis_ciptaan', [JenisCiptaanController::class, 'index'])->name('jenis_ciptaan');
	Route::post('/admin/jenis_ciptaan/tambah_modal_jenis_ciptaan', [JenisCiptaanController::class, 'modal_tambah']);
	Route::post('/admin/jenis_ciptaan/simpan_jenis_ciptaan', [JenisCiptaanController::class, 'simpan_jenis_ciptaan'])->name('simpan_jenis_ciptaan');
	Route::post('/admin/jenis_ciptaan/ubah', [JenisCiptaanController::class, 'modal_ubah']);
	Route::post('/admin/jenis_ciptaan/simpan/ubah/{id}', [JenisCiptaanController::class, 'simpan_jenis_ciptaan_ubah'])->name('simpan_jenis_ciptaan_ubah');
	Route::post('jenis_ciptaan/{id}/hapus', [JenisCiptaanController::class, 'destroy']);
	// END JENIS CIPTAAN
	
	// START PEMILIK 
	Route::get('/admin/pemilik', [PemilikController::class, 'index'])->name('pemilik');
	Route::post('/admin/pemilik/tambah_modal_pemilik', [PemilikController::class, 'modal_tambah']);
	Route::post('/admin/pemilik/simpan_pemilik', [PemilikController::class, 'simpan_pemilik'])->name('simpan_pemilik');
	Route::post('/admin/pemilik/ubah', [PemilikController::class, 'modal_ubah']);
	Route::post('/admin/pemilik/simpan/ubah/{id}', [PemilikController::class, 'simpan_pemilik_ubah'])->name('simpan_pemilik_ubah');
	Route::post('pemilik/{id}/hapus', [PemilikController::class, 'destroy']);
	// END PEMILIK

	// START IPC 
	Route::post('/admin/ipc_paten/simpan_ipc_paten', [IpcController::class, 'simpan_ipc_paten'])->name('simpan_ipc_paten');
	Route::post('ipc_paten/{id}/hapus', [IpcController::class, 'destroy']);
	// END IPC

	// START PATEN
	Route::get('/admin/paten', [PatenController::class, 'index'])->name('paten');
	Route::post('/admin/paten/tambah_modal_paten', [PatenController::class, 'modal_tambah']);
	Route::post('/admin/pemilik/simpan_paten', [PatenController::class, 'simpan_paten'])->name('simpan_paten');
	Route::post('/admin/modal_isi_paten/', [PatenController::class, 'modal_isi_paten']);
	Route::post('/admin/{id}/div_tabel_data_prioritas_paten', [PatenController::class, 'div_tabel_data_prioritas_paten']);
	Route::post('/admin/{id}/div_tabel_data_pemegang_paten', [PatenController::class, 'div_tabel_data_pemegang_paten']);
	Route::post('/admin/{id}/div_tabel_data_inventor', [PatenController::class, 'div_tabel_data_inventor']);
	Route::post('/admin/{id}/div_tabel_data_konsultan_paten', [PatenController::class, 'div_tabel_data_konsultan_paten']);
	Route::post('/admin/{id}/div_tabel_data_ipc_paten', [PatenController::class, 'div_tabel_data_ipc_paten']); 
	Route::post('/admin/{id}/div_tabel_data_upload_paten', [PatenController::class, 'div_tabel_data_upload_paten']); 
	Route::post('/admin/paten/ubah', [PatenController::class, 'modal_ubah']);
	Route::post('/admin/paten_admin/simpan/ubah/{id}', [PatenController::class, 'simpan_paten_ubah'])->name('simpan_paten_ubah');
	Route::post('paten/{id}/hapus', [PatenController::class, 'destroy']);
	Route::post('/admin/paten/detail', [PatenController::class, 'modal_detail']);
	Route::post('/upload_paten/action', [PatenController::class, 'action'])->name('upload_paten.action');
	Route::post('/admin/data_upload_paten/hapus', [PatenController::class, 'hapus_file_data']); 
	// END PATEN

	// START MEREK 
	Route::get('/admin/merek', [MerekController::class, 'index'])->name('merek');
	Route::post('/admin/merek/tambah_modal_merek', [MerekController::class, 'modal_tambah']);
	Route::post('/admin/simpan_merek', [MerekController::class, 'simpan_merek'])->name('simpan_merek');
	Route::post('/admin/merek/ubah', [MerekController::class, 'modal_ubah']);
	Route::post('merek/{id}/hapus', [MerekController::class, 'destroy']);
	Route::post('/admin/merek/simpan/ubah/{id}', [MerekController::class, 'simpan_merek_ubah'])->name('simpan_merek_ubah');
	Route::post('/admin/modal_isi_merek/', [MerekController::class, 'modal_isi_merek']);
	Route::post('/admin/{id}/div_tabel_data_prioritas_merek', [MerekController::class, 'div_tabel_data_prioritas_merek']);
	Route::post('/admin/{id}/div_tabel_data_kelas', [MerekController::class, 'div_tabel_data_kelas']);
	Route::post('/admin/{id}/div_tabel_data_pemilik', [MerekController::class, 'div_tabel_data_pemilik']);
	Route::post('/admin/{id}/div_tabel_data_konsultan_merek', [MerekController::class, 'div_tabel_data_konsultan_merek']);
	Route::post('/upload_merek/action', [MerekController::class, 'action'])->name('upload_merek.action');
	Route::post('/admin/data_upload_merek/hapus', [MerekController::class, 'hapus_file_data']); 
	Route::post('/admin/{id}/div_tabel_data_upload_merek', [MerekController::class, 'div_tabel_data_upload_merek']);
	Route::post('/admin/merek/detail', [MerekController::class, 'modal_detail']); 
	// END MEREK

	// START CIPTA
	Route::get('/admin/cipta', [CiptaController::class, 'index'])->name('cipta');
	Route::post('/admin/cipta/tambah_modal_cipta', [CiptaController::class, 'modal_tambah']);
	Route::post('/admin/simpan_cipta', [CiptaController::class, 'simpan_cipta'])->name('simpan_cipta');
	Route::post('/admin/cipta/ubah', [CiptaController::class, 'modal_ubah']);
	Route::post('cipta/{id}/hapus', [CiptaController::class, 'destroy']);
	Route::post('/admin/cipta_admin/simpan/ubah/{id}', [CiptaController::class, 'simpan_cipta_ubah'])->name('simpan_cipta_ubah');
	Route::post('/admin/{id}/div_tabel_data_pemegang_cipta', [CiptaController::class, 'div_tabel_data_pemegang_cipta']);
	Route::post('/admin/modal_isi_cipta/', [CiptaController::class, 'modal_isi_cipta']);
	Route::post('/admin/{id}/div_tabel_data_jenis_ciptaan', [CiptaController::class, 'div_tabel_data_jenis_ciptaan']);
	Route::post('/admin/{id}/div_tabel_data_pencipta', [CiptaController::class, 'div_tabel_data_pencipta']);
	Route::post('/admin/{id}/div_tabel_data_konsultan_cipta', [CiptaController::class, 'div_tabel_data_konsultan_cipta']);
	Route::post('/upload_cipta/action', [CiptaController::class, 'action'])->name('upload_cipta.action');
	Route::post('/admin/data_upload_cipta/hapus', [CiptaController::class, 'hapus_file_data']); 
	Route::post('/admin/{id}/div_tabel_data_upload_cipta', [CiptaController::class, 'div_tabel_data_upload_cipta']); 
	Route::post('/admin/cipta/detail', [CiptaController::class, 'modal_detail']);
	// END CIPTA

	// START DESAIN INDUSTRI
	Route::get('/admin/desain', [DesainController::class, 'index'])->name('desain');
	Route::post('/admin/desain/tambah_modal_desain', [DesainController::class, 'modal_tambah']);
	Route::post('/admin/simpan_desain', [DesainController::class, 'simpan_desain'])->name('simpan_desain');
	Route::post('/admin/desain/ubah', [DesainController::class, 'modal_ubah']);
	Route::post('desain/{id}/hapus', [DesainController::class, 'destroy']);
	Route::post('/admin/desain/simpan/ubah/{id}', [DesainController::class, 'simpan_desain_ubah'])->name('simpan_desain_ubah');
	Route::post('/admin/{id}/div_tabel_data_kelas_locarno', [DesainController::class, 'div_tabel_data_kelas_locarno']);
	Route::post('/admin/modal_isi_desain/', [DesainController::class, 'modal_isi_desain']);
	Route::post('/admin/{id}/div_tabel_data_prioritas_desain', [DesainController::class, 'div_tabel_data_prioritas_desain']); 
	Route::post('/admin/{id}/div_tabel_data_pemegang_desain', [DesainController::class, 'div_tabel_data_pemegang_desain']); 
	Route::post('/admin/{id}/div_tabel_data_pendesain', [DesainController::class, 'div_tabel_data_pendesain']); 
	Route::post('/admin/{id}/div_tabel_data_konsultan_desain', [DesainController::class, 'div_tabel_data_konsultan_desain']);
	Route::post('/upload_desain/action', [DesainController::class, 'action'])->name('upload_desain.action');
	Route::post('/admin/data_upload_desain/hapus', [DesainController::class, 'hapus_file_data']); 
	Route::post('/admin/{id}/div_tabel_data_upload_desain', [DesainController::class, 'div_tabel_data_upload_desain']); 
	Route::post('/admin/desain/detail', [DesainController::class, 'modal_detail']);
	// END DESAIN INDUSTRI

	//START TENTANG KAMI 
	Route::get('admin/tentang_kami', [TentangKamiController::class, 'index'])->name('admin_tentang_kami'); 
	Route::post('admin/simpan_tentang_kami', [TentangKamiController::class, 'simpan_tentang_kami'])->name('simpan_tentang_kami');
	//END TENTANG KAMI

	// START KONSELING
	Route::get('admin/konseling', [KonselingController::class, 'index'])->name('admin_konseling');
	Route::post('/admin/konseling/simpan_konseling', [KonselingController::class, 'simpan_konseling'])->name('simpan_konseling');
	Route::get('/admin/detail_konseling', [KonselingController::class, 'detail'])->name('detail_konseling');
	Route::post('/admin/konseling/simpan_tanggapan', [KonselingController::class, 'simpan_tanggapan'])->name('simpan_tanggapan');
	// END KONSELING

	// START BERITA
	Route::get('admin/berita', [BeritaController::class, 'index'])->name('admin_berita'); 
	Route::post('/admin/berita/tambah_modal_berita', [BeritaController::class, 'modal_tambah']);
	Route::post('/admin/berita/simpan_berita', [BeritaController::class, 'simpan_berita'])->name('simpan_berita');
	Route::post('/admin/berita/ubah', [BeritaController::class, 'modal_ubah']);
	Route::post('/admin/berita/simpan/ubah/{id}', [BeritaController::class, 'simpan_berita_ubah'])->name('simpan_berita_ubah');
	Route::post('berita/{id}/hapus', [BeritaController::class, 'destroy']);
	// END BERITA
	
	// LANDING
	// START KONSELING
	Route::get('/landing_konseling', [PublicController::class, 'konseling'])->name('landing_konseling');
	Route::get('/landing_konseling/detail_konseling', [PublicController::class, 'detail_konseling'])->name('landing_detail_konseling');
	// END KONSELING
	// START PATEN
	Route::get('/landing_drafting_paten', [PublicController::class, 'drafting_paten'])->name('landing_drafting_paten'); 
	Route::post('/landing_drafting_paten/simpan_drafting_paten', [DraftingController::class, 'simpan_drafting_paten'])->name('simpan_drafting_paten'); 
	Route::get('/landing_drafting_paten/edit', [PublicController::class, 'edit_drafting_paten'])->name('edit_drafting_paten');
	Route::post('/admin/paten/simpan/ubah/{id}', [DraftingController::class, 'simpan_drafting_paten_ubah'])->name('simpan_drafting_paten_ubah');
	Route::get('/landing_pembiayaan_paten', [PublicController::class, 'pembiayaan_paten'])->name('landing_pembiayaan_paten'); 
	Route::post('/click/add/list-inventor', [DraftingController::class, 'add_list_inventor']);
	Route::post('/click/add/list-prioritas', [DraftingController::class, 'add_list_prioritas']);
	// END PATEN
	// START CIPTA 
	Route::get('/landing_drafting_cipta', [PublicController::class, 'drafting_cipta'])->name('landing_drafting_cipta'); 
	Route::post('/landing_drafting_cipta/simpan_drafting_cipta', [DraftingController::class, 'simpan_drafting_cipta'])->name('simpan_drafting_cipta');  
	Route::get('/landing_drafting_cipta/edit', [PublicController::class, 'edit_drafting_cipta'])->name('edit_drafting_cipta');
	Route::post('/admin/cipta/simpan/ubah/{id}', [DraftingController::class, 'simpan_cipta_ubah'])->name('simpan_drafting_cipta_ubah');
	Route::post('/landing_drafting_cipta/delete', [DraftingController::class, 'delete_drafting_cipta'])->name('delete_drafting_cipta');
	Route::post('/landing_page/drafting_cipta/div_jenis_ciptaan', [DraftingController::class, 'div_jenis_ciptaan']);
	Route::get('/landing_pembiayaan_cipta', [PublicController::class, 'pembiayaan_cipta'])->name('landing_pembiayaan_cipta');
	Route::post('/click/add/list-pencipta', [DraftingController::class, 'add_list_pencipta']);
	Route::post('/click/add/list-pemegang_cipta', [DraftingController::class, 'add_list_pemegang_cipta']); 
	// END CIPTA
	// END LANDING

	// START PEMBIAYAAN PATEN
	Route::get('/admin/paten_belum_biaya', [PatenController::class, 'index_belum_biaya'])->name('paten_belum_biaya');
	Route::get('/admin/paten_belumverif_biaya', [PatenController::class, 'index_belumverif_biaya'])->name('paten_belumverif_biaya');
	Route::get('/admin/paten_sudah_biaya', [PatenController::class, 'index_sudah_biaya'])->name('paten_sudah_biaya');
	Route::post('/admin/verif_tidak_biayai/kirim', [PatenController::class, 'verif_tidak_biayai_kirim'])->name('verif_tidak_biaya_kirim');
	Route::post('/admin/modal_verif_paten_belum_biaya', [PatenController::class, 'modal_verif_paten_belum_biaya'])->name('modal_verif_paten_belum_biaya');
	Route::post('/admin/simpan_verifikasi_paten_pembiayaan', [PatenController::class, 'simpan_verifikasi_paten_pembiayaan'])->name('simpan_verifikasi_paten_pembiayaan');
	// END PEMBIAYAAN PATEN

	// START PEMBIAYAAN CIPTA
	Route::get('/admin/cipta_belum_biaya', [CiptaController::class, 'index_belum_biaya'])->name('cipta_belum_biaya');
	Route::get('/admin/cipta_belumverif_biaya', [CiptaController::class, 'index_belumverif_biaya'])->name('cipta_belumverif_biaya');
	Route::get('/admin/cipta_sudah_biaya', [CiptaController::class, 'index_sudah_biaya'])->name('cipta_sudah_biaya');
	Route::post('/admin/verif_tidak_biayai/kirim', [CiptaController::class, 'verif_tidak_biayai_kirim'])->name('verif_tidak_biaya_kirim');
	Route::post('/admin/modal_verif_cipta_belum_biaya', [CiptaController::class, 'modal_verif_cipta_belum_biaya'])->name('modal_verif_cipta_belum_biaya');
	Route::post('/admin/simpan_verifikasi_cipta_pembiayaan', [CiptaController::class, 'simpan_verifikasi_cipta_pembiayaan'])->name('simpan_verifikasi_cipta_pembiayaan');
	// END PEMBIAYAAN CIPTA

	// START JENIS BARANG
	Route::get('/admin/master_jenis_barang', [JenisBarangController::class, 'index'])->name('master_jenis_barang');
	Route::post('/admin/master_jenis_barang/create', [JenisBarangController::class, 'create'])->name('modal_master_jenis_barang');Route::post('/admin/master_jenis_barang/simpan_jenis_barang', [JenisBarangController::class, 'store'])->name('simpan_jenis_barang');
	Route::post('/admin/master_jenis_barang/edit', [JenisBarangController::class, 'edit'])->name('modal_ubah__master_jenis_barang');Route::post('/admin/simpan_ubah_jenis_barang/{id}', [JenisBarangController::class, 'update'])->name('simpan_jenis_barang_ubah');
	Route::post('master_jenis_barang/{id}/hapus', [JenisBarangController::class, 'destroy']);
	// END JENIS BARANG

	// START JENIS DOKUMENTASI
	Route::get('/admin/master_jenis_dokumentasi', [JenisDokumentasiController::class, 'index'])->name('master_jenis_dokumentasi');
	Route::post('/admin/master_jenis_dokumentasi/create', [JenisDokumentasiController::class, 'create'])->name('modal_master_jenis_dokumentasi');Route::post('/admin/master_jenis_dokumentasi/simpan_jenis_dokumentasi', [JenisDokumentasiController::class, 'store'])->name('simpan_jenis_dokumentasi');
	Route::post('/admin/master_jenis_dokumentasi/edit', [JenisDokumentasiController::class, 'edit'])->name('modal_ubah__master_jenis_dokumentasi');Route::post('/admin/simpan_ubah_jenis_dokumentasi/{id}', [JenisDokumentasiController::class, 'update'])->name('simpan_jenis_dokumentasi_ubah');
	Route::post('master_jenis_dokumentasi/{id}/hapus', [JenisDokumentasiController::class, 'destroy']);
	// END JENIS DOKUMENTASI

	// START UPAYA PELESTARIAN
	Route::get('/admin/master_upaya_pelestarian', [UpayaPelestarianController::class, 'index'])->name('master_upaya_pelestarian');
	Route::post('/admin/master_upaya_pelestarian/create', [UpayaPelestarianController::class, 'create'])->name('modal_master_upaya_pelestarian');Route::post('/admin/master_upaya_pelestarian/simpan_upaya_pelestarian', [UpayaPelestarianController::class, 'store'])->name('simpan_upaya_pelestarian');
	Route::post('/admin/master_upaya_pelestarian/edit', [UpayaPelestarianController::class, 'edit'])->name('modal_ubah__master_upaya_pelestarian');Route::post('/admin/simpan_ubah_upaya_pelestarian/{id}', [UpayaPelestarianController::class, 'update'])->name('simpan_upaya_pelestarian_ubah');
	Route::post('master_upaya_pelestarian/{id}/hapus', [UpayaPelestarianController::class, 'destroy']);
	// END UPAYA PELESTARIAN

	// START KONDISI
	Route::get('/admin/master_kondisi', [KondisiController::class, 'index'])->name('master_kondisi');
	Route::post('/admin/master_kondisi/create', [KondisiController::class, 'create'])->name('modal_master_kondisi');
	Route::post('/admin/master_kondisi/simpan_kondisi', [KondisiController::class, 'store'])->name('simpan_kondisi');
	Route::post('/admin/master_kondisi/edit', [KondisiController::class, 'edit'])->name('modal_ubah__master_kondisi');
	Route::post('/admin/simpan_ubah_kondisi/{id}', [KondisiController::class, 'update'])->name('simpan_kondisi_ubah');
	Route::post('master_kondisi/{id}/hapus', [KondisiController::class, 'destroy']);
	// END KONDISI

	// START SLIDERS
	Route::get('/admin/sliders', [SlidersController::class, 'index'])->name('sliders');
	Route::post('/admin/sliders/ubah', [SlidersController::class, 'modal_ubah_sliders'])->name('ubah_sliders');
	Route::post('/admin/sliders/simpan/ubah/{id}', [SlidersController::class, 'simpan_sliders_ubah'])->name('simpan_sliders_ubah');
	// END SLIDERS

	// START KI KOMUNAL
	Route::get('/landing_drafting_komunal', [KiKomunalController::class, 'drafting_komunal'])->name('landing_drafting_komunal');  
	Route::post('/landing_drafting_komunal/simpan_drafting_komunal', [KiKomunalController::class, 'store'])->name('simpan_drafting_komunal'); 
	Route::get('/landing_pembiayaan_ki_komunal', [KiKomunalController::class, 'pembiayaan_ki_komunal'])->name('landing_pembiayaan_ki_komunal'); 

	// END KI KOMUNAL

	// START ADMIN KI KOMUNAL
	
	// START PEMBIAYAAN KI KOMUNAL
	Route::get('/admin/ki_komunal_belum_biaya', [KiKomunalController::class, 'index_belum_biaya'])->name('ki_komunal_belum_biaya');
	Route::get('/admin/ki_komunal_belumverif_biaya', [KiKomunalController::class, 'index_belum_verif_biaya'])->name('ki_komunal_belumverif_biaya');
	Route::get('/admin/ki_komunal_sudah_biaya', [KiKomunalController::class, 'index_sudah_biaya'])->name('ki_komunal_sudah_biaya');
	Route::post('/admin/ki_komunal/verif_tidak_biayai/kirim', [KiKomunalController::class, 'verif_tidak_biayai_kirim'])->name('verif_tidak_biaya_kirim');
	Route::post('/admin/modal_verif_ki_komunal_belum_biaya', [KiKomunalController::class, 'modal_verif_ki_komunal_belum_biaya'])->name('modal_verif_ki_komunal_belum_biaya');
	Route::post('/admin/simpan_verifikasi_ki_komunal_pembiayaan', [KiKomunalController::class, 'simpan_verifikasi_ki_komunal_pembiayaan'])->name('simpan_verifikasi_ki_komunal_pembiayaan');
	Route::post('/admin/ki_komunal/detail', [KiKomunalController::class, 'modal_detail']);
	Route::post('admin/ki_komunal/{id}/hapus', [KiKomunalController::class, 'destroy']);
});

/*
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
*/