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
          <table id="tblJnsTrans" class="table table-bordered table-hover">
            <thead>
              <tr>
                <th>KODE JENIS</th>
                <th>JENIS TRANSAKSI</th>
              </tr>
            </thead>
            <tbody>
              <?php 
                foreach ($jnstrans as $jnstrans) { 
                ?>
                  <tr>
                    <td><?php echo $jnstrans->KODE_JNS_TRANS; ?></td>
                    <td><?php echo $jnstrans->JENIS_TRANSAKSI; ?></td>
                  </tr>
                <?php   
              }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </section>