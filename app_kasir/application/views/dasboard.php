<!-- <section class="content-header">
      <h1>
        Dashboard
        <small>Control Panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
        <li class="active">Dasboard</li>
      </ol>
    </section> -->
    
      <!-- main contents -->
      <section class="content">
      <div class="text-center">
        <h1><font face="verdana" color="green"  ><b>SELAMAT DATANG DI APLIKASI KASIR PENJUALAN</b></font></h1>
         <img src="images.jpg" class="img-circle" alt="Cinque Terre" width="304" height="236"> 
      </div>
      </section>
       <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-aqua">
                <div class="inner">
                  <h3><?=$total; ?></h3>

                  <p>Supplier</p>
                </div>
                <div class="icon">
                  <i class="fa fa-truck"></i>
                </div>
                <a href="<?php echo base_url('supplier') ?>" class="small-box-footer"><i class="fa fa-arrow-circle-right">More info </i></a>
              </div>
            </div>

            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-green">
                <div class="inner">
                  <h3><?=$total1; ?></h3>

                  <p>Customers</p>
                </div>
                <div class="icon">
                  <i class="fa fa-users"></i>
                </div>
                <a href="<?php echo base_url('pelanggan') ?>" class="small-box-footer"><i class="fa fa-arrow-circle-right">More info </i></a>
              </div>
            </div>

            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-yellow">
                <div class="inner">
                  <h3><?=$total2; ?></h3>

                  <p>Category</p>
                </div>
                <div class="icon">
                  <i class="fa fa-archive"></i>
                </div>
                <a href="<?php echo base_url('category') ?>" class="small-box-footer"><i class="fa fa-arrow-circle-right">More info </i></a>
              </div>
            </div>

            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-yellow">
                <div class="inner">
                  <h3><?=$total3; ?></h3>

                  <p>Units</p>
                </div>
                <div class="icon">
                  <i class="fa fa-archive"></i>
                </div>
                <a href="<?php echo base_url('unit') ?>" class="small-box-footer"> <i class="fa fa-arrow-circle-right">More info</i></a>
              </div>
            </div>

            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-yellow">
                <div class="inner">
                  <h3><?=$total4; ?></h3>

                  <p>Item</p>
                </div>
                <div class="icon">
                  <i class="fa fa-archive"></i>
                </div>
                <a href="<?php echo base_url('item') ?>" class="small-box-footer"> <i class="fa fa-arrow-circle-right">More info</i></a>
              </div>
            </div>

            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-red">
                <div class="inner">
                  <h3><?=$total5; ?></h3>

                  <p>Stock_in</p>
                </div>
                <div class="icon">
                  <i class="fa fa-shopping-cart"></i>
                </div>
                <a href="<?php echo base_url('stok_in') ?>" class="small-box-footer"> <i class="fa fa-arrow-circle-right">More info</i></a>
              </div>
            </div>

            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-red">
                <div class="inner">
                  <h3><?=$total6; ?></h3>

                  <p>Stock_out</p>
                </div>
                <div class="icon">
                  <i class="fa fa-shopping-cart"></i>
                </div>
                <a href="<?php echo base_url('stok_out') ?>" class="small-box-footer"> <i class="fa fa-arrow-circle-right">More info</i></a>
              </div>
            </div>

             <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-red">
                <div class="inner">
                  <h3><?=$total7; ?></h3>

                  <p>Sales</p>
                </div>
                <div class="icon">
                  <i class="fa fa-shopping-cart"></i>
                </div>
                <a href="<?php echo base_url('penjualan') ?>" class="small-box-footer"> <i class="fa fa-arrow-circle-right">More info</i></a>
              </div>
            </div>

            