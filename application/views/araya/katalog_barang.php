  <div class="content-wrapper">
    <section class="content-header">
      
    </section>
    <section class="content">
      <div class="box">
        <div class="box-header">
          <?php 
            echo $judul;
            ?>
        </div>
        <div class="box-body">
          <table id="tblKatalogBarang" class="table table-bordered table-hover">
            <thead>
              <tr>
                <th>KODE BARANG</th>
                <th>NAMA BARANG</th>
                <th>PRODUSEN</th>
                <th>HARGA BELI</th>
                <th>HARGA JUAL</th>
                <th>TIPE</th>
              </tr>
            </thead>
            <tbody>
              <?php 
                foreach ($katalog as $katalog) { 
                ?>
                  <tr>
                    <td><?php echo $katalog->KODE_BARANG; ?></td>
                    <td><?php echo $katalog->NAMA_BARANG; ?></td>
                    <td><?php echo $katalog->PRODUSEN; ?></td>
                    <td><?php echo $katalog->HARGA_BELI; ?></td>
                    <td><?php echo $katalog->HARGA_JUAL; ?></td>
                    <td><?php echo $katalog->TIPE_BARANG; ?></td>
                  </tr>
                <?php   
              }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </section>