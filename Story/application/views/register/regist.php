<!DOCTYPE html>
<html lang="en">

<head>

<?php $this->load->view("register/part/head.php") ?>

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
              </div>
              <form class="user" action="<?php base_url('Register') ?>" method="post" enctype="multipart/form-data" >
                
                <div class="form-group">
                  <input type="nama" class="form-control form-control-user <?php echo form_error('nama') ? 'is-invalid':'' ?>r" name="nama" placeholder="Fullname">
                  <div class="invalid-feedback">
                  <?php echo form_error('nama') ?>
                </div>
                </div>

                <div class="form-group">
                  <input type="email" class="form-control form-control-user <?php echo form_error('email') ? 'is-invalid':'' ?>" name="email" placeholder="Email Address">
                  <div class="invalid-feedback">
                  <?php echo form_error('email') ?>
                </div>
                </div>
                
                <div class="form-group">
                  <input type="username" class="form-control form-control-user" name="username" placeholder="Username">
                  <div class="invalid-feedback">
                  <?php echo form_error('username') ?>
                </div>
                </div>
                
                <div class="form-group">
                    <input type="password" class="form-control form-control-user <?php echo form_error('password') ? 'is-invalid':'' ?>" name="password" placeholder="Password">
                    <div class="invalid-feedback">
                  <?php echo form_error('password') ?>
                </div>
                </div>
                <input class="btn btn-primary btn-user btn-block" type="submit" name="btn" value="Register Account">
                <hr>
              </form>
           
              <?php if ($this->session->flashdata('success')): ?>
                <div class="alert alert-success">
                <strong>Register Failed!</strong>
                <?php echo $this->session->flashdata('success'); ?>
                </div>
              <?php endif; ?>
              <div class="text-center">
                <a class="small" href="<?php echo site_url('Login') ?>">Already have an account? Login!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <?php $this->load->view("register/part/js.php") ?>

</body>

</html>
