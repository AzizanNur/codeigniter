<div class="br-pageheader">
	<nav class="breadcrumb pd-0 mg-0 tx-12">
	  <a class="breadcrumb-item" href="#">Dashboard</a>
	  <span class="breadcrumb-item active"><?=$headtitle?></span>
	</nav>
</div><!-- br-pageheader -->


<div class="br-pagebody">
	<div class="br-section-wrapper">
          
		  <div class="row">
				<div class="col-md-6">
					<h6 class="br-section-label"><?=$headtitle?></h6>
				</div>
				<div class="col-md-6 text-right">
					<a href="<?=base_url()?>addproduk" class="btn btn-success btn-sm">Tambah Produk</a>
				</div>
			</div>
			<?=$this->session->flashdata('messagebox');?>
			<hr>
            <div class="table-wrapper">
            <table id="datatable1" class="table display responsive nowrap">
              <thead>
                <tr>
                  <th class="wd-30">No</th>
                  <th>Produk</th>
                  <th>Kode</th>
				  <th>Kategori</th>
				  <th class="text-right">Harga Beli</th>
				  <th class="text-right">Harga Jual</th>
                  <th class="wd-150 text-center">Action</th>
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
				  <td><?=$key->KATEGORI?></td>
				  <td class="text-right"><?=toRp($key->HARGA_BELI)?></td>
				  <td class="text-right"><?=toRp($key->HARGA_JUAL)?></td>
                  <td>
					<a href="<?=base_url()?>editproduk/<?=$key->IDPRODUK?>" class="editprod" alt="edit" title="edit"><i class="ion-android-settings"></i> Edit</a>
                  	&nbsp;
					<a href="javascript:void(0)" class="hapusprod" alt="edit" title="hapus" id="<?=base_url()?>prod/delete/<?=$key->IDPRODUK?>"><i class="ion-android-delete"></i> Hapus</a>
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