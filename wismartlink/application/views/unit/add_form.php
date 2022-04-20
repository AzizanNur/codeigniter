<div class="am-pagetitle">
  <h5 class="am-title"><?php echo $title; ?></h5>
</div><!-- am-pagetitle -->

<div class="am-mainpanel">
  <div class="am-pagebody">
        <!-- your content goes here -->
        <form method="POST" action="<?=base_url()?>save-<?=$linkglobal?>/<?=$typelink?>">
            <div class="row row-sm mg-t-20">
              <div class="col-xl-6">
                <div class="card pd-20 pd-sm-40 form-layout form-layout-4">
                  <h6 class="card-body-title">Left Label Alignment</h6>
                  <p class="mg-b-20 mg-sm-b-30">A basic form where labels are aligned in left.</p>
                  <div class="row">
                    <label class="col-sm-4 form-control-label">Nama Unit:</label>
                    <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                      <input type="text" class="form-control" required="required" id="namaunit" name="namaunit" value="<?php echo (isset($namaunit_)) ? $namaunit_ : '';?>" placeholder="">
                    </div>
                  </div><!-- row -->
                  <div class="row mg-t-20">
                    <label class="col-sm-4 form-control-label">Nomer:</label>
                    <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                      <input type="text" class="form-control" required="required" id="nomer" name="nomer" value="<?php echo (isset($nomer_)) ? $nomer_ : '';?>" placeholder="">
                    </div>
                  </div>
                  <div class="row mg-t-20">
                    <label class="col-sm-4 form-control-label">IDGedung:</label>
                    <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                      <input type="text" class="form-control" required="required" id="idgedung" name="idgedung" value="<?php echo (isset($idgedung_)) ? $idgedung_ : '';?>" placeholder="">
                    </div>
                  </div>
                  <div class="row mg-t-20">
                    <label class="col-sm-4 form-control-label">Spek:</label>
                    <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                      <input type="text" class="form-control" required="required" id="spek" name="spek" value="<?php echo (isset($spek_)) ? $spek_ : '';?>" placeholder="">
                    </div>
                  </div>
                  <div class="row mg-t-20">
                    <label class="col-sm-4 form-control-label">Foto:</label>
                    <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                      <input type="text" class="form-control" required="required" id="foto" name="foto" value="<?php echo (isset($spek_)) ? $spek_ : '';?>" placeholder="">
                    </div>
                  </div>
                  <div class="row mg-t-20">
                    <label class="col-sm-4 form-control-label">Keterangan:</label>
                    <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                      <input type="text" class="form-control" required="required" id="ket" name="ket" value="<?php echo (isset($spek_)) ? $spek_ : '';?>" placeholder="">
                    </div>
                  </div>
                  <div class="row mg-t-20">
                    <label class="col-sm-4 form-control-label">Lantai:</label>
                    <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                      <input type="text" class="form-control" required="required" id="lantai" name="lantai" value="<?php echo (isset($lantai_)) ? $lantai_ : '';?>" placeholder="">
                      <input type="hidden" class="form-control" id="id<?=$linkglobal?>" name="id<?=$linkglobal?>" value="<?php echo (isset($iddb_)) ? $iddb_ : '';?>">
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