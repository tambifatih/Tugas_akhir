<section class="content" id="print">
      
        <div class="box">
            <div class="box-header" id="header">
                <h3 class="box-title">Data penjualan <?php if (isset($code_transaksi)) {
                    echo $code_transaksi; 
                } ?></h3> <span class="btn btn-success pull-right" onclick="myFunction(this)">Print</span>
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
                        </tr>
                    </thead>
                    <tbody>
                    <?php $no = 1;
                        if(isset($detail)){foreach($detail as $key => $data) { ?>
                        <tr>
                            <td style="width:5%;"><?=$no++?>.</td>
                            <td><?=$data->name?></td>
                            <td><?=$data->barcode?></td>
                            <td><?=$data->jumlah?></td>
                            <td><?=number_format($data->harga)?></td>
                            <td><?=$data->update?></td>
                        </tr>
                        <?php } } ?>
                    </tbody>
                </table>
            </div>
        </div>

    </section>
<script>
function myFunction(e) {
    e.remove();
   window.print();
   $('#header').append(' <span class="btn btn-success pull-right" onclick="myFunction(this)">Print</span>');
}
</script>