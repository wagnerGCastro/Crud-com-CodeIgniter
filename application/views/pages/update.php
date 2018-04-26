<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

<div class="col-md-9" style="border: 0px solid deeppink" >
    <main id="main" style="margin:0px;">
        <section  style="padding:0px 30px;">
            <header>
                <h2><?=  'ATUALIZAÇÃO ' ?></h2>
                <p> Atualização de dados do usuário </p>
            </header>
            
            <?php
                if($this->session->flashdata('updateOk')):
                    echo '<div class="alert alert-success">';
                        echo '<p> <strong>Successo!</strong>'. $this->session->flashdata('updateOk') .'</p>';
                    echo '</div>';
                endif;

                if( !empty($ws_users)):
                    foreach ($ws_users->result() as $k => $v):
            ?>
                        <form class="form-horizontal" action="<?= $this->load->config->config['base_url'] ?>/crud/update/<?= $v->id?>" method="post">
                            <div class="form-group">
                                <div class="col-sm-8 col-sm-offset-3">
                                    <?=  validation_errors('<p style="background:#F4C0B1; padding:5px">', '</p>'); ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-sm-3 control-label"> Nome</label>
                                <div class="col-sm-8">
                                    <input type="text" name="name" value="<?= $v->name; ?>" class="form-control" id="" placeholder="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-sm-3 control-label"> Sobre Nome</label>
                                <div class="col-sm-8">
                                    <input type="text"  name="lastname"  value="<?= $v->lastname; ?>" class="form-control" id="" placeholder="">
                                </div>
                            </div>

                            <input type="hidden"  name="lastupdate" value="<?= date('Y-m-d H:i:s') ?>" class="form-control" id="" placeholder="">
               
                            <div class="form-group">
                                <label for="" class="col-sm-3 control-label"> Nível</label>
                                <div class="col-sm-8">
                                    <input type="text"  name="level" value="<?= $v->level; ?>"  class="form-control" id="" placeholder="">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-8">
                                    <button type="submit" class="btn btn-default"> Cadastrar</button>
                                </div>
                            </div>
                        </form>
            <?php   endforeach;
                else:
            ?>
                    <form class="form-horizontal" action="<?= $this->load->config->config['base_url'] ?>/crud/update/<?= $this->uri->segment(3)?>" method="post">

                        <div class="form-group">
                            <div class="col-sm-8 col-sm-offset-3">
                                <?=  validation_errors('<p style="background:#F4C0B1; padding:5px">', '</p>'); ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-sm-3 control-label"> Nome</label>
                            <div class="col-sm-9">
                                <input type="text" name="name" value="<?= isset($_POST['name']) ? $_POST['name'] : ''; ?>" class="form-control" id="" placeholder="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-3 control-label"> Sobre Nome</label>
                            <div class="col-sm-9">
                                <input type="text"  name="lastname"  value="<?= isset($_POST['lastname']) ? $_POST['lastname'] : ''; ?>" class="form-control" id="" placeholder="">
                            </div>
                        </div>

                        <input type="hidden"  name="lastupdate" value="<?= date('Y-m-d H:i:s') ?>" class="form-control" id="" placeholder="">
              
                        <div class="form-group">
                            <label for="" class="col-sm-3 control-label"> Nível</label>
                            <div class="col-sm-9">
                                <input type="text"  name="level" value="<?= isset($_POST['level']) ? $_POST['level'] : ''; ?>"  class="form-control" id="" placeholder="">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-default"> Cadastrar</button>
                            </div>
                        </div>
                    </form>
                <?php endif; ?>
        </section>
    </main>
</div>

