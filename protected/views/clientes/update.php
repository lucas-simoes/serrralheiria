<?php
$this->breadcrumbs=array(
	'Clientes'=>array('index'),
	$model->clientesId=>array('view','id'=>$model->clientesId),
	'Update',
);

$this->menu=array(
	array('label'=>'List clientes', 'url'=>array('index')),
	array('label'=>'Create clientes', 'url'=>array('create')),
	array('label'=>'View clientes', 'url'=>array('view', 'id'=>$model->clientesId)),
	array('label'=>'Manage clientes', 'url'=>array('admin')),
);
?>

<h1>Update clientes <?php echo $model->clientesId; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>