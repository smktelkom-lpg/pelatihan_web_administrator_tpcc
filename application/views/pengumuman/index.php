<?php
    include APPPATH . 'views/template/header.php'; 
    include APPPATH . 'views/template/menu.php' ;
?>

<div class="container-fluid">

    <!-- Page Heading -->
    <h2 class="h2 mb-4 text-gray-800">Pengumuman</h2>

    <div class="card shadow mb-4">
    	<div class="card-header py-3">
    		<!-- <h6 class="m-0 font-weight-bold text-primary">Pengumuman</h6> -->
    		<a href="<?= base_url("pengumuman/tambah")?>" class="btn btn-success btn-sm"><i class="fas fa-plus-square"></i> Tambah</a>
    	</div>
    	<div class="card-body">
    		<div class="table-responsive">
    			<table class="table table-striped">
    				<thead>
    					<tr>
	    					<th>ID</th>
	    					<th>Judul</th>
	    					<th>Tanggal</th>
	    					<th>Isi Pengumuman</th>
	    					<th>Aksi</th>
	    				</tr>
    				</thead>
    				<tbody>
    					<?php
					        foreach($records as $idx => $data){
					            ?>
    					<tr>
    						<td><?= $data['id'] ?></td>
    						<td><?= $data['judul'] ?></td>
    						<td><?= $data['tgl_pengumuman'] ?></td>
    						<td><?= $data['isi_pengumuman'] ?></td>
    						<td>
    							<a class="btn btn-info btn-sm" href="<?= base_url("pengumuman/detail/{$data['id']}")?>"><i class="fas fa-info-circle"></i> Detail</a>
			                    <a class="btn btn-warning btn-sm" href="<?= base_url("pengumuman/edit/{$data['id']}")?>"> <i class="fas fa-edit"></i>Edit</a>
			                    <a class="btn btn-danger btn-sm" onclick="return confirm('menghapus data?')" href="<?= base_url("pengumuman/hapus/{$data['id']}")?>"> <i class="fas fa-trash"></i>Hapus</a>
    						</td>
    					</tr>
    					<?php
					        }
					        ?>
    				</tbody>
    			</table>
    		</div>
    	</div>
    </div>

</div>

<?php
include APPPATH . 'views/template/footer.php' ;
?>