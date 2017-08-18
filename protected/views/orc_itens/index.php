<?php
$this->breadcrumbs=array(
	'Orc Itens',
);

$this->menu=array(
	array('label'=>'Create orc_itens', 'url'=>array('create')),
	array('label'=>'Manage orc_itens', 'url'=>array('admin')),
);
?>

<h1>Orc Itens</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
