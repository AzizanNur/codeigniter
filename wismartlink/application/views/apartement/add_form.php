<div class="am-pagetitle">
  <h5 class="am-title"><?php echo $title; ?></h5>
</div><!-- am-pagetitle -->

<div class="am-mainpanel">
  <div class="am-pagebody">
        <!-- your content goes here -->
        <form method="POST" action="<?=base_url()?>save-apartement/<?=$typelink?>">
            <div class="row row-sm mg-t-20">
              <div class="col-xl-6">
                <div class="card pd-20 pd-sm-40 form-layout form-layout-4">
                  <h6 class="card-body-title">Left Label Alignment</h6>
                  <p class="mg-b-20 mg-sm-b-30">A basic form where labels are aligned in left.</p>
                  <div class="row">
                    <label class="col-sm-4 form-control-label">Nama APT:</label>
                    <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                      <input type="text" class="form-control" id="namaapt" name="namaapt" value="<?php echo (isset($namaapt_)) ? $namaapt_ : '';?>" placeholder="Nama APT">
                    </div>
                  </div><!-- row -->
                  <div class="row mg-t-20">
                    <label class="col-sm-4 form-control-label">Kode APT:</label>
                    <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                      <input type="text" class="form-control" id="kodeapt" name="kodeapt" value="<?php echo (isset($kodeapt_)) ? $kodeapt_ : '';?>" placeholder="Kode APT">
                      <input type="hidden" class="form-control" id="idapt" name="idapt" value="<?php echo (isset($idapt_)) ? $idapt_ : '';?>">
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