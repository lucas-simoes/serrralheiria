<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Painel <small>Estatísticas</small>
        </h1>
        <ol class="breadcrumb">
            <li class="active">
                <i class="fa fa-dashboard"></i> Dashboard
            </li>
        </ol>
    </div>
</div>
<!-- /.row -->

<div class="row">
    <!-- Clientes Cadastrados! -->
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-university fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge"></div>
                        <div>Clientes Cadastrados!</div>
                    </div>
                </div>
            </div>
            <a href="">
                <div class="panel-footer">
                    <span class="pull-left">Detalhes</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    
    <!-- Clientes na Versão Beta -->
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-red">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-code-fork fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge"></div>
                        <div></div>
                    </div>
                </div>
            </div>
            <a href="">
                <div class="panel-footer">
                    <span class="pull-left">Detalhes</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    
    <!-- Clientes na Versão Atual -->
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-green">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-file-archive-o fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge"></div>
                        <div></div>
                    </div>
                </div>
            </div>
            <a href="">
                <div class="panel-footer">
                    <span class="pull-left">Detalhes</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
</div>
