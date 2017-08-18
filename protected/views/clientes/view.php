<?php
$this->breadcrumbs=array(
	'Clientes'=>array('index'),
	$model->clientesId,
);

$this->menu=array(
	array('label'=>'List clientes', 'url'=>array('index')),
	array('label'=>'Create clientes', 'url'=>array('create')),
	array('label'=>'Update clientes', 'url'=>array('update', 'id'=>$model->clientesId)),
	array('label'=>'Delete clientes', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->clientesId),'confirm'=>Yii::t('zii','Are you sure you want to delete this item?'))),
	array('label'=>'Manage clientes', 'url'=>array('admin')),
);
?>

<h1>View clientes #<?php echo $model->clientesId; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'clientesId',
		'nome',
		'endereco',
		'cidade',
		'estado',
		'email',
		'telefone',
	),
)); ?>
