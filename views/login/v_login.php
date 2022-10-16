<!doctype html>
<html lang="en">

<head>
    <link rel="icon" type="<?= base_url();?>image/jpg/png" href="<?= base_url();?>assets/img/logo.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Welcome To Sabatour</title>


    <!-- Bootstrap core CSS -->
    <link href="<?= base_url('assets/'); ?>dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body>
<section class="vh-100" style="background-color: #A6E3E9;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block">
              <img class="img-fluid mb-3 mb-lg-0" src="assets/img/bali2.jpeg" alt="..." class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">

              <form class="form-signin" action="<?= base_url('login/aksi_login'); ?>" method="post">

                  <div class="d-flex align-items-center mb-3 pb-1">
                    <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                    <img src="<?= base_url();?>assets/img/logoheader.png" width="130" height="35">
                  </div>

                  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h5>

                  <div class="form-outline mb-4">
                    <label class="form-label" for="inputEmail">Email</label>
                    <input type="email" name="username" class="form-control form-control-lg" />
                  </div>

                  <div class="form-outline mb-4">
                    <label class="form-label" for="inputPassword">Password</label>
                    <input type="password" name="password" class="form-control form-control-lg" />
                  </div>

                  <div class="pt-1 mb-4">
                  <button class="btn btn-lg btn-primary btn-block" value="Login " type="submit">Login</button>
                  </div>

                  <a class="small text-muted" href="#!">Forgot password?</a>
                  <p class="mb-5 pb-lg-2" style="color: #563d7c;">Don't have an account? 
                  <a href="<?= base_url();?>user/tambah">Registration<div class="col-md-5">
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>


</html>