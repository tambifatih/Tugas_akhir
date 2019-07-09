<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
    Open modal
  </button>
  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">  
        <!-- Modal body -->
          <div class="modal-body">
            <div class="box-body table-responsive" id="table1">
                <table class="table table-bordered table-striped">
                <th>
                  <tr>
                    <th>No</th>
                    <th>Nama barang</th>
                    <th>Code</th>
                    <th>Jumlah</th>
                    <th>Harga</th>
                    <th>Update</th>
                  </tr>
                </th>
                </table>
              </div>
            </div>
          </div>
          
        
      </div>
    </div>
  </div>
  
</div>

</body>
</html>
