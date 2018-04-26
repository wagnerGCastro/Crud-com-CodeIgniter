<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

<div class="col-md-9 col-md-offset-0">
    <main id="main" style="margin:0px;">
        <section  style="padding:0px 30px;">
            <header>
                <h2><?= 'CADASTRO DE USUÁRIO' ?></h2>
                <p> Criando Novo Usuário </p>
            </header>

            <?php
                if($this->session->flashdata('cadastro ok')): 
                    echo '<p>'. $this->session->flashdata('cadastro ok') .'</p>';
                endif;
            ?>
            <form class="form-horizontal" action="<?= $this->load->config->config['base_url'] ?>/crud/create" method="post">

                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <?=  validation_errors('<p style="background:#F4C0B1; padding:5px">', '</p>'); ?>
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label"> Nome</label>
                    <div class="col-sm-9">
                        <input type="text" name="name" value="<?=isset($_POST['name'])?$_POST['name']:''; ?>" class="form-control" id="inputEmail3" placeholder="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-3 control-label"> Sobre Nome</label>
                    <div class="col-sm-9">
                        <input type="text"  name="lastname"  value="<?=isset($_POST['lastname'])?$_POST['lastname']:''; ?>" class="form-control" id="inputPassword3" placeholder="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-3 control-label"> Email</label>
                    <div class="col-sm-9">
                        <input type="email"  name="email"  value="<?=isset($_POST['email'])?$_POST['email']:''; ?>" class="form-control" id="inputPassword3" placeholder="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-3 control-label"> Senha</label>
                    <div class="col-sm-9">
                        <input type="password"  name="password" value="<?=isset($_POST['password'])?$_POST['password']:''; ?>"  class="form-control" id="inputPassword3" placeholder="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-3 control-label"> Repita a senha</label>
                    <div class="col-sm-9">
                        <input type="password"  name="password2" value="<?=isset($_POST['password2'])?$_POST['password2']:''; ?>"  class="form-control" id="inputPassword3" placeholder="">
                    </div>
                </div>
            
                <!-- <input type="hidden"  name="registration" value="2018-04-21 09:14:11" class="form-control" id="inputPassword3" placeholder=""> 
                <input type="hidden"  name="lastupdate" value="2018-04-21 09:14:11" class="form-control" id="inputPassword3" placeholder=""> -->
               
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-3 control-label"> Nível</label>
                    <div class="col-sm-9">
                        <input type="text"  name="level" value="<?=isset($_POST['level'])?$_POST['level']:''; ?>"  class="form-control" id="inputPassword3" placeholder="">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-9">
                        <button type="submit" class="btn btn-default"> Cadastrar</button>
                    </div>
                </div>
            </form>

        </section>
    </main>
</div>

