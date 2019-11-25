<!DOCTYPE html>
<html lang="en">

<head>

  <?php $this->load->view("user/part/head.php") ?>
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
    <?php $this->load->view("user/part/sidebar.php") ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <?php $this->load->view("user/part/navbar.php") ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">
          <?php foreach ($read as $data) {?>
          <div class="card border-0 shadow my-5">
            <div class="card-body p-5">
              <h1 class="font-weight-light" style="color:MidnightBlue;"><?=$data->judul;?></h1>
              <h4 class="my-3" style="color:DodgerBlue;">By <?=$data->penulis;?></h4>
              <h4 class="my-3" style="color:DodgerBlue;"><?=$data->tahun;?></h4>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star"></span>
              <span class="fa fa-star"></span>

              <div>
                <br>
                <h3 class="my-3" style="color:MidnightBlue;">Story</h3>
                <h6 class="my-3" style="color:Black;"><?=$data->cerita;?></h6>
              </div>
              
            </div>
            <?php } ?>
          </div>
          <!-- End of Main Content -->

          <!-- /.container -->
        </div>
        <!-- /.container-fluid -->

      </div>


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
