<!--  BEGIN CUSTOM STYLE FILE  -->
<style>
    .form-inline .form-control {
        display: inline-block;
        width: -webkit-fill-available;
        vertical-align: middle;
        margin-right: 10px;
    }
    .layout-spacing {
        margin-bottom: 10px;
    }
</style>
<!--  END CUSTOM STYLE FILE  -->   
    <div class="container" >
        <div class="page-header">
            <div class="page-title">
                <h3>Rapor Bulanan</h3>
                <div class="crumbs" style="margin-bottom: -35px;">
                    <ul id="breadcrumbs" class="breadcrumb">
                        <li><a href="<?php echo base_url('')?>"><i class="flaticon-home-fill"></i></a></li>
                        <li class=""><a href="#">Rapor Bulanan</a></li>
                        <li class="active"><a href="#">Input Rapor Bulanan</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row" id="cancel-row">
            <div class="col-lg-12 layout-spacing">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <h4>Tahun Ajaran & Satuan Pendidikan :</h4>
                            </div>                                                                        
                        </div>
                    </div>
                    <div class="widget-content widget-content-area">
                        <form class="form-inline justify-content-center mb-4" style="margin: -26px 0 0 0;">
                            <select id="inputState" class="form-control form-group col-md-4">
                                <option selected="selected">2021/2022</option>
                                <option>2020/2021</option>
                            </select>

                            <select id="inputState" class="form-control form-group col-md-4">
                                <option selected="">TKIS</option>
                                <option>SDIS</option>
                            </select>
                            <button type="submit" class="btn btn-button-7 mb-2" style="margin-top: 10px;">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div> 
        
        <div class="row layout-spacing">
                    <div class="col-lg-12">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-header">                                
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4>SATUAN PENDIDIKAN :</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">
                                <form class="form-vertical" action="#">
                                    <div class="form-group mb-4">
                                        <label class="control-label">Bulan & Tahun:</label>
                                        <select id="inputState" class="form-control">
                                            <option selected="selected">Januari 2021</option>
                                            <option>Februari 2021</option>
                                        </select>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="control-label">Form Upload Nilai:</label>
                                        <input type="file" name="website" class="form-control" placeholder="Website name"> 
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="control-label">Pilih Kelas:</label>
                                        <select id="inputState" class="form-control">
                                            <option selected="selected">A1</option>
                                            <option>A2</option>
                                        </select>
                                    </div>
                                    <input type="submit" value="Submit" class="btn btn-button-7 ml-3 mb-4 mt-3"> 
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

    </div>