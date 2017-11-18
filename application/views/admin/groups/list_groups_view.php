<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<div class="row">
    <div class="col-xs-12">   
        <div class="x_panel">
            <div class="x_title"> 
                <h2>Grupos</h2>               
                <a href="<?php echo site_url('admin/groups/create');?>" class="btn btn-success btn-sm pull-right" title="Novo"><span class="fa fa-plus"></span> Novo</a>                    
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
            <?php
                if(!empty($groups)){
                    echo '<div class="table-responsive">';
                        echo '<table class="table">';
                            echo '<thead>';    
                                echo '<tr>';
                                    echo '<th>Nome</th>';
                                    echo '<th>Descrição</th>';
                                    echo '<th></th>';
                                echo '</tr>';
                            echo '</thead>';        
                    foreach($groups as $group){
                        echo '<tr>';
                        echo '<td>'.$group->name.'</td><td>'.$group->description.'</td><td>'.anchor('admin/groups/edit/'.$group->id,'<span class="fa fa-pencil"></span>',array('class'=>'btn btn-info btn-sm','title'=>'Editar'));
                        if(!in_array($group->name, array('admin','membro'))) echo ' '.anchor('admin/groups/delete/'.$group->id,'<span class="fa fa-times"></span>',array('class'=>'btn btn-danger btn-sm','title'=>'Remover'));
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