<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Book Author | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?=base_url();?>assets/dashboard/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?=base_url();?>assets/dashboard/css/bootstrap-select.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?=base_url();?>assets/dashboard/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?=base_url();?>assets/dashboard/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=base_url();?>assets/dashboard/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?=base_url();?>assets/dashboard/css/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="#"><b>Book</b>Author</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">
            <?php if($this->session->flashdata('loginerror')): ?>
              <div class="alert alert-danger"><a class="close" data-dismiss="alert">x</a><strong><?php echo $this->session->flashdata('loginerror'); ?></strong></div>
            <?php endif; ?>
            <?php echo validation_errors('<div class="alert alert-danger"><a class="close" data-dismiss="alert">x</a><strong>', '</strong></div>');?>
    </p>

    <?php echo form_open('login/book_author');?>
      
       <div class="form-group has-feedback">
        <input type="email" name="your_email" class="form-control" placeholder="Author Email" required value="<?=set_value('your_email');?>">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="your_password" class="form-control" placeholder="Password" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    <?php echo form_close();?>

   
    <!-- /.social-auth-links -->

    <a href="#">I forgot my password</a><br>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="<?=base_url();?>assets/dashboard/js/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?=base_url();?>assets/dashboard/js/bootstrap.min.js"></script>
<script src="<?=base_url();?>assets/dashboard/js/bootstrap-select.js"></script>
<!-- iCheck -->

</body>
</html>
