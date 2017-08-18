<?php
$this->breadcrumbs=array(
	'Materiaises',
);

$this->menu=array(
	array('label'=>'Create materiais', 'url'=>array('create')),
	array('label'=>'Manage materiais', 'url'=>array('admin')),
);
?>

<h1>Materiaises</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
