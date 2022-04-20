<div class="br-pageheader">
	<nav class="breadcrumb pd-0 mg-0 tx-12">
	  <a class="breadcrumb-item" href="#">Dashboard</a>
	  <span class="breadcrumb-item active">Detail Transaksi</span>
	</nav>
</div><!-- br-pageheader -->
	<?
		$row = $result->row();
		$status = ($row->STATUS=="1")?'<i class="fa fa-check tx-success mg-r-8"></i> <span class="tx-success tx-roboto">Berhasil</span>':'<i class="icon ion-information-circled tx-danger  mg-r-8"></i> <span class="tx-danger tx-roboto">Gagal</span>';
		
	?>
      <div class="br-pagebody">

        <div class="card bd-0 shadow-base">
          <div class="card-body pd-30 pd-md-60">
            <div class="d-md-flex justify-content-between flex-row-reverse">
              <h1 class="mg-b-0 tx-uppercase tx-gray-400 tx-mont tx-bold">#<?=$row->NOTRX?></h1>
              <div class="mg-t-25 mg-md-t-0">
                <h6 class="tx-primary">No Anggota : <?=$row->KODE_ANGGOTA?></h6>
                <p class="lh-7">No Hp : <?=$row->NOHP?><br>
                Id Pelanggan : <?=$row->IDPEL?></p>
              </div>
            </div><!-- d-flex -->
			
			 <div class="table-responsive mg-t-40">
              <table class="table">
                <thead>
                  <tr>
                    <th class="wd-5p">#</th>
                    <th class="wd-20p">Produk</th>
                    <th class="tx-left">Hp</th>
                    <th class="tx-left">Id Pelanggan</th>
                    <th class="tx-right">Harga Beli</th>
					<th class="tx-right">Harga Jual</th>
					<th class="tx-center">Payment Via</th>
					<th class="tx-center">Status</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td class="tx-12"><?=$row->PRODUK?></td>
                    <td class="tx-left"><?=$row->NOHP?></td>
                    <td class="tx-left"><?=$row->IDPEL?></td>
                    <td class="tx-right"><?=toRp($row->HARGA_BELI)?></td>
					<td class="tx-right"><?=toRp($row->HARGA_JUAL)?></td>
					<td class="tx-center"><?=$row->PAYMENT_VIA?></td>
					<td class="tx-center"><?=$status?></td>
                  </tr>
				</tbody>
			</table>
			</div>
			
           

            

            <hr class="mg-b-60">
			<?
				if($row->STATUS=="1")
				{
					if($row->IDPEL !="")
					{
						$msg = $row->NOTE;
					}else{
						$msg = "Transaksi Berhasil";
					}
					
				}else{
					$msg = $row->MSG;
				}
				echo "Info : ".'<span class="tx-primary">'.$msg.'</span>';
			
			?>
            

          </div><!-- card-body -->
        </div><!-- card -->

      </div><!-- br-pagebody -->