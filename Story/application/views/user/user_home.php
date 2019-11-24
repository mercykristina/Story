<!DOCTYPE html>
<html lang="en">

<head>

  <?php $this->load->view("user/part/head.php") ?>

</head>
<style >
  .center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
}
</style>


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

            <img src="<?php echo base_url('img/22.png') ?>" alt="Story" style="width:90%;" class="center">
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
