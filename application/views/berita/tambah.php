<?php
    include APPPATH . 'views/template/header.php'; 
    include APPPATH . 'views/template/menu.php' ;
?>

<div class="container-fluid">

    <strong><?= validation_errors(); ?></strong>

    <div class="card shadow mb-4">
    	<div class="card-header py-3">
    		<h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-plus-square"></i> Tambah Berita</h6>
    	</div>
    	<div class="card-body">
            <form method="POST" enctype="multipart/form-data" action="<?= base_url('berita/tambah_save') ?>">
                
                <div class="form-group">
                    <label for="judul">Judul Berita</label>
                    <input name="judul" class="form-control" type="text" required>
                </div>

                <div class="form-group">
                    <label for="tgl_berita">Tanggal Berita</label>
                    <input name="tgl_berita" class="form-control" type="date" required>
                </div>
                
                <div class="form-group">
                    <label for="isi">Isi Berita</label>
                    <textarea name="isi" class="form-control" required></textarea>
                </div>
                <div class="form-group">
                    <label for="gambar">Gambar</label>
                    <input type="file" class="form-control" id="gambar" name="gambar">
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