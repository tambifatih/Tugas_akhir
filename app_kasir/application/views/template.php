
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>apk_kasir penjualan</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="<?=base_url()?>asset/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?=base_url()?>asset/bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?=base_url()?>asset/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="<?=base_url()?>asset/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="<?=base_url()?>asset/dist/css/skins/_all-skins.min.css">
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
   <header class="main-header">
      <a href="<?=base_url('dasboard')?>" class="logo">
        <div class="logo">
          <b>KASIR</b>
          <span class="logo-mini"><b>A</b>LT</span>
          <img src="<?= base_url();?>logo.png" style="width:35px; height:35px"> 
          penjualan
      
        </div>
      </a> 
    <nav class="navbar navbar-static-top">
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown tasks-menu">
<!--             <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-flag-o"></i>
              <span class="label label-danger">3</span>
            </a> -->
            <ul class="dropdown-menu">
              <li class="header">You have 3 tasks</li>
              <li>
              <ul class="menu"> 
                <li>
                  <a href="#">
                      <h3>
                        Design some buttons
                        <small class="pull-right">20%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">20% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer">
                <a href="#">View all tasks</a>
              </li>
            </ul>
          </li>
          <!-- User Account -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?=base_url()?>asset/dist/img/avatar.png" class="user-image" alt="User Image">
              <span class="hidden-xs"><?=$this->fungsi->user_login()->username?></span>
            </a>
            <ul class="dropdown-menu">
              <li class="user-header">
                <img src="<?=base_url()?>asset/dist/img/avatar.png" class="img-circle" alt="User Image">
                <p><?=$this->fungsi->user_login()->name?>
                  <small><?=$this->fungsi->user_login()->address?></small>
                </p>
              </li>
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                   <a href="<?=site_url('auth/logout') ?>" class="btn btn-flat bg-red">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column -->
  <aside class="main-sidebar">
    <section class="sidebar">
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?=base_url()?>asset/dist/img/avatar.png" class="img-circle">
        </div>
        <div class="pull-left info">
          <p><?=ucfirst($this->fungsi->user_login()->username)?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- sidebar menu  -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li <?=$this->uri->segment(1) == 'dasboard' || $this->uri->segment(1) == '' ? 'class="active"' : '' ?>>
          <a href="<?=site_url('dasboard')?>"><i class="fa fa-dashboard"></i><span>Dashboard</span></a>
        </li>

        <li <?=$this->uri->segment(1) == 'supplier' ? 'class="active"' : '' ?>>
          <a href="<?=site_url('supplier')?>"><i class="fa fa-truck"></i><span>Suppliers</span></a>
        </li>

        <li <?=$this->uri->segment(1) == 'costumer' ? 'class="active"' : '' ?>>
          <a href="<?=site_url('costumer')?>"><i class="fa fa-users"></i><span>Costumers</span></a>
        </li>
        <li class="treeview <?=$this->uri->segment(1) == 'category' || $this->uri->segment(1) == 'unit' || 
        $this->uri->segment(1) == 'item' ? 'active' : '' ?>">
          <a href="#">
            <i class="fa fa-archive"></i><span>Produk</span>
            <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
          </a>
          <ul class="treeview-menu">
            <li <?=$this->uri->segment(1) == 'category'?>><a href="<?=site_url('category')?>"><i class="fa fa-circle-o"></i>Kategori</a></li>
            <li <?=$this->uri->segment(1) == 'unit'?>><a href="<?=site_url('unit')?>"><i class="fa fa-circle-o"></i>Unit</a></li>
            <li <?=$this->uri->segment(1) == 'item'?>><a href="<?=site_url('item')?>"><i class="fa fa-circle-o"></i>Item</a></li>
          </ul>
        </li>
        <li class="treeview <?=$this->uri->segment(1) == 'penjualan' || $this->uri->segment(1) == 'stok_in' || 
        $this->uri->segment(1) == 'stok_out' ? 'active' : '' ?>">
          <a href="#">
            <i class="fa fa-shopping-cart"></i><span>Transaksi</span>
            <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
          </a>
          <ul class="treeview-menu">
            <li <?=$this->uri->segment(1) == 'penjualan'?>><a href="<?=site_url('penjualan')?>"><i class="fa fa-circle-o"></i>Sales</a></li>
            <li <?=$this->uri->segment(1) == 'stok_in'?>><a href="<?=site_url('stok_in')?>"><i class="fa fa-circle-o"></i>Stok in</a></li>
            <li <?=$this->uri->segment(1) == 'stok_out'?>><a href="<?=site_url('stok_out')?>"><i class="fa fa-circle-o"></i>Stok out</a></li>
          </ul>
        </li>
<!-- 
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i><span>Laporan</span>
            <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i>Sales</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i>Stok</a></li>
          </ul>
        </li> -->

        <!-- untuk masuk user kasir -->
        <?php if($this->fungsi->user_login()->level == 1) { ?>
        <li class="header">SETTING</li>
        <li><a href="<?=site_url('user')?>"><i class="fa fa-user"></i> <span>User</span></a></li>
        <?php } ?>
      </ul>
    </section>
  </aside>
  
  <!-- Content Wrapper -->
  <div class="content-wrapper">
      <?php echo $contents ?>   
  </div>
    
 <!--  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer> -->
</div>            
                
<script src="<?=base_url()?>asset/bower_components/jquery/dist/jquery.min.js"></script>
<script src="<?=base_url()?>asset/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?=base_url()?>asset/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="<?=base_url()?>asset/dist/js/adminlte.min.js"></script>

<script src="<?=base_url()?>asset/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?=base_url()?>asset/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- implementasi data table -->
</body>
</html>
