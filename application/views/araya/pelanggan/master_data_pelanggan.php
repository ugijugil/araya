  <div class="content-wrapper">
    <section class="content-header">
      <div class="container">
        <div class="row">
          <div class="col">
            <ol class="breadcrumb">
              <li><a href="<?php echo site_url('Welcome') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
              <li><a href="#">Master Data</a></li>
              <li class="active">Data Pelanggan</li>
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
      <div class="box">
            <div class="box-header">
              <h1 class="box-title"><?php echo $judul ?></h1>
              <div class="box-tools">
                <!--<ul class="pagination pagination-sm no-margin pull-right">
                  <li><a href="#">«</a></li>
                  <li><a href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">»</a></li>
                </ul>-->
                <a class="btn btn-large btn-default fa fa-plus" href="<?php echo site_url('ctrlDataPelanggan/formPelanggan') ?>"></a>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">

                <table class="table">
                  <tbody><tr>
                    <th style="width: 40px">ACTION</th>
                    <th>KODE PEL</th>
                    <th>NAMA</th>
                    <th>ALAMAT</th>
                    <th>TELEPON 1</th>
                    <th>EMAIL</th>
                  </tr>
                  <?php 
                  foreach ($pelanggan as $pelanggan) { 
                  ?>
                    <form role="form" action="<?php echo site_url('ctrlDataPelanggan/editPelanggan');  ?>">
                      <tr>
                        <td>
                          <div class="btn-group">
                            <button type="button" class="btn btn-default dropdown-toggle fa fa-gear" data-toggle="dropdown" aria-expanded="true">
                              <span class="caret"></span>
                              <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <ul class="dropdown-menu" role="menu">
                              <li><a >Detail Info</a></li>
                              <li class="divider"></li>
                              <li><a href="<?php echo site_url('ctrlDataPelanggan/viewPelanggan/'.$pelanggan->KODE_PELANGGAN);  ?>">Edit</a></li>
                              <li><a href="#">Delete</a></li>
                            </ul>

                          </div>
                        </td>
                        <td><?php echo $pelanggan->KODE_PELANGGAN; ?></td>
                        <td><?php echo $pelanggan->NAMA; ?></td>
                        <td><?php echo $pelanggan->ALAMAT; ?></td>
                        <td><?php echo $pelanggan->TELEPON_1; ?></td>
                        <td><?php echo $pelanggan->EMAIL; ?></td>
                      </tr>
                    </form>
                  <?php   
                }
                ?>
                </tbody>
                </table>
              
            </div>
            <!-- /.box-body -->
      </div>
    </section>