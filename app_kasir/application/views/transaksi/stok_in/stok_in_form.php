<section class="content-header">
      <h1>
        Stock in
        <small>Data barang masuk</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
        <li class="active">Stock in</li>
      </ol>
</section>
    
    <!-- main contents -->
    <section class="content">
      
        <div class="box">
            <div class="box-header">
                <h3 class="box-title"><?=ucfirst($page)?> stock in</h3>
                    <div class="pull-right">
                        <a href="<?=site_url('stok_in')?>" class="btn btn-warning btn-flat">
                            <i class="fa fa-undo"></i> Back
                        </a>
                    </div>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <!-- <form action="<?=site_url('stok_in/proses')?>" method="post"> -->
                        <?php echo form_open_multipart('stok_in/proses') ?>
                            <div class="form-group">
                                <label>Tanggal*</label>
                                <input type="hidden" name="id" value="<?=$row->stok_in_id?>">
                                <input type="date" name="tanggal" value="<?=$row->tanggal?>" class="form-control" required></input>
                            </div>
                            <div class="form-group">
                                <label>Nama item*</label>  
                                <select id="item" name="barcode" class="form-control" required>
                                    <option value="">- Pilih -</option>
                                    <?php foreach($item as $barang) : ?>
                                        <option id="bar" value="<?= $barang->barcode ?>"><?=$barang->name?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Code</label>
                                <input type="" id="kode" name="jumlah" class="form-control" value="<?=$row->item_id?>" required></input>
                            </div>  
                            <div class="form-group">
                                <label>Jumlah*</label>
                                <input type="" name="stock" class="form-control" value="<?=$row->stock_in?>" required></input>
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
var item = document.getElementById('item');
var stok = document.getElementById("kode");

    item.addEventListener("change", function(){
        stok.value = item.value;
    });
</script>

