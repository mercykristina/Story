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


				<?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>

				<!-- Card  -->
				<div class="card mb-3">
					<div class="card-header">

						<a href="<?php echo site_url('cerita') ?>"><i class="fas fa-arrow-left"></i>
							Back</a>
					</div>
					<div class="card-body">

						<form action="<?php base_url('admin/cerita/edit_cerita') ?>" method="post" enctype="multipart/form-data">

							<input type="hidden" name="id" value="<?php echo $cerita->id_cerita?>" />

							<div class="form-group">
								<label for="judul">Title*</label>
								<input class="form-control <?php echo form_error('judul') ? 'is-invalid':'' ?>"
								 type="text" name="judul" placeholder="Title" value="<?php echo $cerita->judul ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('judul') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="penulis">Writer*</label>
								<input class="form-control <?php echo form_error('penulis') ? 'is-invalid':'' ?>"
								 type="text" name="penulis" min="0" placeholder="Writer" value="<?php echo $cerita->penulis ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('penulis') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="tahun">Year*</label>
								<input class="form-control <?php echo form_error('tahun') ? 'is-invalid':'' ?>"
								 type="number" name="tahun" min="0" placeholder="Year" value="<?php echo $cerita->tahun ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('tahun') ?>
								</div>
							</div>


							<div class="form-group">
								<label for="gambar">Image</label>
								<input class="form-control-file <?php echo form_error('gambar') ? 'is-invalid':'' ?>"
								 type="file" name="gambar" />
								<input type="hidden" name="gambar" value="<?php echo $cerita->gambar ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('gambar') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="sinopsis">Synopsis*</label>
								<textarea class="form-control <?php echo form_error('sinopsis') ? 'is-invalid':'' ?>"
								 name="sinopsis" placeholder="Synopsis"><?php echo $cerita->sinopsis ?></textarea>
								<div class="invalid-feedback">
									<?php echo form_error('sinopsis') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="cerita">Story*</label>
								<textarea class="form-control <?php echo form_error('cerita') ? 'is-invalid':'' ?>"
								 name="cerita" placeholder="Story"><?php echo $cerita->cerita ?></textarea>
								<div class="invalid-feedback">
									<?php echo form_error('cerita') ?>
								</div>
							</div>

							<input class="btn btn-success" type="submit" name="btn" value="Save" />
						</form>

					</div>

					<div class="card-footer small text-muted">
						* required fields
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

		<?php $this->load->view("admin/part/js.php") ?>

</body>

</html>