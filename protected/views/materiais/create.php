<?php
$this->breadcrumbs=array(
	'Materiaises'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List materiais', 'url'=>array('index')),
	array('label'=>'Manage materiais', 'url'=>array('admin')),
);
?>

<h1>Create materiais</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>