<?php
$this->breadcrumbs=array(
	'Materiaises'=>array('index'),
	'Manage',
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#materiais-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Materiais</h1>

<?php //echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'materiais-grid',
	'dataProvider'=>$model->search(),
	'columns'=>array(
		'materiaisId',
		'nome',
		'unidade',
		'valor',
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
                                'url'=>'Yii::app()->createUrl("materiais/delete", array("id"=>"$data->materiaisId"))',
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
