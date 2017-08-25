<?php
$this->breadcrumbs=array(
	'Materiaises'=>array('index'),
	'Create',
);
?>

<h1>Novo Material</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>