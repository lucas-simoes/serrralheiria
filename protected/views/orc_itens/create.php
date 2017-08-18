<?php
$this->breadcrumbs=array(
	'Orc Itens'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List orc_itens', 'url'=>array('index')),
	array('label'=>'Manage orc_itens', 'url'=>array('admin')),
);
?>

<h1>Create orc_itens</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>