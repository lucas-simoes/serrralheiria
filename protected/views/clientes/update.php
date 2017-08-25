<?php
$this->breadcrumbs=array(
	'Clientes'=>array('index'),
	$model->clientesId=>array('view','id'=>$model->clientesId),
	'Update',
);
?>

<h1>Editar Cadastro # <?php echo $model->nome; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>