<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
    <div class="col-md-12">     
        <h2 class="float-left">Grupos</h2>
        <a href="<?php echo site_url('admin/groups/create');?>" class="btn btn-primary float-right">Criar Grupo</a>
    </div>
    <div class="clearfix"></div>
    <div class="col-md-12  mt-4">
    <?php
        if(!empty($groups))
        {
        echo '<div class="table-responsive">';
            echo '<table class="table" width="100%" cellspacing="0">';
                echo '<thead class="thead-dark">';    
                    echo '<tr>';
                        echo '<th scope="col">Nome</th>';
                        echo '<th scope="col">Descrição</th>';
                        echo '<th scope="col"></th>';
                    echo '</tr>';
                echo '</thead>';        
        foreach($groups as $group)
        {
            echo '<tr>';
            echo '<td>'.$group->name.'</td><td>'.$group->description.'</td><td>'.anchor('admin/groups/edit/'.$group->id,'<span class="fa fa-pencil"></span>',array('class'=>'btn btn-info btn-sm'));
            if(!in_array($group->name, array('admin','members'))) echo ' '.anchor('admin/groups/delete/'.$group->id,'<span class="fa fa-times"></span>',array('class'=>'btn btn-danger btn-sm'));
            echo '</td>';
            echo '</tr>';
        }
                echo '</tbody>';
            echo '</table>';
        echo '</div>';
        }
    ?>
    </div>

