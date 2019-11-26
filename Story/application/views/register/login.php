<!DOCTYPE html>
<html lang="en">

<head>

<?php $this->load->view("register/part/head.php") ?>

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                  </div>
                  <form class="user" action="<?php site_url('Login') ?>" id="form1" name="form1" method="post">
                    <div class="form-group">
                      <input type="username" class="form-control form-control-user" id="username" name="username" placeholder="Username" required />
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password" required/>
                    </div>
                    <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" id="customCheck" value="remember-me">
                        <label class="custom-control-label" for="customCheck">Remember Me</label>
                      </div>
                    </div>
                    <text style="color:red"> 
                      <?php 
                        if(isset($_SESSION)) echo $this->session->flashdata('flash_data');
                      ?>
                    </text>
                    <button class="btn btn-lg btn-primary btn-block" type="submit" value="Login" name="login" id="login">Sign in</button>
                  </form>
                  <hr>
                 
                  <div class="text-center">
                    <a class="small" href="<?php echo site_url('Register') ?>">Create an Account!</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <script type="text/javascript">
  var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
  var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
  </script>
  
  <?php $this->load->view("register/part/js.php") ?>

</body>

</html>
