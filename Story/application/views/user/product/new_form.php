<!DOCTYPE html>
<html lang="en">

<head>

  <?php $this->load->view("user/part/head.php") ?>

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <?php $this->load->view("user/part/sidebar.php") ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <?php $this->load->view("user/part/navbar.php") ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">
				<!-- DataTables -->
				<?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>

				<div class="card mb-3">

					<div class="card-body">

						<form action="<?php base_url('user/product/add') ?>" method="post" enctype="multipart/form-data" >
							<div class="form-group">
								<label for="judul">Title*</label>
								<input class="form-control <?php echo form_error('judul') ? 'is-invalid':'' ?>"
								 type="text" name="judul" placeholder="Judul" />
								<div class="invalid-feedback">
									<?php echo form_error('judul') ?>
								</div>
							</div>

							<div class="form-group">
			                  	<label for="genre" style="color:black">Genre*</label>
			                  	<div class="form-control <?php echo form_error('genre') ? 'is-invalid':'' ?>">
				                  <div style="float:left; width: 30%;" class="controls">
				                    <select name="genre" id="genre">
				                      <option value="0" disabled selected>Select Genre</option>
									    <option value="Action">Action</option>
									    <option value="Adventure">Adventure</option>
									    <option value="Comedy">Comedy</option>
									    <option value="Fiction">Fiction</option>
									    <option value="History">History</option>
									    <option value="Horror">Horror</option>
									    <option value="Romance">Romance</option>
									 </select>
									<div class="invalid-feedback">
										<?php echo form_error('genre') ?>
									</div>
				                  	</div>
			                	</div>
			              	</div>

							<div class="form-group">
								<label for="penulis">Writer*</label>
								<input class="form-control <?php echo form_error('penulis') ? 'is-invalid':'' ?>"
								 type="text" name="penulis" min="0" placeholder="Writer" />
								<div class="invalid-feedback">
									<?php echo form_error('penulis') ?>
								</div>
							</div>


							<div class="form-group">
			                  	<label for="tahun" style="color:black">Year*</label>
			                  	<div class="form-control <?php echo form_error('tahun') ? 'is-invalid':'' ?>">
				                  <div style="float:left; width: 30%;" class="controls">
				                    <select name="tahun" id="tahun">
				                      <option value="0" disabled selected>Select Year</option>
									    <option value="2019">2019</option>
									    <option value="2018">2018</option>
									    <option value="<2017">< 2017</option>
									 </select>
									<div class="invalid-feedback">
										<?php echo form_error('tahun') ?>
									</div>
				                  	</div>
			                	</div>
			              	</div>

							<div class="form-group">
								<label for="image">Image</label>
								<input class="form-control-file <?php echo form_error('image') ? 'is-invalid':'' ?>"
								 type="file" name="image" />
								<div class="invalid-feedback">
									<?php echo form_error('image') ?>
								</div>
							</div>
							
							<div class="form-group">
								<label for="sinopsis">Synopsis*</label>
								<textarea class="form-control <?php echo form_error('sinopsis') ? 'is-invalid':'' ?>"
								 name="sinopsis" placeholder="Synopsis"></textarea>
								<div class="invalid-feedback">
									<?php echo form_error('sinopsis') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="cerita">Story*</label>
								<textarea class="form-control <?php echo form_error('cerita') ? 'is-invalid':'' ?>"
								 name="cerita" placeholder="Story" style="height:200px"></textarea>
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
            <!-- /.row -->

          <!-- /.container -->

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <?php $this->load->view("user/part/footer.php") ?>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <?php $this->load->view("user/part/scrolltop.php") ?>

  <!-- Logout Modal-->
  <?php $this->load->view("user/part/modal.php") ?>

  <!-- Bootstrap core JavaScript-->
  <?php $this->load->view("user/part/js.php") ?>


</body>

</html>
