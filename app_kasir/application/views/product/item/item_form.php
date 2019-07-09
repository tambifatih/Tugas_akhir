<section class="content-header">
      <h1>
        Items
        <small>Data Barang</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
        <li class="active">Items</li>
      </ol>
</section>
    
    <!-- main contents -->
    <section class="content">
    <?php $this->view('message') ?>
        <div class="box">
            <div class="box-header">
                <h3 class="box-title"><?=ucfirst($page)?> items</h3>
                    <div class="pull-right">
                        <a href="<?=site_url('item')?>" class="btn btn-warning btn-flat">
                            <i class="fa fa-undo"></i> Back
                        </a>
                    </div>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <?php echo form_open_multipart('item/proses') ?>
                            <div class="form-group">
                                <label>Barcode*</label>
                                <input type="hidden" name="id" value="<?=$row->item_id?>">
                                <input type="text" name="barcode" value="<?=$row->barcode?>" class="form-control" required></input>
                            </div>
                            <div class="form-group">
                                <label for="nama_produk">Nama Produk*</label>
                                <input type="hidden" name="id" value="<?=$row->item_id?>">
                                <input type="text" name="nama_produk" id="nama_produk" value="<?=$row->name?>" class="form-control" required></input>
                            </div>

                            <!-- versi manual looping dibagian tampilan -->
                            <div class="form-group">
                                <label>Category*</label>  
                                <select name="category" class="form-control" required>
                                    <option value="">- Pilih -</option>
                                    <?php foreach($category->result() as $key => $data) { ?>
                                        <option value="<?=$data->category_id?>"<?=$data->category_id == $row->category_id ? "selected" : null?>><?=$data->name?></option>
                                    <?php }?>
                                </select>
                            </div>

                            <!-- form_dropdown loopingnya dicontroller -->
                            <div class="form-group">
                                <label>Unit*</label> 
                                <?php echo form_dropdown('unit', $unit, $selectedunit,
                                ['class' => 'form-control','required' => 'required']) ?>
                            </div>
                            <div class="form-group">
                                <label>Harga*</label>
                                <input type="text" name="harga" value="<?=$row->price ?>" class="form-control" required></input>
                            </div>
                            <div class="form-group">
                                <label>image</label>
                                <?php if($page == 'edit') {
                                    if($row->image != null) {?>
                                        <div style="margin-bottom:4px">
                                        <img src="<?=base_url('uploads/product/'.$row->image)?>" style="width: 80%">
                                        </div>
                                        <?php
                                    }
                                }?>
                                <input type="file" name="image" class="form-control"></input>
                                <small>(biarkan kosong jika tidak <?= $page == 'edit' ? 'ganti' : 'ada'?>)</small>
                            </div>
                            <div class="form-group">
                                <button type="submit" name="<?=$page?>" class="btn btn-success btn-flat">
                                    <i class="fa fa-paper-plane"></i>Simpan</button>
                                <button type="Reset" class="btn btn-flat">Reset</button>
                            </div>
                        <?php echo form_close() ?>
                    </div>
                </div>
            </div>
        </div>
    </section>