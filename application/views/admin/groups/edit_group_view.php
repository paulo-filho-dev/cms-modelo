<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="<?php echo site_url('admin/');?>">Dashboard</a>
    </li>
    <li class="breadcrumb-item">
        <a href="<?php echo site_url('admin/groups/');?>">Grupos</a>
    </li>
    <li class="breadcrumb-item active">Editar</li>
</ol>
<div class="col-md-6">
    <h2>Editar Grupo</h2>
    <?php echo form_open('',array('class'=>'form-horizontal'));?>
    <div class="form-group">
        <?php echo form_label('Nome','group_name');?>
        <?php echo form_error('group_name');?>
        <?php echo form_input('group_name',set_value('group_name',$group->name),'class="form-control"');?>
    </div>
    <div class="form-group">
        <?php echo form_label('Descrição','group_description');?>
        <?php echo form_error('group_description');?>
        <?php echo form_input('group_description',set_value('group_description',$group->description),'class="form-control"');?>
    </div>
    <?php echo form_hidden('group_id',set_value('group_id',$group->id));?>
    <?php echo form_submit('submit', 'Alterar', 'class="btn btn-primary pull-right"');?>
    <?php echo form_close();?>
</div>
    