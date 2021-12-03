<?php
    include APPPATH . 'views/template/header.php'; 
    include APPPATH . 'views/template/menu.php' ;
?>

<div class="container-fluid">

    <strong><?= validation_errors(); ?></strong>

    <div class="card shadow mb-4">
    	<div class="card-header py-3">
    		<h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-plus-square"></i> Edit Artikel</h6>
    	</div>
    	<div class="card-body">
            <form method="POST" enctype="multipart/form-data" action="<?= base_url('artikel/edit_save') ?>">

                <input type="hidden" name="id" value="<?= $id ?>"/>
                <input type="hidden" name="foto_lama" value="<?= $gambar ?>"/>
                
                <div class="form-group">
                    <label for="judul">Judul Artikel</label>
                    <input name="judul" class="form-control" type="text" value="<?= $judul ?>" required>
                </div>

                <div class="form-group">
                    <label for="tgl_artikel">Tanggal Artikel</label>
                    <input name="tgl_artikel" class="form-control" type="date" value="<?= $tgl_artikel ?>" required>
                </div>
                
                <div class="form-group">
                    <label for="isi">Isi Artikel</label>
                    <textarea name="isi" class="form-control" required><?= $isi ?></textarea>
                </div>
                <div class="form-group">
                    <label for="gambar">Gambar</label>
                    <input type="file" class="form-control" id="gambar" name="gambar">
                    <br>
                    <img class="img-thumbnail" src="<?= BASE_ASSETS ."/assets/uploads/".$gambar ?>" height="80" width="100"/>
                </div>
                <div class="form-group">
                    <!-- <a class="btn btn-info btn-sm" href="<?= base_url("artikel")?>"><i class="fas fa-save"></i> Simpan</a> -->
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