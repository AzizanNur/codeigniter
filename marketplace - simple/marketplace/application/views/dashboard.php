<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



    <meta property="og:image" content="http://themepixels.me/bracketplus/img/bracketplus-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/bracketplus/img/bracketplus-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="Wad System Dashboard.">
    <meta name="author" content="wadsystem">

    <title>Dashboard - admin</title>

    <!-- vendor css -->
    <link href="<?=base_url()?>themes/lib/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="<?=base_url()?>themes/lib/ionicons/css/ionicons.min.css" rel="stylesheet">

    <!-- Bracket CSS -->
    <link href="<?=base_url()?>themes/lib/select2/css/select2.min.css" rel="stylesheet">
	<link href="<?=base_url()?>themes/lib/datatables.net-dt/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="<?=base_url()?>themes/lib/datatables.net-responsive-dt/css/responsive.dataTables.min.css" rel="stylesheet">
	
	<link rel="stylesheet" href="<?=base_url()?>themes/css/bracket.css">
  </head>

  <body>

    <!-- ########## START: LEFT PANEL ########## -->
    <div class="br-logo"><a href=""><span>[</span>Wad <i>System</i><span>]</span></a></div>
    <div class="br-sideleft sideleft-scrollbar">
      <label class="sidebar-label pd-x-10 mg-t-20 op-3">Navigation</label>
      <ul class="br-sideleft-menu" id="mnav">
        <li class="br-menu-item">
          <a href="<?=base_url()?>dashboard" class="br-menu-link">
            <i class="menu-item-icon icon ion-ios-home-outline tx-24"></i>
            <span class="menu-item-label">Dashboard</span>
          </a><!-- br-menu-link -->
        </li><!-- br-menu-item -->
      
		<li class="br-menu-item">
          <a href="<?=base_url()?>kategori" class="br-menu-link">
            <i class="menu-item-icon icon ion-grid tx-24"></i>
            <span class="menu-item-label">Kategori</span>
          </a><!-- br-menu-link -->
        </li><!-- br-menu-item -->
        
		<li class="br-menu-item">
          <a href="#" class="br-menu-link with-sub">
            <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
            <span class="menu-item-label">Produk</span>
          </a><!-- br-menu-link -->
          <ul class="br-menu-sub">
            <li class="sub-item"><a href="<?=base_url()?>produk/pembelian" class="sub-link">Pembelian</a></li>
            <li class="sub-item"><a href="<?=base_url()?>produk/penjualan" class="sub-link">Pembayaran</a></li>
          </ul>
        </li>
		
		<li class="br-menu-item">
          <a href="<?=base_url()?>iklan" class="br-menu-link">
            <i class="menu-item-icon icon ion-ios-film-outline tx-24"></i>
            <span class="menu-item-label">Pengaturan Iklan</span>
          </a><!-- br-menu-link -->
        </li><!-- br-menu-item -->
		
		<li class="br-menu-item">
          <a href="<?=base_url()?>laporan" class="br-menu-link">
            <i class="menu-item-icon icon ion-ios-list-outline tx-24"></i>
            <span class="menu-item-label">Laporan Transaksi</span>
          </a><!-- br-menu-link -->
        </li><!-- br-menu-item -->
		
		<li class="br-menu-item">
          <a href="<?=base_url()?>datauser" class="br-menu-link">
            <i class="menu-item-icon icon ion-ios-people-outline tx-24"></i>
            <span class="menu-item-label">User</span>
          </a><!-- br-menu-link -->
        </li><!-- br-menu-item -->
        
        <li class="br-menu-item">
          <a href="<?=base_url()?>market_kat" class="br-menu-link">
            <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
            <span class="menu-item-label">Market Kategori</span>
          </a><!-- br-menu-link -->
        </li><!-- br-menu-item -->
        
        <li class="br-menu-item">
          <a href="<?=base_url()?>market_prod" class="br-menu-link">
            <i class="menu-item-icon icon ion-ios-film-outline tx-24"></i>
            <span class="menu-item-label">Market Produk</span>
          </a><!-- br-menu-link -->
        </li><!-- br-menu-item -->
        
      </ul><!-- br-sideleft-menu -->

    

      <br>
    </div><!-- br-sideleft -->
    <!-- ########## END: LEFT PANEL ########## -->

    <!-- ########## START: HEAD PANEL ########## -->
    <div class="br-header">
      <div class="br-header-left">
        <div class="navicon-left hidden-md-down"><a id="btnLeftMenu" href=""><i class="icon ion-navicon-round"></i></a></div>
        <div class="navicon-left hidden-lg-up"><a id="btnLeftMenuMobile" href=""><i class="icon ion-navicon-round"></i></a></div>
        <div class="input-group hidden-xs-down wd-170 transition">
          <input id="searchbox" type="text" class="form-control" placeholder="Search">
          <span class="input-group-btn">
            <button class="btn btn-secondary" type="button"><i class="fa fa-search"></i></button>
          </span>
        </div><!-- input-group -->
      </div><!-- br-header-left -->
      <div class="br-header-right">
        <nav class="nav">
          <div class="dropdown">
            <a href="" class="nav-link pd-x-7 pos-relative" data-toggle="dropdown">
              <i class="icon ion-ios-email-outline tx-24"></i>
              <!-- start: if statement -->
              <span class="square-8 bg-danger pos-absolute t-15 r-0 rounded-circle"></span>
              <!-- end: if statement -->
            </a>
          
          </div><!-- dropdown -->
          <div class="dropdown">
            <a href="" class="nav-link pd-x-7 pos-relative" data-toggle="dropdown">
              <i class="icon ion-ios-bell-outline tx-24"></i>
              <!-- start: if statement -->
              <span class="square-8 bg-danger pos-absolute t-15 r-5 rounded-circle"></span>
              <!-- end: if statement -->
            </a>
            
          </div><!-- dropdown -->
          <div class="dropdown">
            <a href="" class="nav-link nav-link-profile" data-toggle="dropdown">
              <span class="logged-name hidden-md-down"><?php $CI =& get_instance(); echo $CI->session->ppobuser;?></span>
              <img src="https://via.placeholder.com/500" class="wd-32 rounded-circle" alt="">
              <span class="square-10 bg-success"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-header wd-250">
              <div class="tx-center">
                <a href=""><img src="https://via.placeholder.com/500" class="wd-80 rounded-circle" alt=""></a>
                <h6 class="logged-fullname">Katherine P. Lumaad</h6>
               
              </div>
              <hr>
              
              <ul class="list-unstyled user-profile-nav">
                <li><a href=""><i class="icon ion-ios-gear"></i> Settings</a></li>
                <li><a href="<?=base_url()?>auth/sign-out"><i class="icon ion-power"></i> Sign Out</a></li>
              </ul>
            </div><!-- dropdown-menu -->
          </div><!-- dropdown -->
        </nav>
       
      </div><!-- br-header-right -->
    </div><!-- br-header -->
    <!-- ########## END: HEAD PANEL ########## -->

    

    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">
	
	 <? 
       if($page !=""){
            $mypath = str_replace('index.php','application/views/data/',$_SERVER['SCRIPT_FILENAME']).$page.".php";
            if(file_exists($mypath)){
                include "data/".$page.".php";   
            }else{
                include"data/default.php";  
            }
        }else{
            include"data/default.php";  
        }
        ?>
      
	  

    </div><!-- br-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->

    <script src="<?=base_url()?>themes/lib/jquery/jquery.min.js"></script>
    <script src="<?=base_url()?>themes/lib/jquery-ui/ui/widgets/datepicker.js"></script>
    <script src="<?=base_url()?>themes/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?=base_url()?>themes/lib/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="<?=base_url()?>themes/lib/moment/min/moment.min.js"></script>
    <script src="<?=base_url()?>themes/lib/peity/jquery.peity.min.js"></script>
	
	<script src="<?=base_url()?>themes/lib/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?=base_url()?>themes/lib/datatables.net-dt/js/dataTables.dataTables.min.js"></script>
    <script src="<?=base_url()?>themes/lib/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?=base_url()?>themes/lib/datatables.net-responsive-dt/js/responsive.dataTables.min.js"></script>
    <script src="<?=base_url()?>themes/lib/select2/js/select2.min.js"></script>
	<script src="<?=base_url()?>themes/lib/parsleyjs/parsley.min.js"></script>
    <script src="<?=base_url()?>themes/js/bracket.js"></script>
	
	 <script>
      /*$(function(){
        'use strict';
		 $('#trxtable').DataTable();
        $('#datatable1').DataTable({
          responsive: false,
          language: {
            searchPlaceholder: 'Search...',
            sSearch: '',
            lengthMenu: '_MENU_ items/page',
          }
        });

        $('#datatable2').DataTable({
          bLengthChange: false,
          searching: false,
          responsive: true
        });

        // Select2
        $('.dataTables_length select').select2({ minimumResultsForSearch: Infinity });
		
		
		
		var current = location.pathname;
		$('#mnav li a').each(function(){
			var $this = $(this);
			// if the current path is like this link, make it active
			if($this.attr('href').indexOf(current) !== -1){
				$this.addClass('active');
			}
		})

      });*/
	$('.hapuskat').on('click', function () {
	    var retVal = confirm("Apakan Anda Yakin ?");
	    if( retVal == true ){
		
		  window.location.href = this.id;
		  return true;
	    }else{
		  return false;
	    }
	});
	$('.editkat').on('click', function () {
		
		$("#idedit").val($(this).data("id"));
		$("#katedit").val($(this).data("kat"));
		//$('#modaledit').modal('show');
	});
	
	$('.hapusprod').on('click', function () { 
	    var retVal = confirm("Apakan Anda Yakin ?");
	    if( retVal == true ){
		
		  window.location.href = this.id;
		  return true;
	    }else{
		  return false;
	    }
	});
	  
    </script>
  </body>
</html>
