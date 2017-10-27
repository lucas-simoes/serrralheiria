<?php
$this->breadcrumbs=array(
	'Orcamentoses'=>array('index'),
	'Manage',
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#orcamentos-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Orçamentos</h1>

<?php //echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'orcamentos-grid',
	'dataProvider'=>$model->search(),
	'columns'=>array(
		'orcamentosId',
                'nomeProduto',
		'nomeCliente',
		'telefoneCliente',
                array(
                    'name'=>'validade',
                    'value'=>'date("d/m/Y", strtotime($data->validade))'
                ),
		'valorMaterial',
		'valorMO',
		'valorTotal',
		array(
			'class'=>'CButtonColumn',
                        'template'=>'{update}',
                        'updateButtonLabel' => '<i class="fa fa-eye"></i>',
                        'updateButtonImageUrl'=> false,
                        'buttons' => array (
                            'update' => array(
                                'options'=>array('title'=>'Ver Orçamento', 'class'=>'btn btn-default' ),
                            ),
                        ),
		),
	),
        'htmlOptions'=>array('class'=>'table table-responsive'),
        'itemsCssClass' => 'table table-hover',
        'pagerCssClass' => 'text-center',
        'pager' => array(
            'htmlOptions'=> array('class'=>'pagination'),
            'header'=>'',
            ),
)); ?>
