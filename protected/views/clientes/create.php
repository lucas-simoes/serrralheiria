<?php
$this->breadcrumbs=array(
	'Clientes'=>array('index'),
	'Create',
);
?>

<h1>Cadastrar Cliente</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>