<?php
$this->breadcrumbs=array(
	'Usuarioses'=>array('index'),
	$model->usuariosId,
);

$this->menu=array(
	array('label'=>'List usuarios', 'url'=>array('index')),
	array('label'=>'Create usuarios', 'url'=>array('create')),
	array('label'=>'Update usuarios', 'url'=>array('update', 'id'=>$model->usuariosId)),
	array('label'=>'Delete usuarios', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->usuariosId),'confirm'=>Yii::t('zii','Are you sure you want to delete this item?'))),
	array('label'=>'Manage usuarios', 'url'=>array('admin')),
);
?>

<h1>View usuarios #<?php echo $model->usuariosId; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'usuariosId',
		'nome',
		'login',
		'senha',
		'email',
		'telefone',
	),
)); ?>
