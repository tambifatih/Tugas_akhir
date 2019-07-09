<section class="content-header">
      <h1>
        Costumers
        <small>Pelanggan</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
        <li class="active">Costumers</li>
      </ol>
</section>
    
    <!-- main contents -->
    <section class="content">
      
        <div class="box">
            <div class="box-header">
                <h3 class="box-title"><?=ucfirst($page)?> costumers</h3>
                    <div class="pull-right">
                        <a href="<?=site_url('costumer')?>" class="btn btn-warning btn-flat">
                            <i class="fa fa-undo"></i> Back
                        </a>
                    </div>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <form action="<?=site_url('costumer/proses')?>" method="post">
                            <div class="form-group">
                                <label>Nama Costumer*</label>
                                <input type="hidden" name="id" value="<?=$row->costumer_id?>">
                                <input type="text" name="costumer_name" value="<?=$row->name?>" class="form-control" required></input>
                            </div>
                            <div class="form-group">
                                <label>Gender</label>
                                <select name="gender" class="from-control" required>
                                    <option value="" class="form-control">- Pilih -</option>
                                    <option value="L" <?=$row->gender == 'L' ? 'selected' : '' ?> >Laki-laki</option>
                                    <option value="P" <?=$row->gender == 'P' ? 'selected' : '' ?> >Perempuan</option>   
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Telepon*</label>
                                <input type="number" name="phone" value="<?=$row->phone?>" class="form-control" required></input>
                            </div>
                            <div class="form-group">
                                <label>Alamat*</label>
                                <textarea name="addr" class="form-control" required><?=$row->address?></textarea>
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