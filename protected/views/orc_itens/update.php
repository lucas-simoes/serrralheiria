<?php
$this->breadcrumbs=array(
	'Orc Itens'=>array('index'),
	$model->itensId=>array('view','id'=>$model->itensId),
	'Update',
);

$this->menu=array(
	array('label'=>'List orc_itens', 'url'=>array('index')),
	array('label'=>'Create orc_itens', 'url'=>array('create')),
	array('label'=>'View orc_itens', 'url'=>array('view', 'id'=>$model->itensId)),
	array('label'=>'Manage orc_itens', 'url'=>array('admin')),
);
?>

<h1>Update orc_itens <?php echo $model->itensId; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>