<ul class="list-unstyled menu-categories" id="accordionExample">
    <li class="menu">
        <a href="<?php echo base_url('/')?>" aria-expanded="true" class="dropdown-toggle">
            <div class="">
                <i class="flaticon-computer-6 ml-3"></i>
                    <span>Beranda</span>                
            </div>
        </a>                        
    </li>
    
    <li class="menu">
        <a href="#components" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
            <div class="">
                <i class="flaticon-3d-cube"></i>
                <span>Master Data</span>
            </div>
            <div>
                <i class="flaticon-right-arrow"></i>
            </div>
        </a>
        <ul class="collapse submenu list-unstyled" id="components" data-parent="#accordionExample">
            <li>
                <a href="javascript:void(0);" onclick="loadmenu('walikelas')" var-url="walikelas" class="walikelas"> Walikelas </a>
            </li>
            <li>
                <a href="component_keypad.html"> Atur Tanggal Libur </a>
            </li>

            <li>
                <a href="component_rating.html"> Kelola Template </a>
            </li>                            
        </ul>
    </li>

    <li class="menu">
        <a href="#forms" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
            <div class="">
                <i class="flaticon-copy-line"></i>
                <span>Rapor Bulanan</span>
            </div>
            <div>
                <i class="flaticon-right-arrow"></i>
            </div>
        </a>
        <ul class="collapse submenu list-unstyled" id="forms" data-parent="#accordionExample">
            <li>
                <a href="javascript:void(0);" onclick="loadmenu('input-nilai-rapor-bulanan')" var-url="input-nilai-rapor-bulanan" class="input-nilai-rapor-bulanan"> Input Nilai Lap </a>
            </li>
            <li>
                <a href="javascript:void(0);" onclick="loadmenu('laporan-nilai-bulanan')" var-url="laporan-nilai-bulanan" class="laporan-nilai-bulanan"> Laporan Nilai </a>
            </li>                            
        </ul>
    </li>

    <li class="menu">
        <a href="#pages" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
            <div class="">
                <i class="flaticon-copy"></i>
                <span>Rapor Semester</span>
            </div>
            <div>
                <i class="flaticon-right-arrow"></i>
            </div>
        </a>
        <ul class="collapse submenu list-unstyled" id="pages" data-parent="#accordionExample">
            <li>
                <a href="javascript:void(0);" onclick="loadmenu('input-nilai-rapor-semester')" var-url="input-nilai-rapor-semester" class="input-nilai-rapor-semester"> Input Nilai Lap </a>
            </li>
            <li>
                <a href="javascript:void(0);" onclick="loadmenu('laporan-nilai-semester')" var-url="laporan-nilai-semester" class="laporan-nilai-semester"> Laporan Nilai </a>
            </li>   
        </ul>
    </li>

    <li class="menu">
        <a href="#users" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
            <div class="">
                <i class="flaticon-user-group"></i>
                <span>Kelulusan</span>
            </div>
            <div>
                <i class="flaticon-right-arrow"></i>
            </div>
        </a>
        <ul class="collapse submenu list-unstyled" id="users" data-parent="#accordionExample">
            <li>
                <a href="user_profile.html"> Upload SKL Siswa </a>
            </li>
            <li>
                <a href="user_account_setting.html"> Laporan SKL Siswa </a>
            </li>
        </ul>
    </li>

    <li class="menu">
        <a href="#modules" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
            <div class="">
                <i class="flaticon-computer-5"></i>
                <span>E-Learning</span>
            </div>
            <div>
                <i class="flaticon-right-arrow"></i>
            </div>
        </a>
        <ul class="collapse submenu list-unstyled" id="modules" data-parent="#accordionExample">
            <li>
                <a href="modules_widgets.html"> Module Pembelajaran </a>
            </li>
            <li>
                <a href="modules_table_and_event.html"> Bank Soal </a>
            </li>
            <li>
                <a href="modules_charts_and_maps.html"> Hasil Ujian </a>
            </li>                            
        </ul>
    </li>
</ul>