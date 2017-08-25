<?php
$this->breadcrumbs=array(
	'Usuarioses'=>array('index'),
	$model->usuariosId=>array('view','id'=>$model->usuariosId),
	'Update',
);
?>

<h1>Editar Cadastro # <?php echo $model->nome; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>