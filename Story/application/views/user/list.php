<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("admin/part/head.php") ?>
</head>

<body id="page-top">

	
	<div id="wrapper">

		<?php $this->load->view("admin/part/sidebar.php") ?>

		<div id="content-wrapper">

			<?php $this->load->view("admin/part/navbar.php") ?>

			<div class="container-fluid">

				<!-- DataTables -->
				<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo site_url('cerita/add') ?>"><i class="fas fa-plus"></i> Add New</a>
					</div>
					<div class="card-body">

						<div class="table-responsive">
							<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>Title</th>
										<th>Writer</th>
										<th>Image</th>
										<th>Synopsis</th>
										<th>Year</th>
										<th>Story</th>
										<th>Rating</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($ceritas as $cerita): ?>
									<tr>
										<td width="150">
											<?php echo $cerita->judul ?>
										</td>
										<td>
											<?php echo $cerita->penulis ?>
										</td>
										<td>
											<img src="<?php echo base_url('upload/cerita/'.$cerita->gambar) ?>" width="64" />
										</td>
										<td class="small">
											<?php echo substr($cerita->sinopsis, 0, 120) ?>...</td>
										<td>
											<?php echo $cerita->tahun ?>
										</td>
										<td class="big">
											<?php echo substr($cerita->cerita, 0, 120) ?>...</td>
										<td width="250">
											<a href="<?php echo site_url('cerita/edit/'.$cerita->id_cerita) ?>"
											 class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
											
											<a onclick="deleteConfirm('<?php echo site_url('cerita/delete/'.$cerita->id_cerita) ?>')"
											 href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> 
									</tr>
									<?php endforeach; ?>

								</tbody>
							</table>
						</div>
					</div>
				</div>

			</div>
			<!-- /.container-fluid -->

			<!-- Sticky Footer -->
			<?php $this->load->view("admin/part/footer.php") ?>

		</div>
		<!-- /.content-wrapper -->

	</div>
	<!-- /#wrapper -->


	<?php $this->load->view("admin/part/scrolltop.php") ?>
	<?php $this->load->view("admin/part/modal.php") ?>

	<?php $this->load->view("admin/part/js.php") ?>

	<script>
function deleteConfirm(url){
	$('#btn-delete').attr('href', url);
	$('#deleteModal').modal();
}
</script>

</body>

</html>