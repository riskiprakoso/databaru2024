<div class="container">

        <div class="row mt-3">
            <div class="col-md-6">
                <!-- <a href="" class="btn btn-success">Refresh</a> -->
            <div>
            <div class="card mt-3">
                <div class="card-header">
                    Form edit Data Biaya
                </div>
                <div class="card-body">
                    <form action="" method="post">
                    <input type="hidden" class="form-control" id="total_pekerja" required name="idUMR" value="<?= $umr["id"]?>">
                    <div class="form-group">
                        <label for="nama_pekerjaan">Nama Pekerjaan</label>
                        <select class="form-control" id="nama_pekerjaan" name="nama_pekerjaan">
                            <option value="020">PNS</option>
                            <option value="010">Karyawan Swasta</option>
                            <option value="030">Wirausaha</option>
                         </select>
                    </div>
                    <div class="form-group">
                        <label for="nama_kota">Nama Kota</label>
                        <select class="form-control" id="nama_kota" name="nama_kota">
                            <?php foreach($kota as $kt):?>
                                <option value="<?= $kt["id_kota"]?>"><?= $kt["nama_kota"]?></option>
                                <?php endforeach;?>
                         </select>

                        
                        <div class="form-group">
                            <label for="total_pekerja">Total Pekerja</label>
                            <input type="text" class="form-control" id="total_pekerja" required name="total_pekerja" value="<?= $umr["total_banyak"]?>">
                        </div>
                        <div class="form-group">
                            <label for="umr">UMR</label>
                            <input type="text" class="form-control" id="umr" required name="umr" value="<?= $umr["umr"]?>">
                        </div>
                        <input type="submit" name="edit" class="btn btn-primary float-right" value="edit Data">
                    </form>
                </div>
            </div>

            </div>
        </div>

</div>