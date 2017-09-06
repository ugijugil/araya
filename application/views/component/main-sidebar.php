<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel 
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url(); ?>araya_logo.png">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>-->
      <!-- search form 
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>-->
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Menu Utama</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i> <span>Master Data</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo site_url('ctrlDataPelanggan') ?>"><i class="fa fa-users"></i>Data Pelanggan </a></li>
            <li><a href="<?php echo site_url('ctrlDataSupplier') ?>"><i class="fa fa-truck"></i>Data Supplier </a></li>
            <li><a href="<?php echo site_url('ctrlEkspedisi') ?>"><i class="fa fa-plane"></i>Data Ekspedisi </a></li>
            <li><a href="<?php echo site_url('ctrlJnsTransaksi') ?>"><i class="fa fa-exchange"></i>Jenis Transaksi </a></li>
            <li><a href="<?php echo site_url('ctrlKatalogBarang') ?>"><i class="fa fa-database"></i>Katalog Barang </a></li>
          </ul>
        </li>       

        <li class="treeview">
          <a href="#">
            <i class="fa fa-cubes"></i> <span>Material Stock</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo site_url('ctrlStockBarang') ?>"><i class="fa fa-cube"></i>Stock Barang </a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-shopping-cart"></i> <span>Transaksi</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo site_url('ctrlTransPenjualan') ?>"><i class="fa  fa-external-link"></i>Penjualan </a></li>
            <li><a href="<?php echo site_url('ctrlTransPembelian') ?>"><i class="fa fa-cart-arrow-down"></i>Pembelian </a></li>
          </ul>
        </li>

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>