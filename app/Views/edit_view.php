<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container mt-3">
        <a href="<?= base_url('barang');?>" class="btn btn-secondary mb-2">Kembali</a>
            <div class="card">
            <div class="card-header bg-info text-white">
                <h4 class="card-title">Edit Barang : <?= $barang->nama_barang;?></h4>
                </div>
                
                <div class="card-body mb-3">
                    <form method="post" action="<?= base_url('barang/update');?>">
                    <div class="form-group">

                    <label for="">Nama Barang</label>
                    <input type="text" value="<?= $barang->nama_barang;?>" name="nama" required
                    class="form-control">
                    </div>

                    <div class="form-group mb-3">
                    <label for="">Qty</label>
                    <input type="number" value="<?= $barang->qty;?>" name="qty" required 
                    class="form-control">
                    </div>

                    <div class="form-group mb-3">
                    <label for="">Harga Beli</label>
                    <input type="number" value="<?= $barang->harga_beli;?>" name="harga_beli" required
                    class="form-control">
                    </div>

                    <div class="form-group mb-3">
                    <label for="">Harga Jual</label>
                    <input type="number" value="<?= $barang->harga_jual;?>" name="harga_jual" required
                    class="form-control">
                    </div>

                    <input type="hidden" value="<?= $barang->id_barang;?>" name="id_barang">
                    <button class="btn btn-success">Edit Data</button>
                    
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>