<?php
    include APPPATH . 'views/template/header.php'; 
    include APPPATH . 'views/template/menu.php' ;
?>

<div class="container-fluid">

    <div class="card shadow mb-4">
    	<div class="card-header py-3">
    		<h6 class="m-0 font-weight-bold text-primary">Detail Pengumuman</h6>
    	</div>
    	<div class="card-body">
    		<div class="form-group">
                <label for="id">ID Pengumuman</label>
                <input class="form-control" type="text" value="<?= $id ?>" readonly="">
            </div>
            <div class="form-group">
                <label for="id">Judul Pengumuman</label>
                <input class="form-control" type="text" value="<?= $judul ?>" readonly="">
            </div>
            <div class="form-group">
                <label for="id">Tanggal Pengumuman</label>
                <input class="form-control" type="text" value="<?= $tgl_pengumuman ?>" readonly="">
            </div>
            <div class="form-group">
                <label for="id">Isi Pengumuman</label>
                <textarea class="form-control" readonly=""><?= $isi_pengumuman ?></textarea>
            </div>
            <div class="form-group">
                <a class="btn btn-info btn-sm" href="<?= base_url("pengumuman")?>"><i class="fas fa-step-backward"></i> Kembali</a>
            </div>
    	</div>
    </div>

</div>

<?php
include APPPATH . 'views/template/footer.php' ;
?>