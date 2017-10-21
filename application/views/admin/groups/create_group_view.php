<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="<?php echo site_url('admin/');?>">Dashboard</a>
    </li>
    <li class="breadcrumb-item">
        <a href="<?php echo site_url('admin/groups/');?>">Grupos</a>
    </li>
    <li class="breadcrumb-item active">Criar Grupo</li>
</ol>
<div class="col-md-6">
    <h2>Criar Grupo</h2>
    <?php echo $this->session->flashdata('message');?>
    <?php echo form_open('',array('class'=>'form-horizontal'));?>
    <div class="form-group ">
        <?php echo form_label('Nome','group_name');?>
        <?php echo form_error('group_name');?>
        <?php echo form_input('group_name','','class="form-control"');?>
    </div>
    <div class="form-group">
        <?php echo form_label('Descrição','group_description');?>
        <?php echo form_error('group_description');?>
        <?php echo form_input('group_description','','class="form-control"');?>
    </div>
    <?php echo form_submit('submit', 'Salvar', 'class="btn btn-primary pull-right"');?>
    <?php echo form_close();?>
</div>