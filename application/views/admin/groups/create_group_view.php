<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <ol class="breadcrumb" style="background:none;padding:8px 15px 8px 0">
                    <li class="breadcrumb-item">
                        <a href="<?php echo site_url('admin/');?>">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="<?php echo site_url('admin/groups/');?>">Grupos</a>
                    </li>
                    <li class="breadcrumb-item active">Adicionar Grupo</li>
                </ol>
                <h2>Adicionar Grupo</h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <br />
                <?php echo form_open('',array('class'=>'form-horizontal form-label-left'));?>
                    <div class="form-group ">
                        <?php echo form_label('Nome','group_name','class="control-label col-md-3 col-sm-3 col-xs-12"');?>
                        <?php echo form_error('group_name');?>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <?php echo form_input('group_name','','class="form-control col-md-7 col-xs-12"');?>
                        </div>
                    </div>
                    <div class="form-group">
                        <?php echo form_label('Descrição','group_description','class="control-label col-md-3 col-sm-3 col-xs-12"');?>
                        <?php echo form_error('group_description');?>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <?php echo form_input('group_description','','class="form-control col-md-7 col-xs-12"');?>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                            <?php echo form_submit('submit', 'Adicionar', 'class="btn btn-primary pull-right"');?>
                        </div>
                    </div>
                <?php echo form_close();?>
            </div>
        </div>
    </div>
</div>