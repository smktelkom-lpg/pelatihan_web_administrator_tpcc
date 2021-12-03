<?php
    include APPPATH . 'views/template/header.php'; 
    include APPPATH . 'views/template/menu.php' ;
?>

<div class="container-fluid">

    <!-- Page Heading -->
    <h2 class="h2 mb-4 text-gray-800">Berita Sekolah</h2>

    <div class="card shadow mb-4">
    	<div class="card-header py-3">
    		<!-- <h6 class="m-0 font-weight-bold text-primary">Pengumuman</h6> -->
    		<a href="<?= base_url("berita/tambah")?>" class="btn btn-success btn-sm"><i class="fas fa-plus-square"></i> Tambah</a>
    	</div>
    	<div class="card-body">
    		<div class="row">
                <?php
                foreach($records as $idx => $data){
                    ?>
                <!-- Bagian artikel -->
                <div class="col-md-3">
                    <div class="card card-danger">
                        <div class="card-header">
                            <h2><?= $data['judul'] ?></h2>
                            <small><?= $data['tgl_berita'] ?></small>
                        </div>
                        <div class="card-body">
                            <img src="<?= BASE_ASSETS ."/assets/uploads/" ?><?= $data['gambar'] ?>" class="img-thumbnail" align="image alt">
                        </div>
                        <div class="card-footer">
                            <a href="<?= base_url("berita/detail/{$data['id']}")?>" class="btn btn-info btn-sm"><i class="fas fa-info-circle"></i> Baca Selengkapnya</a>
                            <a class="btn btn-warning btn-sm" href="<?= base_url("berita/edit/{$data['id']}")?>"><i class="fas fa-edit"></i></a>
                    <a class="btn btn-danger btn-sm" onclick="return confirm('menghapus data?')" href="<?= base_url("berita/hapus/{$data['id']}")?>"><i class="fas fa-trash"></i></a>
                        </div>
                    </div>
                </div>
                <!-- End -->
                <?php
        }
        ?>
            </div>
    	</div>
    </div>

</div>

<?php
include APPPATH . 'views/template/footer.php' ;
?>