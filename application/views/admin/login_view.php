<div class="card card-login mx-auto mt-5">
      <div class="card-header">Login</div>
      <?php echo $this->session->flashdata('message');?>
      <div class="card-body">
      <?php echo form_open('');?>
          <div class="form-group">
            <?php echo form_label('Email','identity');?>
            <?php echo form_input('identity','','class="form-control"');?>
          </div>
          <div class="form-group">
            <?php echo form_label('Senha','password');?>
            <?php echo form_error('password');?>
            <?php echo form_password('password','','class="form-control"');?>
          </div>
          <div class="form-group">
            <div class="form-check">
              <label class="form-check-label">
              <?php echo form_checkbox('remember','1',FALSE);?> Lembrar Senha?</label>
            </div>
          </div>
          <?php echo form_submit('submit', 'Entrar', 'class="btn btn-primary btn-block"');?>
        <?php echo form_close();?>
      </div>
    </div>