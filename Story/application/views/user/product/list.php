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
    <div id="content-wrapper">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <?php  $this->load->view("user/part/navbar.php") ?>
          

       
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">
				<!-- DataTables -->
    			<div class="row">
    				<?php foreach ($products as $product) {?>
                  <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                    <div class="card h-100">
                      <a href="<?=base_url();?>story/<?=$product->id_cerita;?>"><img class="card-img-top" src="<?=base_url();?>img/upload/<?=$product->image;?>" alt=""></a>
                      <div class="card-body">
                      	
                        <h4 class="card-title">
                          <a href="<?=base_url();?>story/<?=$product->id_cerita;?>"><?=$product->judul;?></a>
                        </h4>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>

                        <p><?=$product->genre;?></p>
                        <p><?=$product->tahun;?></p>
                        <p><?=$product->penulis;?></p>
                        
                        
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
