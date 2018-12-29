<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Admin Login | DSS - Trial </title>

    <!-- Bootstrap -->
    <link href="<?php echo e(asset('asset/vendors/bootstrap/dist/css/bootstrap.min.css')); ?>" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo e(asset('asset/vendors/font-awesome/css/font-awesome.min.css')); ?>" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo e(asset('asset/vendors/nprogress/nprogress.css')); ?>" rel="stylesheet">
    <!-- Animate.css -->
    <link href="<?php echo e(asset('asset/vendors/animate.css/animate.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('asset/vendors/select2/dist/css/select2.min.css')); ?>" rel="stylesheet" type="text/css">
    <!-- Custom Theme Style -->
    <link href="<?php echo e(asset('asset/build/css/custom.min.css')); ?>" rel="stylesheet">
  </head>

  <body class="login">
    <script src="<?php echo e(asset('asset/vendors/jquery/dist/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('asset/vendors/select2/dist/js/select2.full.min.js')); ?>"></script>
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form method="POST" action="<?php echo e(route('login')); ?>">
              <?php echo e(csrf_field()); ?>

              <h1>Login Form</h1>
              <div>
                <input type="email" class="form-control" name="email" placeholder="email" required="" value="<?php echo e(old('email')); ?>" />
                <?php if($errors->has('email')): ?>
                    <span class="help-block">
                        <strong><?php echo e($errors->first('email')); ?></strong>
                    </span>
                <?php endif; ?>
              </div>
              <div>
                <input type="password" class="form-control" name="password" placeholder="Password" required="" />
                <?php if($errors->has('email')): ?>
                   <span class="help-block">
                        <strong><?php echo e($errors->first('password')); ?></strong>
                    </span>
                <?php endif; ?>
              </div>
              <br>
              <div>
                <button class="btn btn-default" type="submit">Log In</button>
                <!-- <a class=" submit" href="index.html">Log in</a> -->
                <a class="reset_pass" href="#">Lost your password?</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">New to site?
                  <a href="#signup" class="to_register"> Create Account </a>
                </p>

                <div class="clearfix"></div>
                <br />
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
  <script type="text/javascript">
    $('select[name=thn]').select2();
  </script>
</html>
