?<?php

if ($sapa === "Selamat Pagi") {
    $gambar = "pagi1.jpg";
} elseif ($sapa === "Selamat Sore") {
    $gambar = "sore.jpg";
} elseif($sapa === "Selamat Malam") {
    $gambar = "malam.jpg";
}

?>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card mt-3">
                <img class="card-img-top" src="<?= base_url('assets/img/') . $gambar ?>" alt="Card image cap">
                <div class="card-body">
                    <h4 class="card-text">Hello <?= $sapa ?></h4>
                </div>
            </div>
        </div>
    </div>
</div>