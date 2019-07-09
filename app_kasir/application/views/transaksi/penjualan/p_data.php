<section class="content-header">
      <h1>
        Sales
        <small>Penjualan barang</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
        <li class="active">Sales</li>
      </ol>
</section>
    
    <!-- main contents -->
    <section>
        <div class="container">
        <div class="col-md-4">
            <div class="row">
                <form action="<?=site_url('penjualan/tambah')?>" method="post">
                    <div class="form-group">
                    <div class="form-group">
                        <label>Code transaksi</label>
                        <input value="<?php if(isset($code_transaksi)){ echo $code_transaksi;} else{ echo base_convert(microtime(), 8, 16);} ?>" readonly id="ct" class="form-control" name="code_transaksi" >
                    </div>
                        <label>Kategori</label>
                        <select id="kategori" class="form-control" required >
                        <option value="">Pilih</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Nama barang</label>
                        <select id="barang" class="form-control" name="penjualan" required> 
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Code</label>
                        <input id="code" class="form-control" name="kode" required>
                    </div>
                    <div class="form-group">
                        <label>Jumlah</label>
                        <input id="jum" class="form-control" name="jmlh" required>
                    </div>
                    <div class="form-group">
                        <label>Harga</label>
                        <input id="price" class="form-control" name="price" required>
                    </div>
                    <div class="form-group">
                        <label>Total harga</label>
                        <input id="tot" class="form-control" type="number" value="0" name="total" required>
                    </div>
<!--                     <button id="sub" type="submit" class="btn btn-primary my-1"><i > Tambah </i></button>
 -->                 <div class="pull-right">
                        <button type="submit" class="btn btn-primary btn-flat">
                            <i class="fa fa-plus"></i> Tambah barang
                        </button>
                       
                    </div>
                </form>
                 <a href="<?=site_url('penjualan')?>">
                 <button class="btn btn-primary btn-flat">
                    <i class="fa fa-shopping-cart"  ></i> Transaksi baru
                </button>
                </a>
            </div>
        </div>
        <div class="col-md-2"></div>  
        <div class="col-md-6">
            <table class="table table-bordered table-striped" id="tb">
                <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode transaksi</th>
                            <th>Jumlah item</th>
                            <th>Total harga</th>
                            <th>Action</th>
                        </tr>
                </thead>
                <tbody>
                    <?php $no = 1; if (isset($history)) { 
                        foreach ($history as $key) { ?>
                            <tr>
                                <td>
                                <?= $no++ ?>
                                </td>
                                <td>
                                <?= $key->kode_transaksi ?>
                                </td>
                                <td>
                                <?= $key->jumlah ?>
                                </td>
                                <td>
                                <?= number_format($key->total) ?>
                                </td class="text-center" width="200px">
                                <td>
                                <a target="_blank" href="<?=site_url('penjualan/detail/'.$key->kode_transaksi)?>">
                                <button class= "btn btn-primary">detail</button>
                                </a>
                                </td>
                            </tr>
                        <?php }
                    }?>
                </tbody>
            </table>
        </div>  
    </div>    
</section>

    <section class="content">
      
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Data penjualan <?php if (isset($code_transaksi)) {
                    echo $code_transaksi;
                } ?></h3>
            </div>
            <div class="box-body table-responsive" id="table1">
                <table class="table table-bordered table-striped" >
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama barang</th>
                            <th>Code</th>
                            <th>Jumlah</th>
                            <th>Harga</th>
                            <th>Update</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $no = 1;
                        if(isset($row)){foreach($row as $key => $data) { ?>
                        <tr>
                            <td style="width:5%;"><?=$no++?>.</td>
                            <td><?=$data->name?></td>
                            <td><?=$data->barcode?></td>
                            <td><?=$data->jumlah?></td>
                            <td><?=$data->harga?></td>
                            <td><?=$data->update?></td>
                            <td class="text-center" width="200px">
                                <a href="<?=site_url('penjualan/edit/'.$data->id)?>" class="btn btn-primary btn-xs">
                                   <i class="fa fa-pencil"></i> Update
                                </a>
                                <a href="<?=site_url('penjualan/del/'.$data->id)?>" onclick="return confirm('apakah yakin anda hapus?')" 
                                 class="btn btn-danger btn-xs">
                                   <i class="fa fa-trash"></i> Delete
                                </a>
                            </td>
                        </tr>
                        <?php } } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>



<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
<script>
var url = "";
var kategori = "";
var item = "";
var string = "";
var code ="";

$(document).ready(function(){
    url_get = "<?= base_url('penjualan/kategori'); ?>";
    $.ajax({
        url: url_get,
        type: 'get',
        dataType: 'json',
        success: function(result){
            console.log(result);
            kategori = result;
            string += "<option>Pilih kategori barang</option>"
             for (var i = result.length - 1; i >= 0; i--) {
                string += "<option id='kat' value='"+result[i].category_id+"'>"+result[i].name+"</option>";
             }
            $('#kategori').html(string);
        }
    });
});

$('#kategori').on('change', function(){
    url_get = "<?= base_url('penjualan/item/'); ?>";
    id = $('#kategori').val();
    $.ajax({
        url: url_get+id,
        type: 'get',
        dataType: 'json',
        success: function(result){
            console.log(result);
            item = result;
            string = "";
             for (var i = result.length - 1; i >= 0; i--) {
                string += "<option value='"+result[i].item_id+"'>"+result[i].name+"</option>";
             }
            $('#barang').html(string);
        }
    });
});

$('#barang').on('change', function(){
    url_get = "<?= base_url('penjualan/code/'); ?>";
    id = $('#barang').val();
    $.ajax({
        url: url_get+id,
        type: 'get',
        dataType: 'json',
        success: function(result){
            console.log(result);
            code = result;
            $('#code').val(code.barcode);
            $('#price').val(code.price);
            $('#tot').val(parseInt($('#jum').val())*parseInt(code.price));
            // item = result;
            // string = "";
            // $('#barang').html(string);
        }
    });
});

$('#jum').on('change', function(){
    $('#tot').val(parseInt($('#jum').val())*parseInt(code.price));
});
</script>