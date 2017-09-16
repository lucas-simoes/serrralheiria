<?php

//var_dump($dp_itens);

Yii::app()->session->open();

$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'orcamentos-grid',
    'dataProvider' => Yii::app()->session['provider'],
    'ajaxUpdate' => true,
    'columns' => array(
        array(
            'name' => 'Código',
            'type'=> 'raw',
            'value' => 'CHtml::encode($data["materiaisId"])'
        ),
        /*array(
          'name'=>'Nome',
          'type'=> 'raw',      
          'value'=>'CHtml::encode($data["nome"])'
          ),*/
        array(
            'name' => 'Quantidade',
            'type' => 'raw',
            'value' => 'CHtml::encode($data["quantidade"])'
        ),
        array(
            'name' => 'Valor Unitario',
            'type'=> 'raw',
            'value' => 'CHtml::encode($data["valorUnitario"])'
        ),
        array(
            'name' => 'Valor Total',
            'type'=> 'raw',
            'value' => 'CHtml::encode($data["valorTotal"])'
        ),
    ),
    'htmlOptions' => array('class' => 'table table-responsive'),
    'itemsCssClass' => 'table table-hover',
    'pagerCssClass' => 'text-center',
    'pager' => array(
        'htmlOptions' => array('class' => 'pagination'),
        'header' => '',
    ),
));
?>