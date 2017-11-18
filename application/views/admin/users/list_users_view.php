<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<div class="row">
    <div class="col-xs-12">   
        <div class="x_panel">
            <div class="x_title">   
                <h2>Usuários</h2>
                <a href="<?php echo site_url('admin/users/create');?>" class="btn btn-sm btn-success pull-right" title="Novo"><span class="fa fa-plus"></span> Novo</a>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <?php
                    if(!empty($users)) {
                        echo '<div class="table-responsive">';
                            echo '<table class="table">';
                                echo '<thead>';    
                                    echo '<tr>';
                                        echo '<th>Nome</th>';
                                        echo '<th>Descrição</th>';
                                        echo '<th></th>';
                                    echo '</tr>';
                                echo '</thead>';        
                        foreach($users as $u){
                            echo '<tr>';
                            echo '<td>'.$u->username.'</td><td>'.$u->email.'</td><td>'.anchor('admin/users/edit/'.$u->id,'<span class="fa fa-pencil"></span>',array('class'=>'btn btn-info btn-sm','title'=>'Editar'));
                            if(!in_array($u->username, array('administrator'))) echo ' '.anchor('admin/users/delete/'.$u->id,'<span class="fa fa-times"></span>',array('class'=>'btn btn-danger btn-sm','title'=>'Remover'));
                            echo '</td>';
                            echo '</tr>';
                        }
                                echo '</tbody>';
                            echo '</table>';
                        echo '</div>';
                    }
                ?>
            </div>
        </div>
    </div>
</div>