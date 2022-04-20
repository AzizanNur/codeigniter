    <div class="am-pagetitle">
  <h5 class="am-title"><?php echo $title; ?></h5>
</div><!-- am-pagetitle -->
    <div class="am-mainpanel">
      <div class="am-pagebody">

        <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">Basic Responsive DataTable</h6>
          <p class="mg-b-20 mg-sm-b-30">Searching, ordering and paging goodness will be immediately added to the table, as shown in this example.</p>
          <div class="table-wrapper">
          <a href="<?=base_url()?>add-apartement"><button class="btn btn-primary">Input Data</button></a>
            <table id="datatable1" class="table display responsive nowrap">
              <thead>
                <tr>
                  <th class="">ID APT</th>
                  <th class="">Nama APT</th>
                  <th class="">Kode APT</th>
                  <th class="">Aksi</th>
                </tr>
              </thead>
              <tbody>
              <?php foreach($dataapt as $row){?>
                <tr>
                  <td><?php echo $row->IDAPT; ?></td>
                  <td><?php echo $row->NAMAAPT; ?></td>
                  <td><?php echo $row->KODEAPT; ?></td>
                  <td><a href="<?=base_url()?>edit-apartement/<?php echo $row->IDAPT; ?>">EDIT</a> | 
                      <a onclick="return confirm('Are you sure?')" href="<?=base_url()?>delete-apartement/<?php echo $row->IDAPT; ?>">DELETE</a></td>                  
                </tr>
               <?php } ?> 
                
              </tbody>
            </table>
          </div><!-- table-wrapper -->
        </div><!-- card -->
		

      </div><!-- am-pagebody -->
	  
      <div class="am-footer">
        <span>Copyright &copy;. All Rights Reserved. Amanda Responsive Bootstrap 4 Admin Dashboard.</span>
        <span>Created by: ThemePixels, Inc.</span>
      </div><!-- am-footer -->
    </div><!-- am-mainpanel -->