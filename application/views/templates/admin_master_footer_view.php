        
    </div>
    <?php
    if($this->ion_auth->logged_in()) {
    ?>
    
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Your Website </small>
        </div>
      </div>
    </footer>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Pronto para sair?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Selecione "Sair" abaixo se você estiver pronto para terminar sua sessão atual.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
            <a class="btn btn-primary" href="<?php echo site_url('admin/user/logout');?>">Sair</a>
          </div>
        </div>
      </div>
    </div>
    <?php
    }?>
    <?php echo $before_body;?>

    <script src="<?php echo base_url('assets/admin/vendor/jquery/jquery.min.js')?>"></script>
    <script src="<?php echo base_url('assets/admin/vendor/popper/popper.min.js')?>"></script>
    <script src="<?php echo base_url('assets/admin/vendor/bootstrap/js/bootstrap.min.js')?>"></script>
    <script src="<?php echo base_url('assets/admin/vendor/jquery-easing/jquery.easing.min.js')?>"></script>
    <script src="<?php echo base_url('assets/admin/vendor/chart.js/Chart.min.js')?>"></script>
    <script src="<?php echo base_url('assets/admin/vendor/datatables/jquery.dataTables.js')?>"></script>
    <script src="<?php echo base_url('assets/admin/vendor/datatables/dataTables.bootstrap4.js')?>"></script>
    <script src="<?php echo base_url('assets/admin/js/sb-admin.min.js')?>"></script>
    <script src="<?php echo base_url('assets/admin/js/sb-admin-datatables.min.js')?>"></script>
    <script src="<?php echo base_url('assets/admin/js/sb-admin-charts.min.js')?>"></script>
</body>

</html>