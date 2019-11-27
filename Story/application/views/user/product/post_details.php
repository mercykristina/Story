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

          <!-- Portfolio Item Heading -->
          <?php foreach ($data as $data) {?>
          <h1 class="my-4 col-md-5" style="color:MidnightBlue;"><?=$data->judul;?></h1>

          <!-- Portfolio Item Row -->
          <div class="row">

            <div class="col-md-5">
              <img class="img-fluid center" src="<?=base_url();?>img/upload/<?=$data->image;?>" alt="" style="width:300px;height:300px;">
            </div>

            <div class="col-md-5">
              <h4 class="my-3" style="color:DodgerBlue;">By <?=$data->penulis;?></h4>
              <h4 class="my-3" style="color:DodgerBlue;"><?=$data->genre;?></h4>
              <h4 class="my-3" style="color:DodgerBlue;"><?=$data->tahun;?></h4>

              <span class="fa fa-star  <?php if($data->avg_rat >=1){echo 'checked';}?>"></span>
              <span class="fa fa-star <?php if($data->avg_rat >=2){echo 'checked';}?>"></span>
              <span class="fa fa-star <?php if($data->avg_rat >=3){echo 'checked';}?>"></span>
              <span class="fa fa-star <?php if($data->avg_rat >=4){echo 'checked';}?>"></span>
              <span class="fa fa-star <?php if($data->avg_rat >=5){echo 'checked';}?>"></span>

           
              <br>
              <br>
              <a href="<?=base_url();?>story/read/<?=$data->id_cerita;?>" class="btn btn-primary" role="button">Read Now</a>
            </div>
          
        
          </div>
           <div>
              <br>
              <h3 class="my-3" style="color:MidnightBlue;">Synopsis</h3>
              <h6 class="my-3" style="color:Black;"><?=$data->sinopsis;?></h6>
            </div>
          <!-- /.row -->
          
          <?php } ?>
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
