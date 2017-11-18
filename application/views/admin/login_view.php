<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title><?php echo $page_title;?></title>
    <?php echo $before_head;?>

    <link href="<?php echo base_url('assets/admin/vendor/css/bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/admin/vendor/fonts/css/font-awesome.min.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/admin/vendor/css/animate.min.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/admin/vendor/css/pnotify.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/admin/vendor/css/pnotify.buttons.css')?>" rel="stylesheet">
    
    <!--Ultimo -->
    <link href="<?php echo base_url('assets/admin/vendor/css/custom.min.css')?>" rel="stylesheet">
    <!--[if lt IE 9]>
        <script src="../assets/js/ie8-responsive-file-warning.js"></script>
    <![endif]-->
        
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body class="login">
    <div>
      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
              <?php echo form_open('');?>
                <h1>Login Form</h1>
                <div>
                  <?php echo form_input('identity','','class="form-control"  placeholder="Email"');?>
                </div>
                <div>
                  <?php echo form_password('password','','class="form-control" placeholder="Senha"');?>
                </div>
                <div>
                  <?php echo form_submit('submit', 'Entrar', 'class="btn btn-default submit pull-right"');?>
                </div>
                <div class="clearfix"></div>

                <div class="separator">
                  <div class="clearfix"></div>
                  <br />
                  <div>
                    <p>©<?php echo date('Y')?> All Rights Reserved</p>
                  </div>
                </div>
              <?php echo form_close();?>             
          </section>
        </div>
      </div>
    </div>
    <script src="<?php echo base_url('assets/admin/vendor/js/jquery.min.js')?>"></script>
    <script src="<?php echo base_url('assets/admin/vendor/js/bootstrap.min.js')?>"></script>
    <script src="<?php echo base_url('assets/admin/vendor/js/pnotify.js')?>"></script>
    <script src="<?php echo base_url('assets/admin/vendor/js/pnotify.buttons.js')?>"></script>
    <script>
    <?php 
      if(form_error('password') != '' || form_error('identity') != '' || $this->session->flashdata('message')){?>
        new PNotify({
          title: 'Ah Não!',
          text: 'Email ou Senha inválido!',
          type: 'error',
          styling: 'bootstrap3'
        });
     <?php }  ?>
      
    </script>
  </body>
</html>