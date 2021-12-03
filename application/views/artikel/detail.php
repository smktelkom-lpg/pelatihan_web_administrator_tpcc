<?php
    include APPPATH . 'views/template/header.php'; 
    include APPPATH . 'views/template/menu.php' ;
?>

<div class="container-fluid">

    <div class="card shadow mb-4">
    	<div class="card-header py-3">
    		<h6 class="m-0 font-weight-bold text-primary"><?= $judul ?></h6>
    	</div>
    	<div class="card-body">
    		<div class="row">
    			<div class="col-md-4">
    				<div class="form-group">
		    			<img src="<?= BASE_ASSETS ."/assets/uploads/".$gambar ?>" class="img-thumbnail" width="100%">
		    		</div>
    			</div>
    			<div class="col-md-8">
    				<p>
    					<?= $isi ?>
    				</p>
    			</div>
    		</div>
    	</div>
    	<div class="card-footer">
    		<div class="form-group">
                <a class="btn btn-info btn-sm" href="<?= base_url("artikel")?>"><i class="fas fa-step-backward"></i> Kembali</a>
            </div>
    	</div>
    </div>

</div>

<?php
include APPPATH . 'views/template/footer.php' ;
?>