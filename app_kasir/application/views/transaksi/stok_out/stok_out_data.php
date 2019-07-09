
<section class="content-header">
      <h1>
        Stock out
        <small>Data Stock out</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
        <li class="active">Stock out</li>
      </ol>
</section>
    
    <!-- main contents -->
    <section class="content">
      
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Data Stock out</h3>
                    <div class="pull-right">
                        <a href="<?=site_url('stok_out/add')?>" class="btn btn-primary btn-flat">
                            <i class="fa fa-plus"></i> Create
                        </a>
                    </div>
            </div>
            <div class="box-body table-responsive">
                <table class="table table-bordered table-striped" id="table1">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Code</th>
                            <th>Produk item</th>
                            <th>Jumlah</th>
                            <th>Detail</th>
                            <th>Tanggal</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach($row->result() as $key => $data) { ?>
                        <tr>
                            <td style="width:5%;"><?=$no++?>.</td>
                            <td><?=$data->barcode?></td>
                            <td><?=$data->name?></td>
                            <td><?=$data->stock_out?></td>
                            <td><?=$data->detail?></td>
                            <td><?=$data->tanggal?></td>
                            <td class="text-center" width="160px">
                                <a href="<?=site_url('stok_out/edit/'.$data->stok_out_id)?>" class="btn btn-primary btn-xs">
                                   <i class="fa fa-pencil"></i> Update
                                </a>
                                <a href="<?=site_url('stok_out/del/'.$data->stok_out_id)?>" onclick="return confirm('apakah yakin anda hapus?')" 
                                 class="btn btn-danger btn-xs">
                                   <i class="fa fa-trash"></i> Delete
                                </a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>

                    <?php 
                        // var_dump($data);
                        // exit();
                    ?>

                </table>
            </div>
        </div>
    </section>