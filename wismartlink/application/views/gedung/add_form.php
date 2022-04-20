<div class="am-pagetitle">
  <h5 class="am-title"><?php echo $title; ?></h5>
</div><!-- am-pagetitle -->

<div class="am-mainpanel">
  <div class="am-pagebody">
        <!-- your content goes here -->
        <form method="POST" action="<?=base_url()?>save-gedung/<?=$typelink?>">
            <div class="row row-sm mg-t-20">
              <div class="col-xl-6">
                <div class="card pd-20 pd-sm-40 form-layout form-layout-4">
                  <h6 class="card-body-title">Left Label Alignment</h6>
                  <p class="mg-b-20 mg-sm-b-30">A basic form where labels are aligned in left.</p>
                  <div class="row">
                    <label class="col-sm-4 form-control-label">Kode Gedung:</label>
                    <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                      <input type="text" class="form-control" required="required" id="kodegedung" name="kodegedung" value="<?php echo (isset($kodegedung_)) ? $kodegedung_ : '';?>" placeholder="">
                    </div>
                  </div><!-- row -->
                  <div class="row mg-t-20">
                    <label class="col-sm-4 form-control-label">Nama Gedung:</label>
                    <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                      <input type="text" class="form-control" required="required" id="namagedung" name="namagedung" value="<?php echo (isset($namagedung_)) ? $namagedung_ : '';?>" placeholder="">
                    </div>
                  </div>
                  <div class="row mg-t-20">
                    <label class="col-sm-4 form-control-label">Alamat:</label>
                    <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                      <input type="text" class="form-control" required="required" id="alamat" name="alamat" value="<?php echo (isset($alamat_)) ? $alamat_ : '';?>" placeholder="">
                    </div>
                  </div>
                  <div class="row mg-t-20">
                    <label class="col-sm-4 form-control-label">Kota:</label>
                    <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                      <input type="text" class="form-control" required="required" id="kota" name="kota" value="<?php echo (isset($kota_)) ? $kota_ : '';?>" placeholder="">
                      <input type="hidden" class="form-control" id="idgedung" name="idgedung" value="<?php echo (isset($idgedung_)) ? $idgedung_ : '';?>">
                    </div>
                  </div>
                  <div class="form-layout-footer mg-t-30">
                    <button type="submit" class="btn btn-info mg-r-5">Submit Form</button>
                  </form>  
                    <input class="btn btn-secondary" TYPE="button" VALUE="Cancel" onClick="history.go(-1);">
                  </div><!-- form-layout-footer -->
                </div><!-- card -->
              </div><!-- col-6 -->
         </div><!-- am-pagebody -->      
    </div><!-- am-mainpanel -->
</div>