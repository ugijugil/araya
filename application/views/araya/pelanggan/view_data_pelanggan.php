  <div class="content-wrapper">
  <section class="content-header">
    <div class="container">
      <div class="row">
        <div class="col">
          <ol class="breadcrumb">
            <li><a href="<?php echo site_url('Welcome') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Master Data</a></li>
            <li><a href="<?php echo site_url('ctrlDataPelanggan') ?>">Data Pelanggan</a></li>
            <li class="active">Edit Data Pelanggan</li>
          </ol>
        </div>
        <div class="col">
          <h1>
            <?php echo $judul ?>
          </h1>
        </div>
      </div>        
    </div>
    </section>
  <section class="content">
  <div class="box box-primary">
            <!-- /.box-header -->
            <!-- form start -->
            <?php foreach ($pelanggan as $pel) {
              # code...
             ?>
            <form role="form" action="<?php echo site_url('ctrlDataPelanggan/updatePelanggan') ?>" method="post">
              <div class="box-body">
                <div class="form-group">
                  <!--<label for="txtKodePelanggan">Kode Pelanggan</label>-->
                  <input type="hidden" name="txtKodePelanggan"s class="form-control" id="txtKodePelanggan" 
                  placeholder="Kode Pelanggan" value="<?php echo $pel->KODE_PELANGGAN; ?>">
                </div>
                <div class="form-group">
                  <label for="txtNamaPelanggan">Nama Pelanggan</label>
                  <input name ="txtNamaPelanggan" class="form-control" id="txtNamaPelanggan" 
                  placeholder="Nama Pelanggan" value="<?php echo $pel->NAMA; ?>">
                </div>
                <div class="form-group">
                  <label for="txtAlamat">Alamat</label>
                  <input name="txtAlamat" class="form-control" id="txtAlamat" 
                  placeholder="Alamat Pengiriman" value="<?php echo $pel->ALAMAT; ?>">
                </div>
                <div class="form-group">
                  <label for="txtEmail">Email</label>
                  <input name="txtEmail" type="email" class="form-control" id="txtEmail" 
                  placeholder="Email" value="<?php echo $pel->EMAIL; ?>">
                </div>
                <div class="form-group">
                  <label for="txtTelp1">Telepon 1</label>
                  <input name="txtTelp1" class="form-control" id="txtTelp1" 
                  placeholder="Telepon 1" value="<?php echo $pel->TELEPON_1; ?>">
                </div>
                <div class="form-group">
                  <label for="txtTelp2">Telepon 2</label>
                  <input name="txtTelp2" class="form-control" id="txtTelp2" 
                  placeholder="Telepon 2" value="<?php echo $pel->TELEPON_2; ?>">
                </div>
                <div class="form-group" >
                  <input type="hidden" name="txtTglDaftar" class="form-control" id="txtTelp2" 
                  placeholder="Tgl Daftar" value="<?php echo $pel->TGL_DAFTAR; ?>">
                </div>
              </div>

              <?php } ?>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Update</button>
              </div>
            </form>
          </div>
  </section>