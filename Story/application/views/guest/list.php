<!DOCTYPE html>
<html lang="en">

<head>

  <?php $this->load->view("guest/part/head.php") ?>
<style>
  .center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
}
</style>
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <?php $this->load->view("guest/part/sidebar.php") ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <?php $this->load->view("guest/part/navbar.php") ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">
        <!-- DataTables -->
          <div class="row">
            <?php foreach ($products as $product) {?>
                  <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                    <div class="card h-100">
                      <a href="#"><img class="card-img-top" src="<?=base_url();?>img/upload/<?=$product->id_cerita;?>.jpg" alt="" style="width:238px;height:150px;"></a>
                      <div class="card-body">
                        
                        <h4 class="card-title">
                          <a><?=$product->judul;?></a>
                        </h4>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>

                        <p><?=$product->genre;?></p>
                        <p><?=$product->tahun;?></p>
                        
                        <a class="btn btn-primary center" href="<?php echo site_url('Login') ?>" role="button" disabled>Read Now</a>
                        
                      </div>
                    </div>
                  </div>

              <?php }?>
            </div>
            
            <!-- /.row -->

          <!-- /.container -->

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <?php $this->load->view("guest/part/footer.php") ?>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <?php $this->load->view("guest/part/scrolltop.php") ?>

  <!-- Logout Modal-->
  <?php $this->load->view("guest/part/modal.php") ?>

  <!-- Bootstrap core JavaScript-->
  <?php $this->load->view("guest/part/js.php") ?>

</body>

</html>
