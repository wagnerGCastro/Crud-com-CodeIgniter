<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<div class="col-md-9" style="border: 0px solid deeppink" >
    <main id="main" style="margin: 0px" >
        <section style="padding:0px 30px;">
            <?php  //echo '<pre>'; print_r($ws_users) ; echo '</pre>';
                if( $this->session->flashdata('deleteOk') != ''):
                    echo '<div class="alert alert-success alert-dismissible">';
                        echo '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>';
                        echo '<p> <strong>Successo!</strong> '. $this->session->flashdata('deleteOk') .'</p>';
                    echo '</div>';
                endif;
            ?>
            <header>
                <h2><?= 'Lista de Usuarios Cadastrados' ?></h2>
                <p> Subtítulo do artigo </p>
            </header>

            <div class="table-responsive">          
                <table id="table-users" class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>name</th>
                            <th>lastname</th>
                            <th>email</th>
                            <th>registration</th>
                            <th>lastupdate</th>
                            <th>level</th>
                            <th>Operacões</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php             
                            if( !empty($ws_users)):
                                foreach ($ws_users as $k => $v):
                                    echo "<tr>";
                                        echo "<td>{$v->id}</td>";
                                        echo "<td>{$v->name}</td>";
                                        echo "<td>{$v->lastname}</td>";
                                        echo "<td>{$v->email}</td>";
                                        echo "<td>{$v->registration}</td>";
                                        echo "<td>{$v->lastupdate}</td>";
                                        echo "<td>{$v->level}</td>";
                                        echo "<td>".anchor('crud/update/'.$v->id, '<i id="fa-edit-1" class="fa fa-2x fa-edit"></i>'). ' '.anchor('crud/delete/'.$v->id, '<i id="fa-trash-o-" class="fa fa-2x fa-trash-o"></i>')."</td>";
                                    echo "</tr>";
                                endforeach;
                            endif; 
                        ?>
                    </tbody>
                </table>
            </div>
        </section>
    </main>
</div>

