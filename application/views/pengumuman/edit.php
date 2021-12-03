<?php
    include APPPATH . 'views/template/header.php'; 
    include APPPATH . 'views/template/menu.php' ;
?>

<div class="container-fluid">

    <strong><?= validation_errors(); ?></strong>

    <div class="card shadow mb-4">
    	<div class="card-header py-3">
    		<h6 class="m-0 font-weight-bold text-primary">Ubah Pengumuman</h6>
    	</div>
    	<div class="card-body">
            <form method="POST" action="<?= base_url('pengumuman/edit_save') ?>">
                <input type="hidden" name="id" value="<?= $id ?>"/>
               <div class="form-group">
                    <label for="id">ID Pengumuman</label>
                    <input class="form-control" type="text" value="<?= $id ?>" disabled>
                </div>
                <div class="form-group">
                    <label for="judul">Judul Pengumuman</label>
                    <input name="judul" class="form-control" type="text" value="<?= $judul ?>">
                </div>
                <div class="form-group">
                    <label for="tgl_pengumuman">Tanggal Pengumuman</label>
                    <input name="tgl_pengumuman" class="form-control" type="date" value="<?= $tgl_pengumuman ?>">
                </div>
                <div class="form-group">
                    <label for="isi_pengumuman">Isi Pengumuman</label>
                    <textarea name="isi_pengumuman" class="form-control"><?= $isi_pengumuman ?></textarea>
                </div>
                <div class="form-group">
                    <!-- <a class="btn btn-info btn-sm" href="<?= base_url("pengumuman")?>"><i class="fas fa-save"></i> Simpan</a> -->
                    <button class="btn btn-info btn-sm" type="submit"><i class="fas fa-save"></i> SIMPAN</button>
                    <!-- <input class="form-control btn btn-info" type="submit" value="Simpan"/> -->
                </div> 
            </form>
    	</div>
    </div>

</div>

<?php
include APPPATH . 'views/template/footer.php' ;
?>