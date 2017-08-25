<?php
$this->breadcrumbs=array(
	'Usuarioses'=>array('index'),
	'Manage',
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#usuarios-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Usuários</h1>

<?php //echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'usuarios-grid',
	'dataProvider'=>$model->search(),
	'columns'=>array(
		'usuariosId',
		'nome',
		'login',
		'email',
		'telefone',
		array(
			'class'=>'CButtonColumn',
                        'template'=>'{update}{deletar}',
                        'updateButtonLabel' => '<i class="fa fa-eye"></i>',
                        'updateButtonImageUrl'=> false,
                        'deleteButtonLabel' => '<i class="fa fa-trash"></i>',
                        'deleteButtonImageUrl'=> false,
                        'buttons' => array (
                            'update' => array(
                                'options'=>array('title'=>'Ver Cadastro', 'class'=>'btn btn-default' ),
                            ),
                            'deletar' => array(
                                'label'=>'<i class="fa fa-trash"></i>',
                                'url'=>'Yii::app()->createUrl("usuarios/delete", array("id"=>"$data->usuariosId"))',
                                'options'=>array('title'=>'Excluir', 'class'=>'btn btn-default' ),
                            ),
                        ),
		),
	),
        'htmlOptions'=>array('class'=>'table table-responsive'),
        'itemsCssClass' => 'table table-hover',
        'pagerCssClass' => 'text-center',
        'pager' => array(
            'htmlOptions'=> array('class'=>'pagination'),
            'header'=>'',
            ),
)); ?>
