
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
          <table id="tabelekspedisi" class="table table-bordered table-hover">
            <thead>
              <tr>
                <th>KODE EKSPEDISI</th>
                <th>NAMA EKSPEDISI</th>
                <th>TELEPON</th>
              </tr>
            </thead>
            <tbody>
              <?php 
                foreach ($ekspedisi as $menu) { 
                ?>
                  <tr>
                    <td><?php echo $menu->KODE_EKSPEDISI; ?></td>
                    <td><?php echo $menu->EKSPEDISI; ?></td>
                    <td><?php echo $menu->TELEPON_1; ?></td>
                  </tr>
                <?php   
              }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </section>

