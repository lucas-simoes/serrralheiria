<?php
$this->breadcrumbs=array(
	'Usuarioses'=>array('index'),
	'Create',
);
?>

<h1>Cadastro de Usuários</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>