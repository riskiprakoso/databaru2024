<div class="container">
    <div class="row">
        <div class="col-md">
        <h4>TABEL BIAYA HIDUP</h4>
        <a href="<?= base_url('biaya/tambah')?>" class="btn btn-primary">TAMBAH DATA</a>
        <table class="table mt-3">


        <div>
            <div>
                <div class="row mt-3">
                </div div class="col-md-6">
                <!-- <form action="" method= "post">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Cari Data UMR.." name="keyword">
                    <div class="input-group-append">
                        <input value="Cari" class="btn btn-primary" type="submit" name="cari">
                    </div>
                    </div>
                </form> -->
            </div>
        </div>

            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Nama Pekerjaan</th>
                <th scope="col">Nama Kota</th>
                <th scope="col">Total Pekerja</th>
                <th scope="col">UMR</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $i=0; foreach($umr as $um):?>
                    <tr>
                        <th scope="row"><?= ++$i; ?></th>
                        <td><?= $um["nama_pekerjaan"] ?></td>
                        <td><?= $um["nama_kota"] ?></td>
                        <td><?= $um["total_banyak"] ?></td>
                        <td>Rp. <?= $um["umr"] ?></td>
                        <td>
                            <a href="<?= base_url("biaya/edit/"). $um["id"]?>" class="btn btn-warning">Edit</a>
                            <a href="<?= base_url("biaya/hapus/"). $um["id"]?>" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach;?>
            </tbody>
        </table>
        </div>
    </div>
</div>