<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container mt-3">
    <a href="<?=base_url('barang');?>" class="btn btn-secondary mb-2"> Kembali </a>
    <div class="card">
        <div class="card-header bg-info text-white">
            <h4 class="card-tittle"> Tambah Barang </h4>
        </div>
        <div class="card-body">
            <form method="post" action="<?=base_url('barang/add');?>">
                <div class="form-group mb-3">
                    <label for=""> Nama Barang </label>
                    <input type="text" name="nama" class="form-control" requied>
                    </div>

                    <div class="form-group mb-3">
                        <label for=""> Qty </label>
                        <input type="text" name="qty" class="form-control" requied>
                    </div>

                    <div class="form-group mb-3">
                        <label for=""> Harga Beli </label>
                        <input type="text" name="harga_beli" class="form-control" requied>
                    </div>

                    <div class="form-group mb-3">
                        <label for=""> Harga Jual </label>
                        <input type="text" name="harga_jual" class="form-control" requied>
                    </div>

                    <button class="btn btn-success"> Tambah Data </button>

                    </form>
                </div>
            </div>
        </div>
    </body>
</html>