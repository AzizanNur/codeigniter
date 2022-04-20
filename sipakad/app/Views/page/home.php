<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<!--  BEGIN CUSTOM STYLE FILE  -->
<link href="<?php echo base_url('public/assets/css/pages/helpdesk.css');?>" rel="stylesheet" type="text/css" />
<!--  END CUSTOM STYLE FILE  -->   
<div id="content" class="main-content">
    <div class="container">
        <div class="page-header">
            <div class="page-title">
                <h3>Beranda</h3>
                <div class="crumbs">
                    <ul id="breadcrumbs" class="breadcrumb">
                        <li><a href="<?php echo base_url('')?>"><i class="flaticon-home-fill"></i></a></li>
                        <li class="active"><a href="#">Beranda</a></li>
                    </ul>
                </div>
            </div>
        </div>
        
        <div class="container">                    
            <div class="helpdesk layout-spacing">
                <div class="hd-header-wrapper mb-5">
                    <div class="row">                                
                        <div class="col-md-12 text-center">
                            <h4 class="mb-5">SELAMAT DATANG, MULAI DENGAN BISMILLAH</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>        
    </div>
</div>
<?= $this->endSection(); ?>