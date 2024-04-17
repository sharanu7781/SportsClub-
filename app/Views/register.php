<!DOCTYPE html>
<html lang="en">


<!-- auth-register.html  21 Nov 2019 04:05:01 GMT -->
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Otika - Admin Dashboard Template</title>
  <!-- General CSS Files -->

  <link rel="stylesheet" href="<?=base_url(); ?>assets/css/app.min.css">
  <link rel="stylesheet" href="<?=base_url(); ?>assets/bundles/jquery-selectric/selectric.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="<?=base_url(); ?>assets/css/style.css">
  <link rel="stylesheet" href="<?=base_url(); ?>assets/css/components.css">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="<?=base_url(); ?>assets/css/custom.css">
  <link rel='shortcut icon' type='image/x-icon' href='assets/img/favicon.ico' />
</head>

<body>
<!-- In your view file (e.g., your view for the admin dashboard) -->
<div class="flash-messages" style="position: fixed; bottom: 10px; right: 10px; z-index: 1000;">
    <?php if (session()->has('success')): ?>
        <div class="alert alert-success" role="alert">
            <?= session('success') ?>
        </div>
    <?php endif; ?>

    <?php if (session()->has('error')): ?>
        <div class="alert alert-danger" role="alert">
            <?= session('error') ?>
        </div>
    <?php endif; ?>
</div>

  <div class="loader"></div>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
            <div class="card card-primary">
              <div class="card-header">
                <h4>Register</h4>
              </div>
              <div class="card-body">
                <form method="POST" id="register_form">
                  <div class="row">
                    <div class="form-group col-6">
                      <label for="first_name">First Name</label>
                      <input type="hidden" class="form-control" name="id" >

                      <input id="first_name" type="text" class="form-control" name="first_name" autofocus>
                    </div>
                    <div class="form-group col-6">
                      <label for="last_name">Last Name</label>
                      <input id="last_name" type="text" class="form-control" name="last_name">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" type="email" class="form-control" name="email">
                    <div class="invalid-feedback">
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-6">
                      <label for="password" class="d-block">Password</label>
                      <input id="password" type="password" class="form-control pwstrength" data-indicator="pwindicator"
                        name="password">
                      <div id="pwindicator" class="pwindicator">
                        <div class="bar"></div>
                        <div class="label"></div>
                      </div>
                    </div>
                    <div class="form-group col-6">
                      <label for="passwordconfirm" class="d-block">Password Confirmation</label>
                      <input id="passwordconfirm" type="password" class="form-control" name="passwordconfirm">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="agree" class="custom-control-input" id="agree" value="Yes">
                      <label class="custom-control-label" for="agree">I agree with the terms and conditions</label><br>
                      <label id="agree-error" class="error" for="agree"></label>
                    </div>
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" name="submit" value="submit">
                      Register
                    </button>
                  </div>
                </form>
              </div>
              <div class="mb-4 text-muted text-center">
                Already Registered? <a href="<?=base_url(); ?>auth-login.html">Login</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- General JS Scripts -->
  <script src="<?=base_url(); ?>assets/js/app.min.js"></script>
  <!-- JS Libraies -->
  <script src="<?=base_url(); ?>assets/bundles/jquery-pwstrength/jquery.pwstrength.min.js"></script>
  <script src="<?=base_url(); ?>assets/bundles/jquery-selectric/jquery.selectric.min.js"></script>
  <script src="<?php echo base_url() ?>assets/js/jquery.validate.min.js"></script>

  <!-- Page Specific JS File -->
  <script src="<?=base_url(); ?>assets/js/page/auth-register.js"></script>
  <!-- Template JS File -->
  <script src="<?=base_url(); ?>assets/js/scripts.js"></script>
  <!-- Custom JS File -->
  <script src="<?=base_url(); ?>assets/js/custom.js"></script>  
  <script>
    
  </script>
</body>


<!-- auth-register.html  21 Nov 2019 04:05:02 GMT -->
</html>