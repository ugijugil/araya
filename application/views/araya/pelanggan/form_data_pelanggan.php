  <div class="content-wrapper">
  <section class="content-header">
    <div class="container">
      <div class="row">
        <div class="col">
          <ol class="breadcrumb">
            <li><a href="<?php echo site_url('Welcome') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Master Data</a></li>
            <li><a href="<?php echo site_url('ctrlDataPelanggan') ?>">Data Pelanggan</a></li>
            <li class="active">Tambah Data Pelanggan</li>
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
            <form role="form" action="<?php echo site_url('ctrlDataPelanggan/tambahPelanggan') ?>" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label for="txtKodePelanggan">Kode Pelanggan</label>
                  <input name="txtKodePelanggan" disabled="disabled" class="form-control" id="txtKodePelanggan" placeholder="Kode Pelanggan">
                </div>
                <div class="form-group">
                  <label for="txtNamaPelanggan">Nama Pelanggan</label>
                  <input name ="txtNamaPelanggan" class="form-control" id="txtNamaPelanggan" placeholder="Nama Pelanggan">
                </div>
                <div class="form-group">
                  <label for="txtAlamat">Alamat</label>
                  <input name="txtAlamat" class="form-control" id="txtAlamat" placeholder="Alamat Pengiriman">
                </div>
                <div class="form-group">
                  <label for="txtEmail">Email</label>
                  <input name="txtEmail" type="email" class="form-control" id="txtEmail" placeholder="Email">
                </div>
                <div class="form-group">
                  <label for="txtTelp1">Telepon 1</label>
                  <input name="txtTelp1" class="form-control" id="txtTelp1" placeholder="Telepon 1">
                </div>
                <div class="form-group">
                  <label for="txtTelp2">Telepon 2</label>
                  <input name="txtTelp2" class="form-control" id="txtTelp2" placeholder="Telepon 2">
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
  </section>