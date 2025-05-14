<div class="sidebar sidebar-main">
    <div class="sidebar-fixed">
        <div class="sidebar-content">

            <!-- User menu -->
            <div class="sidebar-user-material">
                <div class="category-content">
                    <div class="sidebar-user-material-content">
                        <a href="#"><img src="{{ asset('assets/images/pemprovjatim.png') }}"
                                class="img-circle img-responsive" alt=""></a>
                        <h6> </h6>
                        <span class="text-size-small"> </span>
                    </div>

                    <div class="sidebar-user-material-menu">
                        <a href="#user-nav" data-toggle="collapse"><span>My account</span> <i
                                class="caret"></i></a>
                    </div>
                </div>

                <div class="navigation-wrapper collapse" id="user-nav">
                    <ul class="navigation">

                        <li><a href="{{ url('admin/myprofile') }}"><i class="icon-user-plus"></i> <span>My
                                    profile</span></a></li>

                        <li><a href="#" onclick="$('#logout-form').submit();"><i class="icon-switch2"></i>
                                <span>Logout</span></a></li>
                    </ul>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;"> @csrf
                    </form>
                </div>
            </div>
            <!-- /user menu -->


            <!-- Main navigation -->

            @php
                $jumlah_paten_belum_biaya = App\Model\Paten::count_paten_belum_biaya();
                $jumlah_paten_sudah_biaya = App\Model\Paten::count_paten_sudah_biaya();
                $jumlah_paten_tidak_biaya = App\Model\Paten::count_paten_tidak_biaya();
                
                $jumlah_cipta_belum_biaya = App\Model\Cipta::count_cipta_belum_biaya();
                $jumlah_cipta_sudah_biaya = App\Model\Cipta::count_cipta_sudah_biaya();
                $jumlah_cipta_tidak_biaya = App\Model\Cipta::count_cipta_tidak_biaya();

                $jumlah_ki_komunals_belum_biaya = App\KiKomunal::count_ki_komunals_belum_biaya();
                $jumlah_ki_komunals_sudah_biaya = App\KiKomunal::count_ki_komunals_sudah_biaya();
                $jumlah_ki_komunals_tidak_biaya = App\KiKomunal::count_ki_komunals_tidak_biaya();
            @endphp
            <div class="sidebar-category sidebar-category-visible">
                <div class="category-content no-padding">
                    <ul class="navigation navigation-main navigation-accordion">

                        <!-- Main -->
                        <li class="navigation-header"><span>Main</span> <i class="icon-menu"
                                title="Main pages"></i></li>

                        <li class="dashboard"><a href="{{ url('/home') }}"><i class="icon-home4"></i>
                                <span>Dashboard</span></a></li>

                        {{-- <li>
                            <a href="#"><i class="icon-gear"></i> <span>Setting</span></a>
                            <ul>
                                <li class="tentang_kami {{ Request::is('*/tentang_kami') ? 'active' : '' }}"><a
                                        href="{{ url('/admin/tentang_kami') }}"><i class="icon-pen"></i>
                                        <span>Tentang Kami</span></a></li>

                                <li class="menu_sliders {{ Request::is('*/sliders') ? 'active' : '' }}"><a
                                        href="{{ url('/admin/sliders') }}"><i class="icon-newspaper"></i>
                                        <span>Sliders</span></a></li>
                            </ul>
                        </li>
                        <li>
                        <a href="#"><i class="icon-files-empty2"></i> <span>Master</span></a>
                        <ul>
                            <li class="master_user {{ Request::is('*/master_user') ? 'active' : '' }}"><a href="{{ url('/admin/master_user') }}"><i class="icon-people"></i>
                                <span>Master User</span></a></li>

                        <li class="master_jenis_barang {{ Request::is('*/master_jenis_barang') ? 'active' : '' }}"><a
                            href="{{ url('/admin/master_jenis_barang') }}"><i class="icon-book"></i>
                            <span>Master Jenis Barang</span></a></li>
                        
                        <li class="master_jenis_dokumentasi {{ Request::is('*/master_jenis_dokumentasi') ? 'active' : '' }}"><a href="{{ url('/admin/master_jenis_dokumentasi') }}"><i class="icon-book2"></i>
                                <span>Master Jenis Dokumentasi</span></a></li>

                        <li class="master_upaya_pelestarian {{ Request::is('*/master_upaya_pelestarian') ? 'active' : '' }}"><a href="{{ url('/admin/master_upaya_pelestarian') }}"><i class="icon-book2"></i> <span>Master Upaya Pelestarian</span></a></li>

                        <li class="master_kondisi {{ Request::is('*/master_kondisi') ? 'active' : '' }}"><a href="{{ url('/admin/master_kondisi') }}"><i class="icon-book2"></i> <span>Master Kondisi</span></a></li>

                        </ul>
                        </li> --}}
                        <li class="konseling {{ Request::is('*/konseling') ? 'active' : '' }}"><a
                                href="{{ url('/admin/konseling') }}"><i class=" icon-quill2"></i>
                                <span>Konseling</span></a></li>

                        <li class="berita {{ Request::is('*/berita') ? 'active' : '' }}"><a
                                href="{{ url('/admin/berita') }}"><i class=" icon-quill4"></i>
                                <span>Berita</span></a></li>

                        <li>
                            <a href="#"><i class="icon-briefcase"></i> <span>Bank Data</span></a>
                            <ul>
                                <li class="menu_paten {{ Request::is('*/paten') ? 'active' : '' }}"><a
                                        href="{{ url('/admin/paten') }}"><i class="icon-pen"></i>
                                        <span>Paten</span></a></li>
                                <li class="menu_cipta {{ Request::is('*/cipta') ? 'active' : '' }}"><a
                                        href="{{ url('/admin/cipta') }}"><i class="icon-magazine"></i> <span>Hak
                                            Cipta</span></a></li> 
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="icon-pen"></i> <span>Paten</span><span
                                    class="badge badge-default">{{ $jumlah_paten_belum_biaya }}</span></a>
                            <ul>
                                <li
                                    class="menu_paten_belum_biaya {{ Request::is('*/paten_belumverif_biaya') ? 'active' : '' }}">
                                    <a href="{{ url('/admin/paten_belumverif_biaya') }}"><i
                                            class="icon-pen2"></i> <span>Belum Diverifikasi</span> <span
                                            class="badge badge-default">{{ $jumlah_paten_belum_biaya }}</span></a>
                                </li>
                                <li
                                    class="menu_paten_belum_biaya {{ Request::is('*/paten_belum_biaya') ? 'active' : '' }}">
                                    <a href="{{ url('/admin/paten_belum_biaya') }}"><i class="icon-pen-minus"></i>
                                        <span>Tidak Dibiayai</span> <span
                                            class="badge badge-warning">{{ $jumlah_paten_tidak_biaya }}</span></a>
                                </li>
                                <li
                                    class="menu_paten_sudah_biaya {{ Request::is('*/paten_sudah_biaya') ? 'active' : '' }}">
                                    <a href="{{ url('/admin/paten_sudah_biaya') }}"><i class="icon-pen-plus"></i>
                                        <span>Sudah Dibiayai</span><span
                                            class="badge badge-success">{{ $jumlah_paten_sudah_biaya }}</span></a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="#"><i class="icon-newspaper"></i> <span>Hak Cipta</span><span
                                    class="badge badge-default">{{ $jumlah_cipta_belum_biaya }}</span></a>
                            <ul>
                                <li
                                    class="menu_cipta_belum_biaya {{ Request::is('*/cipta_belumverif_biaya') ? 'active' : '' }}">
                                    <a href="{{ url('/admin/cipta_belumverif_biaya') }}"><i
                                            class="icon-pen2"></i> <span>Belum Diverifikasi</span> <span
                                            class="badge badge-default">{{ $jumlah_cipta_belum_biaya }}</span></a>
                                </li>
                                <li
                                    class="menu_cipta_belum_biaya {{ Request::is('*/cipta_belum_biaya') ? 'active' : '' }}">
                                    <a href="{{ url('/admin/cipta_belum_biaya') }}"><i class="icon-pen-minus"></i>
                                        <span>Tidak Dibiayai</span> <span
                                            class="badge badge-warning">{{ $jumlah_cipta_tidak_biaya }}</span></a>
                                </li>
                                <li
                                    class="menu_cipta_sudah_biaya {{ Request::is('*/cipta_sudah_biaya') ? 'active' : '' }}">
                                    <a href="{{ url('/admin/cipta_sudah_biaya') }}"><i class="icon-pen-plus"></i>
                                        <span>Sudah Dibiayai</span><span
                                            class="badge badge-success">{{ $jumlah_cipta_sudah_biaya }}</span></a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="#"><i class="icon-design"></i> <span>Ki Komunal</span><span
                                    class="badge badge-default">{{ $jumlah_ki_komunals_belum_biaya }}</span></a>
                            <ul>
                                <li
                                    class="menu_ki_komunal_belum_biaya {{ Request::is('*/ki_komunal_belumverif_biaya') ? 'active' : '' }}">
                                    <a href="{{ url('/admin/ki_komunal_belumverif_biaya') }}"><i
                                            class="icon-pen2"></i> <span>Belum Diverifikasi</span> <span
                                            class="badge badge-default">{{ $jumlah_ki_komunals_belum_biaya }}</span></a>
                                </li>
                                <li
                                    class="menu_ki_komunal_belum_biaya {{ Request::is('*/ki_komunal_belum_biaya') ? 'active' : '' }}">
                                    <a href="{{ url('/admin/ki_komunal_belum_biaya') }}"><i class="icon-pen-minus"></i>
                                        <span>Tidak Dibiayai</span> <span
                                            class="badge badge-warning">{{ $jumlah_ki_komunals_tidak_biaya }}</span></a>
                                </li>
                                <li
                                    class="menu_ki_komunal_sudah_biaya {{ Request::is('*/ki_komunal_sudah_biaya') ? 'active' : '' }}">
                                    <a href="{{ url('/admin/ki_komunal_sudah_biaya') }}"><i class="icon-pen-plus"></i>
                                        <span>Sudah Dibiayai</span><span
                                            class="badge badge-success">{{ $jumlah_ki_komunals_sudah_biaya }}</span></a>
                                </li>
                            </ul>
                        </li>

                    </ul>
                </div>
            </div>
            <!-- /main navigation -->

        </div>
    </div>
</div>
<script type="text/javascript">
    @if (session()->has('nama_menu_sidebar'))
        $('.{{ session()->get('nama_menu_sidebar') }}').addClass('active');
    @endif
</script>
