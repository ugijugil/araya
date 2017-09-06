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
          <table id="tblSupplier" class="table table-bordered table-hover">
            <thead>
              <tr>
                <th>KODE SUPPLIER</th>
                <th>NAMA</th>
                <th>ALAMAT</th>
                <th>TELEPON</th>
              </tr>
            </thead>
            <tbody>
              <?php 
                foreach ($supplier as $supplier ) { 
                ?>
                  <tr>
                    <td><?php echo $supplier->KODE_SUPPLIER; ?></td>
                    <td><?php echo $supplier->NAMA_SUPPLIER; ?></td>
                    <td><?php echo $supplier->ALAMAT; ?></td>
                    <td><?php echo $supplier->TELEPON_1; ?></td>
                  </tr>
                <?php   
              }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </section>