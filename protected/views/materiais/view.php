<?php
$this->breadcrumbs=array(
	'Materiaises'=>array('index'),
	$model->materiaisId,
);

$this->menu=array(
	array('label'=>'List materiais', 'url'=>array('index')),
	array('label'=>'Create materiais', 'url'=>array('create')),
	array('label'=>'Update materiais', 'url'=>array('update', 'id'=>$model->materiaisId)),
	array('label'=>'Delete materiais', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->materiaisId),'confirm'=>Yii::t('zii','Are you sure you want to delete this item?'))),
	array('label'=>'Manage materiais', 'url'=>array('admin')),
);
?>

<h1>View materiais #<?php echo $model->materiaisId; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'materiaisId',
		'nome',
		'unidade',
		'valor',
	),
)); ?>
