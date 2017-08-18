<?php
$this->breadcrumbs=array(
	'Materiaises'=>array('index'),
	$model->materiaisId=>array('view','id'=>$model->materiaisId),
	'Update',
);

$this->menu=array(
	array('label'=>'List materiais', 'url'=>array('index')),
	array('label'=>'Create materiais', 'url'=>array('create')),
	array('label'=>'View materiais', 'url'=>array('view', 'id'=>$model->materiaisId)),
	array('label'=>'Manage materiais', 'url'=>array('admin')),
);
?>

<h1>Update materiais <?php echo $model->materiaisId; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>