<div class="br-pageheader">
	<nav class="breadcrumb pd-0 mg-0 tx-12">
	  <a class="breadcrumb-item" href="#">Dashboard</a>
	  <span class="breadcrumb-item active"><?=$title?></span>
	</nav>
</div><!-- br-pageheader -->


<div class="br-pagebody">
	
    <div class="br-section-wrapper">
            <div class="row">
				<div class="col-md-6">
					<h6 class="br-section-label"><?=$title?></h6>
				</div>
                <div class="col-md-6 text-right">
					<a href="<?=base_url()?>market_prod/add/" class="btn btn-success btn-sm">Tambah Market Produk</a>
				</div>
			</div>
           <p>
	       <?=$response?>
           <?=$this->session->flashdata('messagebox');?>		
			<hr>
            <div class="table-wrappers">
            <table id="datatable" class="table display  nowrap">
              <thead>
                <tr>
                  <th class="wd-30">No</th>
                  <th>Nama</th>
                  <th>Kode</th>
                  <th>Harga Beli</th>
                  <th>Harga Jual</th>
                  <th>Admin</th>
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
                  <td><?=$key->NAMA?></td>
                  <td><?=$key->KODE?></td>
                  <td><?=$key->HARGA_BELI?></td>
                  <td><?=$key->HARGA_JUAL?></td>
                  <td><?=$key->ADMIN?></td>
                  <td>
                  <a href="<?=base_url()?>market_prod/edit/<?=$key->IDPRODUK;?>" class="editprod" alt="edit" title="edit"><i class="ion-android-settings"></i> Edit</a>
                  <a href="javascript:void(0)" class="hapuskat" alt="edit" title="hapus" id="<?=base_url()?>market_prod/delete/<?=$key->IDPRODUK;?>"><i class="ion-android-delete"></i> Hapus</a>
                  </td>
                  
                </tr>
					<? $i++;} ?>
              </tbody>
            </table>
          </div><!-- table-wrapper -->

		  
	</div>
</div>

</div><!-- br-pagebody -->



 <!-- BASIC MODAL -->
<div id="modaldemo1" class="modal fade">
<div class="modal-dialog modal-dialog-centered" role="document">
  <div class="modal-content bd-0 tx-14">
	<div class="modal-header pd-y-20 pd-x-25">
	  <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Tambah User</h6>
	  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		<span aria-hidden="true">&times;</span>
	  </button>
	</div>
    <form method="post" action="" enctype="multipart/form-data">
	<div class="modal-body pd-25">
	
	<div class="form-group">
	  <label class="form-control-label">Nama: <span class="tx-danger">*</span></label>
	  <input class="form-control" type="text" name="nama" value="" placeholder="" required>
	</div>
    
    <div class="form-group">
	  <label class="form-control-label">Kode: <span class="tx-danger">*</span></label>
	  <input class="form-control" type="text" name="kode" value="" placeholder="" required>
	</div>
    
    <div class="form-group">
	  <label class="form-control-label">Harga Beli: <span class="tx-danger">*</span></label>
	  <input class="form-control" type="text" name="harga_beli" value="" placeholder="" required>
	</div>
    
    <div class="form-group">
	  <label class="form-control-label">Harga Jual: <span class="tx-danger">*</span></label>
	  <input class="form-control" type="text" name="harga_jual" value="" placeholder="" required>
	</div>
    
    <div class="form-group">
	  <label class="form-control-label">Admin: <span class="tx-danger">*</span></label>
	  <input class="form-control" type="text" name="admin" value="" placeholder="" required>
	</div>
    
    <div class="form-group">
      <label class="form-control-label">Kategori: <span class="tx-danger">*</span></label>
      <select class="form-control" name="kategori" data-select2-id="1" tabindex="-1" aria-hidden="true">
		<?
			foreach($katz->result() as $key){
		?>
		 <option value="<?=$key->IDKAT?>"><?=$key->KATEGORI?></option>
		<?}?>
		</select>
	</div>
	
    
    <div class="form-group">
	  <label class="form-control-label">Keterangan: <span class="tx-danger">*</span></label>
	  <input class="form-control" type="text" name="ket" value="" placeholder="" required>
	</div>
    
    <div class="form-group">
	  <label class="form-control-label">Gambar: <span class="tx-danger">*</span></label>
	  <input class="form-control" type="file" name="gambar" placeholder="Upload gambar">
	</div>
    
    <div class="form-group">
	  <label class="form-control-label">Aktif: <span class="tx-danger">*</span></label>
	  <input class="form-control" type="text" name="aktif" value="" placeholder="" required>
	</div>
	  
	</div>
	<div class="modal-footer">
	  <button type="submit" class="btn btn-primary tx-uppercase btn-sm">Tambah Data</button>
	</div>
	</form>
  </div>
</div><!-- modal-dialog -->
</div><!-- modal -->