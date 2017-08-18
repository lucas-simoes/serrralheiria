<?php
$this->breadcrumbs=array(
	'Usuarioses'=>array('index'),
	$model->usuariosId=>array('view','id'=>$model->usuariosId),
	'Update',
);

$this->menu=array(
	array('label'=>'List usuarios', 'url'=>array('index')),
	array('label'=>'Create usuarios', 'url'=>array('create')),
	array('label'=>'View usuarios', 'url'=>array('view', 'id'=>$model->usuariosId)),
	array('label'=>'Manage usuarios', 'url'=>array('admin')),
);
?>

<h1>Update usuarios <?php echo $model->usuariosId; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>