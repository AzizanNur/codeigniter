<div class="br-pageheader">
	<nav class="breadcrumb pd-0 mg-0 tx-12">
	  <a class="breadcrumb-item" href="#">Dashboard</a>
	  <span class="breadcrumb-item active">Kategori</span>
	</nav>
</div><!-- br-pageheader -->


<div class="br-pagebody">

	<div class="br-section-wrapper">
			<div class="row">
				<div class="col-md-6">
					<h6 class="br-section-label">Kategori Produk</h6>
				</div>
				<div class="col-md-6 text-right">
					<a href="javascript:void(0)" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modaldemo1">Tambah Kategori</a>
				</div>
			</div>
          
			<?=$this->session->flashdata('messagebox');?>
			<hr>
            <div class="table-wrapper">
            <table class="table display table-striped table-hover">
              <thead>
                <tr>
                  <th class="wd-30">No</th>
                  <th>Kategori</th>
                  <th>Tipe</th>
                  <th class="wd-150">Action</th>
                </tr>
              </thead>
              <tbody>
               <?
					$i=1;
					foreach($result->result() as $key){
			   ?>
			   <tr>
                  <td><?=$i?></td>
                  <td><?=$key->KATEGORI?></td>
                  <td><?=$key->TIPE?></td>
                  <td>
                  	<a href="<?=base_url()?>kategori/edit-kat/<?=$key->IDKAT?>" class="editkat" alt="edit" data-id="<?=$key->IDKAT?>" data-kat="<?=$key->KATEGORI?>" title="edit"><i class="ion-android-settings"></i> Edit</a>
                  	&nbsp;
					<a href="javascript:void(0)" class="hapuskat" alt="edit" title="hapus" id="<?=base_url()?>kat/delete/<?=$key->IDKAT?>"><i class="ion-android-delete"></i> Hapus</a>
                  </td>

                </tr>
					<? $i++;} ?>
              </tbody>
            </table>
          </div><!-- table-wrapper -->
		<?=$links;?>
		  
	</div>
</div>

</div><!-- br-pagebody -->



 <!-- BASIC MODAL -->
<div id="modaldemo1" class="modal fade">
<div class="modal-dialog modal-dialog-centered" role="document">
  <div class="modal-content bd-0 tx-14">
	<div class="modal-header pd-y-20 pd-x-25">
	  <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Tambah Kategori</h6>
	  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		<span aria-hidden="true">&times;</span>
	  </button>
	</div>
	<form method="post" action="" data-parsley-validate>
	<div class="modal-body pd-25">
	 
	<div class="form-group">
	  <label class="form-control-label">Kategori: <span class="tx-danger">*</span></label>
	  <input class="form-control" type="text" name="kategori" value="" placeholder="Masukan Kategori" required>

	</div>
	
	 <div class="form-group mg-b-10-force">
		  <label class="form-control-label">Tipe: <span class="tx-danger">*</span></label>
		  <select class="form-control" name="tipe" data-select2-id="1" tabindex="-1" aria-hidden="true">
			<?
				foreach($tipe->result() as $key){
			?>
			<option value="<?=$key->IDKAT?>"><?=$key->KATEGORI?></option>
				<?}?>
			</select>
		</div>
	  
	</div>
	<div class="modal-footer">
	  <button type="submit" class="btn btn-primary tx-uppercase btn-sm"  name="submitadd" value="submitadd">Simpan</button>
	</div>
	</form>
  </div>
</div><!-- modal-dialog -->
</div><!-- modal -->


<div id="modaledit" class="modal fade">
<div class="modal-dialog modal-dialog-centered" role="document">
  <div class="modal-content bd-0 tx-14">
	<div class="modal-header pd-y-20 pd-x-25">
	  <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Tambah Kategori</h6>
	  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		<span aria-hidden="true">&times;</span>
	  </button>
	</div>
	<form method="post" action="" data-parsley-validate>
	<div class="modal-body pd-25">
	 
	<div class="form-group">
	  <label class="form-control-label">Kategori: <span class="tx-danger">*</span></label>
	  <input class="form-control" type="text" name="katedit" id="katedit" value="" placeholder="Masukan Kategori" required>
	  <input type="hidden" name="idedit" id="idedit">
	</div>
	
	 <div class="form-group mg-b-10-force">
		  <label class="form-control-label">Tipe: <span class="tx-danger">*</span></label>
		  <select class="form-control" name="tipe" data-select2-id="1" tabindex="-1" aria-hidden="true">
			<?
				foreach($tipe->result() as $key){
			?>
			<option value="<?=$key->IDKAT?>"><?=$key->KATEGORI?></option>
				<?}?>
			</select>
		</div>
	  
	</div>
	<div class="modal-footer">
	  <button type="submit" class="btn btn-primary tx-uppercase btn-sm" name="submitedit" value="submitedit">Simpan</button>
	</div>
	</form>
  </div>
</div><!-- modal-dialog -->
</div><!-- modal -->
