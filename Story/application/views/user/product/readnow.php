<!DOCTYPE html>
<html lang="en">

<head>

  <?php $this->load->view("user/part/head.php") ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.checked {
  color: orange;
}
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
  width : 70%;
  height: 20%;
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
                <p class="my-3" style="color:Black;"><?=$data->cerita;?></p>
              </div>
              
            </div>
            <?php } ?>
          </div>
          <!-- End of Main Content -->

          <div class="container">
            <?php if ($this->session->flashdata('success')): ?>
            <div class="alert alert-success" role="alert">
              <?php echo $this->session->flashdata('success'); ?>
            </div>
            <?php endif; ?>

              
              <h3>What do you think about this story?</h3>
              <form action="<?php echo site_url('/Products/addRating/'.$this->id_cerita) ?>" method="post" enctype="multipart/form-data">
            
              
                <label>Rating</label>
                <br>
              <input type="radio" name="rating" value="5">
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>

                <br>
                <br>

               <input type="radio" name="rating" value="4">
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>

                <br>
                <br>

               <input type="radio" name="rating" value="3">
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>    

                <br>
                <br>

               <input type="radio" name="rating" value="2">
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>

                <br>
                <br>

               <input type="radio" name="rating" value="1">
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span> 


        
                <br>
                <br>
                <label for="comment">Comment : </label>
                <textarea id="komentar" name="komentar" placeholder="Write something.." style="height:200px"></textarea>

                <input type="submit" value="Submit">
              </form>
          </div>

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
