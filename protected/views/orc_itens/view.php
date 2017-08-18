<?php
$this->breadcrumbs=array(
	'Orc Itens'=>array('index'),
	$model->itensId,
);

$this->menu=array(
	array('label'=>'List orc_itens', 'url'=>array('index')),
	array('label'=>'Create orc_itens', 'url'=>array('create')),
	array('label'=>'Update orc_itens', 'url'=>array('update', 'id'=>$model->itensId)),
	array('label'=>'Delete orc_itens', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->itensId),'confirm'=>Yii::t('zii','Are you sure you want to delete this item?'))),
	array('label'=>'Manage orc_itens', 'url'=>array('admin')),
);
?>

<h1>View orc_itens #<?php echo $model->itensId; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'itensId',
		'orcamentosId',
		'materiaisId',
		'quantidade',
		'valorUnitario',
		'valorTotal',
	),
)); ?>
