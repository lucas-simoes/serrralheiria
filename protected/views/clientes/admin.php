<?php
$this->breadcrumbs=array(
	'Clientes'=>array('index'),
	'Manage',
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#clientes-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Clientes</h1>

<?php //echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'clientes-grid',
	'dataProvider'=>$model->search(),
	'columns'=>array(
		'clientesId',
		'nome',
		'endereco',
		'cidade',
		'estado',
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
                                'url'=>'Yii::app()->createUrl("clientes/delete", array("id"=>"$data->clientesId"))',
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
