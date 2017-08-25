<?php
$this->breadcrumbs=array(
	'Materiaises'=>array('index'),
	$model->materiaisId=>array('view','id'=>$model->materiaisId),
	'Update',
);
?>

<h1>Editar <?php echo $model->nome; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>