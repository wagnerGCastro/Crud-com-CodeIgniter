<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<div class="col-md-3" ">
    <aside id="aside">
        <nav>
            <ul class="nav nav-pills nav-stacked" style="">
                <li class="<?= ($this->uri->segment(2) == 'create' ? 'active' : '') ?>"><?= anchor('crud/create', '<i class="fa  fa-th-large  fa-fw"> </i> Cadastrar'); ?></li>
                <li class="<?= ($this->uri->segment(2) == 'index' ? 'active' : '') ?>"><?= anchor('crud/index', '<i class="fa fa-th-list  "></i> Lista de Usuários'); ?></li>
            </ul>
        </nav>
    </aside>
</div>
