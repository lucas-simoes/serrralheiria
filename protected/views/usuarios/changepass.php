<?php
$this->breadcrumbs=array(
	'Usuarioses'=>array('index'),
	$model->usuariosId=>array('view','id'=>$model->usuariosId),
	'Update',
);
?>

<h1>Editar Senha # <?php echo $model->nome; ?></h1>

<?php echo $this->renderPartial('_password', array('model'=>$model)); ?>