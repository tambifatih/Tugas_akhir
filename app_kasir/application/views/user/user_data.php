<section class="content-header">
      <h1>
        User
        <small>Pengguna</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
        <li class="active">User</li>
      </ol>
</section>
    
    <!-- main contents -->
    <section class="content">
      
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Data User</h3>
                    <div class="pull-right">
                        <a href="<?=site_url('user/add')?>" class="btn btn-primary btn-flat">
                            <i class="fa fa-user-plus"></i> Create
                        </a>
                    </div>
            </div>
            <div class="box-body table-responsive">
                <table class="table table-bordered table-striped" id="table1">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Username</th>
                            <th>Name</th>
                            <th>Address</th>
                            <th>Level</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach($row->result() as $key => $data) { ?>
                        <tr>
                            <td style="width:5%;"><?=$no++?>.</td>
                            <td><?=$data->username?></td>
                            <td><?=$data->name?></td>
                            <td><?=$data->address?></td>
                            <td><?=$data->level == 1 ? "Admin" : "Kasir"?></td>
                            <td class="text-center" width="160px">
                                <form action="<?=site_url('user/del')?>" method="post">
                                    <a href="<?=site_url('user/edit/'.$data->usser_id)?>" class="btn btn-primary btn-xs">
                                        <i class="fa fa-pencil"></i> Update
                                    </a>
                                    <input type="hidden" name="usser_id" value="<?=$data->usser_id?>">
                                    <button onclick="return confirm('apakah yakin anda hapus?')" class="btn btn-danger btn-xs">
                                        <i class="fa fa-trash"></i> Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>