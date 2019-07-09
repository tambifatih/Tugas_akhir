<section class="content-header">
      <h1>
        Sales
        <small>Penjualan Barang</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
        <li class="active">Sales</li>
      </ol>
</section>
    
    <!-- main contents -->
    <section class="content">
      
        <div class="box">
            <div class="box-header">
                <h3 class="box-title"><?=ucfirst($page)?> Data Penjualan</h3>
                    <div class="pull-right">
                        <a href="<?=site_url('penjualan')?>" class="btn btn-warning btn-flat">
                            <i class="fa fa-undo"></i> Back
                        </a>
                    </div>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <form action="<?=site_url('penjualan/edit')?>" method="post">
                            <div class="form-group">
                                <label>Nama barang*</label>  
                                <select id="barang" name="nama_barang" class="form-control" required>
                                    <option value="">- Pilih -</option>
                                    <?php foreach($item as $barang) : ?>
                                        <option id="nabar" value="<?= $barang->barcode ?>"><?=$barang->name?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Code*</label>
                                <input id="code" type="" name="code" class="form-control" required></input>
                            </div>
                            <div class="form-group">
                                <label>Jumlah*</label>
                                <input type="number" name="jumlah" class="form-control" required></input>
                            </div>
                            <div class="form-group">
                                <label>Harga</label>
                                <input type="double" name="harga" class="form-control" required></input>
                            </div> 
                            <div class="form-group">
                                <button type="submit" name="<?=$page?>" class="btn btn-success btn-flat">
                                    <i class="fa fa-paper-plane"></i>Simpan</button>
                                <button type="Reset" class="btn btn-flat">Reset</button>
                            </div>
                        </form>
                    </div>  
                </div>
            </div>
        </div>
    </section>

<script type="text/javascript">
var barang = document.getElementById('barang');
var code = document.getElementById("code");

    barang.addEventListener("change", function(){
        code.value = barang.value;
    });
</script>