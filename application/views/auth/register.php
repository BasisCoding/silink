<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="viho admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
  <meta name="keywords" content="admin template, viho admin template, dashboard template, flat admin template, responsive admin template, web app">
  <meta name="author" content="pixelstrap">
  <link rel="icon" href="<?= site_url('assets/images/favicon.png') ?>" type="image/x-icon">
  <link rel="shortcut icon" href="<?= site_url('assets/images/favicon.png') ?>" type="image/x-icon">
  <title>Register Page</title>
  <!-- Google font-->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
  <!-- Font Awesome-->
  <link rel="stylesheet" type="text/css" href="<?= site_url('assets/css/fontawesome.css') ?>">
  <!-- ico-font-->
  <link rel="stylesheet" type="text/css" href="<?= site_url('assets/css/icofont.css') ?>">
  <!-- Themify icon-->
  <link rel="stylesheet" type="text/css" href="<?= site_url('assets/css/themify.css') ?>">
  <!-- Flag icon-->
  <link rel="stylesheet" type="text/css" href="<?= site_url('assets/css/flag-icon.css') ?>">
  <!-- Feather icon-->
  <link rel="stylesheet" type="text/css" href="<?= site_url('assets/css/feather-icon.css') ?>">
  <!-- Plugins css start-->
  <!-- Plugins css Ends-->
  <!-- Bootstrap css-->
  <link rel="stylesheet" type="text/css" href="<?= site_url('assets/css/bootstrap.css') ?>">
  <!-- App css-->
  <link rel="stylesheet" type="text/css" href="<?= site_url('assets/css/style.css') ?>">
  <link id="color" rel="stylesheet" href="<?= site_url('assets/css/color-1.css') ?>" media="screen">
  <!-- Responsive css-->
  <link rel="stylesheet" type="text/css" href="<?= site_url('assets/css/responsive.css') ?>">
  <script type="text/javascript">
    var base_url = '<?= base_url() ?>';
  </script>
</head>
<body>
  <!-- Loader starts-->
  <div class="loader-wrapper">
    <div class="theme-loader">    
      <div class="loader-p"></div>
    </div>
  </div>
  <!-- Loader ends-->
  <!-- page-wrapper Start-->
  <section>         
    <div class="container-fluid p-0"> 
      <div class="row m-0">
        <div class="col-xl-7 p-0"><img class="bg-img-cover bg-center" src="<?= site_url('assets/images/login/1.jpg') ?>" alt="looginpage"></div>
        <div class="col-xl-5 p-0"> 
          <div class="login-card">
            <form class="theme-form login-form" method="POST" id="form-register">
              <h4>Create your account</h4>
              <h6>Enter your personal details to create account</h6>
              <div class="form-group">
                <label>Nama Lengkap</label>
                <div class="small-group">
                  <div class="input-group"><span class="input-group-text"><i class="icon-user"></i></span>
                    <input class="form-control" type="text" name="nama_lengkap" required="" placeholder="Nama Lengkap">
                  </div>
                </div>
                <div class="invalid-feedback-nama_lengkap"></div>
              </div>

              <div class="form-group">
                <label>Username</label>
                <div class="small-group">
                  <div class="input-group"><span class="input-group-text"><i class="icon-user"></i></span>
                    <input class="form-control" type="text" name="username" required="" placeholder="Username">
                  </div>
                </div>
                <div class="invalid-feedback-username"></div>
              </div>

              <div class="form-group">
                <label>Email</label>
                <div class="input-group"><span class="input-group-text"><i class="icon-email"></i></span>
                  <input class="form-control" type="email" name="email" required="" placeholder="Test@gmail.com">
                </div>
                <div class="invalid-feedback-email"></div>
              </div>

              <div class="form-group">
                <label>Password</label>
                <div class="input-group"><span class="input-group-text"><i class="icon-lock"></i></span>
                  <input class="form-control" type="password" name="password" required="" placeholder="*********">
                  <div class="show-hide">
                    <span class="show"></span>
                  </div>
                </div>
                <div class="invalid-feedback-password"></div>
              </div>

              <div class="form-group">
                <label>Konfirmasi Password</label>
                <div class="input-group"><span class="input-group-text"><i class="icon-lock"></i></span>
                  <input class="form-control" type="password" name="password_confirmation" required="" placeholder="*********">
                  <div class="show-hide">
                    <span class="show"></span>
                  </div>
                </div>
                <div class="invalid-feedback-password_confirmation"></div>
              </div>

              <div class="form-group">
                <div class="checkbox">
                  <input id="checkbox1" type="checkbox" required="">
                  <label class="text-muted" for="checkbox1">Agree with <span>Privacy Policy</span></label>
                </div>
              </div>
              <div class="form-group">
                <button class="btn btn-primary btn-block" type="submit">Create Account</button>
              </div>
              <!-- <div class="login-social-title">                
                <h5>Sign in with</h5>
              </div>
              <div class="form-group">
                <ul class="login-social">
                  <li><a href="https://www.linkedin.com/login" target="_blank"><i data-feather="linkedin"></i></a></li>
                  <li><a href="https://www.linkedin.com/login" target="_blank"><i data-feather="twitter"></i></a></li>
                  <li><a href="https://www.linkedin.com/login" target="_blank"><i data-feather="facebook"></i></a></li>
                  <li><a href="https://www.instagram.com/login" target="_blank"><i data-feather="instagram">                  </i></a></li>
                </ul>
              </div> -->
              <p>Already have an account?<a class="ms-2" href="<?= base_url('login') ?>">Sign in</a></p>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- page-wrapper end-->
  <!-- latest jquery-->
  <script src="<?= site_url('assets/js/jquery-3.5.1.min.js') ?>"></script>
  <!-- feather icon js-->
  <script src="<?= site_url('assets/js/icons/feather-icon/feather.min.js') ?>"></script>
  <script src="<?= site_url('assets/js/icons/feather-icon/feather-icon.js') ?>"></script>
  <script src="<?= site_url('assets/js/config.js') ?>"></script>
  <!-- Bootstrap js-->
  <script src="<?= site_url('assets/js/bootstrap/popper.min.js') ?>"></script>
  <script src="<?= site_url('assets/js/bootstrap/bootstrap.min.js') ?>"></script>
  <!-- Plugins JS start-->
  <script src="<?= site_url('assets/js/notify/bootstrap-notify.min.js') ?>"></script>
  <!-- Plugins JS Ends-->
  <!-- Theme js-->
  <script src="<?= site_url('assets/js/script.js') ?>"></script>
  <!-- login js-->

  <script src="<?= site_url('assets/js/pagejs/'.$pagejs) ?>"></script>

  <!-- Plugin used-->
</body>
</html>