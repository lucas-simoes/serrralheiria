<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'orcamentos-form',
	'enableAjaxValidation'=>false,
)); ?>

	<?php echo $form->errorSummary($model); ?>
    
        <?php
            echo CHtml::hiddenField('psedoMat', 0, array('id'=>'pMat'));
        ?>

	<div class="form-group row">
            <div class="col-md-6">
		<?php echo $form->labelEx($model,'clientesId'); ?>
		<?php echo $form->dropdownList($model,'clientesId', CHtml::listData(clientes::model()->findAll(), 'clientesId', 'nome'), array('class'=>'form-control', 'empty'=>'')); ?>
		<?php echo $form->error($model,'clientesId'); ?>
            </div>
	
            <div class="col-md-6">
                <?php echo $form->labelEx($model,'telefoneCliente'); ?>
                <?php echo $form->textField($model,'telefoneCliente',array('size'=>20,'maxlength'=>20, 'class'=>'form-control')); ?>
                <?php echo $form->error($model,'telefoneCliente'); ?>
            </div>
	</div>
    
        <div class="form-group row">
            <div class="col-md-4">
                <?php echo $form->labelEx($model,'validade'); ?>
                <?php echo $form->dateField($model,'validade', array('class'=>'form-control')); ?>
                <?php echo $form->error($model,'validade'); ?>
            </div>
        
            <div class="col-md-4">
		<?php echo $form->labelEx($model,'valorMO'); ?>
		<?php echo $form->textField($model,'valorMO', array('class'=>'money form-control', 'id'=>'mo')); ?>
		<?php echo $form->error($model,'valorMO'); ?>
            </div>
	
            <div class="col-md-4">
		<?php echo $form->labelEx($model,'valorTotal'); ?>
		<?php echo $form->textField($model,'valorTotal', array('class'=>'money form-control', 'readonly'=>TRUE, 'id'=>'vTotal')); ?>
		<?php echo $form->error($model,'valorTotal'); ?>
            </div>
	</div>
    
    <hr>

    <h3>Materiais</h3>
    
    <div class="form-group row">
        <div class="col-md-8">
            <?php echo CHtml::dropDownList('materiaisId', '', CHtml::listData(materiais::model()->findAll(), 'materiaisId', 'nome'), array('class'=>'form-control', 'id'=>'material', 'empty'=>'')); ?>
        </div>
        
        <div class="col-md-2">
            <?php echo CHtml::textField('qtd', '', array('class'=>'money form-control', 'id'=>'qtd')); ?>
        </div>
        
        <div class="col-md-2">
            <?php //echo CHtml::ajaxButton('Inserir no Orçamento', '', array(), array('class'=>'btn btn-primary')); ?>
            <?php echo CHtml::ajaxLink("Inserir no Orçamento", $this->createUrl('orcamentos/additem'), array(
                "type" => "post",
                "data" => 'js:{materiaisId : document.getElementById("material").value,"quantidade": document.getElementById("qtd").value}',
                "success" => 'confirmation' ),array(
                'class' => 'btn btn-primary', 'onclick'=>'loading()', 'id'=>'btnGerar'
                )
                );  ?> 
        </div>
    </div>
    
        <?php $this->widget('zii.widgets.grid.CGridView', array(
            'id'=>'orcamentos-grid',
            'dataProvider'=>$_SESSION['provider'],
            'columns'=>array(
                    array(
                        'name'=>'Codigo',
                        'value'=>'$data->materiaisId'
                    ),
                    array(
                        'name'=>'materiais.nome',
                        'value'=>'$data->materiais.nome'
                    ),
                    array(
                        'name'=>'quantidade',
                        'value'=>'$data->quantidade'
                    ),
                    array(
                        'name'=>'valorUn',
                        'value'=>'$data->valorUn'
                    ),
                    array(
                        'name'=>'valorTotal',
                        'value'=>'$data->valorTot'
                    ),
                    array(
                            'class'=>'CButtonColumn',
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

	<div class="row buttons">
            <div class="col-md-12">
		<?php echo CHtml::submitButton('Salvar', array('class'=>'btn btn-lg btn-primary')); ?>
            </div>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
<script>
    function loading() {
        document.getElementById('loading').style.display = 'block';
    }
    
    $('#mo').focusout(function() {
        valorMo = document.getElementById('mo');
        valorTot = document.getElementById('vTotal');
        pMat = document.getElementById('pMat');
        
        valorTot.value = parseFloat(pMat.value) + parseFloat(valorMo.value);
    })
    
    function confirmation() {
        document.getElementById('loading').style.display = 'none';
        
        document.getElementById('material').value = '';
        
        document.getElementById('qtd').value = '';
        
        //$.fn.yiiGridView.getChecked("clientes-grid","selectedIds").toString()
        
         $.fn.yiiGridView.update('orcamentos-grid');
    }
</script>
